<?php
namespace app\index\controller;
use think\Db;
use app\index\model\Student;
use app\index\model\TestTbGrade;
use app\index\validate\StudentValidate;
class Index
{
    public function index()
    {
        // $res = Student::with('score')->select();
        // dump($res->toArray());
        (new StudentValidate())->goCheck();
    }

    public function test()
    {
        
    }
}
