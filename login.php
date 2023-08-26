<?php
// includes
$pageTitle = "Sign In";
include_once 'inc/header.php';
include_once 'inc/offcanvas-navbar.php';
include_once 'inc/main-navbar.php';
include_once 'inc/breadcrumbs.php';
?>

<!-- page wrapper start -->
<div class="page_wrapper">
  <!-- contact section start -->
  <section class="contact_page_section mb-140">
    <div class="container">
      <div class="row justify-content-between align-items-center mb-n50">
        <div class="col-lg-6 col-md-8 col-12 mx-auto mb-50">
          <img width="550" height="550" src="https://htmldemo.net/bonx/bonx/assets/img/bg/hero-position-img.webp" alt="" />
        </div>
        <div class="col-lg-5 col-md-8 col-12 mx-auto mb-50">
          <div class="section_title text-center mb-60">
            <h2>Login</h2>
          </div>
          <div class="form_input">
            <input name="login_email" placeholder="Email" type="email" />
          </div>
          <div class="form_input">
            <input name="login_password" placeholder="Password" type="password" />
          </div>
          <div class="form_input_btn text-center mb-40">
            <button type="submit" class="btn btn-link">
              Login<img width="20" height="20" src="assets/img/icon/arrrow-icon.webp" alt="" />
            </button>
          </div>
          <p class="text-center">
            Don't have any account,
            <a href="registration.php">Signup here</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- contact section end -->
</div>
<!-- page wrapper end -->

<?php
// includes
include_once 'inc/footer.php';
include_once 'inc/scripts.php';
?>