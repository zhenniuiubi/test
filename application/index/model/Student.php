<?php

namespace app\index\model;

use think\Model;

class Student extends Model
{
    public function score()
    {
        return $this->hasMany('score','s_id','s_id');
    }
}
