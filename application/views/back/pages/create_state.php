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
        <h1>State</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">State</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3">
                        <div class="row mb-3">
                            <div class="px-0 col-lg-12 col-sm-12 text-left">
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Create State</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postState" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row mb-3">
                                <div class="form-group form-floating">
                                    <input type="text" class="form-control text-uppercase" id="state" name="name" placeholder="Enter State Name" required>
                                    <label for="state" class="ps-3" style="font-size:0.9rem;">Enter State</label>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Manage States</b></a>
                            </div>
                        </div>
                        <hr>
                        <table class="table text-center table-bordered table-striped datatable">
                            <tr>
                                <th>#</th>
                                <th>State Name</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                $getStates = $this->db->query('select * from states order by id desc')->result_array();
                                if(count($getStates) > 0)
                                {
                                    $i = 0;
                                    foreach($getStates as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $v['name']; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editState/<?= $v['id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteState(<?= $v['id']; ?>)" class="btn btn-danger mt-md-0 mt-3"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="4">No States Found</td>
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
  
    function deleteState(Id)
    {
        if(confirm('Are you sure you want to delete this state?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteState',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('State Deleted Successfully');
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
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
  </script>