<?php
namespace app\lib\exception;

use think\exception\Handle;
use think\Request;
use think\Log;
use think\Config;
class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(\Exception $e)
    {
        if ($e instanceof BaseException) {
            //如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {
            if (Config::get('app.debug')) {
                //生产模式
                parent::render($e);
            }else{
                $this->code = 500;
                $this->msg = '服务器内部错误';
                $this->errorCode = 999;
            }
            $this->recordErrorLog($e);
        }
        $request = Request::instance();

        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request->url(),
        ];
        return json($result, $this->code);
    }

    public function recordErrorLog(\Exception $e)
    {
        Log::init([
            // 日志记录方式，内置 file socket 支持扩展
            'type'  => 'File',
            // 日志保存目录
            'path'  => LOG_PATH,
            // 日志记录级别
            'level' => ['sql'],
        ]);
        
        Log::record($e->getMessage(),'error');
    }
}
