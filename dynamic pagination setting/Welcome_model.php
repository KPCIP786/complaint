<?php
class Welcome_model extends CI_Model{

    public function __construct(){
        parent:: __construct();
    }


public function auth_check($data)
    {
        $query = $this->db->get_where('user', $data);
		///$query = $this->db->get_where('subscribers_tbl',array('status'=> active','email' => 'info@arjun.net.in'));
		///echo $this->db->last_query();
		 ////exit;
        if($query){   
         return $query->row();
		 
        }
        return false;
    }
	function Totalrows(){
	 	$query = $this->db->query('SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,user as u,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 OR gcd.tier_id=2 OR gcd.tier_id=3 or gcd.tier_id=5) AND gs.status_id=gcd.status_id AND gcd.status_id=2 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id And gcd.user_id=u.user_id AND u.city_id=c.city_id');
	 	return $query->num_rows();
	 }
	 function Totallist($limit,$offset){
	 	$q = $this->db->query('SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,grm_tier_tbl As t,grc_status_tbl As gs,grc_zone_tbl as gzt,grm_uc_tbl as gut,grm_nc_tbl as gnt,user as u,city as c where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND t.tier_id=gcd.tier_id AND (gcd.tier_id=1 OR gcd.tier_id=2 OR gcd.tier_id=3 or gcd.tier_id=5) AND gs.status_id=gcd.status_id AND gcd.status_id=2 AND gcd.zone_id=gzt.zone_id AND gcd.uc_id=gut.uc_id AND gcd.nc_id=gnt.nc_id And gcd.user_id=u.user_id AND u.city_id=c.city_id $limit $offset ');
	 	//$query = $this->db->query("Select * from ppms_ss_db LIMIT $limit OFFSET 5")->result();
	 	return $q->result();
	 }
	function create_record($form_data,$tble)
	{
		$this->db->insert($tble, $form_data);
		
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
	function edit_record($form_data,$tbl,$field,$id) {
        $this->db->where($field, $id);
		$i = $this->db->update($tbl,$form_data); 	  
		return $i;
	}

   function get_allJsonData()
{
    $arr = array();
    $this->db->from('size');
    $this->db->order_by("size_id", "asc");
    $query = $this->db->get();
    foreach($query->result_object() as $rows )
    {
        $arr[] = $rows;
    }
    return "{\"data\":" .json_encode($arr). "}";
}
///////////////////////////////reporting/////////////////


function display($table,$where = NULL)
	{
		if($where ){
		$this->db->where($where);
		}
		$query = $this->db->get($table);
		
	//echo $this->db->last_query();
	return $query->result();
	}


   function update_about($form_data) {
        ///$this->db->where('web_about_id',$id);
		$i = $this->db->update('web_about_us', $form_data); 	  
		return $i;
	}
	
function update_record($form_data,$tableName) {
        ///$this->db->where('web_about_id',$id);
		$i = $this->db->update($tableName, $form_data); 	  
		return $i;
	}



}
	
	
	

	?>