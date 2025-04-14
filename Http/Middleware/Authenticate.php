<?php

namespace PageBlocks\App\Http\Middleware;

use Boshnik\PageBlocks\Facades\Request;

class Authenticate extends Middleware
{
    public function handle(Request $request)
    {
        if (!app()->user->id) {
            return response()->setUnauthorized();
        }

        return true;
    }
}

