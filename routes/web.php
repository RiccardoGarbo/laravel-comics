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
//Rotta app
Route::get('/app', function () {
    return view('layouts.app');
})->name('app');
//Rotta Home 
Route::get('/', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('home', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('home');
//Rotta TV
Route::get('/tv', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('tv', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('tv');
//Rotta GAMES
Route::get('/games', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('games', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('games');
//Rotta MOVIES
Route::get('/movies', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('movies', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('movies');
//Rotta characters
Route::get('/characters', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('characters', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('characters');
//Rotta Comincs 
Route::get('/comics', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('comics', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('comics');
//Rotta videos
Route::get('/videos', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('videos', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('videos');
//Rotta News 
Route::get('/news', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('news', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('news');
//Rotta Shop
Route::get('/shop', function () {
    $header_links =['characters','comics','movies','tv','games','videos','news','shop'];
    $dc_comics_links = ['Characters','Comics','Movies','TV','Games','Videos','News'];
    $shop_links = ['Shop DC','Shop DC Collectibles'];
    $dc_links = ['Term Of Use', 'Privacy policy(New)','Ad Choices','Advertosing','Jobs','Subscriptions','Talent WorkShops','CPSC Certificates','Ratings','Shop Help','Contact Us'];
    $sites_links =['DC','MAD Magazine','DC kids','DC Universe','DC Power Visa'];
    return view('shop', ['header_links' =>$header_links,'dc_comics_links'=> $dc_comics_links,'shop_links'=> $shop_links,'dc_links'=> $dc_links,'sites_links'=>$sites_links]);
})->name('shop');

//Rotta Comic

Route::get('/comic/{index}' , function($index){
    $comics = config('comics');
    if (array_key_exists($index, $comics)) {
        $comic = $comics[$index];
        dd($comic);
        return view('comics.show', compact('comic'));
    } else {
        abort(404); 
    }
})->name('comic.show');


