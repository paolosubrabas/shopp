<?php include('include/admin/header.php'); ?>
<?php
    
    if(isset($_POST['addsubcategory'])){
        $subcategory = $_POST['subcategory']; 
        $jim->addsubcategory($subcategory);
    }
   
?>
<section>
		<div class="container">
			<div class="row">
                <?php include('include/admin/sidebar.php'); ?>
                <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Subcategory</h2>                      
                        <form method="POST" action="adminsubcategory.php">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Subcategory Name:</div>
                                    <input name="subcategory" class="form-control" type="text" placeholder="...">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn" name="addsubcategory">Submit</button>
                            </div>
                        </form>
                       <hr />
                        <table class="table table-bordered">
                            <thead class="bg-primary">
                                <th>Name</th>
                                <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                            
                        <?php $subcategory = $jim->getsubcategory();?>
                        <?php while($row = mysql_fetch_array($subcategory)):?>
                            <tr>
                                <td><?php echo $row['title'];?></td>    
                                <td><a href="editsubcategory.php?p=edit&&id=<?php echo $row['id']; ?>"><i class="fa fa-edit fa-lg text-success"></i><small>Edit</small></a></td>    
                                <td><a href="adminsubcategory.php?p=delete&&table=subcategory&&id=<?php echo $row['id']; ?>" class="confirm"><i class="fa fa-times-circle fa-lg text-danger"></i> <small>Remove</small></a></td>    
                            </tr>
                        <?php endwhile; ?>
                            </tbody>
                        </table>

              </section>



<?php include('include/admin/footer.php'); ?>