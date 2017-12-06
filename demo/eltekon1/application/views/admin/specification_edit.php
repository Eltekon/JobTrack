

<?php $update =$this->dbqry->getrecordbyidrow("ats_testmethod","id",$id); ?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                    <span class="input-group-btn">
                  
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      
                        <ul class="dropdown-menu" role="menu">
                          <li>
                          </li>
                          <li>
                          </li>
                        </ul>
                      </li>
                      <li
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <form id="demo-form2" name="form" method="post" class="form-horizontal form-label-left" data-parsley-validate="" novalidate="" >
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        Specification Number :
                        <span class="required"></span>
                        </label>
                    
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="spec_no" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text" value="<?php echo $update->spec_no;?>">
                        </div>
                       
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-9" for="first-name">
                        Title:
                        <span class="required"></span>
                        </label>
                        <div>
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="tittle" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text" value="<?php echo $update->tittle;?>">
                        </div>
                        </div>
                       
                          </div> 
                           <div class="form-group">
                          
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        Issue Number:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="issue_no" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text" value="<?php echo $update->issue_no;?>">
                        </div>
                        
                        </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        Latest version:
                        <span class="required"></span>
                        </label>
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <input  name="version" id="first-name" class="form-control col-md-7 col-xs-9" required="required" type="text" value="<?php echo $update->version;?>">
                        </div>
                       
                        </div>
                         <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-9">Status :</label>
                                <div class="col-md-6 col-sm-6 col-xs-9">
                                <select name ="eStatus" class="form-control">
                 <option selected="" disabled="">-- Select --</option>
                 
                 <option value="Active" <?php if($update->status == "Active") { echo 'selected';}?>> Active</option>
                 <option value="inactive" <?php if($update->status == "inactive") { echo 'selected';}?>> inactive</option>
                              
                                </select>
                                </div>
                                </div> 
                             </div>
                              <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                        
                       
                        <button class="btn btn-success" type="submit">Submit</button>
                         <a class="btn btn-primary" type="button" href="<?php echo base_url('admin/specification/specification_view/');?>">Cancel</a>
                      
                    </from>
                        </div>
                        </div>
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
               
                      
                            </div>
                            <div class="right">
                            
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                             
                            <div class="col-md-4 text-right">
                            
                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->









        <!-- footer content -->
      <!--  <footer>
          <div class="pull-right">
         Eltekon JTT <a href="https://colorlib.com">2017</a>
          </div>
          <div class="clearfix"></div>
        </footer>-->
        <!-- /footer content -->
      </div>
    </div>

    <!-- compose -->
    <!--<div class="compose col-md-6 col-xs-12">
      <div class="compose-header">
        New Message
        <button type="button" class="close compose-close">
          <span>×</span>
        </button>
      </div>

      <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a data-edit="fontSize 5">
                  <p style="font-size:17px">Huge</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 3">
                  <p style="font-size:14px">Normal</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 1">
                  <p style="font-size:11px">Small</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
              <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
              <button class="btn" type="button">Add</button>
            </div>
            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
          </div>
        </div>

        <div id="editor" class="editor-wrapper"></div>
      </div>-->