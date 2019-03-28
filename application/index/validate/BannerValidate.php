<?php
namespace app\index\validate;

use app\index\validate\BaseValidate;

class BannerValidate extends BaseValidate
{
    protected $rule = [
        'id' => 'require|number'
    ];
    protected $message = [
        'id' => '请输入正确的ID'
    ];
}
