
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="copyright" content="pavilan" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Title -->
    <title>Table Tax</title>

    <!-- Favicon -->
    <link rel="icon" href="img/TTlogo.png" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/nice-select.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel.css" />
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Mediplus CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <!-- Color CSS -->
    <link rel="stylesheet" href="css/color/color1.css" />

    <link rel="stylesheet" id="colors" />
  </head>
  <body onload="generateCaptcha()">
    
   <!-- Preloader -->
 <div class="preloader">
      <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>

        <div class="indicator">
          <svg width="16px" height="12px">
            <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            <polyline
              id="front"
              points="1 6 4 6 6 11 10 1 12 6 15 6"
            ></polyline>
          </svg>
        </div>
      </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
     <!-- Topbar -->
     <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-5 col-12">
          </div>
          <div class="col-lg-6 col-md-7 col-12">
            <!-- Top Contact -->
            <ul class="top-contact">
              <li><i class="fa fa-phone"></i>+880 1234 56789</li>
              <li>
                <i class="fa fa-envelope"></i
                ><a href="mailto:support@yourmail.com"
                  >support@yourmail.com</a
                >
              </li>
            </ul>
            <!-- End Top Contact -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Topbar -->
      <!-- Header Inner -->
      <div class="header-inner">
        <div class="container">
          <div class="inner">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-3 col-12">
                <!-- Start Logo -->
                <div class="logo">
                  <a href="index.html"><img src="img/TTlogo.png" alt="Table Tax Logo" class="mb-3" style="height: 90px;" /></a>
                   <!-- <a href="index.html" style="font-size: 26px;"><b style="color: #1a76d1;font-size: 26px;">Table</b><b>Tax</b></a> -->
                </div>
                <!-- End Logo -->
                <!-- Mobile Nav -->
                <div class="mobile-nav"></div>
                <!-- End Mobile Nav -->
              </div>
              <div class="col-lg-7 col-md-9 col-12">
                <!-- Main Menu -->
                <div class="main-menu">
                  <nav class="navigation">
                    <ul class="nav menu">
                      <li class="active">
                        <a href="#">Home</a>
                      </li>
                      <li>
                        <a href="works.html">How It Works</a>
                      </li>
                      <li>
                        <a href="index.html#Pricing">Pricing</a>
                      </li>
                      <li>
                        <a href="support.html">Support</a>
                      </li>
                      <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
                <!--/ End Main Menu -->
              </div>
              <div class="col-lg-2 col-12">
                <div class="get-quote">
                  <a href="login.html" class="btn">
                    <i class="icofont-login"></i> Login
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
  <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
      <div class="container">
        <div class="bread-inner">
          <div class="row">
            <div class="col-12">
              <h2>Contact Us</h2>
              <ul class="bread-list">
                <li><a href="index.html">Home</a></li>
                <li><i class="icofont-simple-right"></i></li>
                <li class="active">Contact Us</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    <section class="contact-us section">
      <div class="container">
        <div class="inner">
          <div class="row">
            <div class="col-lg-6">
              <div class="contact-us-left">
                <!--Start Google-map -->
                <div id="myMap">
                  <iframe
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?q=new%20york&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                  ></iframe>
                </div>
                <!--/End Google-map -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contact-us-form">
                <h2>Contact With Us</h2>
                <p>If you have any questions please feel free to contact with us.</p>

                <!-- Display Success or Error Message -->
              <?php if (isset($_SESSION['success_message'])): ?>
                <div class="alert alert-success">
                  <?= $_SESSION['success_message']; ?>
                </div>
                <?php unset($_SESSION['success_message']); ?>
              <?php elseif (isset($_SESSION['error_message'])): ?>
                <div class="alert alert-danger">
                  <?= $_SESSION['error_message']; ?>
                </div>
                <?php unset($_SESSION['error_message']); ?>
              <?php endif; ?>
              
                <!-- Form -->
                <form class="form" method="post" action="submit.php">
                <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <input
                type="text"
                name="name"
                placeholder="Name"
                value="<?= $_SESSION['old']['name'] ?? '' ?>"
                required=""
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input
                type="email"
                name="email"
                placeholder="Email"
                value="<?= $_SESSION['old']['email'] ?? '' ?>"
                required=""
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input
                type="text"
                name="phone"
                placeholder="Phone"
                value="<?= $_SESSION['old']['phone'] ?? '' ?>"
                required=""
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input
                type="text"
                name="subject"
                placeholder="Subject"
                value="<?= $_SESSION['old']['subject'] ?? '' ?>"
                required=""
              />
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <textarea
                name="message"
                placeholder="Your Message"
                required=""
              ><?= $_SESSION['old']['message'] ?? '' ?></textarea>
            </div>
          </div>
          <!-- Simple Text CAPTCHA -->
          <div class="col-lg-12">
            <div class="form-group">
              <label for="captcha">
                Please type the following text: <strong id="captcha-text"></strong>
              </label>
              <input
                type="hidden"
                id="expected_captcha"
                name="expected_captcha" 
              />

              <input
                type="text"
                id="captcha"
                name="captcha"
                placeholder="Enter text here"
                required=""
              />
            </div>
          </div>
          <div class="col-12">
            <div class="form-group login-btn">
              <button class="btn" type="submit">Send</button>
            </div>
          </div>
        </div>
                </form>
                <!--/ End Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ End Contact Us -->

    <!-- Footer Area -->
<footer id="footer" class="footer">
      <!-- Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <div class="single-footer">
                <h2>About Us</h2>
                <p>
                  We are a trusted tax consultancy firm dedicated to simplifying tax complexities for individuals and businesses.
                </p>
                <!-- Social -->
                <ul class="social">
                  <li>
                    <a href="#"><i class="icofont-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icofont-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="icofont-twitter"></i></a>
                  </li>
                </ul>
                <!-- End Social -->
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="single-footer f-link">
                <h2>Quick Links</h2>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Home</a
                        >
                      </li>
                      <li>
                        <a href="works.html"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >How It Works</a
                        >
                      </li>
                      <li>
                        <a href="#Pricing"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Pricing</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Support</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <ul>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Terms of Service </a
                        >
                      </li>
                      <li>
                        <a href="#"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Privacy & Policy</a
                        >
                      </li>
                      <li>
                        <a href="#faq"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >FAQ</a
                        >
                      </li>
                      <li>
                        <a href="contact.php"
                          ><i class="fa fa-caret-right" aria-hidden="true"></i
                          >Contact Us</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="single-footer">
                <h2>Help Center</h2>
                <p>
                  We're here to assist you every step of the way!
                </p>
                <ul class="time-sidual">
                  <li class="day">Email <span>support@example.com</span></li>
                  <li class="day">Phone <span>+1-234-567-890</span></li>
                  <li class="day">Live Chat <span>Available on our website</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    
    <style>
      @media only screen and (max-width: 767px) {
        .slicknav_nav li a {
            color: #235377;
        }
        .slicknav_btn {
            margin-top: 50px;
        }
        .header .slicknav_nav {
            background: #3776ba30;
            justify-items: right !important;
        }
        .header .header-inner {
          padding-bottom: 10px;
        }
      }
    </style>

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Jquery Nav JS -->
    <script src="js/jquery.nav.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Niceselect JS -->
    <script src="js/niceselect.js"></script>
    <!-- Tilt Jquery JS -->
    <script src="js/tilt.jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- counterup JS -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- Steller JS -->
    <script src="js/steller.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>

    <script>
      // Generate a random CAPTCHA text
      function generateCaptcha() {
        const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let captcha = "";
        for (let i = 0; i < 6; i++) {
          captcha += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        document.getElementById("captcha-text").textContent = captcha;
        document.getElementById("expected_captcha").value = captcha;

      }
    
      // Generate CAPTCHA on page load
      window.onload = generateCaptcha;
    </script>
    
    
  </body>

<!-- Mirrored from mediplus-html.vercel.app/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 15:17:14 GMT -->
</html>
