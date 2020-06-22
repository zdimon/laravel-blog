<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Http\Request;
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

Route::get('/auth', function () {
    return view('auth');
});

Route::post('/login', function (Request $request) {
    if($request->input('password') == '111') {
        $request->session()->put('is_auth', 'true');
    }
    return redirect('/');
});


Route::get('/', 'IndexController@index');

Route::resource('page','PageController');
