<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
class IndexController extends Controller {
    public function index(){
        $data=M('us');
        $info=$data->find(2);

        $this->assign('info',$info);
        $this->display();
    }
    function canzhan(){
        $data=M('zhanshang');
        $post=I('post.');

        $return=$data->add($post);
        if($return){
            $this->redirect('index',array(),2,"参加成功");
        }else{
            $this->redirect('index',array(),2,"参加失败，请重试");
        }
        $this->display();
    }
    function detail(){
        $data=M('us');
        $info=$data->find(2);
        $detail=$info['ourdetail'];
        $this->assign('detail',$detail);
        $this->display();
    }
}