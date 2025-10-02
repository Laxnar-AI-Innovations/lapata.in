<style>
    #detailDiv hr{
      margin-top: 1rem!important;
      margin: 1rem 1rem 1rem 1rem;
    }
    label{
      font-weight: bold!important;
      color: black!important;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Missing Person</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Manage Missing Person</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3 table-responsive">
                <table class="table table-bordered  text-center" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Person Name</th>
                    <th scope="col">Person Aadhar</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Action</th>
                    <th scope="col">Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        if(count($missing) > 0)
                        {
                            $i=0;
                            foreach($missing as $k=>$v)
                            {
                                $i++;
                    ?>
                    <tr>
                        <td><?= $i; ?></td>    
                        <td><?= $v['missingname']; ?></td>    
                        <td><?= $v['missingaadhar']; ?></td>    
                        <td><?= date('Y-m-d',strtotime($v['dateCreated'])); ?></td>    
                        <td>
                            <a href="javascript:void(0)" onclick="copyLink(<?php echo $v['Id']; ?>)" class="btn btn-dark"><i class="fa fa-copy"></i></a>
                            <a href="<?php echo base_url(); ?>user/viewMissingPersonDetail/<?= $v['Id']; ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="javascript:void(0)" onclick="deleteMissingPersonDetail(<?= $v['Id']; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <td>
                            <?php 
                                if(!$v['isFound'])
                                {
                            ?>
                            <a href="javascript:void(0)" onclick="markAsFound(<?= $v['Id']; ?>)" class="btn btn-danger">Mark as Found</a>
                            <?php }else{ ?>
                                <a href="javascript:void(0)" class="btn btn-outline-success">Person Found</a>
                            <?php } ?>
                        </td>    
                     
                    </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td colspan="7">No Details Uploaded</td>
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

    function deleteMissingPersonDetail(Id)
    {
        if(confirm('Are you sure you want to delete this person detail?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>user/deleteMissingPersonDetail/'+Id,
                type:'get',
                success:function(res)
                {
                    toastr.success('Details deleted successfully.');
                    setTimeout(function()
                    {
                        location.reload();
                    },4000);
                }
            })   
        }   
    }

    function markAsFound(Id)
    {
        if(confirm('Are you sure you want to mark this person as found?'))
        {
            $.ajax({
                url:'<?php echo base_url(); ?>user/markAsFound/'+Id,
                type:'get',
                success:function(res)
                {
                    toastr.success('Marked as found!.');
                    setTimeout(function()
                    {
                        location.reload();
                    },4000);
                }
            })   
        }
    }

    function exportFoundPdf(Id)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>user/exportFoundPdf/'+Id,
            type:'get',
            beforeSend: function(){
                $(".preloader").css('display','flex');
            },
            complete: function(){
                $(".preloader").css('display','none');
            },
            success:function(res)
            {
                let parse = JSON.parse(res);
                var link=document.createElement('a');
                document.body.appendChild(link);
                link.href='<?php echo base_url(); ?>upload/foundperson/'+Id+'.pdf';
                link.setAttribute('download','');
                link.click();
            }
        })
    }

    function exportNotFoundPdf(Id)
    {
        $.ajax({
            url:'<?php echo base_url(); ?>user/exportNotFoundPdf/'+Id,
            type:'get',
            beforeSend: function(){
                $(".preloader").css('display','flex');
            },
            complete: function(){
                $(".preloader").css('display','none');
            },
            success:function(res)
            {
                let parse = JSON.parse(res);
                var link=document.createElement('a');
                document.body.appendChild(link);
                link.href='<?php echo base_url(); ?>upload/notfoundperson/'+Id+'.pdf';
                link.setAttribute('download','');
                link.click();
            }
        })
    }

    $('#aadharbtn').click(function()
    {
        $(this).attr('disabled','disabled');
        if(($('#missingaadhar').val() != '') || ($('#missingName').val() != ''))
        {
            let data = new FormData();
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            data.append('missingaadhar',$('#missingaadhar').val());
            data.append('missingname',$('#missingName').val());
            data.append('isRegistered',$('#isRegistered').val());
            $.ajax({
                url:'<?php echo base_url(); ?>user/checkMissingAadharDetails',
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
                        $('#complaintform').addClass('d-none');
                        $('#step2div').removeClass('d-none');
                        $('#stepNewform').html(parse.html);
                     }else{
                        toastr.error(parse.message);
                        $(this).removeAttr('disabled');
                    }  
                }
            });  
        }else{
            toastr.error('Please Enter aadhar number and name');
            $(this).removeAttr('disabled');
        }
    })

    function showAccordingly(val)
    {
        if(val == '')
        {
            $('#aadhardiv').addClass('d-none');
        }else{
            $('#aadhardiv').removeClass('d-none');
        }
    }

    $('#stepNewform').on('submit',function(e)
    {
        e.preventDefault();
        $('#okbtn').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                    $('#step2div').addClass('d-none');
                    $('#stepFirdiv').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#okbtn').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#stepFirform').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnFir').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                    $('#stepFirdiv').addClass('d-none');
                    $('#step3div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnFir').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#step3form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnSubmit3').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                    $('#step3div').addClass('d-none');
                    $('#step4div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#btnSubmit3').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#step5form').on('submit',function(e)
    {
        e.preventDefault();
        $('#step5btn').attr('disabled','disabled');
        let data = new FormData(this);
        data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
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
                    $('#step5div').addClass('d-none');
                    $('#step6div').removeClass('d-none');
                 }else{
                    toastr.error(parse.message);
                    $('#step5btn').removeAttr('disabled');
                }  
            }
        });  
    })

    $('#isRewarded').click(function()
    {
        if($(this).is(':checked'))
        { 
            $('#rewarddiv').removeClass('d-none');
            $('#rewardAmount').attr('required',true);
            $('#rewardAmount').attr('min',1);
        }else{
            $('#rewarddiv').addClass('d-none');
            $('#rewardAmount').attr('required',false);
            $('#rewardAmount').removeAttr('min');
        }
    })

    $('#step6Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnPay').attr('disabled','disabled');
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
                    $('#btnPay').removeAttr('disabled');
                }  
            }
        });  
    })

    function updateVal(ele,type)
    {
        if(type == 'pan')
        {
            if(ele.checked)
            { 
                $('#isPanAdded').val($('#panNumber').val());
            }else{
                $('#isPanAdded').val('');
            }
        }
        if(type == 'voter')
        {
            if(ele.checked)
            { 
                $('#isVoterAdded').val($('#voterNumber').val());
            }else{
                $('#isVoterAdded').val('');
            }   
        }
        if(type == 'dl')
        {
            if(ele.checked)
            { 
                $('#isDlAdded').val($('#dlNumber').val());
            }else{
                $('#isDlAdded').val('');
            }   
        }
    }

    $('#step4Form').on('submit',function(e)
    {
        e.preventDefault();
        $('#btnAddMob').attr('disabled','disabled');
        let mob1 = $('#mob1').val();
        let mob2 = $('#mob2').val();
        let mob3 = $('#mob3').val();
        let mob1verified = false;
        if(mob1 != '')
        {
            if($('#mob1veri').val() == 1)
            {
                mob1verified = true;
            }else{
                mob1verified = false;
            }
        }
        let mob2verified = false;
        if(mob2 != '')
        {
            if($('#mob2veri').val() == 1)
            {
                mob2verified = true;
            }else{
                mob2verified = false;
            }
        }
        let mob3verified = false;
        if(mob3 != '')
        {
            if($('#mob3veri').val() == 1)
            {
                mob3verified = true;
            }else{
                mob3verified = false;
            }
        }
        if(mob1verified || mob2verified || mob3verified)
        {
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
                        $('#step4div').addClass('d-none');
                        $('#step5div').removeClass('d-none');
                        $('#step5form').html(parse.html);
                     }else{
                        toastr.error(parse.message);
                        $('#btnAddMob').removeAttr('disabled');
                    }  
                }
            });
        }else{
            toastr.error('Entered Numbers Not Verified');
            $('#btnAddMob').removeAttr('disabled');
        }
    })

    function verifyContactOtp(ele,count)
    {
        if($('#otp'+count).val() != '')
        {
            let data= new FormData();
            data.append('otp',$('#otp'+count).val());
            data.append('mobile',$('#personMob'+count).val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');

            $.ajax({
              url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                      $('#sendOtp'+count).addClass('d-none');
                      $('#otp'+count+'div').addClass('d-none');
                      $('#mob'+count+'veri').val(1);
                      $('#mob'+count).val($('#personMob'+count).val());
                      $('#personMob'+count).attr('readonly',true);
                      $('#personMob'+count).addClass('is-valid');
                  }else{
                      toastr.error(parse.message);
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Otp');
        }   
    }

    function verifyOtpFunc(ele)
    {
        $(ele).attr('disabled','disabled');
        if($('#verifyOtp').val() != '')
        {
            let data= new FormData();
            data.append('otp',$('#verifyOtp').val());
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            
            $.ajax({
              url:'<?php echo base_url(); ?>user/verifyMissingMobileOtp',
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
                      $('#btnSendOtp').addClass('d-none');
                      $('#verifyDiv').addClass('d-none');
                      $('#mobNumber').attr('disabled',true);
                      $('#btnFir').click();
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                      $('#Firdiv').addClass('d-none');
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Otp');
            $(ele).removeAttr('disabled');
            $('#Firdiv').addClass('d-none');
        }
    }

    function removeMobile(index)
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')));
        if(count > 0)
        {
            $('#addMoreMobileDiv').children().last().remove();
            $('#mob'+index).val('');
            $('#mob'+index+'veri').val(0);
            $('#mobCount').attr('value',((count)) - 1);
        }else{
            $('#mobCount').attr('value',1);
        }
    }

    function addMobile()
    {
        let count = parseInt(parseInt($('#mobCount').attr('value')) + parseInt(1));
        if(count <=3)
        {
            let html = `<div class="row mb-3">
                          <div class="col-lg-2">
                              <label for="ownerName">Mobile Number</label>
                              <input type="text" class="form-control mt-2" id="personMob`+count+`" name="personMob`+count+`" required placeholder="Enter Mobile Number">  
                          </div>
                          <div class="col-lg-2 mt-4">
                              <button type="button" class="btn btn-info mt-2 disabled-on-loading" style="background-color: cornflowerblue!important;" id="sendOtp`+count+`" onclick="sendContactOtp(this,`+count+`)"> Send Otp</button>
                          </div>    
                          <div class="col-lg-3 d-none" id="otp`+count+`div">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <label for="ownerName">Enter Otp</label>
                                      <input type="number" class="form-control mt-2" id="otp`+count+`" name="otp`+count+`">
                                  </div>
                                  <div class="col-lg-6 mt-4">
                                      <a href="javascript:void(0)" class="btn btn-outline-success mt-2" onclick="verifyContactOtp(this,`+count+`)">Verify Otp</a>          
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-2 mt-4">
                            <a href="javascript:void(0)" class="btn btn-outline-danger mt-2" onclick="removeMobile(`+count+`)"><i class="fa fa-times" title="remove Mobile"></i></a>
                          </div>
                      </div>`;
          $('#addMoreMobileDiv').append(html);
          $('#mobCount').attr('value',count);   
        }else{
            toastr.error('You can add upto two contact numbers');
        }
    }

    function sendContactOtp(ele,count)
    {
        let mob = $('#personMob'+count).val();
        $('#sendOtp'+count).attr('disabled','disabled');
        if(mob != '')
        {
            let data= new FormData();
            data.append('mobile',mob);
            data.append('count',count);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
              url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                      $('#personMob'+count).attr('readonly',true);
                      $('#otp'+count+'div').removeClass('d-none');
                  }else if(parse.status == 'username')
                  {
                      toastr.warning(parse.message);
                      removeMobile(count);
                      $('#sendOtp'+count).removeAttr('disabled');
                  }else{
                      toastr.error(parse.message);
                      removeMobile(count);
                      $('#sendOtp'+count).removeAttr('disabled');
                  }
              }
            })
        }else{
            toastr.error('Please Enter Valid Mobile Number');
            $('#sendOtp'+count).removeAttr('disabled');
        }
    }

    function sendOtp(ele)
    {
        let mob = $('#mobNumber').val();
        $(ele).attr('disabled','disabled');
        if(mob != '')
        {
            let data= new FormData();
            data.append('mobile',mob);
            data.append('_token','<?php echo $this->security->get_csrf_hash(); ?>');
            $.ajax({
              url:'<?php echo base_url(); ?>user/sendMissingPersonVerifyOtp',
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
                      $('#mobNumber').attr('readonly',true);
                      $('#verifyDiv').removeClass('d-none');
                  }else{
                      toastr.error(parse.message);
                      $(ele).removeAttr('disabled');
                  }
              }
            })
        }else{
            toastr.error('Please Select Mobile Number');
            $(ele).removeAttr('disabled');
        }
    }
    
    function copyLink(Id)
    {
        navigator.clipboard.writeText('<?php echo base_url(); ?>user/missingpersondetail/'+Id);
        toastr.success('Link Copied Successfully');
    }
  </script>