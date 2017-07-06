<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Officefeatures extends MY_Controller {

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
    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->model('admin/officefeature_model');
    }
    public function index()
    {
        if ($this->is_logged_in())
        {
            add_css(array('plugins/dataTables/datatables.min.css'));
            add_js(array('plugins/dataTables/datatables.min.js'));
            $data = array(                    
                'title' => 'Office Features List',
                'active_office_features'=>'active',
                'officeFeatureData' => $this->officefeature_model->listOfficeFeatures(),
                'message' => ''
            );
            $this->load->view('admin/officefeatures', $data);		
        }
        else
        {
            redirect('admin/login');
        }
    }
    public function addOfficeFeatures()
    {        
        if ($this->is_logged_in())
        {
            $data = array(                    
                'title' => 'Add Office Features',
                'active_office_features'=>'active'                
            );
            
            $this->load->view('admin/addofficefeatures', $data);		
        }
        else
        {
            redirect('admin/login');
        }
    }
    public function insertOfficeFeatures()
    {
        $this->form_validation->set_rules('office_feature_name', '<b>Office Feature</b>', 'required');

        if ($this->form_validation->run() == FALSE)
        {                
            $this->load->view('admin/addofficefeatures');
        }
        else
        {
            $office_feature_name = $_POST['office_feature_name'];
            $created_at = date('Y-m-d H:i:s');
            $created_by = $this->session->userdata('user_id');

            $result = $this->officefeature_model->insertOfficeFeature($office_feature_name, $created_at, $created_by);           
            
            $data = array(                    
                'title' => 'Office Features Add',
                'active_office_features'=>'active',
                'officeFeatureData' => $this->officefeature_model->listOfficeFeatures(),
                'message' => 'Office Feature Added Successfully'
            );
            $this->load->view('admin/officefeatures', $data);
        }
    }
    public function updateofficefeatures($office_feature_id)
    {
        if(isset($_POST['office_feature_id']))
        {
            $this->form_validation->set_rules('office_feature_name', '<b>Office Feature</b>', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('admin/addofficefeatures');
                }
                else
                {                        
                    $office_feature_id = $_POST['office_feature_id'];
                    $office_feature_name = $_POST['office_feature_name'];
                    $updated_at = date('Y-m-d H:i:s');
                    $updated_by = $this->session->userdata('user_id');

                    $result = $this->officefeature_model->updateOfficeFeature($office_feature_id, $office_feature_name, $updated_at, $updated_by);
                    $data = array(                    
	                'title' => 'Office Features List',
	                'active_office_features'=>'active',
	                'officeFeatureData' => $this->officefeature_model->listOfficeFeatures(),
	                'message' => 'Office Feature Updated Successfully'
	            );
	            $this->load->view('admin/officefeatures', $data);
                    
                    //redirect('admin/officefeatures');
                }
        }
        else 
        {
            $data = array(                    
                'title' => 'Office Features Update',
                'active_office_features'=>'active',
                'officeFeatureData' => $this->officefeature_model->showOfficeFeature($office_feature_id),
                'message' => 'Office Feature Updated Successfully'
            );
            $this->load->view('admin/addofficefeatures',$data);
        }            
    }
    public function deleteOfficeFeatures($office_feature_id)
    {		
        $result = $this->officefeature_model->deleteOfficeFeature($office_feature_id);        
        $data = array(                    
                'title' => 'Office Features List',
	        'active_office_features'=>'active',
	        'officeFeatureData' => $this->officefeature_model->listOfficeFeatures(),
	        'message' => 'Office Feature Deleted Successfully'
	    );
	    $this->load->view('admin/officefeatures', $data);
        //redirect(base_url('index.php/admin/officefeatures'));
    }
}