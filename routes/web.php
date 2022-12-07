<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointController;
use App\Http\Controllers\VaccaineController;
use App\Models\doctor;

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/covid', function () {
    return view('covid');
});

Route::get('/team', function () {
    $data=doctor::paginate(6);
    return view('ourteam',['data'=>$data]);
});
// Route::get('/appoint', function () {
//     return view('appointment');

// });

Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index')->middleware('auth');
Route::get('/doctors/add', [DoctorsController::class, 'add'])->name('doctors.add')->middleware('auth');
Route::post('/doctors', [DoctorsController::class, 'store'])->name('doctors.store')->middleware('auth');
Route::get('doctors/{id}/edit', [DoctorsController::class, 'edit'])->name('doctors.edit')->middleware('auth');
Route::put('doctors/update/{id}', [DoctorsController::class, 'update'])->name('doctors.update')->middleware('auth');
Route::delete('/doctors/{id}', [DoctorsController::class, 'destroy'])->name('doctors.destroy')->middleware('auth');
Route::post('filter', [DoctorsController::class, 'search'])->name('doctors.search')->middleware('auth');
// --------------------------------------------------------------------------------------------

Route::get('/patients', [ContactController::class, 'index'])->name('contacts.index')->middleware('auth');
Route::get('/patients/create', [ContactController::class, 'create'])->name('contacts.create')->middleware('auth');
Route::get('/patients/{id}', [ContactController::class, 'show'])->name('contacts.show')->middleware('auth');

Route::PUT('/patients/{id}', [ContactController::class, 'update'])->name('contacts.update')->middleware('auth');
Route::delete('/patients/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy')->middleware('auth');
Route::get('/patients/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit')->middleware('auth');
Route::post('/patients', [ContactController::class, 'store'])->name('contacts.store')->middleware('auth');
// ---------------------------------------------------------------------------------------------

Route::get('/appoint', [AppointController::class, 'index'])->name('appoint.index');
Route::get('appoint/create', [AppointController::class, 'create'])->name('appoint.create');
Route::post('appoint/', [AppointController::class, 'store'])->name('appoint.store');
Route::delete('appoint/{id}', [AppointController::class, 'delete'])->name('appoint.delete');

// ---------------------------------------------------------------------------------------------------------------
Route::get('/vaccaine', [VaccaineController::class, 'index'])->name('vaccaine.index')->middleware('auth');
Route::get('/vaccaine/add', [VaccaineController::class, 'add'])->name('vaccaine.add')->middleware('auth');
Route::post('/vaccaine', [VaccaineController::class, 'store'])->name('vaccaine.store')->middleware('auth');
Route::get('vaccaine/{id}/edit', [VaccaineController::class, 'edit'])->name('vaccaine.edit')->middleware('auth');
Route::put('update/{id}', [VaccaineController::class, 'update'])->name('vaccaine.update')->middleware('auth');
Route::put('tooken/{id}', [VaccaineController::class, 'confirm'])->name('vaccaine.confirm')->middleware('auth');
Route::delete('/vaccaine/{id}', [VaccaineController::class, 'destroy'])->name('vaccaine.destroy')->middleware('auth');
// ----------------------------------------------------------------------------------------------------------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'reg'])->name('register')->middleware('auth');
Route::post('/register', [App\Http\Controllers\HomeController::class, 'store'])->name('register.store')->middleware('auth');
