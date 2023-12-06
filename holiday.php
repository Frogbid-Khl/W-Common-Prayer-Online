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

    <title>Holy Day - Common Prayer Online</title>
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

<section class="container cpo-body-padding-top">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h1 class="cpo-content-page-title">
                event for Sundays,
                Holy Days and Saints Days
                for the Liturgical Year
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
                    <a class="btn btn-primary cpo-btn-home w-100" href="#calday">Propers by Calendar Day</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#Comx">Commons for Saints</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#lityear">Propers by Liturgical Day</a>
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
                    <blockquote>

                        These event (Collects, Epistles and Gospels) are taken from
                        the observances listed in the calendar of the <i>1928 Book of Common
                            Prayer (1943 Lectionary)</i>, supplemented with various excerpts from the <i>1963 Book of
                            Lesser Feasts and Fasts</i> and the <i>Anglican Missal</i>.<br/>
                        <br/>

                        Holy Days from the 1928 BCP are shown in bold text. Holy Days in <i>Italic text</i> are taken
                        from "Lesser Feasts and Fasts"
                        or "The Anglican Missal". Liturgical color for the day is shown by the color inside the box next
                        to the
                        name of the observance. The event for each holy day may be
                        accessed by clicking on the name of the day.
                    </blockquote>
                </blockquote>
                <a id="calday"></a>
                <br/>
                <br/>
                <h3 class="text-center"><b>event by Calendar Day: &nbsp;<br/></b></h3>
                <div class="row text-center">
                    <div class="col-lg-4">
                        <small>
                            <a href="#Janx">January</a><br/>
                            <a href="#Febx">February</a><br/>
                            <a href="#Marx">March</a><br/>
                            <a href="#Aprx">April</a><br/>
                        </small>
                    </div>
                    <div class="col-lg-4">
                        <small>
                            <a href="#Mayx">May</a><br/>
                            <a href="#Junx">June</a><br/>
                            <a href="#Julx">July</a><br/>
                            <a href="#Augx">August</a><br/>
                        </small>
                    </div>
                    <div class="col-lg-4">
                        <small>
                            <a href="#Octx">October</a><br/>
                            <a href="#Sepx">September</a><br/>
                            <a href="#Novx">November</a><br/>
                            <a href="#Decx">December </a><br/>
                        </small>
                    </div>
                </div>
                <br/>
                <br/>

                <div class="row">
                    <div class="col-lg-4">
                        <a id="Janx">&nbsp;</a>
                        <h4><b>January</b></h4><br/>
                        <b>01 - <a href="event/The-Circumcision-of-Christ"> Circumcision of Christ </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>06 - <a href="event/Epiphany"> The Epiphany of our Lord </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        14 - <a href="event/St-hilary"> <i> St. Hilary </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        17 - <a href="event/St-Antony-of-Egypt"> <i> St. Antony of Egypt </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        20 - <a href="event/St-Fabian-St-Sebastian"> <i> St. Fabian &amp; St. Sebastian </i></a> <img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        21 - <a href="event/St-Agnes"> <i> St. Agnes </i></a><img src="assets/images/color/redsq.gif"
                                                                                     alt="color square"/><br/>
                        22 - <a href="event/St-Vincent-St-Anastasius"> <i> St. Vincent &amp; St. Anastasius </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        24 - <a href="event/St-Timothy"> <i> St. Timothy </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>25 - <a href="event/The-Conversion-of-St-Paul"> The Conversion of St. Paul </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        26 - <a href="event/St-Polycarp-of-Smyrna"> <i>St. Polycarp of Smyrna </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        27 - <a href="event/St-John-Chrysostom"> <i>St. John Chrysostom </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <br/>

                        <a id="Aprx">&nbsp;</a>
                        <h4><b>April</b></h4><br/>
                        04 - <a href="event/St-Ambrose-of-Milan"> <i> St. Ambrose of Milan </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        11 - <a href="event/St-Leo-the-Great"> <i> St. Leo the Great </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        14 - <a href="event/St-Justin-Martyr"> <i> St. Justin Martyr </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        19 - <a href="event/St-Alphege"> <i> St. Alphege </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        21 - <a href="event/St-Anselm"> <i> St. Anselm </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>25 - <a href="event/St-Mark-the-Evangelist"> St. Mark the Evangelist</a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        30 - <a href="event/St-Catherine-of-Siena"> <i> St. Catherine of Siena </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <br/>
                        <br/>
                        <br/>

                        <a id="Julx">&nbsp;</a>
                        <h4><b>July</b></h4><br/>
                        11 - <a href="event/St-Benedict-of-Nursia"> <i> St. Benedict of Nursia </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        14 - <a href="event/St-Bonaventure"> <i> St. Bonaventure </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        15 - <a href="event/St-Swithun"> <i> St. Swithun </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        19 - <a href="event/St-Vincent-de-Paul"> <i> St. Vincent de Paul </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        22 - <a href="event/St-Mary-Magdalene"> <i> St. Mary Magdalene </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>25 - <a href="event/St-James-the-Apostle"> St. James the Apostle </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        26 - <a href="event/St-Anne-Mother-of-the-BVM"> <i> St. Anne, Mother of the BVM </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        29 - <a href="event/St-Mary-St-Martha"> <i> St. Mary &amp; St. Martha </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        31 - <a href="event/St-Joseph-of-Arimathea"> <i> St. Joseph of Arimathea </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <br/>
                        <br/>

                        <a id="Octx">&nbsp;</a>
                        <h4><b>October</b></h4><br/>
                        04 - <a href="event/St-Francis-of-Assisi"> <i> St. Francis of Assisi </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        06 - <a href="event/William-Tyndale-Priest"> <i> William Tyndale, Priest </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        13 - <a href="event/St-Edward-the-Confessor"> <i> St. Edward the Confessor </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>18 - <a href="event/St-Luke-the-Evangelist"> St. Luke the Evangelist </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        23 - <a href="event/St-James-of-Jerusalem"> <i> St. James of Jerusalem </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <b>28 - <a href="event/St-Simon-St-Jude-Apostles"> St. Simon &amp; St. Jude, Apostles </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                    </div>
                    <div class="col-lg-4">
                        <a id="Febx">&nbsp;</a>
                        <h4><b>February</b></h4><br/>
                        01 - <a href="event/St-Ignatius-of-Antioch"> <i> St. Ignatius of Antioch </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        02 - <a href="event/The-Presentation-of-Christ"> The Presentation of Christ </a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        03 - <a href="event/St-Blasius"> <i> St. Blasius </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        04 - <a href="event/St-Cornelius-the-Centurion"> <i> St. Cornelius the Centurion </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        05 - <a href="event/St-Agatha"> <i> St. Agatha </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        06 - <a href="event/St-Titus"> <i> St. Titus </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        10 - <a href="event/St-Scholastica"> <i> St. Scholastica </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>24 - <a href="event/St-Matthias-the-Apostle"> St. Matthias the Apostle </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>

                        <a id="Mayx">&nbsp;</a>
                        <h4><b>May</b></h4><br/>
                        <b>
                            01 - <a href="event/St-Philip-St-James-Apostles"> St. Philip &amp; St. James, Apostles </a><img
                                    src="assets/images/color/redsq.gif" alt="color square"/><br/>
                            02 - <a href="event/St-Athanasius"> <i> St. Athanasius </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            09 - <a href="event/St-Gregory-of-Nazianzus"> <i> St. Gregory of Nazianzus </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            11 - <a href="event/St-Cyril-St-Methodius"> <i> St. Cyril &amp; St. Methodius </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            19 - <a href="event/St-Dunstan-of-Canterbury"> <i> St. Dunstan of Canterbury </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            20 - <a href="event/St-Alcuin"> <i> St. Alcuin </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            24 - <a href="event/St-Vincent-of-Lerins"> <i> St. Vincent of Lerins </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            26 - <a href="event/St-Augustine-of-Canterbury"> <i> St. Augustine of Canterbury </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            27 - <a href="event/St-Bede"> <i> St. Bede </i></a><img src="assets/images/color/whtsq.gif"
                                                                                    alt="color square"/><br/>
                            <br/>

                        <a id="Augx">&nbsp;</a>
                        <h4><b>August</b></h4><br/>
                            04 - <a href="event/St-Dominic"> <i> St-Dominic </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            <b>06 - <a href="event/The-Transfiguration-of-our-Lord"> The Transfiguration of our Lord </a></b><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            07 - <a href="event/Holy-Name-of-Jesus"> <i> Holy Name of Jesus </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            10 - <a href="event/St-laurence"> <i> St-laurence </i></a><img
                                    src="assets/images/color/redsq.gif" alt="color square"/><br/>
                            15 - <a href="event/St-mary-the-virgin-assumption"> <i> St-mary-the-virgin-assumption</i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            20 - <a href="event/bernard"> <i> St-bernard </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            <b>24 - <a href="event/St-bartholomew-the-apostle"> St-bartholomew-the-apostle </a></b><img
                                    src="assets/images/color/redsq.gif" alt="color square"/><br/>
                            25 - <a href="event/St-louis-king-of-france"> <i> St-louis-king-of-france </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            28 - <a href="event/St-augustine-of-hippo"> <i> St-augustine-of-hippo </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            31 - <a href="event/St-aidan"> <i> St-aidan </i></a><img src="assets/images/color/whtsq.gif"
                                                                                     alt="color square"/><br/>
                            <br/>

                        <a id="Novx">&nbsp;</a>
                        <h4><b>November</b></h4><br/>
                            <b>01 - <a href="event/All-Saints-Day"> All Saints Day </a></b><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            02 - <a href="event/All-Soul-Day"> <i> All Souls Day </i></a><img
                                    src="assets/images/color/blksq.gif" alt="color square"/><br/>
                            11 - <a href="event/St-Martin-of-Tours"> <i> St. Martin of Tours </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            16 - <a href="event/St-Margaret-of-Scotland"> <i> St. Margaret of Scotland </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            17 - <a href="event/St-Hugh-of-Lincoln"> <i> St. Hugh of Lincoln </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            19 - <a href="event/St-Elizabeth-of-Hungary"> <i> St. Elizabeth of Hungary </i></a><img
                                    src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                            23 - <a href="event/St-Clement-of-Rome"> <i> St. Clement of Rome </i></a><img
                                    src="assets/images/color/redsq.gif" alt="color square"/><br/>
                            <b>30 - <a href="event/St-Andrew-the-Apostle"> St. Andrew the Apostle </a></b><img
                                    src="assets/images/color/redsq.gif" alt="color square"/><br/>

                        </b>
                    </div>
                    <div class="col-lg-4">
                        <a id="Marx">&nbsp;</a>
                        <h4><b>March</b></h4><br/>
                        01 - <a href="event/St-David-of-Wales"> <i> St. David of Wales </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        07 - <a href="event/St-Perpetua"> <i> St. Perpetua </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        09 - <a href="event/Gregory-of-Nyssa"> <i> Gregory of Nyssa </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        12 - <a href="event/St-Gregory-the-Great"> <i> St. Gregory the Great </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        17 - <a href="event/St-Patrick"> <i> St. Patrick </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        18 - <a href="event/St-Cyril"> <i> St. Cyril </i></a><img src="assets/images/color/whtsq.gif"
                                                                                  alt="color square"/><br/>
                        19 - <a href="event/St-Joseph"> <i> St. Joseph </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        20 - <a href="event/St-Cuthbert"> <i> St. Cuthbert </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        22 - <a href="event/James-DeKoven"> <i> James DeKoven </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>25 - <a href="event/Annunciation-of-the-BVM"> Annunciation of the BVM </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <br/>
                        <br/>

                        <a id="Junx">&nbsp;</a>
                        <h4><b>June</b></h4><br/>
                        09 - <a href="event/St-Columba"> <i> St. Columba </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        10 - <a href="event/First-Book-of-Common-Prayer"> <i> First Book of Common Prayer </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>11 - <a href="event/St-Barnabas-the-Apostle"> St. Barnabas the Apostle </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        14 - <a href="event/St-Basil"> <i> St. Basil </i></a><img src="assets/images/color/whtsq.gif"
                                                                                  alt="color square"/><br/>
                        22 - <a href="event/St-Alban-Protomartyr-of-England"> <i> St. Alban, Protomartyr of England </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <b>24 - <a href="event/St-John-the-Baptist"> St. John the Baptist </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        28 - <a href="event/St-Irenaus-of-Lyons"> <i> St. Irenaus of Lyons </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <b>29 - <a href="event/St-Peter-the-Apostle"> St. Peter the Apostle </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <br/>
                        <br/>

                        <a id="Sepx">&nbsp;</a>
                        <h4><b>September</b></h4><br/>
                        13 - <a href="event/cyprian.cfm"> <i> St. Cyprian of Carthage </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        14 - <a href="event/holy_crs.cfm"> <i> Exaltation of the Holy Cross </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        19 - <a href="event/theodore.cfm"> <i> St. Theodore </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>21 - <a href="event/s_matthw.cfm"> St. Matthew, Apostle &amp; Evangelist </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <b>29 - <a href="event/s_micha.cfm"> St. Michael &amp; All Angels </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        30 - <a href="event/jerome.cfm"> <i> St. Jerome the Priest </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>

                        <a id="Decx">&nbsp;</a>
                        <h4><b>December</b></h4><br/>
                        04 - <a href="event/St-Clement-of-Alexandria"> <i> St. Clement of Alexandria </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        06 - <a href="event/St-Nicholas"> <i> St. Nicholas </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        08 - <a href="event/Conception-of-the-BVM"> <i> Conception of the BVM </i></a><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>21 - <a href="event/St-Thomas-the-Apostle"> St. Thomas the Apostle </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <b>26 - <a href="event/St-Stephen-Deacon-Martyr"> St. Stephen, Deacon &amp; Martyr </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        <b>27 - <a href="event/St-John-the-Evangelist"> St. John the Evangelist </a></b><img
                                src="assets/images/color/whtsq.gif" alt="color square"/><br/>
                        <b>28 - <a href="event/The-Holy-Innocents"> The Holy Innocents </a></b><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>
                        29 - <a href="event/St-Thomas-a-Becket"> <i> St. Thomas a Becket </i></a><img
                                src="assets/images/color/redsq.gif" alt="color square"/><br/>

                    </div>
                </div>

                <div class="text-center">
                    <br/>
                    <br/>
                    <br/>
                    <a id="Comx">&nbsp;</a>
                    <h3><b>Commons for Saints</b></h3><br/>
                    &nbsp; &nbsp; <a href="event/Common-of-Saints"> [General] Common of Saints </a><br/>
                    &nbsp; &nbsp; <a href="event/Common-for-a-Deaconess"> Common for a Deaconess </a><br/>
                    &nbsp; &nbsp; <a href="event/Common-for-a-Martyr"> Common for a Martyr </a><br/>
                    &nbsp; &nbsp; <a href="event/Common-for-a-Missionary"> Common for a Missionary </a><br/>
                    &nbsp; &nbsp; <a href="event/Common-for-a-Monastic"> Common for a Monastic </a><br/>
                    &nbsp; &nbsp; <a href="event/Common-for-a-Theologian"> Common for a Theologian </a><br/>
                </div>
                <br/>
                <br/>
                <a id="lityear">&nbsp;</a>
                <h3 class="text-center">
                    <small><b>
                            The Liturgical Year<br/>
                        </b></small>
                </h3>
                <br/>


                <div class="row">
                    <div class="col-lg-4">
                        <b>
                            <a href="event/1st-Sunday-in-Advent"> 1st Sunday in Advent </a><br/>
                            <a href="event/2nd-Sunday-in-Advent"> 2nd Sunday in Advent </a><br/>
                            <a href="event/3rd-Sunday-in-Advent"> 3rd Sunday in Advent </a><br/>
                            <a href="event/4th-Sunday-in-Advent"> 4th Sunday in Advent </a><br/>
                            <a href="event/Christmas-Day"> Christmas Day </a><br/>
                            <a href="event/1st-Sunday-after-Christmas"> 1st Sunday after Christmas </a><br/>
                            <a href="event/2nd-Sunday-after-Christmas"> 2nd Sunday after Christmas </a><br/>
                            <a href="event/Epiphany"> Epiphany </a><br/>
                            <a href="event/1st-Sunday-after-Epiphany"> 1st Sunday after Epiphany </a><br/>
                            <a href="event/2nd-Sunday-after-Epiphany"> 2nd Sunday after Epiphany </a><br/>
                            <a href="event/3rd-Sunday-after-Epiphany"> 3rd Sunday after Epiphany </a><br/>
                            <a href="event/4th-Sunday-after-Epiphany"> 4th Sunday after Epiphany </a><br/>
                            <a href="event/5th-Sunday-after-Epiphany"> 5th Sunday after Epiphany </a><br/>
                            <a href="event/6th-Sunday-after-Epiphany"> 6th Sunday after Epiphany </a><br/>
                            <a href="event/Septuagesima-Sunday"> Septuagesima Sunday </a><br/>
                            <a href="event/Sexagesima-Sunday"> Sexagesima Sunday </a><br/>
                            <a href="event/Quinquagesima-Sunday"> Quinquagesima Sunday </a><br/>
                            <a href="event/Ash-Wednesday"> Ash Wednesday </a><br/>
                            <a href="event/1st-Sunday-in-Lent"> 1st Sunday in Lent </a><br/>
                            <a href="event/2nd-Sunday-in-Lent"> 2nd Sunday in Lent </a><br/>
                            <a href="event/3rd-Sunday-in-Lent"> 3rd Sunday in Lent </a><br/>
                            <a href="event/4th-Sunday-in-Lent"> 4th Sunday in Lent </a><br/>
                            <a href="event/Passion-Sunday"> Passion Sunday </a><br/>
                            <a href="event/Palm-Sunday"> Palm Sunday </a><br/>
                            <a href="event/Monday-before-Easter"> Monday before Easter </a><br/>
                            <a href="event/Tuesday-before-Easter"> Tuesday before Easter </a><br/>
                            <a href="event/Wednesday-before-Easter"> Wednesday before Easter </a><br/>
                            <a href="event/Maundy-Thursday"> Maundy Thursday </a><br/>
                            <a href="event/Good-Friday"> Good Friday </a><br/>
                            <a href="event/Saturday-before-Easter"> Saturday before Easter </a><br/>
                        </b>
                    </div>
                    <div class="col-lg-4">
                        <b>
                            <a href="event/Easter-Sunday"> Easter Sunday </a><br/>
                            <a href="event/Easter-Monday"> Easter Monday </a><br/>
                            <a href="event/Easter-Tuesday"> Easter Tuesday </a><br/>
                            <a href="event/1st-Sunday-after-Easter"> 1st Sunday after Easter </a><br/>
                            <a href="event/2nd-Sunday-after-Easter"> 2nd Sunday after Easter </a><br/>
                            <a href="event/3rd-Sunday-after-Easter"> 3rd Sunday after Easter </a><br/>
                            <a href="event/4th-Sunday-after-Easter"> 4th Sunday after Easter </a><br/>
                            <a href="event/Rogation-Sunday"> Rogation Sunday </a><br/>
                            <a href="event/Ascension-Day"> Ascension Day </a><br/>
                            <a href="event/Sunday-after-Ascension"> Sunday after Ascension </a><br/>
                            <a href="event/Pentecost"> Pentecost </a><br/>
                            <a href="event/Whitsun-Monday"> Whitsun Monday </a><br/>
                            <a href="event/Whitsun-Tuesday"> Whitsun Tuesday </a><br/>
                            <a href="event/Trinity-Sunday"> Trinity Sunday </a><br/>
                            <a href="event/1st-Sunday-after-Trinity"> 1st Sunday after Trinity </a><br/>
                            <a href="event/2nd-Sunday-after-Trinity"> 2nd Sunday after Trinity </a><br/>
                            <a href="event/3rd-Sunday-after-Trinity"> 3rd Sunday after Trinity </a><br/>
                            <a href="event/4th-Sunday-after-Trinity"> 4th Sunday after Trinity </a><br/>
                            <a href="event/5th-Sunday-after-Trinity"> 5th Sunday after Trinity </a><br/>
                            <a href="event/6th-Sunday-after-Trinity"> 6th Sunday after Trinity </a><br/>
                            <a href="event/7th-Sunday-after-Trinity"> 7th Sunday after Trinity </a><br/>
                            <a href="event/8th-Sunday-after-Trinity"> 8th Sunday after Trinity </a><br/>
                            <a href="event/9th-Sunday-after-Trinity"> 9th Sunday after Trinity </a><br/>
                            <a href="event/10th-Sunday-after-Trinity"> 10th Sunday after Trinity </a><br/>
                            <a href="event/11th-Sunday-after-Trinity"> 11th Sunday after Trinity </a><br/>
                            <a href="event/12th-Sunday-after-Trinity"> 12th Sunday after Trinity </a><br/>
                        </b>
                    </div>
                    <div class="col-lg-4">
                        <b>
                            <a href="event/13th-Sunday-after-Trinity"> 13th Sunday after Trinity </a><br/>
                            <a href="event/14th-Sunday-after-Trinity"> 14th Sunday after Trinity </a><br/>
                            <a href="event/15th-Sunday-after-Trinity"> 15th Sunday after Trinity </a><br/>
                            <a href="event/16th-Sunday-after-Trinity"> 16th Sunday after Trinity </a><br/>
                            <a href="event/17th-Sunday-after-Trinity"> 17th Sunday after Trinity </a><br/>
                            <a href="event/18th-Sunday-after-Trinity"> 18th Sunday after Trinity </a><br/>
                            <a href="event/19th-Sunday-after-Trinity"> 19th Sunday after Trinity </a><br/>
                            <a href="event/20th-Sunday-after-Trinity"> 20th Sunday after Trinity </a><br/>
                            <a href="event/21st-Sunday-after-Trinity"> 21st Sunday after Trinity </a><br/>
                            <a href="event/22nd-Sunday-after-Trinity"> 22nd Sunday after Trinity </a><br/>
                            <a href="event/23rd-Sunday-after-Trinity"> 23rd Sunday after Trinity </a><br/>
                            <a href="event/24th-Sunday-after-Trinity"> 24th Sunday after Trinity </a><br/>
                            <a href="event/Sunday-Next-before-Advent"> Sunday Next before Advent </a><br/>
                            <br/>
                            <a href="event/Corpus-Christi"> <i> Corpus Christi </i></a><br/>
                            <a href="event/Christ-the-King"> <i> Christ the King </i></a><br/>
                            <a href="event/Ember-Days"> Ember Days </a><br/>
                            <a href="event/Independence-Day"> Independence Day </a><br/>
                            <a href="event/Thanksgiving-Day"> Thanksgiving Day </a><br/>
                        </b>
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
