<?php
class Login extends CI_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->library ( 'Auth' );
		$this->load->library('session');
	}
	public function index() {
		$redirect	= $this->auth->is_logged_in(false, false);
		//已经登录 直接进入首页
		if ($redirect)
		{
			redirect($this->config->item('admin_folder').'/welcome');
		}
		$data['redirect']	= $this->session->flashdata('redirect');
		$dopost 			= $this->input->post('dopost');
		if ($dopost)
		{
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');
			$remember   = $this->input->post('remember');
			$redirect	= $this->input->post('redirect');
			$login		= $this->auth->login_admin($username, $password, $remember);
			if ($login)
			{
				if ($redirect == '')
				{
					$redirect = $this->config->item('admin_folder').'/welcome';
				}
				redirect($redirect);
			}
			else
			{
				//设置上一次的访问地址
				$this->session->set_flashdata( 'message', array('title'=>'系统提示','content'=>'密码错误!','type'=>'error'));
				$this->session->set_flashdata('redirect', $redirect);
				redirect($this->config->item('admin_folder').'/login');
			}
			
		}
		$this->load->view($this->config->item('admin_folder').'/login',$data);
	}
	function logout() {
		$this->auth->logout ();
		$this->session->set_flashdata( 'message', array('title'=>'系统提示','content'=>'已经安全退出!','type'=>'message'));
		// when someone logs out, automatically redirect them to the login page.
		redirect ( $this->config->item ( 'admin_folder' ) . '/login');
	}
	function resetpwd(){
		$this->load->view($this->config->item('admin_folder').'/resetpwd');
	}
}