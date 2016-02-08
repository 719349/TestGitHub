<?php

/*
In here we are going to take the some specific data that are rquired for the user to 

draw the tables that he is need
*/

require_once("db_connect.php");  
// here the call the fail name that holds the connection information to go through the data down

$sql = "SELECT * FROM ....."; 
// here we give him the quirey to chose from the database.
$result = mysql_query($sql) or die(mysql_error());
//this is to to implemnt the quirey and hold the information inside the variable name 


/* 
here is an example of WBT cahrt that we are trying to implemnt 
And we implented som of the HTML,CSS in oreder to get it done we we have
created table with to coulmn for the work-item and depneds-on.
*/

echo "<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>";
echo("<table style=width:100%>");

echo "<tr>";



while ($row = mysql_fetch_array($result)){  

//this is to make it go through all the data by using the technic while which it will deal
//with the data like an array so that we can chose from it in our table.

//$row = mysql_fetch_array($result) or die(mysql_error());    
// this is like loop but only shows the first row

echo "<tr>";
echo "<th>Work-Item</th>";
echo "<th>Depends-On</th>";
echo "</tr>";

echo "<td>" . $row["Work-Item"]. "</td>" 
. "<td>" . $row["Depends-On"]. "</td>";


echo "</tr>";
}

echo("</table>");
?>
