
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

public function __construct()
	    {
		parent::__construct();
		 if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin/login");
   		  } 
		  
		  
		}
		

			public function department_add(){
					$this->load->library('form_validation');
						
						$this->form_validation->set_rules('department', 'Department Name', 'required');
						$this->form_validation->set_rules('status', 'status', 'required');
						$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
					
						if($this->form_validation->run() == FALSE)
						{
							$data['title']='Department';
							$data['content'] = 'admin/department';
							$this->load->view('admin/layout/layout',$data);
			
						}
						 else
						{
							$data=array(
									
									'department'=>$this->input->post('department'),
									'status'=>$this->input->post('status'),
									
									);
									 
										 $this->dbqry->insert($data,'ats_department');
								   
									   $this->session->set_flashdata('msg','Department Added Successfully.');	
									  redirect(base_url()."admin/department/department_view");
							
							}
						}

	       public function department_view(){
								$data['title']='Department';
								$data['content'] = 'admin/department_view';
								$this->load->view('admin/layout/layout',$data);
						}
						


           public function department_delete($id)
	            { 
	   
					 $table="ats_department";
					 $primary="id";
					 $this->dbqry->delete($table,$primary,$id);	
					 
		
		              
					 $this->session->set_flashdata('msg','Department Deleted Successfully.');
					   redirect(base_url()."admin/department/department_view");
		
			   }
		
		function department_update($id)
		{  
			$this->load->library('form_validation');
				
						$this->form_validation->set_rules('department', 'Department Name', 'required');
						$this->form_validation->set_rules('eStatus', 'status', 'required');
			
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['id'] = $id;
				$data['content'] = 'admin/department_edit';
				$this->load->view('admin/layout/layout',$data);
			}
			
			else
			{ 
			
			
			
				$getid =$this->dbqry->getrecordbyidrow("ats_department","id",$id); 
				
				
					$data=array(
					'department'=>$this->input->post('department'),
									
					'status'=>$this->input->post('eStatus'),
					
					);
				
				
				$this->dbqry->update($data,"ats_department",$id,"id");
				$this->session->set_flashdata('msg','Department Updated Successfully.');	
				redirect(base_url()."admin/department/department_view");
				
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
							$data['content'] = 'admin/department_pdf';	                        
							$this->load->library('Pdf');	
							$this->pdf->load_view('admin/department_pdf',$data); 
							$this->pdf->render();
							$this->pdf->stream("ReportsPdf.pdf");
						}
						 // redirect(base_url().'admin/loginadmin/report_view.html');
				
				}
				
				
		}
		
		
		