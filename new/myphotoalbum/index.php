
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ShareMU | Login</title>
  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
  <link rel="stylesheet" href="css/login.css" />
<script type="text/javascript" src="java/jquery-3.1.1.min.js"></script>


<?php
    $mess= "";
    $error2= "";
  include ('includes/database.php');
  
  if (isset($_POST['btnSignup']))
  {
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    
      $sql=mySQL_query("select * from user WHERE email='$email'") or die (mySQL_error());
      $row=mySQL_num_rows($sql);
      if ($row > 0)
      {
      $mess = '<div class="alert alert-warning"><p><strong>Email address is already used!</p></strong></div>';
      //echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
      }
      elseif($password != $password2)
      {
      $error2 = '<div class="alert alert-warning"><p><strong>Password do not match!</p></strong></div>';
     // echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
      }else
    {
      mySQL_query("INSERT INTO user (fullname,username,email,password,password2)
      VALUES ('$fullname','$username','$email','$password','$password2')")
      or die (mySQL_error());

      echo "<script>alert('Account successfully created!'); window.location='index.php'</script>";
    }
      
  }
  
?>



        <?php
           include('includes/database.php');
                 
             $mess3= "";

            if(isset($_POST['btnLogin']))
            {
              $email=$_POST['email'];
              $password=$_POST['password'];
            {
              $result = mysql_query("SELECT * FROM user WHERE email = '$email' and password='$password'")
              or die(mysql_error());
              
              $row = mysql_fetch_array($result);
              $count = mysql_num_rows($result);       
                if ($count == 0) 
                  {
                    $mess3 = '<div class="alert alert-warning"><p><strong>Incorrect email or password! Try again!</p></strong></div>';
                 // echo "<script>alert('Please check your username and password!'); window.location='index.php'</script>";
                  } 
                else if ($count > 0)
                  {
                    session_start();
                    $_SESSION['id'] = $row['user_id'];
                    header("location:menu.php");
                  }
            }       
            }
?>
                
 </head>
                <body><center>
                <div class="container">

                <div class="content"><br>
                  <img src="image/share.png">
                <p>Don't miss the fun! Login now!</p>
                	<form method="post">
                    <input type="text" name="email" placeholder="Email Address" value="" required="required" autofocus="autofocus" /><br/>
                     <input type="password" name="password" placeholder="Password" value="" required="required" /><br/><br>
                        <b> <?php echo $mess3; ?></b>
                        <input type="submit" class="btn" id="Login" name="btnLogin" value="Sign In" /><br/>
                     </form>
                   
                      <p><b>Sign up</b> </p>
                    <form method="post" >
                     <input type="email" id="1" name="email" placeholder="Email" required="required" value="" /><br/>
                     <input type="text" id="2" name="fullname" placeholder="Full Name" required="required" value="" /><br/>
                     <input type="text" id="3" name="username" placeholder="Username" required="required" value="" /><br/>
                     <input type="password" id="4" name="password" minlength="8" placeholder="Password" required="required" value=""/><br/>
                     <input type="password" id="5" name="password2" minlength="8" placeholder="Re-enter Password" required="required" value=""/><br/><br>
                     
                  <b><?php echo $mess; ?></b> 
                   <b><?php echo $error2 ?></b> 
                      <input type="submit" class="btn" id="Signup" name="btnSignup" value="Sign Up"  />


                    </form>
                    
                </div>
              
            </div>
            
            
       
            <div class="footer" style="text-align:center">
            &copy; 2018 <span style="color:#ee6e73;"><p>Copyright &copy; Misamis University. Designed by ||Ramayrat&Rebullos||</a></p></span>
          </div>    
</body></center>

</html>
