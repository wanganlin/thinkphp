<?php

declare(strict_types=1);

namespace app\controller\console;

class SystemController extends BaseController
{
    /**
     * 系统管理
     * @getMapping(parent_id=5, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('system/index');
    }

    /**
     * 关于我们
     * @return Renderable
     */
    public function about(): Renderable
    {
        return view('system/about');
    }

    /**
     * 帮助手册
     * @return Renderable
     */
    public function help(): Renderable
    {
        return view('system/help');
    }

    /**
     * 系统日志
     * @return Renderable
     */
    public function log(): Renderable
    {
        return view('system/log');
    }
}
