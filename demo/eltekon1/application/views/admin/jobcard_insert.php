<?php 

$rolename = $this->session->userdata('session_user_rolename');


if($rolename == 'Admin'){
 
  $first_visibility = '';
  $second_visibility = '';
  $third_visibility = '';
}else if($rolename == 'AccountOnly'){
  $first_visibility = 'readonly';
  $second_visibility = 'readonly';
  $third_visibility = '';
}else if($rolename == 'DataOnly'){
  $first_visibility = '';
  $second_visibility = 'readonly';
  $third_visibility = 'readonly';
}else{
  $first_visibility = 'readonly';
  $second_visibility = 'readonly';
  $third_visibility = 'readonly';
}
     
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="page-title">
      <div class="title_left">

      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

            <span class="input-group-btn">

            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <form id="form1" name="form" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
      <input type="hidden" name="static_validation" value="1">
       <?php echo form_error('static_validation') ?>  

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
           <?php if($this->session->flashdata('msg') != "") { ?>
            <div class="alert alert-info" role="alert"><?php echo $this->session->flashdata('msg');?></div>
        <?php } ?> 
            <div class="x_title">
              <h2>SAMPLE RECIEVING INSPECTION REPORT(JOB CARD)</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

                  <ul class="dropdown-menu" role="menu">
                    <li>
                    </li>
                    <li>
                    </li>
                  </ul>
                </li>
                <li
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="col-md-12">
            <div class='col-sm-3'>

            <div class="form-group">
              <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Jobcard:</label>
              <div class="col-md-7 col-sm-7 col-xs-12">
                <input type="text" class="form-control" name="jobcard" readonly>

              </div>
            </div>
          </div>
              <div class='col-sm-3'>

                <div class="form-group">
                 <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Date:<span style="color:#F00">*</span></label>
                 <div class="input-group date" id="myDatepicker2">
    <input type="text" class="form-control" name="date12"  id="date123" value="<?php if($this->input->post('date12')){ echo $this->input->post('date12');}?>" <?php echo $first_visibility; ?> >
     <?php if(form_error('date12')){ ?>  
              <script>$("#date123").css("border","2px solid red");</script>
            <?php } ?>
                  <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                 </span>

               </div>

             </div>
          <?php //echo form_error('date','<span class="help-block" >','</span>'); ?>
           </div>
           
           <div class='col-sm-3'>

            <div class="form-group">
              <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Order No:<span style="color:#F00">*</span></label>
              <div class="col-md-7 col-sm-7 col-xs-12">
                <select class="form-control ats_contactmaster_name"  id="orderno" name="orderno"  <?php echo $first_visibility;?>>
                  <option selected="" disabled="">-- Select --</option>
                  <?php
                  $qry = $this->dbqry->select("ats_contactmaster");
                  foreach($qry as $res)
                  {
                   ?>
                   <option value="<?php echo $res->id?>" <?php if($this->input->post('orderno') && $this->input->post('orderno') == $res->id)print("selected")?>><?php echo $res->order_no?></option>
                   <?php } ?>
                 </select>
               <?php if(form_error('orderno')){ ?>  
              <script>$("#orderno").css("border","2px solid red");</script>
            <?php } ?>
               </div>
             </div>
             
           </div>

           <div class='col-sm-3'>

            <div class="form-group">
            <?php if($rolename == 'DataOnly') { ?>
              <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Status:</label>
              <div class="col-md-7 col-sm-7 col-xs-12">
                <input type="text" class="form-control" name="status" value="Unauthorized" readonly>
           <?php } 
           
		   else{
			   ?>
               <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Status:</label> 
               <div class="col-md-7 col-sm-7 col-xs-12">
               <select class="form-control" name="status" value="<?php if($this->input->post('status')){ echo $this->input->post('status');}?>" <?php echo $first_visibility; ?>>
              <option value="">-- Select --</option>
              <option value"Authorized" <?php if($this->input->post('status') && $this->input->post('status') == 'Authorized')print("selected")?>>Authorized</option>
              <option value"Unauthorized" <?php if($this->input->post('status') && $this->input->post('status') == 'Unauthorized')print("selected")?>>Unauthorized</option>
            </select>
			   </div>
          <?php } ?>
              </div>
            </div>
          </div>
           
          

        </div>  



        <div class="all_data">   
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Company (Asset Owner):</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="company"  value="<?php if($this->input->post('company')){ echo $this->input->post('company');}?>" <?php echo $first_visibility;?> >

                </div>
              </div>
            </div>

            <div class="col-sm-3">
              Witness: 
              <input type="radio" name="Witness1" value="yes" <?php if($this->input->post('Witness1')=='yes'){ echo "checked";}?> <?php echo $first_visibility; ?>>Yes
              <input type="radio" name="Witness1" value="No" <?php if($this->input->post('Witness1')=='No'){ echo "checked";}?> <?php echo $first_visibility; ?>> No<br>
            
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Location:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="location" value="<?php if($this->input->post('location')){ echo $this->input->post('location');}?>" <?php echo $first_visibility; ?>>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> ATS Client:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="client" value="<?php if($this->input->post('client')){ echo $this->input->post('client');}?>" <?php echo $first_visibility;?>>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              Witness: 
              <input type="radio" name="Witness2" value="yes" <?php if($this->input->post('Witness2')=='yes'){ echo "checked";}?> <?php echo $first_visibility; ?>>Yes
              <input type="radio" name="Witness2" value="No" <?php if($this->input->post('Witness2')=='yes'){ echo "checked";}?> <?php echo $first_visibility; ?>> No<br>
             
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Documents:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="document" value="<?php if($this->input->post('document')){ echo $this->input->post('document');}?>" <?php echo $first_visibility;?>>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Third Party Consulatant:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control"  name="thirdparty" value="<?php if($this->input->post('thirdparty')){ echo $this->input->post('thirdparty');}?>" <?php echo $first_visibility;?> >
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              Witness: 
              <input type="radio" name="Witness3" value="yes" <?php if($this->input->post('Witness3')=='yes'){ echo "checked";}?> <?php echo $first_visibility; ?>>Yes
              <input type="radio" name="Witness3" value="No" <?php if($this->input->post('Witness3')=='yes'){ echo "checked";}?> <?php echo $first_visibility; ?>> No<br>
             

            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Request No:<span style="color:#F00">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" id="req" name="request" value="<?php if($this->input->post('request')){ echo $this->input->post('request');}?>" <?php echo $first_visibility; ?>>
               
                </div>
              </div>
            </div>
              <?php if(form_error('request')){
				  	?>	
                    	<script>
                        	$("#req").css("border","2px solid red");
						</script>
                    <?php
				  }?>
          </div>
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Contract Title/Number:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="contractno" value="<?php if($this->input->post('contractno')){ echo $this->input->post('contractno');}?>" <?php echo $first_visibility;?>>
                </div>
              </div>
            </div>



            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Description:</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="description" value="<?php if($this->input->post('description')){ echo $this->input->post('description');}?>" <?php echo $first_visibility;?>>
                 
                </div>
              </div>
            </div> <br>
            <div class="col-md-12">

            </div>


          </div>



        </div>     
      </div>





      <div style="clear:both;"></div>
      <div class="well well-sm btn-success" style="text-align:center;">Test Descriptions</div>

		
        
         <?php if($this->session->flashdata('error_msg') != "") { ?>
            <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error_msg');?></div>
        <?php } ?> 
        
        <?php if(form_error('item') != "" && form_error('size') != "" && form_error('qty') != "" && form_error('ident') != "" && form_error('test') != "") { ?>
            <div class="alert alert-danger" role="alert">
            please fillup atleast one row
            </div>
        <?php } ?> 
        
      <table  class="table table-striped table-bordered description_table" id="description_table">
        <thead>
          <tr class="headings">
            <th class="column-title">Item Description/Required Test<span style="color:#F00">*</span></th>
            <th class="column-title" colspan="2">Qty </th>
            <th class="column-title" colspan="3">Test Sample Details</th>
            <th class="column-title">Specification Test<span style="color:#F00">*</span></th>
            <th class="column-title">Report No</th>
            <th class="column-title">Upload Report</th>
             <th class="column-title">Select Row For Remove</th>

          </tr>
          
          <tr class="headings">
            <th class="column-title"></th>
             <th class="column-title" >Requested<span style="color:#F00">*</span></th>
            <th class="column-title">Completed</th>
            <th class="column-title">Size<span style="color:#F00">*</span></th>
            <th class="column-title">Ident<span style="color:#F00">*</span></th>
            <th class="column-title">Sample Condition</th>
            <th class="column-title"> </th>
            <th class="column-title"> </th>
            <th class="column-title"></th>
             <th class="column-title"></th>

          </tr>
         
        </thead>
        <tbody>

        <?php $id2 = ($this->input->post('id2') != '') ? ($this->input->post('id2')) : '1';  ?>
            <input type="hidden" name="id2" id="id1" value="<?php echo $id2; ?>"/>

      <?php  
     
      if(isset($_POST)){
      $row=$id2;

	  	for($i=0;$i<$row;$i++){
			
					if($i == 0){
						
						$cond = $this->input->post('cond'); 
						$test = $this->input->post('test');
						$report = $this->input->post('report_no');
						$ident = $this->input->post('ident');
						$size = $this->input->post('size');
						$qty = $this->input->post('qty');
						$item = $this->input->post('item');
						$reportfile = $this->input->post('rpt');		
							
						
					}else{
						
						 //$test = $this->dbqry->getrecordbyidrow("ats_testmethod","id",$this->input->post('test'.$i));
				  		//$method= $test->spec_no; 
				  
						$cond = $this->input->post('cond'.$i);
						$test = $this->input->post('test'.$i);
						$report = $this->input->post('report_no'.$i);
						$ident = $this->input->post('ident'.$i);
						$size = $this->input->post('size'.$i);
						$qty = $this->input->post('qty'.$i);
						$item = $this->input->post('item'.$i);
						
					    $reportfile = $this->input->post('rpt'.$i);	
					}
	  ?>
     
          <tr>
            
            <td> 
            <input type="text" class="form-control" name="item<?php if($i > 0){ echo $i;} ?>" id="item" value="<?php if($item){ echo $item;}?>" <?php echo $first_visibility; ?>>  
            <?php if(form_error('item')){ ?>  
              <script>$("#item").css("border","2px solid red");</script> 
            <?php } ?>
            </td>
            <td><input type="text" class="form-control" id="qty" name="qty<?php if($i > 0){ echo $i;} ?>" value="<?php if($qty){ echo $qty;}?>" <?php echo $first_visibility; ?>>
             <?php if(form_error('qty')){ ?>  
              <script>$("#qty").css("border","2px solid red");</script> 
            <?php } ?>
          </td>
            <td><input type="text" class="form-control" name="completed<?php if($i > 0){ echo $i;} ?>" value="<?php if($size){ echo $size;}?>" <?php echo $first_visibility; ?>></td>
            <td><input type="text" class="form-control" name="size<?php if($i > 0){ echo $i;} ?>" id="size"  value="<?php if($size){ echo $size;}?>" <?php echo $first_visibility; ?>> 
            <?php if(form_error('size')){ ?>  
              <script>$("#size").css("border","2px solid red");</script>
            <?php } ?>
            </td>
            <td><input type="text" class="form-control" name="ident<?php if($i > 0){ echo $i;} ?>" id="ident1" value="<?php if($ident){ echo $ident;}?>" <?php echo $first_visibility; ?>> 
            <?php if(form_error('ident')){ ?>  
              <script>$("#ident1").css("border","2px solid red");</script>
            <?php } ?></td>
            <td><select class="form-control" name="cond<?php if($i > 0){ echo $i;} ?>" <?php echo $first_visibility; ?>>
              <option value="#" selected disabled>-- Select --</option>
              <option value="Acceptable" <?php if($cond == 'Acceptable'){ echo 'selected';} ?> >Acceptable</option>
              <option value="Rejected" <?php if($cond == 'Rejected'){ echo 'selected';} ?> >Rejected</option>
            </select>  </td>
            <td>
              <select class="form-control" name="test<?php if($i > 0){ echo $i;} ?>" id="test" <?php echo $first_visibility; ?> >
                <option value="#" disabled selected>-- Select --</option>
                <?php
                $qry = $this->dbqry->select("ats_testmethod");
                foreach($qry as $res)
                {
                  ?>
                  <option value="<?php echo $res->id; ?>" <?php if($test == $res->id){ echo 'selected';} ?> ><?php echo $res->spec_no?></option>
                  <?php } ?>

                </select>
                  <?php if(form_error('test')){ ?>  
              <script>$("#test").css("border","2px solid red");</script>
            <?php } ?>
              </td>
              <td><input type="text" class="form-control" name="report_no<?php if($i > 0){ echo $i;} ?>" value="<?php if($report){ echo $report;}?>"<?php echo $first_visibility; ?>></td>  
              <td><input type="file" name="rpt<?php if($i > 0){ echo $i;} ?>" value="<?php if($reportfile){ echo $reportfile;}?>" <?php echo $first_visibility; ?>></td> 
              <td><input type="checkbox" name="record" class="check_box" <?php echo $first_visibility; ?>></td> 
        
            </tr>
             <?php }
             }else{ ?>

             <tr>
           
            <td> <input type="hidden" name="id2" id="id1"/><input type="text" class="form-control" name="item" id="item" value="" <?php echo $first_visibility; ?>>  
            <?php if(form_error('item')){ ?>  
              <script>$("#item").css("border","2px solid red");</script> 
            <?php } ?>
            </td>
            <td><input type="text" class="form-control" id="qty" name="qty" value="" <?php echo $first_visibility; ?>>
             <?php if(form_error('qty')){ ?>  
              <script>$("#qty").css("border","2px solid red");</script> 
            <?php } ?>
          </td>
            <td><input type="text" class="form-control" name="completed" value="" <?php echo $first_visibility; ?>></td>
            <td><input type="text" class="form-control" name="size" id="size"  value="" <?php echo $first_visibility; ?>> 
            <?php if(form_error('size')){ ?>  
              <script>$("#size").css("border","2px solid red");</script>
            <?php } ?>
            </td>
            <td><input type="text" class="form-control" name="ident" id="ident1" value="<?php if($ident){ echo $ident;}?>" <?php echo $first_visibility; ?>> 
            <?php if(form_error('ident')){ ?>  
              <script>$("#ident1").css("border","2px solid red");</script>
            <?php } ?></td>
            <td><select class="form-control" name="cond" <?php echo $first_visibility; ?>>
              <option value="">-- Select --</option>
              <option value="Acceptable">Acceptable</option>
              <option value="Rejected">Rejected</option>
            </select>  </td>
            <td>
              <select class="form-control" name="test" id="test" value="" <?php echo $first_visibility; ?> >
                <option value="">-- Select --</option>
                <?php
                $qry = $this->dbqry->select("ats_testmethod");
                foreach($qry as $res)
                {
                  ?>
                  <option value="<?php echo $res->id?>"><?php echo $res->spec_no?></option>
                  <?php } ?>

                </select>
                  <?php if(form_error('test')){ ?>  
              <script>$("#test").css("border","2px solid red");</script>
            <?php } ?>
              </td>
              <td><input type="text" class="form-control" name="report_no" value="<?php if($report){ echo $report;}?>"<?php echo $first_visibility; ?>></td>  
              <td><input type="file" name="rpt" value="" <?php echo $first_visibility; ?>></td> 
              <td><input type="checkbox" name="record" class="check_box" <?php echo $first_visibility; ?>></td> 
        
            </tr>
          

             <?php } ?>               
          </tbody>
        </table>


        <div style="text-align: center;">
          <button class="btn btn-success add_row" type="button">Add Row</button>
          <button class="btn btn-danger remove_row" type="button">Delete Row</button>
        </div> 
        <div>
          <div class="well well-sm btn-success" style="text-align:center;">Request Details & Retention Period</div>
          <div class="col-md-12">
            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Requested By:<span style="color:#F00">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="requestedby" id="requestedby" value="<?php if($this->input->post('requestedby')){ echo $this->input->post('requestedby');}?>" <?php echo $second_visibility; ?>>
                  <?php if(form_error('requestedby')){ ?>  
              <script>$("#requestedby").css("border","2px solid red");</script> 
            <?php } ?>
                </div>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Created By:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="createdby" value="<?php echo $this->session->userdata("session_user_name")?>"  readonly>

                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Actual Completion:</label>
                <div class="input-group date" id="myDatepicker3">
                  <input type="text" class="form-control" name="completion" value="<?php if($this->input->post('completion')){ echo $this->input->post('completion');}?>" <?php echo $second_visibility; ?>>

                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>

            </div>
           
          </div>
          <div class="col-md-12">
            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Designation:<span style="color:#F00">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="designation" id="des" value="<?php if($this->input->post('designation')){ echo $this->input->post('designation');}?>" <?php echo $second_visibility; ?>>
                   <?php if(form_error('designation')){ ?>  
              <script>$("#des").css("border","2px solid red");</script> 
            <?php } ?>
                </div>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Authorized By:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="authorization" value="<?php if($this->input->post('authorization')){ echo $this->input->post('authorization');}else{ echo 'Admin';}?>"<?php echo $second_visibility; ?>>
                
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Estimate Completion On:</label>
                <div class="input-group date" id="myDatepicker4">
                  <input type="text" class="form-control" name="estimate" value="<?php if($this->input->post('estimate')){ echo $this->input->post('estimate');}?>" <?php echo $second_visibility; ?>>

                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
            </div>
           
          </div>
          <div class="col-md-12">
            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Company:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="company1" value="<?php if($this->input->post('company1')){ echo $this->input->post('company1');}?>" <?php echo $second_visibility; ?>>
                 
                </div>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left" >Department:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <select class="form-control dep"  name="department" id="dep" <?php echo $second_visibility; ?>>
                    <option value="">-- Select --</option>
                    <?php
					$assignedto = "";
                    $qry = $this->dbqry->select("ats_department");
                    foreach($qry as $res)
                    {
						if($this->input->post('department') && $this->input->post('department') == $res->id)
						{
							$selected = "selected";
				
							$assignedto = $this->input->post('assigned');
						}
						else
						{
							$selected = "";
							
						}
						
						
                      ?>
                   <option value="<?php echo $res->id?>" <?php echo $selected; ?>><?php echo $res->department?></option>   
                     <!-- <option value="<?php //echo $res->id?>"><?php //echo $res->department?> </option>-->
                      <?php } ?>
                    </select>
                  
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Report retention period:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="report_r" value="<?php if($this->input->post('report_r')){ echo $this->input->post('report_r');}?>" <?php echo $second_visibility; ?>>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Contact:<span style="color:#F00">*</span></label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="contact" id="contact" value="<?php if($this->input->post('contact')){ echo $this->input->post('contact');}?>" <?php echo $second_visibility; ?>>
                    <?php if(form_error('contact')){ ?>  
              <script>$("#contact").css("border","2px solid red");</script> 
            <?php } ?>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Assigned To:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <select class="form-control assigned" name="assigned"  <?php echo $second_visibility; ?> >
                    
                    <option value="<?php echo $assignedto ?>" selected="selected"><?php echo $assignedto ?></option>
                    

                    </select>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Sample retention period:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="resample" value="<?php if($this->input->post('resample')){ echo $this->input->post('resample');}?>" <?php echo $second_visibility; ?>>
                    
                  </div>
                </div>

              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" style="text-align:left">Remarks:</label>
                  <div class="col-md-10 col-sm-10 col-xs-12">
                    <input class="form-control" type="text" name="remarks" value="<?php if($this->input->post('remarks')){ echo $this->input->post('remarks');}?>" <?php echo $second_visibility; ?>>
                   
                  </div>
                </div>
              </div>
            </div>
            <div style="clear:both;">
            </div>
            <br />
            <div class="well well-sm btn-success" style="text-align:center;">For Account Use Only</div>
            <div class="col-md-12">
              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Mode of Payment:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="payment" value="<?php if($this->input->post('payment')){ echo $this->input->post('payment');}?>" <?php echo $third_visibility;?>>
                   
                  </div>
                </div>
              </div>

              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Invoice No:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="invoice" value="<?php if($this->input->post('invoice')){ echo $this->input->post('invoice');}?>" <?php echo $third_visibility;?>>
                   
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Reciept No:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="receiptno" value="<?php if($this->input->post('receiptno')){ echo $this->input->post('receiptno');}?>" <?php echo $third_visibility;?>>
                  
                  </div>
                </div>

              </div>
            </div>
            <br /><br />
            <div class="col-md-12">    
              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Accounts:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="account" value="<?php if($this->input->post('account')){ echo $this->input->post('account');}?>" <?php echo $third_visibility;?>>
                    
                  </div>
                </div>
              </div>

              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Approved By:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="approved" value="<?php if($this->input->post('approved')){ echo $this->input->post('approved');}?>" <?php echo $third_visibility;?>>
                    
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Date:</label>
                  <div class="input-group date" id="myDatepicker5">
                    <input type="text" class="form-control" name="date1" value="<?php if($this->input->post('date1')){ echo $this->input->post('date1');}?>" <?php echo $third_visibility;?>>

                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
                </div>
                
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" style="text-align:left">Comments:</label>
                  <div class="col-md-10 col-sm-10 col-xs-12">
                    <input class="form-control" type="text" name="comments" value="<?php if($this->input->post('comments')){ echo $this->input->post('comments');}?>" <?php echo $third_visibility;?>>
                 
                  </div>
                </div>

              </div>


            </div>

          </div>


        </div>
        <div style="text-align: right;">


          <input class="btn btn-success" type="submit" id="send_form" value="Save" />
          <input class="btn btn-primary" type="reset" value="Reset" /> 

        </div>  
      </form>      

    </div>
  </div>
</div>

</div>
</div>
