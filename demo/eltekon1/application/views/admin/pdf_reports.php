<style>

table { 
      width: 95%;
    padding-right: 5%;
  border-collapse: collapse; 
  font-size:14px;
}
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
			<div class="wht_cont clearfix" style="width:100%;">
<table id="datatable-buttons1" class="table table-striped table-bordered">
                      <thead>
                        <tr class="headings">
                         <th class="column-title">Card No.</th>
                         <th style="width:70px;" class="column-title">Date</th>
                         <th class="column-title">Order No.</th>
                         <th class="column-title">ATS client </th>
                         <th class="column-title">Request No.</th>
                         <th class="column-title">Description</th>
                         <th class="column-title">Actual Completion</th>
                         <th class="column-title">Estim Completion</th>
                         <th class="column-title">Pending days</th>
                         <th class="column-title">Status</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                    $qry=$this->dbqry->select("ats_jobcards");
                    foreach($qry as $res)
                    {
                    ?> 
                    <tr>
                        <td><?php echo $res->cardno;?></td>
                        <td><?php echo date('m-d-Y',strtotime($res->addeddate));?></td> 
                        <td><?php echo $res->orderno;?></td>
                        <td><?php echo $res->client;?></td>
                        <td><?php echo $res->request;?></td>
                        <td><?php echo $res->briefdis;?></td>
                        <td><?php echo $res->date1;?></td>
                        <td><?php echo $res->estdate?></td>
                        <td><?php echo $res->location;?></td>
                        <td><?php echo $res->jobcardstatus;?></td> 
                       
                         
                    </tr> 
                    <?php } ?>      
                   
                      </tbody>
                    </table>
</div></div></div></div></div>
