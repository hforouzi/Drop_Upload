<?php

class Site extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function members_area()
	{
		$data['main_content'] = 'upload_view';
		$this->load->view('includes/template', $data);
	}
	
	public function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
	}
	
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
			die();		
			//$this->load->view('login_form');
		}		
	}	

}

?>