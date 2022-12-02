<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UsersController;
use App\Http\Controllers\User\CellphoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('user')->middleware(['auth','verified'])->group(function (){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware'=>['permission:adminPermission']],function(){

        Route::get('    register-user', function () {
            return view('registerUser');
        })->name('registerUser');

        Route::post('registered-user', [UsersController::class, 'store'])->name('registeredUser');

        Route::get('register-cell', function () {
            return view('registerCellPhone');
        })->name('registerCellPhone');

        Route::post('registered-cellphone', [CellphoneController::class, 'store'])->name('registeredCellphone');

        Route::get('show-users',[UsersController::class,'showUsers'])->name('showUsers');

        Route::post('delete-user',[UsersController::class,'deleteUser'])->name('deleteUser');

        Route::post('edit-user',[UsersController::class,'viewEditUser'])->name('viewEditUser');
        Route::post('user-edited',[UsersController::class,'edit'])->name('edit');
        Route::get('show-cellphones',[CellphoneController::class,'showCell'])->name('showCellphones');
        Route::get('assign-cellphone',[CellphoneController::class,'viewAssignCell'])->name('viewAssingCell');
        Route::post('assigned-cellphone',[CellphoneController::class,'assingCell'])->name('assingCell');
        Route::post('edit-cellphone',[CellphoneController::class,'viewEditCellphone'])->name('viewEditCellphone');
        Route::post('edited-cellphone',[CellphoneController::class,'editCellphone'])->name('editCellphone');
    });

    Route::group(['middleware'=>['permission:userPermission']],function(){
        Route::get('user-cell',[UsersController::class,'userCell'])->name('userCell');

    });


});

