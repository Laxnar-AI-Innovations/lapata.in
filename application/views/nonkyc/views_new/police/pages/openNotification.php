<style>
.table-bordered,td,th,tr{
    border:2px solid black!important;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
	background-color: #F5F5F5;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #F5F5F5;
  border-radius: 10px;
  background-image: -webkit-gradient(linear,
				   left bottom,
				   left top,
				   color-stop(0.44, rgb(122,153,217)),
				   color-stop(0.72, rgb(73,125,189)),
				   color-stop(0.86, rgb(28,58,148)));
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<style>
    .w-lg-max-content{
        width:100%!important;
    }
    .phone {
      line-height:32px;
      font-size:18px;
      font-weight:bold;
      color:#333333;
      margin:0;
    }
    .phone svg {
      width:18px;
      height:18px;
      margin-top:2px;
      margin-right:4px;
    }
    .phone svg path {
      fill:#f03454;
    }
    .phone svg path:nth-child(2) {
      -webkit-animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation: header-phone 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    .phone svg path:nth-child(3) {
      -webkit-animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
      animation:header-phone2 1s infinite cubic-bezier(.1, .57, .5, 1);
    }
    
    
    
    
    /* Animate phone */
    
    @-webkit-keyframes header-phone {
      0%,30% {opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80% {opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone {
      0%,30%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      80%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @-webkit-keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
    @keyframes header-phone2 {
      0%{opacity:0; -webkit-transform:translate3d(-20px, 20px, 0); transform:translate3d(-20px, 20px, 0)}
      70%,90%{opacity:1; -webkit-transform:translate3d(0, 0, 0); transform:translate3d(0, 0, 0)}
      100%{opacity:0}}
      .btn-style-green{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: green!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-green:hover {
        color: #fff!important;
        background-color:#0daf96!important;
    }
    .btn-style-red{
        position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 26px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color: #ff2201!important;
    box-shadow: 0 11px 21.25px 3.75px rgb(194 191 255 / 65%)!important;
    }
    .btn-style-red:hover {
        color: #fff!important;
        background-color:#0daf96!important;
    }
    .form-floating>.form-control-plaintext~label, .form-floating>.form-control:focus~label, .form-floating>.form-control:not(:placeholder-shown)~label, .form-floating>.form-select~label {
        transform: scale(.85) translateY(-0.5rem) translateX(1rem);
    }
</style>

<main id="main" class="main">

    <div class="pagetitle mb-0">
      <p class="mb-0">Welcome,<b><?= $_SESSION['thanaName']; ?></b></p>
    </div><!-- End Page Title -->

    <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container px-0">
            <div class="row justify-content-center align-items-center">
                <div class="card mb-1 w-100">
                    <div class="card-body p-3">
                        <div class="pb-0">
                            <?php 
                                $getUserDetail = $this->db->query('select * from criminals where Id='.$notification[0]['foundPerson'])->result_array();
                                // $getUserDetail = $this->db->query('select * from missingperson where Id='.$notification[0]['foundPerson'])->result_array();
                                $getHotelDetail = $this->db->query('select * from hotel where hotel_id='.$notification[0]['hotelId'])->result_array();
                                $getHotelEntryDetail = $this->db->query('select * from hotelEntry where Id='.$notification[0]['hotelEntryId'])->result_array();
                                $getTotalBooking = $this->db->query('select * from hotelEntry where bookingId='.$getHotelEntryDetail[0]['bookingId'])->result_array();
                            ?>
                            <h5 class="card-title mb-0 text-center pb-0 pt-0 text-danger text-uppercase">Wanted PERSON - <?= $getUserDetail[0]['personName']; ?>(<?= $getUserDetail[0]['aadharNumber']; ?>)</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 mt-4 align-items-center">
                    <img src="<?php echo base_url(); ?><?php echo ($getUserDetail[0]['photo'] != NULL) ? $getUserDetail[0]['photo'] : 'assets/img/hotel.png'; ?>" style="width:100%;heigh:200px;">
                </div>
                <div class="col-lg-8 col-xl-8 col-md-8 mt-4 col-sm-12 align-items-center">
                    <div class="card mb-4 w-100">
                        <div class="card-body px-4">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Hotel Name</label>
                                        <p class="mb-0"><b><?php echo $getHotelDetail[0]['name']; ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Checkin Date</label>
                                        <p class="mb-0"><b><?php echo date('d-m-Y',strtotime($getHotelEntryDetail[0]['dateCreated'])); ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Check Out Date</label>
                                        <?php 
                                            if($getHotelEntryDetail[0]['checkout_status'] == 'no')
                                            {
                                        ?>
                                        <?php 
                                            if((date('Y-m-d',strtotime($getHotelEntryDetail[0]['checkOutDate']))) <= (date('Y-m-d')))
                                            {
                                        ?>
                                        <p class="mb-0"><b><?php echo date('d-m-Y',strtotime($getHotelEntryDetail[0]['checkOutDate'])); ?></b></p>
                                        <?php }else{ ?>
                                        <p class="mb-0"><b>-</b></p>
                                        <?php } ?>
                                        <?php }else{ ?>
                                        <p class="mb-0"><b class="text-danger">Checked Out</b></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Room Number</label>
                                        <p class="mb-0"><b><?php echo $getHotelEntryDetail[0]['roomNumber']; ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Booking Mobile</label>
                                        <p class="mb-0"><b><?php echo $getHotelEntryDetail[0]['guestMobile']; ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Booking Id</label>
                                        <p class="mb-0"><b><?php echo $getHotelEntryDetail[0]['bookingId']; ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Booking Members</label>
                                        <p class="mb-0"><b><?php echo count($getTotalBooking); ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg- col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Hotel Contact 1</label>
                                        <p class="mb-0"><b><?php echo $getHotelDetail[0]['registration_mobile']; ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Hotel Contact 2</label>
                                        <p class="mb-0"><b><?php echo $getHotelDetail[0]['alternate_mobile1'] ?? '-'; ?></b></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Nearby Police Thana</label>
                                        <?php 
                                            if($getHotelDetail[0]['nearbyThana'] != '-')
                                            {
                                                $getThanaDetail = $this->db->query('select * from police_thana where thana="'.$getHotelDetail[0]['nearbyThana'].'"')->result_array();
                                        ?>
                                        <p class="mb-0 text-danger"><b><?= $getThanaDetail[0]['thana'].', '.$getThanaDetail[0]['state'].', '.$getThanaDetail[0]['district']; ?></b></p>
                                        <?php }else{ ?>
                                        <p class="mb-0 text-danger"><b><?= $getHotelDetail[0]['nearbyThana']; ?></b></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6 mt-3">
                                    <div class="form-group text-center">
                                        <label>Hotel Address</label>
                                        <p class="mb-0"><b><?php echo $getHotelDetail[0]['address']; ?></b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  </section>

</main>
<style>
    .save {
        position: relative;
        color: #fff!important;
        font-size: 16px!important;
        line-height: 16px!important;
        font-weight: 600!important;
        padding: 12px 35px!important;
        border-radius: 25px!important;
        background-color: #008000!important;
    }
    .swal2-close{
    position: relative!important;
    color: #fff!important;
    font-size: 20px!important;
    line-height: 20px!important;
    font-weight: 600!important;
    padding: 25px 25px!important;
    background-color:black!important;
}
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>