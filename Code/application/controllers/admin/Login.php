<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->model('admin/login_model');
    }
	
    public function index()
    {        
        $data = array(
            'title' => 'Admin Login',
            'message' => ''
        );
        $this->load->view('admin/login', $data);
    }
    public function checkValidUser()
    {
        $this->form_validation->set_rules('user_email', '<b>Username</b>', 'required');
        $this->form_validation->set_rules('user_password', '<b>Password</b>', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'title' => 'Admin Login',
                'message' => 'Please enter Valid Credentials'
            );
            $this->load->view('admin/login', $data); 
        }
        else
        {
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];
                
                $result = $this->login_model->checkUser($user_email, $user_password);
                
                $session_data = array(
                    'user_id'       =>  $result[0]->user_id,
                    'user_role_id'  =>  $result[0]->user_role_id,
                    'user_first_name'  =>  $result[0]->user_first_name,
                    'user_last_name'  =>  $result[0]->user_last_name,
                    'user_email'  =>  $result[0]->user_email
                );
                if($result)
                {                    
                    $this->session->set_userdata($session_data);                    
                    redirect(base_url('index.php/admin/dashboard'));
                }
                else
                {
                    $data = array(
                        'title' => 'Admin Login',
                        'message' => 'Please enter Valid Credentials'
                    );
                    $this->load->view('admin/login', $data); 
                }
        }
    }
    public function signout()
    {            
        $this->session->unset_userdata('user_id');
        $data = array(
            'title' => 'Admin Login',
            'message' => 'Successfully Logged out'
        );
        $this->load->view('admin/login', $data);
    }
}
