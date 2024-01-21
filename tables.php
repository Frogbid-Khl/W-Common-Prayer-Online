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

    <title>Tables and Rules for the Movable and Immovable Feasts - Common Prayer Online</title>
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
                Tables and Rules for the <br/>
                Movable and Immovable Feasts
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
                    <a class="btn btn-primary cpo-btn-home w-100" href="#rule">Rules for Movable Feasts and Holy
                        Days</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#fest">A Table of Feasts</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#fast">A Table of Fasts</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#prec">Tables of Precedence</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#east">To Find the Date of Easter</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#mova">A Table of the Movable Feasts</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#domi">Finding the Dominical or Sunday
                        Letter</a>
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

                <hr>
                <a id="rule"> &nbsp;</a><br/>
                <div class="text-center">
                    <h4><b>
                            Tables and Rules for the <br/>
                            Movable and Immovable Feasts,<br/>
                        </b>
                    </h4>
                    <br/>
                    Together with the Days of Fasting and Abstinence<br/>
                    through the Whole Year.<br/>
                    <br/>
                    <br/>
                    RULES TO KNOW WHEN THE MOVABLE FEASTS AND HOLY DAYS BEGIN.
                </div>

                <blockquote>
                    EASTER DAY, on which the rest depend, is always the First Sunday after
                    the Full Moon, which happens upon or next after the Twenty-first Day of
                    March; and if the Full Moon happen upon a Sunday, Easter Day is the
                    Sunday after.<br/>
                    <br/>
                    But NOTE, That the Full Moon, for the purposes of these Rules and
                    Tables, is the Fourteenth Day of a Lunar Month, reckoned according to
                    an ancient Ecclesiastical computation, and not the real or Astronomical
                    Full Moon.<br/>
                </blockquote>

                <div class="text-center">
                    <p>
                        Advent Sunday is always the nearest Sunday to the Feast of St. Andrew,
                        whether before or after.<br/>
                        Septuagesima Sunday is Nine Weeks before Easter.<br/>
                        Sexagesima Sunday is Eight Weeks before Easter.<br/>
                        Quinquagesima Sunday is Seven Weeks before Easter.<br/>
                        Quadragesima Sunday is Six Weeks before Easter.<br/>
                        Rogatlon Sunday is Five Weeks after Easter.<br/>
                        Ascension Day is Forty Days alter Easter.<br/>
                        Whitsunday is Seven Weeks after Easter.<br/>
                        Trinity Sunday is Eight Weeks after Easter.<br/>
                    </p>
                </div>
                <br/>
                <br/>
                <hr>
                <a id="fest"> &nbsp;</a><br/>
                <div class="text-center">
                    <b>
                        A TABLE OF FEASTS,<br/>
                        TO BE OBSERVED IN THIS CHURCH THROUGHOUT THE YEAR.<br/>
                    </b>
                </div>
                <br/>

                <p>
                    All Sundays in the Year<br/>
                    The Circumcision of our Lord Jesus Christ<br/>
                    The Epiphany<br/>
                    The Convestion of St Paul<br/>
                    The Purification of the Blessed Virgin<br/>
                    St. Matthias the Apostle<br/>
                    The Annunciation of the Blessed Virgin<br/>
                    St. Mark the Evangelist<br/>
                    St. Philip and St. James, Apostles<br/>
                    The Ascension of our Lord Jesus Christ<br/>
                    St. Barnabas the Apostle<br/>
                    The Nativity of St. John Baptist<br/>
                    St. Peter the Apostle<br/>
                    St. James the Apostle<br/>
                    The Transfiguration of our Lord Jesus Christ<br/>
                </p>
                <p>
                    St. Bartholomew the Apostle<br/>
                    St. Matthew, Apostle and Evangelist<br/>
                    St. Michael and all Angels<br/>
                    St. Luke the Evangelist<br/>
                    St. Simon and St. Jude, Apostles<br/>
                    All Saints<br/>
                    St. Andrew the Apostle<br/>
                    St. Thomas the Apostle<br/>
                    The Nativity of our Lord Jesus Christ<br/>
                    St. Stephen, Deacon and Martyr<br/>
                    St. John. Apostle and Evangelist<br/>
                    The Holy Innocents<br/>
                    Monday and Tuesday in Easter Week<br/>
                    Monday and Tuesday in Whitsun Week<br/>
                </p>
                <br/>
                <br/>


                <hr>
                <blockquote>
                    <a id="fast"> &nbsp;</a><br/>
                    <div class="text-center"><h4><b>A TABLE OF FASTS</b></h4></div>
                    <br/>
                    <div class="text-center">
                        Ash Wednesday
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        Good Friday
                    </div>
                    <br/>

                    <blockquote>
                        <i>Other days of Fasting, on which the Church requires such a measure
                            of Abstinence as is more especially suite to Extraordinary Acts and
                            Exercises of Devotion.</i><br/>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; I. The Forty Days of Lent.<br/>
                        &nbsp; &nbsp; &nbsp; &nbsp; II. The Ember Days at the Four Seasons, being the Wednesday, Friday
                        and Saturday after<br/>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; the First Sunday in Lent, the Feast of Pentecost,
                        September 13, and December 13.<br/>
                        &nbsp; &nbsp; &nbsp; III. All the Fridays in the Year, except Christmas Day, and The
                        Epiphany,<br/>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; or any Friday which may intervene between these
                        feasts.<br/>
                        <br/>
                        <div class="text-center"><b>Days of Solemn Supplication.</b></div>
                        &nbsp; &nbsp; &nbsp; The three Rogation Days, being the Monday, Tuesday and Wednesday
                        before Holy Thursday, or the Ascension of our Lord.
                    </blockquote>
                    <br/>
                    <br/>

                    <hr>
                    <a id="prec"> &nbsp;</a><br/>
                    <div class="text-center"><h4><b>TABLES OF PRECEDENCE.</b></h4></div>
                    <br/>
                    <div class="text-center"><b><i>The Holy Days following have precedence over any other Sunday
                                or Holy Day:</i></b></div>


                    <div class="row">
                        <div class="col-lg-6">
                            The Sundays in Advent<br/>
                            Christmas Day<br/>
                            The Epiphany<br/>
                            Septuagesima Sunday<br/>
                            Sexagesima Sunday<br/>
                            Quinquagesima Sunday<br/>
                            Ash Wednesday<br/>
                        </div>
                        <div class="col-lg-6">
                            The Sundays in Lent<br/>
                            All the days of Holy Week<br/>
                            Easter Day; and the seven following days<br/>
                            Rogation Sunday<br/>
                            The Ascension Day; and the<br/>
                            &nbsp; &nbsp; Sunday after Ascension Day<br/>
                            Whitsunday; and the six following days<br/>
                            Trinity Sunday<br/>
                        </div>
                    </div>

                    <div class="text-center">
                        <i>If any other Holy Day fall on any day noted in the preceding Table, the observance<br/>
                            of such Holy Day shall be transferred to the first convenient open day.</i>
                    </div>

                    <br/>
                    <br/>
                    <div class="text-center"><i><b>The following Holy Days have precedence of days not noted in the
                                foregoing Table:</b></i></div>


                    <div class="row">
                        <div class="col-lg-6">
                            St. Stephen, Deacon and Martyr<br/>
                            St. John, Apostle and Evangelist<br/>
                            The Holy Innocents<br/>
                            The Circumcision of Christ<br/>
                            The Conversion of St. Paul<br/>
                            The Purification of St. Mary the Virgin<br/>
                        </div>
                        <div class="col-lg-6">
                            St. John Baptist<br/>
                            All Feasts of Apostles or Evangelists<br/>
                            The Transfiguration of Christ<br/>
                            St. Michael and all Angels<br/>
                            All Saints<br/>
                        </div>
                    </div>

                    <div class="text-center">
                        <i>On these Holy Days the Collect, Epistle and Gospel for the Feast shall be used; but<br/>
                            on Sundays the Collect for the Feast shall be followed by the Collect for the Sunday.</i>
                    </div>

                </blockquote>


                <hr>

                <a id="east"> &nbsp;</a><br/>
                <div class="text-center">
                    <h4><b>
                            Tables for finding Holy Days<br/>
                        </b></h4>
                    <br/>
                    TO FIND THE DATE OF EASTER DAY.<br/>
                </div>
                <blockquote>
                    THE Numbers prefixed to the several Days, in the foregoing Calendar,
                    between the twenty-first Day of March and the eighteenth Day of April,
                    both inclusive, denote the Days upon which those Full Moons do fall,
                    which happen upon or next after the twenty-first Day of March, in those
                    Years of which they are respectively the Golden Numbers; and the Sunday
                    Letter next following any such Full Moon points out Easter Day for that
                    Year. All which holds until the Year of our Lord 2199 inclusive; after
                    which Year, the places of these GoIden Numbers will need to be changed,
                    as is hereafter expressed.<br/>
                    <br/>
                    To find Easter Day, look in the first column of the Calendar, between
                    the twentieth Day of March and the nineteenth Day of April, for the
                    Golden Number of the Year, against which stands the Day of the Paschal
                    Full Moon. Then look in the third column for the Sunday Letter next
                    after the Day of the Full Moon; and the Day of the Month standing
                    against that Sunday Letter is Easter Day. If the Full Moon happen upon
                    a Sunday, then (according to the first rule) the next Sunday after is
                    Easter Day.<br/>
                    <br/>
                    To find the Golden Number, or Prime, add 1 to the Year of our Lord, and
                    then divide by 19; the Remainder, if any, is the Golden Number; but if
                    nothing remain, then 19 is the Golden Number.<br/>
                    <br/>
                    To find the Dominical or Sunday Letter, and the places of the Golden
                    Numbers in the Calendar, see the General Tables which follow.<br/>
                </blockquote>
                <br/>


                <div class="text-center">
                    A TABLE TO FIND THE DOMINICAL OR SUNDAY LETTER.<br/>
                </div>
                <br/>

                <div class="table-responsive">
                    <table style="width: 100%">
                        <tr>
                            <td colspan="6" style="width: 50%;">
                                <blockquote>
                                    To find the Dominical or Sunday Letter, according to the Calendar, for any
                                    given Year of our Lord, look for the next preceding Hundredth Year in the
                                    lower part of this Table, and for
                                    the Remainder of the number of the Year in the upper part;
                                    and against the Hundredth Year, under the Remainder, you have
                                    the Sunday Letter.<br/>
                                    <br/>
                                    NOTE, That in all Bissextile or Leap-years, the Letter under the
                                    number marked, with an asterisk is the Sunday Letter for the
                                    Months of January and February; and the Letter under the Number
                                    not so marked is the Sunday Letter for the Remainder of the Year.
                                </blockquote>
                            </td>
                            <td colspan="1">
                                0*<br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                B
                            </td>
                            <td colspan="1">
                                &nbsp;0<br/>
                                &nbsp;6<br/>
                                12*<br/>
                                17<br/>
                                23<br/>
                                28<br/>
                                34<br/>
                                40*<br/>
                                45<br/>
                                51<br/>
                                56<br/>
                                62<br/>
                                68*<br/>
                                73<br/>
                                79<br/>
                                84<br/>
                                90<br/>
                                96*<br/>
                                <br/>
                                A<br/>
                                C<br/>
                                E<br/>
                                G<br/>
                                <br/>
                            </td>
                            <td colspan="1">
                                &nbsp;1<br/>
                                &nbsp;7<br/>
                                12<br/>
                                18<br/>
                                24*<br/>
                                29<br/>
                                35<br/>
                                40<br/>
                                46<br/>
                                52*<br/>
                                57<br/>
                                63<br/>
                                68<br/>
                                74<br/>
                                80*<br/>
                                85<br/>
                                91<br/>
                                96<br/>
                                <br/>
                                G<br/>
                                B<br/>
                                D<br/>
                                F<br/>
                                <br/>
                            </td>
                            <td colspan="1">
                                &nbsp;2<br/>
                                &nbsp;8*<br/>
                                13<br/>
                                19<br/>
                                24<br/>
                                30<br/>
                                36*<br/>
                                41<br/>
                                47<br/>
                                52<br/>
                                58<br/>
                                64*<br/>
                                69<br/>
                                75<br/>
                                80<br/>
                                86<br/>
                                92*<br/>
                                97<br/>
                                <br/>
                                F<br/>
                                A<br/>
                                C<br/>
                                E<br/>
                                <br/>
                            </td>
                            <td colspan="1">
                                &nbsp;3<br/>
                                &nbsp;8<br/>
                                14<br/>
                                20*<br/>
                                25<br/>
                                31<br/>
                                36<br/>
                                42<br/>
                                48*<br/>
                                53<br/>
                                59<br/>
                                64<br/>
                                70<br/>
                                76*<br/>
                                81<br/>
                                87<br/>
                                92<br/>
                                98<br/>
                                <br/>
                                E<br/>
                                G<br/>
                                B<br/>
                                D<br/>
                                <br/>
                            </td>
                            <td colspan="1">
                                &nbsp;4*<br/>
                                &nbsp;9<br/>
                                15<br/>
                                20<br/>
                                26<br/>
                                32*<br/>
                                37<br/>
                                43<br/>
                                48<br/>
                                54<br/>
                                60*<br/>
                                65<br/>
                                71<br/>
                                76<br/>
                                82<br/>
                                88*<br/>
                                93<br/>
                                99<br/>
                                <br/>
                                D<br/>
                                F<br/>
                                A<br/>
                                C<br/>
                                <br/>
                            </td>
                            <td colspan="1">
                                &nbsp;4<br/>
                                10<br/>
                                16*<br/>
                                21<br/>
                                27<br/>
                                32<br/>
                                38<br/>
                                44*<br/>
                                49<br/>
                                55<br/>
                                60<br/>
                                66<br/>
                                72*<br/>
                                77<br/>
                                83<br/>
                                88<br/>
                                94<br/>
                                <br/>
                                <br/>
                                C<br/>
                                E<br/>
                                G<br/>
                                B<br/>
                                <br/>
                            </td>
                            <td colspan="1">
                                &nbsp;5<br/>
                                11<br/>
                                16<br/>
                                22<br/>
                                28<br/>
                                33<br/>
                                39<br/>
                                44<br/>
                                50<br/>
                                56*<br/>
                                61<br/>
                                67<br/>
                                72<br/>
                                78<br/>
                                84*<br/>
                                89<br/>
                                95<br/>
                                <br/>
                                <br/>
                                B<br/>
                                D<br/>
                                F<br/>
                                A<br/>
                                <br/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="20">
                                <i>Hundreds of Years</i> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br/>
                                1600 &nbsp; &nbsp; 2000 &nbsp; &nbsp; 2400 &nbsp; &nbsp; 2800 &nbsp; &nbsp; 3200 &nbsp;
                                &nbsp;<br/>
                                1700 &nbsp; &nbsp; 2100 &nbsp; &nbsp; 2500 &nbsp; &nbsp; 2900 &nbsp; &nbsp; 3300 &nbsp;
                                &nbsp;<br/>
                                1800 &nbsp; &nbsp; 2200 &nbsp; &nbsp; 2600 &nbsp; &nbsp; 3000 &nbsp; &nbsp; 3400 &nbsp;
                                &nbsp;<br/>
                                1900 &nbsp; &nbsp; 2300 &nbsp; &nbsp; 2700 &nbsp; &nbsp; 3100 &nbsp; &nbsp; 3500 &nbsp;
                                &nbsp;<br/>
                                etc. &nbsp; &nbsp; &nbsp; &nbsp;<br/>
                            </td>
                        </tr>
                    </table>
                </div>


                <br/>

                <hr>

                <a id="mova"> &nbsp;</a><br/>
                <div class="text-center">
                    <h4><b>
                            Tables for finding Holy Days<br/>
                        </b></h4>
                    <br/>
                    A TABLE OF THE MOVABLE FEASTS,<br/>
                    <br/>
                    ACCORDING TO THE SEVERAL DAYS THAT EASTER CAN FALL UPON.<br/>
                </div>

                <div class="table-responsive">
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 16%">
                                <div class="text-center">
                                    <br/>
                                    <i>Easter<br/>
                                        Day</i><br/>
                                    <hr>
                                    March 22<br/>
                                    March 23<br/>
                                    March 24<br/>
                                    March 25<br/>
                                    March 26<br/>
                                    March 27<br/>
                                    March 28<br/>
                                    March 29<br/>
                                    March 30<br/>
                                    March 23<br/>
                                    April 1<br/>
                                    April 2<br/>
                                    April 3<br/>
                                    April 4<br/>
                                    April 5<br/>
                                    April 6<br/>
                                    April 7<br/>
                                    April 8<br/>
                                    April 9<br/>
                                    April 10<br/>
                                    April 11<br/>
                                    April 12<br/>
                                    April 13<br/>
                                    April 14<br/>
                                    April 15<br/>
                                    April 16<br/>
                                    April 17<br/>
                                    April 18<br/>
                                    April 19<br/>
                                    April 20<br/>
                                    April 21<br/>
                                    April 22<br/>
                                    April 23<br/>
                                    April 24<br/>
                                    April 25<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <i>Sundays<br/>
                                        after<br/>
                                        Epiphany</i><br/>
                                    <hr>
                                    1<br/>
                                    1<br/>
                                    1<br/>
                                    2<br/>
                                    2<br/>
                                    2<br/>
                                    2<br/>
                                    2<br/>
                                    2<br/>
                                    2<br/>
                                    3<br/>
                                    3<br/>
                                    3<br/>
                                    3<br/>
                                    3<br/>
                                    3<br/>
                                    3<br/>
                                    4<br/>
                                    4<br/>
                                    4<br/>
                                    4<br/>
                                    4<br/>
                                    4<br/>
                                    4<br/>
                                    5<br/>
                                    5<br/>
                                    5<br/>
                                    5<br/>
                                    5<br/>
                                    5<br/>
                                    5<br/>
                                    6<br/>
                                    6<br/>
                                    6<br/>
                                    6<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <i>Septua-<br/>
                                        gesima<br/>
                                        Sunday</i><br/>
                                    <hr>
                                    Jan. 18<br/>
                                    Jan. 19<br/>
                                    Jan. 20<br/>
                                    Jan. 21<br/>
                                    Jan. 22<br/>
                                    Jan. 23<br/>
                                    Jan. 24<br/>
                                    Jan. 25<br/>
                                    Jan. 26<br/>
                                    Jan. 27<br/>
                                    Jan. 28<br/>
                                    Jan. 29<br/>
                                    Jan. 30<br/>
                                    Jan. 31<br/>
                                    Feb. 1<br/>
                                    Feb. 2<br/>
                                    Feb. 3<br/>
                                    Feb. 4<br/>
                                    Feb. 5<br/>
                                    Feb. 6<br/>
                                    Feb. 7<br/>
                                    Feb. 8<br/>
                                    Feb. 9<br/>
                                    Feb. 10<br/>
                                    Feb. 11<br/>
                                    Feb. 12<br/>
                                    Feb. 13<br/>
                                    Feb. 14<br/>
                                    Feb. 15<br/>
                                    Feb. 16<br/>
                                    Feb. 17<br/>
                                    Feb. 18<br/>
                                    Feb. 19<br/>
                                    Feb. 20<br/>
                                    Feb. 21<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <i>First<br/>
                                        day of<br/>
                                        Lent</i><br/>
                                    <hr>
                                    Feb. 4<br/>
                                    Feb. 5<br/>
                                    Feb. 6<br/>
                                    Feb. 7<br/>
                                    Feb. 8<br/>
                                    Feb. 9<br/>
                                    Feb. 10<br/>
                                    Feb. 11<br/>
                                    Feb. 12<br/>
                                    Feb. 13<br/>
                                    Feb. 14<br/>
                                    Feb. 15<br/>
                                    Feb. 16<br/>
                                    Feb. 17<br/>
                                    Feb. 18<br/>
                                    Feb. 19<br/>
                                    Feb. 20<br/>
                                    Feb. 21<br/>
                                    Feb. 22<br/>
                                    Feb. 23<br/>
                                    Feb. 24<br/>
                                    Feb. 25<br/>
                                    Feb. 26<br/>
                                    Feb. 27<br/>
                                    Feb. 28<br/>
                                    March 1<br/>
                                    March 2<br/>
                                    March 3<br/>
                                    March 4<br/>
                                    March 5<br/>
                                    March 6<br/>
                                    March 7<br/>
                                    March 8<br/>
                                    March 9<br/>
                                    March 10<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <i>Ascen-<br/>
                                        sion<br/>
                                        Day</i><br/>
                                    <hr>
                                    April 30<br/>
                                    May 1<br/>
                                    May 2<br/>
                                    May 3<br/>
                                    May 4<br/>
                                    May 5<br/>
                                    May 6<br/>
                                    May 7<br/>
                                    May 8<br/>
                                    May 9<br/>
                                    May 10<br/>
                                    May 11<br/>
                                    May 12<br/>
                                    May 13<br/>
                                    May 14<br/>
                                    May 15<br/>
                                    May 16<br/>
                                    May 17<br/>
                                    May 18<br/>
                                    May 19<br/>
                                    May 20<br/>
                                    May 21<br/>
                                    May 22<br/>
                                    May 23<br/>
                                    May 24<br/>
                                    May 25<br/>
                                    May 26<br/>
                                    May 27<br/>
                                    May 28<br/>
                                    May 29<br/>
                                    May 30<br/>
                                    May 31<br/>
                                    June 1<br/>
                                    June 2<br/>
                                    June 3<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <br/>
                                    <i>Whit-<br/>
                                        sunday</i><br/>
                                    <hr>
                                    May 10<br/>
                                    May 11<br/>
                                    May 12<br/>
                                    May 13<br/>
                                    May 14<br/>
                                    May 15<br/>
                                    May 16<br/>
                                    May 17<br/>
                                    May 18<br/>
                                    May 19<br/>
                                    May 20<br/>
                                    May 21<br/>
                                    May 22<br/>
                                    May 23<br/>
                                    May 24<br/>
                                    May 25<br/>
                                    May 26<br/>
                                    May 27<br/>
                                    May 28<br/>
                                    May 29<br/>
                                    May 30<br/>
                                    May 31<br/>
                                    June 1<br/>
                                    June 2<br/>
                                    June 3<br/>
                                    June 4<br/>
                                    June 5<br/>
                                    June 6<br/>
                                    June 7<br/>
                                    June 8<br/>
                                    June 9<br/>
                                    June 10<br/>
                                    June 11<br/>
                                    June 12<br/>
                                    June 13<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <i>Sundays<br/>
                                        after<br/>
                                        Trinity</i><br/>
                                    <hr>
                                    27<br/>
                                    27<br/>
                                    27<br/>
                                    27<br/>
                                    27<br/>
                                    26<br/>
                                    26<br/>
                                    26<br/>
                                    26<br/>
                                    26<br/>
                                    26<br/>
                                    26<br/>
                                    25<br/>
                                    25<br/>
                                    25<br/>
                                    25<br/>
                                    25<br/>
                                    25<br/>
                                    25<br/>
                                    24<br/>
                                    24<br/>
                                    24<br/>
                                    24<br/>
                                    24<br/>
                                    24<br/>
                                    24<br/>
                                    23<br/>
                                    23<br/>
                                    23<br/>
                                    23<br/>
                                    23<br/>
                                    23<br/>
                                    23<br/>
                                    22<br/>
                                    22<br/>
                                </div>
                            </td>

                            <td style="width: 12%">
                                <div class="text-center">
                                    <br/>
                                    <i>Advent<br/>
                                        Sunday</i><br/>
                                    <hr>
                                    Nov. 29<br/>
                                    Nov. 30<br/>
                                    Dec. 1<br/>
                                    Dec. 2<br/>
                                    Dec. 3<br/>
                                    Nov. 27<br/>
                                    Nov. 28<br/>
                                    Nov. 29<br/>
                                    Nov. 30<br/>
                                    Dec. 1<br/>
                                    Dec. 2<br/>
                                    Dec. 3<br/>
                                    Nov. 27<br/>
                                    Nov. 28<br/>
                                    Nov. 29<br/>
                                    Nov. 30<br/>
                                    Dec. 1<br/>
                                    Dec. 2<br/>
                                    Dec. 3<br/>
                                    Nov. 27<br/>
                                    Nov. 28<br/>
                                    Nov. 29<br/>
                                    Nov. 30<br/>
                                    Dec. 1<br/>
                                    Dec. 2<br/>
                                    Dec. 3<br/>
                                    Nov. 27<br/>
                                    Nov. 28<br/>
                                    Nov. 29<br/>
                                    Nov. 30<br/>
                                    Dec. 1<br/>
                                    Dec. 2<br/>
                                    Dec. 3<br/>
                                    Nov. 27<br/>
                                    Nov. 28<br/>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <blockquote>
                    NOTE, That in a Bissextile or Leap-year, the number of Sundays after Epiphany
                    will be the same as if Easter Day had fallen one Day later than it really does.
                    And, for the same reason, one Day must, in every Leap-year, be added to the
                    Day of the Month given by the Table for Septuagesima Sunday, and for the
                    First Day of Lent: unless the Table gives some Day in the Month of March,
                    for it; for in that case, the Day given by the Table is the right Day.<br/>
                </blockquote>
                <br/>

                <hr>

                <a id="domi"> &nbsp;</a><br/>
                <div class="text-center">
                    <h4><b>
                            Tables for finding Holy Days<br/>
                        </b></h4>
                    <br/>
                    GENERAL TABLES<br/>
                    <br/>
                    FOR FINDING THE DOMINICAL OR SUNDAY LETTER, AND THE PLACES<br/>
                    OF THE GOLDEN NUMBERS IN THE CALENDAR.<br/>
                    <br/>

                    TABLE I.<br/>
                </div>

                <blockquote>
                    TO find the Dominical or Sunday Letter for any given Year of our Lord,
                    add to the Year its fourth part, omitting fractions, and also the
                    Number, which, in TABLE I., standeth at the top of the column wherein
                    the number of Hundreds contained in that given Year is found; divide
                    the sum by 7, and if there be no Remainder, then A is the Sunday
                    Letter; but if any number remain, then the Letter which standeth under
                    that Number at the top of the Table, is the Sunday Letter.<br/>
                    <br/>
                    NOTE, That in all-Bissextile or Leap-years, the Letter found as above
                    will be the Sunday Letter from the first Day of March inclusive, to
                    the End of the Year.<br/>
                </blockquote>

                <div class="text-center">
                    <b>TABLE I.</b><br/>
                </div>

                <div class="table-responsive text-center">
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 14%">
                                6
                            </td>
                            <td style="width: 14%">
                                5
                            </td>
                            <td style="width: 14%">
                                4
                            </td>
                            <td style="width: 14%">
                                3
                            </td>
                            <td style="width: 14%">
                                2
                            </td>
                            <td style="width: 14%">
                                1
                            </td>
                            <td style="width: 14%">
                                0
                            </td>
                        </tr>

                        <tr>
                            <td>
                                B
                                <hr>
                            </td>
                            <td>
                                C
                                <hr>
                            </td>
                            <td>
                                D
                                <hr>
                            </td>
                            <td>
                                E
                                <hr>
                            </td>
                            <td>
                                F
                                <hr>
                            </td>
                            <td>
                                G
                                <hr>
                            </td>
                            <td>
                                A
                                <hr>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                1600
                            </td>
                            <td>
                                1700
                            </td>
                            <td>
                                1800
                            </td>
                        </tr>

                        <tr>
                            <td>
                                1900
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2000
                            </td>
                            <td>
                                2100
                            </td>
                            <td>
                                2200
                            </td>
                            <td>
                                2300
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                2400
                            </td>
                            <td>
                                2500
                            </td>
                            <td>
                                2600
                            </td>
                            <td>
                                2700
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                2800
                            </td>
                        </tr>

                        <tr>
                            <td>
                                2900
                            </td>
                            <td>
                                3000
                            </td>
                            <td>
                                3100
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                3200
                            </td>
                            <td>
                                3300
                            </td>
                            <td>
                                3400
                            </td>
                            <td>
                                3500
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                3600
                            </td>
                            <td>
                                3700
                            </td>
                        </tr>

                        <tr>
                            <td>
                                3800
                            </td>
                            <td>
                                3900
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>


                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                4000
                            </td>
                            <td>
                                4100
                            </td>
                            <td>
                                4200
                            </td>
                            <td>
                                4300
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                4400
                            </td>
                            <td>
                                4500
                            </td>
                            <td>
                                4600
                            </td>
                        </tr>

                        <tr>
                            <td>
                                4700
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                                4800
                            </td>
                            <td>
                                4900
                            </td>
                            <td>
                                5000
                            </td>
                            <td>
                                etc.
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                    </table>
                </div>
                <br/>
                <br/>

                <div class="text-center">
                    TABLE II.
                </div>

                <blockquote>
                    To find the Days to which the Golden Numbers ought to be prefixed in
                    the Calendar in any given Year of our Lord, consisting of entire
                    Hundred Years, and in all the intermediate Years betwixt that and the
                    next Hundredth Year-following, look in the first column of this Table
                    for the given Year, consisting of entire Hundreds; and against it,
                    under each Golden Number, you will find the Day of the Month to which
                    that Golden Number ought to be prefixed in the Calendar, during that
                    period of One Hundred Years: and if the number of be Day be greater
                    than 20, it is a Day of March; but if it be less than 20, it is a Day
                    of April.

                    The asterisk, affixed to certain Hundredth Years,denotets those Years
                    which are stilI to be accounted Bissextile or Leap-years in the new
                    Calendar; whereas all the other Hundredth Years are to be accounted
                    only common Years.<br/>
                </blockquote>

                <div class="text-center">
                    <b>TABLE II.</b>
                </div>

                <div class="table-responsive text-center">
                    <table style="width: 100%">
                        <tr>
                            <td colspan="20">
                                <br/>

                                <i>
                                    THE GOLDEN NUMBERS.
                                </i>
                            </td>
                        </tr>

                        <tr>
                            <td style="width: 24%">
                                <div class="text-center">
                                    <i>Years of our Lord</i>
                                    <hr>
                                    1600*<br/>
                                    1700, 1800<br/>
                                    1900, 2000*, 2100<br/>
                                    <br/>
                                    2200, 2400*<br/>
                                    2300, 2500<br/>
                                    2600, 2700, 2800*<br/>
                                    <br/>
                                    2900, 3000<br/>
                                    3100, 3200*, 3300<br/>
                                    3400, 3600*<br/>
                                    <br/>
                                    3500, 3700<br/>
                                    3800, 3900, 4000*<br/>
                                    4100<br/>
                                    <br/>
                                    4200, 4300, 4400*<br/>
                                    4500, 4600<br/>
                                    4700, 4800*, 4900<br/>
                                    <br/>
                                    5000, 5200*<br/>
                                    5100, 5300<br/>
                                    5400, 5500, 5600*<br/>
                                    <br/>
                                    5700, 5800<br/>
                                    5900, 6000*, 6100<br/>
                                    6200, 6400<br/>
                                    <br/>
                                    6300, 6500<br/>
                                    6600, 6800*<br/>
                                    6700, 6900<br/>
                                    <br/>
                                    7000, 7100, 7200*<br/>
                                    7300, 7400<br/>
                                    7500, 7600*, 7700<br/>
                                    <br/>
                                    7800, 8000*<br/>
                                    7900, 8100<br/>
                                    8200, 8300, 8400*<br/>
                                </div>
                            </td>

                            <td style="width: 4%">
                                1<br/>
                                <hr>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                18<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                                <br/>
                                25<br/>
                                26<br/>
                                27<br/>
                                <br/>
                                28<br/>
                                29<br/>
                                30<br/>
                                <br/>
                                31<br/>
                                1<br/>
                                2<br/>
                                <br/>
                                3<br/>
                                4<br/>
                                5<br/>
                                <br/>
                                6<br/>
                                7<br/>
                                8<br/>
                                <br/>
                                9<br/>
                                10<br/>
                                11<br/>
                            </td>

                            <td style="width: 4%">
                                2<br/>
                                <hr>
                                1<br/>
                                2<br/>
                                3<br/>
                                <br/>
                                4<br/>
                                5<br/>
                                6<br/>
                                <br/>
                                7<br/>
                                8<br/>
                                9<br/>
                                <br/>
                                10<br/>
                                11<br/>
                                12<br/>
                                <br/>
                                13<br/>
                                14<br/>
                                15<br/>
                                <br/>
                                16<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                18<br/>
                                21<br/>
                                22<br/>
                                <br/>
                                23<br/>
                                24<br/>
                                25<br/>
                                <br/>
                                26<br/>
                                27<br/>
                                28<br/>
                                <br/>
                                29<br/>
                                30<br/>
                                31<br/>
                            </td>

                            <td style="width: 4%">
                                3<br/>
                                <hr>
                                21<br/>
                                22<br/>
                                23<br/>
                                <br/>
                                24<br/>
                                25<br/>
                                26<br/>
                                <br/>
                                27<br/>
                                28<br/>
                                29<br/>
                                <br/>
                                30<br/>
                                31<br/>
                                1<br/>
                                <br/>
                                2<br/>
                                3<br/>
                                4<br/>
                                <br/>
                                5<br/>
                                6<br/>
                                7<br/>
                                <br/>
                                8<br/>
                                9<br/>
                                10<br/>
                                <br/>
                                11<br/>
                                12<br/>
                                13<br/>
                                <br/>
                                14<br/>
                                15<br/>
                                16<br/>
                                <br/>
                                17<br/>
                                18<br/>
                                18<br/>
                            </td>

                            <td style="width: 4%">
                                4<br/>
                                <hr>
                                9<br/>
                                10<br/>
                                11<br/>
                                <br/>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                18<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                                <br/>
                                25<br/>
                                26<br/>
                                27<br/>
                                <br/>
                                28<br/>
                                29<br/>
                                30<br/>
                                <br/>
                                31<br/>
                                1<br/>
                                2<br/>
                                <br/>
                                3<br/>
                                4<br/>
                                5<br/>
                                <br/>
                                6<br/>
                                7<br/>
                                8<br/>
                            </td>

                            <td style="width: 4%">
                                5<br/>
                                <hr>
                                29<br/>
                                30<br/>
                                31<br/>
                                <br/>
                                1<br/>
                                2<br/>
                                3<br/>
                                <br/>
                                4<br/>
                                5<br/>
                                6<br/>
                                <br/>
                                7<br/>
                                8<br/>
                                9<br/>
                                <br/>
                                10<br/>
                                11<br/>
                                12<br/>
                                <br/>
                                13<br/>
                                14<br/>
                                15<br/>
                                <br/>
                                16<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                18<br/>
                                21<br/>
                                22<br/>
                                <br/>
                                23<br/>
                                24<br/>
                                25<br/>
                                <br/>
                                26<br/>
                                27<br/>
                                28<br/>
                            </td>

                            <td style="width: 4%">
                                6<br/>
                                <hr>
                                17<br/>
                                18<br/>
                                18<br/>
                                <br/>
                                21<br/>
                                22<br/>
                                23<br/>
                                <br/>
                                24<br/>
                                25<br/>
                                26<br/>
                                <br/>
                                27<br/>
                                28<br/>
                                29<br/>
                                <br/>
                                30<br/>
                                31<br/>
                                1<br/>
                                <br/>
                                2<br/>
                                3<br/>
                                4<br/>
                                <br/>
                                5<br/>
                                6<br/>
                                7<br/>
                                <br/>
                                8<br/>
                                9<br/>
                                10<br/>
                                <br/>
                                11<br/>
                                12<br/>
                                13<br/>
                                <br/>
                                14<br/>
                                15<br/>
                                16<br/>
                            </td>

                            <td style="width: 4%">
                                7<br/>
                                <hr>
                                6<br/>
                                7<br/>
                                8<br/>
                                <br/>
                                9<br/>
                                10<br/>
                                11<br/>
                                <br/>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                18<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                                <br/>
                                25<br/>
                                26<br/>
                                27<br/>
                                <br/>
                                28<br/>
                                29<br/>
                                30<br/>
                                <br/>
                                31<br/>
                                1<br/>
                                2<br/>
                                <br/>
                                3<br/>
                                4<br/>
                                5<br/>
                            </td>

                            <td style="width: 4%">
                                8<br/>
                                <hr>
                                26<br/>
                                27<br/>
                                28<br/>
                                <br/>
                                29<br/>
                                30<br/>
                                31<br/>
                                <br/>
                                1<br/>
                                2<br/>
                                3<br/>
                                <br/>
                                4<br/>
                                5<br/>
                                6<br/>
                                <br/>
                                7<br/>
                                8<br/>
                                9<br/>
                                <br/>
                                10<br/>
                                11<br/>
                                12<br/>
                                <br/>
                                13<br/>
                                14<br/>
                                15<br/>
                                <br/>
                                16<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                18<br/>
                                21<br/>
                                22<br/>
                                <br/>
                                23<br/>
                                24<br/>
                                25<br/>
                            </td>

                            <td style="width: 4%">
                                9<br/>
                                <hr>
                                14<br/>
                                15<br/>
                                16<br/>
                                <br/>
                                17<br/>
                                18<br/>
                                18<br/>
                                <br/>
                                21<br/>
                                22<br/>
                                23<br/>
                                <br/>
                                24<br/>
                                25<br/>
                                26<br/>
                                <br/>
                                27<br/>
                                28<br/>
                                29<br/>
                                <br/>
                                30<br/>
                                31<br/>
                                1<br/>
                                <br/>
                                2<br/>
                                3<br/>
                                4<br/>
                                <br/>
                                5<br/>
                                6<br/>
                                7<br/>
                                <br/>
                                8<br/>
                                9<br/>
                                10<br/>
                                <br/>
                                11<br/>
                                12<br/>
                                13<br/>
                            </td>

                            <td style="width: 4%">
                                10<br/>
                                <hr>
                                3<br/>
                                4<br/>
                                5<br/>
                                <br/>
                                6<br/>
                                7<br/>
                                8<br/>
                                <br/>
                                9<br/>
                                10<br/>
                                11<br/>
                                <br/>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                18<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                                <br/>
                                25<br/>
                                26<br/>
                                27<br/>
                                <br/>
                                28<br/>
                                29<br/>
                                30<br/>
                                <br/>
                                31<br/>
                                1<br/>
                                2<br/>
                            </td>

                            <td style="width: 4%">
                                11<br/>
                                <hr>
                                23<br/>
                                24<br/>
                                25<br/>
                                <br/>
                                26<br/>
                                27<br/>
                                28<br/>
                                <br/>
                                29<br/>
                                30<br/>
                                31<br/>
                                <br/>
                                1<br/>
                                2<br/>
                                3<br/>
                                <br/>
                                4<br/>
                                5<br/>
                                6<br/>
                                <br/>
                                7<br/>
                                8<br/>
                                9<br/>
                                <br/>
                                10<br/>
                                11<br/>
                                12<br/>
                                <br/>
                                13<br/>
                                14<br/>
                                15<br/>
                                <br/>
                                16<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                18<br/>
                                21<br/>
                                22<br/>
                            </td>

                            <td style="width: 4%">
                                12<br/>
                                <hr>
                                11<br/>
                                12<br/>
                                13<br/>
                                <br/>
                                14<br/>
                                15<br/>
                                16<br/>
                                <br/>
                                17<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                21<br/>
                                22<br/>
                                23<br/>
                                <br/>
                                24<br/>
                                25<br/>
                                26<br/>
                                <br/>
                                27<br/>
                                28<br/>
                                29<br/>
                                <br/>
                                30<br/>
                                31<br/>
                                1<br/>
                                <br/>
                                2<br/>
                                3<br/>
                                4<br/>
                                <br/>
                                5<br/>
                                6<br/>
                                7<br/>
                                <br/>
                                8<br/>
                                9<br/>
                                10<br/>
                            </td>

                            <td style="width: 4%">
                                13<br/>
                                <hr>
                                31<br/>
                                1<br/>
                                2<br/>
                                <br/>
                                3<br/>
                                4<br/>
                                5<br/>
                                <br/>
                                6<br/>
                                7<br/>
                                8<br/>
                                <br/>
                                9<br/>
                                10<br/>
                                11<br/>
                                <br/>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                17<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                                <br/>
                                25<br/>
                                26<br/>
                                27<br/>
                                <br/>
                                28<br/>
                                29<br/>
                                30<br/>
                            </td>

                            <td style="width: 4%">
                                14<br/>
                                <hr>
                                18<br/>
                                21<br/>
                                22<br/>
                                <br/>
                                23<br/>
                                24<br/>
                                25<br/>
                                <br/>
                                26<br/>
                                27<br/>
                                28<br/>
                                <br/>
                                29<br/>
                                30<br/>
                                31<br/>
                                <br/>
                                1<br/>
                                2<br/>
                                3<br/>
                                <br/>
                                4<br/>
                                5<br/>
                                6<br/>
                                <br/>
                                7<br/>
                                8<br/>
                                9<br/>
                                <br/>
                                10<br/>
                                11<br/>
                                12<br/>
                                <br/>
                                13<br/>
                                14<br/>
                                15<br/>
                                <br/>
                                16<br/>
                                17<br/>
                                17<br/>
                            </td>

                            <td style="width: 4%">
                                15<br/>
                                <hr>
                                8<br/>
                                9<br/>
                                10<br/>
                                <br/>
                                11<br/>
                                12<br/>
                                13<br/>
                                <br/>
                                14<br/>
                                15<br/>
                                16<br/>
                                <br/>
                                17<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                21<br/>
                                22<br/>
                                23<br/>
                                <br/>
                                24<br/>
                                25<br/>
                                26<br/>
                                <br/>
                                27<br/>
                                28<br/>
                                29<br/>
                                <br/>
                                30<br/>
                                31<br/>
                                1<br/>
                                <br/>
                                2<br/>
                                3<br/>
                                4<br/>
                                <br/>
                                5<br/>
                                6<br/>
                                7<br/>
                            </td>

                            <td style="width: 4%">
                                16<br/>
                                <hr>
                                28<br/>
                                29<br/>
                                30<br/>
                                <br/>
                                31<br/>
                                1<br/>
                                2<br/>
                                <br/>
                                3<br/>
                                4<br/>
                                5<br/>
                                <br/>
                                6<br/>
                                7<br/>
                                8<br/>
                                <br/>
                                9<br/>
                                10<br/>
                                11<br/>
                                <br/>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                17<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                                <br/>
                                25<br/>
                                26<br/>
                                27<br/>
                            </td>

                            <td style="width: 4%">
                                17<br/>
                                <hr>
                                16<br/>
                                17<br/>
                                17<br/>
                                <br/>
                                18<br/>
                                21<br/>
                                22<br/>
                                <br/>
                                23<br/>
                                24<br/>
                                25<br/>
                                <br/>
                                26<br/>
                                27<br/>
                                28<br/>
                                <br/>
                                29<br/>
                                30<br/>
                                31<br/>
                                <br/>
                                1<br/>
                                2<br/>
                                3<br/>
                                <br/>
                                4<br/>
                                5<br/>
                                6<br/>
                                <br/>
                                7<br/>
                                8<br/>
                                9<br/>
                                <br/>
                                10<br/>
                                11<br/>
                                12<br/>
                                <br/>
                                13<br/>
                                14<br/>
                                15<br/>
                            </td>

                            <td style="width: 4%">
                                18<br/>
                                <hr>
                                5<br/>
                                6<br/>
                                7<br/>
                                <br/>
                                8<br/>
                                9<br/>
                                10<br/>
                                <br/>
                                11<br/>
                                12<br/>
                                13<br/>
                                <br/>
                                14<br/>
                                15<br/>
                                16<br/>
                                <br/>
                                17<br/>
                                17<br/>
                                18<br/>
                                <br/>
                                21<br/>
                                22<br/>
                                23<br/>
                                <br/>
                                24<br/>
                                25<br/>
                                26<br/>
                                <br/>
                                27<br/>
                                28<br/>
                                29<br/>
                                <br/>
                                30<br/>
                                31<br/>
                                1<br/>
                                <br/>
                                2<br/>
                                3<br/>
                                4<br/>
                            </td>

                            <td style="width: 4%">
                                19<br/>
                                <hr>
                                25<br/>
                                26<br/>
                                27<br/>
                                <br/>
                                28<br/>
                                29<br/>
                                30<br/>
                                <br/>
                                31<br/>
                                1<br/>
                                2<br/>
                                <br/>
                                3<br/>
                                4<br/>
                                5<br/>
                                <br/>
                                6<br/>
                                7<br/>
                                8<br/>
                                <br/>
                                9<br/>
                                10<br/>
                                11<br/>
                                <br/>
                                12<br/>
                                13<br/>
                                14<br/>
                                <br/>
                                15<br/>
                                16<br/>
                                17<br/>
                                <br/>
                                17<br/>
                                18<br/>
                                21<br/>
                                <br/>
                                22<br/>
                                23<br/>
                                24<br/>
                            </td>
                        </tr>
                    </table>
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
