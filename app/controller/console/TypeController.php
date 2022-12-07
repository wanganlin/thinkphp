<?php

declare(strict_types=1);

namespace app\controller\console;

class TypeController extends BaseController
{
    /**
     * 模型管理
     * @getMapping(parent_id=2, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('type/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('type/form');
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
        return view('type/form');
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
