<!DOCTYPE html>
<html>
  <head>
    <title>
      Eltekon | Reset Password
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo base_url();?>assets/stylesheets/se7en-font.css" media="all" rel="stylesheet" type="text/css" /><link href="<?php echo base_url();?>assets/stylesheets/style.css" media="all" rel="stylesheet" type="text/css" /><script src="<?php echo base_url();?>assets/javascripts/jquery-1.10.2.min.js" type="text/javascript"></script><script src="<?php echo base_url();?>assets/javascripts/jquery-ui.js" type="text/javascript"></script><script src="<?php echo base_url();?>assets/javascripts/bootstrap.min.js" type="text/javascript"></script><script src="<?php echo base_url();?>assets/javascripts/modernizr.custom.js" type="text/javascript"></script><script src="<?php echo base_url();?>assets/javascripts/main.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body class="login2">
    <!-- Login Screen -->
    <div class="login-wrapper">
   
      <a href="#"><img width="100" height="30" src="<?php echo base_url();?>assets/images/logo-login@2x.png" /></a>
      <form method="post">
        
        <?php if($this->session->flashdata('msg') != "") { ?>
  <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                <?php echo $this->session->flashdata('msg');?>
              </div>
       <?php } ?>   
        
        
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" name="password" placeholder="Enter New Password" type="password">
            
          </div><?php echo form_error('password');?>
        </div>
        
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-check"></i></span><input class="form-control" name="comfirm_password" placeholder="Comfirm Password" type="password">
            
          </div><?php echo form_error('comfirm_password');?>
        </div>
        
       
       
        <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
        <p>
          <a  href="<?php echo base_url();?>loginadmin/login">go to logIn</a>
          </p>
          
      </form>
      
    </div>
    <!-- End Login Screen -->
  </body>
</html>



