<?php include('include/home/header.php'); ?>
	 
	 <div id="catering-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					  			    				    				
					
				</div>			 		
			</div>   
			<?php include('include/home/sidebar.php'); ?> 	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="catering-form">
	    				<h2 class="title text-center">Costumize Party Package</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-catering-form" class="catering-form row" name="catering-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required placeholder="Party Theme">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required placeholder="Party Type">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Party Plan Here"></textarea>
				            </div>     
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required placeholder="Venue">
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