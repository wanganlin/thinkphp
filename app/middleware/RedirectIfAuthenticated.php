<?php

declare (strict_types=1);

namespace app\middleware;

use Closure;
use think\Request;
use think\Response;

class RedirectIfAuthenticated
{
    /**
     * 处理请求
     *
     * @param Request $request
     * @param Closure $next
     * @param string $guard
     * @return Response
     */
    public function handle(Request $request, Closure $next, string $guard): Response
    {
        if (session('?auth_' . $guard)) {
            if ($request->isAjax()) {
                return json([
                    'code' => 40001,
                    'message' => 'Forbidden',
                    'data' => null,
                ]);
            } else {
                return redirect('/' . $guard);
            }
        }

        return $next($request);
    }
}
