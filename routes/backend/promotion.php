<?php

use App\Http\Controllers\Backend\PromotionController;
use Tabuna\Breadcrumbs\Trail;

Route::group(['prefix' => 'promotion', 'as' => 'promotion.'], function() {
    Route::get('/', [PromotionController::class, 'index'])
        ->breadcrumbs(function(Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__('Promotion'), route('admin.promotion.index'));
        })
        ->name('index');

    Route::get('create', [PromotionController::class, 'create'])
        ->breadcrumbs(function(Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__('Promotion'), route('admin.promotion.index'))
                ->push(__('Create'), route('admin.promotion.create'));
        })
        ->name('create');

    Route::group(['prefix' => '{promotion}'], function() {
        Route::get('edit', [PromotionController::class, 'edit'])
            ->breadcrumbs(function(Trail $trail, $promotion) {
                $trail->parent('admin.dashboard')
                    ->push(__('Promotion'), route('admin.promotion.index'))
                    ->push(__('Edit'), route('admin.promotion.edit', $promotion));
            })
            ->name('edit');

        Route::patch('update', [PromotionController::class, 'update'])
            ->name('update');
    });
});
