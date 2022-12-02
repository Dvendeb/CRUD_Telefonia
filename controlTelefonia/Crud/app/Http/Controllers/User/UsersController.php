<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\cellphone;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    /* Funcion de insertar nuevo usuario*/
    protected function store(Request $data)
    {
        $data->validate( [
            'name' => ['required', 'string', 'max:255'],
            'role'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status'=>"active",
        ]);
        $user->assignRole($data['role']);
        event(new Registered($user));

        return view("registerUser",["status"=> "success", "msg"=> "¡El usuario se creo correctamente!"]);

    }
    public function showUsers(){
        $users=User::all()->where('status',"active");
        return view('users',["users"=>$users]);
    }

   public function edit(Request $data){

       $id=$data->input('idUser');
       $user=User::find($id);

       $user->name=$data->input('name');
       $user->email=$data->input('email');
       $role=$user->getRoleNames()->first();
       $user->removeRole($role);
       $user->assignRole($data->input('role'));
       $user->save();
       return view('notification',["status"=> "success", "msg"=> "¡El usuario se actualizo correctamente!"]);

   }

    public function deleteUser(Request $request){
        $user=User::find($request->input('idUser'));
        $user->status="ausent";
        $user->save();
        return view('notification',["status"=> "success", "msg"=> "¡El usuario se elimino correctamente!"]);
    }

    public function viewEditUser(Request $request){
        $userEdit=User::find($request->input('idUser'));
        return view('editUser',['userEdit'=>$userEdit]);
    }
    public function userCell(){
       $cellphone=Cellphone::where('id',Auth::user()->cellphone_id)->first();
        return view('userCell',['cellphone'=>$cellphone]);
    }

}
