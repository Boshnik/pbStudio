<?php

use Boshnik\PageBlocks\Facades\Route;

use PageBlocks\App\Http\Controllers\ResourceController;
use PageBlocks\App\Http\Controllers\FormController;

Route::get('/{alias?}', [ResourceController::class, 'index']);

Route::post('/form/submit', [FormController::class, 'handle']);