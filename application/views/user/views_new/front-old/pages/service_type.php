<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-title">
                    <h2>Find a Professional</h2>
                </div>
            </div>
            <div class="col-auto float-right ml-auto breadcrumb-menu">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Find a Professional</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 theiaStickySidebar">
                <div class="card filter-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Search Filter</h4>
                        <form id="search_form">

                            <div class="filter-widget">
                                <div class="filter-list">
                                    <h4 class="filter-title">Keyword</h4>
                                    <input type="text" id="common_search" value="" class="form-control common_search" placeholder="What are you looking for?" />
                                </div>
                                <div class="filter-list">
                                    <h4 class="filter-title">Sort By</h4>
                                    <select id="sort_by" class="form-control selectbox select">
                                        <option value="">Sort By</option>
                                        <option value="1">Price Low to High</option>
                                        <option value="2">Price High to Low</option>
                                        <option value="3">Newest</option>
                                    </select>
                                </div>
                                <div class="filter-list">
                                    <h4 class="filter-title">Categories</h4>
                                    <select id="categories" class="form-control form-control selectbox select" onchange="getSubcategory(this.value);">
                                        <option value="">All Categories</option>
                                        <?php 
                                            $getAllCategories = $this->db->query('select * from businesscategory')->result_array();
                                            if(count($getAllCategories) > 0)
                                            {
                                                foreach($getAllCategories as $key=>$value)
                                                {
                                        ?>
                                        <option value="<?php echo $value['id']; ?>" <?php if($catId){ if($catId == $value['id']) { echo "selected"; } } ?>><?php echo $value['categoryname']; ?></option>
                                        <?php } }else{ ?>
                                        <option value="">No Categories Found</option>
                                        <?php } ?>
                                        <!--<option value="6" >Construction</option><option value="3" >Car Wash</option><option value="5" >Electrical</option><option value="4" >Cleaning</option><option value="2" >Interior</option><option value="1" >Computer</option>                                    </select>-->
                                        </select>
                                </div>
								<div class="filter-list">
                                    <h4 class="filter-title">Sub Category</h4>
                                    <select id="subcategories" class="form-control selectbox select">
                                        <option value="">Choose the Sub Category</option>
                                        <!--<option value="7" >Others</option>                                    -->
                                    </select>
                                </div>
                                <!--<div class="filter-list">-->
                                <!--    <h4 class="filter-title">Location</h4>-->
                                <!--    <input class="form-control" type="text" id="service_location" value="" placeholder="Search Location" name="user_address" >-->
                                <!--    <input type="hidden" value="" id="service_latitude">-->
                                <!--    <input type="hidden" value="" id="service_longitude">-->
                                <!--</div>-->
                                <div class="filter-list">
                                    <h4 class="filter-title">Price Range</h4>
                                    <div class="price-ranges">
                                                                                &#36;<span class="from d-inline-block" id="min_price">5</span> -
                                        &#36;<span class="to d-inline-block" id="max_price">500</span>
                                    </div>	
                                    <div class="range-slider price-range"></div>										
                                </div>
                            </div>
                            <button class="btn btn-primary pl-5 pr-5 btn-block get_services" type="button">Search</button>
                        </form>	
                    </div>
                </div>
            </div>
            <?php 
                if(isset($catId))
                {
                    $this->db->where('category_id',$catId);
                }
                if(isset($subCatId))
                {
                    $this->db->where('sub_cat_id',$subCatId);
                }
                $getServices = $this->db->get('service')->result_array();
            ?>
            <div class="col-lg-9">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 col">
                        <h4><span id="service_count"><?php echo count($getServices); ?></span> Services Found</h4>
                    </div>
                    <div class="col-md-6 col-auto">
                        <div class="view-icons ">
                            <a href="javascript:void(0);" class="grid-view active"><i class="fas fa-th-large"></i></a>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="row" id="dataList">
                        <?php 
                            if(count($getServices) > 0)
                            {
                                foreach($getServices as $key=>$g)
                                {
                        ?>
                                <div class="col-md-4 col-sm-6 service-widget">
                                    <div class="service-img">
                                        <a href="<?php echo base_url(); ?>home/more_details/<?php echo $g['id']; ?>">												                                    
                                        <img class="img-fluid serv-img" alt="Service Image" src="<?php echo base_url().$g['image'];?>" alt="" style="height: 200px">
										
                                        </a>
                                        <div class="item-info">
                                            <div class="service-user">
                                                <a href="<?php echo base_url(); ?>home/more_details/<?php echo $gc['id']; ?>">                                                                                                           <img src="<?php echo base_url().$g['image'];?>">
                                                                                                    </a>
                                                <span class="service-price">Rs. <?php echo $g['service_cost']; ?></span>
                                            </div>
                                            <div class="cate-list">
                                                <a class="bg-yellow" href="#"><?php echo $g['category_name']; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title text-center">
                                    <a href="service_details/<?php echo $g['city']; ?>/<?php echo $g['slug']; ?>/<?php echo $g['id'] ?>"><?php echo $g['service_name']; ?></a>
                                        </h3>
                                        <h6>
                                    <a href="service_details/<?php echo $g['city']; ?>/<?php echo $g['slug']; ?>/<?php echo $g['id'] ?>"><?php echo $g['address']; ?></a>
                                        </h6>
                                       <div class="rating">
                                            <i class="fas fa-star <?php if($g['star_rating'] < 6){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star <?php if($g['star_rating'] < 6 && $g['star_rating'] >= 2){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star  <?php if($g['star_rating'] < 6 && $g['star_rating'] >= 3){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star  <?php if($g['star_rating'] < 6 && $g['star_rating'] >= 4){ echo "filled"; } ?>"></i>
                                            <i class="fas fa-star  <?php if($g['star_rating'] >= 5){ echo "filled"; } ?>"></i>                                           
                                            <span class="d-inline-block average-rating"></span>
                                        </div>
                                        <div class="user-info">

                                            <div class="row">                                                                                
                                            <span class="col ser-contact"><i class="fas fa-phone mr-1"></i> <span><a href="tel:<?php echo $g['phone_no']; ?>"><?php echo $g['phone_no']; ?></a></span></span>
                                                        <span class="col ser-location"><span title="<?php echo $g['Area']; ?>,<?php echo $g['city']; ?>"><?php echo $g['Area']; ?>,<?php echo $g['city']; ?></span> <i class="fas fa-map-marker-alt ml-1" title="<?php echo $g['Area']; ?>,<?php echo $g['city']; ?>"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } }else{ ?>
                            <?php } ?>


                    </div>
                </div>

            </div>					
        </div>
    </div>
</div>

<script>
    function getSubcategory(val)
    {
        $('#subcategories').empty();
        $.ajax({
            url:'<?php echo base_url(); ?>Home/getSubCategories',
            data:{catId:val},
            type:'post',
            success:function(res)
            {
                let parse = JSON.parse(res);
                if(parse.length > 0)
                {
                    $.each(parse, function(key, value) {   
                         $('#subcategories')
                             .append($("<option></option>")
                                        .attr("value", value.id)
                                        .text(value.subcategoryname)); 
                    });
                }else
                {
                    $('#subcategories').append($("<option></option>").attr("value", "").text("No Sub Category Found")); 
                }
            }
        })
    }
</script>