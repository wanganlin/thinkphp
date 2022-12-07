<?php

declare(strict_types=1);

namespace app\controller\user;

use app\controller\Controller;
use app\middleware\RedirectIfAuthenticated;
use app\request\auth\ForgetRequest;
use app\request\auth\LoginRequest;
use app\request\auth\RegisterRequest;
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
        [RedirectIfAuthenticated::class, ['user']],
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
    public function register(Request $request): Json|View
    {
        if ($request->isPost()) {
            try {
                validate(RegisterRequest::class)->check($request->post());
            } catch (ValidateException $e) {
                return $this->error($e->getError());
            }
        }

        return view('register');
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

    /**
     * @param Request $request
     * @return Redirect
     */
    public function connect(Request $request): Redirect
    {

    }

    /**
     * @param Request $request
     * @return Redirect
     */
    public function callback(Request $request): Redirect
    {

    }
}
