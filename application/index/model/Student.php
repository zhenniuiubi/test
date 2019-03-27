<?php

namespace app\index\model;

use think\Model;

class Student extends Model
{
    public function score()
    {
        return $this->hasMany('score', 's_id', 's_id');
    }

    public static function getStudentById($id)
    {
        // halt(self::get($id));
        return self::get($id);
    }
}
