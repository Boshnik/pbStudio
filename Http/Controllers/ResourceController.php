<?php

namespace PageBlocks\App\Http\Controllers;

class ResourceController extends Controller
{
    public $classKey = \modResource::class;

    public function index(string $alias = '')
    {
        $resource = $this->getResource($alias);
        $this->modx->resource = updateResource($resource);

        $this->modx->config['site_url'] = $this->modx->getOption('site_url');
        $this->modx->config['cultureKey'] = $this->modx->getOption('cultureKey');
        $this->modx->context->set('key', $this->modx->getOption('default_context'));

        if ($this->modx->resource->id === 10) {
            return response()->view('templates/test');
        }

        return response()->view('templates/base');
    }


    public function context(string $context, string $alias = '')
    {
        $resource = $this->getResource($alias);
        $this->modx->resource = updateResource($resource, $context);

        $this->modx->config['site_url'] = $this->modx->getOption('site_url') . "$context/";
        $this->modx->config['cultureKey'] = $context;
        $this->modx->context->set('key', $context);

        return response()->view('templates/base');
    }

    public function sitemap()
    {
        return response($this->modx->runSnippet('pbSitemap'), 200, [
            'Content-Type' => 'application/xml; charset=utf-8',
        ]);
    }

    private function getResource(string $alias = '')
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

        return $resource;
    }
}