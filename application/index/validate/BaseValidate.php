<?php
namespace app\index\validate;

use think\Validate;
use think\Request;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();

        $result = $this->check($params);
        if (!$result) {
            $err = $this->error;
            throw new \Exception($err);
        } else {
            return true;
        }
    }
}
