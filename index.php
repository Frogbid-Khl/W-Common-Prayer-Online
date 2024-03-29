<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('show-event-list.php');
require_once('event-calculation.php');
$db_handle = new DBController();

$currentMonthkalendar = date('Y-m');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon">

    <!-- Developer: Monoget Saha (www.monoget.com.bd) -->
    <!-- Company: FrogBid (www.frogbid.com) -->

    <title>Common Prayer Online</title>
    <link href="assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href='assets/vendor/Animate/animate.min.css' rel='stylesheet'/>
    <link href="assets/css/style.css" rel="stylesheet"/>

    <style>
        .cpo-home-btn {
            height: 105px;
        }
    </style>
</head>
<body>
<div class="container-fluid form-check form-switch mt-2 position-absolute" style="padding-left: unset">
    <div class="row mx-lg-0 mx-auto" style="max-width: 125px">
        <div class="col-4">
            <label class="form-check-label" for="darkModeSwitch">Light</label>
        </div>
        <div class="col-4">
            <input class="form-check-input" type="checkbox" role="switch" id="darkModeSwitch"
                   style="margin-left: unset;">
        </div>
        <div class="col-4">
            <label class="form-check-label" for="darkModeSwitch">Dark</label>
        </div>
    </div>
</div>

<!-- Banner Start -->
<section class="container-fluid">
    <div class="row pt-5">
        <div class="col-lg-3 d-lg-flex h-auto d-none wow fadeInLeft justify-content-lg-center align-items-lg-center" data-wow-delay="0.1s"
             style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
            <img alt="" class="img-fluid cpo-home-image" src="assets/images/home/image_1.webp"/>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-delay="0.3s"
             style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.1s;">
            <div class="card cpo-card d-flex justify-content-center align-items-center h-100 pt-4 pb-4">
                <div class="text-center">
                    <img alt="" class="img-fluid cpo-logo" src="assets/images/book.webp"/>
                    <h1 class="mt-4 cpo-title">COMMON PRAYER ONLINE</h1>
                    <img alt="" class="img-fluid mt-3" src="assets/images/home/pattern.webp"/>
                    <h5 class="mt-3 fst-italic" style="max-width: 500px;margin: auto;line-height: 2rem;">
                        As Written in the 1928 Book of Common Prayer
                    </h5>
                    <img alt="" class="img-fluid cpo-logo mt-3" src="assets/images/logo.webp"/>
                    <p class="mt-4">Presented By the</p>
                    <h5 class="cpo-angelina-title">
                        ANGLICAN PROVINCE OF AMERICA
                    </h5>
                    <p><a href="https://anglicanprovince.org/" class="cpo-angli-url text-dark">www.anglicanprovince.org</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 d-lg-flex h-auto d-none wow fadeInRight justify-content-lg-center align-items-lg-center" data-wow-delay="0.3s"
             style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.1s;">
            <img alt="" class="img-fluid cpo-home-image" src="assets/images/home/image_2.webp"/>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Button Start -->
<section class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="morning-prayer">
                        Morning <br/>
                        Prayer
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="evening-prayer">
                        Evening <br/>
                        Prayer
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="hourly-office">
                        Hourly <br/>
                        office
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="kalendar/<?php echo $currentMonthkalendar; ?>">
                        Ordo <br/>
                        Kalendar
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="church-year">
                        Readings for<br/>
                        Church Year
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="penitential-office">
                        Penitential <br/>
                        Office
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="litany">Litany</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="visitation-of-the-sick">Visitation of the Sick</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="psalter">Psalter</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="collects">Collects</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="prayers-and-thanksgivings">Prayers & Thanksgivings</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="family-prayer">Family Prayer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Button End -->

<!-- Main Button Start -->
<section class="container-fluid">
    <div class="card mt-4 cpo-card-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="daily-office">The Daily and Hourly Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="occasional-office">Occasional Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="church-year">The Church Year</a>
            </div>
        </div>
    </div>
</section>
<!-- Main Button End -->

<!-- Footer Start -->
<section class="cpo-footer-bg">
    <div class="container-fluid pb-4">
        <div class="card cpo-footer-card mt-4 text-center pt-4 pb-3 wow fadeInDown" data-wow-duration="1s"
             data-wow-delay="0.5s">
            <p>
                <?php
                $day=date('Y-m-d');
                getTodayOcasion($day);
                ?>
                (Text color indicates liturgical color for the Day & Season)
            </p>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary cpo-footer-btn d-flex justify-content-center align-items-center"
                           href="morning-prayer-brief">
                            MORNING PRAYER
                        </a>
                        <p class="mt-3 d-lg-none d-block"><i class="fa-solid fa-arrow-left"></i>Today's Readings<i
                                    class="fa-solid fa-arrow-right"></i></p>
                        <p class="mt-3 d-lg-block d-none"><i class="fa-solid fa-arrow-left"></i> Today's Readings <i
                                    class="fa-solid fa-arrow-right"></i></p>
                        <a class="btn btn-primary cpo-footer-btn d-flex justify-content-center align-items-center"
                           href="evening-prayer-brief">
                            EVENING PRAYER
                        </a>
                    </div>
                </div>
            </div>
            <p class="text-dark">
                <?php echo date("l, F j, Y"); ?><!--<br/>
                Time is --><?php /*echo date('h:i A'); */?>
            </p>
        </div>
    </div>
</section>
<!-- Footer End -->

<button onclick="topFunction()" id="cpo-scroll-to-top" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>

<script src="assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/Wow/wow.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
