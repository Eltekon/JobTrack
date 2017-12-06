<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>User Role</h3>
      </div>
  
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
         <?php 
          $role_id = $this->session->userdata('session_user_roleid');
          $chkrole = $this->dbqry->checkpermission($role_id,'UserRole');
                 if(!empty($chkrole)){
                 if($chkrole->has_add == 1){
                ?>
          <div class="input-group"  style="float:right;">
           <a title="Add New" class="btn btn-success btn-addon m-b-sm" href="<?php echo base_url();?>admin/usertype/usertype_add/"><i class="fa fa-plus"></i>Add New Role</a> 
          </div>
           <?php } 
          }?>
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
                    <h2>Role</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="rolelist" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">User Type </th>
                         <th class="column-title">Added Date</th>
                         <th class="column-title">Updated Date</th>
                         <th class="no-sort">Status</th>
                          <?php  if(($chkrole->has_delete == 1) || ($chkrole->has_edit == 1)){ ?>
                          <th class= "no-sort">Action</th>
                          <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
							$qry=$this->dbqry->select("ats_user_role");
							foreach($qry as $res)
							{
						?> 
						<tr>
                           <td><a href="<?php echo base_url();?>admin/usertype/permission_view/<?php echo $res->iUserRoleId;?>"><?php echo $res->vRoleName;?></a></td>
                            <td><?php echo  date('d-M-Y',strtotime($res->dAddedAt));?></td>
                             <td><?php 
										if(($res->dUpdatedAt!= '0000-00-00 00:00:00')){
											echo date('d-M-Y',strtotime($res->dUpdatedAt));
										}else{
											echo '---- -- --';
										}
										?></td> 
							<td><?php echo $res->eStatus;?></td>
               <?php  if(($chkrole->has_delete == 1) || ($chkrole->has_edit == 1)){ ?>
							<td>
              <?php 
                     if(!empty($chkrole)){
                      if($chkrole->has_edit == 1){
                    ?>
						 		<a title ="edit" href="<?php echo base_url();?>admin/usertype/usertype_update/<?php echo $res->iUserRoleId?>"><small class="label label-warning"><i class="fa fa-edit"></i></small></a>&nbsp;&nbsp;
                <?php } 
                    } 
                     if(!empty($chkrole)){
                      if($chkrole->has_delete == 1){
                    ?>
						  		<a title ="delete" class="delete" href="<?php echo base_url();?>admin/usertype/usertype_delete/<?php echo $res->iUserRoleId?>"><small class="label label-danger"><i class="fa fa-remove"></i></small></a>
                  <?php } 
                    }?>  
						</td>
						  <?php } ?>
						</tr> 
						<?php } ?>      
                   
                      </tbody>
                    </table>
                     
                  </div>
                </div>
              </div>

              
            </div>
    

    
  </div>
</div>