<?php
namespace Home\Controller;
use Think\Controller;
class SalonController extends Controller{
	public function index(){
		$model = M('salon');
		$data = $model->select();

		$this->assign('data',$data);
		$this->display();
	}
	public function salon(){
		
		
		$img = M('simg');
		$imgs = $img->where('sid=%d',$_GET['id'])->select();
		
		$bimg = M('bimg');
		$bimgs = $bimg->where('sid=%d',$_GET['id'])->find();

		
		$this->assign('bimg',$bimgs);
		$this->assign('img',$imgs);
		
		$this->display();
	}
}