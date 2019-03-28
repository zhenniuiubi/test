<?php

namespace app\index\model;

use think\Model;
use think\Config;

class Student extends Model
{
    protected $hidden = ['s_id'];
    public function score()
    {
        return $this->hasMany('score', 's_id', 's_id');
    }

    public static function getStudentById($id)
    {
        // halt(self::get($id));
        return self::get($id);
    }

    public function getSNameAttr($value)
    {
        return Config::get('config.prefix').$value;
    }
}
