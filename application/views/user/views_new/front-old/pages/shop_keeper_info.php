
<div class="container">
      <div class="row">
          
                    <div class="col-md-12">
                       <h2 style="text-align:  center;">Become Our vendor</h2>
                         <form method="post" action="<?php echo base_url('home/shop_keeper_info/do_add'); ?>" enctype="multipart/form-data">
                    <div class="form-row">
                                   <div class="form-group col-md-4">
                              <label> Name</label>
                              <input type="text" name="name" class="form-control">
                            </div>


                                   <div class="form-group col-md-4">
                              <label> Email</label>
                              <input type="text" name="email" class="form-control">
                            </div>

                              <div class="form-group col-md-4">
                              <label>Contact</label>
                              <input type="text" name="contact" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                              <label>Alternate Contact</label>
                              <input type="text" name="alternate_contact" class="form-control">
                            </div>

                         <!-- <div class="form-group col-md-4">
                                    <label>City</label>
                                    <select name="ddlcity" class="form-control">
                                        
                                      <option>Select</option>
                                      <?php $city= $this->db->query('select * from community')->result_array();
                                      foreach($city as $ct) {
                                      ?>
                                      <option value="<?php echo $ct['city']; ?>" ><?php echo $ct['city']; ?></option>
                                      <?php } ?>
                                      
                                    </select>
                                  </div> -->

                                    <div class="form-group col-md-4">
                             <label>Address</label>
                             <input type="text" name="txtaddress" class="form-control">
                             </div>

                              <div class="form-group col-md-4">
                             <label>Create Password</label>
                             <input type="Password" name="txtcreate_ps" class="form-control" id="txtcreate_ps">
                             <input type="checkbox" onclick="myFunction()">Show Password
                             </div>
                           </div>
<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("txtcreate_ps");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

      <h1 style="text-align:  center;">Shop Information</h1>

<br>


                    <div class="form-row">
                                   <div class="form-group col-md-4">
                              <label>Shop Name</label>
                              <input type="text" name="shop_name" class="form-control">
                            </div>

                                <div class="form-group col-md-4">
                             <label> Shop Address</label>
                             <input type="text" name="txtaddress" class="form-control">
                             </div>



                                   <div class="form-group col-md-4">
                              <label> Aadhar Card</label>
                              <input type="text" name="aadhar_card" class="form-control">
                            </div>

                              <div class="form-group col-md-4">
                              <label>Pan Card</label>
                              <input type="text" name="pan_card" class="form-control">
                            </div>

                             <div class="form-group col-md-4">
                                   <label>Photo Of Aadhar Card</label>
                                  <input type="file" name="photo_aadhar" class="form-control">
                                   </div>

                                   <div class="form-group col-md-4">
                                   <label>Photo Of Pan Card</label>
                                  <input type="file" name="photo_pan" class="form-control">
                                   </div>


                                   <div class="form-group col-md-4">
                                   <label>Vendor Profile Image</label>
                                  <input type="file" name="vendor_img" class="form-control">
                                   </div>
                                 </div>
                                
      

       <div class="form-group">
      <button name="btnsubmit" class="btn btn-primary">Save the details</button>
    </div>
  </div>
</form>
</div>
  </div>
</div>


  
