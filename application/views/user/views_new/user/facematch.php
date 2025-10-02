<div class="container-fluid">

  <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center" id="uploaddiv">

          <div class="card mb-3">

            <div class="card-body" id="otpdiv">
                
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Face Match</h5>
                    <p class="text-center small">You can upload multiple files in file2</p>
                </div>

                <form class="row g-3 needs-validation" method="post" action="<?php echo base_url(); ?>user/facematch/do_upload" id="registerForm">
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
                  <label for="file1" class="form-label">Select Multiple Files</label>
                  <input type="file" name="file2[]" multiple class="form-control" id="file2" required>
                  <div class="invalid-feedback">Please, select file 2</div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100 disabled-on-loading" id="btnSubmit" type="submit"> Submit</button>
                </div>
              </form>

            </div>
          </div>

          <div class="credits">
            Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
          </div>

        </div>
        <div class="col-lg-12 col-md-12 d-none d-flex flex-column align-items-center justify-content-center" id="resultdiv">

          <div class="d-flex justify-content-center py-4">
            <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center w-auto">
              <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
              <span class="d-none d-lg-block"></span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3 w-100">

            <div class="card-body">
                
            </div>
          </div>

          <div class="credits">
            Designed by <a href="https://shammtech.in/">Shammtech It Solution</a>
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