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
      <p class="mb-0">Welcome,<b><?= $_SESSION['aadharName']; ?></b></p>
    </div><!-- End Page Title -->

    <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container px-0">
            <div class="row justify-content-center align-items-center">
                <div class="card mb-1 w-100">
                    <div class="card-body p-3">
                        <div class="pb-0">
                            <h5 class="card-title mb-0 text-center pb-0 pt-0 text-danger">Criminal Records</h5>
                        </div>
                    </div>
                </div>
                <?php 
                    if(count($criminalDetail) > 0)
                    {
                        foreach($criminalDetail as $k=>$v)
                        {
                            $getPoliceDetail = $this->db->query('select * from police where police_id='.$v['policeThanaId'])->result_array();
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$v['aadharNumber'].'"')->result_array();
                            $getFirDetail = $this->db->query('select * from crimeFir where crimeId="'.$v['Id'].'"')->result_array();
                ?>
                <div class="col-lg-12 col-xl-12 col-md-12 mt-4 col-sm-12 align-items-center">
                    <div class="card mb-4 w-100">
                        <div class="card-body px-4">
                            <div class="row align-items-center mt-3" style="justify-content:space-evenly">
                                <div class="col-md-6 col-sm-12 col-lg-5 col-xl-4 mb-3">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner" id="photosspan">
                                            <div class="carousel-item active">
                                                <a href="<?php echo base_url(); ?><?php echo $v['photo']; ?>"  data-lightbox="roadtrip">
                                                    <img src="<?php echo base_url().''.$v['photo']; ?>" style="width:100%;height:250px;max-width:100%!important;" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <?php 
                                        if(count($getUserDetail) > 0 || $v['personName'] != '')
                                        {
                                    ?>
                                    <div class="row border border-2 border-dark mb-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <h5 class="text-danger"><b class="text-dark">Criminal Name - </b><?php echo (count($getUserDetail) > 0 ? $getUserDetail[0]['aadharname'] : $v['personName']); ?></h5>
                                            <h5 class="text-primary mb-0"><b class="text-dark">Aadhaar No. - </b><?php echo (count($getUserDetail) > 0 ? substr_replace($getUserDetail[0]['aadhar_id'],'xxxxxxxx',0,8) : substr_replace($v['aadharNumber'],'xxxxxxxx',0,8)); ?></h5>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="row mb-3">
                                        <div class="col-lg-12 col-sm-12 col-md-12 px-0">
                                            <?php 
                                                if(count($getFirDetail) > 0)
                                                {
                                            ?>
                                            <div class="table-responsive" style="max-height:300px;overflow-x:auto;">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>FIR Date</th>
                                                            <th>FIR No</th>
                                                            <th>IPC Dhara</th>
                                                            <th>POLICE THANA</th>
                                                            <th>Message</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
                                                        foreach($getFirDetail as $k1=>$v1)
                                                        {
                                                            $dharaNumber = array();
                                                            if($v1['ipcDhara'] != NULL)
                                                            {
                                                                $getDharaDetails = $this->db->query('select * from ipcDhara where Id in('.$v1['ipcDhara'].')')->result_array();
                                                                foreach($getDharaDetails as $k2=>$v2)
                                                                {
                                                                    array_push($dharaNumber,$v2['ipcNumber']);   
                                                                }
                                                            }
                                                    ?>
                                                    <tr>
                                                        <td><?php echo ($v1['firDate'] != NULL ? date('d-m-Y',strtotime($v1['firDate'])) : '-') ?></td>
                                                        <td><?php echo ($v1['firNumber'] != NULL ? $v1['firNumber'] : '-') ?></td>
                                                        <td><?php echo ($v1['ipcDhara'] != NULL ? implode(',',$dharaNumber) : '-') ?></td>
                                                        <td><?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['thanaName'].', ' : '') ?><?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['district'] : '') ?>-<?php echo (count($getPoliceDetail) > 0 ? $getPoliceDetail[0]['state'] : '') ?></td>
                                                        <td><?= ($v['message'] != '' ? $v['message'] : '-'); ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } }else{ ?>
                <div class="w-100">
                    <h5 class="card-title py-2 my-3 text-center text-primary">No Criminal Records</h5>
                </div>    
                <?php } ?>
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