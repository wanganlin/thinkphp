<?php

/**
 * 验证邮箱地址格式
 * @param $email
 * @return bool
 */
function is_email($email): bool
{
    return !(filter_var($email, FILTER_VALIDATE_EMAIL) === false);
}

/**
 * 验证手机号码格式
 * @param $mobile
 * @return bool
 */
function is_mobile($mobile): bool
{
    $rule = '/^1[3-9]\d{9}$/';

    return is_scalar($mobile) && 1 === preg_match($rule, (string)$mobile);
}

/**
 * 生成资源文件链接
 * @param string $path
 * @param bool|null $secure
 * @return string
 */
function asset(string $path, bool $secure = null): string
{
    return request()->rootUrl() . '/' . ltrim($path, '/') . '?v=' . env('RELEASE');
}

/**
 * 主题文件链接
 * @param $url
 * @return string
 */
function theme($url): string
{
    return asset('themes/default/' . ltrim($url, '/'));
}
