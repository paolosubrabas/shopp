<?php include('include/home/header.php');

  if(!empty($_GET['err'])){
  	$merr= $_GET['err'];
  	if($merr==2){
       echo "<h3> File too large</h3>";
  	}
  	elseif($merr==3){
  		echo "<h3> Invalid File.  </h3>";
  	}
  	elseif($merr==4){
  		echo "<h3> Problem uploading file. </h3>";
  	}
  	elseif($merr==5){
  		echo "<h3> Please upload some file </h3>";
  	}
  }
?>


	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" action="messageupload.php" class="contact-form row" name="contact-form" method="POST" enctype="multipart/form-data">
				    		<input type="hidden" name="mess_id">
				            <div class="form-group col-md-6">
				                <input type="text" name="pname" class="form-control" required placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="contact" class="form-control" required placeholder="Contact No.">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>
				             <div class="form-group col-md-12">
				             	 <th>Attach Proof of Payment Here</th>
				               <!-- <input type="file" name="image" required class="form-control" rows="8" placeholder=">-->
				               <input name="image" class="input-file" type="file">
				            </div>                     
				            <div class="form-group col-md-12">
				                <input type="submit" name="Submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<center><h4>Jejeelyn's for All Seasons</h4>
	    					         <h5>Rentals and Services</h5></center>
							<p>Mobile: +639156104538 </p>
							<p>Email: Jejeelyns@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php include('include/home/footer.php'); ?>