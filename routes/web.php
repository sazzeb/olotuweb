<?php

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

Route::get('/', 'Front\MasterController@index')->name('base');
Route::post('/join', 'Front\CommunityController@join')->name('community.join');
Route::post('/newsletter/subscribe', 'Utilities\NewsLetterController@subscribe')->name('newsletter.subscribe');
Route::post('/support/contact', 'Utilities\SupportController@contact')->name('support.contact');


Route::get('/space', 'Space\SpaceController@index')->name('space');
Route::get('/solutions', 'Solution\SolutionController@index')->name('soluton');
Route::get('/community', 'Communities\CommunitiesController@index')->name('communities');
Route::get('/the-village','Front\MasterController@de_village')->name('the-village');
Route::get('the-square','Front\MasterController@de_square')->name('the-square');

Route::get('/shop','Front\MasterController@shop')->name('shop');

