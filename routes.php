<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome'); // tới trang index.
});

//Route::get('/contact', 'Controller@contact');
//Route::get('/test', 'Controller@test');
//
//
//Route::get('/aboutme', 'PagesController@aboutme');
//Route::get('contact','PagesController@contact');
//Route::get('about','PagesController@contact');
//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::post('/articles','ArticlesController@store');//chuyen huong data tu the input sang function store
//Route::get('khoa-hoc',function(){
// echo "EM là tuan";
//});
Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::get('khoa-hoc', function() {
    echo "EM là hung";
});
Route::resource('hocsinh', 'HocSinhController');
Route::get('hs/danhsach', 'HocSinhController@danhsach');
Route::post('/getliststudent', 'HocSinhController@getListStudent');

Route::resource('customer', 'CustomerController');

Route::get('import', 'ImportController@getImport');
Route::post('import',['as'=>'postImport','uses'=>'ImportController@postImport']);
Route::get('downloadExcel/xlsx', 'ImportController@geExport');