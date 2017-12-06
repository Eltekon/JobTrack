
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usertype extends CI_Controller {

public function __construct()
	    {
		parent::__construct();
		 
		  $this->load->library('form_validation');
		
          if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin/login");
   		  }
		  
		}		
		
		
		

			public function usertype_add(){
					
						
						$this->form_validation->set_rules('vRoleName', 'Role name', 'required');
						$this->form_validation->set_rules('eStatus', 'status', 'required');
						$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
					
						if($this->form_validation->run() == FALSE)
						{
							$data['title']='Role';
							$data['content'] = 'admin/role_insert';
							$this->load->view('admin/layout/layout',$data);
			
						}
						 else
						{
							$data=array(
									
									'vRoleName'=>$this->input->post('vRoleName'),
									'eStatus'=>$this->input->post('eStatus'),
									'dAddedAt'=>date('Y-m-d H:i:s'),
									);
									 
										 $this->dbqry->insert($data,'ats_user_role');
								   
									   $this->session->set_flashdata('msg','Role Added Successfully.');	
									  redirect(base_url()."admin/usertype/usertype_view");
							
							}
						}

	       public function usertype_view(){
								$data['title']='Role';
								$data['content'] = 'admin/role_view';
								$this->load->view('admin/layout/layout',$data);
						}
						


           public function usertype_delete($id)
	            { 
	   
					 $table="ats_user_role";
					 $primary="iUserRoleId";
					 $this->dbqry->delete($table,$primary,$id);	
					 
		
		              
					 $this->session->set_flashdata('msg','Role Deleted Successfully.');
					    redirect(base_url()."admin/usertype/usertype_view");
		
			   }
		
		function usertype_update($id)
		{  
			$this->load->library('form_validation');
			$this->form_validation->set_rules('vRoleName', 'Name', 'required');
			
			
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['id'] = $id;
				$data['content'] = 'admin/role_edit';
				$this->load->view('admin/layout/layout',$data);
			}
			
			else
			{ 
			
				$getid =$this->dbqry->getrecordbyidrow("ats_user_role","iUserRoleId",$id); 
				
				
					$data=array(
					'vRoleName'=>$this->input->post('vRoleName'),
					'dUpdatedAt'=>date('Y-m-d H:i:s'),
					);
				
				
				$this->dbqry->update($data,"ats_user_role",$id,"iUserRoleId");
				$this->session->set_flashdata('msg','Role Updated Successfully.');	
				 redirect(base_url()."admin/usertype/usertype_view");
				
			}
		
		}
		
		
		
		function permission_view($id)
		{
			$data['role_id']=$id;  
			$data['title']='Permission';
			$data['content'] = 'admin/permission_view';
			$this->load->view('admin/layout/layout',$data);
		}
		
		function permission()
		{
			
			$role_id = $this->input->post('role_id');
		    $perm_check = $this->input->post('perm_check');
			$value = $this->input->post('value');
			$module = $this->input->post('module');
             
		
			$check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name','"'.$module.'"'. ' and  role_id='.$role_id.'');
	   	
	   		

			
			if($check_module)
			{
				if($value=="has_add")
				 {
					 $data=array(
					   'has_add'=>$perm_check,
					   
				      );
			         $this->dbqry->update($data,'ats_permissions',$check_module->permission_id,'permission_id');
				 }
				 else if($value=="has_view")
				 {
					 $data=array(
					   'has_view'=>$perm_check,
					   
				      );
			         $this->dbqry->update($data,'ats_permissions',$check_module->permission_id,'permission_id');
				 }
				 else if($value=="has_edit")
				 {
					 $data=array(
					   'has_edit'=>$perm_check,
					   
				      );
			         $this->dbqry->update($data,'ats_permissions',$check_module->permission_id,'permission_id');
				 }
				 else if($value=="has_delete")
				 {
					 $data=array(
					   'has_delete'=>$perm_check,
					   
				      );
			         $this->dbqry->update($data,'ats_permissions',$check_module->permission_id,'permission_id');
				 }
				
				 
				  else if($value=="Test_edit")
				 {
					 $data=array(
					   'Test_edit'=>$perm_check,
					   
				      );
			         $this->dbqry->update($data,'ats_permissions',$check_module->permission_id,'permission_id');
				 } 	  
				  else if($value=="pending_list")
				 {
					 $data=array(
					   'pending_list'=>$perm_check,
					   
				      );
			         $this->dbqry->update($data,'ats_permissions',$check_module->permission_id,'permission_id');
				 }    	    		  	
			}    
			else
			{
				 
				 if($value=="has_add")
				 {
					 $data=array(
				       'role_id'=>$role_id,
					   'module_name'=>$module,
					   'has_add'=>1,
					   
				      );
			         $this->dbqry->insert($data,'ats_permissions');
				 }
				 else if($value=="has_view")
				 {
					 //insert  
					   $data=array(
						   'role_id'=>$role_id,
						   'module_name'=>$module,
						   'has_view'=>1,
						   
						  );
					 $this->dbqry->insert($data,'ats_permissions');
				 }
				 else if($value=="has_edit")
				 {
					 //insert
					$data=array(
						   'role_id'=>$role_id,
						   'module_name'=>$module,
						   'has_edit'=>1,
						   
						  );
					 $this->dbqry->insert($data,'ats_permissions');
				 }
				 else if($value=="has_delete")
				 {
					 //insert
						$data=array(
							   'role_id'=>$role_id,
							   'module_name'=>$module,
							   'has_delete'=>1,
							   
							  );
						 $this->dbqry->insert($data,'ats_permissions');
				 }
				 
				 
				
				 
				 
				 
			}
			  
		}

		
		}
		
		
		