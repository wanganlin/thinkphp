<?php

namespace app\request\auth;

use think\Validate;

class ResetRequest extends Validate
{
    /**
     * @var array
     */
    protected $rule = [
        'token' => 'require',
        'password' => 'require',
    ];

    /**
     * @var array
     */
    protected $message = [
        'token.require' => '密码重置令牌必须',
        'password.require' => '登录密码必须',
    ];
}
