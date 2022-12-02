<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cellphone;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class CellphoneController extends Controller
{
    /* Funcion de insertar nuevo celular*/
    protected function store(Request $data)
    {
        $data->validate( [
            'mark' => ['required', 'string', 'max:255'],
            'model'=>['required', 'string', 'max:255'],
            'color'=>['required', 'string', 'max:255'],
        ]);


        $cellphone=Cellphone::create([
            'mark' => $data['mark'],
            'model' => $data['model'],
            'color' => $data['color'],
        ]);
        $cellphone->save();

        return view("registerCellPhone",["status"=> "success", "msg"=> "¡El celular se creo correctamente!"]);

    }
    public function showCell(){
        $cellPhones=Cellphone::all();
        return view('cellPhones',["cellPhones"=>$cellPhones]);
    }
    public function viewAssignCell(){
        $users=User::all()->where('status',"active");
        $cells=Cellphone::all();
        return view('assignCell',['users'=>$users],['cells'=>$cells]);
    }
    public function assingCell(Request $request){
        $user=User::find($request->input('idUser'));
        $user->cellphone_id=$request->input('idCell');
        $user->save();
        return view('notification',["status"=> "success", "msg"=> "¡Se asigno correctamente el celular!"]);
    }
    public function viewEditCellphone(Request $request){
        $cellphone=Cellphone::find($request->input('idCellphone'));
        return view('editCellphone',['cellphone'=>$cellphone]);
    }
    public function editCellphone(Request $request){
        $cellphone=Cellphone::find($request->input('idCellphone'));
        $cellphone->mark=$request->input('mark');
        $cellphone->model=$request->input('model');
        $cellphone->color=$request->input('color');
        $cellphone->save();
        return view('notification',["status"=> "success", "msg"=> "¡El celular se actualizo correctamente!"]);
    }
}
