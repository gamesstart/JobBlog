<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Admin_Controller {
	function __construct(){
		parent::__construct();//继承ci的构造函数
	}

	public function index()
	{
		$this->load->view($this->config->item('admin_folder')."/welcome");
	}
	public function top() {
		$this->load->view ( $this->config->item ('admin_folder') . '/top' );
	}

	public function foot(){
		$this->load->view($this->config->item('admin_folder').'/foot');
	}
	public function drag(){
		$this->load->view($this->config->item('admin_folder').'/drag');
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/admin/welcome.php */