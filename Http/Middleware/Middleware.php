<?php

namespace PageBlocks\App\Http\Middleware;

abstract class Middleware
{
    public function __construct() {}

    abstract public function handle(array $request = []);
}