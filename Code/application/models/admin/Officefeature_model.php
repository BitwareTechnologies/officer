<?php
class officefeature_model extends CI_Model
{
    public function listOfficeFeatures()
    {
        $this->db->select('*');
        $this->db->from('tbl_office_feature');
        $this->db->order_by('office_feature_id','asc');        
        $query = $this->db->get();        
        return $query->result();
    }
    public function showOfficeFeature($office_feature_id)
    {        
	$result = $this->db->get_where('tbl_office_feature', array('office_feature_id' => $office_feature_id));        
	return $result->row_array();
    }
    public function insertOfficeFeature($office_feature_name,$created_at,$created_by)
    {        
        $data = array('office_feature_name'=>$office_feature_name, 'created_at'=>$created_at, 'created_by'=>$created_by );
	return($this->db->insert('tbl_office_feature',$data));
    }
    public function updateOfficeFeature($office_feature_id, $office_feature_name, $updated_at, $updated_by)
    {
        $data = array('office_feature_name'=>$office_feature_name, 'updated_at'=>$updated_at, 'updated_by'=>$updated_by);
        $this->db->where('office_feature_id', $office_feature_id);
        return($this->db->update('tbl_office_feature',$data));
    }
    public function deleteOfficeFeature($office_feature_id)
    {
        $this->db->where('office_feature_id', $office_feature_id);
        return($this->db->delete('tbl_office_feature'));
    }
}
?>