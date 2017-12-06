<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User List</h3>
      </div>

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
                    <h2>User  Priority List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                    <table id="userlist" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">Name</th>
                         <th class="column-title">User Name</th>
                         <th class="column-title">Designation</th>
                         <th class="column-title">UserGroup</th>
                       
                         <th class="column-title">Department</th>
           
                         <th class="column-title">Status</th> 
                         <th class="no-sort">Action</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                    $qry=$this->dbqry->select_user("ats_user");
                    foreach($qry as $res)
                    {
                    ?> 
                    <tr>
                        <td><?php echo $res->name;?></td>
                        <td><?php echo $res->username;?></td>
                        <td>
						
						<?php 
						
				         $getid =$this->dbqry->getrecordbyidrow("ats_designation","desig_id",$res->designation);
						 $designation=$getid->designation;
						 echo $designation;	
						 ?>
                        
                         </td>
                        <td><?php echo $res->usergroup;?></td>
                        <td><?php echo $res->department;?></td>
                        <td><?php echo $res->status;?></td>
                         <td>

                  <?php 
          $role_id = $this->session->userdata('session_user_roleid');
          $chkuser = $this->dbqry->checkpermission($role_id,'User');
                 if(!empty($chkuser)){
                 if($chkuser->has_delete == 1 || ($chkuser->has_edit == 1) ){
                ?> 
         <?php if(!empty($chkuser)){
                      if($chkuser->has_edit == 1){
                    ?>       
        <a title ="view" href="<?php echo base_url();?>admin/user/singleuser_view/<?php echo $res->id?>"><small class="label label-danger"><i class="glyphicon glyphicon-eye-open"></i></small></a> &nbsp;        
        <?php }} ?>
         <?php if(!empty($chkuser)){
                      if($chkuser->has_delete == 1){
                    ?>       
        <a title ="delete" name="delete" class="delete" href="<?php echo base_url();?>admin/user/user_delete/<?php echo $res->id?>"><small class="label label-warning"><i class="fa fa-remove"></i></small></a>&nbsp;
                    </td>
                <?php }} ?>     
                    </tr> 
                    <?php 
				 } } } ?>      
                   
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              
            </div>
    

    
  </div>
</div>