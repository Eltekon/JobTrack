<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eltekon JTT! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url() ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <?php if($this->session->flashdata('msg') != "") { ?>
  
           
                                  <div class=" alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h6><i class="icon fa fa-warning"></i> Alert!</h6>
                                    <?php echo $this->session->flashdata('msg');?>
                                  </div>
                                <?php } ?>  
 
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             <form action="" id="theForm" name="theForm" method="POST" role="form" enctype="multipart/form-data">
              <h1>Sign In</h1>
              <div>
                <input type="text" name ="username"class="form-control" placeholder="Username"/>
                    <?php echo form_error('username'); ?>
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password"/>
                  <?php echo form_error('password'); ?>
              </div>
              <div>
                 <input type="submit" name="Submit2" class="btn btn-default submit" value="Login"/>
                <a class="reset_pass" href="<?php echo base_url();?>admin/loginadmin/forget_password">Forgot password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

               
              </div>
            </form >
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
           <form action="" id="theForm" name="theForm" method="POST" role="form" enctype="multipart/form-data">
              <h1>Create Account</h1>
              <div>
                <input type="text" name="name" class="form-control" placeholder="Name" value=""  />
                     <?php echo form_error('name'); ?>
              </div>
              <div>
                <input type="text" name="username" class="form-control" placeholder="User Name" value="" />
                   <?php echo form_error('username'); ?>
              </div> <br/>
             
             <div>
                <input type="email" name="email" class="form-control" placeholder="Email" value="" />
                   <?php echo form_error('email'); ?>
              </div> 
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" value="" />
                    <?php echo form_error('password'); ?>
              </div>
              <div>
                <input type="password" name="Password2" class="form-control" placeholder="Confirm Password" value="" >    
                 <?php echo form_error('Password2'); ?>
              </div>
               <div>
                  <select name="gender" class="form-control" placeholder="Gender">
                     <option value=""selected >Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                      <?php echo form_error('gender'); ?>
        </div> <br>
      <select class="form-control" name="designation" >
                           <option value="">-- Select --</option>
                           <?php
										$qry = $this->dbqry->select("ats_designation");
										foreach($qry as $res)
										{
									?>
                                    <option value="<?php echo $res->desig_id ?>"><?php echo $res->designation?></option>
                                    <?php } ?>
                          </select>
                      <?php echo form_error('designation'); ?>
              <div> <br>
               <input type="submit" name="Submit1" class="btn btn-default submit" value="Submit"/>
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="<?php echo base_url()?>admin/loginadmin/login" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

               
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

