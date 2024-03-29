<?php 

class Login extends CI_Controller {
	
	public function index()
	{
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template', $data);		
	}

	public function profile_settings()
	{
		$data['main_content'] = 'update_form';
		$this->load->view('includes/template', $data);		
	}
	
	public function validate_credentials()
	{		
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('site/members_area');
		}
		else // incorrect username or password
		{
			$this->index();
		}
	}	
	
	public function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}
	
	public function create_member()
	{
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'signup_form';
			$this->load->view('includes/template', $data);
		}
		
		else
		{			
			$this->load->model('membership_model');
			
			if($query = $this->membership_model->create_member())
			{
				$data['main_content'] = 'signup_successful';
				$this->load->view('includes/template', $data);
			}
			else
			{
				$data['main_content'] = 'signup_form';
				$this->load->view('includes/template', $data);			
			}
		}
		
	}

	public function profile_update()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$data['main_content'] = 'update_form';
			$this->load->view('includes/template', $data);
		}
		
		else
		{			
			$this->load->model('membership_model');
			
			if($query = $this->membership_model->update_member())
			{
				redirect('site/members_area');
			}
			else
			{
				$data['main_content'] = 'update_form';
				$this->load->view('includes/template', $data);			
			}
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	
}

?>