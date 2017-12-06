<style>
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/ Zebra striping /
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
.title {
 font-size: 20px;
 color:#00F;
 text-align: center;
 text-transform: uppercase;
}
</style>
<div class="pad-15">

	<div class="clear"></div>		
    <div class="row">
		<div class="col-lg-12">	
			<div class="wht_cont clearfix pad-20">
<table id="datatable-buttons1" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">user Id</th>
                         <th class="column-title">Name</th>
                         <th class="column-title">User Name</th>
                         <th class="column-title">Deignation</th>
                         <th class="column-title">Department</th>
                         
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                    $qry=$this->dbqry->select("ats_user");
                    foreach($qry as $res)
                    {
                    ?> 
                    <tr>
                        <td><?php echo $res->id;?></td>
                        <td><?php echo $res->name?></td>
                        <td><?php echo $res->username?></td>
                        <td><?php echo $res->designation;?></td>
                        <td><?php echo $res->department;?></td>
                       
                    </tr> 
                    <?php } ?>      
                   
                      </tbody>
                    </table>
</div></div></div></div></div>
