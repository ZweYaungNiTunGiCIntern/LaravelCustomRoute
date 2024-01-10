<?php
use App\Http\Controllers\Studentcontroller;
use Illuminate\Support\Facades\Route;

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('student', [App\Http\Controllers\Studentcontroller::class, 'index'])->name('student');
//Route::get('/student', [Studentcontroller::class,'index'])->name('student.index');
//Route::resource('/student',Studentcontroller::class);
Route::get('/student/create', [Studentcontroller::class,'create'])->name('student.create');
Route::post('/student/store', [Studentcontroller::class,'store'])->name('student.store');
Route::get('/student', [Studentcontroller::class,'index'])->name('student.index');
Route::get('/student/edit', [Studentcontroller::class,'edit'])->name('student.edit');
Route::get('/student/show', [Studentcontroller::class,'show'])->name('student.show');

Route::delete('/student/destroy', [Studentcontroller::class,'destroy'])->name('student.destroy');
Route::put('/student/update', [Studentcontroller::class,'update'])->name('student.update');
