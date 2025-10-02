<?php 

    $get_service_data=$this->db->query('select * from service where id='.$service_id.'')->result_array();
    foreach ($get_service_data as $key => $gsd) {
        $service_name=$gsd['service_name'];
        $city=$gsd['city'];
        $state=$gsd['state'];
        $country=$gsd['country'];
        $category=$gsd['category_name'];
        $image=$gsd['image'];
        $cost=$gsd['service_cost'];
        $details=$gsd['details'];
        $service_provider_img=$gsd['service_pro_img'];
        $email=$gsd['email'];
        $phone_num=$gsd['phone_no'];
        $service_provider=$gsd['service_provider'];
        $vendorId = $gsd['vendor_id'];
    }
?>

<section>
    <div class="container mt-5">
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
    <div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="section-header text-center">
                    <h2>Book Service</h2>
                </div>
        <form method="post" enctype="multipart/form-data" autocomplete="off" action="home/booking_Service/do_add" >
                    <input type="hidden" name="csrf_token_name" value="7b1a33552162861ffc1b14ebc0e36ca1" />
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="vendor_id" value="<?php echo $vendorId; ?>">
                    <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Service Category</label>
                                <input class="form-control" type="text" name="service_category" id="service_category" value="<?php echo $category; ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Service Name</label>
                                <input class="form-control" type="text" name="service_name" id="service_name" value="<?php echo $service_name; ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Service Provider</label>
                                <input class="form-control" type="text" name="service_provider" id="service_provider" value="<?php echo $service_provider; ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Service amount</label>
                                <input class="form-control" type="text" name="service_amount" id="service_amount" value="<?php echo $cost; ?>" readonly="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Service Location <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="service_location" id="user_address" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker current_location" data-id="1" title="get Your Location"></i></span>
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" id="map_key" value="AIzaSyAEjIy8vdA9v42tMDkZjzwdO9eIm82xzHE" >
                                <input type="hidden" name="service_latitude" id="service_latitude">
                                <input type="hidden" name="service_longitude" id="service_longitude">
                            </div>                            
                        </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input class="form-control" type="text" name="c_name" id="c_name" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Customer Mobile No</label>
                                <input class="form-control" type="text" name="c_mobile"  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                                <label>Date <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="booking_date" id="booking_date" />

                                <input type="hidden" name="provider_id" id="provider_id" value="1">
                                <input type="hidden" name="service_id" id="service_id" value="5">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Time slot <span class="text-danger">*</span></label>
                                <input type="time" name="from_time" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="text-center">
                                    <div id="load_div"></div>
                                </div>
                                <label>Notes</label>
                                <textarea class="form-control" name="notes" id="notes" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Payment Method</label>
                                <div>                                   
                                    
                          <label class="radio-inline"><input class="cod"  type="radio" name="cod" value="1" checked> Cash On Delivery </label>
                          <label class="radio-inline"><input class="cod"  type="radio" name="cod" value="2" checked> Wallet </label>
                             </div>
                            </div>
                        </div>


                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn submit_service_book" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing Order" data-id="5" data-provider="1" data-amount="100" type="submit" id="submit">Continue to Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</section>
