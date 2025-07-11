<?php

use Boshnik\PageBlocks\Facades\Route;

use PageBlocks\App\Http\Controllers\SitemapController;
use PageBlocks\App\Http\Controllers\ResourceController;
use PageBlocks\App\Http\Controllers\FormController;

Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/{context}/{alias?}', [ResourceController::class, 'context'])
    ->where('context', '[a-z]{2}');
Route::get('/{alias?}', [ResourceController::class, 'index']);

Route::post('/form/submit', [FormController::class, 'handle']);