<?php

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
Route::get('blocks',function(){
    return view('blocks');
});
Route::get('cards',function(){
    return view('cards');
});
Route::get('carousels',function(){
    return view('carousels');
});
Route::get('forms',function(){
    return view('forms');
});
Route::get('people',function(){
    return view('people');
});
Route::get('pricing',function(){
    return view('pricing');
});

Route::get('/', function () {
    return view('index');
});
Route::get('board','BoardController@show');
Route::get('board_add', function () {
    return view('back.board.board_add');
});
Route::post('board_add','BoardController@add');
Route::get('board_R/{id}','BoardController@showone');
Route::get('board_R',function(){
    return view('board_R');
});
Route::post('board_R_Add','BoardController@add');
Route::post('board_edit','BoardController@edit');