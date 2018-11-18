<?php
include 'db.php';


$id = $_REQUEST['id'];

//echo $id;
$str="Delivered";

//echo $id;

//$id=$_GET['id'];

 $sql = "UPDATE `customized_party` SET `status`='$str' WHERE (`party_id`='$id')";
 mysql_query( $sql);


echo "success";
header("location:partyrequest.php")

?>