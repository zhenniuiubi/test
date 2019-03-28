<?php

namespace app\index\model;

use app\index\model\BaseModel;

class Banner extends BaseModel
{
    protected $hidden = ['s_id'];
    public function score()
    {
        return $this->hasMany('score', 's_id', 's_id');
    }

    public static function getBannerById($id)
    {
        return self::get($id);
    }

    public function getUrlAttr($value, $data)
    {
        return $this->imgUrlPrefix($value, $data);
    }
}
