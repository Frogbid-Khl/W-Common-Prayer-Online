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

    <title>Ordo Kalendar and The Church Year - Common Prayer Online</title>
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
<section class="fixed-top cpo-bg">
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

    <!-- Mobile Menu Button -->
    <div id="mobile-menu-button" class="d-lg-none pt-5">
        <div class="cpo-dynamic-bg">
            <div class="container-fluid pt-3 pb-2">
                <div class="row">
                    <div class="col-6">
                        <h5>
                            Menu
                        </h5>
                    </div>
                    <div class="col-6 text-end">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button Start -->
    <section class="container-fluid" id="menu-items">
        <div class="row pt-5">
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="home">Home</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="daily-office">
                            Daily <br/>
                            Offices
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="morning-prayer">
                            Morning <br/>
                            Prayer
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
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
                            Offices
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
                           href="visitation-of-the-sick">
                            Visitation <br/>
                            of Sick
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="family-prayer">
                            Family <br/>
                            Prayer
                        </a>
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
                           href="prayers-and-thanksgivings">Prayers</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="litany">Litany</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="kalendar/<?php echo $currentMonthkalendar; ?>">Kalendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button End -->
</section>

<!-- Church Year Start -->
<section class="container-fluid cpo-body-padding-top">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h1>Ordo Kalendar and The Church Year</h1>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <a class="text-decoration-none cpo-text" href="catholic/<?php echo $currentMonthkalendar; ?>">
                <h5>
                    2023 Monthly Kalendar
                </h5>
                <p>
                    w/Morning & Evening<br/>
                    Readings/Propers Links
                </p>
                <i class="fa-regular fa-calendar-days fa-6x mt-3"></i>
            </a>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <a class="text-decoration-none cpo-text" href="sunday/<?php echo date('Y'); ?>">
                <p>
                    2023<br/>
                    Sunday Kalendar
                </p>

                <i class="fa-regular fa-calendar-days fa-6x mt-3"></i>
            </a>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <a class="text-decoration-none cpo-text" href="kalendar/<?php echo $currentMonthkalendar; ?>">
                <p>
                    2023<br/>
                    Monthly Kalendar
                </p>
                <i class="fa-regular fa-calendar-days fa-6x mt-3"></i>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 mt-3 text-center">
            <a class="text-decoration-none cpo-text" href="bcp">
                <p>
                    1928 BCP<br/>
                    Yearly Kalendar<br/>
                    (Text Format)
                </p>

                <i class="fa-regular fa-calendar-days fa-6x mt-3"></i>
            </a>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <a class="text-decoration-none cpo-text" href="anglo">
                <p>
                    Anglo-Catholic<br/>
                    Yearly Kalendar<br/>
                    (Text Format)
                </p>

                <i class="fa-regular fa-calendar-days fa-6x mt-3"></i>
            </a>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <a class="text-decoration-none cpo-text" href="coming-soon">
                <p>
                    iCal Format<br/>
                    Liturgical Kalendar<br/>
                    Downloads
                </p>

                <i class="fa-regular fa-calendar-days fa-6x mt-3"></i>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 mt-3 text-center">
            <h5>
                Links to Propers by
            </h5>
            <a class="text-decoration-none cpo-text" href="holiday">
                <p>
                    Kalendar Year and<br/>
                    Liturgical Year
                </p>
            </a>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <h5>
                Links to Readings for<br/>
                the Liturgical Year
            </h5>

            <p>
                <a class="text-decoration-none cpo-text" href="lesmor">Morning Prayer</a> <a
                        class="text-decoration-none cpo-text" href="leseve">Evening Prayer</a>
            </p>
        </div>
        <div class="col-lg-4 mt-3 text-center">
            <h5>
                Text Files of<br/>
                Daily Reading Lists
            </h5>
            <p>
                <a class="text-decoration-none cpo-text" href="coming-soon">Morning .DOC Morning .PDF</a><br/>
                <a class="text-decoration-none cpo-text" href="coming-soon">Evening .DOC Evening .PDF</a>
            </p>
        </div>
    </div>
</section>
<!-- Church Year End -->

<!-- Main Button Start -->
<section class="container-fluid">
    <div class="card mt-4 cpo-card-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="home">Home</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="daily-office">The Daily and Hourly Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="occasional-office">Occasional Offices</a>
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
                $day = date('Y-m-d');
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
