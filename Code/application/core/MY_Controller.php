<?php
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function is_logged_in()
    {
        $user_id = $this->session->userdata('user_id');
        return isset($user_id);
    }
    public function get_username()
    {        
        $username = $this->db->get_where('tbl_users',array('user_id'=>$this->session->userdata('user_id')));
        return $username->row_array();
    }
}
?>