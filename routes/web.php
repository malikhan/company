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
    return view('dashboard');
});


//About page
Route::get('/about',[
    'as' => 'about',
    'uses' => 'App\Http\Controllers\AboutController@show'
]);

//Team page
Route::get('/team',[
    'as' => 'team',
    'uses' => 'App\Http\Controllers\TeamController@show'
]);

//Faq page
Route::get('/faq',[
    'as' => 'faq',
    'uses' => 'App\Http\Controllers\FaqController@show'
]);

//Services page
Route::get('/services',[
    'as' => 'services',
    'uses' => 'App\Http\Controllers\ServicesController@show'
]);

//Projects page
Route::get('/projects',[
    'as' => 'projects',
    'uses' => 'App\Http\Controllers\ProjectsController@show'
]);

//Contact page
Route::get('/contact',[
    'as' => 'contact',
    'uses' => 'App\Http\Controllers\ContactController@show'
]);
