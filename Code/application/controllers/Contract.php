<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract extends MY_Controller {

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
	public function index()
	{            
            add_css(array('bootstrap-tagsinput.css','jasny-bootstrap-fileinput.min.css','chosen.min.css'));
            add_js(array('handlebars.js','typeahead.bundle.min.js','jquery.nicescroll.min.js','index.js','bootbox.js','bootstrap-tagsinput.min.js','jasny-bootstrap.fileinput.min.js','holder.js','bootstrap-maxlength.min.js','jquery.autosize.min.js','chosen.jquery.min.js','apps.js','blankon.form.element.js','demo.js'));
            $data = array(
                // Set title page
                'title' => 'Contracts',
                // Set CSS plugins

                // Active menu on sidebar left
                'active_contract'=>'active',
                // Page Content            
                'message' => ''
            );

            $this->load->view('contract', $data);         
	}
        public function do_upload()
        {
            add_css(array('bootstrap-tagsinput.css','jasny-bootstrap-fileinput.min.css','chosen.min.css'));
            add_js(array('handlebars.js','typeahead.bundle.min.js','jquery.nicescroll.min.js','index.js','bootbox.js','bootstrap-tagsinput.min.js','jasny-bootstrap.fileinput.min.js','holder.js','bootstrap-maxlength.min.js','jquery.autosize.min.js','chosen.jquery.min.js','apps.js','blankon.form.element.js','demo.js'));
            
            $config['upload_path']          = './contract_files/';
            $config['allowed_types']        = 'pdf|doc|docx|xls|xlsx';            

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('contact_copy'))
            {
                $data = array(
                    'title' => 'Contracts',
                    'message' => 'Please select file',
                    'active_contract'=>'active'
                );

                $this->load->view('contract', $data);
            }
            else
            {
                $data = array(
                    'title' => 'Contracts',
                    'active_contract'=>'active',
                    'message' => 'File Uploaded Successfully'
                );

                $this->load->view('contract', $data);
            }
        }
}
