<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        $result = Db::name('student')
            ->where('s_id','1')
            ->select();
        if (is_null($result)) {
            echo 1;
        }else{
            echo 0;
        }
        dump($result);
    }
}
