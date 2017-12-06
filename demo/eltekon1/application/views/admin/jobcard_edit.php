<?php $user= $this->dbqry->getrecordbyidrow("ats_jobcards","id",$id);
$jobcard= $user->cardno;

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
    
    <form id="form1" name="form" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" action="<?php echo base_url('admin/jobcard/jobcard_edit_action/'.$id); ?>">
      <div class="row">
       <?php if($this->session->flashdata('update_msg') != "") { ?>
                    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('update_msg');?></div>
                <?php } ?> 
        <div class="col-md-12">
          <div class="x_panel">
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
                <input type="text" class="form-control" name="status" value="<?php echo $user->cardno?>" <?php echo $first_visibility;?>>

              </div>
            </div>
          </div>
              <div class='col-sm-3'>

                <div class="form-group">
                 <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Date:</label>
                 <div class="input-group date" id="myDatepicker2">
    <input type="text" class="form-control" name="date"  id="date123" value="<?php if($user->addeddate){ echo $user->addeddate;}?>" <?php echo $first_visibility; ?>>
                  <span class="input-group-addon">
                   <span class="glyphicon glyphicon-calendar"></span>
                 </span>

               </div>

             </div>
          <?php //echo form_error('date','<span class="help-block" >','</span>'); ?>
           </div>
           
           <div class='col-sm-3'>

            <div class="form-group">
              <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Order No:</label>
              <div class="col-md-7 col-sm-7 col-xs-12">
               
              <select class="form-control ats_contactmaster_name"  id="orderno" name="orderno" value="" <?php echo $first_visibility; ?> >
                  <option selected="" disabled="">-- Select --</option>
                  <?php
                  $qry = $this->dbqry->select("ats_contactmaster");
                  foreach($qry as $res)
                  {
                   ?>
                   <option value="<?php echo $res->id;?>" <?php if($user->orderno == $res->order_no) { echo 'selected';}?>> <?php echo $res->order_no?></option>
                   <?php } ?>
                 </select>

               </div>
             </div>
             
           </div>

           <div class='col-sm-3'>

            <div class="form-group">
              <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Status:<span style="color:#F00">*</span></label>
              <div class="col-md-7 col-sm-7 col-xs-12">
                <select class="form-control"  name="status" id="status" required>
                 <option selected="" disabled="">-- Select --</option>
                 
                 <option value="Authorized" <?php if($user->jobcardstatus== "Authorized") { echo 'selected';}?>> Authorized</option>
                 <option value="Unauthorized" <?php if($user->jobcardstatus== "Unauthorized") { echo 'selected';}?>>Unauthorized</option>
                        
                 </select>
          
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
                  <input type="text" class="form-control" name="company"  value="<?php echo $user->company?>" readonly>

                </div>
              </div>
            </div>

            <div class="col-sm-3">
              Witness:<span style="color:#F00">*</span> 
              <input type="radio" name="Witness1" value="yes" <?php if($user->witness1=="yes") {echo 'checked="checked"';}?> <?php echo $first_visibility; ?>/>Yes
              <input type="radio" name="Witness1" value="No"  <?php if($user->witness1=="No") {echo 'checked="checked"';}?> <?php echo $first_visibility; ?> />No<br>
           
              
           
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Location:<span style="color:#F00">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="location" value="<?php echo $user->location?>" <?php echo $first_visibility; ?> required>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> ATS Client:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="client" value="<?php echo $user->client?>" readonly>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              Witness:<span style="color:#F00">*</span> 
              <input type="radio" name="Witness2" value="yes"  <?php if($user->witness2=="yes") {echo 'checked="checked"';}?> <?php echo $first_visibility; ?> />Yes
              <input type="radio" name="Witness2" value="No" <?php if($user->witness2=="No") {echo 'checked="checked"';}?> <?php echo $first_visibility; ?>/> No<br>
             
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Documents:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="document" value="<?php echo $user->document?>" <?php echo $first_visibility; ?>>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Third Party Consulatant:<span style="color:#F00">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control"  name="thirdparty" value="<?php echo $user->consultant?>" readonly>
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              Witness:<span style="color:#F00">*</span>
              <input type="radio" name="Witness3" value="yes" <?php if($user->witness3=="yes") {echo 'checked="checked"';}?> <?php echo $first_visibility; ?>/>Yes
              <input type="radio" name="Witness3" value="No" <?php if($user->witness3=="No") {echo 'checked="checked"';}?> <?php echo $first_visibility; ?>/> No<br>
             
          
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Request No:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" id="req" name="request" value="<?php echo $user->request?>" <?php echo $first_visibility; ?>/>
               
                </div>
              </div>
            </div>
             
          </div>
          <div class="col-md-12">
            <div class="col-sm-6">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Contract Title/Number:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="contractno" value="<?php echo $user->contract?>" readonly>
                </div>
              </div>
            </div>



            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Description:<span style="color:#F00">*</span></label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="description" value="<?php echo $user->briefdis?>" <?php echo $first_visibility; ?>>
                 
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
        
      <table  class="table table-striped table-bordered description_table" id="description_table">
                      <thead>
                       <tr class="headings">
                                <th class="column-title">Item Description/Required Test <span style="color:#F00">*</span></th>
                                <th class="column-title" colspan="2">Qty </th>                               
                                <th class="column-title" colspan="3">Test Sample Details</th>                             
                                <th class="column-title">Specification Test</th>
                                <th class="column-title">Report No</th>
                                <th class="column-title">Upload Report</th>
                                <th class="column-title"></th> 
                              </tr>
                              
                              <tr class="headings">
                                <th class="column-title"></th>
                                 <th class="column-title">Requested <span style="color:#F00">*</span></th>
                                <th class="column-title">Completed</th>
                                <th class="column-title">Size <span style="color:#F00">*</span></th>
                                <th class="column-title">Ident<span style="color:#F00">*</span></th>
                                <th class="column-title">Sample Condition</th>
                                <th class="column-title"> </th>
                                <th class="column-title"> </th>                 
                                <th class="column-title"></th>
                                <th class="column-title"></th> 
        					  </tr>                   
                      </thead>
                      <tbody>
                      
                  <?php   $test1= $this->dbqry->getrecordbyid("test","jobcard",$jobcard); ?>
                  <?php 
                  $i=0;
                  foreach($test1 as $key=>$test){ 
		  	   ?>
               
               
                       <tr>
            <td><input type="hidden" value="<?php echo $test->id; ?>" name="jid<?php echo $key; ?>" /><input type="text" class="form-control" name="item<?php echo $key; ?>" value="<?php echo  $test->item;?>" <?php echo $first_visibility; ?>></td>
            <td><input type="text" class="form-control" name="qty<?php echo $key; ?>" value="<?php echo $test->qty;?>" <?php echo $first_visibility; ?>></td>
            <td><input type="text" class="form-control" name="completed<?php echo $key; ?>"></td>
            <td><input type="text" class="form-control" name="size<?php echo $key; ?>" value="<?php echo $test->size;?>" <?php echo $first_visibility; ?>></td>
            <td><input type="text" class="form-control" name="ident<?php echo $key; ?>" value="<?php echo $test->ident;?>" <?php echo $first_visibility; ?>></td>
            <td> <select class="form-control"  name="cond<?php echo $key; ?>" value="">
                 <option selected="" disabled="">-- Select --</option>
                 
                 <option value="Acceptable" <?php if($test->cond == "Acceptable") { echo 'selected';}?>> Acceptable</option>
                 <option value="Rejected" <?php if($test->cond == "Rejected") { echo 'selected';}?>> Rejected</option>
                 
                 </select></td></td>
            <td> <select class="form-control"  name="method<?php echo $key; ?>" value="" <?php echo $first_visibility; ?> >
                  <option selected="" disabled="">-- Select --</option>
                  <?php
                  $qry = $this->dbqry->select("ats_testmethod");
                  foreach($qry as $res)
                  {
					echo "method = ".$test->method;
					echo "spec_no = ".$res->spec_no."<br>";
						if($res->spec_no == $test->method)
						  {
							  $selected = "selected";
							  
						  }
						  else
						  {
							  $selected = "";
						  }  
				
                   ?>
                   
                <option value="<?php echo $res->id;?>" <?php  echo $selected;?>><?php echo $res->spec_no?></option>
                   
                   <?php  } ?>
                 </select></td>
              <td><input type="text" class="form-control" name="report<?php echo $key;?>" value="<?php echo $test->report;?>"<?php echo $first_visibility; ?></td>  
             <td>
             <?php if($test->reportfile != ''){ ?>
                <a href="<?php echo base_url()."FileUpload/reports/".$test->reportfile;?>" target="_blank">View</a> 
             <?php } ?>
             
             <label for="rpt<?php echo $key;?>" >Choose File To Upload
             <input type="file" id="rpt<?php echo $key;?>" name="rpt<?php echo $key;?>" style="display:none">
             </td>  
              <td><input type="checkbox" name="record" class="check_mark"  <?php echo $first_visibility; ?> attr-val="<?php echo $test->id; ?>"></td>
            </tr>
                     <?php $i++; 
                     } ?>
                     <input type="hidden" value="<?php echo $i; ?>" id="item_cnt" name="item_cnt" />
                      </tbody>
                    </table>
        <div style="text-align: center;">
          <button class="btn btn-success add_row" type="button">Add Row</button>
          <button class="btn btn-danger " type="button" id="deletetest">Delete Row</button>
        </div>
  
        <!-- <div style="text-align: center;">
          <button class="btn btn-success add_row" type="button">Add Row</button>
          <button class="btn btn-danger remove_row" type="button">Delete Row</button>
        </div>  -->
        <div>
          <div class="well well-sm btn-success" style="text-align:center;">Request Details & Retention Period</div>
          <div class="col-md-12">
            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Requested By:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="requestedby" id="requestedby" value="<?php echo $user->requestedby?>" <?php echo $second_visibility; ?> >
                
                </div>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Created By:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="createdby" value="<?php echo $this->session->userdata("session_user_name")?>" <?php echo $second_visibility;?>>

                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Actual Completion:</label>
                <div class="input-group date" id="myDatepicker3">
                  <input type="text" class="form-control" name="completion" value="<?php if($user->completed){ echo $user->completed;}?>" <?php echo $second_visibility; ?>>

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
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Designation:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="designation" id="des" value="<?php if($user->designation){ echo $user->designation;}?>" <?php echo $second_visibility; ?>>
                   
                </div>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Authorized By:</label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <input type="text" class="form-control" name="authorization" value="<?php if($user->certifiedby){ echo $user->certifiedby;}else{ echo 'Admin';}?>" <?php echo $second_visibility; ?>>
                
                </div>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Estimate Completion On:<span style="color:#F00">*</span></label>
                <div class="input-group date" id="myDatepicker4">
                  <input type="text" class="form-control" name="estimate" id="estimate" value="<?php if($user->estdate){ echo $user->estdate; } ?>" <?php echo $second_visibility; ?> required>
                      
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
                  <input type="text" class="form-control" name="company1" value="<?php if($user->company1){ echo $user->company1; } ?>" <?php echo $second_visibility; ?>>
                 
                </div>
              </div>
            </div>

            <div class="col-sm-4">

              <div class="form-group">
                <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left" >Department:<span style="color:#F00">*</span></label>
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <select class="form-control dep"  name="department" id="dep" <?php echo $second_visibility; ?> required>
                    <option value="">-- Select --</option>
                    <?php
                    $qry = $this->dbqry->select("ats_department");
                    foreach($qry as $res)
                    {
                      ?>
                      <option value="<?php echo $res->id; ?>" <?php if($user->department == $res->department) { echo 'selected';} ?>><?php echo $res->department?></option>
                      <?php } ?>
                    </select>
                  
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Report retention period:<span style="color:#F00">*</span></label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="report_r" id="report" value="<?php if($user->reperiod){ echo $user->reperiod;}?>" <?php echo $second_visibility; ?> required>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Contact:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="contact" id="contact" value="<?php if($user->contact){ echo $user->contact;}?>" <?php echo $second_visibility; ?>>
                  
                  </div>
                </div>
              </div>

              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Assigned To:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <select class="form-control assigned" name="assigned" <?php echo $second_visibility; ?> >
                    <?php if($user->department){ ?>
                    <option value="<?php echo $user->assigned; ?>"><?php echo $user->assigned; ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Sample retention period:<span style="color:#F00">*</span></label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="resample" id="resample" value="<?php if($user->resample){ echo $user->resample;}?>" <?php echo $second_visibility; ?> required>
                    
                  </div>
                </div>

              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="control-label col-md-2 col-sm-2 col-xs-12" style="text-align:left">Remarks:</label>
                  <div class="col-md-10 col-sm-10 col-xs-12">
                    <input class="form-control" type="text" name="remarks" value="<?php if($user->remarks){ echo $user->remarks;}?>" <?php echo $second_visibility; ?>>
                   
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
                    <input type="text" class="form-control" name="payment" value="<?php if($user->payment){ echo $user->payment;}?>" <?php echo $third_visibility; ?>>
                   
                  </div>
                </div>
              </div>

              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Invoice No:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="invoice" value="<?php if($user->invoice){ echo $user->invoice;}?>" <?php echo $third_visibility; ?>>
                   
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Reciept No:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="receiptno" value="<?php if($user->receiptno){ echo $user->receiptno;}?>" <?php echo $third_visibility; ?>>
                  
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
                    <input type="text" class="form-control" name="account" value="<?php if($user->account){ echo $user->account;}?>" <?php echo $third_visibility; ?>>
                    
                  </div>
                </div>
              </div>

              <div class="col-sm-4">

                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Approved By:</label>
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <input type="text" class="form-control" name="approved" value="<?php if($user->approved){ echo $user->approved;}?>" <?php echo $third_visibility; ?>>
                    
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Date:</label>
                  <div class="input-group date" id="myDatepicker5">
                    <input type="text" class="form-control" name="date1" value="<?php if($user->date1){ echo $user->date1;}?>" <?php echo $third_visibility;?>>

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
                    <input class="form-control" type="text" name="comments" value="<?php if($user->comments){ echo $user->comments;}?>" <?php echo $third_visibility;?>>
                 
                  </div>
                </div>

              </div>


            </div>

          </div>


        </div>
        <div style="text-align: right;">
        
       <a class="btn btn-primary" type="button" href="javascript:history.back()">Cancel</a>
		
          <input class="btn btn-success" type="submit" id="send_form" value="Save" />
          <input class="btn btn-primary" type="reset" value="Reset" /> 

        </div>  
      </form>      

    </div>
  </div>
</div>

</div>
</div>
