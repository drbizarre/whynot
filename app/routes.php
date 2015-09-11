<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SiteController@showColaboraciones');
Route::get('conoce-whynot', array('as' => 'conoce-whynot', 'uses' => 'SiteController@showAboutUs'));
Route::get('desarrollo-web', array('as' => 'desarrollo-web', 'uses' => 'SiteController@showDesarrollo'));
Route::get('disenio-web', array('as' => 'disenio-web', 'uses' => 'SiteController@showDisenio'));
Route::get('seo', array('as' => 'seo', 'uses' => 'SiteController@showSeo'));
Route::get('colaboraciones', array('as' => 'colaboraciones', 'uses' => 'SiteController@showColaboraciones'));
Route::get('contactanos', array('as' => 'contactanos', 'uses' => 'SiteController@showContactanos'));
Route::post('contactar', array('as' => 'contactar', 'uses' => 'SiteController@showContactar'));