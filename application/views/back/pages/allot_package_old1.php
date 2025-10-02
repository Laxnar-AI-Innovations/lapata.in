<style>
    .select2-selection__choice__remove{
        background:transparent!important;
    }
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
        font-size: 13px !important;
    }
    select
    {
        -webkit-appearance: auto !important;
    }
    th{
        text-align:center!important;
    }
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Allot Package</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Package</li>
                <li class="breadcrumb-item active">Allot Package</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <form id="addDl" method="post" action="<?= base_url(); ?>admin/postAllotPackage">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="form-floating form-group">
                                <select class="form-control" required id="isKyc" name="isKyc" onchange="showAccordingly(this.value)">
                                    <option value="">Choose User Type?</option>
                                    <option value="Kyc">Kyc</option>
                                    <option value="NonKyc">Non Kyc</option>
                                </select>
                                <label for="isKyc">Choose User Type?</label>
                            </div>
                            <div class="form-floating form-group">
                                <select class="form-control" required id="complaintType" name="complaintType">
                                    <option value="">Choose Complaint Type?</option>
                                    <option value="Missing">Missing</option>
                                    <option value="Unknown">Unknown</option>
                                    <option value="Both">Both</option>
                                </select>
                                <label for="complaintType">Choose Complaint Type?</label>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Choose package you want to allot</label><br>
                                <?php 
                                    $getPackages = $this->db->query('select * from packages where Id > 1')->result_array();
                                    foreach($getPackages as $k=>$v)
                                    {
                                ?>
                                <input type="checkbox" name="packageName[]" id="<?= $v['Id']; ?>" value="<?= $v['Id']; ?>" class="form-check-input">
                                <label for="<?= $v['Id']; ?>" style="color:darkred!important;" class="me-1"><?= $v['packageName']; ?></label>
                                <?php } ?>
                                <input type="checkbox" name="packageName[]" id="All" value="All" class="form-check-input">
                                <label for="All" style="color:darkred!important;" class="me-1">All</label>
                            </div>
                            <div class="form-group kycDiv" style="display:none;">
                                <label>Select Multiple KYC Users to allocate</label>                            
                                <select class="form-control select2" name="kycusers[]" multiple>
                                    <?php 
                                        $getUser = $this->db->query('select * from user where aadharname != ""')->result_array();
                                        foreach($getUser as $k=>$v)
                                        {
                                    ?>
                                    <option value="<?= $v['uid']; ?>"><?= $v['aadharname'].' ('.$v['aadhar_id'].')'; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group nonKycDiv" style="display:none;">
                                <label>Select Multiple Non KYC Users to allocate</label>                            
                                <select class="form-control select2" name="nonkycusers[]" multiple>
                                    <?php 
                                        $getUser = $this->db->query('select * from nonKycUser where aadharname != ""')->result_array();
                                        foreach($getUser as $k=>$v)
                                        {
                                    ?>
                                    <option value="<?= $v['uid']; ?>"><?= $v['aadharname'].' ('.$v['registration_mobile'].')'; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button id="btnDl" class="btn save btn-success disabled-on-loading"> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header deleteBtnDiv text-end d-none">
                        <button type="button" class="btn btn-danger reset disabled-on-loading" onclick="deleteCheckedPackage(this)"> Delete Selected</button>
                    </div>
                    <div class="card-body pt-3 table-responsive">
                        <table class="table table-striped table-bordered datatable text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Type</th>
                                    <th>Complaint Type</th>
                                    <th>Package Name</th>
                                    <th>User Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $getAllotedPackages = $this->db->query('select *,count(*) from allotedPackages group by userId')->result_array();
                                    if(count($getAllotedPackages) > 0)
                                    {
                                        $i=0;
                                        foreach($getAllotedPackages as $k=>$v)
                                        {
                                            $complaintType = '';
                                            if($v['userType'] == 'Kyc')
                                            {
                                                $getUserDetails = $this->db->query('select * from user where uid='.$v['userId'])->result_array();   
                                                $getUserPackage = $this->db->query('select * from allotedPackages where userType="Kyc" and userId='.$v['userId'])->result_array();
                                                $package = '';
                                                $packageId = [];
                                                $isMissing = 0;
                                                $isUnknown = 0;
                                                foreach($getUserPackage as $k1=>$v1)
                                                {
                                                    if($v1['complaintType'] == 'Missing')
                                                    {
                                                        $isMissing = 1;
                                                    }else{
                                                        $isUnknown = 1;
                                                    }
                                                    array_push($packageId,$v1['packageId']);
                                                }
                                                if(count($packageId) == 3)
                                                {
                                                    $package = 'All';
                                                }else{
                                                    $this->db->where_in('Id',$packageId);
                                                    $this->db->select('packageName');
                                                    $packageNames = $this->db->get('packages')->result_array();
                                                    foreach($packageNames as $k2=>$v2)
                                                    {
                                                        if($k2 == 0)
                                                        {
                                                            $package = $v2['packageName'];
                                                        }else{
                                                            $package .= ','.$v2['packageName'];
                                                        }
                                                    }
                                                }
                                                if($isMissing && $isUnknown)
                                                {
                                                    $complaintType = 'Both';
                                                }else{
                                                    $complaintType = $v['complaintType'];
                                                }
                                            }else{
                                                $getUserDetails = $this->db->query('select * from nonKycUser where uid='.$v['userId'])->result_array();
                                                $getUserPackage = $this->db->query('select * from allotedPackages where userType="NonKyc" and userId='.$v['userId'])->result_array();
                                                $package = '';
                                                $packageId = [];
                                                $isMissing = 0;
                                                $isUnknown = 0;
                                                foreach($getUserPackage as $k1=>$v1)
                                                {
                                                    if($v1['complaintType'] == 'Missing')
                                                    {
                                                        $isMissing = 1;
                                                    }else{
                                                        $isUnknown = 1;
                                                    }
                                                    array_push($packageId,$v1['packageId']);
                                                }
                                                if(count($packageId) == 3)
                                                {
                                                    $package = 'All';
                                                }else{
                                                    $this->db->where_in('Id',$packageId);
                                                    $this->db->select('packageName');
                                                    $packageNames = $this->db->get('packages')->result_array();
                                                    foreach($packageNames as $k2=>$v2)
                                                    {
                                                        if($k2 == 0)
                                                        {
                                                            $package = $v2['packageName'];
                                                        }else{
                                                            $package .= ','.$v2['packageName'];
                                                        }
                                                    }
                                                }
                                                if($isMissing && $isUnknown)
                                                {
                                                    $complaintType = 'Both';
                                                }else{
                                                    $complaintType = $v['complaintType'];
                                                }
                                            }
                                            $i++;
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= strtoupper($v['userType']); ?></td>
                                    <td><?= $complaintType; ?></td>
                                    <td><?= $package; ?></td>
                                    <td><?= $getUserDetails[0]['aadharname']; ?></td>
                                </tr>
                                <?php } }else{ ?>
                                <tr>
                                    <td colspan="5">No Packages Alloted...</td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
  
    $('#select_all').click(function()
    {
        if($(this).is(':checked'))
        {
            $('tbody input:checkbox').attr('checked',true);   
            $('.deleteBtnDiv').removeClass('d-none');
        }else{
            $('tbody input:checkbox').removeAttr('checked');   
            $('.deleteBtnDiv').addClass('d-none');
        }
    })
  
    function deleteCheckedPackage(ele)
    {
        let checked = $('.datatable tbody input:checkbox:checked');
        if(checked.length > 0)
        {
            if(confirm('Are you sure you want to delete this alloted packages?'))
            {
                $(ele).attr('disabled',true);       
                let Ids = [];
                for(let i=0;i<checked.length;i++)
                {
                    Ids.push($(checked[i]).val());
                }
                $.ajax({
                    url:'<?php echo base_url(); ?>admin/deleteCheckedAllotedPackages',
                    data:{'Ids[]':Ids,_token:'<?=$csrf['hash'];?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Alloted Packages Deleted Successfully');
                        setTimeout(function()
                        {
                          location.reload();
                        },2000);
                    }
                })
            }
        }else{
            toastr.error('Please Select Checkbox to continue');
        }
    }
    
    function showDeleteBtn()
    {
        let selected = $('tbody input:checkbox:checked');
        if(selected.length > 0)
        {
            $('.deleteBtnDiv').removeClass('d-none');
        }else{
            $('.deleteBtnDiv').addClass('d-none');
        }
    }
  
    function deletePackage(ele,Id)
    {
        if(confirm('Are you sure you want to delete this alloted package?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteAllotedPackage',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('Alloted Package Deleted Successfully');
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            })       
        }
    }
  
    function showAccordingly(val)
    {
        if(val == '')
        {
            $('.kycDiv').slideUp('slow');
            $('.kycDiv select').attr('required',false);
            $('.nonKycDiv select').attr('required',false);
            $('.nonKycDiv').slideUp('slow');
        }else{
            if(val == 'Kyc')
            {
                $('.kycDiv select').attr('required',true);
                $('.nonKycDiv select').attr('required',false);
                $('.kycDiv').slideDown('slow');
                $('.nonKycDiv').slideUp('slow');
            }else{
                $('.kycDiv select').attr('required',false);
                $('.nonKycDiv select').attr('required',true);
                $('.kycDiv').slideUp('slow');
                $('.nonKycDiv').slideDown('slow');
            }
        }
    }
  
    $('#addDl').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnDl').attr('disabled','disabled');
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
                    toastr.success(parse.message);
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
  </script>
  <?php

if($this->session->flashdata('message_name')) {
$message = $this->session->flashdata('message_name');
?>

<script>
    toastr.success('<?php echo $message; ?>');
    setTimeout(function() { location.reload(); },1000);
</script>
<?php
}

?>