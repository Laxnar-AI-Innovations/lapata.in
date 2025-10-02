
    <style>
        body {
  padding: 2rem 0rem;
}

.card-img {
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.card-title {
  margin-bottom: 0.3rem;
}

.cat {
  display: inline-block;
  margin-bottom: 1rem;
}

.fa-users {
  margin-left: 1rem;
}

.card-footer {
  font-size: 0.8rem;
}
    </style>
    <section class="mt-100 mb-70">
        <div class="container">
    <div class="row">
                 <div  class="col-lg-12 col-sm-12 col-md-12 form-group">
            <h4 class="text-center">Blogs</h4>
        </div>
    <div class="container">
  <div class="row">
       <?php $blog = $this->db->query('select * from blog')->result_array(); 
foreach ($blog as $key => $bg) {  ?>
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="<?php echo base_url().$bg['image'];   ?>" alt="Laptop Store" style="height:120px">
        <!--<div class="card-img-overlay">-->
        <!--  <a href="#" class="btn btn-light btn-sm"><?php echo $bg['title']; ?></a>-->
        <!--</div>-->
        <div class="card-body">
          <h4 class="card-title"><?php echo $bg['title']; ?></h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> 30 minutes
            <i class="fas fa-users text-info"></i> 4 portions
          </small>
          <p class="card-text"<?php echo substr($bg['details'],20); ?></p>
              
                            <?php
                                if(isset($_SESSION['city']))
                                {
                            ?>
                            <a href="<?php echo base_url(); ?>blog-details/<?php echo $_SESSION['city'] ?>/<?php echo str_replace(' ','-',$bg['title']); ?>" class="btn btn-info">
                                Read More
                            </a>
                            <?php }else{ ?>
                                <a href="<?php echo base_url(); ?>blog-details/Bangalore/<?php echo str_replace(' ','-',$bg['title']); ?>" class="btn btn-info">
                                    Read More
                                </a>
                            <?php } ?>
          <!--<a href="<?php echo base_url(); ?>blog-details/<?php echo $_SESSION['city'] ?>/<?php echo str_replace(' ','-',$bg['title']); ?>" class="btn btn-info">Read MOre</a>-->
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="views">Oct 20, 12:45PM
          </div>
          <div class="stats">
           	<i class="far fa-eye"></i> 1347
            <!--<i class="far fa-comment"></i> 12-->
          </div>
           
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</div>
</section>