<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AlumActivController;

use App\Http\Controllers\UsersRegisFormController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\AlumEventCntroller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ActividadController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
//Route::view('/descripcult', 'descripcult')->name('descripcult');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
        Route::resource('teachers', TeacherController::class);
        Route::resource('home', EventController::class);
        Route::resource('actividads', ActividadController::class);
        Route::resource('horarios', HorarioController::class);
        Route::resource('UsersRegisForms', UsersRegisFormController::class);


    Route::resource('alumnos', AlumEventCntroller::class);
    Route::resource('alumnos2', AlumActivController::class);

    Route::get('descripcult',function(){
        return view('alumnos2.descripcult');
    })->name('descripcult');





});


//Route::controller(FullCalenderController::class)->group(function(){
  //  Route::get('fullcalender', 'index');
    //Route::post('fullcalenderAjax', 'ajax');
//});





