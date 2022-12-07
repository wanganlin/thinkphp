<?php

declare(strict_types=1);

namespace app\controller\api;

use OpenApi\Generator;

/**
 * Class IndexController
 * @OA\Info(title="My First API", version="0.1")
 * @package app\controller\api
 */
class IndexController extends BaseController
{
    /**
     * @return string
     */
    public function index(): string
    {
        $openapi = Generator::scan([app_path('controller')]);
        return $openapi->toYaml();
    }
}
