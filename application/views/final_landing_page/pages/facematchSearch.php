<div class="container-fluid">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center" id="uploaddiv">

          <div class="card mb-3">

            <div class="card-body" id="otpdiv">
                
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0">Face Match</h5>
                </div>

                <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>landing/facematchSearch/do_upload" id="registerForm">
                <?php 
                  $csrf = array(
                    'name' => $this->security->get_csrf_token_name(),
                    'hash' => $this->security->get_csrf_hash()
                    );
                ?>
                <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                <div class="col-12">
                  <label for="file1" class="form-label">Select Main Photo</label>
                  <input type="file" name="file1" class="form-control" id="file1" required>
                  <div class="invalid-feedback">Please, select file 1</div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 d-none d-flex flex-column align-items-center justify-content-center" id="resultdiv">
            <div class="card mb-3 w-100">
                <div class="card-body">
                
                </div>
            </div>
        </div>
      </div>
    </div>

  </section>

</div>

<script type="text/javascript">

    $('#registerForm').on('submit',function(e)
    {
        let arr = $(this).serializeArray();
        let count = 0;
        for(let i=0;i<arr.length;i++)
        {
          if(arr[i].value != '')
          {
            count++;
          }
        }
        if(count == arr.length)
        {
            $('#btnSubmit').attr('disabled','disabled');
            e.preventDefault();
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
                    console.log(parse);
                    if(parse.status == 'success')
                    {
                        toastr.success(parse.message);
                        $('#uploaddiv').addClass('d-none');
                        $('#resultdiv').removeClass('d-none');
                        $('#resultdiv .card-body').html(parse.html);
                    }else{
                        toastr.error(parse.message);
                        $('#btnSubmit').removeAttr('disabled');
                    }
                }
            });
        }else{
            return false;
        }
    })
</script>