<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function login()
	{

		if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['username']))
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$query = $this->db->get_where('user', array('username'=>$username, 'password'=>$password));
			if(!empty($query->result()))
			{
				$user_data = $query->result_array();

				$this->session->set_userdata('user_login', 'true');
				$this->session->set_userdata('user_id', $user_data[0]['id']);

				redirect('user/dashboard');
			} 
			else 
			{
				$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Invalid Credentials</div>');
				redirect('user/login');
			}
		}
		
		
		$this->load->view('user/login');
	}
	public function registration()
	{
		
		if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['username']))
		{
			$username = $this->input->post('username');
			$name = $this->input->post('name');
			$password = md5($this->input->post('password'));

			$query = $this->db->get_where('user', array('username'=>$username));
			if(empty($query->result()))
			{
				$user_data = array(
					'username' => $username,
					'name' => $name,
					'password' => $password,
					'created_at' => date('Y-m-d G:i:s')
				);

				if($this->db->insert('user', $user_data))
				{
					$this->session->set_flashdata('user_status','<div class="alert alert-success" role="alert">User Registred Successfully</div>');
					redirect('user/login');
				}
				else
				{
					$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Some Technical Error, Please Try Again</div>');
					redirect('user/registration');
				}    
			} 
			else 
			{
				$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Username Already Registered, plese try another username</div>');
				redirect('user/registration');
			}
		}

		$this->load->view('user/registration');	
	}

	public function dashboard()
	{
		if($this->session->userdata('user_login'))
		{
			$id = $this->session->userdata('user_id');
			if($id != "")
			{
				$query = $this->db->get_where('user', array('id'=>$id));
				if(!empty($query->result()))
				{
					$user_data = $query->result_array();
					$data['name'] = $user_data[0]['name'];	
					$this->load->view('user/dashboard', $data);
				}
				else
				{
					$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Please Login</div>');
					redirect('user/login');
				}
			}
			else
			{
				$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Please Login</div>');
				redirect('user/login');
			}
		}
		else
		{
			$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Please Login</div>');
			redirect('user/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('user_id');
		$this->session->set_flashdata('user_status','<div class="alert alert-success" role="alert">Logout Successfully</div>');
		redirect('user/login');
	}
}
