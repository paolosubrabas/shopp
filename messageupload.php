<?php 

include "db.php";
 
  if (isset($_FILES['image']['tmp_name']) && !empty($_FILES['image']['tmp_name'])) {
  							$fpath = "reservation/img/products/";

  							chmod($fpath, 0777);

							$target = "reservation/img/products/" . $_FILES["image"]["name"];

   							$valid_file_extensions = array(".jpg",".jpeg",".png",".JPG");
   							$uploaded_size=$_FILES['image']['size'];
							$uploaded_type=$_FILES['image']['type'];
							//This is our size condition
							if ($uploaded_size > 2000000) //2MB
							{
							//	echo "Your file is too large.<br>";
								header('Location: contact.php?err=2');
								chmod($target, 0755);
							}

							$file_extension = strrchr($_FILES['image']['name'], "."); //GET FILE EXTENSION
							if (!in_array($file_extension, $valid_file_extensions)) {
   							    header('Location: contact.php?err=3');
								chmod($target, 0755);
    						}
						/*if (!isset($_FILES['image']['tmp_name'])) {
					echo "";

						}else{

						$file=$_FILES['image']['tmp_name'];
							$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
							$image_name= addslashes($_FILES['image']['name']);
							$image_size= getimagesize($_FILES['image']['tmp_name']);

								
								if ($image_size==FALSE) {
									
									echo "That's not an image!";
										
								}else{

										*/
							//move_uploaded_file($_FILES["image"]["tmp_name"],"reservation/img/products/" . $_FILES["image"]["name"]);  
  			
		     if(move_uploaded_file($_FILES["image"]["tmp_name"],$target)){     
                $location=$_FILES["image"]["name"];
			    $pname = $_POST["pname"];
			    $contact = $_POST["contact"];
			    $subject = $_POST["subject"];
			    $mess = $_POST["message"];
			 //INSERT INTO `message` (`message_id`, `name`, `email`, `subject`, `message`, `image`) VALUES ('3', 'gfj', 'hgj', 'jhkj', 'hgjk', 'kjhkj')
                $str="Pending";
                  // $sql ="INSERT INTO message (image,name, email, subject, message)
		       // VALUES ('$pname','$email','$subject','$mess','$location')";

		     $sql ="INSERT INTO `message` (`name`, `contact`, `subject`, `message`,`status`, `image`) 
		                              VALUES ( '$pname', '$contact', '$subject', '$mess','$str', '$location')";

		        if(mysql_query($sql))
		        	{
		        		//echo "HEY OK KAAU";
		        		header('Location: contact.php');
		        	}
		     }
		     else{
		     	header('Location: contact.php?err=4');
		     }
}
else{
	header('Location: contact.php?err=5');
}
		        //s	exit();

		        //	echo "error:".$sql."<br>".$bd ->error;
		  //  }
		// /}
 ?>