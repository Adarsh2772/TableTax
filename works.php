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
                <h2>How It Works</h2>
                <ul class="bread-list">
                  <li><a href="index.html">Home</a></li>
                  <li><i class="icofont-simple-right"></i></li>
                  <li class="active">How It Works</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Breadcrumbs -->

    <!-- Start Feautes -->
    <section class="features section">
        <div class="container">
          <!-- Hero Section -->
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="section-title">
                <h2>How It Works</h2>
                <p>Filing your taxes online has never been easier.</p>
              </div>
            </div>
          </div>
          
          <!-- Step-by-Step Process -->
          <div class="row steps">
            <!-- Step 1 -->
            <div class="col-lg-3 col-12 text-center">
              <div class="single-step">
                
                <div class="step-icon m-20">
                    <i class="icofont-save"></i>
                </div>
                <h3>Create an Account</h3>
                <p>Sign up for free by providing your email and creating a password.</p>
              </div>
            </div>
            
            <!-- Step 2 -->
            <div class="col-lg-3 col-12 text-center">
              <div class="single-step">
                
                <div class="step-icon m-20">
                    <i class="icofont-info-circle"></i>
                </div>
                <h3>Enter Your Information</h3>
                <p>Fill out the necessary details about your income and deductions.</p>
              </div>
            </div>
            
            <!-- Step 3 -->
            <div class="col-lg-3 col-12 text-center">
              <div class="single-step">
                
                <div class="step-icon m-20">
                  <i class="icofont-document-folder"></i>
                </div>
                <h3>Review & Submit</h3>
                <p>Verify all your entries and submit your tax return securely.</p>
              </div>
            </div>
            
            <!-- Step 4 -->
            <div class="col-lg-3 col-12 text-center">
              <div class="single-step">
                
                <div class="step-icon m-20">
                  <i class="icofont-lock"></i>
                </div>
                <h3>Track Your Refund</h3>
                <p>Monitor the status of your refund anytime, anywhere.</p>
              </div>
            </div>
          </div>
          
          <!-- CTA Section -->
          <div class="row">
            <div class="col-lg-12 text-center">
                <button class="btn btn-primary cta-button">
                    <i class="icofont-file-text"></i> Start Filing Now
                  </button>
            </div>
          </div>
        </div>
      </section>
      
      
    <!--/ End Feautes -->

    <style>
        .features {
  padding: 60px 0;
  background-color: #f9f9f9;
}
.m-20{
    margin: 20px;
}
.section-title h2 {
  font-size: 32px;
  margin-bottom: 10px;
}

.section-title p {
  font-size: 16px;
  color: #666;
}

.steps .single-step {
  background: #fff;
  border: 1px solid #ddd;
  padding: 20px;
  margin: 10px 0;
  border-radius: 8px;
  transition: transform 0.3s ease;
}

.steps .single-step:hover {
  transform: translateY(-10px);
}

.step-number {
  font-size: 36px;
  color: #007bff;
  font-weight: bold;
  margin-bottom: 10px;
}

.step-icon i {
  font-size: 36px;
  color: #fff;
    background: #007bff;
    border-radius: 30px;
    padding: 10px;
  margin: 20px;
}

.single-step h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.single-step p {
  font-size: 14px;
  color: #666;
}

.cta-button {
  font-size: 18px;
  padding: 10px 20px;
  background: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  display: inline-flex;
  align-items: center;
  gap: 10px; /* Space between icon and text */
  cursor: pointer;
  transition: background 0.3s ease;
}

.cta-button i {
  font-size: 20px;
}

.cta-button:hover {
  background: #0056b3;
}
    </style>
   
   <?php 
    @include('footer.php')
    ?>
  </body>

</html>
