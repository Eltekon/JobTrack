<?php


	$conn = mysql_connect("localhost", "root", "Activous@123#");
	$con = mysql_select_db("eltekon", $conn);

if($con)
{
	echo "connected";
}
else
{
	echo "no";
}
?> 