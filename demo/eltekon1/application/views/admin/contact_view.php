<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Contact </h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
         <?php 
          $role_id = $this->session->userdata('session_user_roleid');
          $chkcontacts = $this->dbqry->checkpermission($role_id,'Contacts');
                 if(!empty($chkcontacts)){
                 if($chkcontacts->has_add == 1){
                ?>
          <div class="input-group"  style="float:right;">
         
		
    <a title="Add New" class="btn btn-success btn-addon m-b-sm" href="<?php echo base_url();?>admin/Contact/Contact_add/"><i class="fa fa-plus"></i>Add New Contact</a> 

    
                    
          </div>
          <?php }
    } ?>
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
                    <h2>Contact List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <div class="dt-buttons btn-group">
                      
                         </div>
                    <table id="contactlist" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">Client Name</th>
                         <th class="column-title">Asset Owner</th>
                         <th class="column-title">Contract Number</th>
                         <th class="column-title">Order Number</th>
                         <th class="column-title">Location</th>
                         <th class="column-title">PCM</th>
                         <th class="column-title">Contract Authorized Signature</th>
                         <th class="column-title">Telephone</th>
                         <th class="no-sort">Status</th>
                         <?php  if(($chkcontacts->has_delete == 1) || ($chkcontacts->has_edit == 1)){ ?>
                         <th calss="no-sort">Action</th>
                         <?php } ?>
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                    $qry=$this->dbqry->select("ats_contactmaster");
                    foreach($qry as $res)
                    {
                    ?> 
                    <tr>
                      
                        <td><?php echo $res->client;?></td>
                        <td><?php echo $res->asset_owner;?></td>
                        <td><?php echo $res->contract_no;?></td>
                        <td><?php echo $res->order_no;?></td>
                        <td><?php echo $res->location;?></td>
                        <td><?php echo $res->pcm;?></td>
                        <td><?php echo $res->signatory;?></td>
                        <td><?php echo $res->telephone1;?></td>
                        <td><?php echo $res->status;?></td>
                        <?php  if(($chkcontacts->has_delete == 1) || ($chkcontacts->has_edit == 1)){ ?>
                         <td>
                    <!--  <a title ="view" href="<?php echo base_url();?>admin/contacts/single_view/"><small class="label label-danger"><i class="glyphicon glyphicon-eye-open"></i></small></a>&nbsp;&nbsp;-->
                    <?php 
                     if(!empty($chkcontacts)){
                      if($chkcontacts->has_edit == 1){
                    ?>
                    <a title ="edit" href="<?php echo base_url();?>admin/contact/contact_update/<?php echo $res->id?>"><small class="label label-warning"><i class="fa fa-edit"></i></small></a>&nbsp;&nbsp;
                    <?php } 
                    }?>
                    <?php 
                     if(!empty($chkcontacts)){
                      if($chkcontacts->has_delete == 1){
                    ?>

                      <a title ="delete" class="delete" href="<?php echo base_url();?>admin/contact/contact_delete/<?php echo $res->id?>"><small class="label label-danger"><i class="fa fa-remove"></i></small></a> 
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