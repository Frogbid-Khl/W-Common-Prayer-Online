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

    <title>Table of Rubrics - Common Prayer Online</title>
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
                Table of Rubrics
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
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#SERV">Concerning the Service of the Church</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#LECT">The Use of the Psalter and the
                        Lectionary</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#HYMN">Hymns and Anthems</a>
                </div>
            </div>
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
                <br/>
                <h3 class="mb-3 text-center"><b>
                        Miscellaneous Tables<br/>
                        <i>Taken from the Rubrics of the 1928 BCP</i><br/>
                    </b></h3>
                <br/>

            <blockquote>
                <small>
                    <i>
                        The following tables summarize various rubrics in the 1928 BCP concerning
                        portions of the Liturgy for Morning/Evening Prayer and Holy Communion which
                        change for certain days or seasons. This information is spread throughout
                        the BCP; in "The Order for Morning/Evening Prayer", "The Order for Holy Communion",
                        and the "Collects, Epistles and Gospels". This tabular form allows quick access to
                        the information in the rubrics without having to search through multiple
                        sections of the BCP. Items to be used on more than one day have their
                        usage noted in italics.<br/>
                    </i>
                </small>
            </blockquote>
            <br/>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <A href="#SENT"><b>
                                    Days with a Proper Sentence of Scripture<br/>
                                    (for Morning and Evening Prayer)<br/>
                                </b></a><br/>

                            <A href="#BEFV"><b>
                                    Days with a Proper Sentence before the Venite<br/>
                                    (for Morning Prayer)<br/>
                                </b></a><br/>

                            <A href="#SUBV"><b>
                                    Days when the Venite is Omitted or Replaced<br/>
                                    (for Morning Prayer)<br/>
                                </b></a><br/>

                            <A href="#EVE"><b>
                                    Holy Days preceded by an "Eve"<br/>
                                    (for Evening Prayer)<br/>
                                </b></a><br/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <A href="#PREF"><b>
                                    Seasons/Days with a Proper Preface<br/>
                                    (for Holy Communion)<br/>
                                </b></a>
                            <br/>

                            <A href="#COLL"><b>
                                    Collects to be Said on More Than One Day<br/>
                                </b></a>
                            <br/>
                            <br/>

                            <A href="#PROP"><b>
                                    Movable Date Days with Proper Collect, Epistle and Gospel<br/>
                                </b></a>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="SENT">&nbsp;</a>
                <h3><b>Morning &amp; Evening Prayer - Proper Sentences of Scripture</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Advent <i>(seasonal)</i><br/>
                                Christmas Day<br/>
                                Epiphany<br/>
                                Lent <i>(seasonal)</i><br/>
                                Good Friday<br/>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Easter Day<br/>
                                Ascension Day<br/>
                                Whitsunday<br/>
                                Trinity Sunday<br/>
                                Thanksgiving Day <i>(Morning Prayer Only)</i><br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="BEFV">&nbsp;</a>
                <h3><b>Morning Prayer - Days with a Sentence Before the Venite</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Sundays in Advent<br/>
                                Christmas Day <i>daily until Epiphany</i><br/>
                                Epiphany <i>and 7 Days After</i><br/>
                                Monday in Easter Week <i>until Ascension Day</i><br/>
                                Ascension Day <i>until Whitsunday</i><br/>
                                Whitsunday <i>and 6 Days After</i><br/>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Trinity Sunday<br/>
                                Purification<br/>
                                Annunciation<br/>
                                Transfiguration<br/>
                                Other Festivals with a Proper Epistle<br/>
                                &nbsp; and Gospel <i>(e.g. Saints days)</i><br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="SUBV">&nbsp;</a>
                <h3><b>Morning Prayer - Days when the Venite is Omitted or Replaced</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Thanksgiving Day <i>(Replaced)</i><br/>
                                Easter Day <i>(Replaced; may also be used throughout the Octave)</i><br/>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Ash Wednesday <i>(Omitted)</i><br/>
                                Good Friday <i>(Omitted)</i><br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="EVE">&nbsp;</a>
                <h3><b>Evening Prayer - Holy Days preceded by an "Eve" observance</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="text-center">
                            St. Paul<br/>
                            Presentation (Purification)<br/>
                            St. Matthias<br/>
                            Annunciation<br/>
                            St. Mark<br/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            St. Philip &amp; St. James<br/>
                            St. Barnabas<br/>
                            St. John Baptist<br/>
                            St. Peter<br/>
                            St. James<br/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            Transfiguration<br/>
                            St. Bartholomew<br/>
                            St. Michael &amp; All Angels<br/>
                            St. Matthew<br/>
                            St. Luke<br/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-center">
                            St. Simon &amp; St. Jude<br/>
                            All Saints<br/>
                            St. Andrew<br/>
                            St. Thomas<br/>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="PREF">&nbsp;</a>
                <h3><b>Holy Communion - Seasons/Days with a Proper Preface</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Christmas Day - <i>Throughout the Octave</i><br/>
                                Epiphany - <i>Throughout the Octave</i><br/>
                                Easter Day - <i>Throughout the Octave</i><br/>
                                Ascension Day - <i>Throughout the Octave</i><br/>
                                Whitsunday - <i>Throughout the Week</i><br/>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Trinity Sunday<br/>
                                Purification<br/>
                                Annunciation<br/>
                                Transfiguration<br/>
                                All Saints - <i>Throughout the Octave</i><br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="COLL">&nbsp;</a>
                <h3><b>Collects to be said on more than One Day</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Advent - <i>Every day until Christmas</i><br/>
                                Christmas Day - <i>Throughout the Octave</i><br/>
                                Epiphany - <i>Throughout the Octave</i><br/>
                                Ash Wednesday - <i>Throughout Lent until Palm Sunday</i><br/>
                                Palm Sunday - <i>Holy Week through Maundy Thursday</i><br/>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Easter Day - <i>Throughout the Octave</i><br/>
                                Ascension Day - <i>Throughout the Octave</i><br/>
                                Whitsunday - <i>Throughout the Week</i><br/>
                                All Saints - <i>Throughout the Octave</i><br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <br/>
            <hr/>
            <br/>

            <div class="text-center mb-3">
                <a id="PROP">&nbsp;</a>
                <h3><b>Movable Date Days with Propers</b></h3><br/>
            </div>

            <div class="text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Ash Wednesday<br/>
                                Monday Before Easter<br/>
                                Tuesday Before Easter<br/>
                                Wednesday Before Easter<br/>
                                Maundy Thursday<br/>
                                Good Friday<br/>
                                Holy Saturday<br/>
                                Easter Monday<br/>
                                Easter Tuesday<br/>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center">
                            <p>
                                Rogation Monday<br/>
                                Rogation Tuesday<br/>
                                Rogation Wednesday<br/>
                                Whitsun Monday<br/>
                                Whitsun Tuesday<br/>
                                Ember Days<br/>
                                Independence Day<br/>
                                Thanksgiving<br/>
                            </p>
                        </div>
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

