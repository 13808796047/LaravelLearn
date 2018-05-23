<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2018/5/22
 * Time: 上午8:11
 */
Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    //后台登录
    Route::get('/login','EntryController@loginForm');
});