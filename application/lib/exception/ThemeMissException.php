<?php
namespace app\lib\exception;

use app\lib\exception\BaseException;

class ThemeMissException extends BaseException
{
    //HTTP状态码
    public $code = '400';
    //错误具体信息
    public $msg = '请求的theme不存在';
    //自定义的错误码
    public $errorCode = 10002;
}
