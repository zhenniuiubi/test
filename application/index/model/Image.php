<?php

namespace app\index\model;

use think\Model;

class Image extends BaseModel
{
    protected $hidden = ['id','from','delete_time','update_time'];
    public function getUrlAttr($value, $data)
    {
        return $this->imgUrlPrefix($value, $data);
    }
}
