<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 
	
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('theme/index');
	}

	public function dashboard()
	{
		$this->load->view('theme/dashboard');
	}

	public function compose()
	{
		if(empty($this->session->userdata('user_id')))
		{
			redirect('User/index');
		}
		else
		{
			$this->load->view('theme/compose');
	
		}
		
		
	}
	public function sent_message()
	{

		if(empty($this->session->userdata('user_id')))
		{
			redirect('User/index');
		}
		else
		{

        $data['sender_id'] =   $this->session->userdata('user_email');
 	 	$data['reciver_id'] =   $this->input->post('reciver_id');
 	 	$data['messge_text'] =   base64_encode($this->input->post('message'));
 	    $data['subject'] =   $this->input->post('subject');
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|ppt|zip|doc|xls';
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
            $this->load->library('upload', $config); 

            $this->upload->do_upload('file');
            $upload_data =    $this->upload->data();
		    $data['attachement'] = $upload_data['file_name'];

 	 	//print_r($data);
 	 	 $insert =  $this->Model->insert('message',$data);
		if($insert)
		{
			$this->session->set_flashdata('message_sent','Message sent');
		 	
			redirect('User/inbox');
		}
		else
		{
			echo "not done";
		}
		}
 	 	
    }


	public function auth()
	{
		$data['user_email'] = $this->input->post('email'); 
		$data['user_password'] = md5($this->input->post('password'));
        $login = $this->Model->select_where("user",$data);
		// echo "<pre>";
		// print_r($login);

		if(count($login) == 1)
		{
			$this->load->library('session');
			$sess_array = array(); //data member
			foreach ($login as $key => $value) {

				$sess_array = array(
                "user_id" => $value->user_id,
				"user_name" => $value->user_name,
				"user_email" => $value->user_email,
				"user_password" => $value->user_password
				
                   );
                $this->session->set_userdata($sess_array);
                //echo $this->session->userdata('user_name');
                redirect('User/inbox');
			}
}
}


public function inbox()
{
	if(empty($this->session->userdata('user_email')))
	{
		redirect('user/signup');

	}
	else
	{
		$userdata=   $this->session->userdata('user_email');
		$where = ["reciver_id" => $userdata];
		$data['inbox'] = $this->Model->select_where("message",$where);
		//echo "<pre>";
		//print_r($data['inbox']);
		$this->load->view("theme/inbox",$data);
	}
	



}


public function Sent_box()
{
	if(empty($this->session->userdata('user_email')))
	{
		redirect('user/signup');

	}
	else
	{
		$userdata=   $this->session->userdata('user_email');
		$where = ["sender_id" => $userdata];
		$data['sent_message'] = $this->Model->select_where("message",$where);
		//echo "<pre>";
		//print_r($data['sent_message']);
		$this->load->view("theme/sent_box",$data);
	}
	



}

public function message_details($id)
{

if(empty($this->session->userdata('use?)_ud')))
{

	   redirect('User/index');

}
else
{
	
	$where = array("message_id" => $id);
	$data['full_message']  = $this->Model->select_where("message",$where);
// print_r($data['full_message']);
	$this->load->view('theme/messaage_details',$data);

}

	

}
	public function signup()
	{
		$this->load->view('theme/signup');
	}
	
	public function registration()
	{
		$data['User_name'] = $this->input->post('name');
		$folder_name = $this->input->post('name');
		$data['User_email'] = $this->input->post('email');
		$data['User_password'] = md5($this->input->post('password'));
		$data['User_mobile'] = $this->input->post('mobile');

		 $ins=  $this->db->insert("user",$data);	

		 if($ins)
		 {
		 	mkdir('uploads/'.$folder_name);
		 	$this->session->set_flashdata('item','Registration Succesfully');
		 	redirect('User/index');



		 }
		 else
		 {
		 	echo "error";
		 }
		//print_r($data);
    }

    public function logout()
    {
    	session_destroy();
    	redirect('User/index');
    }




}
