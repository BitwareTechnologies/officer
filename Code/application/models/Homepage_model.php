<?php
class homepage_model extends CI_Model
{
    public function uploadContract($contact_copy, $user_id)
    {
        $data = array('contact_copy'=>$contact_copy, 'user_id'=>$user_id, 'created_by'=>$user_id, 'created_at'=>date('Y-m-d H:i:s') );
	return($this->db->insert('tbl_contract',$data));
    }
}
?>