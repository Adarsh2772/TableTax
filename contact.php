
<!DOCTYPE html>
<html lang="zxx">

<?php
    @include('head.php')
  ?>
  <body onload="generateCaptcha()">
    
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

    <?php 
    @include('footer.php')
    ?>

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

<!-- Mirrored from mediplus-html.vercel.app/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2024 15:17:14 GMT -->
</html>
