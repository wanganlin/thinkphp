<?php

namespace app\controller\api;

use think\response\Json;

class CategoryController extends BaseController
{
    /**
     * @return Json
     */
    public function index(): Json
    {
        return $this->succeed('category');
    }
}
