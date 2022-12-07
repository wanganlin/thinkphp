<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;
use app\request\auth\ForgetRequest;
use app\request\auth\LoginRequest;
use app\request\auth\ResetRequest;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

class AuthController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [RedirectIfAuthenticated::class, ['console']],
    ];

    /**
     * @return Redirect
     */
    public function index(): Redirect
    {
        return redirect('auth/login');
    }

    /**
     * @param Request $request
     * @return Json|View
     */
    public function login(Request $request): Json|View
    {
        if ($request->isPost()) {
            try {
                validate(LoginRequest::class)->check($request->post());
            } catch (ValidateException $e) {
                return $this->error($e->getError());
            }
        }

        return view('login');
    }

    /**
     * @param Request $request
     * @return Json|View
     */
    public function forgot(Request $request): Json|View
    {
        if ($request->isPost()) {
            try {
                validate(ForgetRequest::class)->check($request->post());
            } catch (ValidateException $e) {
                return $this->error($e->getError());
            }
        }

        return view('forgot');
    }

    /**
     * @param Request $request
     * @return Json|View
     */
    public function reset(Request $request): Json|View
    {
        if ($request->isPost()) {
            try {
                validate(ResetRequest::class)->check($request->post());
            } catch (ValidateException $e) {
                return $this->error($e->getError());
            }
        }

        return view('reset');
    }
}
