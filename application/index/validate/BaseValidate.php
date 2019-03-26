<?php
namespace app\index\validate;

use think\Validate;
use think\Request;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $param = $request->param();

        $result = $this->batch()->check($param);
        if (!$result) {
            $err = $this->error;
            throw new \Exception($err);

            //TODO: 完成抛出异常
        }else{
            return;
        }
    }
}
