<?php

use App\Http\Controllers\Backend\Products\ProductController;
use App\Models\Product;
use Tabuna\Breadcrumbs\Trail;

Route::group(['prefix' => 'product', 'as' => 'product.'], function() {
    Route::get('/', [ProductController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard');
            $trail->push(__('All Products'), route('admin.product.index'));
        });

    Route::get('create', [ProductController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.product.index');
            $trail->push(__('Create Product'), route('admin.product.create'));
        });

    Route::group(['prefix' => '{product}'], function() {
        Route::get('edit', [ProductController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Product $product){
                $trail->parent('admin.product.index')
                    ->push(__('Edit Product'), route('admin.product.edit', $product));
            });

        Route::patch('/', [ProductController::class, 'update'])
            ->name('update');
    });
});
