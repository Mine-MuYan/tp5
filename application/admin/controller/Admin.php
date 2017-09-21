<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminsModel;

class Admin extends Controller{
    //管理员列表
    public function listAdmin(){
        $admin = new AdminsModel;
        $re = $admin -> getInfo();
        $this -> assign('re',$re);
        return view('admin/list');
    }
    
    //添加管理员
    public function addAdmin(){
        if(request() -> isPost()){
            $data   = input('post.');
            $admin  = new AdminsModel;
            $re     = $admin -> addMaster($data);
            if($re){
                $this -> success('success',url('listAdmin'));
            }else{
                $this -> error('failed');
            }
        }
        return view('admin/add');
    }
    
    //编辑管理员
    public function editAdmin($id){
        if(request()->isPost()){
            $re = db('admin')->update(input('post.'));
            if($re !== false) //两种情况：修改成功和什么都没修改都认为是修改成功
                $this->success('修改成功',url('listAdmin'));
            else
                $this->error('修改失败');
        }else{
            $re = db('admin') -> find($id);
            if(!$re)
                $this->error('此管理员不存在');
            else
                p($re);
        }
        return view('admin/edit');
    }
    
    public function delAdmin(){
    
        echo '删除成功';
    }
}
