<?php

declare(strict_types=1);

namespace app\controller\api;

use think\response\Json;

/**
 * Class IndexController
 */
class IndexController extends BaseController
{
    /**
     * @return Json
     */
    public function index(): Json
    {
        return $this->success(['a']);
    }
}
