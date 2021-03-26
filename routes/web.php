<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Livewire\MapLocation;

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']); 
Route::get('/post/detail/{id}',[ArticleController::class,'show'])->name('post.detail');
Route::get('/peta-pergaulan-bebas', MapLocation::class)->name('post.map');
Route::get('/pergaulan-bebas',[HomeController::class,'pergaulan'])->name('post.kategori');
Route::get('/pelecehan-sexual',[HomeController::class,'sexual'])->name('post.sexual');
Route::get('/tips-pencegahan',[HomeController::class,'pencegahan'])->name('post.pencegahan');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});