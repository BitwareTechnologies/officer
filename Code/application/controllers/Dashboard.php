<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

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
            if ($this->is_logged_in())
            {
                add_css(array('dropzone.css','jquery.gritter.css'));
                add_js(array('bootstrap-session-timeout.min.js','flot/jquery.flot.js',
                        'flot/jquery.flot.spline.min.js',
                        'flot/jquery.flot.categories.js',
                        'flot/jquery.flot.tooltip.min.js',
                        'flot/jquery.flot.resize.js',
                        'flot/jquery.flot.pie.js','dropzone.min.js','jquery.gritter.min.js','skycons.js','blankon.dashboard.js'));
                $data = array(
                    // Set title page
                    'title' => 'DASHBOARD',
                    // Set CSS plugins
                    
                    // Active menu on sidebar left
                    'active_dashboard'=>'active'
                    // Page Content                    
                );

                $this->load->view('dashboard', $data);		
            }
            else
            {
                redirect('login');
            }
	}
}