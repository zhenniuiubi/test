<?php
namespace app\index\validate;

use think\Validate;
use think\Request;
use app\lib\exception\ParameterException;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if (!$result) {
            throw new ParameterException([
                'msg' => $this->error,
            ]);
        } else {
            return true;
        }
    }
}
