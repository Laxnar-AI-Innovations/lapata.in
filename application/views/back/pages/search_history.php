<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
    }
    .dataTable-table > thead > tr > td, .dataTable-table > thead > tr > th {
        vertical-align: middle;
        text-align:center;
         padding: 1rem; 
    }
    .dataTable-table > tbody > tr > td, .dataTable-table > tbody > tr > th {
        vertical-align: middle;
         text-align:center; 
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Search History</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Search History</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <form>
                            <div class="row align-items-center justify-content-center">
                                <div class="form-group form-floating col-12 col-md-auto">
                                    <input type="date" class="form-control" id="from_date" name="from_date" value="<?= (isset($_GET['from_date']) && !empty($_GET['from_date']) ? date('Y-m-d',strtotime($_GET['from_date'])) : ''); ?>">
                                    <label for="from_date" class="ps-4">Select From Date</label>
                                </div>
                                <div class="form-group form-floating col-12 col-md-auto">
                                    <input type="date" class="form-control" id="to_date" name="to_date" value="<?= (isset($_GET['to_date']) && !empty($_GET['to_date']) ? date('Y-m-d',strtotime($_GET['to_date'])) : ''); ?>">
                                    <label for="to_date" class="ps-4">Select To Date</label>
                                </div>
                                <div class="form-group col-auto">
                                    <button class="btn btn-primary next disabled-on-loading"> Search</button>
                                </div>
                                <div class="form-group col-auto deleteBtnDiv d-none">
                                    <button type="button" class="btn btn-danger reset disabled-on-loading" onclick="deleteSelected(this)"> Delete Selected</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php 
                        if(count($getOverallHistory) > 0)
                        {
                    ?>
                    <div class="card-body pt-3 table-responsive">
                        <table class="table text-center table-bordered border border-danger table-striped datatable">
                            <thead>
                                <tr>
                                    <th data-sortable="false"><input type="checkbox" id="select_all" class="form-check-input"></th>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>User Name</th>
                                    <th>Search Type</th>
                                    <th>Search Query</th>
                                    <th>Application Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $i = 0;
                                foreach($getOverallHistory as $k=>$v)
                                {
                                    $i++;
                                    $firstAppNumber = '-';
                                    $extraCount = 0;
                                    if($v['unknownIds'] != '')
                                    {
                                        $explode = array_unique(explode(',',$v['unknownIds']));
                                        $extraCount += count($explode) - 1;
                                        $getUnknownAppNumber = $this->db->query('select * from unknown_person where id='.$explode[0])->result_array();
                                        $firstAppNumber = $getUnknownAppNumber[0]['Application_no'];
                                    }
                                    if($v['missingIds'] != '')
                                    {
                                        $explode = array_unique(explode(',',$v['missingIds']));
                                        if($v['unknownIds'] == '')
                                        {
                                            $extraCount += count($explode) - 1;   
                                        }else{
                                            $extraCount += count($explode);
                                        }
                                        $getUnknownAppNumber = $this->db->query('select * from unknown_person where id='.$explode[0])->result_array();
                                        $firstAppNumber = $getUnknownAppNumber[0]['Application_no'];
                                    }
                                    $getUserDetail = $this->db->query('select * from user where uid='.$v['userId'])->result_array();
                                    $getNonKycUserDetail = $this->db->query('select * from nonKycUser where uid='.$v['userId'])->result_array();
                        ?>
                        <tr style="vertical-align:middle;">
                            <td><input type="checkbox" class="form-check-input" onclick="showDeleteBtn()" value="<?= $v['Id']; ?>"></td>
                            <td><?= $i; ?></td>
                            <td><?= date('d-m-Y',strtotime($v['dateCreated'])); ?></td>
                            <td><?= date('h:i A',strtotime($v['dateCreated'])); ?></td>
                            <td><?= count($getUserDetail) > 0 ? $getUserDetail[0]['aadharname'] : (count($getNonKycUserDetail) > 0 ? $getNonKycUserDetail[0]['aadharname'] : '-'); ?></td>
                            <td>
                                <?php 
                                    if($v['searchType'] == 'aadhar')
                                    {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets_landing_page/img/aadhar.webp'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php 
                                    }
                                    else if($v['searchType'] == 'pan')
                                    {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets/images/pan.png'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php 
                                    }
                                    else if($v['searchType'] == 'voter')
                                    {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets/images/icons8-voter-64.png'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php 
                                    }
                                    else if($v['searchType'] == 'gold')
                                    {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets/images/gold.png'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php 
                                    }
                                    else if($v['searchType'] == 'vehicle')
                                    {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets/icons/car.avif'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php 
                                    }
                                    else if($v['searchType'] == 'facematch')
                                    {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets/images/faceicon.png'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php }else if($v['searchType'] == 'dl')
                                {
                                ?>
                                <img src="<?= base_url(); ?><?= 'assets/images/4213483.png'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php
                                }
                                else{ ?>
                                <img src="<?= base_url(); ?><?= 'assets_landing_page/img/aadhar.webp'; ?>" style="width:75px;height:75px;" alt="user">
                                <?php } ?>
                            </td>
                            <?php 
                                if($v['searchType'] == 'facematch')
                                {
                            ?>
                            <td><a href="<?= base_url().''. $v['searchQuery'];?>" data-lightbox="roadtrip"><img src="<?= base_url().''. $v['searchQuery'];?>" style="height:50px;width:50px;"></a></td>
                            <?php }else{ ?>
                            <td><?= $v['searchQuery']; ?></td>
                            <?php } ?>
                            <th><?= $firstAppNumber .(($extraCount > 0) ? (' + <b style="background:black;color:white;border-radius:50%;padding:0.6rem;">'. $extraCount).'</b>' : ''); ?></th>
                            <td>
                                <a href="<?php echo base_url(); ?>admin/viewSearchDetail/<?= $v['Id']; ?>" class="btn btn-dark"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo base_url(); ?>admin/deleteSearchHistory/<?= $v['Id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<?php 
    $csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
    );
?>
<script>
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
    
    function deleteSelected(ele)
    {
        let selected = $('tbody input:checkbox:checked');
        if(selected.length > 0)
        {
            if(confirm('Are you sure you want to delete this record?'))
            {
                let Ids = [];
                for(let i=0;i<selected.length;i++)
                {
                    Ids.push($(selected[i]).val());
                }
                $.ajax({
                    url:'<?php echo base_url(); ?>admin/deleteCheckedHistory',
                    data:{'Ids[]':Ids,_token:'<?=$csrf['hash'];?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('History Deleted Successfully');
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
</script>