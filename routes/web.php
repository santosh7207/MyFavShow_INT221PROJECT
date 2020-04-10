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

Route::get('/', function () {
    return view('home');
});


Route::get('/home/login','HomeController@signin') ;
Route::get('/home/register','HomeController@signup') ;
Route::get('movies','MoviesController@index') ;
Route::get('tvshows','TvShowsController@index') ;
Route::get('aboutus','AboutUSController@index') ;
Route::resource('home','HomeController') ;
Route::resource('login','LoginController');
Route::resource('register','RegisterController');
Route::resource('message','MessageController') ;
Route::resource('land','LandController');
Route::get('101','landController@check101') ;
Route::get('102','landController@check102') ;
Route::get('103','landController@check103') ;
Route::get('104','landController@check104') ;
Route::get('105','landController@check105') ;
Route::get('106','landController@check106') ;
Route::get('107','landController@check107') ;
Route::get('108','landController@check108') ;
Route::get('306','landController@check306') ;
Route::get('331','landController@check331') ;
Route::get('307','landController@check307') ;
Route::get('330','landController@check330') ;
Route::get('326','landController@check326') ;
Route::get('316','landController@check316') ;
Route::get('329','landController@check329') ;
Route::get('309','landController@check309') ;
Route::get('301','TvShowsController@check301') ;
Route::get('302','TvShowsController@check302') ;
Route::get('303','TvShowsController@check303') ;
Route::get('304','TvShowsController@check304') ;
Route::get('305','TvShowsController@check305') ;
Route::get('306','TvShowsController@check306') ;
Route::get('307','TvShowsController@check307') ;
Route::get('308','TvShowsController@check308') ;
Route::get('309','TvShowsController@check309') ;
Route::get('310','TvShowsController@check310') ;
Route::get('311','TvShowsController@check311') ;
Route::get('312','TvShowsController@check312') ;
Route::get('313','TvShowsController@check313') ;
Route::get('314','TvShowsController@check314') ;
Route::get('315','TvShowsController@check315') ;
Route::get('316','TvShowsController@check316') ;
Route::get('317','TvShowsController@check317') ;
Route::get('318','TvShowsController@check318') ;
Route::get('319','TvShowsController@check319') ;
Route::get('320','TvShowsController@check320') ;
Route::get('321','TvShowsController@check321') ;
Route::get('322','TvShowsController@check322') ;
Route::get('323','TvShowsController@check323') ;
Route::get('324','TvShowsController@check324') ;
Route::get('325','TvShowsController@check325') ;
Route::get('326','TvShowsController@check326') ;
Route::get('327','TvShowsController@check327') ;
Route::get('328','TvShowsController@check328') ;
Route::get('329','TvShowsController@check329') ;
Route::get('330','TvShowsController@check330') ;
Route::get('331','TvShowsController@check331') ;
Route::get('332','TvShowsController@check332') ;
Route::get('301','MoviesController@check201') ;
Route::get('202','MoviesController@check202') ;
Route::get('203','MoviesController@check203') ;
Route::get('204','MoviesController@check204') ;
Route::get('205','MoviesController@check205') ;
Route::get('206','MoviesController@check206') ;
Route::get('207','MoviesController@check207') ;
Route::get('208','MoviesController@check208') ;
Route::get('209','MoviesController@check209') ;
Route::get('210','MoviesController@check210') ;
Route::get('211','MoviesController@check211') ;
Route::get('212','MoviesController@check212') ;
Route::get('213','MoviesController@check213') ;
Route::get('214','MoviesController@check214') ;
Route::get('215','MoviesController@check215') ;
Route::get('216','MoviesController@check216') ;
Route::get('217','MoviesController@check217') ;
Route::get('218','MoviesController@check218') ;
Route::get('219','MoviesController@check219') ;
Route::get('220','MoviesController@check220') ;
Route::get('221','MoviesController@check221') ;
Route::get('222','MoviesController@check222') ;
Route::get('223','MoviesController@check223') ;
Route::get('224','MoviesController@check224') ;
Route::get('225','MoviesController@check225') ;
Route::get('226','MoviesController@check226') ;
Route::get('227','MoviesController@check227') ;
Route::get('228','MoviesController@check228') ;
Route::get('229','MoviesController@check229') ;
Route::get('230','MoviesController@check230') ;
Route::get('231','MoviesController@check231') ;
Route::get('232','MoviesController@check232') ;






/*
Route::get('/products','ProductController@index') ;
Route::get('/products/create','ProductController@create');
Route::post('/products/store','ProductController@store');
*/
