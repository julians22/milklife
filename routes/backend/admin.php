<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use UniSharp\LaravelFilemanager\Lfm;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });
Route::get('filemanager', [DashboardController::class, 'filemanager'])
    ->name('filemanager')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('admin.dashboard')
            ->push(__('File Manager'), route('admin.filemanager'));
    });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});
