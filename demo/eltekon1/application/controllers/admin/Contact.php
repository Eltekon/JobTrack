
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

public function __construct()
	    {
		parent::__construct();
		if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin/login");
   		  }
		
		}
		

public function contact_add(){
		  $this->load->library('form_validation');
			$this->form_validation->set_rules('client', 'Name', 'required');
			$this->form_validation->set_rules('asset_owner', 'Name', 'required');
			$this->form_validation->set_rules('contract_no', 'Title', 'required');
			$this->form_validation->set_rules('order_no', 'Issue Number', 'required');
			$this->form_validation->set_rules('location', 'Version name', 'required');
			$this->form_validation->set_rules('pcm', 'status', 'required');
			$this->form_validation->set_rules('signatory', 'status', 'required');
			$this->form_validation->set_rules('telephone1', 'status', 'required');
			$this->form_validation->set_rules('email1', 'status', 'required');
			$this->form_validation->set_rules('qa', 'status', 'required');
			$this->form_validation->set_rules('email2', 'status', 'required');
			$this->form_validation->set_rules('telephone2', 'status', 'required');
			$this->form_validation->set_rules('validity', 'status', 'required');
			$this->form_validation->set_rules('re_period', 'status', 'required');
			$this->form_validation->set_rules('spec_period', 'status', 'required');
			$this->form_validation->set_rules('Status', 'status', 'required');
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
			if($this->form_validation->run() == FALSE)
			{
				$data['title']='Contact';
				$data['content'] = 'admin/contact_insert';
		     	$this->load->view('admin/layout/layout',$data);

	} else
	{
		$data=array(
				
				'client'=>$this->input->post('client'),
				'asset_owner'=>$this->input->post('asset_owner'),
				'contract_no'=>$this->input->post('contract_no'),
				'order_no'=>$this->input->post('order_no'),
				'location'=>$this->input->post('location'),
				'pcm'=>$this->input->post('pcm'),
				'signatory'=>$this->input->post('signatory'),
				'telephone1'=>$this->input->post('telephone1'),
				'email1'=>$this->input->post('email1'),
				'qa'=>$this->input->post('qa'),
				'email2'=>$this->input->post('email2'),
				'telephone2'=>$this->input->post('telephone2'),
				'validity'=>$this->input->post('validity'),
				're_period'=>$this->input->post('re_period'),
				'spec_period'=>$this->input->post('spec_period'),
				'status'=>$this->input->post('Status'),
				
				);
				 
		             $this->dbqry->insert($data,'ats_contactmaster');
			   
			      $this->session->set_flashdata('msg','Contact Added Successfully.');	
		      	  redirect(base_url()."admin/contact/contact_view");
		
	}
}
	
     public function contact_view(){
								$data['title']='Contact';
								$data['content'] = 'admin/contact_view';
								$this->load->view('admin/layout/layout',$data);
						}
						
    public function contact_update($id)
	 	{  
		  $this->load->library('form_validation');
			$this->form_validation->set_rules('vClientNm', 'Name', 'required');
			$this->form_validation->set_rules('vAowner', 'Title', 'required');
			$this->form_validation->set_rules('vContractTitleNo', 'Issue Number', 'required');
			$this->form_validation->set_rules('vLocation', 'Version name', 'required');
			$this->form_validation->set_rules('vPMC', 'status', 'required');
			$this->form_validation->set_rules('vAuthsign', 'status', 'required');
			$this->form_validation->set_rules('iTelephone', 'status', 'required');
			$this->form_validation->set_rules('eStatus', 'status', 'required');
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
			
			$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
			
			if ($this->form_validation->run() == FALSE)
			{
				$data['id'] = $id;
				$data['content'] = 'admin/contact_edit';
				$this->load->view('admin/layout/layout',$data);
			}
			
			else
			{ 
			
			
			
				$getid =$this->dbqry->getrecordbyidrow("ats_contactmaster","id",$id); 
				
				
					$data=array(
				'order_no'=>$this->input->post('iOrderNo'),
				'client'=>$this->input->post('vClientNm'),
				'asset_owner'=>$this->input->post('vAowner'),
				'contract_no'=>$this->input->post('vContractTitleNo'),
				'location'=>$this->input->post('vLocation'),
				'pcm'=>$this->input->post('vPMC'),
				'signatory'=>$this->input->post('vAuthsign'),
				'telephone1'=>$this->input->post('iTelephone'),
				'status'=>$this->input->post('eStatus'),
					);
				
				$this->dbqry->update($data,"ats_contactmaster",$id,"id");
				$this->session->set_flashdata('msg','Contact Updated Successfully.');	
				redirect(base_url()."admin/contact/contact_view");
				
			}
		
		}

	    public function contact_delete($id)
	            { 
	   
					 $table="ats_contactmaster";
					 $primary="id";
					 $this->dbqry->delete($table,$primary,$id);	
					 
		
		 
					 $this->session->set_flashdata('msg','Contact Deleted Successfully.');
					 redirect(base_url()."admin/contact/contact_view");
		
			   }
		
	 

      function reports()
							{
							
						if(isset($_POST['pdf']) != null)
						{   
						   
							//$qry = $this->input->post('pdf_view');
							
							//$data['qry'] = $this->db->query($qry)->result();
							//$data['advertisement_id']=$advertisement_id; 
							$data['title'] = "Jobcard List";  
							$data['content'] = 'admin/contact_pdf';	                        
							$this->load->library('Pdf');	
							$this->pdf->load_view('admin/contact_pdf',$data); 
							$this->pdf->render();
							$this->pdf->stream("ReportsPdf.pdf");
						}
						 // redirect(base_url().'admin/loginadmin/report_view.html');
				
				}
				
				
}