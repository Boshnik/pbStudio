<?php

use Boshnik\PageBlocks\Facades\Route;
use PageBlocks\App\Http\Controllers\ConfigController;
use PageBlocks\App\Http\Controllers\ContextController;
use PageBlocks\App\Http\Controllers\ResourceController;

//Route::prefix('api')->middleware('auth')->group(function () {
//    Route::get('/context/', [ContextController::class, 'index']);
//    Route::get('/config/', [ConfigController::class, 'index']);
//
//    Route::prefix('{key}')->group(function () {
//        Route::get('/menu/', [ResourceController::class, 'menu']);
//
//        Route::get('/resource', [ResourceController::class, 'index']);
//        Route::get('/resource/{id}', [ResourceController::class, 'show']);
//    });
//});