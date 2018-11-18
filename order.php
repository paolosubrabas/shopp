<?php include('include/admin/header.php'); ?>
<section>
        <div class="container">
            <div class="row">
                <?php include('include/admin/sidebar.php'); ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Reservations</h2>                                                               
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#data1" role="tab" data-toggle="tab">Request</a></li>
  <li><a href="#data2" role="tab" data-toggle="tab">Confirmed</a></li>
  <li><a href="#data3" role="tab" data-toggle="tab">Reserved</a></li>
  <li><a href="#data4" role="tab" data-toggle="tab">Paid</a></li>
  <li><a href="#data5" role="tab" data-toggle="tab">Delivered</a></li>
  <li><a href="#data6" role="tab" data-toggle="tab">Finished</a></li>
  <li><a href="#data7" role="tab" data-toggle="tab">Sold</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="data1">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Requested</th>
                <th>Customer</th>
                <th>Item</th>
             <th colspan="2">Action</th>
            </thead>
            <?php $request = $jim->getrequestedreservations(); ?>
            <?php while($row = mysql_fetch_array($request)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateRequested']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=unconfirmed" target="_blank"><i class="fa fa-external-link"></i> View Reservation</a></td>
                    <td class="text-center"><a href="order.php?p=confirm&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Confirm</a></td>
                    <td><a href="order.php?p=delete&&table=order&&id=<?php echo $row['id']; ?>" class="confirm"><i class="fa fa-times-circle    fas fa-thumbs-down"></i> <small></small></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane" id="data2">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Confirmed</th>
                <th>Customer</th>
                <th>Item</th>
                <th colspan="2">Action</th>
            </thead>
            <?php $confirmed = $jim->getconfirmedreservations(); ?>
      <?php include 'sms/sendconfirm.php'; ?>
            
            <?php while($row = mysql_fetch_array($confirmed)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateConfirmed']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=reserved" target="_blank"><i class="fa fa-external-link"></i> View Reservation</a></td>
                    <td class="text-center"><a href="order.php?p=reserved&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Reserved</a></td>
                    <td><a href="order.php?p=delete&&table=order&&id=<?php echo $row['id']; ?>" class="confirm"><i class="fa fa-times-circle  fa-lg text-times"></i> <small></small></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane" id="data3">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Reserved</th>
                <th>Customer</th>
                <th>Item</th>
                <th>Action</th>
            </thead>
            <?php $reserved = $jim->getreservedreservations(); ?>
            <?php while($row = mysql_fetch_array($reserved)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateReserved']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=paid" target="_blank"><i class="fa fa-external-link"></i> View Reservation</a></td>
                    <td class="text-center"><a href="order.php?p=paid&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Paid</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane" id="data4">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Paid</th>
                <th>Customer</th>
                <th>Item</th>
                <th>Action</th>
            </thead>
            <?php $paid = $jim->getpaidreservations(); ?>
            <?php while($row = mysql_fetch_array($paid)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['datePaid']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=delivered" target="_blank"><i class="fa fa-external-link"></i> View Reservation</a></td>
                    <td class="text-center"><a href="order.php?p=delivered&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Delivered</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane" id="data5">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Delivered</th>
                <th>Customer</th>
                <th>Item</th>
                 <th colspan="2">Action</th>
            </thead>
            <?php $delivered = $jim->getdeliveredreservations(); ?>
            <?php while($row = mysql_fetch_array($delivered)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateDelivered']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=finished" target="_blank"><i class="fa fa-external-link"></i> View Reservation</a></td>
                    <td class="text-center"><a href="order.php?p=finished&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Finished</a></td>
                      <td><a href="order.php?p=delete&&table=order&&id=<?php echo $row['id']; ?>" class="confirm"><i class="fa fa-times-circle      fa fa-bell"></i> <small></small></a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
<div class="tab-pane" id="data6">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Finished</th>
                <th>Customer</th>
                <th>Item</th>
                <th>Action</th>
            </thead>
            <?php $finished = $jim->getfinishedreservations(); ?>
            <?php while($row = mysql_fetch_array($finished)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateFinished']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>&&p=sold" target="_blank"><i class="fa fa-external-link"></i> View Reservation</a></td>
                    <td class="text-center"><a href="order.php?p=sold&&id=<?php echo $row['id']; ?>" class="btn btn-warning">Sold</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="tab-pane" id="data7">
        <table class="table table-bordered">
            <thead class="bg-primary">
                <th>Date Sold</th>
                <th>Customer</th>
                <th>Item</th>
            </thead>
            <?php $sold = $jim->getsoldreservations(); ?>
            <?php while($row = mysql_fetch_array($sold)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['dateFinished']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td class="text-center"><a href="item.php?id=<?php echo $row['id']?>" target="_blank"><i class="fa fa-external-link"></i> View Sold Item</a></td>                    
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
              </section>



<?php include('include/admin/footer.php'); ?>