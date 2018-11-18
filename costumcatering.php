<?php include('include/home/header.php'); ?>
	 
	 <div id="catering-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					  			    				    				
					<!--sendcatering.php-->
				</div>			 		
			</div>   
			<?php include('include/home/sidebar.php'); ?> 	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="catering-form">
	    				<h2 class="title text-center">Costumize Catering Package</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
			<form id="main-catering-form" class="catering-form row" name="catering-form" method="post" action="sendcatering.php">
				    		<div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="contact" class="form-control" required placeholder="Contact No.">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required placeholder="Catering Title">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Food Choices Here"></textarea>
				            </div>     
				            <div class="form-group col-md-6">
				                <input type="text" name="date" class="form-control" required placeholder="Date Needed">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="time" class="form-control" required placeholder="Time Needed">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="number" name="pname" class="form-control" required placeholder="Place No. of PAX here">
				            </div>                   
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Create">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php include('include/home/footer.php'); ?>