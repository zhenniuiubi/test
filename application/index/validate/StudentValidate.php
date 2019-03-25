<?php

class StudentValidate
{
    protected $rule = [
        'id' => 'require|number'
    ];
    protected $message = [
        'id' => '请输入正确的ID'
    ];
}