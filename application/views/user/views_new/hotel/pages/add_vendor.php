<div class="container">
    <div>
        <!--Success message-->
        <?php $add_succ=$this->session->flashdata('success');
            if($add_succ){
            ?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $add_succ;?></strong> 
        </div>
        <?php } ?>
        <!--Delete message-->
        <?php $del_succ=$this->session->flashdata('error');
            if($del_succ){
            ?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $del_succ;?></strong> 
        </div>
        <?php } ?>
    </div>
</div>
<div class="card shadow mb-1">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Add Vendor</h6>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="<?php echo base_url('admin/addShop'); ?>" enctype="multipart/form-data">
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
                        <div class="form-group col-md-4">
                            <label>City</label>
                            <select name="ddlcity" class="form-control">
                                <option>Select</option>
                                <?php $city= $this->db->query('select * from community')->result_array();
                                    foreach($city as $ct) {
                                    ?>
                                <option value="<?php echo $ct['city']; ?>" ><?php echo $ct['city']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Address</label>
                            <input type="text" name="txtaddress" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Create Password</label>
                            <input type="Password" name="txtcreate_ps" class="form-control" id="txtcreate_ps">
                            <input type="checkbox" onclick="myFunction()">Show Password
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
                </form>
            </div>
        </div>
    </div>
</div>