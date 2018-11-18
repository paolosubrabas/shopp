<?php include('db.php'); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
<?php
     $jim = new Admin();
    $p = isset($_GET['p']) ? $_GET['p'] : null;
    if($p == 'confirm'){
        $jim->confirm(); 
    }else if($p == 'reserved'){
        $jim->reserved(); 
    }else if($p == 'paid'){
        $jim->paid(); 
    }else if($p == 'delivered'){
        $jim->delivered();
    }else if($p == 'finished'){
        $jim->finished();
    }else if($p == 'sold'){
        $jim->sold();
    }else if($p == 'delete'){
        $jim->delete();   
    }
    
    

    class Admin {
        
        function getrequestedreservations(){
                $q = "SELECT * FROM dbgadget.order where status='unconfirmed' order by dateRequested desc";
                $result = mysql_query($q);
            
                return $result;
        }
        function getconfirmedreservations(){
                $q = "SELECT * FROM dbgadget.order where status='confirmed' order by dateConfirmed desc";
                $result = mysql_query($q);
            
                return $result;
        }
        function getreservedreservations(){
                $q = "SELECT * FROM dbgadget.order where status='reserved' order by dateReserved desc";
                $result = mysql_query($q);
            
                return $result;
        }
        function getpaidreservations(){
                $q = "SELECT * FROM dbgadget.order where status='paid' order by datePaid desc";
                $result = mysql_query($q);
            
                return $result;
        }
        function getdeliveredreservations(){
                $q = "SELECT * FROM dbgadget.order where status='delivered' order by dateDelivered desc";
                $result = mysql_query($q);
            
                return $result;
        }
        function getfinishedreservations(){
                $q = "SELECT * FROM dbgadget.order where status='finished' order by dateFinished desc";
                $result = mysql_query($q);
            
                return $result;
        }
        function getsoldreservations(){
                $q = "SELECT * FROM dbgadget.order where status='sold' order by dateSold desc";
                $result = mysql_query($q);
            
                return $result;
        }
        
        function getrequest(){
            $id = $_GET['id'];
            $q = "SELECT * FROM dbgadget.order where id=$id";
            $result = mysql_query($q);
            
            return $result;
        }
        
        function confirm(){
            $date = date('m/d/y h:i:s A');
            $id = $_GET['id'];
            $q = "UPDATE dbgadget.order set dateConfirmed='$date', status='confirmed' where id=$id";
            mysql_query($q);
            
            return true;
         }
        
        function reserved(){
            $date = date('m/d/y h:i:s A');
            $id = $_GET['id'];
            $q = "UPDATE dbgadget.order set dateReserved='$date', status='reserved' where id=$id";
            mysql_query($q);
            
            return true;
         }
        
        function paid(){
            $date = date('m/d/y h:i:s A');
            $id = $_GET['id'];
            $q = "UPDATE dbgadget.order set datePaid='$date', status='paid' where id=$id";
            mysql_query($q);
            
            return true;
         }
        
        function delivered(){
            $date = date('m/d/y h:i:s A');
            $id = $_GET['id'];
            $q = "UPDATE dbgadget.order set dateDelivered='$date', status='delivered' where id=$id";
            mysql_query($q);
            
            return true;
         }
        
        function finished(){
            $date = date('m/d/y h:i:s A');
            $id = $_GET['id'];
            $q = "UPDATE dbgadget.order set dateFinished='$date', status='finished' where id=$id";
            mysql_query($q);
            
            return true;
        }
        function sold(){
            $id = $_GET['id'];
            $date = date('m/d/y h:i:s A');
            $q = "UPDATE dbgadget.order set dateConfirmed='$date', status='sold' where id=$id";
            mysql_query($q);
            
            return true;
        }
        
        function getcategory(){
            $q = "SELECT * from dbgadget.category order by title asc";
            $result = mysql_query($q);
            
            return $result;
        }
        function addcategory($cat){
            $q = "INSERT INTO dbgadget.category values('','$cat')";
            mysql_query($q);
            return true;
        }
        
        function delete(){
            $table = $_GET['table'];
            $id = $_GET['id'];
            //echo $q = "DELETE FROM dbgadget.$table where id=$id";
            mysql_query("DELETE FROM dbgadget.$table where id=$id");
            return true;
        }
        
        function getcategorybyid($id){
            $q = "Select * from dbgadget.category where id=$id";
            $result = mysql_query($q);
            if($row = mysql_fetch_array($result)){
                $category = $row['title'];
            }
            return $category;
        }
        
        function updatecategory($cat,$id){
            $q = "update dbgadget.category set title='$cat' where id=$id";   
            mysql_query($q);
            return true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('session.php'); ?>
<link rel="stylesheet" href="css/style1.css" type="text/css" media="screen" charset="utf-8">
<script src="admin.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<script src="js/script.js" type="text/javascript"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="src/facebox.js" type="text/javascript"></script>
   <!-- <script src="src/jquery.min.js" type="text/javascript"></script>-->
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>






    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/home/favicon.png" />
    <title>JAS Reservation Portal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

	
		<div class="header-bottom navbar navbar-inverse" style="background-color:  #5D6C89; border-radius: 0;"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header navbar-default">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
    