<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Rotta Home 
Route::get('/', function () {
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('home', ['dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('home');
//Rotta TV
Route::get('/tv', function () {
    return view('tv');
});
//Rotta GAMES
Route::get('/games', function () {
    return view('games');
});
//Rotta MOVIES
Route::get('/movies', function () {
    return view('movies');
});
//Rotta Comincs 
Route::get('/comics', function () {
    return view('comics.index');
});

