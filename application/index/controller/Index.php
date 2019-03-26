<?php
namespace app\index\controller;
use think\Db;
use app\index\model\Student;
use app\index\model\TestTbGrade;

class Index
{
    public function index()
    {
        $res = Student::with('score')->select();
        dump($res->toArray());
    }

    public function test()
    {
        
    }
}
