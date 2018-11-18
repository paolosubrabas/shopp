<?php 

include "db.php";

			    $pname = $_POST["name"];
			    $contact = $_POST["contact"];
			    $theme = $_POST["subject"];
			    $desc = $_POST["message"];
			    $PAX = $_POST["pname"];
			    $dateneeded = $_POST["date"];
			    $timeneeded = $_POST["time"];
			    $str="pending";
			 //INSERT INTO `message` (`message_id`, `name`, `email`, `subject`, `message`, `image`) VALUES ('3', 'gfj', 'hgj', 'jhkj', 'hgjk', 'kjhkj')
                
                  // $sql ="INSERT INTO message (image,name, email, subject, message)
		       // VALUES ('$pname','$email','$subject','$mess','$location')";

			 //   echo $PAX;

		    $sql ="INSERT INTO `customized_catering` (`name`, `contact`, `title`, `description`, `PAX`, `dateneeded`,`timeneeded`,`status`)
		                 VALUES ('$pname', '$contact', '$theme', '$desc', '$PAX', '$dateneeded', '$timeneeded','$str')";

		        if(mysql_query($sql))
		        	{
		        		//echo "HEY OK KAAU";
		        		header('Location:costumcatering.php');
		        	//}
		     }else{
		     	//header('Location: cateringrequest.php?err=4');
		     	echo "error:".$sql."<br>".$bd ->error;
		     //}
//}else{
//	header('Location: cateringrequest.php?err=5');
//}
		        //s	exit();

		        //	echo "error:".$sql."<br>".$bd ->error;
		   // }
		}
 ?>