<?php

use Boshnik\PageBlocks\Facades\Route;

use PageBlocks\App\Http\Controllers\ResourceController;

Route::get('/{alias?}', [ResourceController::class, 'index']);