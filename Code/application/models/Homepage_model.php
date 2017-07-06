<?php
class homepage_model extends CI_Model
{
    public function uploadContract($contact_copy)
    {
        $data = array('contact_copy'=>$contact_copy, 'created_at'=>date('Y-m-d H:i:s') );
	return($this->db->insert('tbl_contract',$data));
    }
}
?>