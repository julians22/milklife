<?php

use App\Http\Controllers\Backend\PostController;
use App\Models\Post;
use Tabuna\Breadcrumbs\Trail;

Route::group(['prefix' => 'post', 'as' => 'post.'], function() {
    Route::get('/', [PostController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__('Posts'), route('admin.post.index'));
        });

    Route::get('create', [PostController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.post.index')
                ->push(__('Create'), route('admin.post.create'));
        });

    Route::group(['prefix' => '{post}'], function() {
        Route::get('/', [PostController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Post $post) {
                $trail->parent('admin.post.index')
                    ->push(__('Show'), route('admin.post.show', $post));
            });

        Route::get('edit', [PostController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Post $post) {
                $trail->parent('admin.post.index')
                    ->push(__('Edit'), route('admin.post.edit', $post));
            });

        Route::delete('/', [PostController::class, 'destroy'])
            ->name('destroy');

        Route::patch('/', [PostController::class, 'update'])
            ->name('update');
    });

    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function() {
        Route::get('check-slug', [PostController::class, 'checkSlug'])
            ->name('check-slug');

        Route::get('generate-slug', [PostController::class, 'generateSlug'])
            ->name('generate-slug');
    });
});

?>
