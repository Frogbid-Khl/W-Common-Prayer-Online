<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
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

    <title>Information About Sundays Before Advent - Common Prayer Online</title>
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
</section>


<section class="container cpo-body-padding-top">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h1 class="cpo-content-page-title">
                Information About Sundays Before Advent
            </h1>
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
                <blockquote>
                    The Table of "Psalms and Lessons for the Christian Year" which lists the
                    readings to be used at Morning &amp; Evening Prayer utilizes a calendar
                    which is not quite the same as that used for the determining the Propers
                    (Collect, Epistle &amp; Gospel) to be read at Holy Communion.  The difference
                    centers around the variation in the number of Sundays after Epiphany and
                    Sundays after Trinity, which results from the date for Easter not being
                    the same every year.<br/>
                    <br/>
                    Because Easter can fall anywhere within a span of five weeks (March 22nd through
                    April 25th) the number of Sundays after Epiphany varies from 1&nbsp;to&nbsp;5,
                    and similarly the number of Sundays after Trinity varies from 22&nbsp;to&nbsp;27.
                    The list of Collects, Epistles and Gospels handles this by including
                    Propers for 6 Sundays after Epiphany, and 25 Sundays after Trinity.  Note
                    that there are only 24 "numbered" sets of Sunday Propers after Trinity; the
                    25th set is that for Sunday Next Before Advent.  Since there can be up to
                    27 Sundays after Trinity, this leaves a potential "gap" of two weeks.<br/>
                    <br/>
                    The Prayer Book solves this problem by directing that in years where there are
                    26 Sundays after Trinity, the Propers for the 6th Sunday after Epiphany are
                    used for the "extra" (25th) Sunday.  When there are 27 Sundays, the Propers
                    for the Fifth Sunday after Epiphany are used for the 25th Sunday, and the
                    Sixth Sunday after Epiphany for the 26th Sunday.  The Sunday Next Before
                    Advent always retains its position as the "last" Sunday after Trinity,
                    and immediately preceeding the First Sunday in Advent.  (ref. BCP pp.224)
                    This is made possible by the fact that as the number of Sundays after Trinity
                    increases, the number of Sundays after Epiphany decreases, leaving "unused"
                    sets of propers.<br/>
                    <br/>
                    For Morning and Evening Prayer, this variance in the church year is
                    handled differently.  There are enough sets of Psalms and Lessons to
                    make it unnecessary to "borrow" from the period after Epiphany.  As with
                    the Propers, the Psalms/Lessons for the weeks after Epiphany are used as
                    needed during those weeks.  For the weeks after Trinity, a different
                    method is utilized.  There are sets of Psalms/Lessons for 24 numbered
                    weeks after Trinity, and 3 weeks before Advent.  This provides for a full
                    27 weeks after Trinity - the maximum possible.  The Psalms/Lessons for
                    the weeks after Trinity after are used "forward" until three weeks before Advent,
                    at which point the Psalms/Lessons for the 3 weeks before Advent are used.<br/>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <b>Table illustrating usage of Sundays after Trinity/Sundays before Advent</b><br/>
                </div>

                <div class="row">
                    <div class="col-12">
                        <br/>
                        Easter Day - March 23 <i>(27 Sundays after Trinity)</i>
                    </div>
                    <div class="col-lg-4">
                        <u>Calendar Day</u><br/>
                        November 2<br/>
                        November 9<br/>
                        November 16<br/>
                        November 23<br/>
                        November 30<br/>
                    </div>
                    <div class="col-lg-4">
                        <u>Psalms/Lessons</u><br/>
                        24th Sunday After Trinity<br/>
                        Third Sunday Before Advent<br/>
                        Second Sunday Before Advent<br/>
                        Sunday Next Before Advent<br/>
                        First Sunday in Advent<br/>
                    </div>
                    <div class="col-lg-4">
                        <u>Propers</u><br/>
                        24th Sunday After Trinity<br/>
                        Fifth Sunday After Epiphany<br/>
                        Sixth Sunday After Epiphany<br/>
                        Sunday Next Before Advent<br/>
                        First Sunday in Advent<br/>
                    </div>
                    <div class="col-12">
                        <br/>
                        Easter Day - March 28 <i>(26 Sundays after Trinity)</i>
                    </div>
                    <div class="col-lg-4">
                        <u>Calendar Day</u><br/>
                        October  30<br/>
                        November 6<br/>
                        November 13<br/>
                        November 20<br/>
                        November 27<br/>
                    </div>
                    <div class="col-lg-4">
                        <u>Psalms/Lessons</u><br/>
                        23rd Sunday After Trinity<br/>
                        Third Sunday Before Advent<br/>
                        Second Sunday Before Advent<br/>
                        Sunday Next Before Advent<br/>
                        First Sunday in Advent<br/>
                    </div>
                    <div class="col-lg-4">
                        <u>Propers</u><br/>
                        23rd Sunday After Trinity<br/>
                        24th Sunday After Trinity<br/>
                        Sixth Sunday After Epiphany<br/>
                        Sunday Next Before Advent<br/>
                        First Sunday in Advent<br/>
                    </div>
                    <div class="col-12">
                        <br/>
                        Easter Day - April 14 <i>(24 Sundays after Trinity)</i>
                    </div>
                    <div class="col-lg-4">
                        <u>Calendar Day</u><br/>
                        November  3<br/>
                        November 10<br/>
                        November 17<br/>
                        November 24<br/>
                        December 1<br/>
                    </div>
                    <div class="col-lg-4">
                        <u>Psalms/Lessons</u><br/>
                        21st Sunday After Trinity<br/>
                        Third Sunday Before Advent<br/>
                        Second Sunday Before Advent<br/>
                        Sunday Next Before Advent<br/>
                        First Sunday in Advent<br/>
                    </div>
                    <div class="col-lg-4">
                        <u>Propers</u><br/>
                        21st Sunday After Trinity<br/>
                        22nd Sunday After Trinity<br/>
                        23rd Sunday After Epiphany<br/>
                        Sunday Next Before Advent<br/>
                        First Sunday in Advent<br/>
                    </div>
                </div>
                <br/>
                <blockquote>
                    There is an alternate method arrangement of the Psalms/Lessons which
                    is used in some places.  The Psalms/Lessons for the weeks after Trinity
                    are used until they run out, at which point the Psalms/Lessons for the
                    weeks before Advent are used, working backwards from the Sunday Next before
                    Advent to the Third Sunday before Advent, as needed.  This means that in
                    some years no "Sundays Before Advent" are used; in other years, some/all of the
                    "Sundays before Advent" are used.  This website does not display the
                    Psalms/Lessons in this method; the arrangement illustrated in the table above is used.<br/>
                </blockquote>
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
