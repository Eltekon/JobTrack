
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!--<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css"/>-->
</head>

<?php $user= $this->dbqry->getrecordbyidrow("ats_jobcards","id",$id);

$jobcard= $user->cardno;     
?>
<style>
	/*.tbl-border {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 3px;
}

.{
	border-right:2px solid #000;
	}
*/
.btn-blue {
	background-color: #032f55;
	border: none;
	color: #fff;
	border-radius: 0;
	font-size: 18px;
	width:100px;
	height:30px
}
.btn-blue:hover {
	background-color: #032f55cc;
	border: none;
	color: #fff;
	border-radius: 0;
	font-size: 18px;
}
td{
	padding-left:15px !important;
	-webkit-print-color-adjust: exact;
	font-size:11px;
	}
	th{
		font-size:11px;
		}
	.width50{
		width:50%;
		}
		.width25{
			width:25%;
			}
			.brd_btm{
				border-bottom:none !important;
				}
				p{
					margin-top:5px;
					margin-bottom:5px;
					font-size:11px;
					}
					/*table,td{
						border:1px solid
						}*/
					
</style>

<body>
<!--<center>
 <button type="button" class="btn-blue">Print</button>
 <button type="button"  class="btn-blue" >Back</button> 
</center>-->

<table border="0" cellpadding="0" cellspacing="0" style="width:100%;clear:both;height:100px" >
<tr>
	<td>
    <center>
    	<img src="<?php echo base_url('images/doc.jpg');?>" width="550" height="100"/>
        </center>
    </td>
</tr>
</table>


<table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
<tr>
	<td><center><h4>SAMPLE RECEIVING INSPECTION REPORT (JOB CARD)</h4></center></td>
</tr>
</table>

<table class="brd_btm" border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-top:15px;margin-left:0%;margin-right:5%;">
	<tr>
        <td class="width25 brd_btm" ><center><p><b>JobCard No: </b> <?php echo $user->cardno?></p></center></td>
        <td class="width25 brd_btm"><center><p><b>Date: </b><?php echo $user->addeddate?></p></center></td>
        <td class="width25 brd_btm"><center><p><b>OrderNo: </b><?php echo $user->orderno?></p></center></td>
        <td class="width25 brd_btm"><center><p><b>Status: </b><?php echo $user->jobcardstatus?></p></center></td>
    </tr>
</table>
    
<table class="brd_btm" border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">

	<tr>
        <td class="width50 brd_btm"><p><b>Company(Asset owner):</b><?php echo $user->company?></p></td>
        <td class="width50 brd_btm"><p><b>Witness required:</b><?php echo $user->witness1?></p></td>
    </tr>
    
    <tr>
        <td class="width50 brd_btm"><p><b>ATS’S Client: </b> <?php echo $user->client?></p></td>
    <td class="width50 brd_btm"><p><b>Witness required:</b><?php echo $user->witness2?></p></td>
    </tr>
    
    <tr>
        <td class="width50 brd_btm"><p><b>ThirdParty/Consultant: </b><?php echo $user->consultant?></p></td>
<td class="width50 brd_btm"><p><b>Witness required:</b><?php echo $user->witness3?></p></td>
    </tr>
  
</table>    
<table class="brd_btm" border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
    <tr>
    <td class="brd_btm"><p><b>Contract Title / Contract no: </b><?php echo $user->contract?></p></td>
    </tr>
</table>
<table class="brd_btm" border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
    <tr>
    <td class="brd_btm" ><p><b>Location: </b> <?php echo $user->location?></p></td>
    </tr>
</table>

<table class="brd_btm" border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
    <tr>
    <td class="width5 brd_btm"><p><b>Request No: </b><?php echo $user->request?></p></td>
    <td class="width50 brd_btm"><p><b>Any other documents:</b><?php echo $user->document?></p></td>
    </tr>
</table>
<table border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
    <tr>
    <td ><p><b>Breif Test Description:</b><?php echo $user->briefdis?></p></td>
    </tr>
 
</table>
    
    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%;border-left:1px solid;border-right:1px solid">
	<tr>
    <td style="background-color:#999"><center><p><b>Test Descriptions</b> </p></center></td>
    </tr>
    </table>
    
    
   <table border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
  <tr>
    
    <th rowspan="2">Item Description/Required Test</th>
    <th colspan="2">Qty.</th>
    <th colspan="3">Test sample details</th>
    <th rowspan="2">Specification</th>
    <th rowspan="2">report no</th>
  </tr>
  <tr>
    <td>Requested</td>
    <td>Completed</td>
    <td>Size</td>
    <td>Ident</td>
    <td>Sample Conditions</td>
  </tr>
   <?php   $test1= $this->dbqry->getrecordbyid("test","jobcard",$jobcard); ?>
    <?php foreach($test1 as $test){ 
      ?>                  
  <tr>
    
    <td><?php echo $test->item;?></td>
    <td><?php echo $test->qty;?></td>
    <td> </td>
    <td><?php echo $test->size;?></td>
    <td><?php echo $test->ident;?></td>
    <td><?php echo $test->cond;?></td>
    <td><?php echo $test->method;?></td>
    <td><?php echo $test->report;?></td>
    <?php 
		}
	
	?>
  </tr>

</table>
   
    
    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%;border-left:1px solid;border-right:1px solid">
	<tr>
    <td style="background-color:#999;"><center><p><b>Requester Details & Retention Period</b> </p></center></td>
    </tr>
    </table>
    
    <table border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
	<tr>
        <td class="width50 brd_btm"><p><b>Requested By:</b> <?php echo $user->requestedby?> </p></td>
        <td class="width50 brd_btm"><p><b>Created By(ats employe):</b><?php echo $user->createdby?></p></td>
    </tr>
    <tr>
        <td class="width50 brd_btm"><p><b>Designation:</b><?php echo $user->designation?></p></td>
        <td class="width50 brd_btm"><p><b>Authorized By(approval ):</b><?php echo $user->certifiedby?></p></td>
    </tr>
    <tr>
        <td class="width50 brd_btm"><p><b>Company:<?php echo $user->company1?></p></td>
        <td class="width50 brd_btm"><p><b>Department:</b><?php echo $user->department?></p></td>
    </tr>
    <tr>
        <td class="width50 brd_btm"><p><b>Contact No:</b><?php echo $user->contact?></p></td>
        <td class="width50 brd_btm"><p><b>Assigned To:</b><?php echo $user->assigned?></p></td>
    </tr>
    <tr>
        <td class="width50 brd_btm"><p><b>Retention period of Sample(Tested & remaining):</b> None unless
otherwise specified by the custom </p></td>
        <td class="width50"><p><b>Estimated completion on:</b><?php echo $user->resample?></p></td>
    </tr>
    <tr>
        <td class="width50"><p><b>Report retention period:</b><?php echo $user->reperiod?></p></td>
        <td class="width50"><p><b>Actual Completion:</b><?php echo $user->completed?></p></td>
    </tr>
    <tr >
        <td class="" colspan="2"><p><b>Remarks:</b><?php echo $user->remarks?></p></td>
        
    </tr>
    </table>
    
    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%;border-left:1px solid;border-right:1px solid">
	<tr>
    <td style="background-color:#999"><center><p><b>For Accounts Use Only</b> </p></center></td>
    </tr>
    </table>
    
    <table border="1" cellpadding="0" cellspacing="0" style="width:100%;margin-left:0%;margin-right:5%">
	<tr>
        <td><p><b>Mode Of Payment: </b> <?php echo $user->payment?> </p></td>
        <td><p><b>Invoice No:</b> <?php echo $user->invoice?></p></td>
        <td class="brd_btm" colspan="2" ><p><b>Receipt No:</b> <?php echo $user->receiptno?></p></td>
    </tr>
    <tr>
        <td class=""><p><b>Accounts: </b> <?php echo $user->account?>  </p></td>
        <td class="brd_btm" colspan="3" style=""><p><b>Approved By:</b> <?php echo $user->approved?></p></td>
    </tr>
    <tr style="width:100%">
        <td class="brd_btm" colspan="4" ><p><b>Comments:</b><?php echo $user->comments?> </p></td>
    </tr>
    
    </table>
    <br />
    
</body>
</html>
