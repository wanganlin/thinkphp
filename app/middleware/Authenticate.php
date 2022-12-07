<?php

declare (strict_types=1);

namespace app\middleware;

use Closure;
use think\Request;
use think\Response;

class Authenticate
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
        if (!session('?auth_' . $guard)) {
            $callback = urlencode($request->url(true));
            return redirect($guard . '/auth/login?callback=' . $callback);
        }

        return $next($request);
    }
}
