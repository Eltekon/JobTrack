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
                    <h2>Pending JobCard List</h2>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-success authorized pull-right" type="button" id="auth">Click Here To Authorized Jobcard</button>
                    <ul class="nav navbar-right panel_toolbox">
                    
                      
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="jobcard_pendinglist" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">Cardno</th>
                         <th class="column-title">Date</th>
                         <th class="column-title">Order No.</th>
                         <th class="column-title">ATS Client</th>
                         <th class="column-title">Request</th>
                         <th class="column-title">Description</th>
                        <th class="column-title">Actual Completion</th>
                        <th class="column-title">Estim Completion</th>
                        <th class="column-title">Pending Days</th>
                        <th class="column-title">Select For Authorize</th>
                        </tr>
                      </thead>


                     
                    </table>
                  </div>
                </div>
              </div>

              
            </div>
    

    
  </div>
</div>