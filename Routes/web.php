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

Route::middleware('auth')->prefix('dvui')->group(function () {
    Route::get('/icons', function () {
        if (config('app.env') == 'local') {
            cache()->delete('dvui.page.icons');
        }

        return cache()->remember('dvui.page.icons', now()->addDay(), fn () => view('dvui::components.pages.page_icons')->render());
    });
});
