<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        $result = Db::name('student')
            ->where('s_id','101')
            ->select();
    
        // $result = Db::getTableInfo('student','pk');
        if (empty($result)) {
            //无数据
            echo 0;
        }else{
            echo 1;
        }
        dump($result);
    }
}
