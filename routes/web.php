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
//練習 1
Route::get('/', function () {
//    return 'welcome';
//    return view('welcome');
      return redirect('welcome');
});
//練習 2
//Route::get('hello/{name}',function($name){
//    return'Hello,'.$name;
//});
//練習 4
Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
//    return'Hello,'.$name;
    return view('welcome');
}]);

//練習 3
Route::get('test3', function () {
//    return 'welcome';
//    return view('welcome');
    return 'welcome';
});
//練習 5：設定 Route 前置
Route::get('dashboard',function(){
    return'dashboard';
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admin dashboard';
    });
});
