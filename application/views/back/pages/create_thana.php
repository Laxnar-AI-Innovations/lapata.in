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
        <h1>Thana</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Thana</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header py-0">
                        <p class="card-title mb-0" style="font-size:1rem;"><b class="text-danger">Note: - </b> Separate Thana Names with Comma</p>
                    </div>
                    <div class="card-body pt-3">
                        <form id="addDl" action="<?php echo base_url(); ?>admin/postThana" method="post">
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
                                    <select required class="select2 form-control" onchange="getDistrict(this.value)" name="state" id="state">
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
                                    <label for="state" class="col-form-label">Select District</label>
                                    <select required class="form-control" name="district" id="district">
                                        <option value="">Select District</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Enter Thana Name</label>
                                    <input type="text" class="form-control" required id="tags" name="thanaName">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
                                </div>
                                <div class="col-md-4 col-12 mt-3 mt-md-0">
                                    <button id="btnBack" type="button" class="btn d-block btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Cancel</button>
                                </div>
                                <div class="col-md-4 col-12 mt-3 mt-md-0">
                                    <button id="btnManage" type="button" class="btn d-block btn-primary disabled-on-loading w-100 next"> Manage</button>
                                </div>
                            </div>
                        </form>
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
    
    $('#btnManage').click(function()
    {
        location.href="<?= base_url(); ?>admin/manage_thana";
    })
  
    function getDistrict(name)
    {
        $('#district').empty();
        if($('#district').hasClass('select2-hidden-accessible'))
        {
            $("#district").select2('destroy');    
        }
        $.ajax({
            url:'<?php echo base_url(); ?>admin/getDistrict',
            data:{name:name,_token:'<?=$csrf['hash'];?>'},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.length > 0)
                {
                    $.each(parse, function(index, option) {
                        $('#district').append(
                            $('<option></option>').val(option.d_name).text(option.d_name)
                        );
                    });
                    $('#district').select2().trigger('change');
                }else{
                    $('#district').append('<option value="">No Districts Available</option>');
                }
            }
        })
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