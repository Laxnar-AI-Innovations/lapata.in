<style>
    th{
        text-align:center!important;
    }
    
    thead tr:nth-child(1){
        display:none;
    }
    
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
        <h1>District</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">District</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header py-0">
                        <p class="card-title mb-0" style="font-size:1rem;"><b class="text-danger">Note: - </b> Separate District Names with Comma</p>
                    </div>
                    <div class="card-body pt-3">
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postDistrict" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row mb-3">
                                <div class="form-group col-12">
                                    <label for="state" class="col-form-label">Select State</label>
                                    <select required class="select2 form-control" name="state" id="state">
                                        <option value="">Select State</option>
                                        <?php 
                                            $getState = $this->db->query('select * from states')->result_array();
                                            if(count($getState) > 0)
                                            {
                                                foreach($getState as $k=>$v)
                                                {
                                        ?>
                                        <option value="<?= $v['name']; ?>"><?= $v['name']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Enter District Name</label>
                                    <input type="text" class="form-control" required id="tags" name="district">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button id="btnDl" type="submit" style="padding:1rem!important;" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
                                </div>
                                <div class="col-6">
                                    <button id="btnBack" type="button" class="btn d-block btn-dark disabled-on-loading w-100 save" style="background:black!important;padding:1rem!important;"> Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage Districts</b></a>
                            </div>
                        </div>
                        <hr>
                        <table class="table text-center table-striped table-bordered datatable">
                            <tr>
                                <th>#</th>
                                <th>State Name</th>
                                <th>District Name</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                $getDistricts = $this->db->query('select * from district order by id desc')->result_array();
                                if(count($getDistricts) > 0)
                                {
                                    $i = 0;
                                    foreach($getDistricts as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['d_name']; ?></td>
                                <td><?= $v['st_name']; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editDistrict/<?= $v['id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteDistrict(<?= $v['id']; ?>)" class="btn btn-danger mt-3 mt-md-0"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="4">No Districts Found</td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
  
    $('#btnBack').click(function()
    {
        location.reload();
    })
  
    function deleteDistrict(Id)
    {
        if(confirm('Are you sure you want to delete this district?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteDistrict',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('District Deleted Successfully');
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }
            })       
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
                    toastr.warning(parse.message);
                    setTimeout(function()
                    {
                      location.reload();
                    },2000);
                }  
            }
        });
    })    
  </script>