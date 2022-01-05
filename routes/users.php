<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::group(['prefix'=>'admin/dashboard','as' => 'admin.','middleware'=>['auth','verified']],function(){
Route::resource('users',UsersController::class);
});