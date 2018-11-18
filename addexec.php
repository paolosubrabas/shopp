<?php
include('db.php');


	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"reservation/img/products/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$pname=$_POST['pname'];
			$desc=$_POST['desc'];
			$price=$_POST['price'];
			$type=$_POST['type'];
			$cat=$_POST['cat'];
			$status=$_POST['status'];
			
			$update=mysql_query("INSERT INTO products (imgUrl, product, Description, Price, Type, Category, status)VALUES
('$location','$pname','$desc','$price','$type','$cat','$status')");
header("location: admin.php");
			exit();
		
			}
	}


?>
