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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hai', function() {
    return "hello World";
});

Route::get('/matematika/{a}/{b}', function($a, $b) {
    return $a + $b;
});

Route::any('captcha-testimoni', function() {
    if (request()->getMethod() == 'POST') {
        $rules = ['captcha' => 'required|captcha'];
        $validate = validator()->make(request()->all(), $rules);

        if ($validate->fails()) {
            return "404";
        }
        else {
            return view('welcome');
        }
    }

    $form = '<form method="POST" action="captcha-testimoni">';
    $form .= '<input type="hidden" name="_token" value="'.csrf_token().'">';
    $form .= '<p>'.captcha_img().'</p>';
    $form .= '<p><input type="text" name="captcha"></p>';
    $form .= '<p><button type="submit" name="check">Check</button></p>';
    $form .= '</form>';
    return $form;
});
