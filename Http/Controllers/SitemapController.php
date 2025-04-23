<?php

namespace PageBlocks\App\Http\Controllers;

class SitemapController extends Controller
{
    public function index()
    {
        return response($this->modx->runSnippet('pbSitemap'))
            ->header('Content-Type', 'application/xml');
    }
}