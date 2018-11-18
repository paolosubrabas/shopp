<?php
include 'db.php';


$id = $_REQUEST['id'];

$str="Read";

//echo $id;

//$id=$_GET['id'];

 $sql = "UPDATE `message` SET `status`='$str' WHERE (`message_id`='$id')";
 mysql_query( $sql);


echo "success";
header("location:message.php")
?>