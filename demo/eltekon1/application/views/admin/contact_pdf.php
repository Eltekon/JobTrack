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
                        
                         <th class="column-title">Client Name</th>
                         <th class="column-title">Asset Owner</th>
                         <th class="column-title">Order No</th>
                         <th class="column-title">Location</th>
                         <th class="column-title">PMC(TPI/Consultant)</th>
                         <th class="column-title">Contract Authosrized Sign</th>
                         <th class="column-title">Telephone</th>
                         <th class="column-title">Status</th>
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
                         
                    </tr> 
                    <?php } ?>      
                   
                      </tbody>
                    </table>
</div></div></div></div></div>
