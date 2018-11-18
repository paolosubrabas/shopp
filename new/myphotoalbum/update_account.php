<?php
 
  include ('includes/database.php');
  
  
    $user_id=$_POST['user_id'];
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    
     
     if($password != $password2)
      {
     // $error2 = '<div class="alert alert-warning"><p><strong> oopss !</strong>Password do not match!</p></div>';
     // echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
        echo "not match" ;
      }else
    {
      mySQL_query("UPDATE `user` SET `fullname`='$fullname', `username`='$username', `email`='$email', `password`='$password', `password2`='$password2' WHERE (`user_id`='$user_id')")
      or die (mySQL_error());

       echo "save " ;
     // echo "<script>alert('Account successfully created!'); window.location='index.php'</script>";
    }
      
 





/*include ('includes/coment_con.php');

 
$user_id=$_POST['user_id'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$sql=mySQL_query("select * from user WHERE email='$email'") or die (mySQL_error());
      $row=mySQL_num_rows($sql);
      if ($row > 0)
      {
     // $mess = '<div class="alert alert-warning"><p><strong> oopss !</strong>E-mail already taken!</p></div>';
      //echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
      	echo "email is taken";
      }
      elseif($password != $password2)
      {
     // $error2 = '<div class="alert alert-warning"><p><strong> oopss !</strong>Password do not match!</p></div>';
    // echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
      	echo "password not match";
      }else
    {

$sql = "UPDATE `user` SET `fullname`='$fullname', `username`='$username', `email`='$email', `password`='$password', `password2`='$password2' WHERE (`user_id`='$user')";
   
   echo "record save";
    
}


*/

?>