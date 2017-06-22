<?php
class login_model extends CI_Model
{
    public function checkUser($user_email, $user_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('user_email', $user_email);
        $this->db->where('user_password', $user_password);
        $query = $this->db->get();        
        return $query->result();
    }
}
?>