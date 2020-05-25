<?php 

  if (isset($_COOKIE["theme"]) && $_COOKIE["theme"] ) {
    $theme = $_COOKIE["theme"];
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blueprint | Digital Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" href="images/favicon.png">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="<?php 

  if (isset($theme) && $theme) {
    echo $theme;
  }

?>">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="" class="logo-black">
        <img src="images/logo-white.png" alt="" class="logo-white">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
          <li class="nav-item">
            <!-- <div class="switch nav-link">
              <label>
                <input type="checkbox" checked="true">
                <span class="lever"></span>
              </label>
            </div> -->
            <div class="s-swtich nav-link">
              <input type="checkbox" id="switch1" <?php 

                if (isset($theme) && $theme == "dark") {
                  echo "checked";
                }
              
              ?>>
              <label for="switch1">Toggle</label>
            </div>

          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->


  <div class="hero-wrap">
    <div class="overlay"></div>
    <div class="pentagon pentagon-1">
      <?php echo file_get_contents("images/home/top pentagon.svg"); ?>
    </div>
    <!-- <div class="circle-bg"></div>
    <div class="circle-bg-2"></div> -->
    <div class="container">
      <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

        <div class="one-forth pr-md-4 ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 id="hero-header" class="mb-4 blue-line" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We're a digital,<br> agency.</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3 get-started-btn">Get started</a></p>
        </div>

        <div class="skill-section row">

          <div class="col-md-4">
            <div class="skill-card primary">
              <div class="skill-icon">
                <?php echo file_get_contents("images/svg/house.svg"); ?>
              </div>
              <div class="skill-info">
                <div class="skill-title">
                  <h4>Future vision</h4>
                </div>
                <div class="skill-body">
                  It is a long established fact the reader is distracted by the readable contents on the screen.
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="skill-card dark">
              <div class="skill-icon">
                <?php echo file_get_contents("images/svg/battery.svg"); ?>
              </div>
              <div class="skill-info">
                <div class="skill-title">
                  <h4>Product Design</h4>
                </div>
                <div class="skill-body">
                  It is a long established fact the reader is distracted by the readable contents on the screen.
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="skill-card dark framed">
              <div class="skill-icon">
                <?php echo file_get_contents("images/svg/pie-chart.svg"); ?>
              </div>
              <div class="skill-info">
                <div class="skill-title">
                  <h4>Future vision</h4>
                </div>
                <div class="skill-body">
                  It is a long established fact the reader is distracted by the readable contents on the screen.
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Products display -->

        <!-- <div class="one-half align-self-md-end align-self-sm-center">
          <div class="slider-carousel owl-carousel">
            <div class="item">
              <img src="images/dashboard_full_1.png" class="img-fluid img" alt="">
            </div>
            <div class="item">
              <img src="images/dashboard_full_2.png" class="img-fluid img" alt="">
            </div>
            <div class="item">
              <img src="images/dashboard_full_3.png" class="img-fluid img" alt="">
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <section class="vert-bar">
    <div></div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <h3 class="main-title">Services.</h3>

      <div class="row service-links">

        <div class="col-6 col-sm-4">
          <a class="service-link" href="#">
            <div class="row align-items-center m-0 w-100">
              <div class="col-12 col-md-8">
                <span class="title">
                  Cyber Security
                </span>
              </div>
              <div class="col-12 col-md-4">
                <?php echo file_get_contents("images/svg/arrow-right.svg"); ?>
              </div>
            </div>
          </a>
        </div>


        <div class="col-6 col-sm-4">
          <a class="service-link" href="#">
            <div class="row align-items-center m-0 w-100">
              <div class="col-12 col-md-8">
                <span class="title">
                  UI/UX Design
                </span>
              </div>
              <div class="col-12 col-md-4">
                <?php echo file_get_contents("images/svg/arrow-right.svg"); ?>
              </div>
            </div>
          </a>
        </div>

        <div class="col-6 col-sm-4">
          <a class="service-link" href="#">
            <div class="row align-items-center m-0 w-100">
              <div class="col-12 col-md-8">
                <span class="title">
                  Digital Marketing
                </span>
              </div>
              <div class="col-12 col-md-4">
                <?php echo file_get_contents("images/svg/arrow-right.svg"); ?>
              </div>
            </div>
          </a>
        </div>

        <div class="col-6 col-sm-4">
          <a class="service-link" href="#">
            <div class="row align-items-center m-0 w-100">
              <div class="col-12 col-md-8">
                <span class="title">
                  Research & Data Analysis
                </span>
              </div>
              <div class="col-12 col-md-4">
                <?php echo file_get_contents("images/svg/arrow-right.svg"); ?>
              </div>
            </div>
          </a>
        </div>


        <div class="col-6 col-sm-4">
          <a class="service-link" href="#">
            <div class="row align-items-center m-0 w-100">
              <div class="col-12 col-md-8">
                <span class="title">
                  Project/Product Management
                </span>
              </div>
              <div class="col-12 col-md-4">
                <?php echo file_get_contents("images/svg/arrow-right.svg"); ?>
              </div>
            </div>
          </a>
        </div>


        <div class="col-6 col-sm-4">
          <a class="service-link" href="#">
            <div class="row align-items-center m-0 w-100">
              <div class="col-12 col-md-8">
                <span class="title">
                  Web & Mobile App Development
                </span>
              </div>
              <div class="col-12 col-md-4">
                <?php echo file_get_contents("images/svg/arrow-right.svg"); ?>
              </div>
            </div>
          </a>
        </div>


      </div>
    </div>
  </section>

  <section class="vert-bar">
    <div></div>
  </section>

  <section class="ftco-section about">
    <div class="pentagon pentagon-2">
      <?php echo file_get_contents("images/home/mid pentagon.svg"); ?>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="main-title">About.</h3>
        </div>
        <div class="col-sm-6">
          <p class="main-title-desc">
            Building sustainable products and craft creations for the next generation.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-7">
          <div class="team-work about-slide">
            <h5>Team work</h5>
            <p>Committed and creative</p>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="row h-100">
            <div class="col-12 mb-0 mb-sm-4">
              <div class="precision about-slide h-100">
                <h5>Precision</h5>
                <p>Critical and intricate</p>
              </div>
            </div>
            <div class="col-12">
              <div class="philosophy about-slide h-100">
                <h5>Philosophy</h5>
                <p>Trust pays off!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5 values">

        <div class="col-sm-4">
          <h5>Who we are?</h5>
          <p>
            We are a dedicated agency adept at profering lasting solutions to digital problems.
          </p>
        </div>
        <div class="col-sm-4">
          <h5>Our Philosophy</h5>
          <p>
            Curating a generation X solutions and user generated ideas.
          </p>
        </div>
        <div class="col-sm-4">
          <h5>How we work?</h5>
          <p>
            We work with you to bring the best solutions.
          </p>
        </div>

      </div>

    </div>
  </section>

  <section class="vert-bar">
    <div></div>
  </section>

  <div class="pentagon-wrap">
    <div class="pentagon pentagon-3">
      <?php echo file_get_contents("images/home/bottom pentagon.svg"); ?>
    </div>
  </div>

  <section class="ftco-section testimonial">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <div class="image framed">
          </div>
        </div>
        <div class="col-sm-7">
          <div class="wrap-1">
            <h5 class="main-title">
              What clients say.
            </h5>
            <p>
              BluePrint is an exceptional customer-first Agency adept at promoting good work and software relations.
            </p>

            <strong class="small-1">
              <span>Amanda Amaechi</span>
              <span>Product manager @ Youlex</span>
            </strong>
          </div>
        </div>
      </div>

      <hr class="hr-1">

      <div class="row customers">
        <div class="col-4 col-md-2 text-sm-center">
          <img src="images\logos\youlex.png" alt="">
          <img src="images\logos\youlex-white.png" alt="">
        </div>
        <div class="col-4 col-md-2 text-sm-center">
          <img src="images\logos\counser.png" alt="">
          <img src="images\logos\counser-white.png" alt="">
        </div>
        <div class="col-4 col-md-2 text-sm-center">
          <img src="images\logos\fast-send.png" alt="">
          <img src="images\logos\fast-send-white.png" alt="">
        </div>
        <div class="col-4 col-md-2 text-sm-center">
          <img src="images\logos\friday.png" alt="">
          <img src="images\logos\friday-white.png" alt="">
        </div>
        <div class="col-4 col-md-2 text-sm-center">
          <img src="images\logos\sunshine.png" alt="">
          <img src="images\logos\sunshine-white.png" alt="">
        </div>
        <div class="col-4 col-md-2 text-sm-center">
          <img src="images\logos\tridad.png" alt="">
          <img src="images\logos\tridad-white.png" alt="">
        </div>
      </div>


    </div>

  </section>

  <section class="vert-bar vert-bar-footer">
    <div></div>
  </section>

  <footer class="footer">
    <div class="footer-1">
      <div class="container">
        <div class="social-media">
          <a href="">
            <?php echo file_get_contents("images/svg/instagram-sketched.svg"); ?>
          </a>
          <a href="">
            <?php echo file_get_contents("images/svg/facebook.svg"); ?>
          </a>
          <a href="">
            <?php echo file_get_contents("images/svg/twitter.svg"); ?>
          </a>
          <a href="">
            <?php echo file_get_contents("images/svg/iconmonstr-github-1.svg"); ?>
          </a>
        </div>
        <div>
          <h3>Let's Talk?</h3>
        </div>
        <div>
          <a href="#" class="btn btn-primary">Make an enquiry!</a>
        </div>
      </div>
    </div>

    <div class="footer-2">
      <p>34, Adedoyin drive, Oyo state, Nigeria. <br> <a href="tel:+2349066734217">+234 906 673 4217</a></p>
    </div>

    <div class="footer-3">
      <p>&copy; 2019 Copyright Blueprint</p>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="js/home.js"></script>

</body>

</html>