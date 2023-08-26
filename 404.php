<?php
// includes
$pageTitle = "Error 404";
include_once 'inc/header.php';
include_once 'inc/offcanvas-navbar.php';
include_once 'inc/main-navbar.php';
include_once 'inc/breadcrumbs.php';
?>

<!-- page wrapper start -->
<div class="page_wrapper">

    <!-- error section start -->
    <section class="error_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error_inner text-center">
                        <div class="error_title">
                            <h3>OPPS...</h3>
                            <p>SORRY, this page is not found.</p>
                        </div>
                        <div class="error__404">
                            <img src="assets/img/others/404.webp" alt="">
                        </div>
                        <div class="error_btn">
                            <a class="btn btn-link" href="index.php"><img src="assets/img/icon/arrrow-left-icon.webp"
                                    alt=""> GO TO HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error section end -->

</div>
<!-- page wrapper end -->

<?php
// includes
include_once 'inc/footer.php';
include_once 'inc/scripts.php';
?>