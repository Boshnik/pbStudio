<?php

namespace PageBlocks\App\Http\Middleware;

class Authenticate extends Middleware
{
    public function handle(array $request = [])
    {
        if (!app()->user->id) {
            return response()->setUnauthorized()->send();
        }

        return true;
    }
}

