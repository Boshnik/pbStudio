<?php

namespace PageBlocks\App\Http\Controllers;

use Boshnik\PageBlocks\Facades\Request;

class ResourceController extends Controller
{
    public $classKey = \modResource::class;

    public function index(string $alias = '')
    {
        $where = [
            'published' => 1,
            'deleted' => 0,
        ];
        if (empty($alias)) {
            $where['id'] = $this->modx->getOption('site_start', null, 1, true);
        } else {
            $where['alias'] = $alias;
        }

        if (!$resource = $this->modx->getObject($this->classKey, $where)) {
            abort();
        }

        $this->modx->resource = updateResource($resource);

        return view('templates/base');
    }
}