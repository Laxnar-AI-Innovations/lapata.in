<style>
.shiva_height p{
    margin-bottom:0.3rem!important;
    font-size:0.8rem!important;
}
::-webkit-scrollbar {
	width: 15px;
}

::-webkit-scrollbar-track {
	background-color: transparent;
}

::-webkit-scrollbar-thumb {
	background-color: var(--black);
}

.heading {
	margin-bottom: 20px;
	font-size: 30px;
	color: var(--black);
	text-transform: uppercase;
	text-align: center;
}

.btn {
	margin-top: 10px;
	display: inline-block;
	padding: 10px 30px;
	cursor: pointer;
	font-size: 17px;
	background-color: var(--light-bg);
	color: var(--black);
	text-transform: capitalize;
	text-align: center;
}

.gallery {
	padding: 20px;
	text-align: center;
	padding-left: 320px;
}

.gallery .image-container {
	/*gap: 15px;*/
	/*columns: 3 350px;*/
}

.gallery .image-container img {
	break-inside: avoid;
	width: 100%;
	background-color: var(--white);
	object-fit: cover;
	cursor: pointer;
	margin-bottom: 10px;
	box-shadow: var(--box-shadow);
}

.gallery .image-container img:hover {
	transform: scale(.95);
}

.side-bar {
	height: -webkit-fill-available;
	width: 300px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1000;
	background-color: var(--white);
	padding: 20px;
	border-right: var(--border);
	overflow-y: scroll;
}

.side-bar::-webkit-scrollbar {
	width: 5px;
}

.side-bar .box {
	border-bottom: var(--border);
	padding: 20px 0;
}

.side-bar .box .title {
	margin-bottom: 10px;
	color: var(--black);
	font-size: 20px;
	text-transform: uppercase;
}

.side-bar .btn {
	margin-left: 5px;
}

.side-bar .btn.active {
	background-color: var(--crimson);
	color: var(--white);
}

.side-bar .box #search-box {
	border: var(--border);
	padding: 12px;
	text-transform: none;
	color: var(--light-black);
	width: 100%;
	font-size: 17px;
}

.side-bar .reset-btn .btn {
	margin-top: 20px;
	width: 100%;
}

#side-menu {
	position: fixed;
	top: 135px;
	right: 50px;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	background-color: var(--white);
	color: var(--black);
	cursor: pointer;
	font-size: 25px;
	z-index: 1100;
	box-shadow: var(--box-shadow);
	border: var(--border);
	display: none;
}

.image-popup {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1200;
	background-color: var(--dark-bg);
	height: 100vh;
	width: 100%;
	display: none;
	align-items: center;
	justify-content: center;
	padding: 100px 20px;
	overflow-y: scroll;
}

.image-popup img {
	width: 600px;
	cursor: pointer;
	border: 10px solid var(--white);
	background-color: var(--white);
}



:root {
	--crimson: crimson;
	--black: #333;
	--white: #fff;
	--light-black: #666;
	--light-bg: #eee;
	--dark-bg: rgba(0, 0, 0, .7);
	--border: 1px solid #999;
	--box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

* {
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
}

select{
    appearance:auto!important;
}

@media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	#side-menu {
		display: block;
	}

	#side-menu.fa-times {
		top: 0;
		left: 300px;
	}

	.side-bar {
		left: -350px;
	}

	.side-bar.active {
		box-shadow: 0 0 0 100vw var(--dark-bg);
		left: 0;
		z-index: 1000;
	}
    .shiva_height{
        height:470px;
        max-height:470px;
    }
}

@media (max-width:768px) {

	.image-popup img {
		width: 100%;
	}
	    .shiva_height{
        height:450px;
        max-height:450px;
    }

}

@media (max-width:450px) {

	#side-menu.fa-times {
		top: 10px;
		left: 10px;
	}

	.side-bar.active {
		padding-top: 70px;
	}
	    .shiva_height{
       height:480px;
        max-height:480px;
    }

}
.margin_tp{
 margin-top: 120px;
    /*background-color: floralwhite;*/
    /*border-radius: 6px 9px;*/
    /*border: 1px solid lightpink;   */
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="<?php if($pn == 3){ echo "container-fluid"; }else{ echo "container-fluid"; } ?>">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-2">
    <div class="<?php if($pn != 2){ if($pn == 1){ echo "container"; }else{ echo "container-fluid"; }}else{ echo "container-fluid"; } ?>">
        <div class="row text-center mt-3 align-items-center">
            <div class="col-md-8 offset-md-1 col-lg-8 offset-lg-2 col-8">
                <h5 class="<?php if($pn == 3){ ?>mb-0<?php } ?>"><b>Search Person By Filter</b></h5>
            </div>
            <div class="col-4 col-md-auto <?php if($pn != 3){ echo "d-none"; } ?>">
                <button type="button" onclick="back(this)" class="btn btn-dark btn-style-grey disabled-on-loading"> <i class="fa fa-arrow-circle-left"></i></button>
            </div>
        </div>
      <div class="row justify-content-center align-items-center">
          <div class="col-lg-6 <?php if($pn == 3){ echo "d-none"; } ?>">
                <div class="px-md-15 px-lg-3">
                    <figure class="mb-6"><img class="img-fluid" src="assets_landing_page/img/illustrations/search person by filter.png" srcset="assets_landing_page/img/illustrations/search person by filter.png" alt=""></figure>
                </div>
            </div>
        <div class="px-0 <?php if($pn == 1){ echo "col-lg-4"; }else{ echo ($pn == 2) ? "col-lg-6" : 'col-lg-12'; } ?> col-md-12 d-flex flex-column align-items-center justify-content-center">

          <div class="<?php if($pn == 2 || $pn == 1){ echo "card"; }else{ echo ""; } ?> mb-3 py-1 px-0 w-100">
                <div class="card-body p-2">
                <form class="row g-3 needs-validation <?php if($pn != 1){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPersonFilterDetails/step1" novalidate id="step1Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <div class="form-floating mb-1 col-12">
                      <input type="number" class="form-control" name="mobileNumber" id="mobileNumber" required placeholder="Mobile Number" onKeyUp="showOtpAccordingly(this.value)">
                      <label for="mobileNumber" class="px-4">Enter Mobile Number</label>
                      <div class="invalid-feedback">Please enter your mobile number.</div>
                    </div>
                    <div class="col-lg-12 col-sm-12 col-md-12 px-lg-1" id="sendOtpDiv">
                        <button type="button" onclick="sendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading disabled"> Send OTP <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                    <div class="form-group col-12 mt-3 d-none" id="otpdiv">
                        <div class="form-floating mb-3">
                          <input type="number" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                          <label for="otp">Enter OTP</label>
                        </div>
                        <button class="btn btn-primary w-100 disabled-on-loading btn-style-green" id="btn2" type="submit"> Next <i class="fa fa-arrow-circle-right"></i></button>
                        <div class="row px-0 mx-0 mt-4" style="justify-content:right;">
                            <div class="col-md-auto col-sm-6 col-8 px-0" style="text-align:right;">
                                <button type="button" onclick="resendOtp(this)" class="btn btn-primary btn-style-five w-100 disabled-on-loading" > Resend OTP <i class="bi bi-bootstrap-reboot"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="row g-3 p-3 align-items-center justify-content-center <?php if($pn != 2){ echo "d-none"; } ?>" method="post" action="<?php echo base_url(); ?>landing/checkPersonFilterDetails/step2" id="step2Form">
                    <?php 
                      $csrf = array(
                        'name' => $this->security->get_csrf_token_name(),
                        'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php 
                        if(isset($_SESSION['filterId']))
                        {
                    ?>
                    <div class="col-lg-12 col-xl-12 col-sm-12 border border-dark p-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="text-center">Enter- <span class="text-danger">Person's Details</span></h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group col-lg-4 col-sm-12 col-md-6">
                                <label style="font-size:1.1rem!important;">Start Date <b class="text-danger">*</b></label>
                                <input type="date" class="form-control" min="<?= date('Y-m-d',strtotime('-3 months')) ?>" value="<?= date('Y-m-d',strtotime('-3 months')) ?>" max="<?= date('Y-m-d'); ?>" name="startDate" id="startDate" required>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-6">
                                <label style="font-size:1.1rem!important;">End Date <b class="text-danger">*</b></label>
                                <input type="date" class="form-control" min="<?= date('Y-m-d',strtotime('-3 months')) ?>" value="<?= date('Y-m-d'); ?>" max="<?= date('Y-m-d'); ?>" name="endDate" id="endDate" required>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">Gender <b class="text-danger">*</b></label>
                                <select class="form-control" name="gender" required id="gender" style="appearance:auto!important;">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">State</label>
                                <select id="facestate" name="state" class="form-control select2">
                                    <option value="">Select State</option>
                                    <option value="All">All</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4" id="distdiv">
                                <label style="font-size:1.1rem!important;">District</label>
                                <select id="faceDistrict" name="district" class="form-control select2">
                                    <option value="">Select District</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4" id="citydiv">
                                <label style="font-size:1.1rem!important;">City</label>
                                <select id="city" name="city" class="form-control select2">
                                    <option value="">Select City</option>
                                </select>
                                <!--<input type="text" class="form-control" name="city" id="city" placeholder="Enter City">-->
                            </div>
                            <?php 
                                $getCategories = $this->db->query('select * from categories where isDeleted=0 order by Id desc')->result_array();
                                $count = 0;
                                if(count($getCategories) > 0)
                                {
                                    foreach($getCategories as $k=>$v)
                                    {
                                        $getSubCategories = $this->db->query('select * from subcategories where categoryId='.$v['Id'].' and isDeleted=0')->result_array();
                                        if(count($getSubCategories) > 0 && ((strtolower($v['englishCategoryName']) == 'height') || strtolower($v['englishCategoryName']) == 'age'))
                                        {
                                            $count++;
                            ?>
                            <div class="form-group col-sm-12 col-md-3 col-lg-4">
                                <label class="text-capitalize" style="font-size:1.1rem!important;"><?= $v['englishCategoryName']; ?></label>  
                                <select class="form-control englishSubCategory" name="<?php echo strtolower($v['englishCategoryName']); ?>" style="appearance:auto!important;">
                                    <option value="">Select <?= $v['englishCategoryName']; ?></option>
                                    <?php 
                                        foreach($getSubCategories as $k1=>$v1)
                                        {
                                    ?>
                                    <option value="<?php echo $v1['Id']; ?>"><?= $v1['englishSubCategoryName']; ?></option>
                                    <?php }  ?>
                                </select>    
                            </div>
                            <?php       
                                        } 
                                    } 
                                }
                            ?>
                            <div class="form-group col-lg-4 col-sm-12 col-md-4">
                                <label style="font-size:1.1rem!important;">Religion</label>
                                <select class="form-control" name="religion" id="religion" style="appearance:auto;">
                                    <?php 
                                        $getReligions = $this->db->query('select * from religions where isDeleted=0')->result_array();
                                        if(count($getReligions) > 0)
                                        {
                                    ?>
                                    <option value="">Select Religion</option>
                                    <?php 
                                        foreach($getReligions as $k=>$v)
                                        {
                                    ?>
                                    <option value="<?php echo $v['religionName']; ?>"><?php echo $v['religionName']; ?></option>
                                    <?php } ?>
                                    <?php }else{ ?>
                                        <option value="Other">Other</option>
                                    <?php } ?>
                                </select>
                            </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 form-group">
                            <label style="font-size:1.1rem!important;">Person Name</label>
                            <input type="text" class="form-control" id="personName" name="personName" placeholder="Person Name">
                        </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-auto col-sm-12 col-md-auto">
                                <button id="btn3" type="submit" class="btn btn-primary btn-style-green disabled-on-loading w-100"> Filter <i class="fa fa-filter"></i></button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </form>
                <div class="row align-items-center justify-content-center <?php if($pn != 3){ echo "d-none"; } ?>">
                    <?php 
                        if(isset($_SESSION['filterId']))
                        {
                            $getData = $this->db->query('select * from searchFilterLogs where Id='.$_SESSION['filterId'])->result_array();
                            if($getData[0]['missingIds'] != NULL && $getData[0]['missingIds'] != '')
                            {
                                $getMissingPerson = $this->db->query('select * from missingperson where Id in('.$getData[0]['missingIds'].')')->result_array();
                    ?>
                    <hr class="mb-2">
                    <h5 class="text-center text-danger">Missing Persons</h5>
                    <hr>
                    <?php 
                        foreach($getMissingPerson as $k=>$row)
                        {
                    ?>
                    <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-1 col-12 col-search pb-2">
                        <div class="card mb-3 shiva_height bg-light" >
                            <div class="card-body px-0">
                                <div class="row align-items-center px-0 mx-0 justify-content-center">
                                    <?php
                                        if($row['facematchphoto'] != '' || $row['facematchphoto'] != NULL)
                                        {
                                    ?>
                                    <div class="col-12 text-end mb-2">
                                        <button type="button" class="btn btn-dark" onclick="share('missing',this,'<?php echo $row['Id']; ?>')" style="background:black!important;color:white!important;padding:10px 15px;"><i class="fa fa-share-alt"></i></button>
                                        <button type="button" class="btn btn-primary" onclick="view('missing',this,'<?php echo $row['Id']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important">Missing Id :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['missingId']; ?></b></p>
                                    </div>
                                    <div class="col-12">
                                        <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                    </div>
                                    <div class="col-5 ">
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['facematchphoto']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-5 ">
                                        <?php if(strtolower($row['missinggender']) == 'male'){ ?>
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        <?php }else{ ?>
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                    <div class="col-7 px-0">
                                        <?php if($row['missingname'] != '' || $row['missingname'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['missingname']??"--" ?></span></p>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                        <?php }else{ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo (ucfirst($row['missinggender'])); ?></span></p>
                                        <?php } ?>
                                    <?php if($row['fatherstate'] != '' || $row['fatherstate'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Address - </b><span style="color:grey;"><?php echo ($row['fatherstate']) ?> , <?php echo ($row['fatherdistrict']) ?> - <?php echo ($row['fathercity']); ?></span></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php if($row['otherDetail'] != '' || $row['otherDetail'] != NULL){ ?>
                                <div class="row col-12 px-4 pt-2" style="max-height:100px">
                                   <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Other Details :- </b><br><span style="color:grey;" class="message"><?php echo $row['otherDetail']??"--"?></span></p> 
                                </div>
                                <?php } ?>
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
                                                 color: #fff;
                                                background-color: #e44134!important;
                                                border-color: transparent;
                                            }
                                             .btn-police3{
                                                 color: #fff;
                                                background-color: #5daed5!important;
                                                border-color: transparent;
                                            }
                                             .btn-police4{
                                                 color: #fff;
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
                                                
                                </style>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 text-center">
                                        <b style="font-size:.8rem!important">Contact To : - Well Wishers </b>
                                    </div>
                                    <div class="col-12 text-center">
                                      <?php if($row['mobile1']!='' || $row['mobile1']!=null) { ?>
                                        <a href="tel:<?= $row['mobile1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['mobile2']!='' || $row['mobile2']!=null) { ?>
                                          <a href="tel:<?= $row['mobile2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['mobile3']!='' || $row['mobile3']!=null) { ?>
                                          <a href="tel:<?= $row['mobile3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }if($getData[0]['lapataId'] != NULL && $getData[0]['lapataId'] != ''){ 
                        $getLapataPerson = $this->db->query('select * from unknown_person where id in('.$getData[0]['lapataId'].')')->result_array();
                    ?>
                    <hr class="mb-2">
                    <h5 class="text-center text-danger">लापता व्यक्ति </h5>
                    <hr>
                    <?php 
                        foreach($getLapataPerson as $k=>$row)
                        {
                    ?>
                    <div class="col-lg-4 col-xl-3 col-md-6 px-0 px-md-2 col-12 col-search pb-2" >
                        <div class="card mb-3 shiva_height bg-light">
                            <div class="card-body px-0">
                                <div class="row align-items-center px-0 mx-0 justify-content-center">
                                    <?php
                                        if($row['Photo'] != '' || $row['Photo'] != NULL)
                                        {
                                    ?>
                                    <div class="col-12 text-end mb-2">
                                        <button type="button" class="btn btn-dark" onclick="share('lapata',<?php echo ($row['userId'] != NULL ? 'user' : 'police'); ?>',this,'<?php echo $row['Application_no']; ?>')" style="background:black!important;color:white!important;"><i class="fa fa-share-alt"></i></button>
                                        <button type="button" class="btn btn-primary" onclick="view('lapata',this,'<?php echo $row['Application_no']; ?>')" style="background:darkblue!important;color:white!important;padding:10px 15px;"><i class="fa fa-eye"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-1"><b style="color:black;font-size:.8rem!important">Application No :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $row['Application_no']; ?></b></p>
                                    </div>
                                    <div class="col-12">
                                        <p ><b style="color:black;font-size:.8rem!important">Uploaded Date :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo date('d-m-Y H:i A',strtotime($row['dateCreated'])); ?></b></p>
                                    </div>
                                    <div class="col-5 ">
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="height: 100px !important;border: 1px solid;" alt="">
                                    </div>
                                    <?php }else{ ?>
                                    <div class="col-5 ">
                                        <?php if($row['Gender'] == 'boy'){ ?>
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/male.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        <?php }else{ ?>
                                        <img class="w-100" id="profile-pic" src="<?php echo base_url().'assets/img/female.png'; ?>" style="height: 100px !important;border: 1px solid;" alt="">
                                        <?php } ?>
                                    </div>
                                    <?php } ?>
                                    <div class="col-7 px-0">
                                        <?php if($row['person_name'] != '' || $row['person_name'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Name - </b><span style="color:grey;"><?php echo $row['person_name']??"--" ?></span></p>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                        <?php }else{ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Gender - </b><span style="color:grey;"><?php echo ($row['Gender'] == 'boy' ? 'Male':'Female'); ?></span></p>
                                        <?php } ?>
                                       
                                        <?php if($row['Age'] != '' || $row['Age'] != NULL){ ?>
                                            <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Age Band - </b><span style="color:grey;"><?php echo $row['Age']??"--"?></span></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                 <?php if($row['aadharNumber'] != '' || $row['aadharNumber'] != NULL){ ?>
                                  <!--<div class="row col-6 px-4">-->
                                  <!--          <h5 class="card-title text-start py-0 fs-6 mb-0"> <b style="color:black;font-weight:600;">Aadhaar No - </b><br><span style="color:grey;"><?php echo $row['aadharNumber']??"--"?></span></h5>-->
                                  <!--    </div>-->
                                        <?php } ?>
                                <?php if($row['Message'] != '' || $row['Message'] != NULL){ ?>
                                <div class="row col-12 px-4 pt-2" style="max-height:100px">
                                   <p class="card-title text-start py-0"><b style="color:black;font-weight:600;">Other Details :- </b><br><span style="color:grey;" class="message"><?php echo $row['Message']??"--"?></span></p> 
                                </div>
                                <?php } ?>
                                <hr class="my-0">
                                <?php 
                                    if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                    {
                                        $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                         <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b><b style="color:#757575;font-size:.8rem!important"><?php echo $getNgoDetails[0]['ngoName'].' ,'; ?> <?php echo $getNgoDetails[0]['ngoBranch'].' - '; ?><?php echo $getNgoDetails[0]['ngoState']; ?></b></p>
                                      
                                    </div>
                                </div>
                                <?php }else{ 
                                    if($row['policeId'] != NULL)
                                    {
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                         <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                         <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getPoliceDetails[0]['thanaName'].' ,'; ?> 
                                         <?php echo $getPoliceDetails[0]['district'].' - '; ?><?php echo $getPoliceDetails[0]['state']; ?></b></p>
                                    </div>
                                </div>
                                <?php }else{ 
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                ?>
                                <div class="row w-100 mx-0 align-items-center" style="height:50px">
                                    <div class="col-12 text-start">
                                         <p class="my-2"><b style="color:black;font-size:.8rem!important">Uploaded By :- </b>
                                         <b style="color:#757575;text-transform:capitalize;font-size:.8rem!important"><?php echo $getUserDetail[0]['aadharname'].' ,'; ?> 
                                         <?php echo $getUserDetail[0]['district'].' - '; ?><?php echo $getUserDetail[0]['state']; ?></b></p>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <style>
                                    .social a.btn-circle .btn-google {
                                                color: #fff;
                                                background-color: #e44134;
                                                border-color: transparent;
                                            }
                                            .btn-police1{
                                                 color: #fff;
                                                background-color: green!important;
                                                border-color: transparent;
                                            }
                                             .btn-police2{
                                                 color: #fff;
                                                background-color: #e44134!important;
                                                border-color: transparent;
                                            }
                                             .btn-police3{
                                                 color: #fff;
                                                background-color: #5daed5!important;
                                                border-color: transparent;
                                            }
                                             .btn-police4{
                                                 color: #fff;
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
                                </style>
                                <?php 
                                    if($row['ngoId'] != NULL || $row['ngoId'] != '')
                                    {
                                        $getNgoDetails = $this->db->query('select * from ngo where Id='.$row['ngoId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - NGO </b>
                                    </div>
                                    <div class="col-12 ">
                                        <a href="tel:<?= $getNgoDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                      <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php }else{ 
                                    if($row['policeId'] != NULL)
                                    {
                                        $getPoliceDetails = $this->db->query('select * from police where police_id='.$row['policeId'])->result_array();
                                ?>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - POLICE THANA</b>
                                    </div>
                                    <div class="col-12 ">
                                        <a href="tel:<?= $getPoliceDetails[0]['registration_mobile']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police4" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php }else{ 
                                    $getUserDetail = $this->db->query('select * from user where uid='.$row['userId'])->result_array();    
                                ?>
                                <div class="row w-100 mx-0 align-items-center">
                                    <div class="col-12 ">
                                        <b style="font-size:.8rem!important">Contact To: - <?php echo $getUserDetail[0]['aadharname']; ?></b>
                                    </div>
                                    <div class="col-12 text-center">
                                        <?php if($row['well1']!='' || $row['well1']!=null) { ?>
                                        <a href="tel:<?= $row['well1']; ?>" class="btn btn-circle btn-sm btn-police1" ><i class="fa fa-phone"></i> </a>
                                        <?php } if($row['well2']!='' || $row['well2']!=null) { ?>
                                          <a href="tel:<?= $row['well2']; ?>" class="btn btn-circle btn-sm btn-police2" ><i class="fa fa-phone"></i> </a>
                                        <?php }
                                          if($row['well3']!='' || $row['well3']!=null) { ?>
                                          <a href="tel:<?= $row['well3']; ?>" class="btn btn-circle btn-sm btn-police3" ><i class="fa fa-phone"></i> </a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                                <br>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } } ?>
                </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

</div>
<div id="cameraModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Camera</h5>
                <a class="close btn btn-default" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row my-3 justify-content-center">
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <video id="video" width="100%" height="240" autoplay></video>  
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-auto col-sm-12 col-md-auto text-center">
                        <button id="click-photo" class="btn btn-primary btn-style-four">Click Photo</button>
                    </div>
                </div>
                <canvas class="d-none" id="canvas" width="320" height="240"></canvas>
            </div>
        </div>
    </div>
</div>
<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-danger close1" data-dismiss="modal" style="color:white;">&times;</button>
          <h4 class="modal-title">You Can Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <div id="image_demo" style="width:100%; margin-top:30px"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 text-center">
                <button class="btn btn-success crop_image">Crop Image</button>
            </div>
        </div>
        </div>
     </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    .swal2-confirm{
    position: relative!important;
    color: #fff!important;
    font-size: 16px!important;
    line-height: 16px!important;
    font-weight: 600!important;
    padding: 12px 35px!important;
    border-radius: 25px!important;
    background-color:#008000!important;
}
</style>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://www.viralpatel.net/demo/jquery/jquery.shorten.1.0.js"></script>
<style type="text/css">
        .no-border {
              border: 0 !important;
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

.no-border {
  border: 0 !important;
}
        
    </style>
<script type="text/javascript">
    
    $(document).ready(function() {
	
		$(".message").shorten({
        	"showChars" : 150,
        	"moreText"	: "See More",
	        "lessText"	: "Less",
        });
	});
	
	function back(ele)
	{
	    $(ele).attr('disabled','disabled');
	    location.href="<?php echo base_url(); ?>landing/checkPersonFilterDetails?pn=2";
	}
    
    $('#step4Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn4').attr('disabled','disabled');
        let data = new FormData(this);
        $.ajax({
            url:$(this).attr('action'),
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.status == 'success')
                {
                    if(parse.count > 0)
                    {
                        $('#btn4').removeAttr('disabled');
                        
                        Swal.fire({
                          icon: 'success',
                          allowOutsideClick:false,
                          html:html,
                          showCloseButton: true,
                          showCancelButton: false,
                          focusConfirm: false,
                          showConfirmButton:false
                        })   
                    }else{
                        swal.fire('','No Persons Found','error');
                        $('#btn4').removeAttr('disabled');
                    }
                }else{
                    swal.fire('',parse.message,'error');
                    $('#btn4').removeAttr('disabled');
                }
            }
        });
    })
    
    function closeSwal()
    {
        swal.close();
    }
    
    function showFileUpload(){
        $('#uploadFile').click();
    }
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let click_button = document.querySelector("#click-photo");
    let canvas = document.querySelector("#canvas");
    let stream = null;
    click_button.addEventListener('click', function() {
       	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
       	let image_data_url = canvas.toDataURL('image/jpeg');
        $('#mainPhotoUploaded').attr('src',image_data_url);
        $('#mainPhotoSelected').val(image_data_url);
        $('#cameraModal').modal('hide');
     
        stream.getTracks().forEach(function(track) {
          track.stop();
        });
    });
    
    $('.close').click(function()
    {
        stream.getTracks().forEach(function(track) {
          track.stop();
        });
    })
    
    const toBase64 = file => new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result);
        reader.onerror = error => reject(error);
    });
    
    async function Main() {
       const file = document.querySelector('#myfile').files[0];
       console.log(await toBase64(file));
    }
    
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
          width:200,
          height:200,
          type:'square' //circle
        },
        boundary:{
          width:200,
          height:200
        }
      });
      
    $('.crop_image').click(function(event){
        $image_crop.croppie('result', {
          type: 'canvas',
          size: 'viewport',
          format:'jpeg'
        }).then(function(response){
            $('#mainPhotoUploaded').attr('src',response);
            $('#mainPhotoSelected').val(response);
            $('#element').show();
            $('#uploadimageModal').modal('hide');
            $('#uploadBtnDiv').addClass('d-none');
            $('#retakebtndiv').removeClass('d-none');
        })
    });
    
    $('.close1').click(function()
    {
        $('#mainPhotoUploaded').attr('src','<?php echo base_url(); ?>assets/img/noimage.jpg');
        $('#mainPhotoSelected').val('');
        $('#uploadimageModal').modal('hide');
    })
    
    $('#uploadFile').on('change',async function(e)
    {
        if($(this)[0].files.length > 0)
        {
            var reader = new FileReader();
            reader.onload = function (event) {
              $image_crop.croppie('bind', {
                url: event.target.result
              }).then(function(){
                console.log('jQuery bind complete');
              });
            }
            reader.readAsDataURL($(this)[0].files[0]);
            $('#uploadimageModal').modal('show');   
        }
    })
    
    $('#btn4Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>landing/checkPersonFilterDetails?pn=1";
    })
    
    $('#btn2Back').click(function()
    {
        $(this).attr('disabled','disabled');
        location.href="<?php echo base_url(); ?>landing/checkPersonFilterDetails?pn=1";
    })
    
    async function showCameraModal()
    {
        stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
    	video.srcObject = stream;
        $('#cameraModal').modal('show');
    }
    
    $('#step3Form').on('submit',function(e)
    {
        $('#btn3').attr('disabled','disabled');
        e.preventDefault();
        console.log($('#mainPhotoSelected').val());
        if(($('#mainPhotoSelected').val()) != '')
        {
            let data = new FormData(this);
            $.ajax({
                url:$(this).attr('action'),
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    location.href="<?php echo base_url(); ?>landing/checkPersonFilterDetails?pn=4";   
                }
            });
        }else{
            Swal.fire({
                icon:'error',
                html: "<h4 style='color:black;'><b>Please Upload Lost Person's Photo</b></h4>",
                showCloseButton:true,
                showConfirmButton:false,
                showCancelButton:true,
                'cancelButtonText':'Ok'
            })
            $('#btn3').removeAttr('disabled');
        }
    })
    
    $('#step2Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btn3').attr('disabled','disabled');
        let data = new FormData(this);
        $.ajax({
            url:$(this).attr('action'),
            data:data,
            contentType: false,
            cache: false,
            processData:false,
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.count > 0)
                {
                    location.href="<?php echo base_url(); ?>landing/checkPersonFilterDetails?pn=3";   
                }else{
                    toastr.error('No Records Found');
                    $('#btn3').removeAttr('disabled');
                }
            }
        });
    })
    
    $('#step1Form').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        e.preventDefault();
        if(count == arr.length)
        {
            if($('input[name="type"]:checked').val() != 2)
            {
                $('#btn1').attr('disabled','disabled');
                let data = new FormData(this);
                $.ajax({
                    url:$(this).attr('action'),
                    data:data,
                    contentType: false,
                    cache: false,
                    processData:false,
                    type:'post',
                    success:function(res)
                    {
                        let parse = JSON.parse(res);
                        location.href="<?php echo base_url(); ?>landing/checkPersonFilterDetails?pn=2";   
                    }
                });   
            }else{
                Swal.fire({
                  html: '<h3 style="color:skyblue;"><b>Coming Soon</b></h3>',
                  customClass: {
                    icon: 'no-border'
                  }
                })
            }
        }else{
            return false;
        }
    })
    
    function sendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendSearchFilterOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    $(ele).removeAttr('disabled');
                    $('#otp').attr('required',true);
                    toastr.success('OTP Sent Successfully');
                    $('#mobileNumber').attr('readonly',true);   
                    $('#sendOtpDiv').addClass('d-none');
                    $('#otpdiv').removeClass('d-none');
                },
                error: function (request, status, error) {
                    toastr.error(request.responseText);
                    $(ele).removeAttr('disabled');        
                    $('#otpdiv').addClass('d-none');
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
            $('#otpdiv').addClass('d-none');
        }
    }
    
    function showOtpAccordingly(val)
    {
        if(val.length == 10)
        {
            $('#sendOtpDiv button').removeClass('disabled');
        }else{
            $('#sendOtpDiv button').addClass('disabled');
        }
    }
    
    function resendOtp(ele)
    {
        let val = $('#mobileNumber').val();
        $(ele).attr('disabled','disabled');
        if(val != '')
        {   
            let data= new FormData();
            data.append('mobile',val);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
                url:'<?php echo base_url(); ?>user/sendSearchFilterOtp',
                data:data,
                contentType: false,
                cache: false,
                processData:false,
                type:'post',
                success:function(res)
                {
                    toastr.success('OTP Sent Successfully');
                    $(ele).removeAttr('disabled');
                },
                error: function (request, status, error) {
                    toastr.error(request.responseText);
                    $(ele).removeAttr('disabled');        
                }
            })
        }else{
            $(ele).removeAttr('disabled');
            toastr.error('Please Enter Mobile Number');
        }
    }
    
    function view(type,ele,id)
    {
        if(type == 'missing')
        {
            window.open('<?php echo base_url(); ?>find-missed-person?Id='+id,'_blank');   
        }else{
            window.open('<?php echo base_url(); ?>find-lapata-person?id='+id,'_blank');
        }
    }
    
    function share(type,ele,appNo)
    {
        if (navigator.share) {
            let url = '';
            if(type == 'missing')
            {
                url = '<?php echo base_url(); ?>find-missed-person?Id='+appNo;
            }else{
                url = '<?php echo base_url(); ?>find-lapata-person?id='+appNo;
            }
            navigator.share({
              title: 'Khoji',
              url: url
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
    
</script>