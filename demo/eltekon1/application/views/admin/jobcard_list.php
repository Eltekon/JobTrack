


<?php error_reporting(0); ?>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>ATS</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    
    <style>
    	.dt-button{
			margin-right:0;
			}
			.dt-button.buttons-copy.buttons-html5.btn.btn-default.btn-sm {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
}
.dt-button.buttons-excel.buttons-html5.btn.btn-default.btn-sm {
    border-radius: 0;
    margin-left: -1px;
}
.dt-button.buttons-print.btn.btn-default.btn-sm {
    border-radius: 0;
    margin-left: -1px;
}
.dt-button.buttons-pdf.buttons-html5.btn.btn-default.btn-sm {
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    margin-left: -1px;
}
.dataTables_filter {
    margin-top: -36px;
}

.paginate_button.current{
	background-color:#2a3f54 !important;
	color:#ddd;
	}

    </style>
    
                          <?php 
                             $role_id = $this->session->userdata('session_user_roleid');
                             $chkjobs = $this->dbqry->checkpermission($role_id,'Jobcard');
                        ?>
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
                    <h2>JobCard List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
               
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    
                    <div style="overflow-x:auto">
                      
 
                    <table id="jobcardlist" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <?php  if(($chkjobs->has_delete == 1)){ ?>
                         <th class="column-title">Card No</th>
                         <th class="column-title">Date</th>
                         <th class="column-title">Order No.</th>
                         <th class="column-title">ATS client</th>
                         <th class="column-title">Request No.</th>
                         <th class="column-title">Description</th>
                         <th class="column-title">Actual Completion</th>
                         <th class="column-title">Estim Completion</th>
                         <th class="no-sort">Status</th>
                         <th class="no-sort">Pending Days</th>
                         <th calss="no-sort">Action</th>
                         <?php } 
						 else{
							 ?> 
						 <th class="column-title">Card No</th>
                         <th class="column-title">Date</th>
                         <th class="column-title">Order No.</th>
                         <th class="column-title">ATS client</th>
                         <th class="column-title">Request No.</th>
                         <th class="column-title">Description</th>
                         <th class="column-title">Actual Completion</th>
                         <th class="column-title">Estim Completion</th>
                         <th class="no-sort">Status</th>
                         <th class="no-sort">Pending Days</th>
							<?php }
						 ?>
                        </tr>
                      </thead>


                      <tbody>
                         
                   
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
    

	
	
    
  </div>
  
</div>

