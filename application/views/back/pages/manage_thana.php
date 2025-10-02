<style>
    th{
        text-align:center!important;
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
<?php 
    $csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash()
    );
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Thana</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Home</a></li>
                <li class="breadcrumb-item active">Manage Thana</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3 table-responsive">
                        <div class="row align-items-end">
                            <div class="form-group col-12 col-md-4">
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
                                    <option value="<?= $v['name']; ?>" <?= ((!empty($_GET['st'] && isset($_GET['st'])) ? (trim(strtolower($_GET['st'])) == trim(strtolower($v['name'])) ? 'selected' : '') : '')); ?>><?= $v['name']; ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-4">
                                <label for="state" class="col-form-label">Select District</label>
                                <select required class="form-control <?= isset($_GET['st']) && !empty($_GET['st']) ? 'select2' : ''; ?>" name="district" id="district">
                                    <option value="">Select District</option>
                                    <?php 
                                        if(!empty($_GET['st']) && isset($_GET['st']))
                                        {
                                            $getDistrict = $this->db->query('select * from district where st_name="'.$_GET['st'].'"')->result_array();
                                            if(count($getDistrict) > 0)
                                            {
                                                foreach($getDistrict as $k=>$v)
                                                {
                                    ?>
                                    <option value="<?= $v['d_name']; ?>" <?= ((!empty($_GET['dt'] && isset($_GET['dt'])) ? (trim(strtolower($_GET['dt'])) == trim(strtolower($v['d_name'])) ? 'selected' : '') : '')); ?>><?= $v['d_name']; ?></option>
                                    <?php } } } ?>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-4 text-center text-md-start">
                                <button type="button" onclick="filter(this)" class="btn btn-dark save" style="background:black!important;">Filter</button>
                                <button type="button" onclick="deleteCheckedThana(this)" class="btn btn-danger reset disabled-on-loading"> Delete</button>
                            </div>
                        </div>
                        <table class="table text-center table-striped table-bordered datatable1">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" class="selectAll"></th>
                                    <th>#</th>
                                    <th>State Name</th>
                                    <th>District Name</th>
                                    <th>Thana Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(!empty($_GET['st']) && isset($_GET['st']))
                                {
                                    if(!empty($_GET['dt']) && isset($_GET['dt']))
                                    {
                                        $getThana = $this->db->query('select * from police_thana where state="'.$_GET['st'].'" and district="'.$_GET['dt'].'" order by id desc')->result_array();   
                                    }else{
                                        $getThana = $this->db->query('select * from police_thana where state="'.$_GET['st'].'" order by id desc')->result_array();
                                    }
                                }else{
                                    $getThana = $this->db->query('select * from police_thana order by id desc')->result_array();
                                }
                                if(count($getThana) > 0)
                                {
                                    $i = 0;
                                    foreach($getThana as $k=>$v)
                                    {
                                        $i++;
                            ?>
                            <tr>
                                <td><input type="checkbox" class="child" value="<?= $v['id']; ?>"></td>
                                <td><?= $i; ?></td>
                                <td><?= $v['state']; ?></td>
                                <td><?= $v['district']; ?></td>
                                <td><?= $v['thana']; ?></td>
                                <td>
                                    <a href="<?php echo base_url(); ?>admin/editThana/<?= $v['id']; ?>" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" onclick="deleteThana(<?= $v['id']; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr>
                                <td colspan="5">No Thana Found</td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

  <script type="text/javascript">
    
    function deleteCheckedThana(ele)
    {
        let checked = $('.datatable1 tbody :checkbox:checked');
        if(checked.length > 0)
        {
            if(confirm('Are you sure you want to delete this thana?'))
            {
                $(ele).attr('disabled',true);       
                let Ids = [];
                for(let i=0;i<checked.length;i++)
                {
                    Ids.push($(checked[i]).val());
                }
                $.ajax({
                    url:'<?php echo base_url(); ?>admin/deleteCheckedThana',
                    data:{'Ids[]':Ids,_token:'<?=$csrf['hash'];?>'},
                    type:'post',
                    success:function(res)
                    {
                        toastr.success('Thana Deleted Successfully');
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
    
    $('#btnBack').click(function()
    {
        location.reload();
    })
    
    function filter(ele)
    {
        location.href="<?= base_url(); ?>admin/manage_thana?st="+$('#state').val()+"&dt="+$('#district').val();
    }
  
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
  
    function deleteThana(Id)
    {
        if(confirm('Are you sure you want to delete this thana?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>admin/deleteThana',
                data:{Id:Id,_token:'<?=$csrf['hash'];?>'},
                type:'post',
                success:function(res)
                {
                    toastr.success('Thana Deleted Successfully');
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
  </script>