<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Type Wise</h2>
						<ul class="bread-list">
							<li><a href="home">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="course-single-video.html">
								<?php echo  $coursetype= $this->uri->segment(3); ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->

<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>All <span><?php echo  $coursetype= $this->uri->segment(3); ?> Courses</span> We Offer</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">
					<?php  foreach ($course_data as $key => $value) {  ?>
						<!-- Single Course -->
							<div class="single-course">
								<div class="course-head overlay">
									<img src="<?php echo $value['image']; ?>" alt="#" style="width:350px;height: 300px">
									<a href="course-single.html" class="btn"><i class="fa fa-link"></i></a>
								</div>
								<div class="single-content">
									<h4><a href="course-single.html"><span><?php echo $value['coursetype'];?></span><?php echo $value['coursename'];?></a></h4>
									<p><?php echo $value['description'];?> </p>
								</div>
								<div class="course-meta">
									<div class="meta-left">
										<span><i class="fa fa-users"></i></span><?php echo $value['userview'];?>
										<span><i class="fa fa-clock-o"></i></span><?php echo $value['date'];?>
									</div>
									<a href="<?php echo base_url('home/course_details/'.$value['id']); ?>" class="btn btn-success"
										>
										View course in details
									</a>
								</div>
							</div>
							<!--/ End Single Course -->
							
				<?php	} ?>

							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		