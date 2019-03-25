<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        $result = Db::table('student')
            ->where('s_id',1)
            ->find();
        dump($result);
    }
}
