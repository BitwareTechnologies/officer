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
        $this->load->model('login_model');
    }
	
    public function index()
    {
        add_css(array('sign.css'));
        add_js(array('retina.min.js','jquery.validate.min.js','blankon.sign.js'));
        
        $data = array(
                'message' => ''
            );
            $this->load->view('login', $data);
    }
    public function checkValidUser()
    {
        add_css(array('sign.css'));
        add_js(array('retina.min.js','jquery.validate.min.js','blankon.sign.js'));
        
        $this->form_validation->set_rules('user_email', '<b>Username</b>', 'required');
        $this->form_validation->set_rules('user_password', '<b>Password</b>', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $data = array(
                'message' => 'Please enter Valid Credentials'
            );
            $this->load->view('login', $data); 
        }
        else
        {
                $user_email = $_POST['user_email'];
                $user_password = $_POST['user_password'];

                $result = $this->login_model->checkUser($user_email, $user_password);

                if($result)
                {                    
                        $this->session->set_userdata('user_id',$result[0]->user_id);                    
                        redirect(base_url('index.php/dashboard'));
                }
                else
                {
                        redirect(base_url('index.php/login/index/fail'));
                }
        }
    }
    public function signout()
    {            
        $this->session->unset_userdata('user_id');
        redirect(base_url('index.php/login'));
    }
}
