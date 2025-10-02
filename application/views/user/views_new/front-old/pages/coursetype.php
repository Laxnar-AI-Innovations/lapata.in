

<!-- Start Breadcrumbs -->
    <section class="breadcrumbs overlay">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>All Courses</h2>
            <ul class="bread-list">
              <li><a href="home">Home<i class="fa fa-angle-right"></i></a></li>
              <li class="active"><a href="#">
                All Courses Video/Pdf</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Breadcrumbs -->
    <section class="courses section-bg section">
      <div class="container">
        <form method="post" action="home/allinfo">
      <div class="form-row"> 
        
                                   <div class="form-group col-md-4">
                                <label>Select Course Type</label>
                                <select name="ddlcoursetype" class="form-control" onchange="getcoursename(this.value)">
                                    <option>Select</option>
                                <?php foreach ($course_type_data as $key => $value) {  ?>
                                    <option value="<?php echo $value['coursetype']; ?>"><?php echo $value['coursetype']; ?></option>
                          <?php     } ?>       

                                   
                                </select>
                                </div>
                                 
                                 <div class="form-group col-md-4">
                                    <label>Select Course Name</label>
                             <select name="ddlcoursename" id="subCategory" class="form-control">
                                        <option>Select</option>
                                    </select>
                                    </div>
                                        <script>
                                function getcoursename(id)
                                {
                                    if(id!=''){
                                    $.ajax({
                                        url:'<?php echo base_url(); ?>admin/getcourse',
                                        data:{id:id},
                                        type:'post',
                                        success:function(res)
                                        {
                                           
                                           let parse = JSON.parse(res);
                                             console.log(parse);
                                            if(parse.length > 0)
                                            {
                                                $('#subCategory').children('option').remove();
                                                $.each(parse, function(key, value) {   
                                                     $('#subCategory')
                                                         .append($("<option></option>")
                                                                    .attr("value", value.coursename)
                                                                    .text(value.coursename)); 
                                                });
                                            }
                                            if(parse.length == 0)
                                            {
                                                $('#subCategory').children('option').remove();
                                                $('#subCategory').append($("<option></option>").attr('value',"").text('No Course Name Found'));
                                            }
                                        }
                                    })
                                }
                                else{
                                     $('#subCategory').children('option').remove();
                                      $('#subCategory').append($("<option></option>").attr('value',"").text('No course name Found'));
                                }
                                }
                                
                            </script>
                       </div>
                         <div class=" col-md-4"></div>
                         <div class="form-group col-md-4">
                          
                                <button class="btn btn-success">Get Video/ Pdf</button>  
                                   
                                  </div>



</form>
</div>
</section>