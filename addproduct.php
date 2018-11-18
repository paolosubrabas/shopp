
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addproduct"]["pname"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the service name");
  return false;
  }
var b=document.forms["addproduct"]["desc"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the service description");
  return false;
  }
 var c=document.forms["addproduct"]["price"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the rate");
  return false;
  }
  var d=document.forms["addproduct"]["type"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the service type");
  return false;
  }
var d=document.forms["addproduct"]["cat"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the service category");
  return false;
  }
  var d=document.forms["addproduct"]["status"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the service status");
  return false;
  }
 var e=document.forms["addproduct"]["image"].value;
if (e==null || e=="")
  {
  alert("Pls. browse an image");
  return false;
  }
/*if (c.which!=8 && c.which!=0 && (c.which<48 || c.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }
if (b.which!=8 && b.which!=0 && (b.which<48 || b.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }*/
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addproduct" onsubmit="return validateForm()">
 Service Name<br />
  <input name="pname" type="text" class="ed" /><br />
 Description<br />
    <input name="desc" type="text" id="rate" class="ed" /><br />
 Rate<br />
    <input name="price" type="text" id="qty" class="ed" onkeypress="return isNumberKey(event)" /><br />
 Status<br />
    <input name="status" type="text" id="status" class="ed" /><br />
  Type<br />
    <input name="type" type="text" id="type" class="ed" /><br />
 Category<br />
    <select name="cat" class="ed">  
<?php
    include('db.php');
    $r = mysql_query("select * from category"); 
    while($row = mysql_fetch_array($r)){
         echo '<option>'.$row['title'].'</option>';
    }
?>
  </select>

    
 Service Image: <br /><input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
