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
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <form id="addDl" action="<?php echo base_url(); ?>admin/updateSettings" method="post">
                            <?php 
                                $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                                );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="gridlineKey"')->result_array();
                            ?>
                            <div class="row mb-3">
                                <label for="gridlineKey" class="col-md-4 col-lg-4 col-form-label">Enter Gridline Key</label>
                                <div class="col-md-8 col-lg-8">
                                    <input type="text" class="form-control" id="gridlineKey" value="<?= $getSettings[0]['value']; ?>" name="gridlineKey" placeholder="Enter Gridline Key">
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="afterLoginThreshold"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="afterLoginThreshold" class="col-md-4 col-lg-4 col-form-label">Enter After Login Threshold</label>
                                <div class="col-md-8 col-lg-8">
                                    <input type="number" min="0" step="0.01" max="1" class="form-control" id="afterLoginThreshold" value="<?= $getSettings[0]['value']; ?>" name="afterLoginThreshold" placeholder="Enter After Login Threshold">
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="beforeLoginThreshold"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="beforeLoginThreshold" class="col-md-4 col-lg-4 col-form-label">Enter Before Login Threshold</label>
                                <div class="col-md-8 col-lg-8">
                                    <input type="number" min="0" step="0.01" max="1" class="form-control" id="beforeLoginThreshold" value="<?= $getSettings[0]['value']; ?>" name="beforeLoginThreshold" placeholder="Enter Before Login Threshold">
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="policeThreshold"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="policeThreshold" class="col-md-4 col-lg-4 col-form-label">Enter Police Threshold</label>
                                <div class="col-md-8 col-lg-8">
                                    <input type="number" min="0" step="0.01" max="1" class="form-control" id="policeThreshold" value="<?= $getSettings[0]['value']; ?>" name="policeThreshold" placeholder="Enter Police Threshold">
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="ourFRTThreshold"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="ourFRTThreshold" class="col-md-4 col-lg-4 col-form-label">Enter Our FRT Threshold</label>
                                <div class="col-md-8 col-lg-8">
                                    <input type="number" min="1" max="100" class="form-control" id="ourFRTThreshold" value="<?= $getSettings[0]['value']; ?>" name="ourFRTThreshold" placeholder="Enter Our FRT Threshold">
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="mahakumbhFilter"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="KPF" class="col-md-4 col-lg-4 col-form-label">KPF</label>
                                <div class="col-md-8 col-lg-8">
                                    <select name="KPF" id="KPF" class="form-control">
                                        <option value="yes" <?= $getSettings[0]['value'] == 'yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="no" <?= $getSettings[0]['value'] == 'no' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="mahakumbhIdentity"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="identity" class="col-md-4 col-lg-4 col-form-label">Mahakumbh Identity</label>
                                <div class="col-md-8 col-lg-8">
                                    <select name="identity" id="identity" class="form-control">
                                        <option value="Yes" <?= $getSettings[0]['value'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="No" <?= $getSettings[0]['value'] == 'No' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="mahakumbhSpecial"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="khoyapaya" class="col-md-4 col-lg-4 col-form-label">Mahakumbh Khoya Paya</label>
                                <div class="col-md-8 col-lg-8">
                                    <select name="khoyapaya" id="khoyapaya" class="form-control">
                                        <option value="yes" <?= $getSettings[0]['value'] == 'yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="no" <?= $getSettings[0]['value'] == 'no' ? 'selected' : ''; ?>>No</option>
                                    </select>
                                </div>
                            </div>
                            <?php 
                                $getSettings = $this->db->query('select * from settings where name="mahakumbhFamily"')->result_array();
                            ?>
                            <div class="row mb-3 align-items-center">
                                <label for="family" class="col-md-4 col-lg-4 col-form-label">Mahakumbh Family Member</label>
                                <div class="col-md-8 col-lg-8">
                                    <select name="family" id="family" class="form-control">
                                        <option value="yes" <?= $getSettings[0]['value'] == 'yes' ? 'selected' : ''; ?>>Yes</option>
                                        <option value="no" <?= $getSettings[0]['value'] == 'no' ? 'selected' : ''; ?>>No</option>
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