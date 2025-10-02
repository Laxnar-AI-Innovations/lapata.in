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
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <form id="addDl" action="<?php echo base_url(); ?>admin/updateDateSettings" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="funnelDateSetting"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center justify-content-between">
                                <label for="FUNNEL" class="col-md-4 col-lg-4 col-form-label">FUNNEL</label>
                                <div class="col-md-4 col-lg-4">
                                    <select name="FUNNEL" id="FUNNEL" style="appearance:auto!important;" class="form-control">
                                        <option value="1" <?= $getSettings[0]['value'] == '1' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="0" <?= $getSettings[0]['value'] == '0' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="frontendDateSetting"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center justify-content-between">
                                <label for="FRONTEND" class="col-md-4 col-lg-4 col-form-label">Homepage</label>
                                <div class="col-md-4 col-lg-4">
                                    <select name="FRONTEND" id="FRONTEND" style="appearance:auto!important;" class="form-control">
                                        <option value="1" <?= $getSettings[0]['value'] == '1' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="0" <?= $getSettings[0]['value'] == '0' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="lapataNonKycMissingDateSetting"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center justify-content-between">
                                <label for="lapataNonKycMissingDate" class="col-md-6 col-lg-6 col-form-label">Lapata Non-KYC Missing Date</label>
                                <div class="col-md-4 col-lg-4">
                                    <select name="lapataNonKycMissingDate" id="lapataNonKycMissingDate" style="appearance:auto!important;" class="form-control">
                                        <option value="1" <?= $getSettings[0]['value'] == '1' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="0" <?= $getSettings[0]['value'] == '0' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="lapataNonKycDOBSetting"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center justify-content-between">
                                <label for="lapataNonKycDOB" class="col-md-6 col-lg-6 col-form-label">Lapata Non-KYC DOB</label>
                                <div class="col-md-4 col-lg-4">
                                    <select name="lapataNonKycDOB" id="lapataNonKycDOB" style="appearance:auto!important;" class="form-control">
                                        <option value="1" <?= $getSettings[0]['value'] == '1' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="0" <?= $getSettings[0]['value'] == '0' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnDl" type="submit" class="btn d-block btn-primary disabled-on-loading w-100 save"> Update</button>
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
                    },4000);
                 }else{
                    toastr.error(parse.message);
                    $('#btnDl').removeAttr('disabled');
                }  
            }
        });
    })    
  </script>