<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller 
{
	public function login()
	{

		if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['mobile']))
		{
			$mobile = $this->input->post('mobile');
			$password = md5($this->input->post('password'));

			$query = $this->db->get_where('vendor', array('mobile'=>$mobile, 'password'=>$password));
			if(!empty($query->result()))
			{
				$vendor_data = $query->result_array();

				$this->session->set_userdata('vendor_login', 'true');
				$this->session->set_userdata('vendor_id', $vendor_data[0]['id']);

				redirect('vendor/dashboard');
			} 
			else 
			{
				$this->session->set_flashdata('vendor_status','<div class="alert alert-danger" role="alert">Invalid Credentials</div>');
				redirect('vendor/login');
			}
		}
		$this->load->view('vendor/login');
	}
	public function registration()
	{
		
		if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['mobile']))
		{
			$mobile = $this->input->post('mobile');
			$name = $this->input->post('name');
			$password = md5($this->input->post('password'));

			$query = $this->db->get_where('vendor', array('mobile'=>$mobile));
			if(empty($query->result()))
			{
				$vendor_data = array(
					'mobile' => $mobile,
					'name' => $name,
					'password' => $password,
					'created_at' => date('Y-m-d G:i:s')
				);

				if($this->db->insert('vendor', $vendor_data))
				{
					$this->session->set_flashdata('vendor_status','<div class="alert alert-success" role="alert">Shopkeeper Registred Successfully</div>');
					redirect('vendor/login');
				}
				else
				{
					$this->session->set_flashdata('vendor_status','<div class="alert alert-danger" role="alert">Some Technical Error, Please Try Again</div>');
					redirect('vendor/registration');
				}    
			} 
			else 
			{
				$this->session->set_flashdata('vendor_status','<div class="alert alert-danger" role="alert">Mobile Already Registered, plese try another username</div>');
				redirect('vendor/registration');
			}
		}

		$this->load->view('vendor/registration');	
	}

	public function dashboard()
	{
		if($this->session->userdata('vendor_login'))
		{
			$id = $this->session->userdata('vendor_id');
			if($id != "")
			{
				$query = $this->db->get_where('vendor', array('id'=>$id));
				if(!empty($query->result()))
				{
					$vendor_data = $query->result_array();
					$data['name'] = $vendor_data[0]['name'];	
					$this->load->view('vendor/dashboard', $data);
				}
				else
				{
					$this->session->set_flashdata('vendor_status','<div class="alert alert-danger" role="alert">Please Login</div>');
					redirect('vendor/login');
				}
			}
			else
			{
				$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Please Login</div>');
				redirect('vendor/login');
			}
		}
		else
		{
			$this->session->set_flashdata('user_status','<div class="alert alert-danger" role="alert">Please Login</div>');
			redirect('vendor/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('vendor_login');
		$this->session->unset_userdata('vendor_id');
		$this->session->set_flashdata('vendor_status','<div class="alert alert-success" role="alert">Logout Successfully</div>');
		redirect('vendor/login');
	}

	public function list()
	{
		$query = $this->db->query('select title, description, price from store_vendor_list');
		if(!empty($query->result()) )
		{
			$data = $query->result_array();

			$response_code = array(
				'status'=>1,
				'items'=>$data
			);

			echo "<pre>";
			echo json_encode($response_code, JSON_PRETTY_PRINT);
			exit();
		}
		else
		{
			$response_code = array(
				'status'=>0,
				'items'=>0
			);

			echo "<pre>";
			echo json_encode($response_code, JSON_PRETTY_PRINT);
			exit();
		}
	}
}
