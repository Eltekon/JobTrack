

<?php
	  $row = $this->dbqry->getrecordbyidrow("ats_user","id",$id);?> 
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
                    <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('msg');?></div>
                <?php } ?> 
                <?php if($this->session->flashdata('msg1') != "") { ?>
                    <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('msg1');?></div>
                <?php } ?>   
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Change User Priority</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form id="demo-form2" name="form" method="post" class="form-horizontal form-label-left" data-parsley-validate="" novalidate=""  action="<?php echo base_url();?>admin/User/change_priority/<?php echo $row->id;?>">
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        User id :
                        <span class="required"></span>
                        </label>
                    
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="iSpecNo" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text" Placeholder="<?php echo $row->id;?>">
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" for="first-name">
                       Name:
                        <span class="required"></span>
                        </label>
                        <div>
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="vTitle" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text"  Placeholder="<?php echo $row->name;?>">
                        </div>
                        </div>
                          </div> 
                           <div class="form-group">
                          
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                      User Name:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="iIssueNo" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text" Placeholder="<?php echo $row->username;?>">
                        </div>
                        </div>
                         
                         <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-9">Chnage Priority :</label>
                                <div class="col-md-6 col-sm-6 col-xs-9">
                                <select name ="usergroup" class="form-control">
                                <option value="">-- Select --</option>
                           <?php
										$qry = $this->dbqry->select("ats_user_role");
										foreach($qry as $res)
										{
									?>
                                   <!-- <option value="<?php //echo $res->iUserRoleId?>"><?php //echo $res->vRoleName?></option>-->
                                   <option value="<?php echo $res->iUserRoleId;?>" <?php if($row->usergroup == $res->vRoleName) { echo 'selected';}?>> <?php echo $res->vRoleName?></option>
                                    <?php } ?>
                                 
                                </select>
                                </div>
                                </div> 
                                <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      
                        <button class="btn btn-success" type="submit">Submit</button>
                        <button class="btn btn-primary" type="button">Cancel</button>
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