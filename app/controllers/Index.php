<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		// 检查cookie是否设置语言提示
		if(!isset($_COOKIE["lang_tip"]))
		{// 如果没有设置
			setcookie("lang_tip", "cn", time()+3600*24*365);
			$this->load->view('jump_page');
			return;
		}
		
		$data['cur_index'] = "cur";
		$this->load->view('index',$data);
		$this->load->view('module/footer');
	}
	
	/*
	 * 膳蔻小镇：town
	 * 膳蔻会员：member
	 * 联系我们：contact
	 * 加入我们：joinus
	 * */
	public function brand($page="town")
	{
		$data['cur_brand'] = "cur";
		$this->load->view('module/header',$data);
		$this->load->view('brand/'.$page);
		$this->load->view('module/footer');
	}
	public function product($page="index")
	{
		$data['cur_product'] = "cur";
		$this->load->view('module/header',$data);
		$this->load->view('product/'.$page);
		$this->load->view('module/footer');
	}
	public function recipe($page="article-1")
	{
		$data['cur_recipe'] = "cur";
		$this->load->view('module/header',$data);
		$this->load->view('recipe/'.$page);
		$this->load->view('module/footer');
	}
	public function coop($page="groupon")
	{
		$this->load->view('module/header');
		$this->load->view('coop/'.$page);
		$this->load->view('module/footer');
	}
	public function activity($page="loveback")
	{
		$data['cur_activity'] = "cur";
		$this->load->view('module/header',$data);
		$this->load->view('activity/'.$page);
		$this->load->view('module/footer');
	}
}
