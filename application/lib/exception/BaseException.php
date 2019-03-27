<?php
namespace app\lib\exception;

class BaseException extends \Exception
{
    //HTTP状态码
    public $code = '400';
    //错误具体信息
    public $msg = 'param error';
    //自定义的错误码
    public $errorCode = 10000;

    public function __construct($params=[])
    {
        if (!is_array($params)) {
            return;
        }

        if (array_key_exists('code', $params)) {
            $this->code  = $params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg  = $params['msg'];
        }
        if (array_key_exists('errorCode', $params)) {
            $this->errorCode  = $params['errorCode'];
        }
    }
}
