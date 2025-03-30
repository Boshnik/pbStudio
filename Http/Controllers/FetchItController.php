<?php

namespace PageBlocks\App\Http\Controllers;

class FetchItController extends Controller
{
    public function action()
    {
        $FetchIt = $this->modx->services->get('FetchIt');
        if (!isset($_POST)) {
            $site_start = $this->modx->makeUrl($this->modx->getOption('site_start'), '', '', 'full');
            redirect($site_start);
        } elseif (empty($_SERVER['HTTP_X_FETCHIT_ACTION'])) {
            return $FetchIt->error('fetchit_err_action_ns');
        } else {
            return $FetchIt->process($_SERVER['HTTP_X_FETCHIT_ACTION'], array_merge($_FILES, $_REQUEST));
        }
    }
}