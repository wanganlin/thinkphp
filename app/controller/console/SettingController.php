<?php

declare(strict_types=1);

namespace app\controller\console;

class SettingController extends BaseController
{
    /**
     * 基本参数
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('setting/index');
    }

    /**
     * 公司信息
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function company(): Renderable
    {
        return view('setting/company');
    }

    /**
     * 网站信息
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function site(): Renderable
    {
        return view('setting/site');
    }

    /**
     * 邮件设置
     * @requestMapping(parent_id=1, menu=1)
     * @return Renderable
     */
    public function email(): Renderable
    {
        return view('setting/email');
    }
}
