  <?php   $id= $this->session->userdata("session_user_id"); ?>
  <?php   $res= $this->dbqry->getrecordbyidrow("ats_user_profile","user_id",$id); 
        if(empty($res)){
		  $res="";
		}
         else{ 
		 $edu=$res->Qualification;
		 
		 }?>


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

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
              <?php if($this->session->flashdata('msg_success') != "") { ?>
               <br><div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('msg_success');?></div>
<?php } ?>
    <?php if($this->session->flashdata('msg_failer') != "") { ?>
               <br><div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('msg_failer');?></div>
<?php } ?>
   
   
     <?php if($this->session->flashdata('msg') != "") { ?>
                    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('msg');?></div>
                <?php } ?> 
                <?php if($this->session->flashdata('msg1') != "") { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('msg1');?></div>
                <?php } ?>         
                  <div class="x_title">
                   <h2> Profile view </h2>
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
                    <div class="col-md-3 col-sm-4 col-xs-12 profile_details">
                            <div class="well profile_view" style="border-top:3px solid #00ACE6;width:100%;">
                                  <div class="col-sm-12">
                                   
                                    <center>
                                    
                                       <?php if(!empty($res)){
				?>    
         <img src="<?php echo base_url()?>FileUpload/images/<?php echo $res->photos;?>"  class="img-circle profile_img" height="50" width="50" style="width:25%;margin:0">
              <?php } 
			  else {
				  ?>
         <img src="<?php echo base_url()?>/images/img.jpg"  class="img-circle profile_img" height="50" style="width:25%;margin:0" >
                  <?php } ?>
                                    </center>	
                                     <div class="col-sm-12" style="margin-top:10px;">
                                          <h4 class="brief" align="center"><b><i><?php echo $this->session->userdata("session_user_name")?></i></b></h4><br />
                                          <h4 class="brief" align="center"><i><?php echo $this->session->userdata("session_user_rolename")?></i></h4>
                                     </div>

                                     <div class="col-sm-12" style="border-top: 1px solid #f5f5f5;border-bottom: 1px solid #f5f5f5;margin-top: 10px;margin-bottom: 10px;">
                                      <div class="col-sm-6">
                                       <h5>friends</h5>
                                      </div>
                                      <div class="col-sm-6 text-right">
                                        <h5>2452</h5>
                                      </div> 
                                     </div>

                                  </div>
                              
                              </div>
                              
                              <div class="well profile_view" style="border-top:3px solid #00ACE6;width:100%">
                                  <div class="col-sm-12">
                                     <div class="col-sm-12">
                                          <h4 class="brief"><b><i>About me</i></b></h4>
                                       <hr />  
                                     </div>
                                 
                                     <div class="col-sm-12">
                                     <h6>Qualification : <?php  if(empty($edu)){echo $edu=""; }else {echo $edu; }?></h6>
                                     <p>Email :  <?php  if(empty($res->Email)){echo $res=""; }else {echo $res->Email; }?> </p>  
                                     <p>Marital_Status : <?php  if(empty($res->Marital_Status)){echo $res=""; }else {echo $res->Marital_Status; }?> </p>  
                                  
                                     </div>
                                  </div>
                              </div>
                          
                       </div>
                    
                      <div class="col-md-9 col-sm-8 col-xs-12">

                      
                      <!-- start of user-activity-graph -->
                    <style>
                    ul.bar_tabs > li.active{
						border-right:none;
						border-top:3px solid #00ACE6;
						}
                    </style>
                      <!-- end of user-activity-graph -->

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="background: none;margin-top: 15px;">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Add profile</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Chnage Password</a>
                          </li>
                        <!--  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                          </li>-->
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start recent activity -->
                              <div style="clear:both;"></div>
                               
                            
                <div class="well well-sm btn-success" style="text-align:center;">Basic Details</div>
                <form id="demo-form2" name="form" method="post" action="<?php echo base_url()?>admin/loginadmin/user_profile_add" class="form-horizontal form-label-left" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                      
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Name:
                        <span class="required"></span>
                        </label>
                    
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input name="Name" class="form-control col-md-7 col-xs-9"  type="text" value="<?php echo $this->session->userdata("session_user_name")?>">
                       
                        </div>
                         
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" for="first-name">
                        Email:
                        <span class="required"></span>
                        </label>
                        <div>
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Email" id="first-name" class="form-control col-md-7 col-xs-9"  type="text" value="<?php echo $this->session->userdata("session_user_email")?>">
                        </div>
                        </div>
                          </div> 
                           <div class="form-group">
                          
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        Contact Number:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="ContactNum" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                         
                         <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-9">Marital Status</label>
                                <div class="col-md-6 col-sm-6 col-xs-9">
                                <select name ="Marital_Status" class="form-control">
                                <option>Choose option</option>
                                <option>Married</option>
                                <option>Unmarried</option>
                              
                                </select>
                                </div>
                                </div> 
                            
                             <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Father's name:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Father_name" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Mother's name:
                        <span class="required"></span>
                        </label>
              
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Mother_name" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12">  
                             
                        Date of Birth:</label>
                        <div class="col-md-6 col-sm-6 col-xs-9 input-group date" id="myDatepicker6" style="padding-left:10px;padding-right:10px;">
                            <input type="text" class="form-control col-md-7 col-xs-9" name="DOB">
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                         <div class="well well-sm btn-success" style="text-align:center;">Adderess For Communication</div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Address 1:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Address1" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Address 2:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Address2" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                       
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       City:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="City" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        
                       Location:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Location" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Aletrnative Number:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="AlternativeNum" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                    
                        <div class="well well-sm btn-success" style="text-align:center;">Job Details</div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                      Qualification:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Qualification" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Job Position:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Job_Position" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                      Year of Experience:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="YearOf_Exp" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       skills:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="skills" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div> 
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Department:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="Department" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        <!--<div class="form-group">
                             <label class="control-label col-md-3 col-sm-3 col-xs-12">  
                             
                        Date of joining:</label>
                        <div class="input-group date" id="myDatepicker2">
                            <input type="text" class="form-control col-md-6 col-xs-6" name="Dateof_joining">
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>-->
                       
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Upload photos:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="photos" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="file">
                        </div>
                        </div>
                        <div style="text-align: right;">
               
                    <input class="btn btn-warning" type="submit" value="Submit"> 
                   <input class="btn btn-success" type="submit" value="Cancel">
                    </form>
                  </div>
                       
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                     <form id="demo-form2"  name="form" method="post" action="<?php echo base_url()?>admin/loginadmin/change_password" class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
                   
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Current Password:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="cur_pass" class="form-control col-md-7 col-xs-9"  type="text">
                          <?php //echo form_error('cur_pass'); ?>
                        </div>
                       
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       New Password:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="new_pass"  class="form-control col-md-7 col-xs-9"  type="password">
                          <?php //echo form_error('new_pass'); ?>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                       Confirm Password:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="con_pass"  class="form-control col-md-7 col-xs-9"  type="password">
                          <?php //echo form_error('con_passe'); ?>
                        </div>
                        </div>
                             
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                        
                     
                      
                        <input class="btn btn-success" type="submit" value="Submit">
                        <input class="btn btn-success" type="submit" value="Cancel">
                        </form>
                        </div>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                              photo booth letterpress, commodo enim craft beer mlkshk </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                              
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
               
                      
                            </div>
                            <div class="right">
                            
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                             
                            <div class="col-md-4 text-right">
                            
                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->









        <!-- footer content -->
      <!--  <footer>
          <div class="pull-right">
         Eltekon JTT <a href="https://colorlib.com">2017</a>
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
      </div>