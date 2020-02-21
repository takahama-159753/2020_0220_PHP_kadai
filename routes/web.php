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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});


//URLとControllerやActionを紐付ける機能を何といいますか？
//Routing機能

//あなたが考える、group化をすることのメリットを考えてみてください。
//管理しやすくなる。



//【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の
//add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください。

Route::get('admin/profile/create','Admin\ProfileController@add');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit');