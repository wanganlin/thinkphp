<?php

declare(strict_types=1);

namespace app\controller\console;

class AdPositionController extends BaseController
{
    /**
     * 广告位管理
     * @getMapping(parent_id=3, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('ad/position/index');
    }

    /**
     * 创建广告位
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('ad/position/create');
    }

    /**
     * 保存广告位
     * @postMapping
     */
    public function storeHandler()
    {

    }

    /**
     * 显示广告位
     */
    public function show()
    {

    }

    /**
     * 编辑广告位
     * @return Renderable
     */
    public function edit(): Renderable
    {
        return view('ad/position/create');
    }

    /**
     * 更新广告位
     * @postMapping
     */
    public function updateHandler()
    {

    }

    /**
     * 删除广告位
     * @postMapping
     */
    public function destroyHandler()
    {

    }
}
