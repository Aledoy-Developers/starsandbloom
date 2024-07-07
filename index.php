
<?php
session_start();
include("admin/connect.php");

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Stars & Bloom Consulting</title>
    <!-- Fav icon -->
    <link rel="icon" type="image/x-icon" href="./assets/images/fav-icon.png" />
    <!-- google-fonts -->
    <link
      href="//fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css" />

    <?php 
    if($error_msg)
    {
          echo '<script>alert("Your registration was not successful")</script>';
    }
    
    if($_GET['succ'])
    {

 ?>
 <script>alert("Thank you <?= $_SESSION['name']?>\n\nYour registration was successful. We will redirect you to our PayPal payment page to choose your course and make payment");
   </script>
   <?php
    }
    
    ?>
  </head>

  <body>
    <a href="#" id="home"></a>
    <!--header-->
    <header id="site-header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
          <!-- <h1>
            <a class="navbar-brand d-flex align-items-center" href="index.php">
              <span class="lostyle-1">E</span>
              xecution
            </a>
          </h1> -->
          <!--* if logo is image enable this    -->
          <a class="navbar-brand" href="#index.php" style="margin-left: 10%">
            <img
              src="assets/images/logo_star-removebg-preview.png"
              alt="Logo"
              title="logo"
              class="main_logo"
            />
          </a>
          <button
            class="navbar-toggler collapsed bg-gradient"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
            <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Services</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#ourteam">Our Team</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#openprogram">Open Programs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>

              <!-- search button -->
              <div class="search-right ml-lg-3">
                <form
                  action="#search"
                  method="GET"
                  class="search-box position-relative"
                >
                  <div class="input-search">
                    <input
                      type="search"
                      placeholder="Enter Keyword"
                      name="search"
                      required="required"
                      autofocus=""
                      class="search-popup"
                    />
                  </div>
                  <button type="submit" class="btn search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
              <!-- //search button -->
            </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="cont-ser-position">
            <nav class="navigation">
              <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                  <input type="checkbox" id="checkbox" />
                  <div class="mode-container">
                    <i class="gg-sun"></i>
                    <i class="gg-moon"></i>
                  </div>
                </label>
              </div>
            </nav>
          </div>

          <!-- //toggle switch for light and dark theme -->
        </nav>
      </div>
    </header>
    <!--//header-->

    <!-- banner section -->
    <section class="banner-19">
      <div class="banner-layer">
        <video autoplay muted loop id="myVideo">
          <source src="assets/videos/video.mp4" type="video/mp4" />
          Your browser does not support HTML5 video.
        </video>
        <div class="main-content-top">
          <div class="container">
            <div class="main-content">
              <!-- if logo is image enable this   
                    <a class="logo" href="index.php">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
              <h4>Your Vision, Executed Strategically</h4>
              <p class="mt-3">
                Discover tailored solutions and expert guidance for your
                business challenges. We specialize in turning innovative ideas
                into actionable strategies that drive success.
              </p>
              <a href="#about" class="btn btn-style mt-md-5 mt-4">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //banner section -->

    <!-- about section -->
    <a href="#" id="about"></a>
    <div class="w3l-content-photo-5 py-5">
      <div class="container py-lg-5 py-sm-4">
        <div class="row align-items-center">
          <div class="col-lg-6 content-image order-lg-first order-last">
            <a href="#image"
              ><img
                src="assets/images/about_img.jpg"
                class="img-responsive"
                alt="content-photo"
            /></a>
          </div>
          <div
            class="col-lg-6 col-md-10 mx-auto content-right mb-lg-0 mb-5 pl-lg-5 order-lg-last order-first"
          >
           <h3 class="title-style-2">About the Company</h3>
            
            <p class="my-3">
              Stars & Bloom Consulting is founded with a mission to get people
              to perform at their optimal capacity.
            </p>
            <p class="border-top-w3l pt-4 mt-4">
              <!--? put text here to show the content after the horizontal line  -->
              We help those that are struggling with leadership skills to
              cultivate cutting-edge leadership abilities with our tested and
              proven LAD systems.
            </p>

            <!--<a> -->
            <!--  href="#small-dialog"-->
            <!--  class="popup-with-zoom-anim d-flex align-items-center mt-md-5 mt-4"-->
            <!-->
            <!--  <span class="video-play-icon mr-3">-->
            <!--    <span class="far fa-play-circle"></span> </span-->
            <!--  >Watch Our <br />Video-->
            <!--</a>-->

            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
              <iframe
                src="https://player.vimeo.com/video/86005700"
                frameborder="0"
                allow="autoplay; fullscreen"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //about section -->

    <!-- services section -->
    <a href="#" id="service"></a>
    <div class="service-section py-5">
      <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
          <div class="col-md-6 section-heading">
           <h3 class="title-style-2">Consulting Services</h3>
            <h5 class="small-title-2">Our Areas of Expertise </h5>
            
          </div>
          <div class="col-md-6 section-heading mt-md-0 mt-2">
            <p>
              Explore our comprehensive range of Consulting services tailored to
              meet your needs. From leadership abilities development to data-driven insights, we
              provide strategic solutions for your business growth.
            </p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 item" id="consulting">
            <div class="card">
              <div class="card-header p-0 position-relative border-0">
                <img
                  class="d-block img-responsive"
                  src="assets/images/consulting.jpg"
                  alt="card-image"
                />
              </div>
              <div class="card-body service-details">
                <!-- <span class="label-style">Work</span> -->
                <a href="#service" class="service-heading">Consulting</a>
                <!-- <p>
                  Sed ut perspiciatis unde omnis iste natus sit accusantium
                  doloremque laudantium, totam rem aperiam
                </p> -->
                <ul class="service-list">
                  <li class="service-item">Strategic Leadership</li>
                  <li class="service-item">Leadership training</li>
                  <li class="service-item">Leadership awareness</li>
                  <li class="service-item">Youth leadership</li>
                  <li class="service-item">Leadership and career success</li>
                  <li class="service-item">Employment retention</li>
                  <li class="service-item">Professionalism</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4" id="training">
            <div class="card">
              <div class="card-header p-0 position-relative border-0">
                <img
                  class="d-block img-responsive"
                  src="assets/images/s4.jpg"
                  alt="card-image"
                />
              </div>
              <div class="card-body service-details">
                <!-- <span class="label-style label-style-2">Business</span> -->
                <a href="#service" class="service-heading">Training</a>
                <!-- <p>
                  Sed ut perspiciatis unde omnis iste natus sit accusantium
                  doloremque laudantium, totam rem aperiam
                </p> -->
                <ul class="service-list">
                  <li class="service-item">Leadership Development</li>
                  <li class="service-item">Communication Workshops</li>
                  <li class="service-item">Change Management Training</li>
                  <li class="service-item">Conflict Resolution Seminars</li>
                  <li class="service-item">Diversity and Inclusion Training</li>
                  <li class="service-item">Strategic Planning Workshops</li>
                  <li class="service-item">Customer Service Excellence</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-4" id="marketing">
            <div class="card">
              <div class="card-header p-0 position-relative border-0">
                <img
                  class="d-block img-responsive"
                  src="assets/images/marketing.jpg"
                  alt="card-image"
                />
              </div>
              <div class="card-body service-details">
                <!-- <span class="label-style label-style-3">Corporate</span> -->
                <a href="#service" class="service-heading">Marketing</a>
                <!-- <p>
                  Sed ut perspiciatis unde omnis iste natus sit accusantium
                  doloremque laudantium, totam rem aperiam
                </p> -->
                <ul class="service-list">
                  <li class="service-item">Brand Strategy Development</li>
                  <li class="service-item">Digital Marketing Campaigns</li>
                  <li class="service-item">Content Marketing Solutions</li>
                  <li class="service-item">Social Media Management</li>
                  <li class="service-item">Search Engine Optimization (SEO)</li>
                  <li class="service-item">Pay-Per-Click (PPC) Advertising</li>
                  <li class="service-item">Email Marketing Campaigns</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 card-top" id="brokerage">
            <div class="card">
              <div class="card-header p-0 position-relative border-0">
                <img
                  class="d-block img-responsive"
                  src="assets/images/Brokerage.jpg"
                  alt="card-image"
                />
              </div>
              <div class="card-body service-details">
                <!-- <span class="label-style label-style-3">Corporate</span> -->
                <a href="#service" class="service-heading">Brokerage</a>
                <!-- <p>
                  Sed ut perspiciatis unde omnis iste natus sit accusantium
                  doloremque laudantium, totam rem aperiam
                </p> -->
                <ul class="service-list">
                  <li class="service-item">Investment Portfolio Management</li>
                  <li class="service-item">Real Estate Brokerage Services</li>
                  <li class="service-item">Financial Planning and Advisory</li>
                  <li class="service-item">Market Analysis and Research</li>
                  <li class="service-item">Wealth Management Solutions</li>
                  <li class="service-item">Asset Allocation Strategies</li>
                  <li class="service-item">Retirement Planning Services</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 card-top" id="research">
            <div class="card">
              <div class="card-header p-0 position-relative border-0">
                <img
                  class="d-block img-responsive"
                  src="assets/images/research.jpg"
                  alt="card-image"
                />
              </div>
              <div class="card-body service-details">
                <!-- <span class="label-style label-style-3">Corporate</span> -->
                <a href="#service" class="service-heading">Research</a>
                <!-- <p>
                  Sed ut perspiciatis unde omnis iste natus sit accusantium
                  doloremque laudantium, totam rem aperiam
                </p> -->
                <ul class="service-list">
                  <li class="service-item">Market Research Analysis</li>
                  <li class="service-item">Data Collection and Analysis</li>
                  <li class="service-item">
                    Qualitative and Quantitative Research
                  </li>
                  <li class="service-item">Consumer Behavior Studies</li>
                  <li class="service-item">Competitive Intelligence</li>
                  <li class="service-item">Trend Analysis and Forecasting</li>
                  <li class="service-item">Custom Research Solutions</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- //services section -->

    <!-- banner bottom section -->
    <!-- <section class="w3l-aboutblock py-5">
      <div class="container py-md-5 py-sm-4">
        <div class="row">
          <div class="col-lg-6 left-wthree-img mb-lg-0 mb-4">
            <img
              class="img-fluid img-responsive"
              src="assets/images/about.jpg"
              alt=" "
            />
          </div>
          <div class="col-lg-6 about-right-faq align-self pl-lg-5">
            <h3 class="title-style">The Largest Business Expert!</h3>
            <p class="mt-2">
              Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
              ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit
              amet consectetur adipisicing elit.
            </p>
            <div class="mt-4 pt-md-2">
              <div class="about-info-m d-flex">
                <div class="icon-style-ab mr-4">
                  <i class="fas fa-donate"></i>
                </div>
                <div class="about-detail">
                  <h4>Extra benefit through Invest</h4>
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error sit
                    accusantium
                  </p>
                </div>
              </div>
              <div class="about-info-m d-flex mt-4">
                <div class="icon-style-ab mr-4">
                  <i class="fab fa-asymmetrik"></i>
                </div>
                <div class="about-detail">
                  <h4>Expand profit and reduce Tax</h4>
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error sit
                    accusantium
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- //banner bottom section -->

    <!-- logo brands section -->
    <!-- <section class="w3l-brands" id="clients">
      <div class="container pb-md-5 pb-4">
        <div class="company-logos text-center pt-5 border-top-w3l">
          <div class="row logos">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <a href="#url"
                ><img src="assets/images/logo1.png" alt="" class="img-fluid"
              /></a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
              <a href="#url"
                ><img src="assets/images/logo2.png" alt="" class="img-fluid"
              /></a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-sm-0 mt-4">
              <a href="#url"
                ><img src="assets/images/logo3.png" alt="" class="img-fluid"
              /></a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-md-0 mt-4">
              <a href="#url"
                ><img src="assets/images/logo4.png" alt="" class="img-fluid"
              /></a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-lg-0 mt-4">
              <a href="#url">
                <img src="assets/images/logo5.png" alt="" class="img-fluid"
              /></a>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-lg-0 mt-4">
              <a href="#url">
                <img src="assets/images/logo1.png" alt="" class="img-fluid"
              /></a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- //logo brands section -->

    <!-- team section -->
    <section class="w3l-team py-5" id="ourteam">
      <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
          <div class="col-md-6 section-heading">
            <h5 class="small-title-2">Our Teammates</h5>
            <h3 class="title-style-2">Our Creative Team</h3>
          </div>
          <div class="col-md-6 section-heading mt-md-0 mt-2">
            <p>
              <!-- Sed ut perspiciatis unde omnis iste natus error sit accusantium
              doloremque, eaque ipsa quae ab illo inventore.Sed ut perspiciatis
              unde omnis iste natus error sit. -->
            </p>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-3 col-sm-12">
            <div class="team-block-single">
              <div class="team-grids">
                <a href="#team-single">
                  <img
                    src="assets/images/olufade_omolara.jpg"
                    class="img-fluid"
                    alt=""
                  />
                  
                
              </div>
              <div class="team-bottom-block p-4">
                <h5 class="member mb-1">
                  <a href="#team">Omolara Olufade</a>
                </h5>
                <small>CEO</small>
              </div>
            </div>
          </div>

          <div class="col-lg-9 col-sm-12 mt-lg-0 mt-4">
            <div class="team-block-single">
              <div class="team-bottom-block p-4" style="text-align: left">
                <h5 class="mb-3" style="font-size: 1.6rem">
                  <a href="#team">Omolara Olufade</a>
                </h5>
                <p style="font-size: 0.8rem">
                  Omolara Olufade (Ph.D.) is a highly motivated and
                  progress-focused American trained leadership coach with a
                  long-standing background in Organizational Leadership. With a
                  track record of initiative and dependability, she has devised
                  cutting edge strategic Leadership Abilities Development
                  systems and more valuable to the youths, young adults, junior
                  employees, senior employees, CEOs, and those who thirsts for
                  leadership roles. With her Doctor of Philosophy degree in
                  Organizational Leadership, she has proven to be effective and
                  collaborative with strong decision-making talents. She enjoys
                  collective brainstorming sessions and activities to achieve a
                  common goal. She is focused on Strategic Leadership, Youth
                  leadership, Employee retention through effective leadership
                  skills, motivation for the 21st-century Manager, the leading
                  woman in the workplace and CEOs leadership abilities
                  development. She transfers her wealth of knowledge by helping
                  leaders who are struggling with leadership abilities
                  development. She is also passionate about raising young and
                  emerging leaders through the application of her Leadership
                  Abilities Development (LAD) systems. She is progressive-minded
                  and in tune with new developments in the leadership field.
        Omolara Olufade is married with children.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //team setion -->

    <!-- content section -->
    <!-- <section class="w3l-content-mid py-5">
      <div class="container py-md-5 py-4">
        <div class="welcome-left">
          <h3 class="title-w3l">
            The Best Choice For Your Successful Business!
          </h3>
          <p class="mt-3 text-white">
            Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices
            in ligula. Semper at tempufddfel.
          </p>
          <a href="#contact" class="btn btn-style mt-4">Get free quote</a>
        </div>
      </div>
    </section> -->
    <!-- //content section -->

    <!-- testimonials section -->
    <!-- <section class="w3l-clients py-5" id="testimonials">
      <div class="container py-md-5 py-4">
        <div class="row align-items-center mb-5">
          <div class="col-md-6 section-heading">
            <h5 class="small-title-2">Oue Clients Testimonials</h5>
            <h3 class="title-style-2">What People Say</h3>
          </div>
          <div class="col-md-6 section-heading mt-md-0 mt-2">
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit accusantium
              doloremque, eaque ipsa quae ab illo inventore.Sed ut perspiciatis
              unde omnis iste natus error sit.
            </p>
          </div>
        </div>
        <div id="owl-demo2" class="owl-carousel owl-theme pb-5">
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum
                  primis in faucibus orci luctus.
                </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"
                  ><img
                    src="assets/images/testi1.jpg"
                    class="img-responsive"
                    alt="placeholder image"
                /></a>
                <div class="people-info align-self">
                  <h3>Johnson william</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet</q>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum
                  primis in faucibus orci luctus.
                </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"
                  ><img
                    src="assets/images/testi2.jpg"
                    class="img-responsive"
                    alt="placeholder image"
                /></a>
                <div class="people-info align-self">
                  <h3>Alexander sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum
                  primis in faucibus orci luctus.
                </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"
                  ><img
                    src="assets/images/testi3.jpg"
                    class="img-responsive"
                    alt="placeholder image"
                /></a>
                <div class="people-info align-self">
                  <h3>John wilson</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet</q>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum
                  primis in faucibus orci luctus.
                </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"
                  ><img
                    src="assets/images/testi3.jpg"
                    class="img-responsive"
                    alt="placeholder image"
                /></a>
                <div class="people-info align-self">
                  <h3>Julia sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Pellen tesque libero ut justo</q>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum
                  primis in faucibus orci luctus.
                </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"
                  ><img
                    src="assets/images/testi1.jpg"
                    class="img-responsive"
                    alt="placeholder image"
                /></a>
                <div class="people-info align-self">
                  <h3>John wilson</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">\
            <div class="testimonial-content">
              <div class="testimonial">
                <blockquote>
                  <q>Lorem ipsum dolor sit amet.</q>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum
                  primis in faucibus orci luctus.
                </p>
              </div>
              <div class="bottom-info mt-4">
                <a class="comment-img" href="#url"
                  ><img
                    src="assets/images/testi2.jpg"
                    class="img-responsive"
                    alt="placeholder image"
                /></a>
                <div class="people-info align-self">
                  <h3>Julia sakura</h3>
                  <p class="identity">Example City</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- //testimonials section -->

    <!-- blog section -->
    <!--<div class="w3l-homeblock2 py-5">-->
    <!--  <div class="container py-md-5 py-4">-->
    <!--    <div class="row align-items-center mb-5">-->
    <!--      <div class="col-md-6 section-heading">-->
    <!--        <h5 class="small-title-2">Our News & Articles</h5>-->
    <!--        <h3 class="title-style-2">Latest Blog Posts</h3>-->
    <!--      </div>-->
    <!--      <div class="col-md-6 section-heading mt-md-0 mt-2">-->
    <!--        <p>-->
    <!--          Sed ut perspiciatis unde omnis iste natus error sit accusantium-->
    <!--          doloremque, eaque ipsa quae ab illo inventore.Sed ut perspiciatis-->
    <!--          unde omnis iste natus error sit.-->
    <!--        </p>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-6">-->
    <!--        <div class="bg-clr-white hover-box">-->
    <!--          <div class="row align-items-center">-->
    <!--            <div class="col-sm-6 position-relative">-->
    <!--              <a href="#blog">-->
    <!--                <img-->
    <!--                  class="img-fluid d-block"-->
    <!--                  src="assets/images/blog3.jpg"-->
    <!--                  alt="image"-->
    <!--                />-->
    <!--              </a>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6">-->
    <!--              <div class="card-body blog-details align-self pl-sm-0">-->
    <!--                <a href="#blog" class="blog-desc"-->
    <!--                  >Why a visual identity system is more memorable-->
    <!--                </a>-->
    <!--                <p>-->
    <!--                  Lorem ipsum dolor sit amet consectetur ipsum adipisicing-->
    <!--                  elit.-->
    <!--                </p>-->
    <!--                <div-->
    <!--                  class="d-flex align-items-center justify-content-between mt-lg-4 mt-5"-->
    <!--                >-->
    <!--                  <h5 class="text-blog-e">March 06, 2021</h5>-->
    <!--                  <a href="#blog" class="blog-icon-e"-->
    <!--                    ><i class="fas fa-plus"></i-->
    <!--                  ></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-lg-6 mt-lg-0 mt-4">-->
    <!--        <div class="bg-clr-white hover-box">-->
    <!--          <div class="row align-items-center">-->
    <!--            <div class="col-sm-6 position-relative">-->
    <!--              <a href="#blog">-->
    <!--                <img-->
    <!--                  class="img-fluid d-block"-->
    <!--                  src="assets/images/blog6.jpg"-->
    <!--                  alt="Card image cap"-->
    <!--                />-->
    <!--              </a>-->
    <!--            </div>-->
    <!--            <div class="col-sm-6">-->
    <!--              <div class="card-body blog-details align-self pl-sm-0">-->
    <!--                <a href="#blog" class="blog-desc"-->
    <!--                  >Make website that surpasses amongst all the</a-->
    <!--                >-->
    <!--                <p>-->
    <!--                  Lorem ipsum dolor sit amet consectetur ipsum adipisicing-->
    <!--                  elit.-->
    <!--                </p>-->
    <!--                <div-->
    <!--                  class="d-flex align-items-center justify-content-between mt-lg-4 mt-5"-->
    <!--                >-->
    <!--                  <h5 class="text-blog-e">March 26, 2021</h5>-->
    <!--                  <a href="#blog" class="blog-icon-e"-->
    <!--                    ><i class="fas fa-plus"></i-->
    <!--                  ></a>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- //blog section -->

    <!-- Form Section -->
    <a href="#" id="openprogram"></a>
    <section class="starsForm">
        <div class="stars-form">

          <form action="proc-form.php" method="post" class="sectionForms">
            <h1 class="stars-h1">Open Program</h1>

            <div class="stars-text">
              <h2 class="stars-h2">Online Leadership Course</h2>
              <p>Kindly fill in the details.</p>
            </div>

            <?php

              if(isset($error_msg)){
                echo "<div class= 'star-error' >" . $error_msg ."</div>";
              }

              if (isset($result)){
                echo"<div class= 'star-result'>". $success ."</div>";
              }

              if (isset($error)){
                echo "<div class='star-error'>". $error ."</div>";
              }

            ?>


    <div class="starsdiv">
    <input type="text" name="name" placeholder="Full Name" class="formBox">
            <input type="email" name="email" placeholder="Email" class="formBox">
            <input type="phone" name="phone" placeholder="Phone" class="formBox">
            <select name="courses" id="l_courses" class="formBox"> 
              <option value="" selected disabled>Choose Leadership Courses</option>
              <?php

                if ($courses)
                {
                  echo '<option selected value= "'.$courses.'">' . $courses . '</option>';
                }

              ?>
   <?php 
                    $query = "select * from courses order by courses asc";
                    $result = mysqli_query($conn,$query);
                    $num = mysqli_num_rows($result);
                    for($i=0; $i<$num; $i++)
                    {
                        $row = mysqli_fetch_array($result);
                ?>

              <option value="<?php echo $row['courses']; ?>"><?php echo $row['courses']; ?> - £<?php echo number_format($row['price']); ?></option>
             <?php } ?>
            </select>
            

         <span id="list_dates"></span>
    </div>


            <button class="btn btn-style mt-md-5 mt-4">
              Submit
            </button>


          </form>  
        </div>
    </section>

    <!-- footer -->
    <a href="#" id="contact"></a>
    <footer class="w3l-footer-22 py-5">
      <div class="container py-md-5 py-4">
        <div class="row sub-columns">
          <div class="col-lg-4 col-sm-12 sub-one-left">
            <h6>About</h6>
            <p>
              Stars & Bloom Consulting is founded with a mission to get people
              to perform at their optimal capacity. We help those that are
              struggling with leadership skills to cultivate cutting- edge
              leadership abilities with our tested and proven LAD systems.
            </p>
            <div class="columns-2">
              <ul class="social">
                <li>
                  <a
                    href="http://Facebook.com/starsnbloom"
                    target="_blank"
                    title="facebook"
                    ><span class="fab fa-facebook-f" aria-hidden="true"></span
                  ></a>
                </li>
                <li>
                  <a href="#linkedin" target="_blank" title="linkedin"
                    ><span class="fab fa-linkedin-in" aria-hidden="true"></span
                  ></a>
                </li>
                <li>
                  <a
                    href="http://Twitter.com/Starsandbloom"
                    target="_blank"
                    title="twitter"
                    ><span class="fab fa-twitter" aria-hidden="true"></span
                  ></a>
                </li>
                <li>
                  <a href="#google" target="_blank" title="google"
                    ><span
                      class="fab fa-google-plus-g"
                      aria-hidden="true"
                    ></span
                  ></a>
                </li>
                <li>
                  <a
                    href="http://Instagram.com/starsnbloom"
                    target="_blank"
                    title="instagram"
                    ><span class="fab fa-instagram" aria-hidden="true"></span
                  ></a>
                </li>
              </ul>
            </div>
          </div>
          <div
            class="col-lg-4 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-5"
          >
            <h6>Our Services</h6>
            <ul>
              <li>
                <a href="#consulting"
                  ><span class="fas fa-angle-right mr-2"></span>Consulting</a
                >
              </li>
              <li>
                <a href="#training"
                  ><span class="fas fa-angle-right mr-2"></span>Training</a
                >
              </li>
              <li>
                <a href="#marketing"
                  ><span class="fas fa-angle-right mr-2"></span>Marketing</a
                >
              </li>
              <li>
                <a href="#brokerage"
                  ><span class="fas fa-angle-right mr-2"></span>Brokerage</a
                >
              </li>
              <li>
                <a href="#research"
                  ><span class="fas fa-angle-right mr-2"></span>Research</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-sm-6 sub-two-right mt-lg-0 mt-sm-5 mt-4">
            <h6>Quick links</h6>
            <ul>
              <li>
                <a href="#home"
                  ><span class="fas fa-angle-right mr-2"></span>Home</a
                >
              </li>
              <li>
                <a href="#about"
                  ><span class="fas fa-angle-right mr-2"></span>About</a
                >
              </li>
              <li>
                <a href="#service"
                  ><span class="fas fa-angle-right mr-2"></span>Services</a
                >
              </li>
                <a href="#ourteam"
                  ><span class="fas fa-angle-right mr-2"></span> Our Team</a
                >
              </li>
              <li>
                <a href="#contact"
                  ><span class="fas fa-angle-right mr-2"></span>Contact</a
                >
              </li>
            </ul>
          </div>
          <!-- <div
            class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4"
          >
            <h6>Help & Support</h6>
            <ul>
              <li>
                <a href="#live"
                  ><span class="fas fa-angle-right mr-2"></span>Live Chart</a
                >
              </li>
              <li>
                <a href="#faq"
                  ><span class="fas fa-angle-right mr-2"></span>Faq</a
                >
              </li>
              <li>
                <a href="#support"
                  ><span class="fas fa-angle-right mr-2"></span>Support</a
                >
              </li>
              <li>
                <a href="#terms"
                  ><span class="fas fa-angle-right mr-2"></span>Terms of
                  Services</a
                >
              </li>
            </ul>
          </div> -->
        </div>
        <div class="sub-contact mt-5 pt-lg-4">
          <div class="row">
            <div class="col-md-4 footer-contact d-flex align-items-center">
              <span class="fas fa-envelope-open" aria-hidden="true"></span>
              <div>
                <a href="mailto:info@starsandbloom.com">info@starsandbloom.com</a>
                <p>Drop Us a Line</p>
              </div>
            </div>
            <div
              class="col-md-4 footer-contact d-flex align-items-center active"
            >
              <span class="fas fa-phone-alt" aria-hidden="true"></span>
              <div>
                <a href="tel:4707316067">+1-470-731-6067</a>
                <p>Call Us Now</p>
              </div>
            </div>
            <div class="col-md-4 footer-contact d-flex align-items-center">
              <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
              <div>
                <h5>
                  2180 Satellite Boulevard, Suite 400, Duluth Georgia, 30097.
                </h5>
                <p>Get Direction</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- copyright -->
      <div class="copyright-footer text-center">
        <div class="container">
          <div class="columns">
            <p>@2023 Stars & Bloom Consulting. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- //copyright -->
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- script for tesimonials carousel slider -->
    <script>
      $(document).ready(function () {
        $("#owl-demo2").owlCarousel({
          loop: true,
          nav: false,
          margin: 50,
          responsiveClass: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: true,
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            736: {
              items: 1,
              nav: false,
            },
            991: {
              items: 2,
              margin: 30,
              nav: false,
            },
            1080: {
              items: 3,
              nav: false,
            },
          },
        });
      });
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- owl carousel -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".popup-with-zoom-anim").magnificPopup({
          type: "inline",

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: "auto",

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: "my-mfp-zoom-in",
        });

        $(".popup-with-move-anim").magnificPopup({
          type: "inline",

          fixedContentPos: false,
          fixedBgPos: true,

          overflowY: "auto",

          closeBtnInside: true,
          preloader: false,

          midClick: true,
          removalDelay: 300,
          mainClass: "my-mfp-slide-bottom",
        });
      });
    </script>
    <!-- //magnific popup -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
      function autoType(elementClass, typingSpeed) {
        var thhis = $(elementClass);
        thhis.css({
          position: "relative",
          display: "inline-block",
        });
        thhis.prepend(
          '<div class="cursor" style="right: initial; left:0;"></div>'
        );
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split("");
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function () {
          thhis.css("opacity", 1);
          thhis.prev().removeAttr("style");
          thhis.text("");
          for (var i = 0; i < amntOfChars; i++) {
            (function (i, char) {
              setTimeout(function () {
                newString += char;
                thhis.text(newString);
              }, i * typingSpeed);
            })(i + 1, text[i]);
          }
        }, 1500);
      }

      $(document).ready(function () {
        // Now to start autoTyping just call the autoType function with the
        // class of outer div
        // The second paramter is the speed between each letter is typed.
        autoType(".type-js", 200);
      });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
      $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
          $("#site-header").addClass("nav-fixed");
        } else {
          $("#site-header").removeClass("nav-fixed");
        }
      });

      //Main navigation Active Class Add Remove
      $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
      });
      $(document).on("ready", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
        $(window).on("resize", function () {
          if ($(window).width() > 991) {
            $("header").removeClass("active");
          }
        });
      });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
      $(function () {
        $(".navbar-toggler").click(function () {
          $("body").toggleClass("noscroll");
        });
      });
    </script>
    <script>
      window.addEventListener("DOMContentLoaded", function () {
        var navItems = document.querySelectorAll(".nav-item");

        window.addEventListener("scroll", function (event) {
          var fromTop = window.scrollY + 60; // Adjust 60 as needed

          navItems.forEach(function (item) {
            var section = document.querySelector(item.dataset.target);

            if (
              section.offsetTop <= fromTop &&
              section.offsetTop + section.offsetHeight > fromTop
            ) {
              navItems.forEach(function (navItem) {
                navItem.classList.remove("active");
              });
              item.classList.add("active");
            }
          });
        });
      });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(function(){
              $('#l_courses').change(function(){
                 var course = $(this).val();
                 $.ajax({
                    url: 'get_dates.php', // Replace with your API endpoint
                    type: 'POST',
                    dataType: 'text',
                    data: {course : course},
                    success: function(response) {
                    $('#list_dates').html(response);
                    }
                });
        })

      })
      </script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
  </body>
</html>
