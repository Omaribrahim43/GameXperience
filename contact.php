<?php
// includes
$pageTitle = "Contact Us";
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
            <div class="contact_info_area">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list left wow fadeInUp"
                            data-bgimg="assets/img/others/gaming-world-bg1.webp" data-wow-delay="0.1s"
                            data-wow-duration="1.1s">
                            <div class="contact_info_thumb">
                                <img src="assets/img/icon/email.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Email:</h3>
                                <p>
                                    <a href="mailto:gamestudio@gmail.com">gamexperience@gmail.com</a><br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list center wow fadeInUp"
                            data-bgimg="assets/img/others/gaming-world-bg2.webp" data-wow-delay="0.2s"
                            data-wow-duration="1.2s">
                            <div class="contact_info_thumb">
                                <img src="assets/img/icon/location.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Location:</h3>
                                <p>21166 Aidoun, Irbid/Jordan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="contact_info_list right wow fadeInUp"
                            data-bgimg="assets/img/others/gaming-world-bg3.webp" data-wow-delay="0.3s"
                            data-wow-duration="1.3s">
                            <div class="contact_info_thumb">
                                <img src="assets/img/icon/phone.webp" alt="">
                            </div>
                            <div class="contact_info_text">
                                <h3>Phone:</h3>
                                <p>
                                    <a href="tel:00 (962) 776 991 624">00 (962) 776 991 624</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="contact_form_area">
                <div class="section_title text-center mb-60">
                    <h2>GET IN TOUCH</h2>
                    <p>When unknown printer took type and scrambled it to make <br>
                        type specimen book centuries,</p>
                </div>
                <div class="contact_form_inner">
                    <form id="contact-form" action="assets/mail.php">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_input">
                                    <input name="con_name" placeholder="Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_input">
                                    <input name="con_email" placeholder="E-Mail" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_input">
                                    <input name="con_phone" placeholder="Phone" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_input">
                                    <input name="con_address" placeholder="Address" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form_textarea">
                            <textarea name="con_message" placeholder="Write a review from here"></textarea>
                        </div>
                        <div class="form_input_btn text-center">
                            <button type="submit" class="btn btn-link">SUBMIT NOW <img
                                    src="assets/img/icon/arrrow-icon.webp" alt=""></button>
                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

    <!--contact map start-->
    <div class="contact_map mt-70">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=jordan aidoun&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    <!--contact map end-->

    <!-- gaming update section start -->
    <section class="gaming_update_section contact_gaming_update">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gaming_update_inner d-flex justify-content-between align-items-center"
                        data-bgimg="https://htmldemo.net/bonx/bonx/assets/img/bg/gaming-update.webp">
                        <div class="gaming_update_text">
                            <h2>Connect with us <br>
                                for gaming update.</h2>
                        </div>
                        <div class="gaming_update_btn">
                            <a class="btn btn-link" href="#">CONNECT NOW <img src="assets/img/icon/arrrow-icon.webp"
                                    alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gaming update section end -->

</div>
<!-- page wrapper end -->

<?php
// includes
include_once 'inc/footer.php';
include_once 'inc/scripts.php';
?>