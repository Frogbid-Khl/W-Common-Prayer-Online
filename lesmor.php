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
    <title>Morning Prayer Lessons and Psalms for the Christian Year - Common Prayer Online</title>
    <link href="assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href='assets/vendor/Animate/animate.min.css' rel='stylesheet'/>
    <link href="assets/css/style.css" rel="stylesheet"/>
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
                           href="#CHURCH">
                            Index
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#adv">
                            Advent
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#chri">
                            Christmas
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#epip">
                            Epiphany
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#sexa">
                            Pre-Lent
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#ashw">
                            Lent
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#east">
                            Easter
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#whit">Whitsunday</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#trin">Trinity</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="hourly-office">Hourly Offices </a>
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
            <h1 class="cpo-content-page-title">Morning Prayer Lessons and Psalms for the Christian Year</h1>
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

                <div class="text-center"><h3>Morning Prayer Lessons and Psalms for the Christian Year</h3></div>
                <div class="text-center"><h4>The Lectionary from the 1928 Book of Common Prayer (1940 revision)</h4></div>

                <div class="text-center">
                    <h5>
                        <a href="#CHURCH"><b>The Church Year</b></a>

                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#SAINT"><b>Holy Days</b></a>
                    </h5>
                </div>
                <a id="CHURCH"> &nbsp;</a>

                <div class="row p-2">
                    <div class="col-12 pt-2" style="border: 1px solid black;">
                        <div class="text-center">
                            <h3>
                                <b>The Church Year</b>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        <h5 class="text-center"><i><b>Advent</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#adv1">First Sunday in Advent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#adv2">Second Sunday in Advent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#adv3">Third Sunday in Advent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#adv4">Fourth Sunday in Advent</a><br/>
                        <br/>
                        <h5 class="text-center"><i><b>Christmas</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#chri">Christmas Day</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#chr1">First Sunday after Christmas</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#chr2">Second Sunday after Christmas</a><br/>
                        <br/>
                        <h5 class="text-center"><i><b>Epiphany</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#epip">Epiphany</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#epi1">First Sunday after Epiphany</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#epi2">Second Sunday after Epiphany</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#epi3">Third Sunday after Epiphany</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#epi4">Fourth Sunday after Epiphany</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#epi5">Fifth Sunday after Epiphany</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#epi6">Sixth Sunday after Epiphany</a><br/>
                        <br/>
                        <h5 class="text-center"><i><b>Pre-Lent</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#sept">Septuagesima</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#sexa">Sexagesima</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#quin">Quinquagesima</a><br/>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        <h5 class="text-center"><i><b>Lent</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#ashw">Ash Wednesday</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#len1">First Sunday in Lent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#len2">Second Sunday in Lent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#len3">Third Sunday in Lent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#len4">Fourth Sunday in Lent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#len5">Passion Sunday</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#len6">Palm Sunday</a><br/>
                        <br/>

                        <h5 class="text-center"><i><b>Easter</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#east">Easter Sunday</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#est1">First Sunday after Easter</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#est2">Second Sunday after Easter</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#est3">Third Sunday after Easter</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#est4">Fourth Sunday after Easter</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#est5">Rogation Sunday</a><br/>
                        <br/>

                        <h5 class="text-center"><i><b>Ascension</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#asce">Ascension Day</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#ascs">Sunday after Ascension</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#whit">Whitsunday (Pentecost)</a><br/>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        <h5 class="text-center"><i><b>Trinity</b></i></h5>
                        &nbsp; &nbsp; &nbsp; <a href="#trin">Trinity Sunday</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn1">First Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn2">Second Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn3">Third Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn4">Fourth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn5">Fifth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn6">Sixth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn7">Seventh Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn8">Eighth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn9">Ninth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn10">Tenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn11">Eleventh Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn12">Twelfth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn13">Thirteenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn14">Fourteenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn15">Fifteenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn16">Sixteenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn17">Seventeenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn18">Eighteenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn19">Ninteenth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn20">Twentieth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn21">Twenty-First Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn22">Twenty-Second Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn23">Twenty-Third Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#trn24">Twenty-Fourth Sunday after Trinity</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#bfa3">Third Sunday before Advent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#bfa2">Second Sunday before Advent</a><br/>
                        &nbsp; &nbsp; &nbsp; <a href="#bfa1">Sunday next before Advent</a><br/>
                    </div>
                </div>

                <br/>
                <br/>

                <a id="SAINT"> &nbsp;</a>
                <div class="row p-2">
                    <div class="col-12 pt-2" style="border: 1px solid black;">
                        <div class="text-center">
                            <h3>
                                <b>Fixed Holy Days</b>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#andr">
                            St. Andrew the Apostle,</a> <i>November 30</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#thom">
                            St. Thomas the Apostle,</a> <i>December 21</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#paul">
                            The Conversion of St. Paul,</a> <i>January 25</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#puri">
                            The Purification,</a> <i>February 2</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#mthi">
                            St. Matthias the Apostle,</a> <i>February 24</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#annu">
                            The Annunciation,</a> <i>March 25</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#mark">
                            St. Mark the Evangelist,</a> <i>April 25</i><br/>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#phil">
                            St. Philip and St. James, Apostles,</a> <i>May 1</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#barn">
                            St. Barnabas the Apostle,</a> <i>June 11</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#jonb">
                            Saint John the Baptist,</a> <i>June 24</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#pete">
                            Saint Peter the Apostle,</a> <i>June 29</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#jame">
                            Saint James the Apostle,</a> <i>July 25</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#tran">
                            The Transfiguration of Christ,</a> <i>August 6</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#bart">
                            Saint Bartholomew the Apostle,</a> <i>August 24</i><br/>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#matt">
                            St. Matthew, Apostle and Evangelist,</a> <i>September 21</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#mich">
                            St. Michael and All Angels,</a> <i>September 29</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#luke">
                            St. Luke the Evangelist,</a> <i>October 18</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#simo">
                            St. Simon and St. Jude, Apostles,</a> <i>October 28</i><br/>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#alls">
                            All Saints,</a> <i>November 1</i><br/>
                    </div>
                    <div class="col-12 pt-2" style="border: 1px solid black;">
                        <div class="text-center">
                            <h3>
                                <b>Variable Date Holy Days</b>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;"></div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;">
                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#embr">
                            Autumnal Ember Days<br/>
                        </a>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#inde">
                            Independence Day, <i>July 4</i><br/>
                        </a>

                        &nbsp; &nbsp; &nbsp; &nbsp; <a href="#than">
                            Thanksgiving Day<br/>
                        </a>
                    </div>
                    <div class="col-lg-4 pt-2 pb-2" style="border: 1px solid black;"></div>
                </div>

                <hr>
                <blockquote>
                    <br/>
                    <br/>
                    <b>
                        <a id="adv1">&nbsp;</a><br/>
                        First Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Malachi 3:1-6, 4:4-6<br/>
                    <i>The Second Lesson:</i> St. Luke 1:5-25<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 97<br/>
                    <i>The First Lesson:</i> * Isaiah 28:14-22<br/>
                    <i>The Second Lesson:</i> Hebrews 12:14<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 3<br/>
                    <i>The First Lesson:</i> Isaiah 1:1-9<br/>
                    <i>The Second Lesson:</i> St. Mark 1:1-13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Isaiah 1:21-28<br/>
                    <i>The Second Lesson:</i> St. Mark 1:14-28<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> Isaiah 2:6-19<br/>
                    <i>The Second Lesson:</i> St. Mark 1:29-39<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 10<br/>
                    <i>The First Lesson:</i> Isaiah 4:2<br/>
                    <i>The Second Lesson:</i> St. Mark 1:40<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> Isaiah 5:8-29<br/>
                    <i>The Second Lesson:</i> St. Mark 2:1-12<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 28, Psalm 29<br/>
                    <i>The First Lesson:</i> Isaiah 7:1-9<br/>
                    <i>The Second Lesson:</i> St. Mark 2:13-22<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="adv2">&nbsp;</a><br/>
                        Second Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Isaiah 52:1-10<br/>
                    <i>The Second Lesson:</i> St. Luke 1:26-56<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:1-1-16 (Section I - II)<br/>
                    <i>The First Lesson:</i> * Isaiah 55<br/>
                    <i>The Second Lesson:</i> II Timothy 3<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Isaiah 8:5-8, 11-20<br/>
                    <i>The Second Lesson:</i> St. Mark 2:23 - 3:6<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 48<br/>
                    <i>The First Lesson:</i> Isaiah 9:18 - 10:4<br/>
                    <i>The Second Lesson:</i> St. Mark 3:7-19<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Isaiah 11:1-10<br/>
                    <i>The Second Lesson:</i> St. Mark 3:20<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 63<br/>
                    <i>The First Lesson:</i> Isaiah 13:1-5, 17-22<br/>
                    <i>The Second Lesson:</i> St. Mark 4:1-20<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Isaiah 24:16b<br/>
                    <i>The Second Lesson:</i> St. Mark 4:21-29<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Isaiah 28:1-13<br/>
                    <i>The Second Lesson:</i> St. Mark 4:30<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="adv3">&nbsp;</a><br/>
                        Third Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 22:23, Psalm 99<br/>
                    <i>The First Lesson:</i> Jeremiah 1:4-10, 17-19<br/>
                    <i>The Second Lesson:</i> St. Luke 1:57<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 85, Psalm 107:1-16<br/>
                    <i>The First Lesson:</i> * Isaiah 35<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:12-23<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 84<br/>
                    <i>The First Lesson:</i> Isaiah 29:1-4, 9-14<br/>
                    <i>The Second Lesson:</i> St. Mark 5:1-20<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Isaiah 30:8-17<br/>
                    <i>The Second Lesson:</i> St. Mark 5:21<br/>
                    *************<br/>
                    <b>Ember Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> Jeremiah 23:9-15<br/>
                    <i>The Second Lesson:</i> St. Luke 12:35-48<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 96<br/>
                    <i>The First Lesson:</i> Isaiah 32:1-4, 15-20<br/>
                    <i>The Second Lesson:</i> St. Mark 6:1-6<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Jeremiah 23:23-32<br/>
                    <i>The Second Lesson:</i> II Corinthians 5:5<br/>
                    *************<br/>
                    <b>Ember Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Malachi 2:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:35 - 10:15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="adv4">&nbsp;</a><br/>
                        Fourth Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> * Isaiah 40:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 3:1-17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 77, Psalm 100<br/>
                    <i>The First Lesson:</i> Jeremiah 33:7-16<br/>
                    <i>The Second Lesson:</i> I Thessalonians 1<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Isaiah 33:13<br/>
                    <i>The Second Lesson:</i> St. Luke 1:5-25<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 130, Psalm 131<br/>
                    <i>The First Lesson:</i> Isaiah 25:1-9<br/>
                    <i>The Second Lesson:</i> St. Luke 1:26-38<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Zechariah 8:1-8, 20-23<br/>
                    <i>The Second Lesson:</i> St. Luke 1:39-45<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> II Samuel 7:18<br/>
                    <i>The Second Lesson:</i> St. Luke 1:46-56<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> I Samuel 2:1b-10<br/>
                    <i>The Second Lesson:</i> St. Luke 1:57-66<br/>
                    *************<br/>
                    <b>Christmas Eve</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Baruch 4:36-5:9<br/>
                    <i>The Second Lesson:</i> St. Luke 1:67-80<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="chri">&nbsp;</a><br/>
                        Christmas Day<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 89:1-30<br/>
                    <i>The First Lesson:</i> Isaiah 9:2-7<br/>
                    <i>The Second Lesson:</i> St. Luke 2:1-20<br/>
                    *************<br/>
                    <b>St. Stephen the Martyr</b><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> II Chronicles 24:17-22<br/>
                    <i>The Second Lesson:</i> Acts 6<br/>
                    *************<br/>
                    <b>St. John the Evangelist</b><br/>
                    <i>The Psalter:</i> Psalm 23, Psalm 24<br/>
                    <i>The First Lesson:</i> Exodus 33:12-23<br/>
                    <i>The Second Lesson:</i> St. John 13:20-26, 31-35<br/>
                    *************<br/>
                    <b>The Holy Innocents</b><br/>
                    <i>The Psalter:</i> Psalm 8, Psalm 26<br/>
                    <i>The First Lesson:</i> Jeremiah 31:1-6, 15-16<br/>
                    <i>The Second Lesson:</i> St. Matthew 18:1-14<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="chr1">&nbsp;</a><br/>
                        First Sunday after Christmas<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> * Isaiah 9:2-7<br/>
                    <i>The Second Lesson:</i> St. Luke 2:1-20<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 98, Psalm 138<br/>
                    <i>The First Lesson:</i> Isaiah 49:8-13<br/>
                    <i>The Second Lesson:</i> Hebrews 2<br/>
                    *************<br/>
                    <b>December 29th</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Isaiah 56:1-8<br/>
                    <i>The Second Lesson:</i> I John 1:1-10<br/>
                    *************<br/>
                    <b>December 30</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Isaiah 59:1-3, 15b-21<br/>
                    <i>The Second Lesson:</i> I John 2:1-17<br/>
                    *************<br/>
                    <b>December 31</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Isaiah 62:1-12<br/>
                    <i>The Second Lesson:</i> I John 2:18-29<br/>
                    *************<br/>
                    <b>Circumcision</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Deuteronomy 30:1-10<br/>
                    <i>The Second Lesson:</i> Ephesians 2:11-22<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="chr2">&nbsp;</a><br/>
                        Second Sunday after Christmas<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 65, Psalm 121<br/>
                    <i>The First Lesson:</i> * Micah 4:1-5, 5:2-4<br/>
                    <i>The Second Lesson:</i> St. Luke 2:21-32<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 89:1-30<br/>
                    <i>The First Lesson:</i> Isaiah 44:1-8, 21-23<br/>
                    <i>The Second Lesson:</i> Colossians 2:6-17<br/>
                    *************<br/>
                    <b>January 2nd</b><br/>
                    <i>The Psalter:</i> Psalm 37:26<br/>
                    <i>The First Lesson:</i> Isaiah 63:7-14<br/>
                    <i>The Second Lesson:</i> I John 3:1-11<br/>
                    *************<br/>
                    <b>January 3rd</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Isaiah 64:4<br/>
                    <i>The Second Lesson:</i> I John 3:13<br/>
                    *************<br/>
                    <b>January 4th</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i><br/>
                    Isaiah 65:17<br/>
                    <i>The Second Lesson:</i> I John 4<br/>
                    *************<br/>
                    <b>January 5th</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Isaiah 66:18-23<br/>
                    <i>The Second Lesson:</i> I John 5<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epip">&nbsp;</a><br/>
                        Epiphany<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 46, Psalm 100<br/>
                    <i>The First Lesson:</i> Isaiah 60:1-9<br/>
                    <i>The Second Lesson:</i> II Corinthians 4:1-6<br/>
                    *************<br/>
                    <b>January 7th</b><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> Isaiah 42:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 3:13<br/>
                    *************<br/>
                    <b>January 8th</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Isaiah 45:20<br/>
                    <i>The Second Lesson:</i> St. Mark 9:2-13<br/>
                    *************<br/>
                    <b>January 9th</b><br/>
                    <i>The Psalter:</i> Psalm 22:23, Psalm 24<br/>
                    <i>The First Lesson:</i> Isaiah 49:8-13, 22-23<br/>
                    <i>The Second Lesson:</i> I John 1:1-9<br/>
                    *************<br/>
                    <b>January 10th</b><br/>
                    <i>The Psalter:</i> Psalm 67, Psalm 87<br/>
                    <i>The First Lesson:</i> Isaiah 19:19<br/>
                    <i>The Second Lesson:</i> Colossians 2:6-17<br/>
                    *************<br/>
                    <b>January 11th</b><br/>
                    <i>The Psalter:</i> Psalm 102:15<br/>
                    <i>The First Lesson:</i> Jonah 4<br/>
                    <i>The Second Lesson:</i> I Peter 1:1-9<br/>
                    *************<br/>
                    <b>January 12th</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Malachi 1:11<br/>
                    <i>The Second Lesson:</i> II Thessalonians 1<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi1">&nbsp;</a><br/>
                        First Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 72, Psalm 97<br/>
                    <i>The First Lesson:</i> Isaiah 60:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 2:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 92, Psalm 93<br/>
                    <i>The First Lesson:</i> * Proverbs 8:22-35<br/>
                    <i>The Second Lesson:</i> Colossians 1:9<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 3<br/>
                    <i>The First Lesson:</i> Proverbs 1:7-19<br/>
                    <i>The Second Lesson:</i> Ephesians 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 5<br/>
                    <i>The First Lesson:</i> Proverbs 2:1-9<br/>
                    <i>The Second Lesson:</i> Ephesians 2:1-10<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Proverbs 3:1-7, 11-12<br/>
                    <i>The Second Lesson:</i> Ephesians 2:11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> Proverbs 3:13-20<br/>
                    <i>The Second Lesson:</i> Ephesians 3:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 10<br/>
                    <i>The First Lesson:</i> Proverbs 3:27<br/>
                    <i>The Second Lesson:</i> Ephesians 3:14<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 16<br/>
                    <i>The First Lesson:</i> Proverbs 4:7-18<br/>
                    <i>The Second Lesson:</i> Ephesians 4:1-16<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi2">&nbsp;</a><br/>
                        Second Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> * Zechariah 8:1-8, 20-23<br/>
                    <i>The Second Lesson:</i> I Corinthians 12:12-31a<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 99<br/>
                    <i>The First Lesson:</i> Exodus 34:29<br/>
                    <i>The Second Lesson:</i> St. Mark 9:2-13<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 17<br/>
                    <i>The First Lesson:</i> Proverbs 4:20<br/>
                    <i>The Second Lesson:</i> Ephesians 4:17<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 23, Psalm 24<br/>
                    <i>The First Lesson:</i> Proverbs 6:12-19<br/>
                    <i>The Second Lesson:</i> Ephesians 5:1-14<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 28<br/>
                    <i>The First Lesson:</i> Proverbs 8:1-11<br/>
                    <i>The Second Lesson:</i> Ephesians 5:15<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 30<br/>
                    <i>The First Lesson:</i> Proverbs 8:12-20<br/>
                    <i>The Second Lesson:</i> Ephesians 6<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 32<br/>
                    <i>The First Lesson:</i> Proverbs 8:22-35<br/>
                    <i>The Second Lesson:</i> Philippians 1:1-11<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 36<br/>
                    <i>The First Lesson:</i> Proverbs 9:1-6, 13-18<br/>
                    <i>The Second Lesson:</i> Philippians 1:12-26<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi3">&nbsp;</a><br/>
                        Third Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> * Isaiah 41:8-10, 17-20<br/>
                    <i>The Second Lesson:</i> St. John 4:1-14<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Deuteronomy 16:18-20, 17:8-11<br/>
                    <i>The Second Lesson:</i> James 2:1-13<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Proverbs 10:12-14, 18-21<br/>
                    <i>The Second Lesson:</i> Philippians 1:27-2:11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 41<br/>
                    <i>The First Lesson:</i> Proverbs 10:22-29<br/>
                    <i>The Second Lesson:</i> Philippians 2:12-18<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 44<br/>
                    <i>The First Lesson:</i> Proverbs 11:9-14, 24-30<br/>
                    <i>The Second Lesson:</i> Philippians 2:19<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 45<br/>
                    <i>The First Lesson:</i> Proverbs 14:26<br/>
                    <i>The Second Lesson:</i> Philippians 3:1-16<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Proverbs 15:16-23, 27-29<br/>
                    <i>The Second Lesson:</i> Philippians 3:17-4:3<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 55<br/>
                    <i>The First Lesson:</i> Proverbs 16:25<br/>
                    <i>The Second Lesson:</i> Philippians 4:4<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi4">&nbsp;</a><br/>
                        Fourth Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    The Psalter, Psalm 66<br/>
                    <i>The First Lesson:</i> Isaiah 61<br/>
                    <i>The Second Lesson:</i> St. Luke 4:16-32<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> * Deuteronomy 4:5-13, 32-40<br/>
                    <i>The Second Lesson:</i> Ephesians 2<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 56, Psalm 60:1-5<br/>
                    <i>The First Lesson:</i> Proverbs 20:9-12, 17-22<br/>
                    <i>The Second Lesson:</i> Colossians 1:1-17<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 61, Psalm 62<br/>
                    <i>The First Lesson:</i> Proverbs 21:21<br/>
                    <i>The Second Lesson:</i> Colossians 1:18 - 2:5<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 63, Psalm 64<br/>
                    <i>The First Lesson:</i> Proverbs 22:1-6, 17-25<br/>
                    <i>The Second Lesson:</i> Colossians 2:6-19<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 68:1-19<br/>
                    <i>The First Lesson:</i> Proverbs 23:20-21, 29-35<br/>
                    <i>The Second Lesson:</i> Colossians 2:20 - 3:11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 69:1-22, 30-37<br/>
                    <i>The First Lesson:</i> Proverbs 24:23<br/>
                    <i>The Second Lesson:</i> Colossians 3:12-17<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Proverbs 25:11-15, 17-22<br/>
                    <i>The Second Lesson:</i> Colossians 3:18 - 4:6<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi5">&nbsp;</a><br/>
                        Fifth Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 85<br/>
                    <i>The First Lesson:</i> Ruth 1:1-17<br/>
                    <i>The Second Lesson:</i> Colossians 3:5-11<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> * Habakkuk 1:12 - 2:4, 9-14<br/>
                    <i>The Second Lesson:</i> St. Luke 12:35-48<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 79<br/>
                    <i>The First Lesson:</i> Proverbs 26:17<br/>
                    <i>The Second Lesson:</i> I Peter 1:1-12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 82, Psalm 101<br/>
                    <i>The First Lesson:</i> Proverbs 27:1-6, 10-12<br/>
                    <i>The Second Lesson:</i> I Peter 1:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> Proverbs 28:1-13<br/>
                    <i>The Second Lesson:</i> I Peter 2:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Proverbs 29:11-25<br/>
                    <i>The Second Lesson:</i> I Peter 2:11-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Proverbs 30:4-9<br/>
                    <i>The Second Lesson:</i> I Peter 2:18<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 97<br/>
                    <i>The First Lesson:</i> Proverbs 31:10<br/>
                    <i>The Second Lesson:</i> I Peter 3:1-12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi6">&nbsp;</a><br/>
                        Sixth Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 138<br/>
                    <i>The First Lesson:</i> Isaiah 2:6-19<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:14-29<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 98<br/>
                    <i>The First Lesson:</i> * Isaiah 66:1-2, 10, 12-16, 18-23<br/>
                    <i>The Second Lesson:</i> II Thessalonians 1<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 99, Psalm 100<br/>
                    <i>The First Lesson:</i> Lamentations 1:1-6<br/>
                    <i>The Second Lesson:</i> I Peter 3:13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 107:1-16<br/>
                    <i>The First Lesson:</i> Lamentations 1:1-15<br/>
                    <i>The Second Lesson:</i> I Peter 4:1-6<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 112<br/>
                    <i>The First Lesson:</i> Lamentations 2:1-10<br/>
                    <i>The Second Lesson:</i> I Peter 4:7-11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Lamentations 4:1-6, 9<br/>
                    <i>The Second Lesson:</i> I Peter 4:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 106<br/>
                    <i>The First Lesson:</i> Lamentations 4:11-20<br/>
                    <i>The Second Lesson:</i> I Peter 5:1-7<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Lamentations 5<br/>
                    <i>The Second Lesson:</i> I Peter 5:8<br/>
                    *************<br/>


                    <hr>
                    <br/>
                    <b>
                        <a id="sept">&nbsp;</a><br/>
                        Septuagesima<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 121<br/>
                    <i>The First Lesson:</i> * Joshua 1:1-9<br/>
                    <i>The Second Lesson:</i> II Timothy 2:1-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 1 &amp; Psalm 18:21-35, or Psalm 1 &amp; Psalm 125<br/>
                    <i>The First Lesson:</i> Ezekiel 3:4-11<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:1-16<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 123, Psalm 127<br/>
                    <i>The First Lesson:</i> Genesis 1:1-19<br/>
                    <i>The Second Lesson:</i> St. Mark 6:7-13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 135<br/>
                    <i>The First Lesson:</i> Genesis 1:20-2:3<br/>
                    <i>The Second Lesson:</i> St. Mark 6:14-29<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 137:1-6, Psalm 140<br/>
                    <i>The First Lesson:</i> Genesis 2:4-9, 16-25<br/>
                    <i>The Second Lesson:</i> St. Mark 6:30-44<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 141<br/>
                    <i>The First Lesson:</i> Genesis 3<br/>
                    <i>The Second Lesson:</i> St. Mark 6:45<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 143<br/>
                    <i>The First Lesson:</i> Genesis 4:1-16<br/>
                    <i>The Second Lesson:</i> St. Mark 7:1-13<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 149<br/>
                    <i>The First Lesson:</i> Genesis 6:5-8, 13-22<br/>
                    <i>The Second Lesson:</i> St. Mark 7:14-23<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="sexa">&nbsp;</a><br/>
                        Sexagesima<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> * Isaiah 50:4-10<br/>
                    <i>The Second Lesson:</i> II Corinthians 12:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Isaiah 30:8-21<br/>
                    <i>The Second Lesson:</i> St. Mark 4:26-34<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 2, Psalm 3<br/>
                    <i>The First Lesson:</i> Genesis 7:1, 7-10, 17-23<br/>
                    <i>The Second Lesson:</i> St. Mark 7:24<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 5<br/>
                    <i>The First Lesson:</i> Genesis 8:6<br/>
                    <i>The Second Lesson:</i> St. Mark 8:11-26<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Genesis 9:8-17<br/>
                    <i>The Second Lesson:</i> St. Mark 8:27-9:1<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> Genesis 11:1-9<br/>
                    <i>The Second Lesson:</i> St. Mark 9:2-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> Genesis 11:27-12:8<br/>
                    <i>The Second Lesson:</i> St. Mark 9:14-29<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 16<br/>
                    <i>The First Lesson:</i> Genesis 13:2, 5-18<br/>
                    <i>The Second Lesson:</i> St. Mark 9:30-37<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="quin">&nbsp;</a><br/>
                        Quinquagesima<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Wisdom 7:7-14<br/>
                    <i>The Second Lesson:</i> St. John 15:1-17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 23<br/>
                    <i>The First Lesson:</i> * Deuteronomy 10:12-15, 17-11:1<br/>
                    <i>The Second Lesson:</i> I John 2:1-17<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Genesis 18:1-16<br/>
                    <i>The Second Lesson:</i> St. Mark 9:38<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 18:21-36<br/>
                    <i>The First Lesson:</i> Genesis 18:20<br/>
                    <i>The Second Lesson:</i> St. Mark 10:1-16<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="ashw">&nbsp;</a><br/>
                        Ash Wednesday<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 32, Psalm 143<br/>
                    <i>The First Lesson:</i> Isaiah 58:1-12<br/>
                    <i>The Second Lesson:</i> Hebrews 12:1-14<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Genesis 19:1-3, 12-17, 24-28<br/>
                    <i>The Second Lesson:</i> I Corinthians 1:1-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 95, Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Genesis 21:9-21<br/>
                    <i>The Second Lesson:</i> I Corinthians 1:18<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 28<br/>
                    <i>The First Lesson:</i> Genesis 22:1-14, 19<br/>
                    <i>The Second Lesson:</i> I Corinthians 2<br/>
                    *************<br/>


                    <hr>
                    <br/>
                    <b>
                        <a id="len1">&nbsp;</a><br/>
                        First Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> * Isaiah 58<br/>
                    <i>The Second Lesson:</i> St. Matthew 6:1-18<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 3, Psalm 62<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 2<br/>
                    <i>The Second Lesson:</i> Romans 7:14<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 36<br/>
                    <i>The First Lesson:</i> Genesis 24:1-27<br/>
                    <i>The Second Lesson:</i> I Corinthians 3:1-17<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 37:1-24<br/>
                    <i>The First Lesson:</i> Genesis 24:28-38, 49-51, 58-67<br/>
                    <i>The Second Lesson:</i> I Corinthians 3:18-4:5<br/>
                    *************<br/>
                    <b>Ember Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 26<br/>
                    <i>The First Lesson:</i> Ezekiel 2<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:1-13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 37:26<br/>
                    <i>The First Lesson:</i> Genesis 25:28<br/>
                    <i>The Second Lesson:</i> I Corinthians 4:6<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 95, Psalm 84<br/>
                    <i>The First Lesson:</i> Ezekiel 34:1-16<br/>
                    <i>The Second Lesson:</i> St. Matthew 10:24-33, 37-42<br/>
                    *************<br/>
                    <b>Ember Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 101<br/>
                    <i>The First Lesson:</i> Ezekiel 34:17-25, 30-31<br/>
                    <i>The Second Lesson:</i> II Timothy 2:1-15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len2">&nbsp;</a><br/>
                        Second Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 86, Psalm 142<br/>
                    <i>The First Lesson:</i> * I Kings 8:37-43<br/>
                    <i>The Second Lesson:</i> Colossians 3:12-17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 32<br/>
                    <i>The First Lesson:</i> Ezekiel 18:1-4, 25-32<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:27-37<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Genesis 27:1-29<br/>
                    <i>The Second Lesson:</i> I Corinthians 5<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 41<br/>
                    <i>The First Lesson:</i> Genesis 27:30-40<br/>
                    <i>The Second Lesson:</i> I Corinthians 6:1-11<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 56<br/>
                    <i>The First Lesson:</i> Genesis 27:46 - 28:4, 10-22<br/>
                    <i>The Second Lesson:</i> I Corinthians 6:12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 62<br/>
                    <i>The First Lesson:</i> Genesis 29:1-13, 18-20<br/>
                    <i>The Second Lesson:</i> I Corinthians 7:1-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 95, Psalm 54, Psalm 61<br/>
                    <i>The First Lesson:</i> Genesis 32:22-31<br/>
                    <i>The Second Lesson:</i> I Corinthians 8<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 63<br/>
                    <i>The First Lesson:</i> Genesis 35:1-7, 16-20<br/>
                    <i>The Second Lesson:</i> I Corinthians 9:1-14<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len3">&nbsp;</a><br/>
                        Third Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> * Deuteronomy 6:1-9, 20-25<br/>
                    <i>The Second Lesson:</i> I Corinthians 3<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Zechariah 1:1-6, 12-17<br/>
                    <i>The Second Lesson:</i> St. Mark 8:27 - 9:1<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 68:1-19<br/>
                    <i>The First Lesson:</i> Genesis 37:3-28, 36<br/>
                    <i>The Second Lesson:</i> I Corinthians 9:15<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 74<br/>
                    <i>The First Lesson:</i> Genesis 40<br/>
                    <i>The Second Lesson:</i> I Corinthians 10:1-13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 76<br/>
                    <i>The First Lesson:</i> Genesis 41:1a, 8,14-24<br/>
                    <i>The Second Lesson:</i> I Corinthians 10:14-22<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> Genesis 41:25-40<br/>
                    <i>The Second Lesson:</i> I Corinthians 10:23 - 11:1<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    The Psalter, Psalm 95, Psalm 79<br/>
                    <i>The First Lesson:</i> Genesis 42:1-26, 29a, 35-38<br/>
                    <i>The Second Lesson:</i> I Corinthians 11:17<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Genesis 43:1-5, 11-16, 26-34<br/>
                    <i>The Second Lesson:</i> I Corinthians 12:1-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len4">&nbsp;</a><br/>
                        Fourth Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Exodus 16:4-15<br/>
                    <i>The Second Lesson:</i> St. John 6:27-40<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> * Ezekiel 39:21<br/>
                    <i>The Second Lesson:</i> II Corinthians 3:12<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Genesis 44<br/>
                    <i>The Second Lesson:</i> I Corinthians 12:12-31<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 96<br/>
                    <i>The First Lesson:</i> Genesis 45<br/>
                    <i>The Second Lesson:</i> I Corinthians 12:31b - 13:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> Genesis 47:29-31, 48:8-20<br/>
                    <i>The Second Lesson:</i> I Corinthians 14:1-12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Genesis 49:33-50:26<br/>
                    <i>The Second Lesson:</i> I Corinthians 14:13-25<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 95, Psalm 102<br/>
                    <i>The First Lesson:</i> Exodus 1:8-14, 22<br/>
                    <i>The Second Lesson:</i> I Corinthians 14:26<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 108:1-6, Psalm 112<br/>
                    <i>The First Lesson:</i> Exodus 2:1-22<br/>
                    <i>The Second Lesson:</i> I Corinthians 15:1-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len5">&nbsp;</a><br/>
                        Passion Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> * Isaiah 1:10-20<br/>
                    <i>The Second Lesson:</i> I Peter 4:12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Deuteronomy 18:15<br/>
                    <i>The Second Lesson:</i> St. Luke 20:9-18<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 119:1-16 (Section I - II)<br/>
                    <i>The First Lesson:</i> Exodus 3:1-15<br/>
                    <i>The Second Lesson:</i> I Corinthians 15:12-19<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 123, Psalm 127<br/>
                    <i>The First Lesson:</i> Exodus 4:10-18, 27-31<br/>
                    <i>The Second Lesson:</i> I Corinthians 15:20-34<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 128, Psalm 129<br/>
                    <i>The First Lesson:</i> Exodus 5:1-9, 19 - 6:1<br/>
                    <i>The Second Lesson:</i> I Corinthians 15:35-49<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Exodus 11:1-8<br/>
                    <i>The Second Lesson:</i> I Corinthians 15:50<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 95, Psalm 141:1-4, Psalm 146<br/>
                    <i>The First Lesson:</i> Exodus 12:21-28<br/>
                    <i>The Second Lesson:</i> I Corinthians 16:1-14<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Exodus 12:29-39, 42<br/>
                    <i>The Second Lesson:</i> I Corinthians 16:15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len6">&nbsp;</a><br/>
                        Palm Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 24, Psalm 97<br/>
                    <i>The First Lesson:</i> * Zechariah 9:9-12<br/>
                    <i>The Second Lesson:</i> St. Mark 11:1-11<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> Isaiah 52:13-53:12<br/>
                    <i>The Second Lesson:</i> St. Matthew 26<br/>
                    *************<br/>
                    <b>Monday before Easter</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Isaiah 42:1-7<br/>
                    <i>The Second Lesson:</i> St. John 14:1-14<br/>
                    *************<br/>
                    <b>Tuesday before Easter</b><br/>
                    <i>The Psalter:</i> Psalm 6, Psalm 12<br/>
                    <i>The First Lesson:</i> Hosea 14<br/>
                    <i>The Second Lesson:</i> St. John 15:1-16<br/>
                    *************<br/>
                    <b>Wednesday before Easter</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> Zechariah 12:9-10, 13:1, 7-9<br/>
                    <i>The Second Lesson:</i> St. John 16:1-15<br/>
                    *************<br/>
                    <b>Maundy Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Jeremiah 31:31-34<br/>
                    <i>The Second Lesson:</i> St. John 13:18<br/>
                    *************<br/>
                    <b>Good Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22, Psalm 40:1-16, Psalm 54<br/>
                    <i>The First Lesson:</i> Genesis 22:1-18<br/>
                    <i>The First Lesson:</i> Wisdom 2:1, 12-24<br/>
                    <i>The Second Lesson:</i> St. John 18<br/>
                    *************<br/>
                    <b>Easter Even</b><br/>
                    <i>The Psalter:</i> Psalm 14, Psalm 16<br/>
                    <i>The First Lesson:</i> Job 14:1-14<br/>
                    <i>The Second Lesson:</i> St. John 19:38<br/>
                    <i>The Second Lesson:</i> Hebrews 4<br/>
                    *************<br/>


                    <hr>
                    <br/>
                    <b>
                        <a id="east">&nbsp;</a><br/>
                        Easter Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 111<br/>
                    <i>The First Lesson:</i> * Isaiah 25:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 28:1-10, 16-20<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    The Psalter, Psalm 57<br/>
                    <i>The First Lesson:</i> Exodus 12:1-14<br/>
                    <i>The Second Lesson:</i> Revelation 14:1-7, 12-13<br/>
                    *************<br/>
                    <b>Easter Monday</b><br/>
                    <i>The Psalter:</i> Psalm 2<br/>
                    <i>The First Lesson:</i> Isaiah 61:1-3, 10-11<br/>
                    <i>The Second Lesson:</i> St. Luke 24:1-12<br/>
                    *************<br/>
                    <b>Easter Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 30<br/>
                    <i>The First Lesson:</i> Daniel 12:1-4, 13<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 99<br/>
                    <i>The First Lesson:</i> Micah 7:7-9, 18-20<br/>
                    <i>The Second Lesson:</i> I Timothy 6:11-19<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 149, Psalm 150<br/>
                    <i>The First Lesson:</i> Ezekiel 37:1-14<br/>
                    <i>The Second Lesson:</i> Philippians 3:7<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 124, Psalm 125, Psalm 126<br/>
                    <i>The First Lesson:</i> Isaiah 65:17<br/>
                    <i>The Second Lesson:</i> Revelation 1:4-18<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Isaiah 25:1-9<br/>
                    <i>The Second Lesson:</i> Revelation 7:9<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est1">&nbsp;</a><br/>
                        First Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Wisdom 2:23 - 3:9<br/>
                    <i>The Second Lesson:</i> Romans 1:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> * Isaiah 43:1-12<br/>
                    <i>The Second Lesson:</i> St. Luke 24:36-49<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 3<br/>
                    <i>The First Lesson:</i> Exodus 13:3-16<br/>
                    <i>The Second Lesson:</i> Hebrews 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 5<br/>
                    <i>The First Lesson:</i> Exodus 13:17 - 14:4<br/>
                    <i>The Second Lesson:</i> Hebrews 2:1-8<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 22:23<br/>
                    <i>The First Lesson:</i> Exodus 14:5-14, 19-21, 24-28, 30<br/>
                    <i>The Second Lesson:</i> Hebrews 2:1-8<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 28<br/>
                    <i>The First Lesson:</i> Exodus 15:20<br/>
                    <i>The Second Lesson:</i> Hebrews 3<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Exodus 16:1-7, 13b-15<br/>
                    <i>The Second Lesson:</i> Hebrews 4:1-13<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Exodus 17:1-7<br/>
                    <i>The Second Lesson:</i> Hebrews 4:14 -5:14<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est2">&nbsp;</a><br/>
                        Second Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 23, Psalm 146<br/>
                    <i>The First Lesson:</i> * Isaiah 40:1-11<br/>
                    <i>The Second Lesson:</i> St. John 10:1-10<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Baruch 4:21-30<br/>
                    <i>The Second Lesson:</i> Philippians 3:7-16<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Exodus 17:8<br/>
                    <i>The Second Lesson:</i> Hebrews 6:1-12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Exodus 18:1-12<br/>
                    <i>The Second Lesson:</i> Hebrews 6:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 63<br/>
                    <i>The First Lesson:</i> Exodus 18:13<br/>
                    <i>The Second Lesson:</i> Hebrews 7:1-11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Exodus 19:1-7, 16-20<br/>
                    <i>The Second Lesson:</i> Hebrews 7:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Exodus 20:1-21<br/>
                    <i>The Second Lesson:</i> Hebrews 8<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Exodus 24:1-11, 16-18<br/>
                    <i>The Second Lesson:</i> Hebrews 9:1-14<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est3">&nbsp;</a><br/>
                        Third Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 36:5, Psalm 138<br/>
                    <i>The First Lesson:</i> II Samuel 12:15b - 23<br/>
                    <i>The Second Lesson:</i> St. John 14:1-14<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 113, Psalm 124<br/>
                    <i>The First Lesson:</i> * I Samuel 2:1b - 10<br/>
                    <i>The Second Lesson:</i> Acts 2:22-36<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> Exodus 25:1-11, 17-22<br/>
                    <i>The Second Lesson:</i> Hebrews 9:15<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> Exodus 28:1-4, 29-38<br/>
                    <i>The Second Lesson:</i> Hebrews 10:1-14<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Exodus 32:1-7, 15-20<br/>
                    <i>The Second Lesson:</i> Hebrews 10:15-25<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Exodus 32:21-24, 30-34<br/>
                    <i>The Second Lesson:</i> Hebrews 10:26<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> Exodus 33:7<br/>
                    <i>The Second Lesson:</i> Hebrews 11:1-16<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 99, Psalm 100<br/>
                    <i>The First Lesson:</i> Exodus 34:1-10, 29-35<br/>
                    <i>The Second Lesson:</i> Hebrews 11:17-31<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est4">&nbsp;</a><br/>
                        Fourth Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> * Job 19:21-27a<br/>
                    <i>The Second Lesson:</i> St. John 12:44<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 107:1-16<br/>
                    <i>The First Lesson:</i> Ezekiel 37:1-14<br/>
                    <i>The Second Lesson:</i> Acts 3:1-21<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 110, Psalm 114<br/>
                    <i>The First Lesson:</i> Numbers 10:29<br/>
                    <i>The Second Lesson:</i> Hebrews 11:32<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 124, Psalm 126<br/>
                    <i>The First Lesson:</i> Numbers 11:4-6, 10-15, 23, 31-32<br/>
                    <i>The Second Lesson:</i> Hebrews 12:1-17<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 128, Psalm 129<br/>
                    <i>The First Lesson:</i> Numbers 12<br/>
                    <i>The Second Lesson:</i> Hebrews 12:18<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Numbers 13:17-26, 30-33<br/>
                    <i>The Second Lesson:</i> Hebrews 13:1-8<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 143<br/>
                    <i>The First Lesson:</i> Numbers 14:1-10<br/>
                    <i>The Second Lesson:</i> Hebrews 13:9-16<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 146, Psalm 149<br/>
                    <i>The First Lesson:</i> Numbers 14:11-25<br/>
                    <i>The Second Lesson:</i> Hebrews 13:17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est5">&nbsp;</a><br/>
                        Rogation Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 65, Psalm 67<br/>
                    <i>The First Lesson:</i> * Ezekiel 34:25<br/>
                    <i>The Second Lesson:</i> St. Luke 11:1-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> II Esdras 14:27-35<br/>
                    <i>The Second Lesson:</i> Acts 4:1-13, 33<br/>
                    *************<br/>
                    <b>Rogation Monday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Deuteronomy 8:1-11, 17-20<br/>
                    <i>The Second Lesson:</i> St. Matthew 6:5-15<br/>
                    *************<br/>
                    <b>Rogation Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Deuteronomy 11:10-17<br/>
                    <i>The Second Lesson:</i> St. Matthew 6:24<br/>
                    *************<br/>
                    <b>Rogation Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Jeremiah 14:1-9<br/>
                    <i>The Second Lesson:</i> I John 5:5-15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="asce">&nbsp;</a><br/>
                        Ascension Day<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 96<br/>
                    <i>The First Lesson:</i> Daniel 7:9-10, 13-14<br/>
                    <i>The Second Lesson:</i> Ephesians 4:1-16<br/>
                    *************<br/>
                    <b>Ascension Friday</b><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 108:1-5<br/>
                    <i>The First Lesson:</i> Micah 4:1-7<br/>
                    <i>The Second Lesson:</i> Romans 8:31<br/>
                    *************<br/>
                    <b>Ascension Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 45<br/>
                    <i>The First Lesson:</i> Genesis 49:1-2, 8-10<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="ascs">&nbsp;</a><br/>
                        Sunday After Ascension<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 21:1-6, Psalm 24<br/>
                    <i>The First Lesson:</i> * Isaiah 33:5-6, 17, 20-22<br/>
                    <i>The Second Lesson:</i> St. John 17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    Psalm 8, Psalm 108:1-5<br/>
                    <i>The First Lesson:</i> Isaiah 4:2<br/>
                    <i>The Second Lesson:</i> Hebrews 4:14 - 5:10<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    Psalm 72<br/>
                    <i>The First Lesson:</i> Isaiah 65:17<br/>
                    <i>The Second Lesson:</i> Revelation 21:1-14, 21-27<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 2<br/>
                    <i>The First Lesson:</i> I Samuel 2:1b-10<br/>
                    <i>The Second Lesson:</i> Revelation 5<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> II Samuel 7:18<br/>
                    <i>The Second Lesson:</i> Revelation 11:15<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 21:1-6, Psalm 23<br/>
                    <i>The First Lesson:</i> Isaiah 4:2<br/>
                    <i>The Second Lesson:</i> Revelation 19:11-16<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> II Kings 2:1-15<br/>
                    <i>The Second Lesson:</i> Revelation 21:1-8<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Isaiah 35<br/>
                    <i>The Second Lesson:</i> Revelation 21:9<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 81<br/>
                    <i>The First Lesson:</i> Zechariah 8:1-8, 20-23<br/>
                    <i>The Second Lesson:</i> Revelation 22:1-17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="whit">&nbsp;</a><br/>
                        Whitsunday (Pentecost)<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 68, Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Wisdom 1:1-7<br/>
                    <i>The Second Lesson:</i> St. John 4:19-26<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> * Joel 2:28<br/>
                    <i>The Second Lesson:</i> Romans 8:1-11<br/>
                    *************<br/>
                    <b>Whit Monday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Wisdom 9:1-6<br/>
                    <i>The Second Lesson:</i> I Corinthians 3:9-17<br/>
                    *************<br/>
                    <b>Whitsun Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 148<br/>
                    <i>The First Lesson:</i> Ezekiel 36:22-28<br/>
                    <i>The Second Lesson:</i> I Corinthians 12:1-13<br/>
                    *************<br/>
                    <b>Ember Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 39:1-8<br/>
                    <i>The Second Lesson:</i> I Corinthians 2<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 48<br/>
                    <i>The First Lesson:</i> Isaiah 44:1-8, 21-23<br/>
                    <i>The Second Lesson:</i> Galatians 5:16-25<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 122, Psalm 125<br/>
                    <i>The First Lesson:</i> Isaiah 61:1-9<br/>
                    <i>The Second Lesson:</i> II Corinthians 3<br/>
                    *************<br/>
                    <b>Ember Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 19<br/>
                    <i>The First Lesson:</i> Micah 3:5-8<br/>
                    <i>The Second Lesson:</i> II Timothy 1:1-14<br/>
                    *************<br/>


                    <hr>
                    <br/>
                    <b>
                        <a id="trin">&nbsp;</a><br/>
                        Trinity Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 99<br/>
                    <i>The First Lesson:</i> * Isaiah 6:1-8<br/>
                    <i>The Second Lesson:</i> I Peter 1:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Genesis 1:1 - 2:3<br/>
                    <i>The Second Lesson:</i> St. John 1:1-18<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 2, Psalm 3<br/>
                    <i>The First Lesson:</i> Numbers 16:1-14<br/>
                    <i>The Second Lesson:</i> St. Luke 1:1-25<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 5<br/>
                    <i>The First Lesson:</i> Numbers 16:15-35<br/>
                    <i>The Second Lesson:</i> St. Luke 1:26-38<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Numbers 17:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 1:39-56<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> Numbers 20:1-13<br/>
                    <i>The Second Lesson:</i> St. Luke 1:57-66<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 10<br/>
                    <i>The First Lesson:</i> Numbers 20:14<br/>
                    <i>The Second Lesson:</i> St. Luke 1:67<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 13, Psalm 14<br/>
                    <i>The First Lesson:</i> Numbers 21:4-9<br/>
                    <i>The Second Lesson:</i> St. Luke 2:1-20<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn1">&nbsp;</a><br/>
                        First Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> * Jeremiah 23:23-32<br/>
                    <i>The Second Lesson:</i> St. Matthew 7:13-14, 21-29<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Isaiah 5:8-12, 18-24<br/>
                    <i>The Second Lesson:</i> James 5<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Genesis 3<br/>
                    <i>The Second Lesson:</i> Romans 5<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 28<br/>
                    <i>The First Lesson:</i> Numbers 22:2-14<br/>
                    <i>The Second Lesson:</i> St. Luke 2:21-40<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 32<br/>
                    <i>The First Lesson:</i> Numbers 22:15-21, 36-40<br/>
                    <i>The Second Lesson:</i> St. Luke 2:41<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 37:1-24<br/>
                    <i>The First Lesson:</i> Numbers 22:41 - 23:12<br/>
                    <i>The Second Lesson:</i> St. Luke 3:1-22<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 37:26<br/>
                    <i>The First Lesson:</i> Numbers 23:13-26<br/>
                    <i>The Second Lesson:</i> St. Luke 4:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Numbers 23:27 - 24:13, 25<br/>
                    <i>The Second Lesson:</i> St. Luke 4:14-30<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 44<br/>
                    <i>The First Lesson:</i> Deuteronomy 34<br/>
                    <i>The Second Lesson:</i> St. Luke 4:31-41<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn2">&nbsp;</a><br/>
                        Second Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 19<br/>
                    <i>The First Lesson:</i> Job 31:13-28<br/>
                    <i>The Second Lesson:</i> I Corinthians 13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 76, Psalm 125<br/>
                    <i>The First Lesson:</i> * Deuteronomy 20:1-9<br/>
                    <i>The Second Lesson:</i> St. Luke 9:57<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Genesis 6:5-8, 13-22<br/>
                    <i>The Second Lesson:</i> St. Matthew 24:32-42<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 48<br/>
                    <i>The First Lesson:</i> Joshua 1<br/>
                    <i>The Second Lesson:</i> St. Luke 4:42 - 5:11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Joshua 3:1-6, 13-17<br/>
                    <i>The Second Lesson:</i> St. Luke 5:12-26<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 57<br/>
                    <i>The First Lesson:</i> Joshua 4:1-8<br/>
                    <i>The Second Lesson:</i> St. Luke 5:27<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 63<br/>
                    <i>The First Lesson:</i> Joshua 6:1-7, 11, 14-20<br/>
                    <i>The Second Lesson:</i> St. Luke 6:1-11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Joshua 14:6<br/>
                    <i>The Second Lesson:</i> St. Luke 6:12-26<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Joshua 23:1-3, 11-16<br/>
                    <i>The Second Lesson:</i> St. Luke 6:27-38<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn3">&nbsp;</a><br/>
                        Third Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> * Jeremiah 31:1-14<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:9-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Proverbs 16:18-24, 32<br/>
                    <i>The Second Lesson:</i> Philippians 1:27 - 2:4<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Genesis 9:1-17<br/>
                    <i>The Second Lesson:</i> I Peter 3:17 - 4:6<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> Judges 5:1-18<br/>
                    <i>The Second Lesson:</i> St. Luke 6:39<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Judges 5:19<br/>
                    <i>The Second Lesson:</i> St. Luke 7:1-10<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Judges 6:1, 11-16, 33-35<br/>
                    <i>The Second Lesson:</i> St. Luke 7:11-17<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> Judges 7:1-8<br/>
                    <i>The Second Lesson:</i> St. Luke 7:18-35<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 102<br/>
                    <i>The First Lesson:</i> Judges 7:16<br/>
                    <i>The Second Lesson:</i> St. Luke 7:36<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 107:1-16<br/>
                    <i>The First Lesson:</i> Judges 10:17, 11:29-40<br/>
                    <i>The Second Lesson:</i> St. Luke 8:1-15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn4">&nbsp;</a><br/>
                        Fourth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> * Lamentations 3:22-33<br/>
                    <i>The Second Lesson:</i> St. Matthew 10:24-39<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 82<br/>
                    <i>The First Lesson:</i> Deuteronomy 32:1-4, 34-39<br/>
                    <i>The Second Lesson:</i> Romans 2:1-16<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 22:23, Psalm 67<br/>
                    <i>The First Lesson:</i> Genesis 12:1-9<br/>
                    <i>The Second Lesson:</i> Galatians 3:1-9<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 119:49-64 (Section VII - VI)<br/>
                    <i>The First Lesson:</i> Judges 13:2-14, 24<br/>
                    <i>The Second Lesson:</i> St. Luke 8:16-25<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 123, Psalm 124<br/>
                    <i>The First Lesson:</i> Judges 16:4-14<br/>
                    <i>The Second Lesson:</i> St. Luke 8:26-39<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 125, Psalm 138<br/>
                    <i>The First Lesson:</i> Judges 16:15-22<br/>
                    <i>The Second Lesson:</i> St. Luke 8:40<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 136<br/>
                    <i>The First Lesson:</i> Judges 16:23<br/>
                    <i>The Second Lesson:</i> St. Luke 9:1-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 142, Psalm 143<br/>
                    <i>The First Lesson:</i> Ruth 1:1-14<br/>
                    <i>The Second Lesson:</i> St. Luke 9:18-27<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Ruth 1:15<br/>
                    <i>The Second Lesson:</i> St. Luke 9:28-45<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn5">&nbsp;</a><br/>
                        Fifth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 63<br/>
                    <i>The First Lesson:</i> * Ecclesiastes 2:1-11, 18-23<br/>
                    <i>The Second Lesson:</i> St. Matthew 19:16<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Proverbs 15:1-10, 26<br/>
                    <i>The Second Lesson:</i> James 3<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 121<br/>
                    <i>The First Lesson:</i> Genesis 17:1-8<br/>
                    <i>The Second Lesson:</i> Hebrews 11:1-16<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Ruth 2:1-13<br/>
                    <i>The Second Lesson:</i> St. Luke 9:46<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 17<br/>
                    <i>The First Lesson:</i> Ruth 2:14<br/>
                    <i>The Second Lesson:</i> St. Luke 10:1-24<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 21:1-6<br/>
                    <i>The First Lesson:</i> Ruth 3:1-13<br/>
                    <i>The Second Lesson:</i> St. Luke 10:25-37<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Ruth 4:1-8<br/>
                    <i>The Second Lesson:</i> St. Luke 10:38 - 11:13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 26<br/>
                    <i>The First Lesson:</i> Ruth 4:9-17<br/>
                    <i>The Second Lesson:</i> St. Luke 11:14-28<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 28<br/>
                    <i>The First Lesson:</i> I Samuel 1:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 11:29-36<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn6">&nbsp;</a><br/>
                        Sixth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    The Psalter, Psalm 85<br/>
                    <i>The First Lesson:</i> II Samuel 19:16-23<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:38<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 16, Psalm 111<br/>
                    <i>The First Lesson:</i> * Isaiah 57:13b-19<br/>
                    <i>The Second Lesson:</i> II Timothy 2:7-13<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Genesis 18:1-16<br/>
                    <i>The Second Lesson:</i> Romans 4:13<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> I Samuel 1:12-20<br/>
                    <i>The Second Lesson:</i> St. Luke 11:37<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 45<br/>
                    <i>The First Lesson:</i> I Samuel 1:21-28, 2:11<br/>
                    <i>The Second Lesson:</i> St. Luke 12:1-12<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 56<br/>
                    <i>The First Lesson:</i> I Samuel 2:18-26<br/>
                    <i>The Second Lesson:</i> St. Luke 12:13-21<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> I Samuel 3:1-18<br/>
                    <i>The Second Lesson:</i> St. Luke 12:22-34<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 69:1-22, 30-37<br/>
                    <i>The First Lesson:</i> I Samuel 4:1b-11<br/>
                    <i>The Second Lesson:</i> St. Luke 12:35-48<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> I Samuel 4:12<br/>
                    <i>The Second Lesson:</i> St. Luke 12:49<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn7">&nbsp;</a><br/>
                        Seventh Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> * Hosea 14<br/>
                    <i>The Second Lesson:</i> Romans 6:12-18<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 133, Psalm 134, Psalm 138<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 6:5-17<br/>
                    <i>The Second Lesson:</i> St. John 15:12<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Genesis 22:1-18<br/>
                    <i>The Second Lesson:</i> Hebrews 6<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 76<br/>
                    <i>The First Lesson:</i> I Samuel 8:4<br/>
                    <i>The Second Lesson:</i> St. Luke 13:1-9<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> I Samuel 9:1-10<br/>
                    <i>The Second Lesson:</i> St. Luke 13:10-21<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> I Samuel 9:11-21<br/>
                    <i>The Second Lesson:</i> St. Luke 13:22<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> I Samuel 9:22<br/>
                    <i>The Second Lesson:</i> St. Luke 14:1-14<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> I Samuel 10:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 14:15-24<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> I Samuel 10:17<br/>
                    <i>The Second Lesson:</i> St. Luke 14:25<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn8">&nbsp;</a><br/>
                        Eighth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:33-48 (Section V - VI)<br/>
                    <i>The First Lesson:</i> * Ecclesiasticus 1:18-27<br/>
                    <i>The Second Lesson:</i> St. John 7:14-24<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 126, Psalm 127<br/>
                    <i>The First Lesson:</i> Zechariah 4:1-10<br/>
                    <i>The Second Lesson:</i> Galatians 3:24 - 4:7<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 84<br/>
                    <i>The First Lesson:</i> Genesis 24:1-27<br/>
                    <i>The Second Lesson:</i> Ephesians 5:22<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> I Samuel 11:1-13<br/>
                    <i>The Second Lesson:</i> St. Luke 15:1-10<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 114<br/>
                    <i>The First Lesson:</i> I Samuel 11:14 - 12:5<br/>
                    <i>The Second Lesson:</i> St. Luke 15:11<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 119:81-96 (Section XI - XII)<br/>
                    <i>The First Lesson:</i> I Samuel 12:19<br/>
                    <i>The Second Lesson:</i> St. Luke 16:1-18<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 128, Psalm 129<br/>
                    <i>The First Lesson:</i> I Samuel 15:1-9<br/>
                    <i>The Second Lesson:</i> St. Luke 16:19<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> I Samuel 15:10-23<br/>
                    <i>The Second Lesson:</i> St. Luke 17:1-10<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> I Samuel 15:24-34<br/>
                    <i>The Second Lesson:</i> St. Luke 17:11-19<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn9">&nbsp;</a><br/>
                        Ninth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Ezekiel 14:1-11<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> * Wisdom 11:21 - 12:2<br/>
                    <i>The Second Lesson:</i> St. John 8:1-11<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Genesis 28:10<br/>
                    <i>The Second Lesson:</i> II Corinthians 9<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 2, Psalm 3<br/>
                    <i>The First Lesson:</i> I Samuel 16:1-13<br/>
                    <i>The Second Lesson:</i> St. Luke 17:20<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 5<br/>
                    <i>The First Lesson:</i> I Samuel 16:14<br/>
                    <i>The Second Lesson:</i> St. Luke 18:1-14<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> I Samuel 17:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 18:15-30<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 10<br/>
                    <i>The First Lesson:</i> I Samuel 17:17-27<br/>
                    <i>The Second Lesson:</i> St. Luke 18:31<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> I Samuel 17:28-40<br/>
                    <i>The Second Lesson:</i> St. Luke 19:1-10<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> I Samuel 17:41-51<br/>
                    <i>The Second Lesson:</i> St. Luke 19:11-28<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn10">&nbsp;</a><br/>
                        Tenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> * Ecclesiasticus 1:1-10<br/>
                    <i>The Second Lesson:</i> St. John 8:25-36<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Jeremiah 26:1-7. 10-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 23:34<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Genesis 32:22-31<br/>
                    <i>The Second Lesson:</i> II Corinthians 4:7<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> I Samuel 18:1-9<br/>
                    <i>The Second Lesson:</i> St. Luke 19:29-40<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 41<br/>
                    <i>The First Lesson:</i> I Samuel 20:1-7, 12-23<br/>
                    <i>The Second Lesson:</i> St. Luke 19:47 - 20:8<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 44<br/>
                    <i>The First Lesson:</i> I Samuel 20:24-39<br/>
                    <i>The Second Lesson:</i> St. Luke 20:9-26<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> I Samuel 22:6<br/>
                    <i>The Second Lesson:</i> St. Luke 20:27-40<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> I Samuel 23:7-18<br/>
                    <i>The Second Lesson:</i> St. Luke 20:41 - 21:4<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> I Samuel 28:3-19<br/>
                    <i>The Second Lesson:</i> St. Luke 21:5-19<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn11">&nbsp;</a><br/>
                        Eleventh Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 124, Psalm 125<br/>
                    <i>The First Lesson:</i> * Isaiah 26:12-16, 19<br/>
                    <i>The Second Lesson:</i> Romans 8:26<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Job 5:8-18<br/>
                    <i>The Second Lesson:</i> St. Matthew 23:13-31<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 63<br/>
                    <i>The First Lesson:</i> Genesis 37:3-4, 12-35<br/>
                    <i>The Second Lesson:</i> St. James 1:1-15<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> I Samuel 31<br/>
                    <i>The Second Lesson:</i> St. Luke 21:20<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> II Samuel 1:1-16<br/>
                    <i>The Second Lesson:</i> St. Luke 22:1-13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 87, Psalm 101<br/>
                    <i>The First Lesson:</i> II Samuel 1:17<br/>
                    <i>The Second Lesson:</i> St. Luke 22:14-30<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> II Samuel 4:1, 5, 7-12<br/>
                    <i>The Second Lesson:</i> St. Luke 22:31-46<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> II Samuel 5:1-10<br/>
                    <i>The Second Lesson:</i> St. Luke 22:47-62<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 96<br/>
                    <i>The First Lesson:</i> II Samuel 6:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 22:63 - 23:12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn12">&nbsp;</a><br/>
                        Twelfth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> * Ecclesiasticus 15:11<br/>
                    <i>The Second Lesson:</i> Philippians 2:12-18<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 102:15, Psalm 146<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 38:1-14<br/>
                    <i>The Second Lesson:</i> St. Luke 4:31<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Genesis 41:1a, 8, 14-40<br/>
                    <i>The Second Lesson:</i> Colossians 3:22 - 4:6<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 107:1-16<br/>
                    <i>The First Lesson:</i> II Samuel 6:12-15,17-19<br/>
                    <i>The Second Lesson:</i> St. Luke 23:13-25<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> II Samuel 7:1-11,16-17<br/>
                    <i>The Second Lesson:</i> St. Luke 23:26-38<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 125, Psalm 127, Psalm 130<br/>
                    <i>The First Lesson:</i> II Samuel 7:18<br/>
                    <i>The Second Lesson:</i> St. Luke 23:39-49<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 137:1-6, Psalm 138<br/>
                    <i>The First Lesson:</i> II Samuel 9:1-9, 13<br/>
                    <i>The Second Lesson:</i> St. Luke 23:50 - 24:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 142, Psalm 143<br/>
                    <i>The First Lesson:</i> II Samuel 11:1-13<br/>
                    <i>The Second Lesson:</i> St. Luke 24:13-35<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> II Samuel 11:14<br/>
                    <i>The Second Lesson:</i> St. Luke 24:26<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn13">&nbsp;</a><br/>
                        Thirteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> * Ecclesiasticus 17:1-15<br/>
                    <i>The Second Lesson:</i> St. Mark 3:20-21, 31-35<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Habakkuk 1:12 - 2:4, 14<br/>
                    <i>The Second Lesson:</i> Hebrews 10:35<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Genesis 43:1-5, 11-16, 26-34<br/>
                    <i>The Second Lesson:</i> Hebrews 13:1-21<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> II Samuel 12:1-10, 13-15a<br/>
                    <i>The Second Lesson:</i> II Corinthians 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 16<br/>
                    <i>The First Lesson:</i> II Samuel 12:15b-23<br/>
                    <i>The Second Lesson:</i> II Corinthians 2<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 17<br/>
                    <i>The First Lesson:</i> II Samuel 15:1-12<br/>
                    <i>The Second Lesson:</i> II Corinthians 3<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> II Samuel 15:13-29<br/>
                    <i>The Second Lesson:</i> II Corinthians 4<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 32<br/>
                    <i>The First Lesson:</i> II Samuel 15:30 - 16:4<br/>
                    <i>The Second Lesson:</i> II Corinthians 5:1-10<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> II Samuel 16:5-19<br/>
                    <i>The Second Lesson:</i> II Corinthians 5:11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn14">&nbsp;</a><br/>
                        Fourteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 24<br/>
                    <i>The First Lesson:</i> * Micah 6:1-8<br/>
                    <i>The Second Lesson:</i> Philippians 4:4-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> I Chronicles 29:10-17<br/>
                    <i>The Second Lesson:</i> St. Luke 17:5-10<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> Genesis 45:1-15, 25-28<br/>
                    <i>The Second Lesson:</i> Romans 12:9<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> II Samuel 16:23 - 17:14<br/>
                    <i>The Second Lesson:</i> II Corinthians 6:1-10<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> II Samuel 17:15-23<br/>
                    <i>The Second Lesson:</i> II Corinthians 6:11 - 7:1<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 45<br/>
                    <i>The First Lesson:</i> II Samuel 18:1-17<br/>
                    <i>The Second Lesson:</i> II Corinthians 7:2<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 56<br/>
                    <i>The First Lesson:</i> II Samuel 18:19<br/>
                    <i>The Second Lesson:</i> II Corinthians 8:1-15<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 69:1-22, 30-37<br/>
                    <i>The First Lesson:</i> II Samuel 19:1-10<br/>
                    <i>The Second Lesson:</i> II Corinthians 8:16<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 68:1-19<br/>
                    <i>The First Lesson:</i> II Samuel 19:11-23<br/>
                    <i>The Second Lesson:</i> II Corinthians 9<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn15">&nbsp;</a><br/>
                        Fifteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> * Ecclesiasticus 5:1-10<br/>
                    <i>The Second Lesson:</i> St. Luke 12:13-21<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Deuteronomy 7:6-13<br/>
                    <i>The Second Lesson:</i> Galatians 2:15-20<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> Exodus 2:1-22<br/>
                    <i>The Second Lesson:</i> St. James 4<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 75<br/>
                    <i>The First Lesson:</i> II Samuel 19:24-39<br/>
                    <i>The Second Lesson:</i> II Corinthians 10<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 76<br/>
                    <i>The First Lesson:</i> II Samuel 23:8-17<br/>
                    <i>The Second Lesson:</i> II Corinthians 11:1-15<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> II Samuel 24:1, 10-25<br/>
                    <i>The Second Lesson:</i> II Corinthians 11:16<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 81<br/>
                    <i>The First Lesson:</i> I Kings 2:1-4, 10-12<br/>
                    <i>The Second Lesson:</i> II Corinthians 12:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> I Kings 3:4-15<br/>
                    <i>The Second Lesson:</i> II Corinthians 12:14<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> I Kings 3:16<br/>
                    <i>The Second Lesson:</i> II Corinthians 13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn16">&nbsp;</a><br/>
                        Sixteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> * Isaiah 12<br/>
                    <i>The Second Lesson:</i> St. John 11:21-44<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Jeremiah 32:36-42<br/>
                    <i>The Second Lesson:</i> Romans 11:25<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Exodus 3:1-15<br/>
                    <i>The Second Lesson:</i> I Peter 5:1-11<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> I Kings 8:1-11<br/>
                    <i>The Second Lesson:</i> I Thessalonians 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> I Kings 8:12-21<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:1-13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 119:113-128 (Section XV - X)<br/>
                    <i>The First Lesson:</i> I Kings 8:22-30<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:17 - 3:13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 126, Psalm 128<br/>
                    <i>The First Lesson:</i> I Kings 8:54-63<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:1-12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 102<br/>
                    <i>The First Lesson:</i> I Kings 9:1-9<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:13<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 143, Psalm 149<br/>
                    <i>The First Lesson:</i> I Kings 11:26-31, 34-37<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:1-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn17">&nbsp;</a><br/>
                        Seventeenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> * Jeremiah 13:15-21<br/>
                    <i>The Second Lesson:</i> St. Mark 10:35-45<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 10<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 8:1-9<br/>
                    <i>The Second Lesson:</i> II Timothy 2:19<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 107<br/>
                    <i>The First Lesson:</i> Exodus 5:1-9, 19 - 6:1<br/>
                    <i>The Second Lesson:</i> Hebrews 3<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> I Kings 12:1-11<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 23<br/>
                    <i>The First Lesson:</i> I Kings 12:12-20<br/>
                    <i>The Second Lesson:</i> II Thessalonians 1<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 21:1-6, Psalm 28<br/>
                    <i>The First Lesson:</i> I Kings 12:25<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:1-12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> I Kings 16:29<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:13 - 3:5<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 37:1-24<br/>
                    <i>The First Lesson:</i> I Kings 17:1-16<br/>
                    <i>The Second Lesson:</i> II Thessalonians 3:6<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 37:26<br/>
                    <i>The First Lesson:</i> I Kings 17:17<br/>
                    <i>The Second Lesson:</i> St. James 1:1-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn18">&nbsp;</a><br/>
                        Eighteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 48, Psalm 112<br/>
                    <i>The First Lesson:</i> Proverbs 2:1-9<br/>
                    <i>The Second Lesson:</i> I Timothy 3:14 - 4:16<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 63<br/>
                    <i>The First Lesson:</i> * Amos 8:4-12<br/>
                    <i>The Second Lesson:</i> St. John 7:37<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 77:11, Psalm 114<br/>
                    <i>The First Lesson:</i> Exodus 14:5-14, 19-21, 24-28, 30<br/>
                    <i>The Second Lesson:</i><br/>
                    Hebrews 11:23-29, 32-40<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 41<br/>
                    <i>The First Lesson:</i> I Kings 18:1-15<br/>
                    <i>The Second Lesson:</i> James 1:12-21<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> I Kings 18:16-24<br/>
                    <i>The Second Lesson:</i> James 1:22<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 44<br/>
                    <i>The First Lesson:</i> I Kings 18:25-30, 36-46<br/>
                    <i>The Second Lesson:</i> James 2:1-13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> I Kings 19:1-8<br/>
                    <i>The Second Lesson:</i> James 2:14<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> I Kings 19:9<br/>
                    <i>The Second Lesson:</i> James 3<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> I Kings 21:1-10<br/>
                    <i>The Second Lesson:</i> James 4:1-12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn19">&nbsp;</a><br/>
                        Nineteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> * Job 24:1-17<br/>
                    <i>The Second Lesson:</i> Titus 2<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Jeremiah 30:12-22<br/>
                    <i>The Second Lesson:</i> St. John 5:1-16<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 99<br/>
                    <i>The First Lesson:</i> Exodus 19:1-7, 16-19, 20:1-3<br/>
                    <i>The Second Lesson:</i> Romans 3:1-2, 19-31<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> I Kings 21:11-22<br/>
                    <i>The Second Lesson:</i> James 4:13 - 5:11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> I Kings 22:1-12<br/>
                    <i>The Second Lesson:</i> James 5:12<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> I Kings 22:13-28<br/>
                    <i>The Second Lesson:</i> I Timothy 1:1-11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 100, Psalm 110<br/>
                    <i>The First Lesson:</i> I Kings 22:29-40<br/>
                    <i>The Second Lesson:</i> I Timothy 1:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 119:145-160 (Section XIX - XX)<br/>
                    <i>The First Lesson:</i> II Kings 1:2-8, 17a<br/>
                    <i>The Second Lesson:</i> I Timothy 2:1-10<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 120, Psalm 122, Psalm 123<br/>
                    <i>The First Lesson:</i> II Kings 2:1-15<br/>
                    <i>The Second Lesson:</i> I Timothy 3:1-13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn20">&nbsp;</a><br/>
                        Twentienth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Malachi 2:14<br/>
                    <i>The Second Lesson:</i> St. Matthew 19:3-9a, 13-15<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> * Ecclesiastes 9:4-10<br/>
                    <i>The Second Lesson:</i> Ephesians 6:1-9<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Exodus 32:1-6, 15-20, 30-34<br/>
                    <i>The Second Lesson:</i> I Corinthians 10:14-22<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 124, Psalm 128<br/>
                    <i>The First Lesson:</i> II Kings 4:8-17<br/>
                    <i>The Second Lesson:</i> I Timothy 3: 14 - 4:5<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 125, Psalm 126<br/>
                    <i>The First Lesson:</i> II Kings 4:18-25a<br/>
                    <i>The Second Lesson:</i> I Timothy 4:6<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 127, Psalm 130<br/>
                    <i>The First Lesson:</i> II Kings 4:25b - 37<br/>
                    <i>The Second Lesson:</i> I Timothy 5:1-16<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 141:1-4, Psalm 142<br/>
                    <i>The First Lesson:</i> II Kings 5:1-8<br/>
                    <i>The Second Lesson:</i> I Timothy 5:17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 143<br/>
                    <i>The First Lesson:</i> II Kings 5:9-19<br/>
                    <i>The Second Lesson:</i> I Timothy 6:1-11<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 149<br/>
                    <i>The First Lesson:</i> II Kings 5:20<br/>
                    <i>The Second Lesson:</i> I Timothy 6:12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn21">&nbsp;</a><br/>
                        Twenty-First Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 76, Psalm 121<br/>
                    <i>The First Lesson:</i> * Isaiah 59:15b<br/>
                    <i>The Second Lesson:</i> II Corinthians 10:1-7, 17-18<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Baruch 3:14-15, 29-37<br/>
                    <i>The Second Lesson:</i> St. John 9:1-38<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Exodus 33:1, 12-23<br/>
                    <i>The Second Lesson:</i> Hebrews 4:1-13<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 2, Psalm 3<br/>
                    <i>The First Lesson:</i> II Kings 6:8-14<br/>
                    <i>The Second Lesson:</i> II Timothy 1:1-14<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 5<br/>
                    <i>The First Lesson:</i> II Kings 6:15-23<br/>
                    <i>The Second Lesson:</i> II Timothy 1:15 - 2:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> II Kings 9:1-6, 10b-16<br/>
                    <i>The Second Lesson:</i> II Timothy 2:14<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 10<br/>
                    <i>The First Lesson:</i> II Kings 9:17-28<br/>
                    <i>The Second Lesson:</i> II Timothy 3<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> II Kings 9:30<br/>
                    <i>The Second Lesson:</i> II Timothy 4:1-8<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 21:1-6, Psalm 23<br/>
                    <i>The First Lesson:</i> II Kings 11:1-4, 9-16<br/>
                    <i>The Second Lesson:</i> II Timothy 4:9<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn22">&nbsp;</a><br/>
                        Twenty-Second Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 32, Psalm 43<br/>
                    <i>The First Lesson:</i> * Ecclesiasticus 27:30 - 28:7<br/>
                    <i>The Second Lesson:</i> St. Matthew 18:7-20<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Baruch 5<br/>
                    <i>The Second Lesson:</i> I John 2:24<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Numbers 20:14<br/>
                    <i>The Second Lesson:</i> II Timothy 1:3-14<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 18:21-36<br/>
                    <i>The First Lesson:</i> II Kings 17:6-8, 12-18<br/>
                    <i>The Second Lesson:</i> Titus 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> II Kings 21:1-3, 10-18<br/>
                    <i>The Second Lesson:</i> Titus 2<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 28<br/>
                    <i>The First Lesson:</i> II Kings 22:3-13<br/>
                    <i>The Second Lesson:</i> Titus 3<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 30<br/>
                    <i>The First Lesson:</i> II Kings 22:14<br/>
                    <i>The Second Lesson:</i> Philemon<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> II Kings 23:1-4, 11-14, 21-23<br/>
                    <i>The Second Lesson:</i> II John<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> II Kings 23:24-30<br/>
                    <i>The Second Lesson:</i> III John<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn23">&nbsp;</a><br/>
                        Twenty-Third Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Jeremiah 29:1, 4-14<br/>
                    <i>The Second Lesson:</i> Titus 3:1-8<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 8, Psalm 138<br/>
                    <i>The First Lesson:</i> * Isaiah 64<br/>
                    <i>The Second Lesson:</i> St. Matthew 23:1-12<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 23, Psalm 102:15<br/>
                    <i>The First Lesson:</i> Deuteronomy 34<br/>
                    <i>The Second Lesson:</i> II Timothy 4:1-8<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 41<br/>
                    <i>The First Lesson:</i> Jeremiah 35:1-11<br/>
                    <i>The Second Lesson:</i> Colossians 1:1-17<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 44<br/>
                    <i>The First Lesson:</i> Jeremiah 35:12<br/>
                    <i>The Second Lesson:</i> Colossians 1:18 - 2:5<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Jeremiah 36:1-8<br/>
                    <i>The Second Lesson:</i> Colossians 2:6-19<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 52, Psalm 53<br/>
                    <i>The First Lesson:</i> Jeremiah 36:11-19<br/>
                    <i>The Second Lesson:</i> Colossians 2:20 - 3:11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 54, Psalm 61<br/>
                    <i>The First Lesson:</i> Jeremiah 36:20-26<br/>
                    <i>The Second Lesson:</i> Colossians 3:12-17<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 55<br/>
                    <i>The First Lesson:</i> II Kings 25:8-11, 22, 25-26<br/>
                    <i>The Second Lesson:</i> Colossians 3:18 - 4:6<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn24">&nbsp;</a><br/>
                        Twenty-Fourth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> * Malachi 3:13 - 4:3<br/>
                    <i>The Second Lesson:</i> St. Luke 10:17-24<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 28<br/>
                    <i>The First Lesson:</i> Eclesiasticus 36:1-17<br/>
                    <i>The Second Lesson:</i> I Timothy 2:1-8<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 136<br/>
                    <i>The First Lesson:</i> Joshua 23:1-3, 11-16<br/>
                    <i>The Second Lesson:</i> St. Luke 13:1-9<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 63, Psalm 64<br/>
                    <i>The First Lesson:</i> Leviticus 19:1-2, 9-18<br/>
                    <i>The Second Lesson:</i> Philippians 1:1-11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 68:1-19<br/>
                    <i>The First Lesson:</i> Leviticus 19:26<br/>
                    <i>The Second Lesson:</i> Philippians 1:12-26<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Leviticus 20:1-8<br/>
                    <i>The Second Lesson:</i> Philippians 1:27 - 2:18<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 74<br/>
                    <i>The First Lesson:</i> Leviticus 25:23-31<br/>
                    <i>The Second Lesson:</i> Philippians 2:19<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 69:1-22, 30-37<br/>
                    <i>The First Lesson:</i> Leviticus 26:1-13<br/>
                    <i>The Second Lesson:</i> Philippians 3<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 79<br/>
                    <i>The First Lesson:</i> Leviticus 26:27-42<br/>
                    <i>The Second Lesson:</i> Philippians 4<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="bfa3">&nbsp;</a><br/>
                        Third Sunday before Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 85<br/>
                    <i>The First Lesson:</i> Ruth 1:1-17<br/>
                    <i>The Second Lesson:</i> Colossians 3:5-11<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> * Habakkuk 1:12 - 2:4, 9-14<br/>
                    <i>The Second Lesson:</i> St. Luke 12:35-48<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 81<br/>
                    <i>The First Lesson:</i> Obadiah 1-9<br/>
                    <i>The Second Lesson:</i> I Peter 1:1-12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 82, Psalm 101<br/>
                    <i>The First Lesson:</i> Obadiah 10<br/>
                    <i>The Second Lesson:</i> I Peter 1:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> Malachi 1:6-11<br/>
                    <i>The Second Lesson:</i> I Peter 2:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> Malachi 2:1-10<br/>
                    <i>The Second Lesson:</i> I Peter 2:11-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 88<br/>
                    <i>The First Lesson:</i> Malachi 3:1-15<br/>
                    <i>The Second Lesson:</i> I Peter 2:18<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Malachi 3:16 - 4:6<br/>
                    <i>The Second Lesson:</i> I Peter 3:1-12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="bfa2">&nbsp;</a><br/>
                        Second Sunday before Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 138<br/>
                    <i>The First Lesson:</i> Isaiah 2:6-19<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:14-29<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 98<br/>
                    <i>The First Lesson:</i> * Isaiah 66:1-2, 10, 12-16, 18-23<br/>
                    <i>The Second Lesson:</i> II Thessalonians 1<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 105<br/>
                    <i>The First Lesson:</i> Lamentations 1:1-6<br/>
                    <i>The Second Lesson:</i> I Peter 3:13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 106<br/>
                    <i>The First Lesson:</i> Lamentations 1:15<br/>
                    <i>The Second Lesson:</i> I Peter 4:1-6<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 113, Psalm 114<br/>
                    <i>The First Lesson:</i> Lamentations 2:1-10<br/>
                    <i>The Second Lesson:</i> I Peter 4:7-11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Lamentations 4:1-6, 9<br/>
                    <i>The Second Lesson:</i> I Peter 4:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 116, Psalm 117<br/>
                    <i>The First Lesson:</i> Lamentations 4:11-20<br/>
                    <i>The Second Lesson:</i> I Peter 5:1-7<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 120, Psalm 123<br/>
                    <i>The First Lesson:</i> Lamentations 5<br/>
                    <i>The Second Lesson:</i> I Peter 5:8<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="bfa1">&nbsp;</a><br/>
                        Sunday Next Before Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Jeremiah 4:23<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:31<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> * Jeremiah 3:14-18<br/>
                    <i>The Second Lesson:</i> I Corinthians 11:17-32<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 124, Psalm 128<br/>
                    <i>The First Lesson:</i> Joel 1:13<br/>
                    <i>The Second Lesson:</i> II Peter 1:1-11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 129, Psalm 130<br/>
                    <i>The First Lesson:</i> Joel 2:1-11<br/>
                    <i>The Second Lesson:</i> II Peter 1:12<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 136<br/>
                    <i>The First Lesson:</i> Joel 2:12-19<br/>
                    <i>The Second Lesson:</i> II Peter 2:1-10a<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 137:1-6, Psalm 138<br/>
                    <i>The First Lesson:</i> Joel 2:21<br/>
                    <i>The Second Lesson:</i> II Peter 2:10b<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 142, Psalm 143<br/>
                    <i>The First Lesson:</i> Joel 3:1-8<br/>
                    <i>The Second Lesson:</i> II Peter 3:1-10<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 146, Psalm 149<br/>
                    <i>The First Lesson:</i> Joel 3:9-17<br/>
                    <i>The Second Lesson:</i> II Peter 3:11<br/>
                    *************<br/>


                    <hr>

                    <br/>
                    <b>
                        <a id="andr">&nbsp;</a><br/>
                        St. Andrew the Apostle, </b><i>November 30</i><br/>


                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Isaiah 55:1-5<br/>
                    <i>The Second Lesson:</i> St. John 1:35-42<br/>
                    *************<br/>

                    <b>
                        <a id="thom">&nbsp;</a><br/>
                        St. Thomas the Apostle, </b><i>December 21</i><br/>


                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Job 42:1-6<br/>
                    <i>The Second Lesson:</i> St. John 14:1-7<br/>
                    *************<br/>

                    <b>
                        <a id="paul">&nbsp;</a><br/>
                        The Conversion of St. Paul, </b><i>January 25</i><br/>


                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Isaiah 45:18<br/>
                    <i>The Second Lesson:</i> II Corinthians 12:1-9<br/>
                    *************<br/>

                    <b>
                        <a id="puri">&nbsp;</a><br/>
                        Purification, </b><i>February 2</i><br/>


                    <i>The Psalter:</i> Psalm 84<br/>
                    <i>The First Lesson:</i> I Samuel 1:21<br/>
                    <i>The Second Lesson:</i> Galatians 4:1-7<br/>
                    &nbsp; (after Septuagesima, Romans 8:14-21)<br/>
                    *************<br/>

                    <b>
                        <a id="mthi">&nbsp;</a><br/>
                        St. Matthias the Apostle, </b><i>February 24</i><br/>


                    <i>The Psalter:</i> Psalm 15, Psalm 24<br/>
                    <i>The First Lesson:</i> I Samuel 2:27-35<br/>
                    <i>The Second Lesson:</i> St. Matthew 7:15-27<br/>
                    *************<br/>

                    <b>
                        <a id="annu">&nbsp;</a><br/>
                        Annunciation, </b><i>March 25</i><br/>


                    <i>The Psalter:</i> Psalm 8, Psalm 113<br/>
                    <i>The First Lesson:</i> Isaiah 52:7-10<br/>
                    <i>The Second Lesson:</i> Hebrews 2:5<br/>
                    &nbsp; (after Easter, I John 4:7-14)<br/>
                    *************<br/>

                    <b>
                        <a id="mark">&nbsp;</a><br/>
                        St. Mark the Evangelist, </b><i>April 25</i><br/>


                    <i>The Psalter:</i> Psalm 102:15<br/>
                    <i>The First Lesson:</i> Isaiah 62:6<br/>
                    <i>The Second Lesson:</i> Romans 15:4-13<br/>
                    *************<br/>

                    <b>
                        <a id="phil">&nbsp;</a><br/>
                        St. Philip and St. James, Apostles, </b><i>May 1</i><br/>


                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Job 23:3-12<br/>
                    <i>The Second Lesson:</i> St. John 1:43<br/>
                    *************<br/>

                    <b>
                        <a id="barn">&nbsp;</a><br/>
                        St. Barnabas the Apostle, </b><i>June 11</i><br/>


                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> Job 29:11-16<br/>
                    <i>The Second Lesson:</i> Acts 9:26-31<br/>
                    &nbsp; (in the week of Trinity 1, St. Luke 14:25<br/>
                    *************<br/>

                    <b>
                        <a id="jonb">&nbsp;</a><br/>
                        Saint John the Baptist, </b><i>June 24</i><br/>


                    <i>The Psalter:</i> Psalm 82, Psalm 98<br/>
                    <i>The First Lesson:</i> Malachi 3:1-6<br/>
                    <i>The Second Lesson:</i> St. Matthew 3<br/>
                    *************<br/>

                    <b>
                        <a id="pete">&nbsp;</a><br/>
                        Saint Peter the Apostle, </b><i>June 29</i><br/>


                    <i>The Psalter:</i> Psalm 22:23, Psalm 67<br/>
                    <i>The First Lesson:</i> Ezekiel 2:1-7<br/>
                    <i>The Second Lesson:</i> Acts 11:1-18<br/>
                    &nbsp; (before Trinity 3, Acts 3)<br/>
                    *************<br/>

                    <b>
                        <a id="jame">&nbsp;</a><br/>
                        Saint James the Apostle, </b><i>July 25</i><br/>


                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Jeremiah 45<br/>
                    <i>The Second Lesson:</i> I Peter 1:22 - 2:10<br/>
                    *************<br/>

                    <b>
                        <a id="tran">&nbsp;</a><br/>
                        The Transfiguration of Christ, </b><i>August 6</i><br/>


                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Exodus 34:29<br/>
                    <i>The Second Lesson:</i> II Corinthians 3<br/>
                    *************<br/>

                    <b>
                        <a id="bart">&nbsp;</a><br/>
                        Saint Bartholomew the Apostle, </b><i>August 24</i><br/>


                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Genesis 28:10-12, 16-17<br/>
                    <i>The Second Lesson:</i> St. John 1:43<br/>
                    *************<br/>

                    <b>
                        <a id="matt">&nbsp;</a><br/>
                        St. Matthew, Apostle and Evangelist, </b><i>September 21</i><br/>


                    <i>The Psalter:</i> Psalm 119:1-16 (Section I - II)<br/>
                    <i>The First Lesson:</i> I Kings 19:15-16, 19-21<br/>
                    <i>The Second Lesson:</i> St. Matthew 19:16<br/>
                    *************<br/>

                    <b>
                        <a id="mich">&nbsp;</a><br/>
                        St. Michael and All Angels, </b><i>September 29</i><br/>


                    <i>The Psalter:</i> Psalm 8, Psalm 91<br/>
                    <i>The First Lesson:</i> Job 38:1-7<br/>
                    <i>The Second Lesson:</i> Hebrews 1:13 - 2:10<br/>
                    *************<br/>

                    <b>
                        <a id="luke">&nbsp;</a><br/>
                        St. Luke the Evangelist, </b><i>October 18</i><br/>


                    <i>The Psalter:</i> Psalm 67, Psalm 96<br/>
                    <i>The First Lesson:</i> Isaiah 52:7-10<br/>
                    <i>The Second Lesson:</i> Acts 1:1-8<br/>
                    *************<br/>

                    <b>
                        <a id="simo">&nbsp;</a><br/>
                        St. Simon and St. Jude, Apostles, </b><i>October 28</i><br/>


                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Isaiah 28:9-16<br/>
                    <i>The Second Lesson:</i> Ephesians 2:11-18<br/>
                    *************<br/>

                    <b>
                        <a id="alls">&nbsp;</a><br/>
                        All Saints, </b><i>November 1</i><br/>


                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> Wisdom 3:1-9<br/>
                    <i>The Second Lesson:</i> Revelation 19:1-16<br/>
                    *************<br/>

                    <b>
                        <a id="embr">&nbsp;</a><br/>
                        Ember Wednesday<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> Deuteronomy 18:15<br/>
                    <i>The Second Lesson:</i> I Corinthians 1:1-18<br/>
                    *************<br/>
                    <b>
                        <b>Ember Friday</b><br/>
                    </b>
                    <i>The Psalter:</i> Psalm 48<br/>
                    <i>The First Lesson:</i> II Kings 2:1-15<br/>
                    <i>The Second Lesson:</i> I Corinthians 9:7<br/>
                    *************<br/>
                    <b>
                        <b>Ember Saturday</b><br/>
                    </b>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Ezekiel 33:1-9<br/>
                    <i>The Second Lesson:</i> II Corinthians 6:1-10<br/>
                    *************<br/>

                    <b>
                        <a id="inde">&nbsp;</a><br/>
                        Independence Day<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Isaiah 26:1-4, 7-8, 12<br/>
                    <i>The Second Lesson:</i> St. John 8:31-36<br/>
                    *************<br/>

                    <b>
                        <a id="than">&nbsp;</a><br/>
                        Thanksgiving Day<br/>
                    </b>

                    <u>First Set of Readings</u>:<br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Deuteronomy 8:1-11, 17-20<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:12-23<br/>
                    <br/>
                    <u>Second Set of Readings</u>:<br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Deuteronomy 26:1-11<br/>
                    <i>The Second Lesson:</i> St. John 6:26-35<br/>
                    *************<br/>

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
