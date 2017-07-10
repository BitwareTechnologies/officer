<?php
class officefeature_model extends CI_Model
{
    public function listOfficeFeatures()
    {
        $this->db->select('*');
        $this->db->from('tbl_features');
        $this->db->order_by('feature_id','asc');        
        $query = $this->db->get();        
        return $query->result();
    }
    public function showOfficeFeature($feature_id)
    {        
	$result = $this->db->get_where('tbl_features', array('feature_id' => $feature_id));        
	return $result->row_array();
    }
    public function insertOfficeFeature($feature_name,$created_at,$created_by)
    {        
        $data = array('feature_name'=>$feature_name, 'created_at'=>$created_at, 'created_by'=>$created_by );
	return($this->db->insert('tbl_features',$data));
    }
    public function updateOfficeFeature($feature_id, $feature_name, $updated_at, $updated_by)
    {
        $data = array('feature_name'=>$feature_name, 'updated_at'=>$updated_at, 'updated_by'=>$updated_by);
        $this->db->where('feature_id', $feature_id);
        return($this->db->update('tbl_features',$data));
    }
    public function deleteOfficeFeature($feature_id)
    {
        $this->db->where('feature_id', $feature_id);
        return($this->db->delete('tbl_features'));
    }
}
?>