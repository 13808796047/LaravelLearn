<?php
/**
 * Created by PhpStorm.
 * User: mars
 * Date: 2018/5/22
 * Time: 上午8:11
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/abc', function () {
        return 'abc';
    });
});