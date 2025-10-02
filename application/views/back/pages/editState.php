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
        <h1>State</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">State</li>
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
                                <a href="javascript:void(0)" class="btn btn-default text-dark"><b>Edit State</b></a>
                            </div>
                        </div>
                        <hr>
                        <form id="addAges" action="<?php echo base_url(); ?>admin/postState" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                $getState = $this->db->query('select * from states where id='.$this->uri->segment('3'))->result_array();
                            ?>
                            <input type="hidden" name="id" value="<?=$this->uri->segment('3');?>" />
                            <div class="row mb-3">
                                <label for="state" class="col-md-6 col-lg-6 col-form-label">Enter State</label>
                                <div class="col-md-6 col-lg-6">
                                    <input type="text" class="form-control text-uppercase" value="<?= $getState[0]['name']; ?>" id="state" name="name" placeholder="Enter State Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button id="btnAges" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Save</button>
                                </div>
                                <div class="col-6">
                                    <button id="btnBack" type="button" class="btn d-block btn-dark disabled-on-loading w-100 save" style="background:black!important;"> Back</button>
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
        location.href="<?= base_url(); ?>admin/create_state";
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