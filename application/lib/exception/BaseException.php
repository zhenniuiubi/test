<?php

use think\Exception;

class BaseException
{
    //HTTP状态码
    protected $code = '400';
    //错误具体信息
    protected $msg = 'param error';
    //自定义的错误码
    protected $errorCode = 10000;
}
