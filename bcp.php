<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
$db_handle = new DBController();

$currentMonthKallender = date('Y-m');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon">

    <!-- Developer: Monoget Saha (www.monoget.com.bd) -->
    <!-- Company: Frogbid (www.frogbid.com) -->

    <title>1928 BCP Calendar (Text Format) - Common Prayer Online</title>
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
                           href="kallender/<?php echo $currentMonthKallender; ?>">Kalendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button End -->
</section>

<section class="container cpo-body-padding-top">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h1 class="cpo-content-page-title">1928 BCP of Fixed Holy/Saints Days</h1>
            <p>As Written in the 1928 Book of Common Prayer</p>
        </div>
        <div class="col-lg-12 text-center mt-3">
            <img alt="" class="img-fluid cpo-logo" src="assets/images/book.webp"/>
            <p class="mt-4">Presented By the</p>
            <h5 class="cpo-angelina-title">
                ANGLICAN PROVINCE OF AMERICA
            </h5>
            <p><a href="https://anglicanprovince.org/" class="cpo-angli-url">www.anglicanprovince.org</a></p>
        </div>
        <div class="col-lg-12 mt-3">
            <div>
                <span>Aa</span>
                <input type="range" id="fontSizeRange" class="cpo-range" min="10" max="40" step="1" value="16"/>
                <span>Aa</span>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <div id="text-container">

                <div class="text-center">
                    <small><b>1928 BCP of Fixed Holy/Saints Days</b></small><br/>
                    (color of the box after each entry is the liturgical color of the day)<br/>
                </div>
                <br/>

                <div class="row">
                    <div class="col-lg-6">
                        <h5><b><u>January</u></b></h5><br/>
                        01 - Circumcision of Christ&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                              alt="color square"/><br/>
                        06 - The Epiphany of our Lord&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                                alt="color square"/><br/>
                        25 - The Conversion of St. Paul&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                                  alt="color square"/><br/>
                        <br/>

                        <h5><b><u>February</u></b></h5><br/>
                        02 - The Presentation of Christ&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                                  alt="color square"/><br/>
                        24 - St. Matthias the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                alt="color square"/><br/>
                        <br/>

                        <h5><b><u>March</u></b></h5><br/>
                        25 - Annunciation of the BVM&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                               alt="color square"/><br/>
                        <br/>

                        <h5><b><u>April</u></b></h5><br/>
                        25 - St. Mark the Evangelist&nbsp;<img src="assets/images/color/redsq1.gif"
                                                               alt="color square"/><br/>
                        <br/>

                        <h5><b><u>May</u></b></h5><br/>
                        01 - St. Philip &amp; St. James, Apostles&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                            alt="color square"/><br/>
                        <br/>

                        <h5><b><u>June</u></b></h5><br/>
                        11 - St. Barnabas the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                alt="color square"/><br/>
                        24 - St. John the Baptist&nbsp;<img src="assets/images/color/redsq1.gif"
                                                            alt="color square"/><br/>
                        29 - St. Peter the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                             alt="color square"/><br/>
                    </div>
                    <div class="col-lg-6">
                        <h5><b><u>July</u></b></h5><br/>
                        04 - Independence Day&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                        alt="color square"/><br/>
                        25 - St. James the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                             alt="color square"/><br/>
                        <br/>

                        <h5><b><u>August</u></b></h5><br/>
                        06 - The Transfiguration of our Lord&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                                       alt="color square"/><br/>
                        24 - St. Bartholomew the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                   alt="color square"/><br/>
                        <br/>

                        <h5><b><u>September</u></b></h5><br/>
                        21 - St. Matthew, Apostle &amp; Evangelist&nbsp;<img
                                src="assets/images/color/redsq1.gif" alt="color square"/><br/>
                        29 - St. Michael &amp; All Angels&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                    alt="color square"/><br/>
                        <br/>

                        <h5><b><u>October</u></b></h5><br/>
                        18 - St. Luke the Evangelist&nbsp;<img src="assets/images/color/redsq1.gif"
                                                               alt="color square"/><br/>
                        28 - St. Simon &amp; St. Jude, Apostles&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                          alt="color square"/><br/>
                        <br/>

                        <h5><b><u>November</u></b></h5><br/>
                        01 - All Saints Day&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                      alt="color square"/><br/>
                        30 - St. Andrew the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                              alt="color square"/><br/>
                        (Thanksgiving is celebrated the 4th Thursday in November)&nbsp;<img
                                src="assets/images/color/whtsq1.gif" alt="color square"/><br/>
                        <br/>

                        <h5><b><u>December</u></b></h5><br/>
                        21 - St. Thomas the Apostle&nbsp;<img src="assets/images/color/redsq1.gif"
                                                              alt="color square"/><br/>
                        25 - Christmas Day&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                     alt="color square"/><br/>
                        26 - St. Stephen, Deacon &amp; Martyr&nbsp;<img src="assets/images/color/redsq1.gif"
                                                                        alt="color square"/><br/>
                        27 - St. John, Apostle &amp; Evangelist&nbsp;<img src="assets/images/color/whtsq1.gif"
                                                                          alt="color square"/><br/>
                        28 - The Holy Innocents&nbsp;<img src="assets/images/color/redsq1.gif"
                                                          alt="color square"/><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Button Start -->
<section class="container-fluid">
    <div class="card mt-4 cpo-card-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="home">Home</a>
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
                $day = date('Y-m-d');
                getOccasionName($day);
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
