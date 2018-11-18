<?php

include ('includes/coment_con.php');
include ('process/session.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);			
$location="upload/" . $_FILES["file"]["name"];
$description=$_POST['description'];
$posted_by=$_POST['posted_by'];
date_default_timezone_set("Asia/Manila");
$now=date("Y-m-d H:i:s");

//$sql = "INSERT INTO `photo` (`user_id`, `description`, `post_img`,'posted_by') VALUES ('$user_id', '$description', '$location','$posted_by')";

$sql="INSERT INTO `photo` (`user_id`, `description`	, `post_img`, `posted_by`,`date`) VALUES ('$user_id', '$description', '$location', '$posted_by','$now')";
//$sql = "INSERT INTO `post` (`post_id`, `accountid`, `caption`,'post_img') VALUES ('$accountid', '$caption', '$location')";


if ($conn->query($sql) === TRUE) {
	//echo "Error: " . $sql . "<br>" . $conn->error;
	
  echo "New record created successfully";
  header('location:menu.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>