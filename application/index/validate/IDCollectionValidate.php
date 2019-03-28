<?php
namespace app\index\validate;

use app\index\validate\BaseValidate;

class IDCollectionValidate extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];
    protected $message = [
        'ids.checkIDs' => 'ID必须为整数',
    ];

    protected function checkIDs($value)
    {
        $ids = explode(',', $value);
        foreach ($ids as $v) {
            if (is_numeric($v)) {
                return true;
            } else {
                return false;
            }
        }
    }
}
