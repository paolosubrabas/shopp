<?php

include ('includes/coment_con.php');
$sqlsearch = "Select * from comments";
    $result = mysqli_query($conn,$sqlsearch);
while($rows = mysqli_fetch_array($result))
{
	echo $rows['content_comment'] . "<br/>";	
}

?>