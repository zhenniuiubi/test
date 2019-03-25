<?php
namespace app\index\validate;

use think\Validate;

class StudentValidate extends Validate
{
    protected $rule = [
        'id' => 'require|number'
    ];
    protected $message = [
        'id' => '请输入正确的ID'
    ];
}
