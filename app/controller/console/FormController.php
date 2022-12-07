<?php

declare(strict_types=1);

namespace app\controller\console;

class FormController extends BaseController
{
    /**
     * 表单管理
     * @getMapping(parent_id=3, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('form/index');
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('form/form');
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
        return view('form/form');
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
