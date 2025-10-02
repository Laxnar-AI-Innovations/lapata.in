<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
      font-weight: bold!important;
      color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Missing Vehicle</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Missing Vehicle</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <?php 
                if(count($missing) > 0)
                {
                    foreach($missing as $k=>$v)
                    {
                        $getLatestPhotos = $this->db->query('select * from missingvehiclephotos where missingId='.$v['Id'])->result_array();
            ?>
            <div class="col-lg-4 col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="row my-3 align-items-center">
                            <div class="col-lg-6 col-sm-12 col-md-6 col-6">
                                <h6 class="text-center mb-0"><b>Missing Vehicle Id - <?php echo $v['missingId']; ?></b></h6>
                            </div>
                            <?php 
                                if($v['paymentStatus'] != NULL && $v['paymentStatus'] == 'Success'){
                            ?>
                            <div class="col-lg-6 col-sm-12 col-md-6 col-6 text-end">
                                <img src="<?php echo base_url(); ?>assets/images/paid.jpg" style="width:100px;">
                            </div>
                            <?php } ?>
                        </div>
                        <hr class="my-0">
                        <div class="row my-3 mx-0 align-items-center">
                            <div class="col-lg-6 col-sm-12 col-6 col-md-6 ps-4">
                                <?php 
                                    if(count($getLatestPhotos) > 0)
                                    {
                                ?>
                                <img src="<?php echo base_url().$getLatestPhotos[0]['photourl']; ?>" style="width:100%;height:150px;object-fit:fill;">
                                <?php }else{ ?>
                                <img src="<?php echo base_url() ?>assets/images/M&A app icon.jpg" style="width:100%;height:150px;object-fit:fill;">
                                <?php } ?>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-6 col-md-6">
                                <div class="row mb-2">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <h6 class="text-start" style="color:black;line-height:1.5rem;"><b>Vehicle No. </b><br><?php echo strtoupper($v['rcNumber']); ?></h6>
                                    </div>
                                </div>
                                <?php 
                                    if($v['expiryDate'] != NULL)
                                    {
                                ?>
                                <div class="row mb-2">
                                    <div class="col-lg-12 col-sm-12 col-md-12">
                                        <h6 class="text-start" style="color:black;line-height:1.5rem;"><b>Plan Expiry Date </b><br><?php echo ($v['expiryDate'] != NULL ? $v['expiryDate'] : ''); ?></h6>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="row mx-0">
                                    <?php 
                                        if($v['isFinalSubmitted'] == 1)
                                        {
                                    ?>
                                    <div style="border-radius:5px;background:<?php echo ($v['isFound'] == 0 ? 'yellow' : '#f24444'); ?>;color:<?php echo ($v['isFound'] == 0 ? 'black' : 'white'); ?>" class="<?php echo ($v['isFound'] == 0 ? 'p-2' : 'p-3'); ?> col-lg-12 col-sm-12 col-md-12">
                                        <?php 
                                            if($v['isFound'] == 1)
                                            {
                                        ?>
                                        <h6 class="mb-0"><b>Complaint Status </b>
                                            <select class="form-control d-inline w-auto mt-2" style="appearance:auto;" onchange="updateStatusAccordingly(this.value,<?php echo $v['Id']; ?>)" id="status<?php echo $v['Id']; ?>">
                                                <option value="0">Active</option>
                                                <option value="1" selected>Close</option>
                                            </select>
                                        </h6>
                                        <?php }else{ ?>
                                        <h6 class="mb-0"><b>Complaint Status </b>
                                            <select class="form-control d-inline w-auto mt-2" style="appearance:auto;" onchange="updateStatusAccordingly(this.value,<?php echo $v['Id']; ?>)" id="status<?php echo $v['Id']; ?>">
                                                <option value="0">Active</option>
                                                <option value="1">Close</option>
                                            </select>
                                        </h6>
                                        <?php } ?>
                                    </div>
                                    <?php }else{ ?>
                                        <div style="background:crimson;color:white;" class="p-3 col-lg-12 col-sm-12 col-md-12">
                                            <h6 class="mb-0" style="line-height:1.5rem;"><b>Complaint Status </b><br> Pending</h6>
                                        </div>  
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 text-center">
                                <?php 
                                    if($v['isFinalSubmitted'] == 1)
                                    {
                                ?>
                                <a href="<?php echo base_url(); ?>user/view_missing_vehicle_details/<?php echo $v['Id']; ?>" class="btn btn-style-green">View</a>
                                <?php if($v['isFound'] == 0 ){ ?>
                                <a href="<?php echo base_url(); ?>user/edit_missing_vehicle_details/<?php echo $v['Id']; ?>" class="btn btn-style-yellow">Edit</a>
                                <?php }else{ ?>
                                <button type="button" class="disabled-on-loading btn btn-style-red" onclick="deleteMissingVehicle(this,<?php echo $v['Id']; ?>)"> Delete</button>
                                <?php } ?>
                                <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>user/edit_missing_vehicle_details/<?php echo $v['Id']; ?>" class="btn btn-style-yellow">Edit</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } }else{ ?>
                <div class="card" style="display:grid;align-items:center;min-height:40vh;">
                    <div class="card-body p-3">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <h4 class="text-danger text-center mb-0"><b>No Vehicle Complaints Found</b></h4>
                        </div>  
                    </div>
                </div>
            <?php } ?>
            <div>
                
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <script type="text/javascript">
    function updateStatusAccordingly(val,Id)
    {
        if(val == 1)
        {
            Swal.fire({
                // title: '<strong class="text-danger" style="font-size:20px;">Update Status</strong>',
                icon: 'warning',
                allowOutsideClick:false,
                html:
                    '<b><div class="form-group mt-3 text-danger"><label class="form-label text-danger" style="font-size:20px!important;">Are you sure you want to close the complaint?</label></div></b>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    let otpdata = new FormData();
                    otpdata.append('Id',Id);
                    otpdata.append('status',val);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/updateMissingVehicleStatus',
                        data:otpdata,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('Missing Complaint Closed Successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    })
                }else{
                    $('#status'+Id).val(0);
                }
            })
        }else{
            Swal.fire({
                // title: '<strong class="text-danger" style="font-size:20px;">Update Status</strong>',
                icon: 'warning',
                allowOutsideClick:false,
                html:
                    '<b><div class="form-group mt-3 text-success"><label class="form-label" style="font-size:20px!important;">Are you sure you want to activate the complaint?</label></div></b>',
                showCloseButton: true,
                confirmButtonText:'Yes',
                cancelButtonText:'No',
                showCancelButton: true,
                focusConfirm: false,
                showConfirmButton:true
            }).then((result) => {
                if (result.isConfirmed) {
                    let otpdata = new FormData();
                    otpdata.append('Id',Id);
                    otpdata.append('status',val);
                    otpdata.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
                    $.ajax({
                        url:'<?php echo base_url(); ?>user/updateMissingVehicleStatus',
                        data:otpdata,
                        contentType: false,
                        cache: false,
                        processData:false,
                        type:'post',
                        success:function(res)
                        {
                            toastr.success('Missing Complaint Activated Successfully');
                            setTimeout(function()
                            {
                                location.reload();
                            },2000);
                        }
                    })
                }else{
                    $('#status'+Id).val(0);
                }
            })
        }
    }
    
    function deleteMissingVehicle(ele,Id)
    {
        Swal.fire({
            title: '<strong class="text-danger" style="font-size:20px;">Delete Complaint</strong>',
            icon: 'warning',
            allowOutsideClick:false,
            html:
                '<div class="form-group mt-3"><label class="form-label">Are you sure you want to delete this complaint?</label></div>',
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
                    url:'<?php echo base_url(); ?>user/deleteMissingVehicle?id='+Id,
                    type:'get',
                    success:function(res)
                    {
                        toastr.success('Missing Complaint Deleted Successfully');
                        setTimeout(function()
                        {
                            location.reload();
                        },2000);
                    }
                })
            }
        })
    }
    
  </script>