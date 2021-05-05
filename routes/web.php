<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


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

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/test', function () {

    $user =User::find(2);

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create');
    });

    Route::resource('/role', 'RoleController')->names('role');
    Route::resource('/user', 'UserController', ['except'=>[
        'create','store']])->names('user');

    Route::resource('Registro',          RegistroController::class);
    Route::resource('salida',            SalidaController::class);
    Route::resource('ciclo',             CicloController::class);
    Route::resource('ciclosalida',       CicloSalidaController::class);
    Route::resource('ciclobreakin',      CicloBreakinController::class);
    Route::resource('ciclobreakout',     CicloBreakoutController::class);
    Route::resource('ciclolunch',        CicloLunchController::class);
    Route::resource('ciclocapa',         CicloCapaController::class);
    Route::resource('ciclocapout',       CicloCapoutController::class);
    Route::resource('ciclopausaout',     CicloPausaOutController::class);
    Route::resource('ciclopausas',       CicloPausasController::class);
    Route::resource('cicloaveria',       CicloAveriaController::class);
    Route::resource('cicloaveriaout',    CicloAveriaOutController::class);
    Route::resource('cicloeva',          CicloEvaController::class);
    Route::resource('cicloevaout',       CicloEvaOutController::class);
    Route::resource('cicloretro',        CicloRetroController::class);
    Route::resource('cicloretroout',     CicloRetroOutController::class);
    Route::resource('cicloreunion',      CicloReunionController::class);
    Route::resource('cicloreunionout',   CicloReunionOutController::class);


    Route::get('porta-list-excel', 'PortaController@exportExcel')->name('porta.excel');

    Route::get('/search','PortaController@search');




