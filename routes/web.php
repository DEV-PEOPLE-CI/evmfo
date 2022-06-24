<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AcceuilController;
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



Route::get('/',[AcceuilController::class,'Acceuil']);
Route::get('test',[AcceuilController::class,'index']);

Route::fallback(function(){
    return view('404');
});
//Route::get('Acceuil',[AcceuilController::class,'index']);
Route::get('call_controller/{id}',[AcceuilController::class,'callMediaById']);
Route::get('send_commentaire/{media_id}/{full_name}/{content}',[AcceuilController::class,'createCommentaire']);
Route::get('call_son/{id}',[AcceuilController::class,'call_son']);
Route::get('like/{id}',[AcceuilController::class,'like']);

//new
// Route::get('precedemment',[AcceuilController::class,'prec']);
Route::get('call_controller_prec/{id}',[AcceuilController::class,'call_controller_prec']);

Route::get('archive',[AcceuilController::class,'Archive']);
Route::get('call_deo/{id}/{type}',[AcceuilController::class,'call_deo']);
Route::get('video/{id}',[AcceuilController::class,'call_deo_one_page']);

// Route::get('sport_et_culture',[AcceuilController::class,'humour']);


