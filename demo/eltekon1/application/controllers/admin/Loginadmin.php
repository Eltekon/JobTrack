<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller {

public function __construct()
	    {
		parent::__construct();
		
		  
		}
		
		 
	  public function login(){
		  
		   $this->load->library('form_validation');
			
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
			if($this->form_validation->run() == FALSE)
			{
				
				$this->load->view('admin/register');
			}
			else
			{
				$login=$this->dbqry->getadminlogin($this->input->post("username"), md5($this->input->post("password")));
			
          
			if($login) 
			{
			
				$this->session->set_userdata("session_user_id", $login->id);
				$this->session->set_userdata("session_user_name", $login->name);
				$this->session->set_userdata("session_user_roleid", $login->role_id);
				$this->session->set_userdata("session_user_rolename", $login->usergroup);
				$this->session->set_userdata("session_user_email", $login->username);
				
				//$id= $this->session->userdata("session_user_rolename");
				
				redirect(base_url()."admin/loginadmin/dashboard/dashboard.html");
			}
			else
			{	
				$this->session->set_flashdata('msg','Invalid User Name or Password entered.');
				redirect(base_url()."admin/loginadmin/login");
				$this->load->view('admin/login');
			}
		}
			
		  
	  }
	  
	
	function logout()
		{
			$this->session->unset_userdata('session_user_id');	
		    redirect(base_url()."admin/loginadmin/login");
		}
		
		
		
		
		
		public function forget_password()
	      {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
		if($this->form_validation->run() == FALSE)
		{
		
			$this->load->view('admin/forget_password');
		}
		else
		{  
			   	$email=$this->dbqry->getrecordbyemail("ats_user",$this->input->post("email"));
				
				if($email)
				{
				    $id=$email->iUserId;
					
					$from_email = "eltekontech@gmail.com"; 
					$to_email = $this->input->post('email'); 
					
					//Load email library 
					$this->load->library('email'); 
					
					
					$this->email->from($from_email, 'eltekon'); 
					$this->email->to($to_email);
					$this->email->subject('Reset Your Password : '); 
					
					$link = "http://52.202.130.20/eltekon/admin/loginadmin/reset_password/'".$id."'";

					
					$this->email->message($link);
					$send = $this->email->send();
					
					//Send mail 
					if($send)
					{
						$this->session->set_flashdata('msgsuccess','Email sent successfully.'); 
						redirect(base_url()."admin/loginadmin/forget_password");
					}
					else
					{
						$this->session->set_flashdata('msg','Error in sending Email.'); 
						redirect(base_url()."admin/loginadmin/forget_password");}
					}
				else
				{
					$this->session->set_flashdata('msg','Please Enter Valid Email');
					redirect(base_url()."admin/loginadmin/forget_password");
				}
				
		
		} 
 		
	}
	
	public function reset_password($id)
	{
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/reset_password');
		}
		else
		{
		   $data=array(
			'password'=>$this->$_POST['password']
			);
			
			$this->dbquery->update($data,'ats_user',$id,'id'); 
			$this->session->set_flashdata('msgsuccess','Password Reset Success');
			redirect(base_url()."admin/loginadmin/forget_password");
    	}
	}
	
	
	public function dashboard()
	{
		 if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin");
   		  }
		$data['title']='Dashboard';
		$data['content'] = 'admin/dashboard';
		$this->load->view('admin/layout/layout',$data);
	}
	
		function profile_view(){
			$data['title']='profile';
			$data['content'] = 'admin/profile_view';
			$this->load->view('admin/layout/layout',$data);
		}
		
			
		function user_profile(){
		$data['title']='user_profile';
			$data['content'] = 'admin/user_profile';
			$this->load->view('admin/layout/layout',$data);	
		}
	
          function reports()
	          	{
				
			if(isset($_POST['pdf']) && $this->input->post('pdf_view') != null)
			{   
			   
				$qry = $this->input->post('pdf_view');
				
				$data['qry'] = $this->db->query($qry)->result();
				//$data['advertisement_id']=$advertisement_id; 
				$data['title'] = "Jobcard List";  
				$data['content'] = 'admin/pdf_reports';	                        
				$this->load->library('Pdf');	
				$this->pdf->load_view('admin/pdf_reports',$data); 
				$this->pdf->render();
				$this->pdf->stream("ReportsPdf.pdf");
			}
	         // redirect(base_url().'admin/loginadmin/report_view.html');
	
	}
	
	public function user_profile_add(){
		        $id= $this->session->userdata("session_user_id"); 
				
					  $config1['upload_path'] = './FileUpload/images/';
					  $config1['allowed_types'] = 'gif|jpg|png|JPEG';
					  $config1['max_size'] = '1000000';

     				  $this->load->library('upload', $config1);
				  				  
					if ($this->upload->do_upload('photos'))
                    {
						
					    	$image = $this->upload->data();
							
					}
			      $profile_id =$this->session->userdata("session_user_id");
		       $data=array(
			    'user_id'=>$profile_id,
				'Name'=>$this->input->post('Name'),
				'Email'=>$this->input->post('Email'),
				'ContactNum'=>$this->input->post('ContactNum'),
				'Marital_Status'=>$this->input->post('Marital_Status'),
				'Father_name'=>$this->input->post('Father_name'),
				'Mother_name'=>$this->input->post('Mother_name'),
				'DOB'=>$this->input->post('DOB'),
		        'Address1'=>$this->input->post('Address1'),
				'Address2'=>$this->input->post('Address2'),
		        'City'=>$this->input->post('City'),
				'Location'=>$this->input->post('Location'),
				'AlternativeNum'=>$this->input->post('AlternativeNum'),
				'Qualification'=>$this->input->post('Qualification'),
				'Job_Position'=>$this->input->post('Job_Position'),
				'YearOf_Exp'=>$this->input->post('YearOf_Exp'),
				'Department'=>$this->input->post('Department'),
				
				'photos'=>$image['file_name'],
	
				);
				$res= $this->dbqry->getrecordbyidrow("ats_user_profile","user_id",$id);
				 if($res){
					 
					 
					 $this->dbqry->update($data,"ats_user_profile",$id,"user_id");
					 $this->session->set_flashdata('msg','Profile Updated Successfully.');	
		      	     redirect(base_url()."admin/loginadmin/profile_view");
				 }else{
				 
		             $this->dbqry->insert($data,'ats_user_profile');
			   
			         $this->session->set_flashdata('msg','Profile added Successfully.');	
		      	     redirect(base_url()."admin/loginadmin/profile_view");
				 }
	}

	public function change_password()
	       {
		    $id=$this->session->userdata("session_user_id");
			$old_pass=$this->dbqry->getrecordbyidrow("ats_user","id",$this->session->userdata("session_user_id"));
			$fetchpassword=$old_pass->password;
		
			   $cur_pass= md5($this->input->post('cur_pass'));
			 
			
				if($fetchpassword == $cur_pass)
				{  
			   
				  $data=array(
				'password'=>md5($this->input->post('new_pass')),
				);
				 	$this->dbqry->update($data,"ats_user",$id,"id");
					
					$this->session->set_flashdata('msg_success','Password Changed Successfully');
		      		redirect(base_url()."admin/loginadmin/profile_view");
				}
				else
				{
					 
					$this->session->set_flashdata('msg_failer','Wrong Old Password');
					redirect(base_url()."admin/loginadmin/profile_view");
				}
				 	
		     }	
	}
	
	
	

	
	
	


  

