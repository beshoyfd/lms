<?php


use Illuminate\Support\Facades\Route;

Route::prefix('frontendMultiLang')->middleware('auth')->group(function () {
    Route::get('/', 'FrontendMultiLangController@index');
});
