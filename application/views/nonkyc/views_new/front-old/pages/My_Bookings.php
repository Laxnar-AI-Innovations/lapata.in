<?php 
    $getActiveBookings = $this->db->query('select * from booking where user_id='.$this->session->userdata('user_id').' and status=0')->result_array();
    $getPreviousBookings = $this->db->query('select * from booking where user_id='.$this->session->userdata('user_id').' and status=1')->result_array();
?>
<div class="container p-3">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 px-0">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" style="width:50%;" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Active Booking</button>
                </li>
                <li class="nav-item" style="width:50%;" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Previous Booking</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <?php
                            if(count($getActiveBookings) > 0)
                            {
                            foreach($getActiveBookings as $key=>$value)
                            {
                                $splitTime = explode(' ',$value['date_and_time']);
                        ?>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-4 mb-5" style="box-shadow:0px 0px 7px 0px">
                            <div class="row p-3">
                                <div class="col-lg-6 col-sm-6 col-md-6" style="width:50%;">
                                    <h6><?php echo $value['message']; ?></h6>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-right" style="width:50%;">
                                    <h6 class="text-success"><i class="fa fa-check"></i> Done <i class="fa fa-arrow-right"></i></h6>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <h6><?php echo $value['address']; ?></h6>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-6 col-sm-6 col-md-6" style="width:50%;">
                                    <h6>Date</h6>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-left" style="width:50%;">
                                    <h6>Time</h6>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-6 col-sm-6 col-md-6" style="width:50%;">
                                    <h6><?php echo date('d-m-Y',strtotime($splitTime[0])); ?></h6>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-left" style="width:50%;">
                                    <h6><?php echo date('h:i a',strtotime($splitTime[1])); ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php } }else{ ?>
                            <h4 class="mx-auto mt-3">No Bookings</h4>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <?php
                            if(count($getPreviousBookings) > 0)
                            {
                            foreach($getPreviousBookings as $key=>$value)
                            {
                                $splitTime = explode(' ',$value['date_and_time']);
                        ?>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-4 mb-5" style="box-shadow:0px 0px 7px 0px">
                            <div class="row p-3">
                                <div class="col-lg-6 col-sm-6 col-md-6" style="width:50%;">
                                    <h6><?php echo $value['message']; ?></h6>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-right" style="width:50%;">
                                    <h6 class="text-success"><i class="fa fa-check"></i> Done <i class="fa fa-arrow-right"></i></h6>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <h6><?php echo $value['address']; ?></h6>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-6 col-sm-6 col-md-6" style="width:50%;">
                                    <h6>Date</h6>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-left" style="width:50%;">
                                    <h6>Time</h6>
                                </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-lg-6 col-sm-6 col-md-6" style="width:50%;">
                                    <h6><?php echo date('d-m-Y',strtotime($splitTime[0])); ?></h6>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-md-6 text-left" style="width:50%;">
                                    <h6><?php echo date('h:i a',strtotime($splitTime[1])); ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php } }else{ ?>
                            <h4 class="mx-auto mt-3">No Bookings</h4>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#home-tab').click(function()
    {   
        $(this).addClass('active');
        $('#profile-tab').removeClass('active');
        $('#home').addClass('d-block').addClass('show').removeClass('d-none');
        $('#profile').addClass('d-none').removeClass('show').removeClass('d-block');
    })
    $('#profile-tab').click(function()
    {
        $(this).addClass('active');
        $('#home-tab').removeClass('active');
        $('#profile').addClass('d-block').addClass('show').removeClass('d-none');
        $('#home').addClass('d-none').removeClass('show').removeClass('d-block');
    })
</script>