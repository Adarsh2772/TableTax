<!DOCTYPE html>
<html lang="zxx">
  <?php
  @include('head.php')
?>
<body >
  
<?php
  @include('header.php')
?>

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
              
                <!-- Form -->
                <form class="form" method="post"  id="contactForm">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          placeholder="Name"
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
                        ></textarea>
                      </div>
                    </div>
                    <!-- Simple Text CAPTCHA -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label for="captcha">
                          Please type the following text: <strong id="captcha-text"></strong>
                        </label>
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
                        <a href="#"
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

    <script>
      // Generate a random CAPTCHA text
      function generateCaptcha() {
        const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        let captcha = "";
        for (let i = 0; i < 6; i++) {
          captcha += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        document.getElementById("captcha-text").textContent = captcha;
      }
    
      // Generate CAPTCHA on page load
      window.onload = generateCaptcha;

      // Validate Captcha
  function validateCaptcha(event) {
    event.preventDefault(); // Prevent form submission until validation

    const captchaBox = document.getElementById('captchaBox');
    const captchaInput = document.getElementById('captchaInput').value;
    const captchaError = document.getElementById('captchaError');

    if (captchaInput !== captchaBox.textContent) {
      captchaError.style.display = 'block'; // Show error message
      return false; // Stop form submission
    } else {
      captchaError.style.display = 'none'; // Hide error message
      document.getElementById('contactForm').submit(); // Submit the form
    }
  }

  // Initialize Captcha on Page Load
  document.addEventListener('DOMContentLoaded', function () {
    const captchaBox = document.getElementById('captchaBox');
    const captchaText = generateCaptcha();
    captchaBox.textContent = captchaText; // Display the captcha text

    const form = document.getElementById('contactForm');
    form.addEventListener('submit', validateCaptcha); // Attach validation event
  });
    </script>
    
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
  </body>

<!-- Mirrored from mediplus-html.vercel.app/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 15:17:14 GMT -->
</html>
