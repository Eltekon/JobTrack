
<?php 
$user= $this->dbqry->getrecordbyidrow("ats_jobcards","id",$id);
$jobcard= $user->cardno;
/*$test1= $this->dbqry->getrecordbyidrow("test","jobcard",$id);*/
 
/*$rolename = $this->session->userdata('session_user_rolename');


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
     */
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

            <div class="row" id="print_div">
              <div class="col-md-12">
                <div class="x_panel" id="panel">
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
                   <form id="demo-form2" name="form" method="post" class="form-horizontal form-label-left" data-parsley-validate="" novalidate="" >
                       <div class="col-md-12">
                            <div class='col-sm-3'>
                            
                            <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Jobcard:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $user->cardno?>" readonly >
                        </div>
                      </div>
                            </div>
                            
                            <div class='col-sm-3'>
                          
                            <div class="form-group">
                             <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Date:</label>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->addeddate?>" readonly >
                          
                        </div>
                    </div>
                            </div>
                    		
              <div class='col-sm-3'>
                  
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Order No:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $user->orderno?>" readonly>
                      </div>
                </div>
                </div>
                <div class='col-sm-3'>
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Status:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                         <input type="text" class="form-control" value="<?php echo $user->jobcardstatus?>" readonly>
                        </div>
                      </div>
                </div>
                       
                    
                         
             </div>
                
                 
                <div class="col-md-12">
                    <div class="col-sm-6">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Company (Asset Owner):</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                         <input type="text" class="form-control" value="<?php echo $user->company?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-3">
                       Witness: 
                     <input type="radio" name="Witness1"  <?php if($user->witness1=="yes") {echo 'checked="checked"';}?> readonly/>Yes
                     <input type="radio" name="Witness1" <?php if($user->witness1=="No") {echo 'checked="checked"';}?> readonly/>No
                          
                    </div>
                    
                    <div class="col-sm-3">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Location:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                         <input type="text" class="form-control" value="<?php echo $user->location?>" readonly>
                        </div>
                      </div>
                    </div>
                </div>
                 <div class="col-md-12">
                    <div class="col-sm-6">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> ATS Client:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $user->client?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-3">
                       Witness: 
                        <input type="radio" name="Witness2"  <?php if($user->witness2=="yes") {echo 'checked="checked"';}?> readonly/>Yes
                     <input type="radio" name="Witness2" <?php if($user->witness2=="No") {echo 'checked="checked"';}?> readonly/>No
                    </div>
                    
                    <div class="col-sm-3">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Documents:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->document?>" readonly>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-sm-6">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Third Party Consulatant:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->consultant?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-3">
                       Witness: 
                    <input type="radio" name="Witness3"  <?php if($user->witness3=="yes") {echo 'checked="checked"';}?> readonly/>Yes
                     <input type="radio" name="Witness3" <?php if($user->witness3=="No") {echo 'checked="checked"';}?> readonly/>No
                          
                    </div>
                    
                    <div class="col-sm-3">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Request No:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $user->request?>" readonly>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-sm-6">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left" readonly> Contract Title/Number:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" class="form-control" value="<?php echo $user->contract?>" readonly>
                        </div>
                      </div>
                    </div>
                
                   
                    <div class="col-sm-3">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left"> Description:</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->briefdis?>" readonly>
                        </div>
                      </div>
                    </div> <br>
                        <div class="col-md-12">
                       
                </div>
                
                
                    </div>
                </div>
                
             
                
                
                
                <div style="clear:both;"></div>
                <div class="well well-sm btn-success" style="text-align:center;">Test Descriptions</div>
                
              
                <table  class="table table-striped table-bordered" id="description_table">
                      <thead>
                       <tr class="headings">
                                <th class="column-title">Item Description/Required Test</th>
                                <th class="column-title" colspan="2">Qty </th>                               
                                <th class="column-title" colspan="3">Test Sample Details</th>                             
                                <th class="column-title">Specification Test</th>
                                <th class="column-title">Report No</th>
                                <th class="column-title">Download Report</th>
                    
                              </tr>
                              
                              <tr class="headings">
                                <th class="column-title"></th>
                                 <th class="column-title">Requested</th>
                                <th class="column-title">Completed</th>
                                <th class="column-title">Size</th>
                                <th class="column-title">Ident</th>
                                <th class="column-title">Sample Condition</th>
                                <th class="column-title"> </th>
                                <th class="column-title"> </th>                 
                                <th class="column-title"></th>

        					  </tr>                   
                      </thead>
                      <tbody>
           <form  name="form" method="post" class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
                 <?php  $test1= $this->dbqry->getrecordbyid("test","jobcard",$jobcard); ?>
                  <?php foreach($test1 as $test){ 
				  /*$field_name = 'report'.$i;
				  $field_name1 = 'qty'.$i;
				  $field_name2 = 'size'.$i;
				  $field_name3 = 'ident'.$i;
				  $field_name4 = 'method'.$i;
				  $field_name5 = 'cond'.$i;
          
                     $j = $i+1;
				  $field_name6 = 'item'.$j;
				  
				  if($user->$field_name1 != ""){*/
				   ?>
                       <tr>
            <td><input type="text" class="form-control" name="item" value="<?php echo $test->item;?>" readonly></td>
            <td><input type="text" class="form-control" name="qty" value="<?php echo $test->qty;?>" readonly></td>
            <td><input type="text" class="form-control" name="completed" readonly></td>
            <td><input type="text" class="form-control" name="size" value="<?php echo  $test->size;?>" readonly></td>
            <td><input type="text" class="form-control" name="ident" value="<?php echo  $test->ident;?>" readonly></td>
            <td><input type="text" class="form-control" name="cond" value="<?php echo  $test->cond;?>" readonly></td>
            <td><input type="text" class="form-control" name="method" value="<?php echo  $test->method;?>" readonly></td>
            
              <td><input type="text" class="form-control" name="rpt" value="<?php echo  $test->report;?>" readonly></td>  
              <td><a href="<?php echo base_url()."FileUpload/reports/".$test->reportfile;?>">Download</a> </td>  

            </tr>
                     <?php }  ?>

                      </tbody>
                    </table>
                    
                   
                  
                   <div class="well well-sm btn-success" style="text-align:center;">Request Details & Retention Period</div>
                <div class="col-md-12">
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Requested By:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->requestedby?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Created By:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->createdby?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                       <div class="form-group">
                             <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Actual Completion:</label>
                        <div class="input-group date" id="myDatepicker3">
                              <input type="text" class="form-control" value="<?php echo $user->completed?>" readonly>
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
                           <input type="text" class="form-control" value="<?php echo $user->designation?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Authorized By:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->certifiedby?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-3">
                       <div class="form-group">
                             <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Estimate Completion:</label>
                        <div class="input-group date" id="myDatepicker4">
                             <input type="text" class="form-control" value="<?php echo $user->estdate?>" readonly>
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
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Comapny:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" class="form-control" value="<?php echo $user->company1?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Department:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" class="form-control" value="<?php echo $user->department?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Report retention period:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <input type="text" class="form-control" value="<?php echo $user->reperiod?>" readonly>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Contact:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->contact?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Assigned To:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $user->assigned?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Sample retention period:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->resample?>"readonly>
                        </div>
                      </div>
                      
                    </div>
                     <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" style="text-align:left">Remarks:</label>
                        <div class="col-md-10 col-sm-10 col-xs-12">
                           <input type="text" class="form-control" value="<?php echo $user->remarks?>" readonly>
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
                         <input type="text" class="form-control" value="<?php echo $user->payment?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Invoice No:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                         <input type="text" class="form-control" value="<?php echo $user->invoice?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                       <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Reciept No:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" class="form-control" value="<?php echo $user->receiptno?>" readonly>
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
                          <input type="text" class="form-control" value="<?php echo $user->account?>" readonly>
                        </div>
                      </div>
                    </div>
                
                    <div class="col-sm-4">
                   
                    <div class="form-group">
                        <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Approved By:</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" class="form-control" value="<?php echo $user->approved?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                       <div class="form-group">
                             <label class="control-label col-md-5 col-sm-5 col-xs-12" style="text-align:left">Date:</label>
                        <div class="input-group date" id="myDatepicker5">
                           <input type="text" class="form-control" value="<?php echo $user->date1?>" readonly>
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
                          <input type="text" class="form-control" value="<?php echo $user->comments?>" readonly>
                        </div>
                      </div>
                       
                </div>
              
                        
                </div>
           
            </div>
            
                
                </div>
                 <div style="text-align: right;">
              <button class="btn btn-success" id="print" type="button">Print Jobcard</button>
                      
                  <a name="pdf" class="btn btn-warning" href="<?php echo base_url();?>admin/jobcard/jobcard_reports/<?php echo $user->id;?>">Generate PDF</a>

                  <?php
                  $role_id = $this->session->userdata('session_user_roleid');
                  $chkjobcrd = $this->dbqry->checkpermission($role_id,'Jobcard');
                 if(!empty($chkjobcrd)){
                 if($chkjobcrd->has_edit == 1){ ?>

                   <a class="btn btn-success" href="<?php echo base_url();?>admin/jobcard/jobcard_editview/<?php echo $id;?>" >Edit</a>

                   <?php } 
                   } ?>

                    </form>
                  </div>  
                
        </div>
    </div>
</div>






        <!-- footer content -->
      <!--  <footer>
          <div class="pull-right">
         Eltekon JTT <a href="https://colorlib.com">2017</a>
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
      </div>
    </div>
    
    
    
    <div id="print_hidden" style="display:none;">
    	
    </div>
    

    <!-- compose -->
    <!--<div class="compose col-md-6 col-xs-12">
      <div class="compose-header">
        New Message
        <button type="button" class="close compose-close">
          <span>×</span>
        </button>
      </div>

      <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a data-edit="fontSize 5">
                  <p style="font-size:17px">Huge</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 3">
                  <p style="font-size:14px">Normal</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 1">
                  <p style="font-size:11px">Small</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
              <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
              <button class="btn" type="button">Add</button>
            </div>
            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
          </div>
        </div>

        <div id="editor" class="editor-wrapper"></div>
      </div>-->