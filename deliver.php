<?php
include 'db.php';


$id = $_REQUEST['id'];

//echo $id;
$str="Delivered";

//echo $id;

//$id=$_GET['id'];

 $sql = "UPDATE `customized_catering` SET `status`='$str' WHERE (`cat_id`='$id')";
 mysql_query( $sql);


echo "success";
header("location:cateringrequest.php")

?>