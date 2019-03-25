<?php
namespace app\index\controller;
use think\Db;
use app\index\model\Student;

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
            ['s_id' => '10',
            's_name' => '上户彩',
            's_birth' => '1988-05-20',
            's_sex' => '女'],
        ];
        $result = Db::name('student')
            ->insertAll($data);
        // $result = Db::getTableInfo('student','pk');
        // if (empty($result)) {
        //     //无数据
        //     echo 0;
        // }else{
        //     echo 1;
        // }
        dump($result);
    }

    public function test()
    {
        //1.创建模型对象$model  
        //此时的模型对象仅仅完成了与特定数据表的绑定  
        //理论上讲，仍是一个没有任何数据的空模型  
        // $model = new Staff();
        //2.创建数据源,供创建数据对象使用  $data = [];      
            
        //3.data()方法完成前面模型对象的$data属性赋值  
        //使模型对象转换成数据对象,现在$model 已经是数据对象啦  
        $model = new Student();
        $data[['s_name'=>'1'],['s_name'=>'2']] = '呵呵下';
        $model -> data($data);

        return $model->getAttr('s_name');
    }
}
