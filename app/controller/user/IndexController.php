<?php

declare(strict_types=1);

namespace app\controller\user;

use think\response\View;

/**
 * Class IndexController
 */
class IndexController extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }
}
