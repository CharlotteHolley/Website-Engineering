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

Route::get ('/', 'PagesController@home');
Route::get ('/modules', 'PagesController@modules');
Route::get ('/deadlines', 'PagesController@deadlines');

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/modules', function () {
    
  //  $module =[
   // 'Advanced Software Engineering',
  //  'Production Project',
  //  'Developing Mobile Applications',
   // 'Digital Security'
 //   ];
    
 //   return view('about', [
 //   'modules' => $module]);
//});

//Route::get('/contact', function () {
  //  return view('contact');
//});

