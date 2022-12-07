<?php

declare(strict_types=1);

namespace app\controller\web;

use think\response\View;

class ArticleController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('/article');
    }

    /**
     * @return Renderable
     */
    public function category(): Renderable
    {
        return $this->display('article.list');
    }

    /**
     * @return Renderable
     */
    public function detail(): Renderable
    {
        return $this->display('article.detail');
    }
}
