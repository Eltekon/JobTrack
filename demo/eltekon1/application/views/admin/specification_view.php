<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Test Method</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <?php 
          $role_id = $this->session->userdata('session_user_roleid');
          $chktest = $this->dbqry->checkpermission($role_id,'Test');
                 if(!empty($chktest)){
                 if($chktest->has_add == 1){
                ?>

          <div class="input-group"  style="float:right;">
           <a title="Add New" class="btn btn-success btn-addon m-b-sm" href="<?php echo base_url();?>admin/specification/specification_add/"><i class="fa fa-plus"></i>Add New Test</a> 
          </div>
          <?php  } 
          }?>
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
                    <h2>Test Method</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                    <table id="specificationlist" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">Specification No. </th>
                         <th class="column-title">Title</th>
                         <th class="column-title">Issue No.</th>
                         <th class="column-title">Latest Version</th>
                         <th class="no-sort">Status</th>
                          <?php  if(($chktest->has_delete == 1) || ($chktest->has_edit == 1)){ ?>
                         <th calss="no-sort">Action</th>
                         <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                    $qry=$this->dbqry->select("ats_testmethod");
                    foreach($qry as $res)
                    {
                    ?> 
                    <tr>
                        <td><?php echo $res->spec_no;?></td>
                        <td><?php echo $res->tittle;?></td>
                        <td><?php echo $res->issue_no;?></td>
                        <td><?php echo $res->version;?></td>
                        <td><?php echo $res->status;?></td>
                        <?php  if(($chktest->has_delete == 1) || ($chktest->has_edit == 1)){ ?>
                         <td>
                    <!--  <a title ="view" href="<?php echo base_url();?>admin/contacts/single_view/"><small class="label label-danger"><i class="glyphicon glyphicon-eye-open"></i></small></a>&nbsp;&nbsp;-->
                      <?php 
                     if(!empty($chktest)){
                      if($chktest->has_edit == 1){
                    ?>
                    <a title ="edit" href="<?php echo base_url();?>admin/specification/specification_update/<?php echo $res->id?>"><small class="label label-warning"><i class="fa fa-edit"></i></small></a>&nbsp;&nbsp;
                    <?php } 
                    }?>
                    <?php 
                     if(!empty($chktest)){
                      if($chktest->has_delete == 1){
                    ?>
                      <a title ="delete" class="delete" href="<?php echo base_url();?>admin/specification/specification_delete/<?php echo $res->id?>"><small class="label label-danger"><i class="fa fa-remove"></i></small></a>
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