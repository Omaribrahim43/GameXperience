<?php
// includes
$pageTitle = "All Game Center";
include_once 'inc/header.php';
include_once 'inc/offcanvas-navbar.php';
include_once 'inc/main-navbar.php';
include_once 'inc/breadcrumbs.php';
?>

<!-- page wrapper start -->
<div class="page_wrapper">
  <!-- popular gaming  section start -->
  <div class="gaming_page_section mb-125">
    <div class="container">
      <div class="gaming_page_header mb-70">
        <form action="#">
          <div class="gaming_header_inner d-flex justify-content-between">
            <div class="gaming_form_left d-flex">
              <div class="gaming_form_list">
                <select>
                  <option selected value="0">City</option>
                  <option value="amman">Amman</option>
                  <option value="irbid">Irbid</option>
                  <option value="zarqaa">Zarqaa</option>
                </select>
              </div>
              <div class="gaming_form_list">
                <select>
                  <option selected value="0">All Platform</option>
                  <option value="1">PC</option>
                  <option value="2">Playstation 4</option>
                  <option value="3">Playstation 5</option>
                  <option value="3">X-Box</option>
                </select>
              </div>
            </div>
            <div class="gaming_form_search">
              <input placeholder="Search here" type="text" />
              <button><i class="icofont-search-1"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="gaming_page_inner">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
              <a href="game-details.php"><img src="assets/img/others/1.png" alt="" /></a>
              <div class="gaming_details_btn">
                <a class="btn btn-link" href="game-details.php">Game Details
                  <img src="assets/img/icon/arrrow-icon.webp" alt="" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
              <a href="game-details.php"><img src="assets/img/others/2.png" alt="" /></a>
              <div class="gaming_details_btn">
                <a class="btn btn-link" href="game-details.php">Game Details
                  <img src="assets/img/icon/arrrow-icon.webp" alt="" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
              <a href="game-details.php"><img src="assets/img/others/3.png" alt="" /></a>
              <div class="gaming_details_btn">
                <a class="btn btn-link" href="game-details.php">Game Details
                  <img src="assets/img/icon/arrrow-icon.webp" alt="" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="popular_gaming_thumb wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
              <a href="game-details.php"><img src="assets/img/others/4.png" alt="" /></a>
              <div class="gaming_details_btn">
                <a class="btn btn-link" href="game-details.php">Game Details
                  <img src="assets/img/icon/arrrow-icon.webp" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="others_gane_btn text-center">
        <a class="btn btn-link" href="#">Other’s Game </a>
      </div>
    </div>
  </div>
  <!-- popular gaming section end -->

  <!-- counterup section start -->
  <section class="counterup_section wow fadeInUp mb-130" data-wow-delay="0.1s" data-wow-duration="1.1s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="counterup_inner d-flex justify-content-center">
            <div class="single_counterup one">
              <div class="counterup_text">
                <h2 class="counterup color1">8697</h2>
                <span>TWITCH STREAMS</span>
              </div>
            </div>
            <div class="single_counterup two">
              <div class="counterup_text">
                <h2 class="counterup color2">428</h2>
                <span>TOTAL GAMES</span>
              </div>
            </div>
            <div class="single_counterup three">
              <div class="counterup_text">
                <h2 class="counterup color3">5367</h2>
                <span>YOUTUBE STREAMS</span>
              </div>
            </div>
            <div class="single_counterup four">
              <div class="counterup_text">
                <h2 class="counterup color4">249</h2>
                <span>PRO TEAM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- counterup section end -->

  <!-- gaming update section start -->
  <?php include_once 'inc/contact-us.php';?>
  <!-- gaming update section end -->
</div>
<!-- page wrapper end -->

<?php
// includes
include_once 'inc/footer.php';
include_once 'inc/scripts.php';
?>