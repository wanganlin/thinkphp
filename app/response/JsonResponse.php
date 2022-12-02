<?php

namespace app\response;

use think\facade\Session;
use think\response\Json;

/**
 * Class JsonResponse
 * @package app\response
 */
trait JsonResponse
{
    /**
     * @var string 客户端 ID
     */
    protected string $clientId = 'X-Client-Id';

    /**
     * 返回封装后的API数据到客户端
     * @param mixed $data 要返回的数据
     * @param array $headers 发送的Header信息
     * @return \think\response\Json
     */
    protected function success($data, array $headers = []): Json
    {
        return $this->response([
            'code' => 0,
            'message' => 'ok',
            'data' => $data,
        ], $headers);
    }

    /**
     * 返回异常数据到客户端
     * @param string $message
     * @param int $code
     * @param array $headers
     * @return \think\response\Json
     */
    protected function error(string $message = '', int $code = 40001, array $headers = []): Json
    {
        return $this->response([
            'code' => $code,
            'message' => $message,
            'data' => null,
        ], $headers);
    }

    /**
     * 返回 Json 数据格式
     * @param $data
     * @param array $headers
     * @return \think\response\Json
     */
    protected function response($data, array $headers = []): Json
    {
        $clientId = request()->header($this->clientId, md5(Session::getId()));

        return json($data, 200, array_merge($headers, [$this->clientId => $clientId]));
    }
}
