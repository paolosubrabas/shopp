<?php include('include/admin/header.php'); ?>
<section>
        <div class="container">
            <div class="row">
                <?php include('include/admin/sidebar.php'); ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        
                        <?php $item = $jim->getrequest(); ?>
                        <?php while($row = mysql_fetch_array($item)): ?>
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">RESERVATION INFORMATION</h3>
                                
                            </div>
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td class="text-right"><strong>Client :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['name'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Contact :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['contact'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Address :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['address'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Email :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['email'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Date Reserved :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['dateRequested'];?></strong></td>
                                    </tr>
                                      <tr>
                                        <td class="text-right"><strong>Reserve Date :</strong></td>
                                        <td class="text-info"><strong><?php echo $row['reserveDate'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Amount :</strong></td>
                                        <td class="text-danger"><strong><?php echo $row['amount'];?></strong></td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Item(s) :</strong></td>
                                        <td class="text-primary"><strong><?php echo $row['item'];?></strong></td>
                                    </tr>
                                    <tr>
                                    <?php if($p == 'unconfirmed'){ ?>
                                        <td class="text-right" colspan="2"><a href="order.php&&?p=confirm&&id=<?php echo $row['id'];?>" class="btn btn-warning">Confirm</a></td>
                                    <?php }else if($p == 'reserved'){?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=reserved&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Reserved</a></td>
                                    <?php }else if($p == 'paid'){?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=paid&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Paid</a></td>
                                    <?php }else if($p == 'delivered'){?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=delivered&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Delivered</a></td>
                                    <?php }else if($p == 'finished'){?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=finished&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Finished</a></td>
                                    <?php }else if($p == 'sold'){?>
                                        <td class="text-right" colspan="2"><a href="order.php?p=sold&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Sold</a></td>
                                    <?php } ?>
                                        
                                    </tr>
                                </table>
                            </div>
                            </div>
                        
                        <?php endwhile; ?>
              </section>



<?php include('include/admin/footer.php'); ?>