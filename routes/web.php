<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('user')->name('user');
});

Route::controller(UserController::class)->group(function(){
 
Route::post('/insert_user','insertUser');

Route::get('/','ShowUser');

Route::get('delete/{id}','deleteUser')->name('delete');

Route::get('edit/{id}','editUser')->name('edit');

Route::view('singleUser','/single');

Route::put('/update/{id}','showUpdate')->name('showUpdate');

Route::post('updateUser/{id}','updateUser')->name('updateUser');

});






