

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobcard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if($this->session->userdata("session_user_id") == "") {
   		  redirect(base_url()."admin/loginadmin/login");
   		  }
	}
		

	
	
          
	public function jobcard_add(){
		
		$rolename = $this->session->userdata('session_user_rolename');
		$this->load->library('form_validation');
		if($rolename == 'Admin'){
		$this->form_validation->set_rules('date12', 'Date', 'required');
		$this->form_validation->set_rules('orderno', 'order', 'required');
		$this->form_validation->set_rules('request', 'request', 'required');
		$this->form_validation->set_rules('item', 'Item description', 'required');
		$this->form_validation->set_rules('qty', 'qty', 'required');
		$this->form_validation->set_rules('size', 'size', 'required');
		$this->form_validation->set_rules('ident', 'ident', 'required');
		$this->form_validation->set_rules('test', 'test', 'required');
		$this->form_validation->set_rules('requestedby', 'requested', 'required');
		$this->form_validation->set_rules('designation', 'designation', 'required');
		$this->form_validation->set_rules('contact', 'contact', 'required');
		}
		else if($rolename == 'DataOnly'){
		$this->form_validation->set_rules('date12', 'Date', 'required');
		$this->form_validation->set_rules('orderno', 'order', 'required');
		$this->form_validation->set_rules('request', 'request', 'required');
		$this->form_validation->set_rules('item', 'Item description', 'required');
		$this->form_validation->set_rules('qty', 'qty', 'required');
		$this->form_validation->set_rules('size', 'size', 'required');
		$this->form_validation->set_rules('ident', 'ident', 'required');
		$this->form_validation->set_rules('test', 'test', 'required');
			
		}
		else if($rolename == 'AccountOnly'){
		}
		$this->form_validation->set_rules('static_validation', 'validation', 'required');
			
			
			
		$this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
		
		if($this->form_validation->run() == FALSE)
		{
  			$data['title']='Jobcard';
			$data['content'] = 'admin/jobcard_insert';
			$this->load->view('admin/layout/layout',$data);

		}else{

			//echo '<pre>'; print_r($_POST); echo '</pre>';die;
    		
			/*
			if(empty($filtered) && $rolename != 'AccountOnly')
			{
				
				$this->session->set_flashdata('error_msg','please fillup atleast one row');	
				redirect(base_url()."admin/jobcard/jobcard_add");
			}
		
		
		*/
		  $card= $this->dbqry->maxcardno("ats_jobcards");  
		   
		   $count =$card->maximum + 1;
				
				   
			/*for($j=1;$j<=7;$j++){
				
				$config['upload_path'] = './FileUpload/reports/';
				$config['allowed_types'] = 'txt|csv|pdf|doc|docx';
				$config['max_size'] = '100000';
				$this->load->library('upload', $config);
				
				
				
				if ($this->upload->do_upload('file'.$j)){
					
					$report[$j] = $this->upload->data();
					$report[$j] = $report[$j]['file_name'];
					
				   
					
				}else{
					$report[$j] = "";
				}
			}
			
		 
			
		          
				  
				  if($this->input->post('test1'))
				  {
					$test1 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test1'));
					$method1= $test1->spec_no;
				  }
				  else
				  {
					  $method1 = "";
				  }
				  
				  if($this->input->post('test2'))
				  {
				  $test2 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test2'));
				  $method2= $test2->spec_no;
				  }
				  else
				  {
					  $method2 = "";
				  }
				  if($this->input->post('test3'))
				  {
				  $test3 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test3'));
				  $method3= $test3->spec_no;
				  }
				  else
				  {
					  $method3 = "";
				  }
				  if($this->input->post('test4'))
				  {
				  $test4 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test4'));
				  $method4= $test4->spec_no;
				  }
				  else
				  {
					  $method4 = "";
				  }
				  
				  if($this->input->post('test5'))
				  {
				  $test5 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test5'));
				  $method5= $test5->spec_no;
				  }
				  else
				  {
					  $method5 = "";
				  }
				  if($this->input->post('test6'))
				  {
				  $test6 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test6'));
				  $method6= $test6->spec_no;
				  }
				  else
				  {
					  $method6 = "";
				  }
				  if($this->input->post('test7'))
				  {
				  $test7 = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test7'));
				  $method7= $test7->spec_no;
				  }
				  else
				  {
					  $method7 = "";
				  }*/
				  $order= $this->input->post('orderno');
		          if($order != ''){
		          	$ordername=$this->dbqry->getrecordbyidrow("ats_contactmaster","id", $order);
		          	$name= $ordername->order_no;
		          }else{
		          	$name = '';
		          }
				  
				   
				
				  $dep1 = $this->input->post('department');

				  if($dep1 != ''){
				 	$department=$this->dbqry->getrecordbyidrow("ats_department","id", $dep1);
		            $name1 = $department->department; 	
				  }else{
				  	$name1 = '';
				  }
				  
				   $data=array(
          
					/*'addeddate'=>$this->input->post('date'),
					'cardno'=>$count,
					'orderno'=>$name,
					'company'=>$this->input->post('company'),
					'witness1'=>$this->input->post('Witness1'),
					'client'=>$this->input->post('client'),
					'witness2'=>$this->input->post('Witness2'),
				    'consultant'=>$this->input->post('thirdparty'),
					'witness3'=>$this->input->post('Witness3'),
					'location'=>$this->input->post('location'),
					'request'=>$this->input->post('request'),
					
					'document'=>$this->input->post('document'),
					'department'=>$name1,
					 
					 
					'witness1'=>($this->input->post('Witness1'))? ($this->input->post('Witness1')):'',
					'witness2'=>($this->input->post('Witness2'))? ($this->input->post('Witness2')):'',
					'witness3'=>($this->input->post('Witness3'))? ($this->input->post('Witness3')):'',
					
					'assigned'=>($this->input->post('assigned'))? ($this->input->post('assigned')):'',
					
					'item2'=>($this->input->post('item1')) ? ($this->input->post('item1')) : '',
					'qty1'=>($this->input->post('qty1'))?    ($this->input->post('qty1')):'',
					'size1'=>($this->input->post('size1'))?  ($this->input->post('size1')):'',
					'ident1'=>($this->input->post('ident1'))?($this->input->post('ident1')):'',
					'method1'=>$method1,
					'cond1'=>($this->input->post('cond1'))? ($this->input->post('cond1')): '',
					'report1'=>$report[1],
						
					'item3'=>($this->input->post('item2')) ? ($this->input->post('item2')) : '',
					'qty2'=>($this->input->post('qty2'))?    ($this->input->post('qty2')):'',
					'size2'=>($this->input->post('size2'))?  ($this->input->post('size2')):'',
					'ident2'=>($this->input->post('ident2'))?($this->input->post('ident2')):'',
					'method2'=>$method2,
					'cond2'=>($this->input->post('cond2'))? ($this->input->post('cond2')): '',
					'report2'=>$report[2],
					
					'item4'=>($this->input->post('item3')) ? ($this->input->post('item3')) : '',
					'qty3'=>($this->input->post('qty3'))?    ($this->input->post('qty3')):'',
					'size3'=>($this->input->post('size3'))?  ($this->input->post('size3')):'',
					'ident3'=>($this->input->post('ident3'))?($this->input->post('ident3')):'',
					'method3'=>$method3,
					'cond3'=>($this->input->post('cond3'))? ($this->input->post('cond3')): '',
					'report3'=>$report[3],
					
					'item5'=>($this->input->post('item4')) ? ($this->input->post('item4')) : '',
					'qty4'=>($this->input->post('qty4'))?    ($this->input->post('qty4')):'',
					'size4'=>($this->input->post('size4'))?  ($this->input->post('size4')):'',
					'ident4'=>($this->input->post('ident4'))?($this->input->post('ident4')):'',
					'method4'=>$method4,
					'cond4'=>($this->input->post('cond4'))? ($this->input->post('cond4')): '',
					'report4'=>$report[4],
					
					'item6'=>($this->input->post('item5')) ? ($this->input->post('item5')) : '',
					'qty5'=>($this->input->post('qty5'))?    ($this->input->post('qty5')):'',
					'size5'=>($this->input->post('size5'))?  ($this->input->post('size5')):'',
					'ident5'=>($this->input->post('ident5'))?($this->input->post('ident5')):'',
					'method5'=>$method5,
					'cond5'=>($this->input->post('cond5'))? ($this->input->post('cond5')): '',
					'report5'=>$report[5],
					
					'item7'=>($this->input->post('item6')) ? ($this->input->post('item6')) : '',
					'qty6'=>($this->input->post('qty6'))?    ($this->input->post('qty5')):'',
					'size6'=>($this->input->post('size6'))?  ($this->input->post('size6')):'',
					'ident6'=>($this->input->post('ident6'))?($this->input->post('ident6')):'',
					'method6'=>$method6,
					'cond6'=>($this->input->post('cond6'))? ($this->input->post('cond6')): '',
					'report6'=>$report[6],
					
					'item8'=>($this->input->post('item7')) ? ($this->input->post('item7')) : '',
					'qty7'=>($this->input->post('qty7'))?    ($this->input->post('qty7')):'',
					'size7'=>($this->input->post('size7'))?  ($this->input->post('size7')):'',
					'ident7'=>($this->input->post('ident7'))?($this->input->post('ident7')):'',
					'method7'=>$method7,
					'cond7'=>($this->input->post('cond7'))? ($this->input->post('cond7')): '',
					'report7'=>$report[7],
					
					'remarks'=>$this->input->post('remarks'),
					'requestedby'=>$this->input->post('requestedby'),
					'createdby'=>$this->input->post('createdby'),
					'designation'=>$this->input->post('designation'),
					'company1'=>$this->input->post('company1'),*/
					'cardno'=>$count,
					'orderno'=>$name,
					'addeddate'=>$this->input->post('date12'),
					'company'=>$this->input->post('company'),
					'location'=>$this->input->post('location'),
					'client'=>$this->input->post('client'),
					'request'=>$this->input->post('request'),
					'document'=>$this->input->post('document'),
					'department'=>$name1,
					'requestedby'=>$this->input->post('requestedby'),
					'createdby'=>$this->input->post('createdby'),
					'designation'=>$this->input->post('designation'),
					'company1'=>$this->input->post('company1'),
					'remarks'=>$this->input->post('remarks'),
					'assigned'=>($this->input->post('assigned'))? ($this->input->post('assigned')):'', 
					'consultant'=>$this->input->post('thirdparty'),
					'witness1'=>($this->input->post('Witness1'))? ($this->input->post('Witness1')):'',
					'witness2'=>($this->input->post('Witness2'))? ($this->input->post('Witness2')):'',
					'witness3'=>($this->input->post('Witness3'))? ($this->input->post('Witness3')):'',
					'completed'=>($this->input->post('completion'))? ($this->input->post('completion')):'' ,
					'estdate'=>($this->input->post('estimate')) ? ($this->input->post('estimate')):'',
					'contact'=>($this->input->post('contact')) ? ($this->input->post('contact')):'',
					'reperiod'=>($this->input->post('report_r')) ? ($this->input->post('report_r')):'',
					'resample'=>($this->input->post('resample')) ? ($this->input->post('resample')):'',
					'payment'=>($this->input->post('payment')) ? ($this->input->post('payment')):'',
					'invoice'=>($this->input->post('invoice')) ? ($this->input->post('invoice')):'' ,
					'receiptno'=>($this->input->post('receiptno')) ? ($this->input->post('receiptno')):'' ,
					'account'=>($this->input->post('account')) ? ($this->input->post('account')):'',
					'approved'=>($this->input->post('approved')) ? ($this->input->post('approved')):'',
					'date1'=>($this->input->post('date1')) ? ($this->input->post('date1')):'',
					'jobcardstatus'=>($this->input->post('status')) ? ($this->input->post('status')):'',
					'briefdis'=>($this->input->post('description')) ? ($this->input->post('description')):'',
					'contract'=>($this->input->post('contractno'))? ($this->input->post('contractno')):'' ,
					'certifiedby'=>($this->input->post('authorization')) ? ($this->input->post('authorization')):'' ,
					'comments'=>($this->input->post('comments')) ? ($this->input->post('comments')):'',
					
				);
		
				$this->dbqry->insert($data,'ats_jobcards');
				$last_id = $this->db->insert_id();
			
				  $row=$this->input->post('id2');
				 
			      
				  
				
				//echo '<pre>'; print_r($_FILES); echo '</pre>';
			   
				for($i=0;$i<$row;$i++){
	              
					if($i == 0){
			            $test = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test'));
				  		$method= $test->spec_no; 
						$cond = ($this->input->post('cond')) ? ($this->input->post('cond')) : ''; 
						$test = $method;
						$report = ($this->input->post('report_no'))? ($this->input->post('report_no')):'';
						$ident = ($this->input->post('ident')) ?($this->input->post('ident')):'';
						$size = ($this->input->post('size')) ? ($this->input->post('size')):'';
						$qty = ($this->input->post('qty')) ? ($this->input->post('qty')):'' ;
						$item = ($this->input->post('item')) ?($this->input->post('item')):'' ;
								
						$config['upload_path'] = './FileUpload/reports/';
						$config['allowed_types'] = 'txt|csv|pdf|doc|docx|jpg|jpeg|png';
						$config['max_size'] = '100000';
						$this->load->library('upload', $config);
						$this->upload->do_upload('rpt');
						   $rpt = $this->upload->data();
							
							if($rpt){
							 $rpt1=$rpt['file_name'];
							 
							 $reportfile=$rpt1;
							}
					}else{
						
						$test = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test'.$i));
				  		$method= $test->spec_no; 
						$cond = ($this->input->post('cond'.$i)) ? ($this->input->post('cond'.$i)) : '';
						$test = $method.$i;
						$report = ($this->input->post('report_no'.$i))? ($this->input->post('report_no'.$i)):'';
						$ident = ($this->input->post('ident'.$i)) ? ($this->input->post('ident'.$i)):'';
						$size = ($this->input->post('size'.$i))? ($this->input->post('size'.$i)):'';
						$qty = ($this->input->post('qty'.$i))? ($this->input->post('qty'.$i)):'';
						$item = ($this->input->post('item'.$i))?($this->input->post('item'.$i)):'' ;
						
						$config['upload_path'] = './FileUpload/reports/';
						$config['allowed_types'] = 'txt|csv|pdf|doc|docx|jpg|jpeg|png';
						$config['max_size'] = '100000';
						$this->load->library('upload', $config);
						$this->upload->do_upload('rpt'.$i);
						   $rpt = $this->upload->data();
							if($rpt){
							 $rpt1=$rpt['file_name'];
							 $reportfile=$rpt1;
							}
					}
					$data2 = array(
				  
					'item' => $item,
					'qty' => $qty,
					'size' => $size,
					'ident' => $ident,
					'cond' => $cond,
					'method'=>$test,
					'report'=>$report,
					'reportfile'=>$reportfile,
					'jobcard'=>$count,
					);
				// echo '<pre>'; print_r($_POST); echo '</pre>'; die;
					$this->dbqry->insert($data2,'test');
					
				}
			
               // 
			    $this->session->set_flashdata('msg','JobCard Added Successfully.');		
				
				redirect(base_url()."admin/jobcard/jobcard_singleview/".$last_id);
			
	
			
		}

	
	}
	public function jobcard_singleview($id){
		$data['id']=$id;
		$data['title']='Jobcard';
		$data['content'] = 'admin/jobcard_view';
		$this->load->view('admin/layout/layout',$data);
	}
	
	function jobcard_reports($id)
	{
		/*if(isset($_POST['pdf']) != null)
		{   */
			
			//$qry = $this->input->post('pdf_view');
			
			//$data['qry'] = $this->db->query($qry)->result();
			//$data['advertisement_id']=$advertisement_id; 
			$data['id']=$id;
			$data['title'] = "Jobcard List";  
			$data['content'] = 'admin/jobcard_pdf';	                        
			$this->load->library('Pdf');	
			
			
			$this->pdf->load_view('admin/jobcard_pdf',$data); 
			// (Optional) Setup the paper size and orientation
			$this->pdf->set_paper('a4', 'portrait');

			//$paper_size = array(0,0,792,612);
			//$this->pdf->set_paper($paper_size);
             
			$this->pdf->render();
			$this->pdf->stream("ReportsPdf.pdf"); 
		
	// redirect(base_url().'admin/loginadmin/report_view.html');
	}
    public function jobcard_print($id){
		
		$data = array(
			'id' => $id,
		);
		
		$this->load->library('parser');
		$string = $this->parser->parse('admin/jobcard_pdf', $data, TRUE);
		//$this->pdf->set_paper('a4', 'landscape');
		
		//$this->load->view('admin/jobcard_pdf',$data);
		
		echo $string;
		
		}
	public function jobcard_edit_action($id){
		
		if(isset($_POST)){
			
			 $order= $this->input->post('orderno');
		          if($order != ''){
		          	$ordername=$this->dbqry->getrecordbyidrow("ats_contactmaster","id", $order);
		          	$name= $ordername->order_no;
		          }else{
		          	$name = '';
		          }
				  
				   
				
				  $dep1 = $this->input->post('department');

				  if($dep1 != ''){
				 	$department=$this->dbqry->getrecordbyidrow("ats_department","id", $dep1);
		            $name1 = $department->department; 	
				  }else{
				  	$name1 = '';
				  }
				  
				   $data=array(
				   
					'orderno'=>$name,
					'addeddate'=>$this->input->post('date'),
					'company'=>$this->input->post('company'),
					'location'=>$this->input->post('location'),
					'client'=>$this->input->post('client'),
					'request'=>$this->input->post('request'),
					'document'=>$this->input->post('document'),
					'department'=>$name1,
					'requestedby'=>$this->input->post('requestedby'),
					'createdby'=>$this->input->post('createdby'),
					'designation'=>$this->input->post('designation'),
					'company1'=>$this->input->post('company1'),
					'remarks'=>$this->input->post('remarks'),
					'assigned'=>($this->input->post('assigned'))? ($this->input->post('assigned')):'', 
					'consultant'=>$this->input->post('thirdparty'),
					'witness1'=>($this->input->post('Witness1'))? ($this->input->post('Witness1')):'',
					'witness2'=>($this->input->post('Witness2'))? ($this->input->post('Witness2')):'',
					'witness3'=>($this->input->post('Witness3'))? ($this->input->post('Witness3')):'',
					'completed'=>($this->input->post('completion'))? ($this->input->post('completion')):'' ,
					'estdate'=>($this->input->post('estimate')) ? ($this->input->post('estimate')):'',
					'contact'=>($this->input->post('contact')) ? ($this->input->post('contact')):'',
					'reperiod'=>($this->input->post('report_r')) ? ($this->input->post('report_r')):'',
					'resample'=>($this->input->post('resample')) ? ($this->input->post('resample')):'',
					'payment'=>($this->input->post('payment')) ? ($this->input->post('payment')):'',
					'invoice'=>($this->input->post('invoice')) ? ($this->input->post('invoice')):'' ,
					'receiptno'=>($this->input->post('receiptno')) ? ($this->input->post('receiptno')):'' ,
					'account'=>($this->input->post('account')) ? ($this->input->post('account')):'',
					'approved'=>($this->input->post('approved')) ? ($this->input->post('approved')):'',
					'date1'=>($this->input->post('date1')) ? ($this->input->post('date1')):'',
					'jobcardstatus'=>($this->input->post('status')) ? ($this->input->post('status')):'',
					'briefdis'=>($this->input->post('description')) ? ($this->input->post('description')):'',
					'contract'=>($this->input->post('contractno'))? ($this->input->post('contractno')):'' ,
					'certifiedby'=>($this->input->post('authorization')) ? ($this->input->post('authorization')):'' ,
					'comments'=>($this->input->post('comments')) ? ($this->input->post('comments')):'',
					
				);
			
            
			$this->dbqry->update($data,'ats_jobcards',$id,'id');
			
		    $itm_cnt = $this->input->post('item_cnt');
			
			$jobcardno=$this->dbqry->getrecordbyidrow("ats_jobcards","id",$id);
             
			$test_count = $this->dbqry->chktestcnt($jobcardno->cardno);
			
			//echo '<pre>'; print_r($_POST); echo '</pre>';
		    //$test_cnt=$test_count+1;
		   for($i=0;$i<$itm_cnt;$i++){

			   	if($i < $test_count){
					

			   		if($this->input->post('method'.$i) != ''){
			   			$test = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('method'.$i));
				    	$method= $test->spec_no;	
			   		}else{
			   			$method = '';
			   		}
					
				        $rpt_file=$_FILES['rpt'.$i]['name'];
					
						if($rpt_file)
						{
							    $config['upload_path'] = './FileUpload/reports/';
								$config['allowed_types'] = 'txt|csv|pdf|doc|docx|jpg|jpeg|png';
								$config['max_size'] = '100000';
								$this->load->library('upload', $config);
								$this->upload->do_upload('rpt'.$i);
								   $rpt = $this->upload->data();
									if($rpt){
									 $rpt1=$rpt['file_name'];
									 $reportfile=$rpt1;
									}
							$data2 = array(
						    'item' => $this->input->post('item'.$i),
							'qty' =>  $this->input->post('qty'.$i),
							'size' => $this->input->post('size'.$i),
							'ident' =>$this->input->post('ident'.$i),
							'cond' => $this->input->post('cond'.$i),
							'method'=>$method,
							'report' => $this->input->post('report'.$i),
						    'reportfile'=>$reportfile,
							);
						}else{
					    	$data2 = array(
							    'item' => $this->input->post('item'.$i),
								'qty' =>  $this->input->post('qty'.$i),
								'size' => $this->input->post('size'.$i),
								'ident' =>$this->input->post('ident'.$i),
								'cond' => $this->input->post('cond'.$i),
								'method'=>$method,
								'report' => $this->input->post('report'.$i),
								);
					
						}

						$this->dbqry->update($data2,'test',$this->input->post('jid'.$i),'id');
			   	}else{

			   		$getjobcard_details  = $this->dbqry->getrecordbyidrow('ats_jobcards','id',$id);

			   		if($this->input->post('test'.$i) != ''){
			   			$test = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test'.$i));
				    	$method = $test->spec_no;	
			   		}else{
			   			$method = '';
			   		}
		
			   			$rpt_file=$_FILES['rpt'.$i]['name'];
					
						if($rpt_file)
						{
							    $config['upload_path'] = './FileUpload/reports/';
								$config['allowed_types'] = 'txt|csv|pdf|doc|docx|jpg|jpeg|png';
								$config['max_size'] = '100000';
								$this->load->library('upload', $config);
								$this->upload->do_upload('rpt'.$i);
								   $rpt = $this->upload->data();
									if($rpt){
									 $rpt1=$rpt['file_name'];
									 $reportfile=$rpt1;
									}
							$idata = array(
							'jobcard'=>$getjobcard_details->cardno,	
							/*'jobcard_id'=>$id,	*/
						    'item' => $this->input->post('item'.$i),
							'qty' =>  $this->input->post('qty'.$i),
							'size' => $this->input->post('size'.$i),
							'ident' =>$this->input->post('ident'.$i),
							'cond' => $this->input->post('cond'.$i),
							'method'=>$method,
							'report' => ($this->input->post('report_no'.$i))?($this->input->post('report_no'.$i)):'',
						    'reportfile'=>$reportfile,
							);
						}else{
					    	$idata = array(
					    		'jobcard'=>$getjobcard_details->cardno,
					    		/*'jobcard_id'=>$id,*/ 
							    'item' => $this->input->post('item'.$i),
								'qty' =>  $this->input->post('qty'.$i),
								'size' => $this->input->post('size'.$i),
								'ident' =>$this->input->post('ident'.$i),
								'cond' => ($this->input->post('cond'.$i)) ? ($this->input->post('cond'.$i)) : '', 
								'method'=>$method,
								'report' => ($this->input->post('report_no'.$i))?($this->input->post('report_no'.$i)):'',
								);
						}

						$this->dbqry->insert($idata,'test');
			   	}
			}
		}
		
         $this->session->set_flashdata('update_msg','JobCard Updated Successfully.');		
		 redirect(base_url('admin/jobcard/jobcard_singleview/'.$id)); 
	}


	public function jobcard_editview($id){
		$data['id']=$id;
		$data['title']='Jobcard';
		$data['content'] = 'admin/jobcard_edit';

		$this->load->view('admin/layout/layout',$data);
	}
	
	
	function jobcard_list(){
		
		$data['title']='Jobcard';
		$data['content'] = 'admin/jobcard_list';
		$this->load->view('admin/layout/layout',$data);
				 
	}

				 
	function reports()
	{
		if(isset($_POST['pdf']) != null)
		{   
	       
			$data['title'] = "Jobcard List";  
			$data['content'] = 'admin/pdf_reports';	                        
			$this->load->library('Pdf');
			ini_set('max_execution_time', 3600);
            ini_set('memory_limit','16M');
			$this->pdf->load_view('admin/pdf_reports',$data);

			
			
			//$paper_size = array(0,0,850,612);
			//$this->pdf->set_paper($paper_size);

			// (Optional) Setup the paper size and orientation
			$this->pdf->set_paper('a4', 'landscape');

			$html = $this->pdf->render(); 
			$this->pdf->stream("ReportsPdf.pdf");
			
		}
	// redirect(base_url().'admin/loginadmin/report_view.html');
	
	}

	function check_css(){
		$this->load->view('admin/pdf_reports');
	}

	
	
	function ats_contactmaster_by_data($ats_contactmaster_id){
		$ats_contactmaster=$this->dbqry->getrecordbyidrow("ats_contactmaster","id",$ats_contactmaster_id);
	?>


    <div class="col-md-12">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Company (Asset Owner):</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="company" value="<?php echo $ats_contactmaster->asset_owner;?>" readonly>
                </div>
            </div>
        </div>
    
        <div class="col-sm-3"> Witness: 
            <input type="radio" name="Witness1" value="yes" checked>Yes
            <input type="radio" name="Witness1"  value="No" checked> No<br>
        </div>
    
        <div class="col-sm-3">
            <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Location:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="location" value="<?php if($this->input->post('location')){ echo $this->input->post('location');}?>">
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="col-sm-6">
            <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> ATS Client:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="client" value="<?php echo $ats_contactmaster->client;?>" readonly>
                </div>
            </div>
        </div>
    
        <div class="col-sm-3">
            Witness: 
            <input type="radio" name="Witness2" value="yes" checked>Yes
            <input type="radio" name="Witness2" value="No" checked> No<br>
        </div>
    
        <div class="col-sm-3">
            <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Documents:</label>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="document" value="<?php if($this->input->post('document')){ echo $this->input->post('document');}?>">
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
    <div class="col-sm-6">
    
    <div class="form-group">
    <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Third Party Consulatant:</label>
    <div class="col-md-7 col-sm-7 col-xs-12">
    <input type="text" class="form-control"  name="thirdparty" value="<?php echo $ats_contactmaster->pcm;?>" readonly>
    </div>
    </div>
    </div>
    
    <div class="col-sm-3">
    Witness: 
    <input type="radio" name="Witness3" value="yes" checked>Yes
    <input type="radio" name="Witness3" value="No" checked> No<br>
    
    </div>
    
    <div class="col-sm-3">
    <div class="form-group">
    <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Request No:<span style="color:#F00">*</span></label>
    <div class="col-md-7 col-sm-7 col-xs-12">
    <input type="text" class="form-control" name="request" value="<?php if($this->input->post('request')){ echo $this->input->post('request');}?>">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="col-sm-6">
    
    <div class="form-group">
    <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Contract Title/Number:</label>
    <div class="col-md-7 col-sm-7 col-xs-12">
    <input type="text" class="form-control" name="contractno" value="<?php echo $ats_contactmaster->contract_no;?>" readonly>
    </div>
    </div>
    </div>
    
    
    
    <div class="col-sm-3">
    <div class="form-group">
    <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Description:</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
    <input type="text" class="form-control" name="description" value="<?php if($this->input->post('description')){ echo $this->input->post('description');}?>">
    </div>
    </div>
    </div> <br>
    <div class="col-md-12">
    
    </div>
    
    
    </div>
	<?php	
    }

	function assigned_to($dep){
		$department=$this->dbqry->getrecordbyidrow("ats_department","id",$dep);
		$dpname=$department->department;
		$row=$this->dbqry->getrecordbyid("ats_employee","department","'$dpname'");
		foreach($row as $res)
		{
       		
			echo  '<option value="'.$res->name.'">'.$res->name.'</option>';
		} 
	}
		
		
	function jobcardviewjson()
	   {   
	   
	     
	   $role_id = $this->session->userdata('session_user_roleid');
       $chkjobs = $this->dbqry->checkpermission($role_id,'Jobcard');
		//header("Content-Type: application/json; charset=UTF-8");
		$qry=$this->dbqry->select_jobcrd("ats_jobcards");
		
		
		foreach($qry as $res)
		{ 
		
			if($res->addeddate && $res->estdate){
				$from_date = strtotime($res->addeddate);
				$to_date = strtotime($res->estdate);
				$datediff =$to_date - $from_date;
				
				 if(empty($from_date) || $from_date  >= $to_date )
				 {
				 	 $datefinal = 'N/A';
				 }else{
					 $datefinal = floor($datediff / (60 * 60 * 24));
				 }
			}
			else
			{
				$datefinal = 'N/A';
			}
		    
			
		    if($chkjobs->has_delete == 1){ 
			$data[] = array(
					'cardno' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->cardno.'</a>',
					'addeddate' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->addeddate.'</a>',
					'orderno'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->orderno.'</a>',
					'client'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->client.'</a>',
					'request'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->request.'</a>',
					'briefdis'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->briefdis.'</a>',
					'completed'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->completed.'</a>',
					'estdate'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->estdate.'</a>',
					'jobcardstatus'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->jobcardstatus.'</a>',
					'pendingdays' => '<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$datefinal.'</a>',
		            'Action'=>'<a title ="delete" class="delete" href="'.base_url().'admin/jobcard/jobcard_delete/'.$res->id.'"><small class="label label-danger"><i class="fa fa-remove"></i></small></a>', 
					
					  );
		   }
		   else{
			   $data[] = array(
					'cardno' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->cardno.'</a>',
					'addeddate' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->addeddate.'</a>',
					'orderno'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->orderno.'</a>',
					'client'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->client.'</a>',
					'request'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->request.'</a>',
					'briefdis'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->briefdis.'</a>',
					'completed'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->completed.'</a>',
					'estdate'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->estdate.'</a>',
					'jobcardstatus'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->jobcardstatus.'</a>',
					'pendingdays' => '<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$datefinal.'</a>',
		            
					
					  );
			   
			   }
		
		}
		$json = json_encode(array('data'=>$data)); 
		echo $json;
		exit();
		
		
	}
	
	
	function jobcard_status(){
	
		 $status= trim($this->input->post('post_data'),',');
		 $myArray = explode(',',  $status);
		foreach($myArray as $key=>$value){
			
			$data=array(
					'jobcardstatus'=>'Authorized',
					);
	      $this->dbqry->update($data,'ats_jobcards',$value,'id');
		   
		}
		
		//redirect($_SERVER['HTTP_REFERER']);
	}
	function jobcard_pending(){
		
			$qry=$this->dbqry->select_job("ats_jobcards");
    if(empty($qry)){
              
              $msg= "No records found";
              $json = json_encode(array('message'=>$msg));
		         echo $json;
		     }

	else{
		foreach($qry as $res)
		{   
		
		    if($res->addeddate && $res->estdate){
				$from_date = strtotime($res->addeddate);
				$to_date = strtotime($res->estdate);
				$datediff =$to_date - $from_date;
				
				 if(empty($from_date) || $from_date  >= $to_date )
				 {
				 	 $datefinal = 'N/A';
				 }else{
					 $datefinal = floor($datediff / (60 * 60 * 24));
				 }
			}
			else
			{
				$datefinal = 'N/A';
			}
		    
			              
			$data[] = array(
					'cardno' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->cardno.'</a>',
					'addeddate' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->addeddate.'</a>',
					'orderno'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->orderno.'</a>',
					'client'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->client.'</a>',
					'request'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->request.'</a>',
					'briefdis'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->briefdis.'</a>',
					'completed'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->completed.'</a>',
					'estdate'=>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$res->estdate.'</a>',
					'pendingdays' =>'<a href="'.base_url().'admin/jobcard/jobcard_singleview/'.$res->id.'"  target="_blank">'.$datefinal.'</a>',
					'Action'=>'<input type="checkbox" name="action" id="action" value="'.$res->id.'" class="status">',
									
				);
		}
		$json = json_encode(array('data'=>$data)); 
		echo $json;
		exit();
	  }	
	}
		
	function jobcard_pendinglist(){
		
		$data['title']='Jobcard';
		$data['content'] = 'admin/jobcard_pending';
		$this->load->view('admin/layout/layout',$data);
				 
	}	
	
	   public function jobcard_delete($id)
	            {   
				  
					 $table="ats_jobcards";
					 $primary="id";
					 $this->dbqry->delete($table,$primary,$id);	
					 
		
		              
					 $this->session->set_flashdata('msg','jobcard Deleted Successfully.');
					 redirect(base_url()."admin/jobcard/jobcard_list/");
		
			   }
		
		
	function test_delete()
	{
		$post_data = $this->input->post('post_data');
		$post_data = trim($post_data,",");
		$post_data= explode(",",$post_data);
		
		foreach($post_data as $id)
		{
			 $table="test";
			 $primary="id";
			 $this->dbqry->delete($table,$primary,$id);
		}
	}
		
}