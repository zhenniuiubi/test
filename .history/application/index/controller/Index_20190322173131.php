<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        // $result = Db::name('student')
        //     ->where('s_id','1')
        //     ->select();
        $result = Db::name('student')
            // ->where('s_id','01')
            ->column('s_name1');
        // $result = Db::getTableInfo('student','pk');
        // if (is_null($result)) {
        //     //无数据
        //     echo 0;
        // }else{
        //     echo 1;
        // }
        dump($result);
    }
}
