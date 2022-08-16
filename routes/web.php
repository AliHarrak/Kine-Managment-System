<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorsListController;
use App\Http\Controllers\AddAppointController;
use App\Http\Controllers\AppointListController;
use App\Http\Controllers\AddPatientController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\PatientsListController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AssistantController;


use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth', 'verified');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);
Route::get('/doctors_list_view', [DoctorsListController::class, 'index']);

Route::get('/doctor_profile_view/{id}', [DoctorsListController::class, 'viewProfile']);
Route::get('/edit_doctor/{id}', [DoctorsListController::class, 'edit']);
Route::put('/update_doctor/{id}', [DoctorsListController::class, 'updateDoctor']);
Route::delete('/delete_doctor/{id}', [DoctorsListController::class, 'deleteDoctor']);


Route::get('/add_assistant_view', [AssistantController::class, 'addview']);
Route::post('/add_assistant', [AssistantController::class, 'upload']);
Route::get('/assistants_list_view', [AssistantController::class, 'index']);

Route::get('/assistant_profile_view/{id}', [AssistantController::class, 'viewProfile']);
Route::get('/edit_assistant/{id}', [AssistantController::class, 'edit']);
Route::put('/update_assistant/{id}', [AssistantController::class, 'updateAssistant']);
Route::delete('/delete_assistant/{id}', [AssistantController::class, 'deleteAssistant']);




Route::get('/add_appoint_view', [AddAppointController::class, 'addview']);
Route::post('/upload_appoint', [AddAppointController::class, 'upload']);
Route::get('/appoint_list', [AppointListController::class, 'index']);

Route::get('/edit_appoint/{id}', [AppointListController::class, 'edit']);
Route::put('/update_appoint/{id}', [AppointListController::class, 'updateAppoint']);
Route::delete('/delete_appoint/{id}', [AppointListController::class, 'deleteAppoint'])->name('deleteAppoint');




Route::get('/add_patient_view', [AddPatientController::class, 'addview']);
Route::post('/add_patient', [AddPatientController::class, 'store']);
Route::get('/patients_list_view', [PatientsListController::class, 'index']);

Route::get('/patient_profile_view/{id}', [PatientsListController::class, 'viewProfile']);
Route::get('/edit_patient/{id}', [PatientsListController::class, 'edit']);
Route::put('/update_patient/{id}', [PatientsListController::class, 'updatePatient']);                 
Route::delete('/delete_patient/{id}', [PatientsListController::class, 'deletePatient'])->name('deletePatient');


Route::get('/add_room_view', [RoomController::class, 'addview']);
Route::post('/add_room', [RoomController::class, 'store']);
Route::get('/rooms_list_view', [RoomController::class, 'index']);

Route::post('/update_room', [RoomController::class, 'updateRoomAvailability'])->name('roomStatus');
Route::delete('/delete_room/{id}', [RoomController::class, 'deleteRoom'])->name('deleteRoom');

Route::get('/profile_view', [AdminController::class, 'profileView']);
Route::get('/edit_user', [AdminController::class, 'editUser']);
Route::put('/update_user', [AdminController::class, 'updateUser']);


Route::get('/calendar', [CalendarController::class, 'index'])->name('index');
Route::post('/calendarAction', [CalendarController::class, 'action'])->name('index');


Route::get('search', [SearchController::class, 'index']);
Route::get('ajax-autocomplete-search', [SearchController::class,'selectSearch']);




/* Route::prefix('Assistants',function(){

    Route::get('/add_assistant_view', [AssistantController::class, 'addview']);
    Route::post('/add_assistant', [AssistantController::class, 'upload']);

    Route::get('/assistants_list_view', [AssistantController::class, 'index']);
    Route::get('/assistant_profile_view/{id}', [AssistantController::class, 'viewProfile']);

    Route::put('/update_assistant/{id}', [AssistantController::class, 'updateAssistant']);
    Route::delete('/delete_assistant/{id}', [AssistantController::class, 'deleteAssistant']);

}); */

