<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->load->model('homepage_model');
    }
    public function index()
    {
        add_css(array('plugins/jasny/jasny-bootstrap.min.css'));
        add_js(array('jquery-3.1.1.min.js','plugins/jasny/jasny-bootstrap.min.js'));
        $data = array(                
            'title' => 'Officer - Homepage',
            'message'=>''                
        );

        $this->load->view('homepage', $data);
    }
    public function do_upload()
    {       
        add_css(array('plugins/jasny/jasny-bootstrap.min.css'));
        add_js(array('jquery-3.1.1.min.js','plugins/jasny/jasny-bootstrap.min.js'));

        $config['file_name']          = $_FILES['contact_copy']['name'];
        $config['upload_path']          = './contract_files/';
        $config['allowed_types']        = 'pdf|doc|docx|xls|xlsx';            

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('contact_copy'))
        {
            $data = array(
                'title' => 'Officer - Homepage',
                'message' => 'Please select file',                
            );

            $this->load->view('homepage', $data);
        }
        else
        {
            $result = $this->homepage_model->uploadContract($this->upload->data('file_name'));

            $data = array(
                'title' => 'Officer - Homepage',                
                'message' => 'File Uploaded Successfully'
            );

            $this->load->view('homepage', $data);
        }
    }
}