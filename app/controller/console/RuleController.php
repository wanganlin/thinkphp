<?php

declare(strict_types=1);

namespace app\controller\console;

class RuleController extends BaseController
{
    /**
     * 权限管理
     * @getMapping(parent_id=4, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        $rules = AuthRule::get();

        return view('rule/index', ['rules' => $rules->toArray()]);
    }

    /**
     * 创建
     * @return Renderable
     */
    public function create(): Renderable
    {
        return view('rule/form');
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
        return view('rule/form');
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
