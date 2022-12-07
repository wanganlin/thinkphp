<?php

declare(strict_types=1);

namespace app\controller\console;

class UpgradeController extends BaseController
{
    /**
     * 在线更新
     * @getMapping(parent_id=5, menu=1)
     * @return Renderable
     */
    public function index(): Renderable
    {
        return view('upgrade/index');
    }
}
