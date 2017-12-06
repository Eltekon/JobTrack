<?php
	class Dbqry extends CI_Model{
		
	public function __construct()
	{
		parent::__construct();
	}		
	function insert($data,$table)
	{
	 	$this->db->insert($table,$data);
		return true;	
	}	
	function select($table)
	{
	    $sql = "select * from `".$table."` limit 50";
		$query = $this->db->query($sql);	
		return $query->result();
	}
	
	function select_user($table)
	{
	    $sql = "select * from ".$table." where `status`= 'active'";
		$query = $this->db->query($sql);	
		return $query->result();
	}
	
	function update($data, $table, $id, $primary) {
		$this->db->where($primary, $id);
		$this->db->update($table, $data);
		return true;
	}	
	function delete($table, $primary, $id)
	{
		$this->db->delete($table, array($primary => $id));
	    return true;
	}
	function getrecordbyid($table, $dbid, $id) {
		$sql="select * from ".$table." where ".$dbid."=".$id;
        $query = $this->db->query($sql);
		return $query->result();
	}
	function getrecordbyidrow($table, $dbid, $id) {
		$sql="select * from ".$table." where ".$dbid."=".$id;
        $query = $this->db->query($sql);
		return $query->row();
	}
	
	function allreadyexist($table, $dbid, $id) {
	    $sql="select * from ".$table." where ".$dbid."='".$id."' and status!=-1";
        $query = $this->db->query($sql);
		return $query->row();
	 }
	function getadminlogin($user, $password)
	 {
		 $sql = "select * from `ats_user` where `username` = '".str_replace("'", "",$user)."' and `password` = '".str_replace("'", "",($password))."'";
		$query = $this->db->query($sql);
		
	
		return $query->row();
	 }

    public function fetch_countries($limit) {
        $sql = "select a.*,b.brand_name,c.category_name from `products` a,`brand` b, category c ";
			$sql.=' where  a.category_id=c.category_id and a.brand_id=b.brand_id  and a.status!=-1 ';
			
			if($this->input->get('search') != "" &&  $this->input->get('search') != "undefined") {
				$search = $this->input->get('search');
				  
				$sql.=" and (a.`product_name` like '%".$search."%' or b.brand_name like '%".$search."%' or c.category_name like '%".$search."%'  or a.product_code like '%".$search."%')";
			} 
			else
			{
				$search="";
			}
			
			$sql.=" order by a.`product_id` DESC ".$limit."";
			$query = $this->db->query($sql);
		    return $query->result();
   }
   
   
   public function fetch_data($year,$month){
	  
	  $sql= "select * from monitoring_data where YEAR(dDate) = '".$year."' AND MONTH(dDate) = '".$month."'";
	 $query = $this->db->query($sql);
	  return $query->result();
	  
 
   }
 
 
 function getrecordbyemail($table, $email) {
		$sql="select * from ".$table." where `email` = '".$email."'";
        $query = $this->db->query($sql);
		return $query->row();
	 }
	 
function select_jobcard($table){

  $sql = "select * from `".$table."` order by `id` desc " ;
		$query = $this->db->query($sql);	
		return $query->result();

}

 public function maxcardno($table)
 {
    
	$sql= "select max(cardno) as maximum from `".$table."`";
	$query = $this->db->query($sql);	
		return $query->row();
	 
 }
 
 	function getrecordbypermission($table, $dbrole_id, $role_id, $mod_name) {
		$sql="select * from ".$table." where ".$dbrole_id."=".$role_id." and `module_name` ='".$mod_name."";
        $query = $this->db->query($sql);
		return $query->row();
	}


	function checkpermission($roleid, $module)
	 {
		 $sql = "select * from `ats_permissions` where `role_id` = '".$roleid."' and module_name = '".$module."'";
		$query = $this->db->query($sql);
		return $query->row();
	 }

    function select_job($table)
	 {
		 $sql = "select * from `ats_jobcards` where `jobcardstatus` ='Unauthorised' or `jobcardstatus` ='Unauthorized'";
		$query = $this->db->query($sql);
		return $query->result();
	 }

	function select_jobcrd($table)
	 {
		 $sql = "select * from `ats_jobcards` where `jobcardstatus` != 'Unauthorised' and `jobcardstatus` != 'Unauthorized'";
		$query = $this->db->query($sql);
		return $query->result();
	 }
	 
	 function chktestcnt($jobid)
	 {
		$sql = "SELECT count(*) as test_cnt  FROM `test` WHERE `jobcard` = '".$jobid."'";
		$query = $this->db->query($sql);
		return $query->row()->test_cnt;
	 }

	 

    function update_jobcard($data, $table, $status, $id) {
		$this->db->where( $status, $id);
		$this->db->update($table, $data);
		return true;
	}	
	
	}