<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        $result = Db::name('student')
            ->where('s_id','01')
            ->find();
        dump($result);
    }
}
