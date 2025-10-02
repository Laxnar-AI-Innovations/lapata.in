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
        <h1>Khoya Paya Member List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Home</a></li>
                
                <li class="breadcrumb-item active">Khoya Paya Member List</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Khoya Paya List</b></a>
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
                                    <th>Person Name</th>                                    
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Date of Registration</th>
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
                                        <?= !empty($v['person_name']) ? $v['person_name'] : 'N/a'; ?>
                                    </td>
                                    <td><?= $v['well1'] ?? 'N/a'; ?></td>
                                    <td><span class="span_<?= $v['Gender']??'N/a'?>"><?= $v['Gender']??'N/a'?></span></td>
                                    <td><?php echo date("d-m-Y h:i A", strtotime($v['dateCreated'])); ?></td>
                                    <td>
                                        <?= $v['Application_no'] ?? 'MAH'.sprintf('%03d',$v['id']); ?>
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
</script>