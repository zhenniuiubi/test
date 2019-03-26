<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\index\validate\StudentValidate;
use app\index\model\Student as StudentModel;
use app\lib\exception\StudentMissException;

class Student extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function getStudent($id)
    {
        (new StudentValidate())->goCheck($id);
        $students = StudentModel::getStudentById();
        if (!$students) {
            throw new StudentMissException();
        }
        return $students;
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
