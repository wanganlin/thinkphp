<?php

declare(strict_types=1);

namespace app\controller\user;

class SecurityController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request): Renderable
    {
        return $this->display('user.security');
    }
}
