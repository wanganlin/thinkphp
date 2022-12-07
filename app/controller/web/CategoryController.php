<?php

namespace app\controller\web;

use think\response\View;

/**
 * Class CategoryController
 * @package app\controller\web
 */
class CategoryController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return $this->display('category');
    }
}
