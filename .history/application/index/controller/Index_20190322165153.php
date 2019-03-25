<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        $result = Db::name('student')
            ->where('s_id','01')
            ->select();
        if (is_null($result)) {
            echo 0;
        }else{
            echo 1;
        }
        dump($result);
    }
}
