<!DOCTYPE html>
<html lang="zxx">
  
<?php
    @include('head.php')
  ?>
  <body>
   
  <?php
    @include('header.php')
  ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
          <div class="bread-inner">
            <div class="row">
              <div class="col-12">
                <h2>Support</h2>
                <ul class="bread-list">
                  <li><a href="index.html">Home</a></li>
                  <li><i class="icofont-simple-right"></i></li>
                  <li class="active">Support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Breadcrumbs -->

    <!-- Start Feautes -->
    <section class="hero-section">
        <div class="container">
          <!-- Headline and Sub-headline -->
          <div class="row text-center">
            <div class="col-lg-12">
              <div class="hero-content">
                <h1>We’re Here to Help.</h1>
                <p>Get support when you need it most.</p>
              </div>
            </div>
          </div>
      
          <!-- Support Options -->
          <div class="row support-options">
            <!-- Help Center -->
            <div class="col-lg-3 col-md-6 col-12 text-center">
              <div class="support-card">
                <div class="step-icon m-20">
                <i class="icofont-book"></i>
                </div>
                <h3>Help Center</h3>
                <p>Access a comprehensive knowledge base to resolve issues quickly.</p>
                <a href="/help-center" class="btn btn-primary">Visit Help Center</a>
              </div>
            </div>
      
            <!-- Live Chat -->
            <div class="col-lg-3 col-md-6 col-12 text-center">
              <div class="support-card">
                <div class="step-icon m-20">
                <i class="icofont-chat"></i>
                </div>
                <h3>Live Chat</h3>
                <p>Connect with our team in real-time for personalized support.</p>
                <a href="/live-chat" class="btn btn-primary">Start Chat</a>
              </div>
            </div>
      
            <!-- Email Support -->
            <div class="col-lg-3 col-md-6 col-12 text-center">
              <div class="support-card">
                <div class="step-icon m-20">
                <i class="icofont-email"></i>
            </div>
                <h3>Email Support</h3>
                <p>Fill out our contact form, and we’ll respond promptly.</p>
                <a href="/contact-form" class="btn btn-primary">Send Email</a>
              </div>
            </div>
      
            <!-- Phone Support -->
            <div class="col-lg-3 col-md-6 col-12 text-center">
              <div class="support-card">
                <div class="step-icon m-20">
                <i class="icofont-phone"></i>
                    </div>
                <h3>Phone Support</h3>
                <p>For urgent inquiries, call us directly at:</p>
                <a href="tel:+1234567890" class="btn btn-primary">+1 234 567 890</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    <!--/ End Feautes -->

    <section class="faq-section">
        <div class="container">
          <!-- Section Title -->
          <div class="row text-center">
            <div class="col-lg-12">
              <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common issues and questions.</p>
              </div>
            </div>
          </div>
      
          <!-- FAQ Items -->
          <div class="row">
            <div class="col-lg-12">
              <div class="accordion" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      How do I reset my password?
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      To reset your password, click on the "Forgot Password" link on the login page and follow the instructions. For more details, visit our <a href="/reset-password">Reset Password Guide</a>.
                    </div>
                  </div>
                </div>
      
                <!-- FAQ 2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      Why can’t I access my account?
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      This issue might be due to incorrect login details or an inactive account. Please double-check your credentials or contact support for help. Visit our <a href="/account-access">Account Access Help</a> for more information.
                    </div>
                  </div>
                </div>
      
                <!-- FAQ 3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      How do I update my profile information?
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      You can update your profile by navigating to the "My Account" section and selecting "Edit Profile." Check our <a href="/update-profile">Profile Update Guide</a> for step-by-step instructions.
                    </div>
                  </div>
                </div>
      
                <!-- FAQ 4 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseFour"
                      aria-expanded="false"
                      aria-controls="collapseFour"
                    >
                      How can I contact customer support?
                    </button>
                  </h2>
                  <div
                    id="collapseFour"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body">
                      You can reach out to our customer support team via email, live chat, or phone. Visit our <a href="/contact-support">Contact Support Page</a> for details.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

    <style>

.faq-section {
  padding: 40px 0;
  background-color: #f9f9f9;
}

.section-title h2 {
  font-size: 36px;
  margin-bottom: 10px;
  color: #333;
}

.section-title p {
  font-size: 18px;
  color: #666;
  margin-bottom: 40px;
}

.accordion-button {
  font-size: 18px;
  color: #333;
  background: #fff;
  border: none;
  box-shadow: none;
  transition: background 0.3s ease;
}

.accordion-button:hover {
  background: #f0f0f0;
}

.accordion-body {
  font-size: 16px;
  color: #555;
}

.accordion-body a {
  color: #007bff;
  text-decoration: none;
}

.accordion-body a:hover {
  text-decoration: underline;
}

        .hero-section {
  padding: 40px 10px 0px 10px;
  background-color: #fff;
  text-align: center;
}

.hero-content h1 {
  font-size: 36px;
  margin-bottom: 10px;
  color: #333;
}

.hero-content p {
  font-size: 18px;
  color: #666;
  margin-bottom: 40px;
}

.step-icon i {
  font-size: 36px;
  color: #fff!important;
    background: #007bff!important;
    border-radius: 30px;
    padding: 10px;
}
.m-20{
    margin: 20px;
}
.support-options .support-card {
  background: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 20px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.support-options .support-card:hover {
  transform: translateY(-10px);
}

.support-card i {
  font-size: 36px;
  color: #007bff;
  margin-bottom: 15px;
}

.support-card h3 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #333;
}

.support-card p {
  font-size: 14px;
  color: #666;
  margin-bottom: 15px;
}

.support-card .btn {
  font-size: 14px;
  padding: 10px 20px;
  color: #fff;
  background: #007bff;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  transition: background 0.3s ease;
}

.support-card .btn:hover {
  background: #0056b3;
}

    </style>
   
  <?php
    @include('footer.php')
  ?>
  </body>

</html>
