<?php   $id= $this->session->userdata("session_user_id"); ?>
<?php $res= $this->dbqry->getrecordbyidrow("ats_user_profile","user_id",$id); 
        if(empty($res)){
		  $res="";
		}
         else{ 
		 $edu=$res->Qualification;
		 
		 }
		 ?> 
 
 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eltekon JTT! | </title>
     <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatable Style -->
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
    
    
  




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
  </head>

   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>Eltekon JTT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
            <?php if(!empty($res)){
				?>    
         <img src="<?php echo base_url()?>FileUpload/images/<?php echo $res->photos;?>"  class="img-circle profile_img">
              <?php } 
			  else {
				  ?>
         <img src="<?php echo base_url()?>/images/img.jpg"  class="img-circle profile_img">
                  <?php } ?>
                
              </div>
              
              <div class="profile_info">
                <span><h2>Welcome </h2></span>
               
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               
                <ul class="nav side-menu">
          <li>  <a href="<?php echo base_url();?>admin/loginadmin/dashboard/"><i class="fa fa-dashboard"></i> Dashboard <span class="fa fa-chevron-left"></span> </a>
                   
                  </li>
                 <?php 
                 $role_id = $this->session->userdata('session_user_roleid');
                 $chkjobcrd = $this->dbqry->checkpermission($role_id,'Jobcard');
                 if(!empty($chkjobcrd)){
                 if($chkjobcrd->has_view == 1){	?>
                  <li><a><i class="fa fa-wrench"></i> Jobcard <span class="fa fa-chevron-down"></span></a>
                 
                    <ul class="nav child_menu">
                  
                     <li><a href="<?php echo base_url();?>admin/jobcard/jobcard_list/">Jobcard List</a></li>
                      <?php if($chkjobcrd->has_add == 1){ ?>
				              <li><a href="<?php echo base_url();?>admin/jobcard/jobcard_add/">New Jobcard</a></li>
                      <?php } ?>
                       <?php if($chkjobcrd->pending_list == 1){ ?>
				              <li><a href="<?php echo base_url();?>admin/jobcard/jobcard_pendinglist/">Pending Jobcard</a></li>
                     <?php } ?>
                    </ul>
                    
                  </li>
                  <?php }
                  } ?>
                  
                  
                 <?php $chkcontacts = $this->dbqry->checkpermission($role_id,'Contacts');
                 if(!empty($chkcontacts)){
                 if($chkcontacts->has_view == 1){
						    ?>
               <li><a href="<?php echo base_url();?>admin/contact/contact_view/"><i class="fa fa-user"></i> Contact Master </a></li>
              <?php }
              } ?>

                 <?php $chktest = $this->dbqry->checkpermission($role_id,'Test');
                 if(!empty($chktest)){
                 if($chktest->has_view == 1){
                ?>
                  <li><a href="<?php echo base_url();?>admin/specification/specification_view/"><i class="fa fa-users"></i> Specification Master </a></li>
                  <?php  } 
                  }?>

                  <?php $chkUser = $this->dbqry->checkpermission($role_id,'User');
                  if(!empty($chkUser)){
                  if($chkUser->has_view == 1){
                  ?>

                  <li><a><i class="fa fa-cogs"></i> User Setting<span class="fa fa-chevron-down"></span> </a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/user/user_view/">Change User Priority</a></li>
                      <!--<li><a href="<?php echo base_url();?>admin/user/reset_password/">Reset Password</a></li>-->
                      
                       <li><a href="<?php echo base_url();?>admin/user/edit_designation/">Create/edit Designation</a></li>
                       <?php  if($chkUser->has_add == 1){ ?>
                       <li><a href="<?php echo base_url();?>admin/user/user_add/">Add User</a></li>
                       <?php } ?>
                    </ul>
                  </li>
                   <?php } } ?> 

                  <?php 
                  $chkdept = $this->dbqry->checkpermission($role_id,'Department');
                  if(!empty($chkdept)){
                  if($chkdept->has_view == 1){
                  ?>

                  <li><a href="<?php echo base_url();?>admin/department/department_view/"><i class="fa fa-users"></i>Departments <span class="fa fa-chevron-left"></span></span></a>
                  </li>

                  <?php } 
                  } ?>

                  <?php 
                  $chkrole = $this->dbqry->checkpermission($role_id,'UserRole');
                  if(!empty($chkrole)){
                  if($chkrole->has_view == 1){
                  ?>
                  
                   <li><a href="<?php echo base_url();?>admin/usertype/usertype_view/"><i class="fa fa-user"></i>Role <span class="fa fa-chevron-left"></span></span></a>
                   </li>

                   <?php } 
                   }?>

                  <li><a><i class="fa fa-search"></i>Trash</span></a>
                   
                  </li>
                </ul>
              
              </div>
              <div class="menu_section">
                
                  
                  
                
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <b><?php echo $this->session->userdata("session_user_name")?></b>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <div class="profile_view" style="border-top:3px solid #00ACE6;width:100%;">
                                  <div class="col-sm-12" style="margin-top:10px;padding:0">
                                   
                                    <center>
                                      
                                      <?php if(!empty($res)){
				?>    
         <img src="<?php echo base_url()?>FileUpload/images/<?php echo $res->photos;?>"  class="img-circle profile_img" height="50" style="width:35%;margin:0">
              <?php } 
			  else {
				  ?>
         <img src="<?php echo base_url()?>/images/img.jpg"  class="img-circle profile_img" height="50" style="width:35%;margin:0">
                  <?php } ?>
                                      <h4 class="brief" align="center"><b><i><?php echo $this->session->userdata("session_user_name")?></i></b></h4>
                                    </center>	
                       

                                     <div class="col-sm-12" style="border-top: 1px solid #f5f5f5;border-bottom: 1px solid #f5f5f5;margin-top: 10px;margin-bottom: 10px;">
                                      <div class="col-sm-6">
                                       <h6><a href="<?php echo base_url()?>admin/loginadmin/logout" class="btn btn-default"> Log Out</a></h6>
                                      </div>
                                      <div class="col-sm-6 text-right">
                                        <h6><a href="<?php echo base_url()?>admin/loginadmin/profile_view" class="btn btn-default">Profile </a></h6>
                                      </div> 
                                     </div>

                                  </div>
                              
                              </div>
                   <?php /*?> <li>
                     
					 
                    </li>
                  
                    <li><a href="<?php echo base_url()?>admin/loginadmin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                      <li><a href="<?php echo base_url()?>admin/loginadmin/profile_view"><i class="fa fa-sign-out pull-right"></i> Profile </a></li><?php */?>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                      
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
