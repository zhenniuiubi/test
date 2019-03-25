<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        $result = Db::name('student')
            ->find(1);
        dump($result);
    }
}
