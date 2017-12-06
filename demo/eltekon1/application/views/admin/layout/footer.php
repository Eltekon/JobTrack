  <!-- footer content -->
        <footer>
          <div class="pull-right">
          Eltekon JTT 2017
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>  
    <script src=="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <!-- <script src="<?php echo base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/pdfmake/build/vfs_fonts.js"></script> -->

 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/af-2.2.0/b-1.3.1/b-colvis-1.3.1/b-flash-1.3.1/b-html5-1.3.1/b-print-1.3.1/cr-1.3.3/fc-3.2.2/fh-3.1.2/kt-2.2.1/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.min.js"></script>


    <!-- Skycons -->
    <script src="<?php echo base_url();?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    

    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>


    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>

  
    <script>
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
	$('#myDatepicker3').datetimepicker({
        format: 'DD.MM.YYYY'
    });
	$('#myDatepicker4').datetimepicker({
        format: 'DD.MM.YYYY'
		
    });
	$('#myDatepicker5').datetimepicker({
        format: 'DD.MM.YYYY'
    });
	$('#myDatepicker6').datetimepicker({
        format: 'DD.MM.YYYY'
    });	
	
	/*$(document).ready(function() {
    $('#myDatepicker2').datetimepicker({
        onSelect: function(dateText, inst) {
            //Get today's date at midnight
            var today = new Date();
            today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());
            //Get the selected date (also at midnight)
            var selDate = Date.parse(dateText);

            if(selDate < today) {
                //If the selected date was before today, continue to show the datepicker
                $('#myDatepicker2').val('');
                $(inst).datepicker('show');
            }
        }
    });
});*/
	
	/*$('#jobcardlist').dataTable({
		
		"pageLength": 50,
	   
		dom: 'lBfrtip',
		"deferRender": true,
		
        buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4,5,6,7,8,9]}},
            { extend: 'print', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4,5,6,7,8,9]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm'   ,exportOptions: { columns: [0,1,2,3,4,5,6,7,8,9]},orientation: 'landscape'}
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	    
	  order: [[0, 'desc']],
	  columnDefs: [
           { targets: 'no-sort', orderable: false }
         ]

	});*/
	
	
var jlist = $('#jobcardlist').DataTable( {
	    "pageLength": 50,
		dom: 'lBfrtip',
		deferRender: true,
		 buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm' ,},
            { extend: 'print', className: 'btn btn-default btn-sm' ,},
            { extend: 'pdf', className: 'btn btn-default btn-sm',orientation: 'landscape',  pageSize: 'LEGAL',exportOptions: { columns: [0,1,2,3,4,5,6,7,8,9]}}
        ],
		"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  		order: [[0, 'desc']],
 		columnDefs: [
       		{ targets: 'no-sort', orderable: false }
     	],
        ajax: {
			"dataType": 'json',
            url: '<?php echo base_url() ?>admin/jobcard/jobcardviewjson',
            //dataSrc: 'data'
			
        },
		<?php   $role_id = $this->session->userdata('session_user_roleid');
       $chkjobs = $this->dbqry->checkpermission($role_id,'Jobcard'); ?>
	   <?php  if($chkjobs->has_delete == 1) { ?>
	   
	   
	 
        columns: [
            { data: 'cardno' },
            { data: 'addeddate' },
			{ data: 'orderno' },
            { data: 'client' },
			{ data: 'request' },
			{ data: 'briefdis' },
			{ data: 'completed' },
            { data: 'estdate' },
			{ data: 'jobcardstatus' },
			{ data: 'pendingdays' },
			{ data: 'Action' }
        ],
	  <?php }  else{
		  ?>
	  columns: [
            { data: 'cardno' },
            { data: 'addeddate' },
			{ data: 'orderno' },
            { data: 'client' },
			{ data: 'request' },
			{ data: 'briefdis' },
			{ data: 'completed' },
            { data: 'estdate' },
			{ data: 'jobcardstatus' },
			{ data: 'pendingdays' }
			
        ],
		<?php } ?>
    } );
	
	


    $('#contactlist').dataTable({
        "pageLength": 50,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm',exportOptions: { columns: [0,1,2,3,4,5,6,7,8]}},
            { extend: 'print', className: 'btn btn-default btn-sm',exportOptions: { columns: [0,1,2,3,4,5,6,7,8]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4,5,6,7,8]},orientation: 'landscape'}
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
      order: [[0, 'desc']],
      columnDefs: [
           { targets: 'no-sort', orderable: false}
         ]
      
	 
	  
	  
    });
    
	
	
	 $('#specificationlist').dataTable({
        "pageLength": 50,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4]}},
            { extend: 'print', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm'  ,exportOptions: { columns: [0,1,2,3,4]}}
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
      order: [[0, 'desc']],
      columnDefs: [
           { targets: 'no-sort', orderable: false }
         ]

    });
   
   
   
    $('#departmentlist').dataTable({
        "pageLength": 50,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm', exportOptions: { columns: [0,1]}},
            { extend: 'print', className: 'btn btn-default btn-sm', exportOptions: { columns: [0,1]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm' , exportOptions: { columns: [0,1]}}
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
      order: [[0, 'desc']],
      columnDefs: [
           { targets: 'no-sort', orderable: false }
         ]

    });
	$('#rolelist').dataTable({
        "pageLength": 50,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm',exportOptions: { columns: [0,1,2,3]}},
            { extend: 'print', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm'  ,exportOptions: { columns: [0,1,2,3]}}
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
      order: [[0, 'desc']],
      columnDefs: [
           { targets: 'no-sort', orderable: false }
         ]

    });
     
	 $('#userlist').dataTable({
        "pageLength": 50,
        dom: 'lBfrtip',
        buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm',exportOptions: { columns: [0,1,2,3,4,5]}},
            { extend: 'print', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4,5]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4,5]}}
        ],
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        
      order: [[0, 'desc']],
      columnDefs: [
           { targets: 'no-sort', orderable: false }
         ]

    });
    
	
$('#jobcard_pendinglist').DataTable( {
	    "pageLength": 50,
		dom: 'lBfrtip',
		deferRender: true,
		 buttons: [
            { extend: 'copy', className: 'btn btn-default btn-sm' },
            { extend: 'excel', className: 'btn btn-default btn-sm' ,exportOptions: { columns: [0,1,2,3,4,5,6,7,8]}},
            { extend: 'print', className: 'btn btn-default btn-sm' , exportOptions: { columns: [0,1,2,3,4,5,6,7,8]}},
            { extend: 'pdf', className: 'btn btn-default btn-sm',orientation: 'landscape', exportOptions: { columns: [0,1,2,3,4,5,6,7,8]}}
        ],
		"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
  		order: [[0, 'desc']],
 		columnDefs: [
       		{ targets: 'no-sort', orderable: false }
     	],
		
        ajax: {
			"dataType": 'json',
            url: '<?php echo base_url() ?>admin/jobcard/jobcard_pending',
            //dataSrc: 'data'
			
        },
		
        columns: [
            { data: 'cardno' },
            { data: 'addeddate' },
			{ data: 'orderno' },
            { data: 'client' },
			{ data: 'request' },
			{ data: 'briefdis' },
			{ data: 'completed' },
            { data: 'estdate' },
			{ data: 'pendingdays'},
			{ data: 'Action' }
        ],
		
    } );

      
	
   </script>
	
  

<script>

		var current_url = $(location).attr('href').split("/").splice(0, 8).join("/");
		var segments = current_url.split( '/' );
		var action = segments[6];
		var m=1;

        if(action == 'jobcard_editview'){
		     var tr_length = $('#item_cnt').val();
             if(tr_length == 0){
                var i = 1;
             }else{
                var i = parseInt(tr_length);  
             }
		}else{
			var tr_length = $('#id1').val();
            if(tr_length == 0){
                var i = 1;
             }else{
                var i = parseInt(tr_length) + 1;  

            
             }
		}

		$(document).on("click",".add_row",function(e) {

			e.preventDefault();
			
			var n = $("#description_table tr").length;
	
			<?php 
				$string = "";
				$qry = $this->dbqry->select("ats_testmethod");
				foreach($qry as $res)
				{
					$string.='<option value='.$res->id.'>'.$res->spec_no.'</option>';
				}
			?>
			
    		$("#description_table").append('<tr> <td><input type="text" name="item'+m+'" class="form-control"></td><td><input type="text" name="qty'+m+'" class="form-control"></td><td><input type="text" name="completed'+m+'" class="form-control"></td><td><input type="text" name="size'+m+'" class="form-control"></td><td><input type="text" name="ident'+m+'" class="form-control"></td><td><select class="form-control" name="cond'+m+'"><option selected disabled>-- Select --</option><option value="Acceptable">Acceptable</option><option value="Rejected">Rejected</option></select></td><td><select class="form-control" name="test'+m+'"><option selected disabled>-- Select --</option>+<?php echo $string;?>+</select></td><td><input type="text" name="report_no'+m+'" class="form-control"></td><td><input type="file" name="rpt'+m+'"></td> <td><input type="checkbox" name="record" class="check_mark"></td></tr>');
    	    //$('#id1').val(i);
    		//n++;
    		//i = i + 1; 

	
            if(action == 'jobcard_editview'){
				$('#item_cnt').val(i + 1);

				n++;
				i = i + 1;
			}else{
					
				$('#id1').val(i);
                
				n++;
				i = i + 1;

			}
			m++;
	});
	
	
	$(document).on("click",".remove_row",function() {
		
		var i = 0;
		$("input[name='record']:checked").each(function() {
			i++;
		});
		
		$(".description_table tr").find('input[name="record"]').each(function(){
			 $('.description_table tr').has('input[name="record"]:checked').remove();
		});
		
		$("#id1").val($("#id1").val()-i);
	});
	
	
$('#send_form').click(function(){
 
	
var data = $('#form1').serialize();
$.post('<?php echo base_url() ?>admin/jobcard/add_jobcard', data).done(function(  ) {
     window.location.href = "<?php echo base_url() ?>admin/jobcard/jobcard_list";
  });;



		
});
	
	
</script>
         
 
 
	<script>
    $(document).on("click",".delete",function(){
    //$(".delete").click(function() {
        var r = confirm("Are you Sure ? you want to Delete ?");
		
        if (r == true) {
            return true;
        } else {
            return false;
        }
    });
    </script>

<script>
$(document).on("change",".ats_contactmaster_name", function () {
 $(".all_data").load("<?php echo base_url(); ?>admin/jobcard/ats_contactmaster_by_data/"+$('.ats_contactmaster_name').val());
});

</script>

<script>
$(document).on("change",".dep",function(){
	
 $(".assigned").load("<?php echo base_url(); ?>admin/jobcard/assigned_to/"+$(".dep").val());
});

	    
	
					
	$(document).on("change",".action",function(){
						var status=$(this).val();
						var id=$(this).attr('id');
	
									 $.ajax({
										
										url: '<?php echo base_url() ?>admin/jobcard/jobcard_status',
										type: 'POST',
										data: {status:status,id:id}, //get model dan ukuran
										
									})
	 //window.location.href = '<?php echo base_url(); ?>admin/jobcard/jobcard_status?Status='+status+'&id='+id;
	});
</script>
     
      
	</body>
</html>
		
        
        
        
<script>
$(document).ready(function() {
	
	var pathname = window.location.pathname;
	var array = pathname.split('/');

	//$('.dt-buttons').append('<form action="<?php echo base_url();?>admin/'+array[3]+'/reports" style="display:inline" method="post"><button class="btn btn-default" type="submit" name="pdf" value="PDF" >PDF</button></form>');
    
});
</script>






   <script>
		  function printContent(e1){
				
				alert(e1);
			 var mywindow = window.open('', 'PRINT', 'height=400,width=600');

				mywindow.document.write('<html><head><title>' + document.title  + '</title>');
				mywindow.document.write('</head><body >');
				mywindow.document.write('<h1>' + document.title  + '</h1>');
				mywindow.document.write(document.getElementById(e1).innerHTML);
				mywindow.document.write('</body></html>');
			
				mywindow.document.close(); // necessary for IE >= 10
				mywindow.focus(); // necessary for IE >= 10*/
			
				mywindow.print();
				mywindow.close();

    return true;
			}
            
    	
     $("#print").click(function(){
			
				$.ajax({
				  method: "POST",
				  url: "<?php echo base_url() ?>admin/jobcard/jobcard_print/<?php echo $id ?>",
				})
				  .done(function( msg ) {
							
							$("#print_hidden").html(msg);
							
							var mywindow = window.open('', 'PRINT', 'height=400,width=600');
							mywindow.document.write(document.getElementById('print_hidden').innerHTML);
							mywindow.document.close();
							mywindow.focus();
							mywindow.print();
							mywindow.close();
				  });		
					 
	 });
	 
	         
         </script>
         <script>
					$(".perm_checkbox").click(function() {
						
					if (this.checked) {
            				var perm_check=1;
        			}
					else
					{
						var perm_check=0;
					}
					  var post_data = {
										'role_id': $('#role_id').val(),
										'value': $(this).val(),
										'perm_check': perm_check,
						 				'module': $(this).attr('module'),
						 
						
									
	                           };	
							   
									$.ajax({
										type: "POST",
										url: "<?php echo base_url(); ?>admin/usertype/permission/",
										data:post_data,
										
										success: function(message) {
											// return success message to the id='result' position
										   // $("#print_result").html(message); 
						  //$(this).parent().parent().removeClass('danger');
						  //location.reload(); 
										}
									}); 
					 
					});
</script>

               
 
	 
		    <script>
					 $(document).on("click",".status",function(){
					 if ($(this).is(':checked')) {

						   $(this).addClass('check_mark');
						   var id = $(this).attr('id');
						   
						   
						
					}
					else{
						var id = $(this).attr('id');
   
                       $(this).removeClass('check_mark');
						}
				
					});	
					
				 $(document).on("click",".authorized",function(){
                         if (confirm('Are you sure you want to authorised the selected jobcard?')) {
       
						  var post_data = "";
						  $(".check_mark:checked").each(function() {
						   post_data+=$(this).val()+",";
						  });
						//alert(post_data);
						
						
										$.ajax({
											type: "POST",
											url: "<?php echo base_url(); ?>admin/jobcard/jobcard_status/",
											data: {post_data:post_data},
											success: function() {
                      
      										window.location.reload();
                    }
                }); 
 
         }
});
					
					
													   
             </script>
             
<script type="text/javascript">


	
 $(document).on("click","#deletetest",function(){
	 
		
		var r = confirm("Are you Sure ? you want to Delete ?");
		
		if (r == true) {
			
			var post_data = "";
			var i = 0;
			$(".check_mark:checked").each(function() {
				post_data+=$(this).attr('attr-val')+",";
				i++;
			});
			
			$(".description_table tr").find('input[name="record"]').each(function(){
				$('.description_table tr').has('input[name="record"]:checked').remove();
			});
			
			$("#item_cnt").val($("#item_cnt").val()-i);
			
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>admin/jobcard/test_delete",
				data: {post_data:post_data},
				success: function() {
				}
			});
			
		} else {
			return false;
		}
				
				
				
		
		  
	
}); 


	
</script>