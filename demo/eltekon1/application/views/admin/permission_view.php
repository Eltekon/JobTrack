<div class="right_col" role="main">
         
            <div class="page-title">
              <div class="title_left">
                  <h2>Permissions</h2>
              </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <!-- main content-->

                    <input type="hidden" id="role_id" value="<?php echo $role_id;?>"/>  


                     <div class="col-md-12">

                     <!-- jobcard permissions -->
                     <?php
                     $check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name',"'Jobcard'". ' and  role_id='.$role_id.'');
                      ?>  
                  <div class="col-md-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">JobCard</h3>
                    </div>
                  <div class="checkbox">
                    <label> 
                    <?php 
                         if($check_module){
                            if($check_module->has_add == 1)
                            {
                              $check='checked="checked"';
                            }
                            else
                            {
                              $check="";
                            }
                         }
                         else {
                            $check="";
                              }
                        ?>
                 <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_add" module="Jobcard" > Insert 
                              </label><br />  
                               <label> 
                               
                               <?php
                           if($check_module){
                            if($check_module->has_view == 1)
                            {
                              $check='checked="checked"';
                            }
                            else
                            {
                              $check="";
                            }
                           }
                          else {
                                $check="";
                                  }
                            ?>
              
                      <input type="checkbox" <?php echo $check;?> class="perm_checkbox"  value="has_view" module="Jobcard" > View 
                    </label><br /> 
                    <label> 
                              <?php
                               if($check_module){
                                 
                                 if($check_module->has_edit == 1)
                                  {
                                    $check='checked="checked"';
                                  }
                                  else
                                  {
                                    $check="";
                                  }
                               }
                                 else {
                                  $check="";
                                    }       
                          ?>
               
                      <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_edit" module="Jobcard" > Update 
                    </label><br /> 
                    <label> 
                              <?php
                        if($check_module){    
                        if($check_module->has_delete == 1)
                          {
                            $check='checked="checked"';
                          }
                          else
                          {
                            $check="";
                          }
                        }
                         else
                          {
                            $check="";
                          }  
                          ?> 
                          <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="pending_list" module="Jobcard" >Pending List
                              </label><br />  
                               <label> 
                               
                               <?php
                           if($check_module){
                            if($check_module->pending_list == 1)
                            {
                              $check='checked="checked"';
                            }
                            else
                            {
                              $check="";
                            }
                           }
                          else {
                                $check="";
                                  }
                            ?>
                 <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="has_delete" module="Jobcard" > Delete 
                              </label><br />  
                               <label> 
                              <?php
                              if($check_module){    
                              if($check_module->Test_edit== 1)
                                {
                                  $check='checked="checked"';
                                }
                                else
                                {
                                  $check="";
                                }
                              }
                               else
                                {
                                  $check="";
                                }  
                                ?>     
                                  
                            <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="Test_edit" module="Jobcard" >Test Description Edit 
                              </label><br />
                          </div>
                          </div>
                          <!-- jobcard permissions -->


                          <!-- contact permissions -->
                          <div class="col-md-3">
                           <div class="box-header with-border">
                          <h3 class="box-title">Contacts</h3>
                    </div>
                          <?php
       $check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name',"'Contacts'". ' and  role_id='.$role_id.'');
     
        ?>  
                  <div class="checkbox">
                  
                              <label> 
                              <?php
               if($check_module){   
                if($check_module->has_add == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
               }
                 else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_add" module="Contacts" > Insert 
                              </label><br />  
                               <label> 
                               
                               <?php
                 
              if($check_module){      
                if($check_module->has_view == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
              }
              else
                {
                  $check="";
                } 
                ?>
              
                                <input type="checkbox" <?php echo $check;?> class="perm_checkbox"  value="has_view" module="Contacts" > View 
                              </label><br /> 
                              <label> 
                              <?php
             if($check_module){     
               if($check_module->has_edit == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
              }
            else
                {
                  $check="";
                }
                ?>
               
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_edit" module="Contacts"> Update 
                              </label><br /> 
                              <label> 
                              <?php
             if($check_module){     
              if($check_module->has_delete == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
           }
           else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="has_delete" module="Contacts"> Delete 
                              </label><br />  
                            
                              
                              
                          </div>
                          </div>
                          <!-- contact permissions -->


                          <!-- test permissions -->
                           <div class="col-md-3">
                  <div class="box-header with-border">
                  
                          <h3 class="box-title">Test</h3>
             </div>
                    <?php
       $check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name',"'Test'". ' and  role_id='.$role_id.'');
     
        ?>        
                  <div class="checkbox">
                              <label> 
                              <?php
            if($check_module){  
                if($check_module->has_add == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
               else
                {
                  $check="";
                }  
                ?>
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_add" module="Test" > Insert 
                              </label><br />  
                               <label> 
                               
                               <?php
           if($check_module){ 
                if($check_module->has_view == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
           }
           else
                {
                  $check="";
                }
                ?>
              
                                <input type="checkbox" <?php echo $check;?> class="perm_checkbox"  value="has_view" module="Test"> View 
                              </label><br /> 
                              <label> 
                              <?php
            if($check_module){      
               if($check_module->has_edit == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
              else
                {
                  $check="";
                }
                ?>
               
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_edit" module="Test"> Update 
                              </label><br /> 
                              <label> 
                              <?php
           if($check_module){      
                
              if($check_module->has_delete == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
           }
           else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="has_delete" module="Test"> Delete 
                              </label><br />  
                            
                              
                          </div>
                  
                                </div> 
                          <!-- test permissions -->

                          </div>

                          <div class="col-md-12">

                          <!-- user permissions -->

                          <div class="col-md-3">
                  <div class="box-header with-border">
                          <h3 class="box-title">User</h3>
                    </div>
                            <?php
       $check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name',"'User'". ' and  role_id='.$role_id.'');
     
        ?>        
                  <div class="checkbox">
                              <label> 
                              <?php
               if($check_module){ 
                if($check_module->has_add == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
               }
                else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_add" module="User"> Insert 
                              </label><br />  
                               <label> 
                               
                               <?php
                 
              if($check_module){    
                if($check_module->has_view == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
              }
              
                else
                {
                  $check="";
                }
                ?>
              
                                <input type="checkbox" <?php echo $check;?> class="perm_checkbox"  value="has_view" module="User"> View 
                              </label><br /> 
                              <label> 
                              <?php
            if($check_module){      
               if($check_module->has_edit == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
             else
                {
                  $check="";
                }
                
                ?>
               
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_edit" module="User"> Update 
                              </label><br /> 
                              <label> 
                              <?php
                
          if($check_module){          
              if($check_module->has_delete == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
          }
           else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="has_delete" module="User"> Delete 
                              </label><br />  
                               
                          </div>
                  
                                </div> 

                          <!-- user permissions -->
                          <!-- dept permissions -->
                           <div class="col-md-3">
                  <div class="box-header with-border">
                          <h3 class="box-title">Department</h3>
            
                          
                          <!-- /.box-tools -->
                        </div>
                       <?php
       $check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name',"'Department'". ' and  role_id='.$role_id.'');
     
        ?>        
                  <div class="checkbox">
                              <label> 
                              <?php
                
          if($check_module){        
                if($check_module->has_add == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
          }
           else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_add" module="Department"> Insert 
                              </label><br />  
                               <label> 
                               
                               <?php
            if($check_module){         
                if($check_module->has_view == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
             else
                {
                  $check="";
                }   
                ?>
              
                                <input type="checkbox" <?php echo $check;?> class="perm_checkbox"  value="has_view"  module="Department"> View 
                              </label><br /> 
                              <label> 
                              <?php
          if($check_module){         
    
               if($check_module->has_edit == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
          }
           else
                {
                  $check="";
                }
                ?>
               
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_edit"  module="Department"> Update 
                              </label><br /> 
                              <label> 
                              <?php
            if($check_module){    
              if($check_module->has_delete == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
            else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="has_delete"  module="Department"> Delete 
                              </label><br />  
                               
                              
                          </div>

                         
                  
                                </div>
                          <!-- dept permissions -->

                          <!-- role permissions -->

                          <div class="col-md-3">

                                <div class="box-header with-border">
                          <h3 class="box-title">User Role</h3>
                        </div>
                        <?php
       $check_module= $this->dbqry->getrecordbyidrow('ats_permissions','module_name',"'UserRole'". ' and  role_id='.$role_id.'');
     
        ?>        
                  <div class="checkbox">
                              <label> 
                              <?php
                
          if($check_module){        
                if($check_module->has_add == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
          }
           else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_add" module="UserRole"> Insert 
                              </label><br />  
                               <label> 
                               
                               <?php
            if($check_module){         
                if($check_module->has_view == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
             else
                {
                  $check="";
                }   
                ?>
              
                                <input type="checkbox" <?php echo $check;?> class="perm_checkbox"  value="has_view"  module="UserRole"> View 
                              </label><br /> 
                              <label> 
                              <?php
          if($check_module){         
    
               if($check_module->has_edit == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
          }
           else
                {
                  $check="";
                }
                ?>
               
                                <input type="checkbox" <?php echo $check;?>  class="perm_checkbox"  value="has_edit"  module="UserRole"> Update 
                              </label><br /> 
                              <label> 
                              <?php
            if($check_module){    
              if($check_module->has_delete == 1)
                {
                  $check='checked="checked"';
                }
                else
                {
                  $check="";
                }
            }
            else
                {
                  $check="";
                }
                ?>
                                <input type="checkbox" <?php  echo $check;?>  class="perm_checkbox"  value="has_delete"  module="UserRole"> Delete 
                              </label><br />  
                               
                              
                             
                        </div>
                          
                          
                          
                          </div>

                          <!-- role permissions -->

                          </div>


                    <!-- end main content-->
                  </div>
                </div>
              </div>
          </div>    


</div>