<?php foreach ($course_data as $key => $value) {
	$coursename=$value['coursename'];
	$course_type=$value['coursetype'];
	$videolink=$value['videolink'];
	$userview=$value['userview'];
	$date=$value['date'];
	$description=$value['description'];
	$image=$value['image'];
}?>

<!-- Start Breadcrumbs -->
		<section class="breadcrumbs overlay">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2>Course Pages</h2>
						<ul class="bread-list">
							<li><a href="home">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="course-single-video.html">
								<?php echo $coursename;?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Courses -->
		<section class="courses single section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="single-main">
							<div class="row">
								<div class="col-lg-8 col-12">
									<!-- Single Course -->
									<div class="single-course">
										<div class="course-head">		
											<div class="embed-responsive embed-responsive-16by9" style="background-image: url('<?php echo $image;?>');background-repeat: no-repeat;">
												<?php if($videolink !='') { ?>
												<iframe height="450" src="https://www.youtube.com/embed/UalTfOIDQ7M"></iframe>
											<?php } ?>
											</div>
										</div>			
									</div>
									<!--/ End Single Course -->
								</div>	
								<div class="col-lg-4 col-12">
									<!-- Course Features -->
									<div class="course-feature">
										<div class="feature-main">
											<h4>Course Features</h4>
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-files-o"></i>
												<span class="label">Lectures</span>
												<span class="value">8</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-puzzle-piece"></i>
												<span class="label">Quizzes</span>
												<span class="value">1</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-clock-o"></i>
												<span class="label">Duration</span>
												<span class="value">1 Year</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-magic"></i>
												<span class="label">Skill Level</span>
												<span class="value">Beginner</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-user"></i>
												<span class="label">Students</span>
												<span class="value">50</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Certificate</span>
												<span class="value">Yes</span>
											</div>
											<!--/ End Single Feature -->
											<!-- Single Feature -->
											<div class="single-feature">
												<i class="fa fa-check-square-o"></i>
												<span class="label">Assessments</span>
												<span class="value">Yes</span>
											</div>
											<!--/ End Single Feature -->
										</div>
									</div>
									<!--/ End Course Features -->
								</div>	
							</div>	
							<div class="row">
								<div class="col-12">
									<!-- Course Meta -->
									<div class="course-meta">
										<!-- Course Info -->
										<div class="course-info">
											
											<div class="single-info category">
												<i class="fa fa-bolt"></i>
												<h4>Category<span><?php echo $course_type;?>
													
												</span></h4>
											</div>
											<div class="single-info s-enroll">
												<i class="fa fa-users"></i>
												<h4>Enrolled:<span><?php echo $userview;?>
													
												</span></h4>
											</div>
											<div class="single-info rattings">
												<i class="fa fa-clock-o"></i>
												<h4>Course date:<span><?php echo $date;?></span></h4>
											</div>
										</div>
										<!--/ End Course Info -->
										<!-- Course Price -->
										<!-- <div class="course-price">
											<p>$33.50</p>
											<a href="#" class="btn"><i class="fa fa-users"></i>Enroll Now</a>
											</div> -->
										<!--/ End Course Price -->
									</div>
									<!--/ End Course Meta -->
								</div>
								<div class="col-12">
									<div class="content">
										<h2><a href="#"><?php echo $coursename; ?></a></h2>
										<h6>description: <span><?php echo $description;?>
												</span></h6>
										
										
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		<!-- Courses -->
		<?php   $cd=$this->db->query("select * from categorycourseinfo where coursetype='$course_type' and coursename='$coursename' ")->result_array();
		$video='';
 	foreach ($cd as $key => $value) { 
					 $video=$value['videolink'];
					}
					 if($video !='') {
			 ?>
		<section class="courses ">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Popular <span> Videos</span> </h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">
					<?php  
					 $cd=$this->db->query("select * from categorycourseinfo where coursetype='$course_type' and coursename='$coursename' ")->result_array();
 	foreach ($cd as $key => $value) { 
					 
					 $video=$value['videolink'];
			
					 $embed=$this->pro->link_to_embed($video);
                $data="<iframe width='380' height='380' src='$embed' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
						
					 ?>

						<!-- Single Course -->
							<div class="single-course">
								<?php echo $data; ?>
								
							</div>
							<!--/ End Single Course -->
							
				<?php	} ?>

							
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php   } ?>
		<!--/ End Courses -->	
		

		<!-- Courses -->
		<section class="courses section-bg section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Popular <span>Courses</span> We Offer</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="course-slider">
					<?php  foreach ($educationcourse as $key => $value) {  ?>
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
		