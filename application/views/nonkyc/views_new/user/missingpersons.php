<div class="container-fluid px-0">
    <section class="section register d-flex flex-column align-items-center justify-content-center">
        <div class="container-fluid px-0">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-3 col-sm-12">
                        <div class="card-body">
                            <div class="pb-2">
                                <h5 class="card-title text-center pb-0 fs-4 pt-2">Missing Persons</h5>
                            </div>
                            <div class="row">
                                <div class=" mb-3 col-lg-3 col-sm-12">
                                    <select name="state" class="form-select select2" id="firstate" aria-label="Select State">
                                        <option value="All">Select State</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-3 col-sm-12">
                                    <select name="district" class="form-select select2" id="firDistrict" aria-label="Select District">
                                        <option value="All">Select District</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-3 col-sm-12">
                                    <select name="category" class="form-select select2" id="category" aria-label="Select Category" onchange="getSubCategories(this.value)">
                                        <option value="All">Select Filters</option>
                                        <?php 
                                            $getCategories = $this->db->query('select * from categories where isDeleted=0')->result_array();
                                            if(count($getCategories) > 0)
                                            {
                                                foreach($getCategories as $k=>$v)
                                                {
                                        ?>
                                        <option value="<?php echo $v['Id']; ?>"><?php echo $v['englishCategoryName'].'/'.$v['hindiCategoryName']; ?></option>
                                        <?php } } ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-3 col-sm-12">
                                    <select name="subcategory" class="form-select select2" id="subcategory" aria-label="Select Subcategory">
                                        <option value="All">All</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-3 col-sm-12 col-lg-3">
                                    <input type="date" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="fromdate" id="fromdate" placeholder="Select From Date" onchange="getMaxDate(this.value)">
                                    <label for="fromdate" style="padding-left:1.6rem;">Select From Date</label>
                                </div>
                                <div class="form-floating mb-3 col-sm-12 col-lg-3">
                                    <input type="date" max="<?php echo date('Y-m-d'); ?>" class="form-control" name="todate" id="todate" placeholder="Select To Date">
                                    <label for="todate" style="padding-left:1.6rem;">Select To Date</label>
                                </div>
                                <div class="mb-3 col-sm-12 col-lg-2">
                                    <a href="javascript:void(0)" class="btn btn-outline-success d-block p-3" onclick="search()">Search</a>
                                </div>
                            </div>
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
    function getMaxDate(date)
    {
        $('#')
    }
    
    function getSubCategories(Id)
    {
        $('#subcategory').empty();
        $('#subcategory').append('<option value="All">All</option>');
        if(Id != 'All')
        {
            $.ajax({
                url:'<?php echo base_url(); ?>user/getSubCategories/'+Id,
                type:'get',
                success:function(res)
                {
                    let parse = JSON.parse(res);
                    if(parse.length > 0)
                    {
                        for(let i=0;i<parse.length;i++)
                        {
                            $('#subcategory').append('<option value="'+parse[i].Id+'">'+parse[i].englishSubCategoryName + '/' + parse[i].hindiSubCategoryName +'</option>');
                        }
                    }
                }
            })
        }
    }
</script>