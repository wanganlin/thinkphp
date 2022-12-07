<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    {:csrf_token()}
    <title>{$page_title|default=''}</title>
    <link rel="stylesheet" href="/static/vendor/layui@2.6.8/css/layui.css">
    <link rel="stylesheet" href="/static/css/app.css">
    <script type="text/javascript" src="/static/vendor/layui@2.6.8/layui.js"></script>
    <script type="text/javascript" src="/static/vendor/vue@2.6.14/vue.min.js"></script>
    <script type="text/javascript" src="/static/js/app.js" defer></script>
</head>
<body>

<div>
    {if condition="session('?auth_web')"}
    <a href="{:url('/home')}">会员中心</a> |
    <a href="{:url('/home/index/logout')}">注销</a>
    {else}
    <a href="{:url('/auth/register')}">免费注册</a> |
    <a href="{:url('/auth/login')}">登录</a>
    {/if}
</div>

{__CONTENT__}
</body>
</html>
