<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use App\JhonatanPermission\Models\Porta;
use App\JhonatanPermission\Models\Upgrade;
use App\JhonatanPermission\Models\Fija;
use App\JhonatanPermission\Models\Prepost;
use App\JhonatanPermission\Models\Rechazos;
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
    Route::resource('/Upgrade','UpgradeController');
    Route::GET('/registro','RegistroController@create');
    Route::POST('/registro', 'RegistroController@store');
    Route::GET('/registro', 'RegistroController@create')->name('registro');
    Route::GET('/entrada','EntradaController@create');
    Route::POST('/entrada', 'EntradaController@store');
    Route::GET('/entrada', 'EntradaController@create')->name('entrada');
    Route::GET('/break_in','Break_inController@create');
    Route::POST('/break_in', 'Break_inController@store');
    Route::GET('/break_in', 'Break_inController@create')->name('break_in');
    Route::GET('/break_out','Break_outController@create');
    Route::POST('/break_out', 'Break_outController@store');
    Route::GET('/break_out', 'Break_outController@create')->name('break_out');
    Route::GET('/almuerzo','AlmuerzoController@create');
    Route::POST('/almuerzo', 'AlmuerzoController@store');
    Route::GET('/almuerzo', 'AlmuerzoController@create')->name('almuerzo');
    Route::GET('/almuerzo_out','Almuerzo_outController@create');
    Route::POST('/almuerzo_out', 'Almuerzo_outController@store');
    Route::GET('/almuerzo_out', 'Almuerzo_outController@create')->name('almuerzo_out');
    Route::GET('/salida','salidaController@create');
    Route::POST('/salida', 'salidaController@store');
    Route::GET('/salida', 'salidaController@create')->name('salida');
    Route::post('/app/Ciudades', array('as' => 'Ciudad', 'uses' => 'selectsController@Ciudad'));
    Route::post('/app/Revisados', array('as' => 'Revisado', 'uses' => 'selects2Controller@Revisados'));
    Route::resource('porta', PortaController::class);
    Route::resource('prepost', PrepostController::class);
    Route::resource('upgrade', UpgradeController::class);
    Route::resource('fija', FijaController::class);
    Route::resource('rechazos', RechazosController::class);
    Route::get('porta-list-excel', 'portaController@exportExcel')->name('porta.excel');
    Route::get('prepost-list-excel', 'prepostController@exportExcel')->name('prepost.excel');
    Route::get('upgrade-list-excel', 'upgradeController@exportExcel')->name('upgrade.excel');
    Route::get('fija-list-excel', 'fijaController@exportExcel')->name('fija.excel');
    Route::get('/search','PortaController@search');
    Route::get('/searchfija','FijaController@searchfija');
    Route::get('/searchprepost','PrepostController@searchprepost');
    Route::get('/searchupgrade','UpgradeController@searchupgrade');
    Route::get('graficas.graficarPorta', 'GraficasController@graficarPorta')->name('porta.grafica');
    Route::get('/charts', 'ChartController@index')->name('charts');







