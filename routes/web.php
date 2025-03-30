<?php

use Boshnik\PageBlocks\Facades\Route;

use PageBlocks\App\Http\Controllers\ResourceController;
use PageBlocks\App\Http\Controllers\FetchItController;

Route::get('/{alias?}', [ResourceController::class, 'index']);

Route::post('/assets/components/fetchit/action.php', [FetchItController::class, 'action']);