<?php

declare(strict_types=1);

namespace app\controller\console;

class AdController extends BaseController
{
    /**
     * 广告列表
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('ad/index');
    }

    /**
     * 创建广告
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('ad/create');
    }

    /**
     * 保存广告
     * @postMapping
     */
    public function storeHandler()
    {

    }

    /**
     * 显示广告
     */
    public function show()
    {

    }

    /**
     * 编辑广告
     * @return Renderable
     */
    public function edit(): Renderable
    {
        return view('ad/create');
    }

    /**
     * 更新广告
     * @postMapping
     */
    public function updateHandler()
    {

    }

    /**
     * 删除广告
     * @postMapping
     */
    public function destroyHandler()
    {

    }
}
