<?php

include ('includes\coment_con.php');
include ('session.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
move_uploaded_file($_FILES["file"]["tmp_name"],"cover/" . $_FILES["file"]["name"]);			
$location="cover/" . $_FILES["file"]["name"];
$user_id=$_POST['user_id'];

//$sql = "INSERT INTO `photo` (`user_id`, `description`, `post_img`,'posted_by') VALUES ('$user_id', '$description', '$location','$posted_by')";

$sql="UPDATE `user` SET `cover_picture`='$location' WHERE (`user_id`='$user_id')";
//$sql = "INSERT INTO `post` (`post_id`, `accountid`, `caption`,'post_img') VALUES ('$accountid', '$caption', '$location')";


if ($conn->query($sql) === TRUE) {
	//echo "Error: " . $sql . "<br>" . $conn->error;
	
  //echo "New record created successfully";
 header('location:profile.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>