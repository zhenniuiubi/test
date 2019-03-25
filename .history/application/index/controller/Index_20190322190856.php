<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        // $result = Db::name('student')
        //     ->where('s_id','01')
        //     ->select();
        $data = [
            ['s_id' => '09',
            's_name' => '上户彩',
            's_birth' => '1988-05-20',
            's_sex' => '女'],
            ['s_id' => '010',
            's_name' => '上户彩',
            's_birth' => '1988-05-20',
            's_sex' => '女'],
        ];
        $result = Db::name('student')
            ->insert($data);
        // $result = Db::getTableInfo('student','pk');
        // if (empty($result)) {
        //     //无数据
        //     echo 0;
        // }else{
        //     echo 1;
        // }
        dump($result);
    }
}
