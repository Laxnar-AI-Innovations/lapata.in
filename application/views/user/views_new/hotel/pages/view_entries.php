<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 33em!important;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 1rem;
    }
    #swal2-html-container{
        margin:0!important;
        padding-right: 1rem!important;
        padding-left: 1rem!important;
    }
    .select2-container{
        width:-webkit-fill-available!important;
    }
    select{
        appearance:auto!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    .checkbox-custom, .radio-custom {
    opacity: 0;
    position: absolute;   
}
<style>
    /* Defining a custom border on all
        sides except the top side */
    .custom-field {
        border: 3px solid;
        border-top: none;
        margin: 0;
        padding: 8px;
    }

    /* Defining the style of the 
    heading/legend for custom fieldset */
    .custom-field h1 {
        font: 16px normal;
        margin: -16px -8px 0;
    }

    /* Using float:left allows us to mimic
       the legend like fieldset. The 
       float:right property can also be 
       used to show the legend on right side */

    .custom-field h1 span {
        float: left;
    }

    /* Creating the custom top border to make
        it look like fieldset defining small 
        border before the legend. The width 
        can be modified to change position 
        of the legend */
    .custom-field h1:before {
        border-top: 3px solid;
        content: ' ';
        float: left;
        margin: 8px 2px 0 -1px;
        width: 12px;
    }

    /* Defining a long border after the 
    legend, using overflow hidden to 
    actually hide the line behind the 
    legend text. It can be removed
    for a different effect */
    .custom-field h1:after {
        border-top: 3px solid;
        content: ' ';
        display: block;
        height: 24px;
        left: 2px;
        margin: 0 1px 0 0;
        overflow: hidden;
        position: relative;
        top: 8px;
    }
    
    .form-check-input.is-valid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label {
        color: black!important;
    }
    
    .form-check-input.is-valid:checked, .was-validated .form-check-input:valid:checked {
        background-color: #0d6efd!important;
    }
</style>
<style>
    .w-lg-max-content{
        width:100%!important;
    }
    @media screen and (min-width:720px)
    {   
        .w-lg-max-content{
            width:max-content!important;
        }
    }
    
    .phone {
      line-height:32px;
      font-size:18px;
      font-weight:bold;
      color:#fff;
      margin:0;
    }
    .phone svg {
      width:18px;
      height:18px;
      margin-right:4px;
    }
    .phone svg path {
      fill:#fff;
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
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
</style>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Guest Entries</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>hotel">Home</a></li>
                <li class="breadcrumb-item active">Guest Entries</li>
            </ol>
        </nav>
    </div>
    <section class="section profile">
        <div class="row justify-content-center">
            <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row align-items-center min-vh-70">
                        <?php 
                            if(count($entries) > 0)
                            {
                                foreach($entries as $k=>$v)
                                {
                        ?>
                        <div class="col-lg-12 col-sm-12 col-md-12 mt-3">
                                <div class="card">
                                    <div class="card-body pb-3 w-100 px-3">
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-md-12">
                                                <div class="pt-0 pb-0">
                                                    <h5 class="card-title pt-2 pb-0 text-center text-success">Booking Id:- <?= $v['bookingId']; ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-md-12 table-responsive">
                                                <table class="table text-center table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>View</th>
                                                            <th>Checkin Date</th>
                                                            <th>Id Type</th>
                                                            <th>Id Number</th>
                                                            <th>Person Type</th>
                                                            <th>Name</th>
                                                            <th>Gender</th>
                                                            <th>Age</th>
                                                            <th>Room No.</th>
                                                            <th>Checkout</th>
                                                        </tr>  
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                           <td><?= $k + 1; ?></td> 
                                                           <td><button type="button" class="mb-3 mb-md-0 me-0 me-md-3  btn btn-primary disabled-on-loading" style="background:white!important;color:#0d6efd!important;" onclick="viewMember(`adult`,this,'<?= $v['Id']; ?>')"> <i class="fa fa-eye"></i></button></td>
                                                           <td><?= date('d-m-Y H:i A',strtotime($v['checkInDate'])); ?></td>
                                                           <td><?= $v['Idtype']; ?></td>
                                                           <td><?= $v['IdNumber']; ?></td>
                                                           <td>Adult</td>
                                                           <td><?= $v['personName']; ?></td>
                                                           <td><?= $v['gender']; ?></td>
                                                           <td><?= $v['age']; ?></td>
                                                           <td><?= $v['roomNumber']; ?></td>
                                                            <?php 
                                                                if($v['checkout_status'] == 'no')
                                                                {
                                                            ?>
                                                            <td style="width: 17%;"><button type="button" class="btn btn-success disabled-on-loading" style="background:white!important;color:green!important;" onclick="removeMember(`adult`,'<?= $k; ?>',this,'<?= $v['Id']; ?>')"> <i class="fa fa-check"></i></button></td>
                                                            <?php }else{ ?>
                                                            <td style="width: 17%;" class="text-danger"><b>Checked out</b></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <?php 
                                                            if($k == count($entries) - 1)
                                                            {
                                                                $getChildEntries = $this->db->query('select * from childEntry where bookingId='.$v['bookingId'])->result_array();
                                                                if(count($getChildEntries) > 0)
                                                                {
                                                                    foreach($getChildEntries as $k1=>$v1)
                                                                    {
                                                        ?>
                                                        <tr>
                                                            <td><?= $k + 1 + $k1 + 1 ?></td>
                                                            <td>-</td>
                                                            <td><?= date('d-m-Y H:i A',strtotime($v['checkInDate'])); ?></td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>Child</td>
                                                            <td><?= $v1['childName']; ?></td>
                                                            <td><?= $v1['childGender']; ?></td>
                                                            <td><?= $v1['childAge']; ?></td>
                                                            <td><?= $v1['roomNumber']; ?></td>
                                                            <?php 
                                                                if($v1['checkout_status'] == 'no')
                                                                {
                                                            ?>
                                                            <td style="width: 17%;"><button type="button" class="btn btn-success disabled-on-loading" style="background:white!important;color:green!important;" onclick="removeMember(`child`,'<?= $k; ?>',this,'<?= $v1['Id']; ?>')"> <i class="fa fa-check"></i></button></td>
                                                            <?php }else{ ?>
                                                            <td style="width: 17%;" class="text-danger"><b>Checked out</b></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <?php                
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } }else{ ?>
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="card">
                                <div class="card-body py-5 w-100 px-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12">
                                            <div class="pt-0 pb-0">
                                                <h5 class="card-title pt-0 mb-0 fs-4 pb-0 text-center text-danger">No Entries Created...</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>     
                </div>
            </div>
        </div>
    </section>
</main>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function redirectToStep2(Id)
    {
        window.open('<?php echo base_url(); ?>hotel/persondetail/'+Id,'_blank');
    }
    
    function viewMember(type,ele,Id)
    {
        $(ele).attr('disabled','disabled');
        $.ajax({
            url:'<?php echo base_url(); ?>hotel/getGuestDetails/'+Id,
            success:function(res)
            {
                $(ele).prop('disabled',false);
                let parse = JSON.parse(res);
                let html = '';
                let typeLabel = '';
                if(parse.isMissing == 1)
                {
                    typeLabel += '<b> Missing /</b>';
                }
                if(parse.isLapata == 1)
                {
                    typeLabel += '<b> लापता /</b>'
                }
                typeLabel = (typeLabel.slice(0,typeLabel.length - 5)) + '</b>';
                if(parse.isLapata != 1)
                {
                    if(parse.isVisible == '1')
                    {
                        if(parse.isWanted == 1 || parse.isCriminal == 1)
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else{
                                 let html = '';
                                 if(parse.image != '')
                                 {
                                     html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                 }
                                 html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 if(parse.personName != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                 }
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                 if(parse.gender != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                 }
                                 if(parse.age != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                 }
                                 if(parse.address != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }
                        }else{
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                })  
                             }      
                        }
                    }else{
                        if(parse.isWanted == 1 || parse.isCriminal == 1)
                        {
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let html = '';
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })   
                             }else{
                                 let html = '';
                                 if(parse.image != '')
                                 {
                                     html += '<div class="form-group mt-3 mb-0"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                                 }
                                 html += '<div class="form-group mt-3 '+(parse.isCriminal ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-0 '+(parse.isWanted ? '' : 'd-none')+'"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Wanted Record :- <a href="<?php echo base_url(); ?>hotel/wantedRecord/'+parse.wantedId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 if(parse.personName != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                                 }
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                                 if(parse.gender != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                                 }
                                 if(parse.age != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                                 }
                                 if(parse.address != '')
                                 {
                                     html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }   
                        }else{
                            if(parse.isRegistered == 0 && parse.isMissing == 1)
                            {
                                 let html = '';
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-0 '+((typeLabel == '') ? 'd-none' : '')+'"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false,
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                             {
                                 let html = '';
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                 if(parse.isVerified == 1)
                                 {
                                     html = '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }else{
                                     html = '<div class="form-group my-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>';
                                 }
                                 Swal.fire({
                                    allowOutsideClick:false,
                                    html: html,
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })
                             }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                             {
                                 let typediv = '';
                                 if(typeLabel != '</b>')
                                 {
                                     typediv = '<div class="form-group mb-0"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                                 }
                                Swal.fire({
                                    allowOutsideClick:false,
                                    html:
                                        '<div class="form-group my-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="openCameraPopup('+Id+')"> Click Here</button></div>',
                                    showCloseButton: true,
                                    showCancelButton: false,
                                    focusConfirm: false,
                                    showConfirmButton:false
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire({
                                            allowOutsideClick:false,
                                            icon : 'info',
                                            html: "<div class='form-group mb-0'><h5>To get person's more details, you have to click person's face photo</h5></div>",
                                            showCloseButton: true,
                                            showCancelButton: false,
                                            focusConfirm: false,
                                            showConfirmButton:true,
                                            'confirmButtonText':'Open Camera',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                showCameraModal();      
                                                $('#step2CheckAadhar').removeAttr('disabled');
                                            }
                                        })   
                                    }
                                })   
                             }   
                        }
                    }
                }else{
                    if(parse.isWanted == 1 || parse.isCriminal == 1)
                    {
                        if(parse.isRegistered == 0 && parse.isMissing == 1)
                        {
                             let html = '';
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" target="_blank" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                         {
                             Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                         {
                            Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" target="_blank" class="text-success" style="text-decoration:underline;">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })   
                         }else{
                             let html = '';
                             if(parse.image != '')
                             {
                                 html += '<div class="form-group mt-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>';
                             }
                             html += '<div class="form-group mt-3"><label style="font-weight:bolder;font-size: 17px!important;color:#D84315!important;border:1px solid;padding:10px;background:lavenderblush;border-radius:20px;" class="text-danger">Criminal Record :- <a href="<?php echo base_url(); ?>hotel/criminalRecord/'+parse.criminalId+'" class="text-success" style="text-decoration:underline;" target="_blank">View</a></label></div><div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             if(parse.personName != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div>';
                             }
                             html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div>';
                             if(parse.gender != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div>';
                             }
                             if(parse.age != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div>';
                             }
                             if(parse.address != '')
                             {
                                 html += '<div class="form-group mt-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false,
                            })
                         }
                    }else{
                        if(parse.isRegistered == 0 && parse.isMissing == 1)
                        {
                             let html = '';
                             let typediv = '';
                             if(typeLabel != '</b>')
                             {
                                 typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             }
                             if(parse.isVerified == 1)
                             {
                                 html = '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }else{
                                 html = '<div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html: html,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 0)
                         {
                             let typediv = '';
                             if(typeLabel != '</b>')
                             {
                                 typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             }
                             Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-success"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })
                         }else if(parse.isRegistered == 1 && parse.isMissing == 1)
                         {
                             let typediv = '';
                             if(typeLabel != '</b>')
                             {
                                 typediv = '<div class="form-group mb-3"><label style="font-weight:bolder;font-size: 17px!important;color:red!important;" class="text-danger">'+typeLabel+'</label></div>';
                             }
                            Swal.fire({
                                allowOutsideClick:false,
                                html:
                                    '<div class="form-group mb-3"><img src="<?php echo base_url(); ?>assets/images/verified.webp" style="height:50px;width:100px;border: 2px solid #bdbdbd;border-radius:15px;"></div><div class="form-group mb-3"><img src="'+parse.image+'" style="height:200px;width:200px;border: 2px solid #bdbdbd;border-radius:15px;"></div>'+typediv+'<div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><i class="fa fa-check-circle text-danger"></i> <b style="color:black;">Person Name :- </b>'+parse.personName+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Aadhar :- </b>'+parse.aadhar+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;text-transform:capitalize;"><b style="color:black;">Gender :- </b>'+parse.gender+'</label></div><div class="form-group mb-2"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Age :- </b>'+parse.age+'</label></div><div class="form-group mb-2 '+(parse.address != ',' ? '':'d-none')+'"><label class="form-label" style="font-size:16px!important;"><b style="color:black;">Address :- </b>'+parse.address+'</label></div><div class="form-group mb-2"><label style="font-weight:bold;color:black;">To get More Details</label></div><div class="form-group mb-2"><button type="button" class="btn btn-primary next disabled-on-loading" onclick="redirectToStep2('+Id+')"> Click Here</button></div>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:false
                            })   
                         }      
                    }
                    $(ele).removeAttr('disabled');
                }
            }
        })   
    }
    
    function removeMember(type,index,ele,Id)
    {
        if(type == 'adult')
        {   
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Hotel Entry</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to checkout from hotel?</label></div>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    $.ajax({
                        url:'<?php echo base_url(); ?>hotel/checkOutGuestMember/'+Id,
                        success:function(res)
                        {
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">Checkout Sucessful</strong>',
                                icon: 'success',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $(ele).removeAttr('disabled');
                                location.reload();
                            })
                        }
                    })   
                }
            })
        }else{
            Swal.fire({
                title: '<strong class="text-danger" style="font-size:20px;">Hotel Entry</strong>',
                icon: 'error',
                allowOutsideClick:false,
                html:
                    '<div class="form-group mt-3"><label class="form-label">Are you sure you want to checkout from hotel?</label></div>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    $(ele).attr('disabled','disabled');
                    $.ajax({
                        url:'<?php echo base_url(); ?>hotel/checkOutChildMember/'+Id,
                        success:function(res)
                        {
                            Swal.fire({
                                title: '<strong class="text-dark" style="font-size:20px;">Checkout Sucessful</strong>',
                                icon: 'success',
                                allowOutsideClick:false,
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                showConfirmButton:true
                            }).then((result) => {
                                $(ele).removeAttr('disabled');
                                location.reload();
                            })
                        }
                    })
                }
            })
        }
    }
</script>