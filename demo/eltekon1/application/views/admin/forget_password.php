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

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
             <form method="post">
        
        <?php if($this->session->flashdata('msg') != "") { ?>
  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                <?php echo $this->session->flashdata('msg');?>
              </div>
       <?php } ?>   
       <?php if($this->session->flashdata('msgsuccess') != "") { ?>
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                <?php echo $this->session->flashdata('msgsuccess');?>
              </div>  
   <?php } ?> 
      
        <div class="form-group">
          <div class="input-group">
            
            <h3>Reset Your Password</h3>
          </div>
        </div>
       
       
        <div class="form-group">
          <div class="input-group">
           <label>Please provide the email address that you used when you signed up for your account.

We will send you an email that will allow you to reset your password.</label>
          </div>
          </div>
          
        
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span><input class="form-control" name="email" placeholder="Your Email" type="text">
            
          </div><?php echo form_error('email');?>
          </div>
         
        <button type="submit" class="btn btn-default submit">Submit</button>
        <p>
          <a  href="<?php echo base_url();?>admin/loginadmin/login">Back to Login</a>
        </p>
      </form>
          </section>
        </div>