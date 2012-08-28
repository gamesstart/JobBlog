<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth
{
	var $CI;
	
	//session 过期时间 600秒
	var $session_expire	= 600;

	function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('encrypt');
		
		$admin_session_config = array(
		    'sess_cookie_name' => 'admin_session_config',
		    'sess_expiration' => 0
		);
		$this->CI->load->library('session', $admin_session_config, 'admin_session');
		
		$this->CI->load->helper('url');
	}
   /*
	检查用户是否登录 没有登录 跳转到登录页面 , 已经登录的检查是否过期 跳转到登录页面
	*/
	function is_logged_in($redirect = false, $default_redirect = true)
	{
	
		//var_dump($this->CI->admin_session->userdata('session_id'));

		//$redirect allows us to choose where a customer will get redirected to after they login
		//$default_redirect points is to the login page, if you do not want this, you can set it to false and then redirect wherever you wish.

		$admin = $this->CI->admin_session->userdata('admin');
		
		if (!$admin)
		{

			
			if ($redirect)
			{
				$this->CI->admin_session->set_flashdata('redirect', $redirect);
			}
				
			if ($default_redirect)
			{	
				redirect($this->CI->config->item('admin_folder').'/login');
			}
			
			return false;
		}
		else
		{
		
			//检查登录的session是否过期
			if($admin['expire'] && $admin['expire'] < time())
			{

				$this->logout();
				if($redirect)
				{
					$this->CI->admin_session->set_flashdata('redirect', $redirect);
				}

				if($default_redirect)
				{
					redirect($this->CI->config->item('admin_folder').'/login');
				}

				return false;
			}
			else
			{
				//重置登录时间
				if($admin['expire'])
				{
					$admin['expire'] = time()+$this->session_expire;
					$this->CI->admin_session->set_userdata(array('admin'=>$admin));
				}

			}

			return true;
		}
	}
	/*
	登录后台
	*/
	function login_admin($username, $password, $remember=false)
	{
		$this->CI->db->select('*');
		$this->CI->db->where('loginid', $username);
		$this->CI->db->where('password',  md5($this->CI->config->item('encryption_key').$password));
		$this->CI->db->limit(1);
		$result = $this->CI->db->get('member');
		$result	= $result->row_array();
		
		if (sizeof($result) > 0)
		{
			$admin = array();
			$admin['admin']			= array();
			$admin['admin']['id']		= $result['uid'];
			$admin['admin']['isu'] 	= $result['isu'];
			$admin['admin']['truename']	= $result['truename'];
			$admin['admin']['email']	= $result['email'];
			
			if(!$remember)
			{
				$admin['admin']['expire'] = time()+$this->session_expire;
			}
			else
			{
				$admin['admin']['expire'] = false;
			}

			$this->CI->admin_session->set_userdata($admin);
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/*
	安全退出
	*/
	function logout()
	{
		$this->CI->admin_session->unset_userdata('admin');
		$this->CI->admin_session->sess_destroy();
	}

	/*
	修改密码
	*/
	function reset_password($email)
	{
		$admin = $this->get_admin_by_email($email);
		if ($admin)
		{
			$this->CI->load->helper('string');
			$this->CI->load->library('email');
			
			$new_password		= random_string('alnum', 8);
			$admin['password']	= sha1($new_password);
			$this->save_admin($admin);
			
			$this->CI->email->from($this->CI->config->item('email'), $this->CI->config->item('site_name'));
			$this->CI->email->to($email);
			$this->CI->email->subject($this->CI->config->item('site_name').': Admin Password Reset');
			$this->CI->email->message('Your password has been reset to '. $new_password .'.');
			$this->CI->email->send();
			return true;
		}
		else
		{
			return false;
		}
	}
	
	/*
	This function gets the admin by their email address and returns the values in an array
	it is not intended to be called outside this class
	*/
	private function get_admin_by_email($email)
	{
		$this->CI->db->select('*');
		$this->CI->db->where('email', $email);
		$this->CI->db->limit(1);
		$result = $this->CI->db->get('member');
		$result = $result->row_array();

		if (sizeof($result) > 0)
		{
			return $result;	
		}
		else
		{
			return false;
		}
	}
	
	/*
	插入修改账户信息
	*/
	function save($admin)
	{
		if ($admin['uid'])
		{
			$this->CI->db->where('uid', $admin['uid']);
			$this->CI->db->update('member', $admin);
		}
		else
		{
			$this->CI->db->insert('member', $admin);
		}
	}
	
	
	/*
	获取账户列表
	*/
	function get_admin_list()
	{
		$this->CI->db->select('*');
		$this->CI->db->order_by('uid', 'ASC');
		$this->CI->db->order_by('cdate', 'ASC');
		$this->CI->db->order_by('email', 'ASC');
		$result = $this->CI->db->get('member');
		$result	= $result->result();
		
		return $result;
	}

	/*
	This function gets an individual admin
	*/
	function get_admin($id)
	{
		$this->CI->db->select('*');
		$this->CI->db->where('uid', $id);
		$result	= $this->CI->db->get('member');
		$result	= $result->row();

		return $result;
	}		
	
	function check_id($str)
	{
		$this->CI->db->select('uid');
		$this->CI->db->from('member');
		$this->CI->db->where('uid', $str);
		$count = $this->CI->db->count_all_results();
		
		if ($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	
	function check_email($str, $id=false)
	{
		$this->CI->db->select('email');
		$this->CI->db->from('member');
		$this->CI->db->where('email', $str);
		if ($id)
		{
			$this->CI->db->where('uid !=', $id);
		}
		$count = $this->CI->db->count_all_results();
		
		if ($count > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function delete($id)
	{
		if ($this->check_id($id))
		{
			$admin	= $this->get_admin($id);
			$this->CI->db->where('uid', $id);
			$this->CI->db->limit(1);
			$this->CI->db->delete('member');

			return $admin->loginid.' . '.$admin->truename.' 被删除.';
		}
		else
		{
			return '没有这个账号';
		}
	}
}