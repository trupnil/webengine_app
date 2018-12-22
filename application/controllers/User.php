<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Model');
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
		$this->load->view('theme/compose');

		
	}
	public function sent_message()
	{
 	 	$data['sender_id'] =   $this->session->userdata('user_email');
 	 	$data['reciver_id'] =   $this->input->post('reciver_id');
 	 	$data['messge_text'] =   $this->input->post('message');
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
			echo "ooek";
		}
		else
		{
			echo "not done";
		}
    }


	public function auth()
	{
		$data['user_email'] = $this->input->post('email'); 
		$data['user_password'] = $this->input->post('password');
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
		$this->redirect('user/signup');

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

public function message_details($id)
{

	$where = array("message_id" => $id);
	$data['full_message']  = $this->Model->select_where("message",$where);
// print_r($data['full_message']);
	$this->load->view('theme/messaage_details',$data);

}
	public function signup()
	{
		$this->load->view('theme/signup');
	}
	
	public function registration()
	{
		$data['User_name'] = $this->input->post('name');
		$data['User_email'] = $this->input->post('email');
		$data['User_password'] = $this->input->post('password');
		$data['User_mobile'] = $this->input->post('mobile');

		 $ins=  $this->db->insert("user",$data);	

		 if($ins)
		 {
		 	echo "registratyion";

		 }
		 else
		 {
		 	echo "error";
		 }
		//print_r($data);





	}


}
