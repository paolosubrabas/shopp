    <?php include ('process/session.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/icon.css">
      <link rel="stylesheet" type="text/css" href="css/design.css">
        <link rel="stylesheet" type="text/css" href="css/materialize.css">
        <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
         <link rel="stylesheet" type="text/css" href="css/menu.css">
         <link rel="stylesheet" type="text/css" href="css/w3.css">
</head>
<style>
	.box{
    align-content: center;
    background-color:  #ee6e73;
    width: 600px;
    border: 10px;
    padding: 25px;
    margin: 25px;
    border-radius: 5px;
    height: 100%;
     color: #ffb3cc;
    box-shadow: 20px 20px;
    margin-left: 400px;
	}
</style>

<body>
 <form method="post" >
 <div class="box">
  
 <img src="<?php echo $profile_picture; ?>" style="height:100px; width:100px;" >	<br>
 <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id;?>">
 username:&nbsp; <input type="text" style="width: 300px;" id="username" name="username" value="<?php echo $username; ?>" ><br>
 email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" style="width: 300px;" id="email" name="email" value="<?php echo $email; ?>"><br>
 fullname:&nbsp;<input type="text" style="width: 300px;" name="fullname" id="fullname" value="<?php echo $fullname ?>"><br>
 password:<input type="password" style="width: 300px;" id="password" name="password" placeholder="password"><br>
 password2:<input type="password" style="width: 300px;" id="password2" name="password2" placeholder="Re-enter Password"><br> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" style="width: 100px; color: black; border-radius: 5px;" name="username" value="Update" onclick="update_account();">

<div id="status"></div>
 
</div>

 </form>
 
</body>
</html>
<script>
	 function update_account(){
    
    var hr = new XMLHttpRequest();
    
    var url = "update_account.php";
    var ui = document.getElementById("user_id").value;
    var un = document.getElementById("username").value;
    var em = document.getElementById("email").value;
    var fn = document.getElementById("fullname").value;
    var p = document.getElementById("password").value;
    var p2 = document.getElementById("password2").value;
   

    var vars = "user_id="+ui+"&username="+un+"&email="+em+"&fullname="+fn+"&password="+p+"&password2="+p2;


    hr.open("POST", url, true);
  
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
  
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
   }


</script>