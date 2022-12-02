<?php

declare(strict_types=1);

namespace app\controller\web;

use app\controller\Controller;
use think\facade\Config;

/**
 * Class BaseController
 */
abstract class BaseController extends Controller
{
    protected function initialize()
    {
        Config::set(['view_dir_name' => 'public/themes/default'], 'view');
    }
}
