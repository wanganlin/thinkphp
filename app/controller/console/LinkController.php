<?php

declare(strict_types=1);

namespace app\controller\console;

class LinkController extends BaseController
{
    /**
     * 友情链接
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('nav/link/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('nav/link/form');
    }

    /**
     * 保存
     * @postMapping
     */
    public function storeHandler()
    {

    }

    /**
     * 显示
     */
    public function show()
    {

    }

    /**
     * 编辑
     * @return Renderable
     */
    public function edit(): Renderable
    {
        return view('nav/link/form');
    }

    /**
     * 更新
     * @postMapping
     */
    public function updateHandler()
    {

    }

    /**
     * 删除
     * @postMapping
     */
    public function destroyHandler()
    {

    }
}
