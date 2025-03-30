<?php

namespace PageBlocks\App\Http\Controllers;

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
            $where['id'] = $this->modx->getOption('site_start', null, 1, 1);
        } else {
            $where['alias'] = $alias;
        }

        if (!$resource = $this->modx->getObject($this->classKey, $where)) {
            abort();
        }

        $this->modx->resource = updateResource($resource);

        return response()->view('templates/base');
    }
}