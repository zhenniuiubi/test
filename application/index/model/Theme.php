<?php

namespace app\index\model;

use think\Model;

class Theme extends BaseModel
{
    public function topicImg()
    {
        return $this->belongsTo('image', 'topic_img_id', 'id');
    }

    public function headImg()
    {
        return $this->belongsTo('image', 'head_img_id', 'id');
    }
}
