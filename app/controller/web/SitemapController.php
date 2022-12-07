<?php

namespace app\controller\web;

use think\response\View;

/**
 * Class SitemapController
 * @package app\controller\web
 */
class SitemapController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return $this->display('sitemap');
    }
}
