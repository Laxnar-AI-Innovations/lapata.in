<style>
    .w-lg-max-content{
        width:100%!important;
    }
    @media screen and (min-width:991px) and (max-width:1220px)
    {   
        .w-lg-max-content{
            width:max-content!important;
        }
    }
    .phone {
        line-height: 32px!important;
        font-size: 20px!important;
        font-weight: bold!important;
        color: #333333!important;
        margin: 0;
        padding: 1rem 2rem!important;
    }
    .phone svg {
      width:18px;
      height:18px;
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
<style>
    .border-danger_new{
      border-color:#d9534f!important;
    }
    .text-left{
        text-align:left!important;
    }
}
</style>

<div class="container">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="px-0 col-lg-8 col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="card mb-3 w-100">

            <div class="card-body p-3">
                <div class="pb-0">
                    <div class="row align-items-end" style="justify-content:end;">
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <h5 class="card-title text-center text-md-start pb-0 pt-2"  >Missing Person Detail</h5>  
                        </div>
                    </div>
                </div>
                <hr>
                <div>
                    <?php 
                        $add_succ=$this->session->flashdata('success');
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
                  <div class="invalid-feedback d-block"><?php echo $del_succ;?></div>
                  <?php } ?>
                </div>
                <div class="row px-4 px-md-0 align-items-center" style="justify-content:center;">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="row mt-3">
                            <div class="col-md-12 text-center border border-3 border-danger p-3">
                                <h4 class="text-danger text-uppercase"><b>Missing</b></h4>
                                <h5 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;font-size:17px;">Missing Date : <span id="missingdatespan"><?php echo date('d-m-Y',strtotime($missingperson[0]['missingdate'])); ?></span></span></h5>
                            </div>
                        </div>
                        <?php 
                            $rewardcount = 0;
                            $getAllmissingperson = $this->db->query('select * from missingperson where missingaadhar="'.$missingperson[0]['missingaadhar'].'" and isFound = 0')->result_array();
                            foreach($getAllmissingperson as $k=>$v)
                            {
                                if($v['rewardamount'] != 0)
                                {
                                    $rewardcount++;
                        ?>
                        <?php } } ?>
                        <?php if($rewardcount > 0){ ?>
                        <div class="row mt-3">
                            <div class="col-md-12 text-center py-3 px-0">
                                <select class="form-control border border-3 border-danger text-center" style="font-weight:bold;font-size:1.3rem;appearance:auto;" id="reward" onchange="showRewardsAccordingly(this.value)">
                                    <?php 
                                        foreach($getAllmissingperson as $k=>$v)
                                        {
                                            if($v['rewardamount'] != 0)
                                            {
                                    ?>
                                    <option value="<?php echo $v['Id']; ?>" <?php if($v['rewardamount'] == $missingperson[0]['rewardamount']){ echo "selected"; } ?>><b>Reward - ₹<?php echo ($v['rewardamount'] != NULL ? $v['rewardamount'] : '0' ); ?></b></option>
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
                            <div class="col-md-12 text-center border border-danger_new border-3 p-3">
                                <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;"><b>FIR Date :</b> </span> <?php echo date('d-m-Y',strtotime($missingperson[0]['firdate'])); ?></h6>
                            </div>
                        </div>
                        <?php } ?>
                        <?php 
                            if($missingperson[0]['firpolicethananame'] != NULL)
                            {
                        ?>
                        <div class="row mt-3">
                            <div class="col-md-12 text-center border border-danger_new border-3 p-3">
                                <h6 class="text-dark text-uppercase mb-0"><span class="text-dark" style="font-weight:bold;">FIR Thana Address : </span> <?php echo (($missingperson[0]['firstate'] != NULL ? ($missingperson[0]['firstate'].',') : '')); ?><?php echo (($missingperson[0]['firdistrict'] != NULL ? ($missingperson[0]['firdistrict'].',') : '')); ?><?php echo (($missingperson[0]['fircity'] != NULL ? ($missingperson[0]['fircity'].',') : '')); ?><?php echo (($missingperson[0]['firvillage'] != NULL ? ($missingperson[0]['firvillage']) : '')); ?></h6>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-5 col-sm-12 col-lg-5 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="<?php echo base_url(); ?><?php echo $missingperson[0]['facematchphoto']; ?>"  data-lightbox="roadtrip">
                                        <img src="<?php echo base_url(); ?><?php echo $missingperson[0]['facematchphoto']; ?>" style="width:100%;height:300px;max-width:100%!important;" class="d-block w-100" alt="...">
                                    </a>
                                </div>
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
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center">
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
                        <?php 
                            $getMissingFullDetails = $this->db->query('select * from missingpersondetail where missingId='.$missingperson[0]['Id'])->result_array();
                            $getUserDetail = $this->db->query('select * from user where aadhar_id="'.$missingperson[0]['missingaadhar'].'"')->result_array();
                            if(count($getUserDetail) > 0)
                            {
                        ?>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php 
                            $from=new DateTime(date('Y-m-d'));
                            $to   = new DateTime($getUserDetail[0]['dob']);
                        ?>
                        <div class="row mt-2 mx-3 align-items-center">
                            <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                <h6 style="color: black;"><b>Religion : </b></h6>
                            </div>
                            <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                <h6 style="color: black;" id="religion"><?php echo ($getUserDetail[0]['religion']); ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
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
                                <h6 style="color: black;" id="genderspan"><?php echo $getUserDetail[0]['gender']; ?></h6>
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
                                <h6 style="color: black;" id="dobspan"><?php echo date('d-m-Y',strtotime($getUserDetail[0]['dob'])); ?></h6>
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
                                        $getCategoryName = $this->db->query('select * from categories where Id='.$v['userCategory'])->result_array();
                                        $getSubCategoryName = $this->db->query('select * from subcategories where Id='.$v['userSubCategory'])->result_array();
                            ?>
                            <div class="row mt-2 align-items-center">
                                <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                    <h6 style="color: black;font-size:0.9em;"><b><?php echo $getCategoryName[0]['englishCategoryName']; ?> : </b></h6>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                    <h6 style="color: black;"><?php echo $getSubCategoryName[0]['englishSubCategoryName']; ?></h6>
                                </div>
                            </div>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <?php } } ?>
                        </div>
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;font-size:0.9em;"><b>Care of : </b></h6>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                <h6 style="color: black;" id="careofspan"><?php echo $getUserDetail[0]['careof']; ?></h6>
                            </div>
                        </div>
                        
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php 
                            if($missingperson[0]['fathercurrentaddress'] == '' || $missingperson[0]['fathercurrentaddress'] == NULL)
                            {
                        ?>
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;"><b>Current Address : </b></h6>
                            </div>
                            <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                <?php 
                                    if($getUserDetail[0]['curaddress'] == NULL)
                                    {
                                ?>
                                <h6 style="color: black;" id="addressspan"><?php echo (($getUserDetail[0]['landmark'] != '') ? $getUserDetail[0]['landmark'].',' : ''); ?><?php echo (($getUserDetail[0]['locality'] != '') ? $getUserDetail[0]['locality'] : ''); ?></h6>
                                <?php }else{ ?>
                                <h6 style="color: black;" id="addressspan"><?php echo (($getUserDetail[0]['curaddress'] != '') ? $getUserDetail[0]['curaddress'].',' : ''); ?><?php echo (($getUserDetail[0]['curcity'] != '') ? $getUserDetail[0]['curcity'].',' : ''); ?><?php echo (($getUserDetail[0]['curdistrict'] != '') ? $getUserDetail[0]['curdistrict'].',' : ''); ?><?php echo (($getUserDetail[0]['curstate'] != '') ? $getUserDetail[0]['curstate'].',' : ''); ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;"><b>Current Address : </b></h6>
                            </div>
                            <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                <h6 style="color: black;" id="addressspan"><?php echo $missingperson[0]['fathercurrentaddress'].','.$missingperson[0]['fatherstate'].','.$missingperson[0]['fatherdistrict'].','.$missingperson[0]['fathercity'].','.$missingperson[0]['fatherpincode']; ?></h6>
                            </div>
                        </div>
                        <?php } ?>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php 
                            if($getUserDetail[0]['isMarried'] != NULL)
                            {
                        ?>
                        <div class="row mt-2 align-items-center">
                            <div class="col-md-6 col-sm-12 col-6 col-lg-6 text-end">
                                <h6 style="color: black;font-size:0.9em;"><b>Marital Status : </b></h6>
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6 col-6 text-left">
                                <h6 style="color: black;" id="maritalstatusspan"><?php echo ($getUserDetail[0]['isMarried'] == 1 ? 'Married' : 'Single'); ?></h6>
                            </div>
                        </div>
                        <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                        <?php } ?>
                        <?php 
                            if($getUserDetail[0]['spouseAadhar'] != NULL)
                            {
                                $getSpouseDetail = $this->db->query('select * from user where aadhar_id="'.$getUserDetail[0]['spouseAadhar'].'"')->result_array();   
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
                        <?php }else{ ?>
                            <hr style="margin-bottom: 0.4rem;margin-top: 0.4rem;">
                            <div class="row mt-2 mx-3 align-items-center">
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-end">
                                    <h6 style="color: black;"><b>Religion : </b></h6>
                                </div>
                                <div class="col-md-6 col-6 col-sm-12 col-lg-6 text-left">
                                    <h6 style="color: black;" id="religion"><?php echo (($getMissingFullDetails[0]['religion'] != NULL) ? $getMissingFullDetails[0]['religion'] : $missingperson[0]['missingreligion']); ?></h6>
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
                                    <h6 style="color: black;" id="genderspan"><?php echo (($getMissingFullDetails[0]['gender'] != NULL) ? $getMissingFullDetails[0]['gender'] : $missingperson[0]['missinggender']); ?></h6>
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
                        <?php } ?>
                        <div class="row mt-2 px-md-4 px-sm-3">
                            <div class="col-md-12 text-center border border-dark px-1 py-4">
                                <?php 
                                    if($this->session->userdata('user_login') == 'yes'){
                                ?>
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6">
                                        <h6 class="text-dark text-uppercase mb-0"> 
                                            <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" class="phone w-lg-max-content btn btn-primary btn-style-green mt-2">
                                                <i class="fa fa-phone"></i> CALL FAMILY MEMBER
                                            </a>
                                        </h6>  
                                    </div>
                                    <div class="col-lg-6 col-xl-6 col-sm-12 col-md-6 px-3 ps-md-0">
                                        <h6 class="text-dark text-uppercase mb-0"> 
                                            <a href="tel:<?php echo $missingperson[0]['mobile1']; ?>" style="width:100%;" class="phone btn btn-primary btn-style-red mt-2">
                                                <i class="fa fa-phone"></i> CALL FIR THANA
                                            </a>
                                        </h6>  
                                    </div>
                                </div>
                                <?php }else{ ?>
                                <h6 class="text-dark text-uppercase mb-0">To Contact to person's Family Member 
                                    <a href="javascript:void(0)" onclick="showLogin()" style="width:max-content;background:white!important;border-radius: 30px!important;" class="d-block mx-auto d-md-inline phone btn btn-primary btn-style-four mt-2">
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
                        <div class="row mt-2 px-md-5 px-sm-3">
                            <div class="col-md-12 text-center text-danger border border-dark px-1 pb-3 p-3" style="font-weight:bold;">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12 col-md-8">
                                        कृपया इस व्यक्ति को खोजने में मेरी मदद करें। कृपया इस लिंक को अधिक से अधिक लोगों को शेयर करने की कृपा करें।  
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-md-4">
                                        <button type="button" class="btn-style-red btn btn-primary d-block w-100 disabled-on-loading" style="background:black!important" onclick="share(this)"> Share <i class="fa fa-share-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
          <div class="share-dialog">
              <header>
                <button class="close-button"><svg><use href="#close"></use></svg></button>
              </header>
              <div class="targets">
                <a class="button">
                  <svg>
                    <use href="#facebook"></use>
                  </svg>
                  <span>Facebook</span>
                </a>
                
                <a class="button">
                  <svg>
                    <use href="#twitter"></use>
                  </svg>
                  <span>Twitter</span>
                </a>
                
                <a class="button">
                  <svg>
                    <use href="#linkedin"></use>
                  </svg>
                  <span>LinkedIn</span>
                </a>
                
                <a class="button">
                  <svg>
                    <use href="#email"></use>
                  </svg>
                  <span>Email</span>
                </a>
              </div>
              <div class="link">
                <div class="pen-url">https://codepen.io/ayoisaiah/pen/YbNazJ</div>
                <button class="copy-link">Copy Link</button>
              </div>
            </div>
            
            <svg class="hidden">
              <defs>
                <symbol id="share-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></symbol>
                
                <symbol id="facebook" viewBox="0 0 24 24" fill="#3b5998" stroke="#3b5998" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></symbol>
                
                <symbol id="twitter" viewBox="0 0 24 24" fill="#1da1f2" stroke="#1da1f2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></symbol>
                
                <symbol id="email" viewBox="0 0 24 24" fill="#777" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></symbol>
                
                <symbol id="linkedin" viewBox="0 0 24 24" fill="#0077B5" stroke="#0077B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></symbol>
                
                <symbol id="close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line></symbol>
              </defs>
            </svg>

          <div class="credits">
            Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
          </div>

        </div>
      </div>
    </div>

  </section>

</div>
<style>
    .hidden {
  display: none;
}

svg {
  width: 20px;
  height: 20px;
  margin-right: 7px;
}

button, .button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: auto;
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: center;
  font-size: 14px;
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: 2px;
  text-transform: capitalize;
  text-decoration: none;
  white-space: nowrap;
  border-radius: 4px;
  border: 1px solid #ddd;
  cursor: pointer;
}

button:hover, .button:hover {
  border-color: #cdd;
}

.share-button, .copy-link {
  padding-left: 30px;
  padding-right: 30px;
}

.share-button, .share-dialog {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.share-dialog {
  display: none;
  width: 95%;
  max-width: 500px;
  box-shadow: 0 8px 16px rgba(0,0,0,.15);
  z-index: -1;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 4px;
  background-color: #fff;
}

.share-dialog.is-open {
  display: block;
  z-index: 2;
}

header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}

.targets {
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
  margin-bottom: 20px;
}

.close-button {
  background-color: transparent;
  border: none;
  padding: 0;
}

.close-button svg {
  margin-right: 0;
}

.link {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border-radius: 4px;
  background-color: #eee;
}

.pen-url {
  margin-right: 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
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
            '<div class="form-group mb-2 row justify-content-center mx-0"><div class="col-lg-auto col-sm-12 col-md-auto mb-3"><a href="<?php echo base_url(); ?>user/newlogin?id=<?php echo $id; ?>" class="w-100 save btn">Login</a></div><div class="col-lg-auto col-sm-12 col-md-auto"><a href="<?php echo base_url(); ?>user/missingregister?id=<?php echo $id; ?>" class="w-100 next btn">Signup</a></div></div></div>',
          showCloseButton: true,
          showCancelButton: false,
          focusConfirm: false,
          showConfirmButton:false
        })       
    }
    
    $('#btnOtp').click(function()
    {
        let val = $('#mobileNumber').val();
        if(val != '')
        {   
            $('#btnOtp').attr('disabled','disabled');
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendMissingLoginOtp',
                data:data,
                timeout: 60000,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success('Otp Sent Successfully');
                        $('#otpdiv').removeClass('d-none');
                        $('#btnOtp').addClass('d-none');
                        $('#mobileNumber').attr('readonly',true);
                    }else{
                        toastr.error('Something Went Wrong');
                        $('#otpdiv').addClass('d-none');
                        $('#btnOtp').removeClass('d-none');
                        $('#mobileNumber').attr('readonly',false);
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            })
        }else{
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    })

    function resendOtp()
    {
        let val = $('#mobileNumber').val();
        let data= new FormData();
        data.append('mobile',val);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
        $.ajax({
            url:'<?php echo base_url(); ?>user/sendMissingLoginOtp',
            data:data,
            timeout: 60000,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    toastr.success('Otp Sent Successfully');
                }else{
                    toastr.error('Something Went Wrong');
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                if (textStatus == 'timeout') {
                    toastr.error('Please Try Again');
                    setTimeout(function()
                    {
                        location.reload();    
                    },2000);
                }
            }
        })
    }

    $('#loginform').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        e.preventDefault();
        if(arr[1].value == '')
        {
            toastr.error('Please Enter Otp');
            return false;   
        }else{
            $('#btnSubmit').attr('disabled','disabled');
            let data = new FormData(this);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:$(this).attr('action'),
                data:data,
                contentType: false,
                cache: false,
                timeout: 60000,
                processData:false,
                type:'post',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        setTimeout(function()
                        {
                          location.href="<?php echo base_url(); ?>user/missingpersondetail/<?php echo $id; ?>";
                        },2000);
                    }else{
                        if(parse.message == 'Invalid Otp')
                        {
                            toastr.error(parse.message);
                            $('#btnSubmit').removeAttr('disabled');
                        }else{
                            toastr.error(parse.message);
                            setTimeout(function()
                            {
                              location.reload();
                            },2000);
                        }
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    if (textStatus == 'timeout') {
                        toastr.error('Please Try Again');
                        setTimeout(function()
                        {
                            location.reload();    
                        },2000);
                    }
                }
            });
        }
    })
    
    function share(ele)
    {
        if (navigator.share) {
            navigator.share({
              title: 'Khoji',
              url: window.location.href
            }).then(() => {
              toastr.success('Thanks for sharing!');
            })
            .catch(console.error);
          } else {
                const shareButton = document.querySelector('.share-button');
                const shareDialog = document.querySelector('.share-dialog');
                const closeButton = document.querySelector('.close-button');
                
                shareButton.addEventListener('click', event => {
                  shareDialog.classList.add('is-open');
                });
                
                closeButton.addEventListener('click', event => {
                  shareDialog.classList.remove('is-open');
                });
          }
    }
    
    function showRewardsAccordingly(Id)
    {
        location.href="<?php echo base_url(); ?>user/missingpersondetail/"+Id;
    }
</script>