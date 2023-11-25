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
    <title>Concerning the Services of the Church - Common Prayer Online</title>
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
                           href="kallender/<?php echo $currentMonthKallender; ?>">
                            Ordo <br/>
                            Kalender
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#">
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
                FAMILY PRAYER AND
                ADDITIONAL PRAYERS
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
                    <a class="btn btn-primary cpo-btn-home w-100" href="#LECT">The Use of the Psalter and the Lectionary</a>
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
                <blockquote>

                    <a id="SERV">&nbsp;</a><br/>
                    <div class="text-center"><small><b><i>CONCERNING THE SERVICE OF THE CHURCH</i></b></small></div>

                    THE Order for Holy Communion, the Order for Morning Prayer, the Order for Evening
                    Prayer, and the Litany, as set forth in this Book, are the regular Services
                    appointed for Public Worship in this Church, and shall be used accordingly;
                    <i>Provided,</i> that in addition to these Services, the Minister, in his discretion,
                    subject to the direction of the Ordinary, may use other devotions taken from
                    this Book or set forth by lawful authority within this Church, or from Holy
                    Scripture; and <i>Provided further,</i> that, subject to the direction of the
                    Ordinary, in Mission Churches or Chapels, and also, when expressly authorized
                    by the Ordinary, in Cathedral or Parish Churches or other places, such other
                    devotions as aforesaid may be used, when the edification of the Congregation
                    so requires, in place of the Order for Morning Prayer, or the Order for
                    Evening Prayer.<br/>
                    <br/>

                    For Days of Fasting and Thanksgiving appointed by the Civil or Ecclesiastical
                    Authority, and for other special occasions, for which no Service or Prayer
                    hath been provided in this Book, the Bishop may set forth such form or forms
                    as he shall see fit, in which case none other shall be used.<br/>
                    <br/>

                    NOTE, That in the directions for the several Services in this Book, it is
                    not intended, by the use of any particular word denoting vocal utterance, to
                    prescribe the tone or manner of their recitation.<br/>
                    <br/>

                    <a id="LECT">&nbsp;</a><br/>
                    <div class="text-center"><small><b><i>THE USE OF THE PSALTER AND THE LECTIONARY.</i></b></small></div>

                    THE Old Testament is appointed for the First Lessons, and the New Testament
                    for the Second Lessons, at Morning and Evening Prayer throughout the year.<br/>
                    <br/>

                    The Psalms and Lessons to be read every day are to be found in the following
                    Table of Psalms and Lessons for the Christian Year; except only those for the
                    Immovable Holy Days, the Proper Psalms and Lessons for all which days are
                    to be found in the Table for the Fixed Holy Days.<br/>
                    <br/>

                    On the following days, and their eves, if any, the Proper Psalms appointed
                    in the Tables shall be used: Christmas, Epiphany, Purification, Ash Wednesday,
                    Annunciation, Good Friday, Easter Day, Ascension Day, Whitsunday, Trinity
                    Sunday, Transfiguration, All Saints, and Thanksgiving Day.<br/>
                    <br/>

                    But NOTE, That on other days, the Minister shall use the Psalms appointed in
                    the Tables or at his discretion he may use one or more of those assigned in
                    the Psalter to the day of the month, or from the Table of Selections of
                    Psalms. And NOTE further, That in the case of a Psalm which is divided into
                    sections, the Minister may use a section or sections of such Psalm.<br/>
                    <br/>

                    The Psalms and Lessons printed on the same line are intended to be used
                    together. At any service for which more than one such set of Psalms and
                    Lessons are appointed, the choice thereof is at the discretion of the
                    Minister.<br/>
                    <br/>

                    Any set of Psalms and Lessons appointed for the evening of any day may be
                    read at the morning service, and any set of morning Psalms and Lessons may
                    be read in the evening.<br/>
                    <br/>

                    <a id="STAR">&nbsp;</a><br/>
                    <b>
                        The starred Lessons provided for Sundays are particularly appropriate for
                        use when Morning Prayer with one Lesson precedes the Holy Communion.<br/>
                    </b>
                    <br/>

                    Upon any Sunday or Holy Day, the Minister may read the Epistle or the
                    Gospel of the Day in place of the Second Lesson at Morning or Evening Prayer.<br/>
                    <br/>

                    Upon any weekday, other than a Holy Day, the Psalms and Lessons appointed
                    for any day in the same week may be read instead of those appointed for
                    the Day.<br/>
                    <br/>

                    When an Octave is observed for any Holy Day, the Psalms and Lessons for
                    the Day may be used upon the Sunday within the Octave.<br/>
                    <br/>

                    Upon special occasions the Minister may select such Psalms and Lessons as
                    he may think suitable.<br/>
                    <br/>

                    Any Lesson may be lengthened or shortened at the Minister's discretion.<br/>
                    <br/>


                    <a id="HYMN">&nbsp;</a><br/>
                    <div class="text-center"><small><b><i>HYMNS AND ANTHEMS.</i></b></small></div>

                    HYMNS set forth and allowed by the authority of this Church, and Anthems in
                    the words of Holy Scripture or of the Book of Common Prayer, may be sung
                    before and after any Office in this Book, and also before and after Sermons.
                    <br/>
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
