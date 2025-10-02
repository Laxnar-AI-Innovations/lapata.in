<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
        font-weight: 600!important;
        color: black!important;
        font-size: 13px !important;
    }
    .u-type-Non-KYC 
    {
        color: red;
    }
    .v-none
    {
        visibility: hidden !important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Khoya Paya Search List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Home</a></li>
                
                <li class="breadcrumb-item active">Search Khoya Paya List</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive" >
                        <div class="row mb-0">
                            <div class="px-0 col-lg-10 col-sm-10 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Khoya Paya Search List</b></a>
                            </div>
                            <div class="px-0 col-lg-2 col-sm-2  text-end">
                                <a href="<?= base_url(); ?>admin" class="btn btn-sm btn-dark "><b>Back</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="kyc_user_list" class="needs-validation pt-0" action="<?= current_url(); ?>" method="get">
                            <div class="row justify-content-center align-items-end">
                                <div class="col-sm-12 col-md-3 form-group">
                                    <label>From Date: </label>
                                    <input type="date" value="<?= isset($_GET['startFromDate']) ? $_GET['startFromDate'] : ''; ?>" name="startFromDate" onchange="addRequired(this.value)" class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 form-group">
                                    <label>To Date: </label>
                                    <input type="date" value="<?= isset($_GET['endFromDate']) ? $_GET['endFromDate'] : ''; ?>" name="endFromDate" id="endFromDate" class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-3 form-group">
                                    <button type="submit" class="save">Submit</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered display mt-2 datatable1 text-center" id="example11">
                            <thead >
                                <tr>
                                    <th>#</th> 
                                    <th>Searched Photo</th>                                    
                                    <th>Mobile</th>
                                    <th>Search Date</th>
                                    <th>Application Number</th>
                                </tr>
                            </thead>
                           <tbody>                           
                                <?php                                     
                                    $i = 0;
                                    foreach($data as $k=>$v)
                                    {
                                        $i++;   
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td>
                                        <img src="<?= base_url().''.$v['mainPhoto']; ?>" style="height: 100px;width: 100px;">
                                    </td>
                                    <td><?= $v['mobileNumber'] ?? 'N/a'; ?></td>
                                    <td><?php echo date("d-m-Y h:i A", strtotime($v['dateCreated'])); ?></td>
                                    <td>
                                        <?php 
                                            $explode = array_unique(explode(',',$v['matchedSpecialIds']));
                                            foreach($explode as $k1=>$v1)
                                            {
                                                $getDetail = $this->db->query('select * from mahakumbhSpecial where id='.$v1)->result_array();
                                                if(count($getDetail) == 0)
                                                {
                                                    continue;
                                                }
                                        ?>
                                            <?php 
                                                if($k1 == count($explode) - 1)
                                                {
                                            ?>
                                            <a href="javascript:void(0)" onclick="showAccordingly(this)" data-name="<?= $getDetail[0]['person_name']; ?>" data-image="<?= base_url().''.$getDetail[0]['Photo']; ?>" data-type="<?= ucfirst($getDetail[0]['upload_type']) ?? 'General'; ?>" data-date="<?= $getDetail[0]['dateCreated']; ?>" data-ageband="<?= $getDetail[0]['AgeBand']; ?>" data-gender="<?= $getDetail[0]['Gender']; ?>" data-appno="<?= 'MAH'.sprintf('%03d',$getDetail[0]['id']); ?>" data-bs-toggle="modal" data-bs-target="#detailModal" style="text-decoration: underline;color: black;"><b><?= 'MAH'.sprintf('%03d',$v1); ?></b></a>
                                            <?php }else{ ?>
                                            <a href="javascript:void(0)" data-image="<?= base_url().''.$getDetail[0]['Photo']; ?>" data-name="<?= $getDetail[0]['person_name']; ?>" data-type="<?= ucfirst($getDetail[0]['upload_type']) ?? 'General'; ?>" data-date="<?= $getDetail[0]['dateCreated']; ?>" data-ageband="<?= $getDetail[0]['AgeBand']; ?>" data-gender="<?= $getDetail[0]['Gender']; ?>" data-appno="<?= 'MAH'.sprintf('%03d',$getDetail[0]['id']); ?>" data-bs-toggle="modal" onclick="showAccordingly(this)" data-bs-target="#detailModal" style="text-decoration: underline;color: black;"><b><?= 'MAH'.sprintf('%03d',$v1); ?>,</b></a>
                                            <?php } ?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KHOYA PAYA - <b id="appNo"></b></h5>
                <a class="btn btn-dark close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12 form-group col-md-6">
                        <img id="popupImage" style="width: 100%;height: 200px;">
                    </div>
                </div>
                <h6 class="text-center"><b>Application No:- </b><span id="appNo2"></span></h6>
                <h6 class="text-center"><b>Name:- </b><span id="name"></span></h6>
                <h6 class="text-center"><b>Creation Date:- </b><span id="date"></span></h6>
                <h6 class="text-center"><b>Age Band:- </b><span id="ageBand"></span></h6>
                <h6 class="text-center"><b>Gender:- </b><span id="gender"></span></h6>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function addRequired(val)
    {
        if(val == '')
        {
            $('#endFromDate').attr('required',false);
            $('#endFromDate').val('');
        }else{
            $('#endFromDate').attr('required',true);
            $('#endFromDate').val('');
        }
    }


    function showAccordingly(ele)
    {
        $('#appNo').html($(ele).attr('data-appno'));
        $('#popupImage').attr('src',$(ele).attr('data-image'));
        $('#appNo2').html($(ele).attr('data-appno'));
        if($(ele).attr('data-name') != undefined && $(ele).attr('data-name') != '')
        {
            $('#name').html($(ele).attr('data-name'));
        }else{
            $('#name').html('N/a');
        }
        $('#date').html($(ele).attr('data-date'));
        $('#ageBand').html($(ele).attr('data-ageband'));
        $('#gender').html($(ele).attr('data-gender'));
    }
</script>