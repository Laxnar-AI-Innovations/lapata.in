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
        <h1>Age Bands</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Age Bands</li>
                <li class="breadcrumb-item active">Edit</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Edit Ages</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addAges" action="<?php echo base_url(); ?>admin/postAges" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <div class="row mb-3">
                                <div class="form-group col-12">
                                    <label>Select Age Bands</label>
                                    <select required class="form-control" name="ageBands" style="appearance:auto!important;">
                                        <option value="">Select Age Bands</option>
                                        <?php 
                                            $getAgeBands = $this->db->query('select * from ageBands')->result_array();
                                            if(count($getAgeBands) > 0)
                                            {
                                                foreach($getAgeBands as $k=>$v)
                                                {
                                        ?>
                                        <option value="<?= $v['ageBand']; ?>"><?= $v['ageBand']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Enter Age</label>
                                    <input type="text" class="form-control" name="ages" required placeholder="Enter age between the age bands...">
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnAges" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
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
                    },100);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })
    
    $('#addAges').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnAges').attr('disabled','disabled');
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
                    },100);
                 }else{
                    toastr.error(parse.message);
                    $('#btnAges').removeAttr('disabled');
                }  
            }
        });
    })
  </script>