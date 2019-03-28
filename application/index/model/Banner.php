<?php

namespace app\index\model;

use think\Model;
use think\Config;

class Banner extends Model
{
    protected $hidden = ['s_id'];
    public function score()
    {
        return $this->hasMany('score', 's_id', 's_id');
    }

    public static function getBannerById($id)
    {
        // halt(self::get($id));
        return self::get($id);
    }

    public function getUrlAttr($value)
    {
        return Config::get('config.prefix').$value;
    }
}
