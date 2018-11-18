<?php include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
                <?php $filter = isset($_GET['filter']) ? $_GET['filter'] : '';?>
                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">View by <?php echo $filter;?></h2>
            <br>
	
<!--php starts here-->
<?php											
					$result = mysql_query("SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%' or Subategory like '%$filter%'");
                    

				if($result){				
				while($row=mysql_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="240" height="240" />
                    </a>
					
					<h4><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'">'.$row['Product'].'</a></h4>
					<h2>PHP '.$row['Price'].'</h2>
					<p>Category: '.$row['Category'].'</p>
					<p>Subcategory: '.$row['Subcategory'].'</p>
					
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

<?php include('include/home/footer.php'); ?><?php include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
                <?php $filter = isset($_GET['filter']) ? $_GET['filter'] : '';?>
                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">View by <?php echo $filter;?></h2>
            <br>
	
<!--php starts here-->
<?php											
					$result = mysql_query("SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");
                    

				if($result){				
				while($row=mysql_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="240" height="240" />
                    </a>
					
					<h4><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'">'.$row['Product'].'</a></h4>
					<h2>PHP '.$row['Price'].'</h2>
					<p>Category: '.$row['Category'].'</p>
					
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