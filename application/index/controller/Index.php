<?php
namespace app\index\controller;
use think\Db;
use app\index\model\Banner;
use app\index\model\TestTbGrade;
use app\index\validate\StudentValidate;
use think\Controller;
class Index extends Controller
{
    public function _empty()
    {
        $this->error('index');
    }
    public function index()
    {
        return $this->display('hello');
    }

    public function test()
    {
        
    }
}
