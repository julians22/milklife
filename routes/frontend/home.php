<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use Tabuna\Breadcrumbs\Trail;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

Route::get('variant', [HomeController::class, 'variant'])
    ->name('variant')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Variant'), route('frontend.variant'));
    });

Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('/', [HomeController::class, 'variant'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Variant'), route('frontend.variant'));
        });
    Route::get('{slug}', [HomeController::class, 'product'])
        ->name('show')
        ->breadcrumbs(function (Trail $trail) {
            $trail->push(__('Product'), route('frontend.product'));
        });
});

Route::get('about', [HomeController::class, 'about'])
    ->name('about')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Tentang MilkLife'), route('frontend.about'));
    });

Route::get('article', [HomeController::class, 'article'])
    ->name('article')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Artikel & Resep'), route('frontend.article'));
    });
Route::get('article/{slug}', [HomeController::class, 'article_show'])
    ->name('article.show');

Route::get('explore', [HomeController::class, 'explore'])
    ->name('explore')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Dunia MilkLife'), route('frontend.explore'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });
