<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\View;

class IndexController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 起始页
     * @return Renderable
     */
    public function dashboard(): Renderable
    {
        return view('index.dashboard');
    }

    /**
     * @return Json
     */
    public function logout(): Json
    {
        session('auth_console', null);
        return $this->succeed('logout');
    }
}
