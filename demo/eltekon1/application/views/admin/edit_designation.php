


<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
           
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    
    
    
    
    <div class="row">
             
            <?php if($this->session->flashdata('msg') != "") { ?>
                    <div class="alert alert-info" role="alert"><?php echo $this->session->flashdata('msg');?></div>
                <?php } ?> 
                <?php if($this->session->flashdata('msg1') != "") { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('msg1');?></div>
                <?php } ?>   
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create/Edit Designation</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form id="demo-form2" name="form" method="post" class="form-horizontal form-label-left" data-parsley-validate="" novalidate="">
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                      Designation Name:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="designation" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text">
                        </div>
                        </div>
                        
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                      Designation Status:
                        <span class="required"></span>
                        </label>
                         <div class="col-md-6 col-sm-6 col-xs-9">
                                <select name ="status" class="form-control">
                                <option>Choose option</option>
                                <option>Active</option>
                                <option>Inactive</option>
                              
                                </select> 
                           
                         </div>
                          </div>
                                <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                        
                      
                        <button class="btn btn-success" type="submit">Submit</button>
                        <a class="btn btn-primary" type="button" href="<?php echo base_url('admin/user/user_view/');?>">Cancel</a>
                      
                  </form>
                        </div>
                          
                        </div>
                        
                             </div>
              </div>

              </div>
            </div>
    

    </div>
  </div>
</div>