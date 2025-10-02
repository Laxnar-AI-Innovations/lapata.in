<style type="text/css">
    .theme_bk_color{background-image: linear-gradient(93deg, #061aa3, #d90f0f) !important;}
    .gradient-theme {
        background-image: linear-gradient(43deg, #0026ff 0, #ff1e0e 46%, #3F51B5 100%);
    }
    .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .popup-content {
            max-width: 90%;
            max-height: 90%;
            position: relative;
            height: 100%;
        }
        .popup-content img,
        .popup-content video {
            max-width: 100%;
            max-height: 100%;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #fff;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
        }
    #users .marquee-container {
            width: 100%;
            overflow: hidden;
            background-color: #1b0a42!important;
            padding: 10px 0;
        }
        #users .marquee-container h6{
            color: white;
        }
        #users marquee {
            display: block;
        }
        #users .marquee-container:hover marquee {
            animation-play-state: paused;
        }
        #users .marquee-item {
            margin: 0 10px;
            cursor: pointer;
            display: inline-block;
           
        }
        #users .marquee-item img,
        #users .marquee-item video {
            width: 260px!important;
            height: 150px!important;
            object-fit: cover;
            border: 2px solid #ddd;
            border-radius: 5px;
        }

    .marquee-container {
        width: 100%;
        overflow: hidden;
        background-color: #f0f0f0;
        padding: 10px 0;
    }

    .btn_new_css{
          background-image:linear-gradient(93deg, #061aa3, #d90f0f)!important;
          border:none;
          font-size:0.9rem;
          color:white!important;
      }
      .btn_new_css:hover{
           background-image:linear-gradient(93deg, green, red);
          border:none;
          font-size:0.9rem;
          color:white!important;
    }

    .menu::-webkit-scrollbar{
        display: none;
    }

    marquee {
        display: block;
    }
    .marquee-container:hover marquee {
        animation-play-state: paused;
    }
    .marquee-item {
        margin: 0 10px;
        cursor: pointer;
        display: inline-block;
       
    }
    .marquee-item img,
    .marquee-item video {
        width: 75px!important;
        height: 75px!important;
        object-fit: cover;
        border-radius: 5px;
    }

    #leader{
        background-color: white;
    }
    #leader .title {
      text-align: center;
      font-size: 1.5rem;
      color: black;
      font-weight: 600;
    }

    .card-title{
        color: black;
    }

    .highlight {
      color: yellow!important;
    }
    .card-custom {
      background-color: #ffeeef;
      box-shadow: 0px 0px 3px #ffeeef;
      border-radius: 15px;
      color: #f8f9fa;
    }
    .card-custom img {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      height: 350px;
      object-fit: contain;
    }
    .card-body a {
      color: #00acee;
      text-decoration: none;
    }
    .card-body a:hover {
      text-decoration: underline;
    }

    .reviews-container {
      overflow: hidden;
      position: relative;
      white-space: nowrap;
      padding: 2rem 0;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 2rem;
      color: black!important;
    }
    .section-title span {
      color: #e71922;
    }
    .value-card {
      background: #fff;
/*      padding: 1rem 0.5rem;*/
      border-radius: 1rem;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
      height: 100%;
      text-align: center;
    }
    .value-icon {
      font-size: 2.5rem;
    }
    .value-title {
      font-weight: 600;
      font-size: 1.2rem;
      color: #aaa;
    }
    .value-text {
      font-size: 0.95rem;
      color: #333;
    }

    .card-text{
        color: black;
    }

    #users{
        background-color: #1b0a42;
        color: white;
    }

    .review-card {
      background-color: #2e2153;
      border-radius: 1rem;
      padding: 0.8rem;
      margin: 0 1rem;
      min-width: 250px;
      max-width: 250px;
      color: white;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.05);
      text-align: left;
      word-wrap: break-word;
    }

    .review-card p {
      font-size: 0.85rem;
      line-height: 1.4;
      margin-bottom: 0.5rem;
      word-wrap: break-word;
      white-space: break-spaces;
    }

    .review-card h6{
        color: white;
        font-weight: 100;
    }

    .reviews-track {
      display: inline-flex;
      animation: scroll 40s linear infinite;
    }

    @keyframes scroll {
      0% {
        transform: translateX(0%);
      }
      100% {
        transform: translateX(-50%);
      }
    }

    .stars {
      color: gold;
    }
    #our-story {
      background-color: #5c2bcf;
      border-radius: 3rem;
      padding: 0.2rem 2rem;
      color: white;
      max-width: 900px;
      margin: 3rem auto;
    }
    #our-story .subtitle {
      color: #bcaaf5;
      font-size: 1.1rem;
    }
    #our-story .title {
      font-size: 1.5rem;
      font-weight: 700;
    }
    #our-story .text {
      color: #d5cdf5;
      text-align: center;
      font-size: 0.8rem;
      line-height: 1.7;
    }
    .mission-icon {
      font-size: 3rem;
      color: #7e4df2;
    }
    .section-title {
      font-weight: 600;
      color: #e41b1d;
      margin-top: 1rem;
      font-size: 1.25rem;
    }
    .highlight {
      font-weight: 600;
      color: #6c2cf2;
    }
    .white-bg {
        background-color: #e9ecef;
    }

    .sticky-section {
        position: sticky;
        top: 85px;
        background-color: #eae7fd!important;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .menu {
        display: flex;
        justify-content: space-around;
        align-items: center;
        overflow: auto;
    }

    .menu-item-link {
        width: max-content;
        display: block;
        color: white;
        font-size: 10px;
        background-color: #7745ff1a;
        border-radius: 1em;
        padding: .625em 1.5em;
        text-decoration: none;
    }

    .menu-item-link.active {
        background-color: #e71922;
        color: white;
    }

    /*.page-section {
        padding: 40px 20px;
    }*/

    .page-section:nth-child(even) {
        background-color: #e9ecef;
    }

    .topside img{
        height: 500px!important;
    }
    @media screen and (max-width:525px)
    {
        .topside img{
            height:308px!important;
            margin-bottom: 1rem;
        }

        .sticky-section {
            position: sticky;
            top: 100px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
    }
</style>
<section class="wrapper" style="background-color:#e41b1d;border-bottom: 15px solid #e41b1d;">
    <section class="wrapper" style="background-color: #e41b1d;">
        <div class="container position-relative pb-18 pb-md-22 text-center">
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <h1 class="display-1 mb-0 mt-2">
                        <img src="<?= base_url(); ?>assets_landing_page/img/quote.png">
                    </h1>
                    <h1 class="mb-0 text-white">
                        Every <b style="color: #ffda2d;">missing person</b> deserves to be found.
                        Every <b style="color: #ffda2d;">unidentified person</b> has someone searching.
                    </h1>
                    <p style="color: #ffffff8c;">- A quote we stand by.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->

    <section class="wrapper bg-gray topside">
        <div class="container pb-md-1">
            <div class="row text-center mb-1 mb-md-10">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-n18 mt-md-n22">
                    <figure>
                        <img class="w-100"
                            src="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/police_face_scan.jpg"
                            srcset="https://khoji-new.s3.ap-south-1.amazonaws.com/assets/img/photos/police_face_scan.jpg"
                            alt="" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->
</section>
<div class="white-bg">
    <aside class="sticky-section">
        <div class="container full">
            <div class="nav-sections col-xl-8 mx-auto p-3">
                <div class="menu">
                    <div class="menu-item me-3"><a href="javascript:void(0)" data-href="#mission" class="menu-item-link active">Our Mission</a></div>
                    <div class="menu-item me-3"><a href="javascript:void(0)" data-href="#our-story" class="menu-item-link">Our Story</a></div>
                    <div class="menu-item me-3"><a href="javascript:void(0)" data-href="#users" class="menu-item-link">Officials</a></div>
                    <div class="menu-item me-3"><a href="javascript:void(0)" data-href="#values" class="menu-item-link">Values</a></div>
                    <div class="menu-item me-3"><a href="javascript:void(0)" data-href="#leader" class="menu-item-link">Meet the team</a></div>
                    <div class="menu-item me-3"><a href="javascript:void(0)" data-href="#inTeam" class="menu-item-link">In News</a></div>
                    <div class="menu-item"><a href="javascript:void(0)" data-href="#story" class="menu-item-link">Success Story</a></div>
                </div>
            </div>
        </div>
    </aside>

    <div id="main-content" class="page-sections">
        <section id="mission" class="page-section text-center">
            <div class="mission-icon"><img src="<?= base_url(); ?>assets_landing_page/img/arrow.png" style="width: 100px;height: 100px;"></div>
            <div class="section-title">Our mission</div>
            <div class="col-12 mx-auto col-lg-8">
                <p class="mt-3">Khoji.in aims to build India’s first trusted web-based platform to find missing persons and identify unknown individuals. We connect police, NGOs, social workers, families and organizations to simplify and speed up the search process. Our mission is to solve this problem through technology, collaboration, and care.</p>
            </div>
        </section>
        <section id="our-story" class="page-section btn_new_css">
            <div class="subtitle mb-0 mt-5 text-center">Our story</div>
            <div class="title mb-1 text-center">We were born in 2023</div>
            <div class="text">
              <p>Khoji Infotech Private Limited was founded in 2023 and became operational in January 2025 with the launch of Khoji.in — India’s first one-click solution for finding missing and unknown persons.</p>
              <p class="mt-3">Based in Jhansi, our mission is to support both families and government authorities in solving this critical issue through smart, reliable technology. We are committed to making reunions possible and ensuring no identity goes unrecognized.</p>
            </div>
        </section>
        <section id="users" class="page-section container">
            <div class="row text-center py-2">
                <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                    <h2 class="fs-25 mb-0 text-center text-white">Officials Also Find khoji.in Effective</h2>
                </div>
            </div>
            <div class="marquee-container d2 d-none1">
                <marquee behavior="alternate" direction="right" scrollamount="7" onmouseover="this.stop();" onmouseout="this.start();">
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/1.jpg"  alt="Image 1" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">Start Up India Official </h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/5.jpg"  alt="Image 2" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">ADG ( U.P) - Crime</h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/6.jpg"  alt="Image 3" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">ADG ( U.P) - Technical</h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/7.jpg"  alt="Image 4" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">Director General of Police ( U.P)</h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/8.jpg"  alt="Image 5" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">ADG ( U.P)</h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/9.jpg"  alt="Image 6" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">Additional Secretary ( MoWCD)</h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/10.jpg"  alt="Image 7" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">Director General Railway ( RPF)</h6>
                    </div>          
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/12.jpg"  alt="Image 8" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">Cabinet Minister ( MoWCD)</h6>
                    </div>
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/13.jpg"  alt="Image 9" onclick="showPopup(this)" />
                        <br>
                        <h6 class="text-center mb-0">D.Director of UIDAI (Aadhar)</h6>
                    </div>
                </marquee>
            </div>
            <div class="popup" id="popup">
                <div class="popup-content" id="popup-content"></div>
                <button class="close-btn" onclick="closePopup()">&times;</button>
            </div>
        </section>
        <section id="values" class="page-section">
            <div class="container py-5">
                <h2 class="section-title">The <span>values</span> that drive us</h2>
                <div class="row g-4">
                  <div class="col-md-4">
                    <div class="value-card">
                      <div class="value-icon"><img src="<?= base_url(); ?>assets_landing_page/img/empathy.png" style="width: 75px;height: 75px;"></div>
                      <div class="value-title">Empathy</div>
                      <p class="value-text">We’re driven by the belief that every missing person is someone’s loved one. Compassion is at the heart of every decision we make.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="value-card">
                      <div class="value-icon"><img src="<?= base_url(); ?>assets_landing_page/img/responsibility.png" style="width: 75px;height: 75px;"></div>
                      <div class="value-title">Responsibility</div>
                      <p class="value-text">We hold ourselves accountable—for every search, every detail, every life we aim to reconnect.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="value-card">
                      <div class="value-icon"><img src="<?= base_url(); ?>assets_landing_page/img/collaboration.png" style="width: 75px;height: 75px;"></div>
                      <div class="value-title">Collaboration</div>
                      <p class="value-text">Real change needs collective effort. We work with police, NGOs, and citizens to bring families back together.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="value-card">
                      <div class="value-icon"><img src="<?= base_url(); ?>assets_landing_page/img/innovation.png" style="width: 75px;height: 75px;"></div>
                      <div class="value-title">Innovation</div>
                      <p class="value-text">We use technology not just to advance, but to serve. Every feature we build is designed to solve a real human problem.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="value-card">
                      <div class="value-icon"><img src="<?= base_url(); ?>assets_landing_page/img/transparency.png" style="width: 75px;height: 75px;"></div>
                      <div class="value-title">Transparency</div>
                      <p class="value-text">Trust is everything. We ensure open access, clear communication, and honesty in everything we do.</p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="value-card">
                      <div class="value-icon"><img src="<?= base_url(); ?>assets_landing_page/img/dedication.png" style="width: 75px;height: 75px;"></div>
                      <div class="value-title">Dedication</div>
                      <p class="value-text">This isn’t just work—it’s a purpose. We show up every day with unwavering focus to help those who are lost, be found.</p>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <section id="leader" class="page-section">
            <div class="container">
                <div class="title mb-2">
                    <b class="text-gradient gradient-theme">Meet the leaders</b><b style="color:black;"> behind</b> <b class="text-gradient gradient-theme">Khoji.in</b>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-4">
                        <div class="card-custom h-100 text-center">
                            <img src="<?= base_url(); ?>assets_landing_page/img/dhruv.png" alt="Dhruv Gupta">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Dhruv Gupta</h5>
                                <p class="card-text">Founder & Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-custom h-100 text-center">
                            <img src="<?= base_url(); ?>assets_landing_page/img/abhishek.png" alt="Abhishek Gupta">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Abhishek Gupta</h5>
                                <p class="card-text">Co-founder & Chief Technical Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-custom h-100 text-center">
                            <img src="<?= base_url(); ?>assets_landing_page/img/aditya.png" alt="Aditya Raj">
                            <div class="card-body">
                                <h5 class="card-title mb-1">Aditya Raj</h5>
                                <p class="card-text">Chief Marketing Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper coverageDiv page-section" id="inTeam">
            <div class="container py-0 py-md-0">
                <div class="row text-center py-3">
                    <div class="col-md-11 col-lg-9 col-xl-8 col-xxl-7 mx-auto position-relative">
                        <h2 class="fs-25 mb-0 text-center"><b style="color:black;">KHOJI in the </b><b class="text-gradient gradient-theme">News</b></h2>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    <marquee class="w-100 py-3" behavior="alternate"  scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();">
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/yourstory.png" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <button onclick="window.open('https://yourstory.com/2025/01/artificial-intelligence-ai-missing-children-search-police-crime-solve','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12">
                                        <img src="<?= base_url(); ?>assets_landing_page/img/startuppedia.jpeg" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <button onclick="window.open('https://startuppedia.in/startup-stories/24-yo-btech-launches-innovative-ai-based-tech-startup-to-reunite-missing-individuals-with-family-8855843','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/news18com8769.jpg" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <button onclick="window.open('https://hindi.news18.com/amp/news/uttar-pradesh/jhansi-khoji-website-to-help-find-lost-kids-and-others-patent-by-youth-local18-8813090.html','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/inshorts.png" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <button onclick="window.open('https://inshorts.com/en/news/btech-grad-launches-ai-startup-to-reunite-missing-individuals-1743240334869','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/punenews.png" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <button onclick="window.open('https://pune.news/apps-and-software/ai-powered-solutions-are-transforming-the-fight-against-child-disappearances-293277/','_blank')" class="btn btn-danger p-1 theme_bk_color" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/eenadu.png" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <button onclick="window.open('https://www.eenadu.net/telugu-article/sunday-magazine/how-ai-is-bringing-hope-to-families-looking-for-missing-children/28/325000148','_blank')" class="btn btn-danger theme_bk_color p-1" style="font-size: 0.7rem;background: rgb(227 28 34);">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/dainiklogo.png" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <a href="<?= base_url(); ?>assets_landing_page/dainikimage.jpg" style="font-size: 0.7rem;background: rgb(227 28 34);color: white;" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col marquee-item">
                            <div class="card h-100">
                                <div class="card-body p-2 pt-0">
                                    <div class="col-12 text-center">
                                        <img src="<?= base_url(); ?>assets_landing_page/amarujalalogo.png" style="height:100px;object-fit: contain;" alt="ET Logo" class="card-icon me-0 w-100">
                                        <br>
                                        <a href="<?= base_url(); ?>assets_landing_page/umarujalaimage.jpg" style="font-size: 0.7rem;background: rgb(227 28 34);color: white;" data-lightbox="roadtrip" class="btn btn-danger theme_bk_color p-1">Read More &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </marquee>
                </div>  
            </div>
        </section>
        <section class="page-section card" id="story">
            <div class="row py-2 mx-0">
                  <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                     <h2 class="text-center mt-2 mb-2" style="color:black;">Success <b class="text-gradient gradient-theme">Story</b></h2>
                  </div>
            </div>

            <style type="text/css">
                .marquee-container1 {
                        width: 100%;
                        overflow: hidden;
                        background-color: #f0f0f0;
                        padding: 10px 0;
                    }
                    .marquee-container1:hover marquee {
                        animation-play-state: paused;
                    }
                    .marquee-container1 .marquee-item {
                        margin: 0 10px;
                        cursor: pointer;
                        display: inline-block;
                       
                    }
                    .marquee-container1 .marquee-item img,
                    .marquee-container1 .marquee-item video {
                        width: 260px!important;
                        height: 150px!important;
                        object-fit: cover;
                        border: 2px solid #ddd;
                        border-radius: 5px;
                    }
                    /* Popup styles */
                    .marquee-container1 .popup {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.8);
                        justify-content: center;
                        align-items: center;
                        z-index: 9999;
                    }
                    .marquee-container1 .popup-content {
                        max-width: 90%;
                        max-height: 90%;
                        position: relative;
                        height: 100%;
                    }
                    .marquee-container1 .popup-content img,
                    .popup-content video {
                        max-width: 100%;
                        max-height: 100%;
                    }
                    .marquee-container1 .close-btn {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        background: #fff;
                        border: none;
                        border-radius: 50%;
                        width: 30px;
                        height: 30px;
                        font-size: 18px;
                        cursor: pointer;
                    }
                    .marquee-container1 .h3-main {
                        text-align: center;
                        font-size: 3rem;
                        font-family: Arial, sans-serif;
                       color: #0d0c4a;
                        -webkit-text-stroke: 2px #e11313;
                    }
                    iframe
                    {
                        width:100%;
                        height: 100%;
                    }
                    span.play-button {
                        position: absolute;
                        top: 40%;
                        margin-left: 8%;
                        color: white;
                        font-size: 50px;
                        cursor:pointer;
                       
                    }
                    .ytp-impression-link
                    {
                        display: none !important;
                    }
                    .ytp-woyt-emc3ds-cf.ytp-impression-link {
                        border-radius: 24px;
                        backdrop-filter: blur(8px);
                        -webkit-backdrop-filter: blur(8px);
                        background: rgba(0,0,0,.3);
                        right: 12px;
                        display: none;
                    }
                    @media screen and (max-width: 768px) {
                        span.play-button {
                            margin-left: 25%;
                        }
                    }
            </style>

            <div class="marquee-container1 d2">
                <marquee behavior="alternate"  scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php for($i = 10; $i <= 8; $i++){ 
                    ?>
                    <div class="marquee-item">
                        <img src="assets_landing_page/government/<?= $i ?>.jpg"  alt="Image <?= $i ?>" onclick="showPopup(this)" />
                    </div>
                  <?php } ?>
                   <div class="marquee-item">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/reunite3.jpg" data-type="iframe" alt="Image 1" onclick="showPopup(this)" 
                        data-src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/s3videos/1.mp4" style=" border: 3px solid;
            border-image: linear-gradient(to right, #283593 0%, #d90f0ffc 100%) 1;" />
                    </div>
                    <div class="marquee-item">
                        <img src="<?= base_url(); ?>assets_landing_page/reunionthumbnail.jpg" data-type="iframe" alt="Image 1" onclick="showPopup(this)" 
                        data-src="<?= base_url(); ?>assets_landing_page/reunion1.mp4" style=" border: 3px solid;
            border-image: linear-gradient(to right, #283593 0%, #d90f0ffc 100%) 1;" />
                    </div>
                    <div class="marquee-item">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/reunite2.jpg" data-type="iframe" alt="Image 1" onclick="showPopup(this)" 
                        data-src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/s3videos/2.mp4" style=" border: 3px solid;
            border-image: linear-gradient(to right, #283593 0%, #d90f0ffc 100%) 1;" />
                    </div>
                    <div class="marquee-item">
                        <img src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/reunite1.jpg" data-type="iframe" alt="Image 1" onclick="showPopup(this)" 
                        data-src="https://khoji-new.s3.ap-south-1.amazonaws.com/newLanding/s3videos/3.mp4" style=" border: 3px solid;
            border-image: linear-gradient(to right, #283593 0%, #d90f0ffc 100%) 1;" />
                    </div>
                </marquee>
            </div>  
            <div class="row text-center mx-0" style="margin-top:.75rem!important;">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 p-2">
                    <a href="<?php echo base_url();?>khoji-success" class="btn btn-danger theme_bk_color me-3" style="border:1px dotted white;" >View All &nbsp;<i class="fa fa-arrow-circle-right"></i></a> 
                </div>
            </div>
        </section>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const menuLinks = document.querySelectorAll('.menu-item-link');
        const sections = document.querySelectorAll('.page-section');
        const stickyMenu = document.querySelector('.sticky-section');

        // Smooth scrolling when menu links are clicked
        menuLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('data-href').substring(1); // Remove '#' from href
                const targetSection = document.getElementById(targetId);

                // Scroll to section
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 89 - stickyMenu.offsetHeight,
                        behavior: 'smooth'
                    });
                }

                // Horizontally scroll the sticky menu to bring clicked item into view
                this.scrollIntoView({
                    behavior: 'smooth',
                    inline: 'center', // or 'nearest' or 'start'
                    block: 'nearest'
                });
            });
        });

        // Remove active class from all menu links
        function clearActiveClasses() {
            menuLinks.forEach(link => link.classList.remove('active'));
        }

        // Add active class to the current menu link
        function setActiveLink() {
            let scrollPosition = window.pageYOffset + stickyMenu.offsetHeight + 1;

            sections.forEach(section => {
                if (
                    (scrollPosition >= section.offsetTop - 89) &&
                    (scrollPosition < section.offsetTop + section.offsetHeight - 89)
                ) {
                    const id = section.getAttribute('id');
                    clearActiveClasses();
                    const activeLink = document.querySelector(`.menu-item-link[data-href="#${id}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');

                        // Auto-scroll the menu horizontally to show active link
                        activeLink.scrollIntoView({
                            behavior: 'smooth',
                            inline: 'center',
                            block: 'nearest'
                        });
                    }
                }
            });
        }

        // Scroll event listener
        window.addEventListener('scroll', setActiveLink);

        // Set active link on load
        setActiveLink();
    });
</script>
<script>
    function showPopup(element) 
        {
            const popup = document.getElementById('popup');
            const popupContent = document.getElementById('popup-content');

            popupContent.innerHTML = ''; // Clear previous content
            var type=$(element).attr('data-type')??'no';
            //alert(type);
            if (element.tagName === 'IMG') 
            {
                if(type=='no')
                {
                    const img = document.createElement('img');
                    img.src = element.src;
                    popupContent.appendChild(img);
                }
                else
                {
                    const video = document.createElement('iframe');
                    video.classList.add("iframe_pop");
                    video.src = $(element).attr('data-src');
                    video.controls = true;
                    video.autoplay = true;
                    popupContent.appendChild(video);
                }
                
            } 
            else if (element.tagName === 'VIDEO') 
            {
                const video = document.createElement('video');
                video.src = element.src;
                video.controls = true;
                video.autoplay = true;
                popupContent.appendChild(video);
            }
            else if (element.tagName === 'SPAN') 
            {
                const video = document.createElement('iframe');
                video.classList.add("iframe_pop");
                video.src = $(element).attr('data-src');
                video.controls = true;
                video.autoplay = true;
                popupContent.appendChild(video);
            }

            popup.style.display = 'flex';
            $('.ytp-impression-link').addClass('d-none');
        }

        function closePopup() 
        {
            const popup = document.getElementById('popup');
            popup.style.display = 'none';
            const popupContent = document.getElementById('popup-content');
            popupContent.innerHTML = ''; 
        }
        $('.d2').addClass('v-none');
        $(document).ready(function(){
            setTimeout(() => {
                $('.d1').addClass('d-none');
                $('.d2').removeClass('d-none v-none');
            }, 2000);
        });
</script>