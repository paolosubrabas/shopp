<?php include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">All Services</h2>

	
<!--php starts here-->
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysql_query("SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Price like '%$filter%' or Type like '%$filter%' or Category like '%$filter%' or Type like '%$filter%'");
                    
				}
				else
				{
					$result = mysql_query("SELECT * FROM products");
                }
					
				if($result){				
				while($row=mysql_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="240" height="240" /></a>
                    </a>
					
					<h4><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'">'.$row['Product'].'</a></h4>
					<h2>PHP '.$row['Price'].'</h2>
					<p>Status: '.$row['status'].'</p>
					
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-default add-to-cart"><i class="fa fa-file-text-o"></i>View Details</a>
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</div>
</section>

<?php include('include/home/footer.php'); ?>