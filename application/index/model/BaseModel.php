<?php

namespace app\index\model;

use think\Model;

class BaseModel extends Model
{
    public function imgUrlPrefix($value, $data)
    {
        if ($data['from'] == 1) {
            $finalUrl = config('setting.img_prefix').$value;
        }
        return $finalUrl;
    }
}
