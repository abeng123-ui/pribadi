<?php
use Illuminate\Support\Facades\Redis;

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
    $p = Redis::incr('p');
    return $p;
});

Route::get("cache", "UserController@getUserByCache");
Route::get("query", "UserController@getUserByQuery");
