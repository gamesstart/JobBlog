<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
class Arclist extends Admin_Controller {
	public function index() {
		$this->load->view ( $this->config->item ( 'admin_folder' ) . '/table' );
	}

}