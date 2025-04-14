<?php

namespace PageBlocks\App\Http\Middleware;

use Boshnik\PageBlocks\Facades\Request;
use Boshnik\PageBlocks\Facades\Responce;

abstract class Middleware
{
    public function __construct() {}

    abstract public function handle(Request $request);
}