
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specification extends CI_Controller {

public function __construct()
	    {
		parent::__construct();
		if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin/login");
   		  }
		  
		}
		

public function specification_add(){
		
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('spec_no', 'Name', 'required');
			$this->form_validation->set_rules('tittle', 'Title', 'required');
			$this->form_validation->set_rules('issue_no', 'Issue Number', 'required');
			$this->form_validation->set_rules('version', 'Version name', 'required');
			$this->form_validation->set_rules('status', 'status', 'required');
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
			if($this->form_validation->run() == FALSE)
			{
				$data['title']='Test';
				$data['content'] = 'admin/specification_insert';
		     	$this->load->view('admin/layout/layout',$data);

	} else
	{
		$data=array(
				
				'spec_no'=>$this->input->post('spec_no'),
				'tittle'=>$this->input->post('tittle'),
				'issue_no'=>$this->input->post('issue_no'),
				'version'=>$this->input->post('version'),
				'status'=>$this->input->post('status'),
			
				
				);
				 
		             $this->dbqry->insert($data,'ats_testmethod');
			   
			    $this->session->set_flashdata('msg','Test added Successfully.');	
		      	  redirect(base_url()."admin/specification/specification_view");
		
	}
}
	
     public function specification_view(){
								$data['title']='Test';
								$data['content'] = 'admin/specification_view';
								$this->load->view('admin/layout/layout',$data);
						}
						
    public function specification_update($id)
	 	{  
		
		    
		    $this->load->library('form_validation');
			$this->form_validation->set_rules('spec_no', 'Name', 'required');
			$this->form_validation->set_rules('tittle', 'Title', 'required');
			$this->form_validation->set_rules('issue_no', 'Issue Number', 'required');
			$this->form_validation->set_rules('version', 'Version name', 'required');
			$this->form_validation->set_rules('eStatus', 'status', 'required');
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
			
		
			if ($this->form_validation->run() == FALSE)
			{  
			  
				$data['id'] = $id;
				$data['content'] = 'admin/specification_edit';
				$this->load->view('admin/layout/layout',$data);
				
				
			}
			
			
			else
			{ 
			  
			
				$getid = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$id); 
				
				
					$data=array(
				'spec_no'=>$this->input->post('spec_no'),
				'tittle'=>$this->input->post('tittle'),
				'issue_no'=>$this->input->post('issue_no'),
				'version'=>$this->input->post('version'),
				'status'=>$this->input->post('eStatus'),
			
					);
					
					
				
				$this->dbqry->update($data,"ats_testmethod",$id,"id");
			
				$this->session->set_flashdata('msg','Test Updated Successfully.');	
				redirect(base_url()."admin/specification/specification_view");
				
			}
		
		}

	    public function specification_delete($id)
	            { 
	   
					 $table="ats_testmethod";
					 $primary="id";
					 $this->dbqry->delete($table,$primary,$id);	
					 
		
		 
					 //$this->session->set_flashdata('msg','Contact Deleted Successfully.');
					  redirect(base_url()."admin/specification/specification_view");
		           $this->session->set_flashdata('msg','Test deleted Successfully.');	
			   }
		
	          function reports()
							{
							
						if(isset($_POST['pdf']) != null)
						{   
						   
							//$qry = $this->input->post('pdf_view');
							
							//$data['qry'] = $this->db->query($qry)->result();
							//$data['advertisement_id']=$advertisement_id; 
							$data['title'] = "Jobcard List";  
							$data['content'] = 'admin/specification_pdf';	                        
							$this->load->library('Pdf');	
							$this->pdf->load_view('admin/specification_pdf',$data); 
							$this->pdf->render();
							$this->pdf->stream("ReportsPdf.pdf");
						}
						 // redirect(base_url().'admin/loginadmin/report_view.html');
				
				}
				
				

}