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

use Modules\Base\Http\Middleware\LocalEnvironmentMiddleware;

Route::middleware('auth')->prefix('dvui')->group(function () {
    if (config('app.env') !== 'local') {
        return;
    }
    Route::get('/icons', function () {
        /*if (config('app.env') == 'local') {
            cache()->delete('dvui.page.icons');
        }*/

        return cache()->remember('dvui.page.icons', now()->addDay(), fn () => view('dvui::components.pages.page_icons')->render());
    })
        ->middleware(LocalEnvironmentMiddleware::class)
        ->name('dvui.icons');
    Route::get('pages/examples/components', function () {
        return view('dvui::components.pages.examples.dynamic_components_page');
    })->name('dvui.pages.examples.components');

});
