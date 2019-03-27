<?php
namespace app\lib\exception;

use app\lib\exception\BaseException;

class StudentMissException extends BaseException
{
    //HTTP状态码
    protected $code = '400';
    //错误具体信息
    protected $msg = '请求的学生不存在';
    //自定义的错误码
    protected $errorCode = 10001;
}
