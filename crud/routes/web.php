<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

Route::get('/', function () {
    return view('student');
});

Route::post('student',[studentcontroller::class,'insert'])->name('insert.data');

Route::get('student',[studentcontroller::class,'showdata']);

Route::get('updatestudent/{id}',[studentcontroller::class,'updatestd'])->name('student.update');


Route::post('updatestudent/{id}', [studentcontroller::class, 'updateins'])->name('update.insert');


Route::get('deletestudent/{id}',[studentcontroller::class,'delete'])->name('student.delete');

