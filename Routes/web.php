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

Route::middleware('auth')->prefix('dvui')->group(function() {
    Route::get('/icons', function() {
//        cache()->delete('dvui.page.icons');
        return cache()->rememberForever('dvui.page.icons', fn() => view('dvui::components.pages.page_icons')->render());
    });
});
