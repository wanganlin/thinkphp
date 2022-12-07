<?php

declare(strict_types=1);

namespace app\controller\api;

use OpenApi\Generator;

class IndexController extends BaseController
{
    /**
     * @OA\Info(title="My First API", version="0.1")
     * @package app\controller\api
     * @return string
     */
    public function index(): string
    {
        $openapi = Generator::scan([app_path('controller')]);
        return $openapi->toYaml();
    }
}
