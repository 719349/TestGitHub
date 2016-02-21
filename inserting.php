<?php


require_once("db_connect.php");

$workItem= $_REQUEST['workItem']; 
$eStart= $_REQUEST['eStart'];
$eEnd= $_REQUEST['eEnd'];
$lStart= $_REQUEST['lStart'];
$lEnd= $_REQUEST['lEnd'];
$dependency= $_REQUEST['dependency'];

echo("</br>");

/*
$datetime1 = date_create('2009-10-11');
$datetime2 = date_create('2009-10-13');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a days');

   This is to calculate the deurations 
*/

//echo ($workItem. ' ' . $eStart. ' ' . $eEnd. ' ' .$dependency. ' ' .$eStart. ' ' . $eEnd);


	$sql = "Insert into TaskTable Values(''," .
										 "'" . $workItem . "',".
										 "'" . $eStart . "',".
										 "'" . $eEnd . "',".
								         "'" . $dependency . "',".
										 "'" . $lStart . "',".
										 "'" . $lEnd . "')";
	mysql_query($sql);
	mysql_close($conn);
	
	echo ($workItem . "Successfully added to the databases");
	echo ("<br/> Press to see your chart <a href ='index.php'> here.</a>")
	
	//echo($sql);
?>