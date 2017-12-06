<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function __construct()
	    {
		parent::__construct();
		if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin/login");
   		  }
		
		} 
		 
		
		
		 function user_add(){
			  $this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('designation', 'Desigation', 'required');
			$this->form_validation->set_rules('usergroup', 'Usergroup', 'required');
			$this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('User_name', 'User name', 'required');
			$this->form_validation->set_rules('Password', 'Password', 'required');
			$this->form_validation->set_rules('eStatus', 'Status', 'required');
			
			
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
			if($this->form_validation->run() == FALSE)
			{
				$data['title']='useradd';
				$data['content'] = 'admin/user_add';
				$this->load->view('admin/layout/layout',$data);

	} else
	
	       
	    {
			  $dep1 = $this->input->post('department');
                 
				  if($dep1 != ''){
				 	$department=$this->dbqry->getrecordbyidrow("ats_department","id", $dep1);
		            $name1 = $department->department;
					
				  }else{
				  	$name1 = '';
				  }
				  
				   $user1 = $this->input->post('usergroup');
					
				  if($user1 != ''){
				 	$user=$this->dbqry->getrecordbyidrow("ats_user_role","iUserRoleId", $user1);
		            $name2 = $user->vRoleName; 
					
				  }else{
				  	$name2 = '';
				  }
				  
				  
				 $this->input->post('usergroup');
		$data=array(
				'name'=>$this->input->post('name'),
				'designation'=>$this->input->post('designation'),
				'usergroup'=>$name2,
				'department'=>$name1,
				'role_id'=>$this->input->post('usergroup'),
				'username'=>$this->input->post('User_name'),
				'password'=>md5($this->input->post('Password')),
				'status'=>$this->input->post('eStatus'),

				);
				 
		         $this->dbqry->insert($data,'ats_user');
					
			    $this->session->set_flashdata('msg','User added Successfully.');	
		      	  redirect(base_url()."admin/user/user_view");
		
	}
}
			
		
		
		
		public function reset_password()
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Password1', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('Password2', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('Password3', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
		if($this->form_validation->run() == FALSE)
		{
			
			$data['title']='changepassword';
			$data['content'] = 'admin/changepassword';
			$this->load->view('admin/layout/layout',$data);
		}
		else
		{
		   $data=array(
			'vPassword'=>($this->input->post('password2'))
			);
			
			$this->dbqry->update($data,'users',$id,'iUserId'); 
			$this->session->set_flashdata('msgsuccess','Password Reset Success');
			//redirect(base_url()."admin/forget_password");
    	}
	}
	
	function user_view(){
		$data['title']='userview';
			$data['content'] = 'admin/user_view';
			$this->load->view('admin/layout/layout',$data);
		
		
		}
		
		function singleuser_view($id){
			$data['id'] = $id;
		    $data['title']='userview';
			$data['content'] = 'admin/single_user';
			$this->load->view('admin/layout/layout',$data);
		
		
		}
		function edit_designation(){
			  $this->load->library('form_validation');
		    $this->form_validation->set_rules('designation', 'Designatiom Name', 'required');
						$this->form_validation->set_rules('status', 'status', 'required');
						$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
					
						if($this->form_validation->run() == FALSE)
						{
							$data['title']='Designation';
							$data['content'] = 'admin/edit_designation';
							$this->load->view('admin/layout/layout',$data);
			
						}
						 else
						{
							$data=array(
									
									'designation'=>$this->input->post('designation'),
									'status'=>$this->input->post('status'),
									
									);
									 
										 $this->dbqry->insert($data,'ats_designation');
								   
									   $this->session->set_flashdata('msg','Designation Added Successfully.');	
									  redirect(base_url()."admin/user/user_view");
							
							}
						}
		
		
		



                function reports()
							{
							
						if(isset($_POST['pdf']) != null)
						{   
						   
							//$qry = $this->input->post('pdf_view');
							
							//$data['qry'] = $this->db->query($qry)->result();
							//$data['advertisement_id']=$advertisement_id; 
							$data['title'] = "Jobcard List";  
							$data['content'] = 'admin/user_pdf';	                        
							$this->load->library('Pdf');	
							$this->pdf->load_view('admin/user_pdf',$data); 
							$this->pdf->render();
							$this->pdf->stream("ReportsPdf.pdf");
						}
						 // redirect(base_url().'admin/loginadmin/report_view.html');
				
				}
				
			
			
			 public function user_delete($id)
	            { 
     			    $table="ats_user";
					$primary="id";
					 
						$data=array(
						'status'=>"inactive",
						);	 
				   $this->dbqry->update($data,"ats_user",$id,"id");
					 
				  $this->session->set_flashdata('msg','User Deleted Successfully.');
				  redirect(base_url()."admin/user/user_view");
			
			   }
				
				
		function change_priority($id)
		{  

			
				$getid =$this->dbqry->getrecordbyidrow("ats_user_role","iUserRoleId",$this->input->post('usergroup'));
				$user_name=$getid->vRoleName; 
				
			
					$data=array(
					'role_id'=>$this->input->post('usergroup'),
					'usergroup'=>$user_name,
					);
				
				
				$this->dbqry->update($data,"ats_user",$id,"id");
				$this->session->set_flashdata('msg','Priority Changed Successfully.');	
				 redirect(base_url()."admin/user/user_view");
			
		
		}		
				
}

  

