<style>
    .social a.btn-circle .btn-google {
                color: #fff;
                background-color: #e44134;
                border-color: transparent;
            }
            .btn-police1{
                 color: #fff!important;
                background-color: green!important;
                border-color: transparent;
            }
             .btn-police2{
                 color: #fff!important;
                background-color: #e44134!important;
                border-color: transparent;
            }
             .btn-police3{
                 color: #fff!important;
                background-color: #5daed5!important;
                border-color: transparent;
            }
             .btn-police4{
                 color: #fff!important;
                background-color: orange!important;
                border-color: transparent;
            }
            .btn-group-sm>.btn.btn-circle, .btn.btn-circle.btn-sm {
                    width: 2.8rem;
                    height: 2.8rem;
                    font-size: .8rem;
                }
                .btn.btn-circle {
                    padding: 0;
                    border-radius: 100%!important;
                    width: 2.2rem;
                    height: 2.2rem;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1rem;
                    line-height: 1;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    margin-right:2px;
                }
                .btn:hover {
color: var(--bs-btn-hover-color);
background-color: var(--bs-btn-hover-bg);
border-color: var(--bs-btn-hover-border-color);
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
</style>

<?php 
    if(count($unknownperson) == 0)
    {
?>
<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="px-0 col-lg-10 col-xl-8 col-md-12 col-sm-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3 w-100">

            <div class="card-body p-3">
              <div class="pb-2">
                <h5 class="card-title text-center pb-0 pt-2">Person Details</h5>
              </div>
              <?php 
                    if(count($persondetail) > 0)
                    {
                        if($checkDetail[0]['idType'] == 'gold')
                        {
                            if($checkDetail[0]['isMissing'] == 1)
                            {
                                $missingperson = $this->db->query('select * from missingperson where goldId="'.$checkDetail[0]['idNumber'].'" and isFound = 0')->result_array();   
                            }else{
                                $missingperson = array();
                            }
                        }else if($checkDetail[0]['idType'] == 'vehicle')
                        {
                            if($checkDetail[0]['isMissing'] == 1)
                            {
                                $missingperson = $this->db->query('select * from missingperson where vehicleNumber="'.$checkDetail[0]['idNumber'].'" and isFound = 0')->result_array();   
                            }else{
                                $missingperson = array();
                            }
                        }
                        else{
                            $missingperson = $this->db->query('select * from missingperson where missingaadhar="'.$persondetail[0]['aadhar_id'].'" and isFound = 0')->result_array();   
                        }
                        if(count($missingperson) > 0)
                        {
                            
              ?>
              <div class="col-lg-12 col-md-12 col-sm-12 d-flex flex-column">
                <div class="row px-3 align-items-center">
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div class="row mt-3">
                            <div class="col-md-12 text-center border border-2 border-danger p-3">
                                <h4 class="text-danger text-uppercase"><b>Missing</b></h4>
                                <h5 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;font-size:17px;">Missing Date : <span id="missingdatespan"><?php echo date('d-m-Y',strtotime($missingperson[0]['missingdate'])); ?></span></span></h5>
                            </div>
                        </div>
                        <?php 
                            $rewardcount = 0;
                            foreach($missingperson as $k=>$v)
                            {
                                if($v['rewardamount'] != 0)
                                {
                                    $rewardcount++;
                        ?>
                        <?php } } ?>
                        <?php if($rewardcount > 0){ ?>
                        <div class="row mt-3">
                            <div class="col-md-12 text-center  p-3">
                                <select class="form-control border border-2 border-danger text-center" style="font-weight:bold;font-size:1.3rem;appearance:auto;" id="reward" onchange="showRewardsAccordingly(this.value)">
                                    <?php 
                                        foreach($missingperson as $k=>$v)
                                        {
                                            if($v['rewardamount'] != 0)
                                            {
                                    ?>
                                    <option value="<?php echo $v['Id']; ?>"><b>Reward - ₹<?php echo ($v['rewardamount'] != NULL ? $v['rewardamount'] : '0' ); ?></b></option>
                                    <?php } } ?>
                                </select>
                            </div>
                        </div>
                        <?php } ?>
                        <?php 
                            if($missingperson[0]['firdate'] != NULL)
                            {
                        ?>
                        <div class="row mt-3">
                            <div class="col-md-12 text-center border border-2 border-danger p-3">
                                <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Date : </span> <span id="missingfirdate"><?php echo date('d-m-Y',strtotime($missingperson[0]['firdate'])); ?></span></h6>
                            </div>
                        </div>
                        <?php } ?>
                        <?php 
                            if($missingperson[0]['firpolicethananame'] != NULL)
                            {
                        ?>
                        <div class="row mt-3">
                            <div class="col-md-12 text-center border border-2 border-danger p-3">
                                <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana & Address : </span> <span id="firthanaaddress"><?php echo (($missingperson[0]['firpolicethananame'] != NULL ? ($missingperson[0]['firpolicethananame'].',') : '')); ?><?php echo (($missingperson[0]['firstate'] != NULL ? ($missingperson[0]['firstate'].',') : '')); ?><?php echo (($missingperson[0]['firdistrict'] != NULL ? ($missingperson[0]['firdistrict'].',') : '')); ?><?php echo (($missingperson[0]['fircity'] != NULL ? ($missingperson[0]['fircity'].',') : '')); ?><?php echo (($missingperson[0]['firvillage'] != NULL ? ($missingperson[0]['firvillage']) : '')); ?></span></h6>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" id="photosspan">
                                <?php 
                                    if($missingperson[0]['photos'] != NULL)
                                    {
                                        $decode = json_decode($missingperson[0]['photos'],true);   
                                    }else{
                                        $decode = array();
                                    }
                                    if(count($decode) > 0)
                                    {
                                        foreach($decode as $k=>$v)
                                        {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <?php } }else{ 
                                    $getLatestUserPhotos = $this->db->query('select * from missingpersonphotos where missingId='.$missingperson[0]['Id'])->result_array();
                                    foreach($getLatestUserPhotos as $k=>$v)
                                    {
                                ?>
                                <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                    <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
                                <?php } } ?>
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
                </div>
                <?php 
                    $getMissingPersonDetail = $this->db->query('select * from user where aadhar_id="'.$missingperson[0]['missingaadhar'].'"')->result_array();
                    if(count($getMissingPersonDetail) > 0)
                    {
                ?>
                <div class="row mt-2 mx-3 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;"><b>Person Name : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h5 class="text-danger"><b id="personname"><?php echo $getMissingPersonDetail[0]['aadharname']; ?></b></h5>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 mx-3 align-items-center">
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                        <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($missingperson[0]['missingaadhar'],'xxxxxxxx',0,8); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php 
                    
                    $from=new DateTime(date('Y-m-d'));
                    $to   = new DateTime($getMissingPersonDetail[0]['dob']);
                ?>
                <div class="row mt-2 mx-3 align-items-center">
                    <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                        <h6 style="color: black;"><b>Age : </b></h6>
                    </div>
                    <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                        <h6 style="color: black;" id="agespan"><?php echo $from->diff($to)->y; ?>- Years</h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 mx-3 align-items-center">
                    <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                        <h6 style="color: black;"><b>Gender : </b></h6>
                    </div>
                    <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                        <h6 style="color: black;" id="genderspan"><?php echo $getMissingPersonDetail[0]['gender']; ?></h6>
                    </div>
                </div>
                <div class="bg-dark row mt-2 mx-3 p-2">
                    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                        <label class="text-light"><b>Person's Other Details</b></label>
                    </div>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Date of Birth : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="dobspan"><?php echo date('d-m-Y',strtotime($getMissingPersonDetail[0]['dob'])); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div id="userproperty">
                    <?php 
                        $getUserProperty = $this->db->query('select * from userproperty where personId='.$missingperson[0]['Id'])->result_array();
                        if(count($getUserProperty) > 0)
                        {
                            foreach($getUserProperty as $k=>$v)
                            {
                                $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['userSubCategory'].' and isDeleted=0')->result_array();
                                if(count($getSubCategoryName) > 0)
                                {
                                    $getCategoryName = $this->db->query('select * from categories where Id='.$getSubCategoryName[0]['categoryId'])->result_array();   
                                }else{
                                    $getCategoryName = array();
                                }
                    ?>
                    <?php 
                        if(count($getCategoryName) > 0)
                        {
                    ?>
                    <div class="row mt-2 p-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <?php } ?>
                    <?php } } ?>
                </div>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="careofspan"><?php echo $getMissingPersonDetail[0]['careof']; ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;"><b>Current Address : </b></h6>
                    </div>
                    <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                        <?php 
                            if($getMissingPersonDetail[0]['curaddress'] == NULL)
                            {
                        ?>
                        <h6 style="color: black;" id="addressspan"><?php echo (($getMissingPersonDetail[0]['landmark'] != '') ? $getMissingPersonDetail[0]['landmark'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['locality'] != '') ? $getMissingPersonDetail[0]['locality'] : ''); ?></h6>
                        <?php }else{ ?>
                        <h6 style="color: black;" id="addressspan"><?php echo (($getMissingPersonDetail[0]['curaddress'] != '') ? $getMissingPersonDetail[0]['curaddress'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['curcity'] != '') ? $getMissingPersonDetail[0]['curcity'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['curdistrict'] != '') ? $getMissingPersonDetail[0]['curdistrict'].',' : ''); ?><?php echo (($getMissingPersonDetail[0]['curstate'] != '') ? $getMissingPersonDetail[0]['curstate'].',' : ''); ?></h6>
                        <?php } ?>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php 
                    if($getMissingPersonDetail[0]['isMarried'] != NULL)
                    {
                ?>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Marital Status : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="maritalstatusspan"><?php echo ($getMissingPersonDetail[0]['isMarried'] == 1 ? 'Married' : 'Single'); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php } ?>
                <?php 
                    if($getMissingPersonDetail[0]['spouseAadhar'] != NULL)
                    {
                        $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$getMissingPersonDetail[0]['spouseAadhar'].'"')->result_array();   
                    }else{
                        $getSpouseDetail = array();
                    }
                    if(count($getSpouseDetail) > 0)
                    {
                ?>
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;"><b>Spouse Name : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: green;text-transform:uppercase;"><?php echo ((count($getSpouseDetail) > 0) ? ($getSpouseDetail[0]['aadharname'].','.$getSpouseDetail[0]['vtc'].','.$getSpouseDetail[0]['state']) : '-'); ?></h6>
                    </div>
                </div>
                <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                <?php } ?>
                
                <div class="row mt-2 align-items-center">
                    <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                        <h6 style="color: black;font-size:0.9em;color:red"><b>Other Detail : </b></h6>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                        <h6 style="color: black;" id="otherdetailspan"><?php echo $missingperson[0]['otherDetail']; ?></h6>
                    </div>
                </div>
                <div class="row mt-2 px-md-4 px-sm-3">
                    <div class="col-md-12 text-center border border-dark px-1 py-3">
                        
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6 mb-3">
                                    <h6 class="text-dark text-uppercase mb-0"> 
                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" class="phone w-lg-max-content btn btn-primary btn-style-green mt-2"><i class="fa fa-phone"></i> CALL FAMILY MEMBER</a>
                                    </h6>  
                                </div>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6 px-3 ps-md-0">
                                    <h6 class="text-dark text-uppercase mb-0 mb-3"> 
                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-red mt-2"><i class="fa fa-phone"></i> CALL FIR THANA</a>
                                    </h6>  
                                </div>
                            </div>
                            <?php }else{ ?>
                            <h6 class="text-dark text-uppercase mb-0 py-3">To Contact to person's Family Member 
                                <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="d-block mx-auto d-md-inline phone btn btn-primary btn-style-four mt-3 mt-md-0">
                                    <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                         
                                    <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                    							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                    							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                    							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                    							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                    							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                    <path d="M41.1,15.7
                                    							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                    							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                    <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                    							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                    </svg>
                                    <span>Click Here</span>
                                </a>
                            </h6>
                            <?php } ?>
                        
                    </div>
                </div>
                <?php }else{ 
                    $getMissingFullDetails = $this->db->query('select * from missingpersondetail where missingId='.$missingperson[0]['Id'])->result_array();
                ?>
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                            <h6 style="color: black;"><b>Person Name : </b></h6>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                            <h5 class="text-danger"><b id="personname"><?php echo $missingperson[0]['missingname']; ?></b></h5>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                            <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                            <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($missingperson[0]['missingaadhar'],'xxxxxxxx',0,8); ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <?php 
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($getMissingFullDetails[0]['dob']);
                    ?>
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;"><b>Age : </b></h6>
                        </div>
                        <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;" id="agespan"><?php echo $from->diff($to)->y; ?>- Years</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;"><b>Gender : </b></h6>
                        </div>
                        <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;" id="genderspan"><?php echo $getMissingFullDetails[0]['gender']; ?></h6>
                        </div>
                    </div>
                    <div class="bg-dark row mt-2 mx-3 p-2">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <label class="text-light"><b>Person's Other Details</b></label>
                        </div>
                    </div>
                    <div class="row mt-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Date of Birth : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;" id="dobspan"><?php echo date('d-m-Y',strtotime($getMissingFullDetails[0]['dob'])); ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div id="userproperty">
                        <?php 
                            $getUserProperty = $this->db->query('select * from userproperty where personId='.$missingperson[0]['Id'])->result_array();
                            if(count($getUserProperty) > 0)
                            {
                                foreach($getUserProperty as $k=>$v)
                                {
                                    $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['userSubCategory'].' and isDeleted=0')->result_array();
                                    if(count($getSubCategoryName) > 0)
                                    {
                                        $getCategoryName = $this->db->query('select * from categories where Id='.$getSubCategoryName[0]['categoryId'])->result_array();   
                                    }else{
                                        $getCategoryName = array();
                                    }
                        ?>
                        <?php 
                            if(count($getCategoryName) > 0)
                            {
                        ?>
                        <div class="row mt-2 p-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php } ?>
                        <?php } } ?>
                    </div>
                    <div class="row mt-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;" id="careofspan"><?php echo $getMissingFullDetails[0]['fatherName']; ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div class="row mt-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Other Detail : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;" id="otherdetailspan"><?php echo $missingperson[0]['otherDetail']; ?></h6>
                        </div>
                    </div>
                    <div class="row mt-2 px-md-5 px-sm-3">
                        <div class="col-md-12 text-center border border-dark px-1 pb-3">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6 mt-3">
                                    <h6 class="text-dark text-uppercase mb-0"> 
                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-green mt-2"><i class="fa fa-phone"></i> CALL FAMILY MEMBER</a>
                                    </h6>  
                                </div>
                                <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                    <h6 class="text-dark text-uppercase mb-0 mt-3"> 
                                        <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-red mt-2"><i class="fa fa-phone"></i> CALL FIR THANA</a>
                                    </h6>  
                                </div>
                            </div>
                            <?php }else{ ?>
                            <h6 class="text-dark text-uppercase mb-0">To Contact to person's Family Member 
                                <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3 mt-md-0">
                                    <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                         
                                    <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                    							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                    							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                    							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                    							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                    							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                    <path d="M41.1,15.7
                                    							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                    							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                    <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                    							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                    </svg>
                                    <span>Click Here</span>
                                </a>
                            </h6>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="row justify-content-center mt-5">
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <?php 
                            if($this->session->userdata('user_login') == 'yes'){
                        ?>
                        <a href="<?php echo base_url(); ?>user/search_person_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php }else{ ?>
                            <a href="<?php echo base_url(); ?>landing/checkperson" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                        <?php } ?>
                    </div>
                    <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <a href="<?php echo base_url(); ?>landing" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                    </div>
                </div>
            </div>
              <?php }else{ ?>
                  <form class="row g-3 needs-validation justify-content-center" method="post" action="<?php echo base_url(); ?>user/step2/do_register" novalidate id="registerForm">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-sm-12 col-lg-6 mt-3">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php 
                                            $getLatestUserPhotos = $this->db->query('select * from userphotos where userId='.$persondetail[0]['uid'])->result_array();
                                            if(count($getLatestUserPhotos) > 0)
                                            {
                                                foreach($getLatestUserPhotos as $k=>$v)
                                                {
                                        ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } }else{ 
                                            if($persondetail[0]['facematchphoto'] != NULL)
                                            {
                                        ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?><?php echo $persondetail[0]['facematchphoto']; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$persondetail[0]['facematchphoto']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                            <a href="<?php echo base_url(); ?><?php echo $persondetail[0]['aadharphoto']; ?>"  data-lightbox="roadtrip">
                                                <img src="<?php echo base_url().''.$persondetail[0]['aadharphoto']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                        <?php } } ?>
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
                        </div>
                    </div>
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                            <h6 style="color: black;"><b>Person Name : </b></h6>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                            <h5 class="text-success"><b><?php echo $persondetail[0]['aadharname']; ?></b></h5>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                            <h6 style="color: black;"><b>Aadhar Number : </b></h6>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                            <h6 style="color: black;" id="aadharNumber"><?php echo substr_replace($persondetail[0]['aadhar_id'],'xxxxxxxx',0,8); ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <?php 
                        $from=new DateTime(date('Y-m-d'));
                        $to   = new DateTime($persondetail[0]['dob']);
                    ?>
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;"><b>Age : </b></h6>
                        </div>
                        <div class="text-left col-md-6 col-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;"><?php echo $from->diff($to)->y; ?>- Years</h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div class="row mt-2 mx-3 align-items-center">
                        <div class="text-end col-md-6 col-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;"><b>Gender : </b></h6>
                        </div>
                        <div class="text-left col-6 col-md-6 col-sm-12 col-lg-6">
                            <h6 style="color: black;"><?php echo $persondetail[0]['gender']; ?></h6>
                        </div>
                    </div>
                    <div class="bg-dark row mt-2 mx-0 p-2">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <label class="text-light"><b>Person's Other Details</b></label>
                        </div>
                    </div>
                    <div class="row mt-2 p-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Date of Birth : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;"><?php echo date('d-m-Y',strtotime($persondetail[0]['dob'])); ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div id="userproperty">
                        <?php 
                            $getUserProperty = $this->db->query('select * from userOtherInfo where userId='.$persondetail[0]['uid'])->result_array();
                            if(count($getUserProperty) > 0)
                            {
                                foreach($getUserProperty as $k=>$v)
                                {
                                    $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['subCategoryId'].' and isDeleted=0')->result_array();
                                    if(count($getSubCategoryName) > 0)
                                    {
                                        $getCategoryName = $this->db->query('select * from categories where Id='.$getSubCategoryName[0]['categoryId'])->result_array();   
                                    }else{
                                        $getCategoryName = array();
                                    }
                        ?>
                        <?php 
                            if(count($getCategoryName) > 0)
                            {
                        ?>
                        <div class="row align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php } ?>
                        <?php } } ?>
                    </div>
                    <div class="row mt-2 p-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;"><?php echo $persondetail[0]['careof']; ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <div class="row mt-2 p-2 align-items-center" id="addressparent">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;"><b>Current Address : </b></h6>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                            <?php 
                                if($persondetail[0]['curaddress'] == NULL)
                                {
                            ?>
                            <h6 style="color: black;"><?php echo (($persondetail[0]['landmark'] != '') ? $persondetail[0]['landmark'].',' : ''); ?><?php echo (($persondetail[0]['locality'] != '') ? $persondetail[0]['locality'] : ''); ?></h6>
                            <?php }else{ ?>
                            <h6 style="color: black;"><?php echo (($persondetail[0]['curaddress'] != '') ? $persondetail[0]['curaddress'].',' : ''); ?><?php echo (($persondetail[0]['curcity'] != '') ? $persondetail[0]['curcity'].',' : ''); ?><?php echo (($persondetail[0]['curdistrict'] != '') ? $persondetail[0]['curdistrict'].',' : ''); ?><?php echo (($persondetail[0]['curstate'] != '') ? $persondetail[0]['curstate'].',' : ''); ?></h6>
                            <?php } ?>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <?php 
                        if($persondetail[0]['isMarried'] != NULL)
                        {
                    ?>
                    <div class="row mt-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Marital Status : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: black;" id="maritalstatusspan"><?php echo ($persondetail[0]['isMarried'] == 1 ? 'Married' : 'Single'); ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <?php } ?>
                    <?php 
                        if($persondetail[0]['spouseAadhar'] != NULL)
                        {
                            $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$persondetail[0]['spouseAadhar'].'"')->result_array();   
                        }else{
                            $getSpouseDetail = array();
                        }
                        if(count($getSpouseDetail) > 0)
                        {
                    ?>
                    <div class="row mt-2 align-items-center">
                        <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                            <h6 style="color: black;font-size:0.9em;"><b>Spouse Name : </b></h6>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                            <h6 style="color: green;text-transform:uppercase;"><?php echo ((count($getSpouseDetail) > 0) ? ($getSpouseDetail[0]['aadharname'].','.$getSpouseDetail[0]['vtc'].','.$getSpouseDetail[0]['state']) : '-'); ?></h6>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                    <?php } ?>
                    <?php 
                        if($this->session->userdata('user_login') == 'yes'){
                    ?>
                    <div class="row mt-2 align-items-center px-md-5 px-sm-3 justify-content-center">
                        <div class="col-md-12 text-center border border-dark p-3">
                            <h6 class="text-dark">
                                <!--<span class="mt-2">Now you can contact to person's Family Member </span>-->
                                <?php 
                                    if($persondetail[0]['wellrel1'] != NULL)
                                    {
                                        $getRelation = $this->db->query('select * from relations where Id='.$persondetail[0]['wellrel1'])->result_array();
                                ?>
                                <a href="tel:<?php echo $persondetail[0]['well1']; ?>" id="contactspan" style="width:max-content;" class="phone btn btn-primary btn-style-green mt-2">
                                    <i class="fa fa-phone"></i> CALL to <?php echo ($persondetail[0]['wellrel1'] != 0 ? $getRelation[0]['relationName'] : 'Family Member'); ?>
                                </a>
                                <?php }else if($persondetail[0]['wellrel2'] != NULL){ 
                                    $getRelation = $this->db->query('select * from relations where Id='.$persondetail[0]['wellrel2'])->result_array();
                                ?>
                                <a href="tel:<?php echo $persondetail[0]['well2']; ?>" id="contactspan" style="width:max-content;" class="phone btn btn-primary btn-style-green mt-2">
                                    <i class="fa fa-phone"></i> CALL to <?php echo ($persondetail[0]['wellrel2'] != 0 ? $getRelation[0]['relationName'] : 'Family Member'); ?>
                                </a>
                                <?php }else if($persondetail[0]['wellrel3'] != NULL){ 
                                    $getRelation = $this->db->query('select * from relations where Id='.$persondetail[0]['wellrel3'])->result_array();
                                ?>
                                <a href="tel:<?php echo $persondetail[0]['well3']; ?>" id="contactspan" style="width:max-content;" class="phone btn btn-primary btn-style-green mt-2">
                                    <i class="fa fa-phone"></i> CALL to <?php echo ($persondetail[0]['wellrel3'] != 0 ? $getRelation[0]['relationName'] : 'Family Member'); ?>
                                </a>
                                <?php }else{ ?>
                                    <a href="tel:<?php echo $persondetail[0]['registration_mobile']; ?>" id="contactspan" style="width:max-content;" class="phone btn btn-primary btn-style-green mt-2">
                                        <i class="fa fa-phone"></i> CALL FAMILY MEMBER
                                    </a>
                                <?php } ?>
                            </h6>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="row mt-2 align-items-center px-md-5 px-sm-3 justify-content-center">
                        <div class="col-md-12 text-center border border-dark p-3">
                            <h6 class="text-dark mb-0">
                                <span class="mb-3">To Contact to person's Family Member </span>
                                <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mt-3 mt-md-0">
                                    <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                         
                                    <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                    							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                    							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                    							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                    							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                    							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                    <path d="M41.1,15.7
                                    							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                    							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                    <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                    							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                             C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                    </svg>
                                    <span>Click Here</span>
                                </a>
                            </h6>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row justify-content-center">
                        <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <a href="<?php echo base_url(); ?>user/search_person_details" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                            <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>landing/checkperson" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                            <?php } ?>
                        </div>
                        <div class="col-md-auto col-lg-auto col-sm-12 mt-2">
                        <a href="<?php echo base_url(); ?>landing" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                    </div>
                    </div>
                </form>
              <?php } } ?>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</div>
<?php }else{ ?>
<div class="container">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container px-0">
      <div class="row mx-0 justify-content-center">
        <div class="px-0 col-lg-12 col-xl-8 col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card w-100">
            <div class="card-body pb-0 pt-0 px-0 w-100">
                <div class="px-0 col-lg-12 col-md-12 col-sm-12 d-flex flex-column mx-lg-auto">
                    <div class="row mx-0 align-items-center" style="background:#f78b77;padding:0.5rem;">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <h1 class="text-light mb-0" style="font-size: 1.5rem;"><b>लापता</b></h1>
                        </div>
                    </div>
                    <div class="row mx-0 align-items-center justify-content-center">
                        <div class="col-md-6 col-sm-12 col-lg-6 px-0">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" id="photosspan">
                                    <?php
                                        $getLatestUserPhotos = $this->db->query('select * from unknownphotos where unknownId='.$unknownperson[0]['id'])->result_array();
                                        if(count($getLatestUserPhotos) > 0)
                                        {
                                            foreach($getLatestUserPhotos as $k=>$v)
                                            {
                                    ?>
                                    <div class="carousel-item <?php if($k == 0){ echo "active"; } ?>">
                                        <a href="<?php echo base_url(); ?><?php echo $v['photourl']; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().''.$v['photourl']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <?php } }else{ ?>
                                    <div class="carousel-item active">
                                        <a href="<?php echo base_url(); ?><?php echo $unknownperson[0]['Photo']; ?>"  data-lightbox="roadtrip">
                                            <img src="<?php echo base_url().''.$unknownperson[0]['Photo']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                        </a>
                                    </div>
                                    <?php } ?>
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
                    </div>
                    <div class="row align-items-center mt-3 mx-0">
                        <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                            <h6 class="mb-0">Application No: - <span style="color:back;"><?php echo $unknownperson[0]['Application_no'];?></span></h6>
                        </div>
                    </div>
                    <div class="row mx-0 justify-content-center">
                        <div class="col-lg-6 col-md-6 col-12 px-0" style="top:-50px!important;background:white;height:auto;min-height:150px;">
                            <div class="row mx-0 align-items-center justify-content-center">
                                <div class="col-md-12 px-0 col-12 mt-1 col-sm-12 col-lg-12 text-center">
                                    <h4 class="text-dark text-uppercase"><b id="personname">Name:- <?php echo ($unknownperson[0]['person_name'] != '' ? $unknownperson[0]['person_name'] : 'UNKNOWN'); ?></b></h4>
                                </div>
                            </div>
                            <div class="row align-items-center mx-0">
                                <div class="col-6">
                                    <button type="button" style="color: white;background:#616161;width:100%;padding:0.4rem 1rem;"><b><?php echo ($unknownperson[0]['Gender'] == 'boy' ? 'Male' : 'Female'); ?></b></button>
                                </div>
                                <div class="col-6">
                                    <button type="button" style="color: white;background:#616161;width:100%;padding:0.4rem 1rem;"><b><?php echo $unknownperson[0]['Age']; ?> YEARS</b></button>
                                </div>
                            </div>
                            <?php 
                                if($unknownperson[0]['Message'] != '')
                                {
                            ?>
                            <div class="row align-items-center mt-3 mx-0">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <p class="mb-0"><?php echo $unknownperson[0]['Message'] ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <?php 
                                $getUserDetail = $this->db->query('select * from user where uid='.$unknownperson[0]['userId'])->result_array();
                            ?>
                            <div class="row align-items-center mt-3 mx-0">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="mb-0">Uploaded By: - <?php echo $getUserDetail[0]['aadharname'].', '. $getUserDetail[0]['state'].', '.$getUserDetail[0]['district'];?></h6>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3 mx-0">
                                <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                    <h6 class="mb-0">Uploaded Date: - <span style="color:grey;"><?php echo date('d-m-Y H:i A',strtotime($unknownperson[0]['dateCreated']));?></span></h6>
                                </div>
                            </div>
                            <?php 
                                if($this->session->userdata('user_login') == 'yes'){
                            ?>
                            <?php 
                                if($unknownperson[0]['well1'] != NULL || $unknownperson[0]['well2'] != NULL || $unknownperson[0]['well3'] != NULL)
                                {
                            ?>
                            <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                <div class="col-md-12 text-center">
                                    <h6 class="text-dark">
                                        <?php 
                                            if($unknownperson[0]['well1'] != NULL)
                                            {
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well1']; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php }
                                            if($unknownperson[0]['well2'] != NULL){ 
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well2']; ?>" class="btn btn-circle btn-sm btn-police2 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php }
                                            if($unknownperson[0]['well3'] != NULL){ 
                                        ?>
                                        <a href="tel:<?php echo $unknownperson[0]['well3']; ?>" class="btn btn-circle btn-sm btn-police3 mt-2">
                                            <i class="fa fa-phone"></i>
                                        </a>
                                        <?php } ?>
                                    </h6>
                                </div>
                            </div>
                            <?php }else{ 
                                $mobile = '';
                                if($unknownperson[0]['policeId'] != NULL)
                                {
                                    $mobile = $getPoliceDetail[0]['registration_mobile'];
                                }else{
                                    $mobile = $getngoDetail[0]['registration_mobile'];
                                }
                                
                            ?>
                                <div class="row align-items-center mx-0 mt-3 justify-content-center" style="position:relative;">
                                    <div class="col-md-12 text-center">
                                        <h6 class="text-dark">
                                            <a href="tel:<?php echo $mobile; ?>" class="btn btn-circle btn-sm btn-police1 mt-2">
                                                <i class="fa fa-phone"></i>
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php }else{ ?>
                            <div class="row align-items-center my-3 justify-content-center mx-0">
                                <div class="col-auto text-center">
                                    <h6 class="text-dark mb-0">
                                        <span class="mb-3">To Contact </span>
                                            <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;color:black!important;" class="phone btn btn-primary btn-style-four mb-3 mt-md-0">
                                            <svg version "1.1" id="phone" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3org/1999/xlink" x="0px" y="0px" viewBox="0 0 82 82" style="enable-background:new 0 0 82 82;" xml:space="preserve">
                                                 
                                            <path d="M64.5,78.2c1.7-1.9,3.6-3.6,5.4-5.4c2.6-2.7,2.7-5.9,0-8.6c-3.1-3.2-6.3-6.3-9.4-9.4
                                            							c-2.6-2.6-5.8-2.6-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-0.1,0.1-0.3,0.2-0.4,0.3l-1.3,1.3c-0.4,0.2-0.7,0.2-1.2,0
                                            							c-1.3-0.7-2.6-1.2-3.8-2c-5.7-3.6-10.5-8.2-14.7-13.4c-2.1-2.6-4-5.3-5.3-8.4c-0.2-0.5-0.2-0.9,0.1-1.3l1.3-1.3
                                            							c0.1-0.1,0.1-0.2,0.2-0.3c0.6-0.6,1.2-1.1,1.8-1.7c1.4-1.3,2.7-2.7,4.1-4.1c2.7-2.7,2.7-5.9,0-8.6c-1.5-1.5-3.1-3.1-4.6-4.6
                                            							c-1.6-1.6-3.2-3.2-4.8-4.8c-2.6-2.5-5.8-2.5-8.4,0c-2,1.9-3.9,3.9-5.9,5.9c-1.9,1.8-2.8,3.9-3,6.5c-0.3,4.1,0.7,8,2.1,11.8
                                            							C5.2,43.8,9.6,50.7,15,57.1c7.2,8.6,15.9,15.4,26,20.4c4.6,2.2,9.3,3.9,14.4,4.2C58.9,81.8,62,81,64.5,78.2z"></path>
                                            <path d="M41.1,15.7
                                            							c-0.7,0-1.5,0.1-2.2,0.4c-1.7,0.8-2.5,2.8-2,4.8c0.4,1.8,2,3,3.9,3c4.6,0.1,8.6,1.5,12,4.6c3.7,3.4,5.4,7.7,5.6,12.8
                                            							c0,0.9,0.4,1.9,0.9,2.6c1.1,1.5,3,1.9,4.8,1.2c1.6-0.6,2.5-2,2.5-3.9c-0.1-7-2.6-12.9-7.5-18.1C54.1,18.4,48.1,15.8,41.1,15.7z"></path>
                                            <path d="M69,11.4c8.5,8.7,12.5,18.1,12.8,29.1c0.1,2.5-1.5,4.2-3.9,4.3c-2.6,0.1-4.3-1.4-4.4-4c-0.1-5.4-1.4-10.5-4-15.2
                                            							C63.5,14.9,54.2,9.3,42,8.6c-1.4-0.1-2.6-0.2-3.6-1.3c-1.2-1.4-1.3-3-0.7-4.6c0.7-1.6,2-2.4,3.8-2.4c8,0.1,15.3,2.4,22,6.8
                                                     C65.7,8.6,67.8,10.4,69,11.4z"></path>
                                            </svg>
                                            <span>Click Here</span>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-auto col-lg-auto col-sm-12 mb-3">
                                <a href="<?php echo base_url(); ?>landing/checkperson" class="btn btn-primary next w-100" style="width:max-content;"><i class="fa fa-search"></i> Search Another</a>
                            </div>
                            <div class="col-md-auto col-lg-auto col-sm-12 mb-3">
                                <a href="<?php echo base_url(); ?>landing" class="btn btn-primary save" style="width:-webkit-fill-available;"><i class="fa fa-home"></i> Homepage</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </section>

</div>
<?php } ?>
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
<script type="text/javascript">
    function showLogin()
    {
        Swal.fire({
          title: '<strong>Signup/Login</strong>',
          allowOutsideClick:false,
          html:
            '<div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><a href="<?php echo base_url(); ?>login" class="w-100 save btn">Login</a></div><div class="col-lg-auto col-sm-12 col-md-auto"><a href="<?php echo base_url(); ?>landing/checkregister" class="w-100 next btn">Signup</a></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })       
    }
    
    function showRewardsAccordingly(Id)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>user/showRewardsAccordingly',
            data:{Id:Id,'_token':'<?php echo $this->security->get_csrf_hash(); ?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                $('#missingdatespan').html(parse.missingdate);
                $('#missingfirdate').html(parse.firdate);
                $('#firthanaaddress').html(parse.firthanaaddress);
                $('#photosspan').html('');
                for(let i=0;i<parse.images.length;i++)
                {
                    if(i == 0)
                    {
                        $('#photosspan').append('<div class="carousel-item active"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="..."></a></div>');      
                    }else{
                        $('#photosspan').append('<div class="carousel-item"><a href="'+parse.images[i]+'"  data-lightbox="roadtrip"><img src="'+parse.images[i]+'" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="..."></a></div>');   
                    }
                }
                $('#personname').html(parse.personname);
                $('#agespan').html(parse.age);
                $('#genderspan').html(parse.gender);
                $('#dobspan').html(parse.dob);
                $('#userproperty').html(parse.userproperty);
                $('#careofspan').html(parse.careof);
                if(parse.address != '')
                {
                    $('#addressspan').html(parse.address);   
                }else{
                    $('#addressparent').addClass('d-none');
                }
                $('#otherdetailspan').html(parse.otherdetail);
                $('#contactspan').attr('href',parse.contact);
            }
        })
    }
    
</script>