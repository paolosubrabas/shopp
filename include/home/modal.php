<!-- Modal -->
<div class="modal fade" id="checkout_modal" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-square-o text-success fa-lg"></i> Check Out<small class='text-primary'> Reservation Information</small></h4>
      </div>
      <div class="modal-body">
        <form action="cart/data.php?q=checkout" method="POST">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="fname" class="form-control" placeholder="(ex. John)" required>
            </div>
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lname" class="form-control" placeholder="(ex. Doe)" required>
            </div>
            <div class="form-group">
                <label>Contact #</label>
                <input type="text" name="contact" class="form-control" placeholder="(ex. 0946 579 5229)" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="(ex. info@yourdomain.com)" class="form-control">
            </div>
            <div class="form-group">
                <label>Complete Address</label>
                <input type="text" name="address" class="form-control" placeholder="(ex. 2/F H.T Feliciano St., Brgy. Aguada, Ozamiz City)" required>
            </div>
             <div class="form-group">
                <label>Reserve Date</label>
                <input type="text" name="text" placeholder="(ex. January 01, 2018 - January 02,2018)" class="form-control">
            </div>
             <input type="hidden" name="price" value="<?php echo $itotal; ?>">
            <input type="hidden" name="product" value="<?php echo $row['product'];?>">
            <div class="alert alert-info">
                Mode of Payment: <strong>Any Remittance Center</strong>
            </div>
            <div class="alert alert-warning">
                *** Please wait for our call/text or email for confirmation. Thank You! ***
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Request</button>
          </form>
      </div>
    </div>
  </div>
</div>