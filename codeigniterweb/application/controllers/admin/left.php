<?php  if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
class left extends Admin_Controller{
	public function index(){
		$data['cname_0'] = '报名管理';
		$data['curl_0']  = base_url($this->config->item('admin_folder').'/arclist');
		$data['cname_1'] = '修改密码';
		$data['curl_1']  = base_url($this->config->item('admin_folder').'/login/resetpwd');
		$this->load->view($this->config->item('admin_folder').'/left',$data);
	}
	
}