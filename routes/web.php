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
Route::get('/hello', function() {
    print("<h1>hello world!</h1>");
    print("<br>");
    $value = "123";
    print $value;
});
Route::get('/datatables_verify', function () {
    return view('datatables_verify');
});
