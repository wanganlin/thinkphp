<?php

declare(strict_types=1);

namespace app\controller\user;

class ProfileController extends BaseController
{
    /**
     * @param Request $request
     * @return Renderable
     */
    public function index(Request $request): Renderable
    {
        return $this->display('user.profile');
    }
}
