<?php
namespace app\admin\model;
use think\Model;

class Admin extends Model{
    
    protected $pk = 'id';
    
    //添加管理员
    public function addMaster($data){
        if(empty($data) || !is_array($data)){
            return false;
        }
        if($data['password']){
            $data['password'] = md5($data['password']);
        }
        $re = $this -> save($data);
        if($re){
            return true;
        }else{
            return false;
        }
       
    }
    //查询&分页
    public function getInfo(){
        return  $this -> paginate(5,false,[
            'type' => 'bootstrap',
            'var_page' => 'page'
        ]);
        //上面paginate()的第三个属性为默认属性
    }
    
}
