<style>
    




::-webkit-scrollbar {
	width: 10px;
}

::-webkit-scrollbar-track {
	background-color: transparent;
}

::-webkit-scrollbar-thumb {
	background-color: var(--black);
}

.heading {
	margin-bottom: 20px;
	font-size: 30px;
	color: var(--black);
	text-transform: uppercase;
	text-align: center;
}

.btn {
	margin-top: 10px;
	display: inline-block;
	padding: 10px 30px;
	cursor: pointer;
	font-size: 17px;
	background-color: var(--light-bg);
	color: var(--black);
	text-transform: capitalize;
	text-align: center;
}

.btn:hover {
	background-color: var(--crimson);
	color: var(--white);
}

.gallery {
	padding: 20px;
	text-align: center;
	padding-left: 320px;
}

.gallery .image-container {
	/*gap: 15px;*/
	/*columns: 3 350px;*/
}

.gallery .image-container img {
	break-inside: avoid;
	width: 100%;
	background-color: var(--white);
	object-fit: cover;
	cursor: pointer;
	margin-bottom: 10px;
	box-shadow: var(--box-shadow);
}

.gallery .image-container img:hover {
	transform: scale(.95);
}

.side-bar {
	height: 100vh;
	width: 300px;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1000;
	background-color: var(--white);
	padding: 20px;
	border-right: var(--border);
	overflow-y: scroll;
}

.side-bar::-webkit-scrollbar {
	width: 5px;
}

.side-bar .box {
	border-bottom: var(--border);
	padding: 20px 0;
}

.side-bar .box .title {
	margin-bottom: 10px;
	color: var(--black);
	font-size: 20px;
	text-transform: uppercase;
}

.side-bar .btn {
	margin-left: 5px;
}

.side-bar .btn.active {
	background-color: var(--crimson);
	color: var(--white);
}

.side-bar .box #search-box {
	border: var(--border);
	padding: 12px;
	text-transform: none;
	color: var(--light-black);
	width: 100%;
	font-size: 17px;
}

.side-bar .reset-btn .btn {
	margin-top: 20px;
	width: 100%;
}

#side-menu {
	position: fixed;
	top: 20px;
	left: 20px;
	height: 50px;
	width: 50px;
	line-height: 50px;
	text-align: center;
	background-color: var(--white);
	color: var(--black);
	cursor: pointer;
	font-size: 25px;
	z-index: 1100;
	box-shadow: var(--box-shadow);
	border: var(--border);
	display: none;
}

.image-popup {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1200;
	background-color: var(--dark-bg);
	height: 100vh;
	width: 100%;
	display: none;
	align-items: center;
	justify-content: center;
	padding: 100px 20px;
	overflow-y: scroll;
}

.image-popup img {
	width: 600px;
	cursor: pointer;
	border: 10px solid var(--white);
	background-color: var(--white);
}



:root {
	--crimson: crimson;
	--black: #333;
	--white: #fff;
	--light-black: #666;
	--light-bg: #eee;
	--dark-bg: rgba(0, 0, 0, .7);
	--border: 1px solid #999;
	--box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
}

* {
	font-family: 'Poppins', sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
	transition: all .2s linear;
}

body {
	background-color: var(--light-bg);
}



@media (max-width:1900px) {

	.gallery {
		padding-left: 20px;
	}

	#side-menu {
		display: block;
	}

	#side-menu.fa-times {
		top: 0;
		left: 300px;
	}

	.side-bar {
		left: -350px;
	}

	.side-bar.active {
		box-shadow: 0 0 0 100vw var(--dark-bg);
		left: 0;
		z-index: 1000;
	}

}

@media (max-width:768px) {

	.image-popup img {
		width: 100%;
	}

}

@media (max-width:450px) {

	#side-menu.fa-times {
		top: 10px;
		left: 10px;
	}

	.side-bar.active {
		padding-top: 70px;
	}

}
.margin_tp{
 margin-top: 120px;
    /*background-color: floralwhite;*/
    /*border-radius: 6px 9px;*/
    /*border: 1px solid lightpink;   */
}
</style>

	<title>Filter Unknown Person</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



	<div id="side-menu" class="fas fa-bars margin_tp" ></div>

	<div class="side-bar margin_tp" >
	<h4>Filter Unknown Person</h4>
		<div class="box">
		<div class="form-floating mb-1 col-auto">
        <input type="text" class="form-control" name="vehicle_no"   id="search-box"  placeholder="aadhar">
        <label for="vehicle_no" >Search By Aadhaar, PAN</label>
        
    </div>
		</div>
		
		<div class="box">
			<h3 class="title">Gender :</h3>
			<div class="category">
				<div class="btn active" data-category="all"> all </div>
				<div class="btn" data-category="male">Male</div>
				<div class="btn" data-category="female">Female</div>
				<div class="btn" data-category="other">Other</div>
			
			</div>
		</div>
		<div class="box">
			<h3 class="title">type :</h3>
			<div class="type">
				<div class="btn active" data-type="all">all type</div>
				<div class="btn" data-type="jpg">jpg</div>
				<div class="btn" data-type="png">png</div>
				<div class="btn" data-type="svg">svg</div>
			</div>
		</div>
		<div class="reset-btn">
			<div class="btn">reset all</div>
		</div>
	</div>

	
	<div class="gallery">

  <h1 class="heading"> Unknown Person Filter Details</h1>

  <div class="image-container row">
    <?php
    $data=$this->db->query('select * from unknown_person')->result_array();
        foreach($data as $row)
        {
          ?>
            <div class="col-lg-3 col-12 col-search" data-cat="<?php echo $row['DL_no']??"-" ?>" 
            data-search="<?php echo $row['DL_no']; ?><?php echo $row['aadharNumber']; ?><?php echo $row['PAN']; ?><?php echo $row['person_name']; ?><?php echo $row['Message']; ?>">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row pt-4">
                    <div class="col-5 "><img class="w-100" id="profile-pic" src="<?php echo base_url().$row['Photo']?>" style="/* width: 74% !important; // height: 165px !important; */border: 1px solid;" alt=""></div>
                    <div class="col-7">
                      <h5 class="card-title text-start pb-0 fs-41"> Person name   :<br><?php echo $row['person_name']??"--" ?> </h5>
                      <h5 class="card-title text-start pb-0 fs-41"> Aadhar No :<br><?php echo $row['aadharNumber']??"--"?></h5>
                      <h5 class="card-title text-start pb-0 fs-41"> DL No :<br><?php echo $row['DL_no']??"--"?></h5>
                    </div>
                    <div>
                       <p class="card-title text-start pb-0 fs-41">Other Details:<br><?php echo $row['Message']??"--"?></p> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
        }
    ?>
    
    
    
  </div>
	

	<div class="image-popup">
		<img src="" alt="">
	</div>

<script>
    let sideMenu = document.querySelector('#side-menu');
let sideBar = document.querySelector('.side-bar');

sideMenu.onclick = () => {
	sideMenu.classList.toggle('fa-times');
	sideBar.classList.toggle('active');
};

let galleryImages = document.querySelectorAll('.image-container .col-search');
let imagePop = document.querySelector('.image-popup');
let galleryImages1 = document.querySelectorAll('.image-container .col-search img');

galleryImages1.forEach(img => {
	img.onclick = () => {
		let imageSrc = img.getAttribute('src');
		imagePop.style.display = 'flex';
		imagePop.querySelector('img').src = imageSrc;
	};
});

imagePop.onclick = () => {
	imagePop.style.display = 'none';
};

document.querySelector('#search-box').oninput = () => {
	var value = document.querySelector('#search-box').value.toLowerCase();
	galleryImages.forEach(img => {
		var filter = img.getAttribute('data-search').toLowerCase();
		if (filter.indexOf(value) > -1) {
			img.style.display = 'block';
		} else {
			img.style.display = 'none';
		};
	});
};

let categoryBtn = document.querySelectorAll('.category .btn');

categoryBtn.forEach(btn => {
	btn.onclick = () => {
		categoryBtn.forEach(remove => remove.classList.remove('active'));
		let dataCategory = btn.getAttribute('data-category');
		galleryImages.forEach(img => {
			var imgCat = img.getAttribute('data-cat');
			if (dataCategory == 'all') {
				img.style.display = 'block';
			} else if (dataCategory == imgCat) {
				img.style.display = 'block';
			} else {
				img.style.display = 'none';
			}
		});
		btn.classList.add('active');
	};
});

let typeBtn = document.querySelectorAll('.type .btn');

typeBtn.forEach(btn => {
	btn.onclick = () => {
		typeBtn.forEach(remove => remove.classList.remove('active'));
		let datatype = btn.getAttribute('data-type');
		galleryImages.forEach(img => {
			var imgtype = img.getAttribute('src').split('.').pop();
			if (datatype == 'all') {
				img.style.display = 'block';
			} else if (datatype == imgtype) {
				img.style.display = 'block';
			} else {
				img.style.display = 'none';
			}
		});
		btn.classList.add('active');
	};
});

document.querySelector('.reset-btn .btn').onclick = () => {
	window.location.reload();
};
</script>