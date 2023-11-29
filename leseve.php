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

    <title>Evening Prayer Lessons and Psalms for the Christian Year - Common Prayer Online</title>
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
            <h1 class="cpo-content-page-title">Evening Prayer Lessons and Psalms for the Christian Year</h1>
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

                <div class="text-center"><h3>Evening Prayer Lessons and Psalms for the Christian Year</h3></div>
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
                    <b>
                        <a id="adv1">&nbsp;</a><br/>
                        First Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 48, Psalm 126<br/>
                    <i>The First Lesson:</i> Isaiah 62<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:1-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Isaiah 13:6-13<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:1-11<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Isaiah 1:10-20<br/>
                    <i>The Second Lesson:</i> Revelation 3:14<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Isaiah 2:1-5<br/>
                    <i>The Second Lesson:</i> Revelation 4<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 19<br/>
                    <i>The First Lesson:</i> Isaiah 3:1-3, 8-15<br/>
                    <i>The Second Lesson:</i> Revelation 5<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 24, Psalm 30<br/>
                    <i>The First Lesson:</i> Isaiah 5:1-7<br/>
                    <i>The Second Lesson:</i> Revelation 6:1-11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 6, Psalm 13<br/>
                    <i>The First Lesson:</i> Isaiah 6:1-11<br/>
                    <i>The Second Lesson:</i> Revelation 7:1-4, 9-17<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Isaiah 7:10-20<br/>
                    <i>The Second Lesson:</i> Revelation 10<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="adv2">&nbsp;</a><br/>
                        Second Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:89-104<br/>
                    <i>The First Lesson:</i> Amos 3:1-8<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:1-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 67, Psalm 111<br/>
                    <i>The First Lesson:</i> Isaiah 11:1-10<br/>
                    <i>The Second Lesson:</i> St. John 5:30-40<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Isaiah 9:8-17<br/>
                    <i>The Second Lesson:</i> Revelation 11:15<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 47<br/>
                    <i>The First Lesson:</i> Isaiah 10:5-7, 13-21<br/>
                    <i>The Second Lesson:</i> Revelation 12:1-12<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Isaiah 12<br/>
                    <i>The Second Lesson:</i> Revelation 13:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Isaiah 13:6-15<br/>
                    <i>The Second Lesson:</i> Revelation 14:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Isaiah 26:11-19<br/>
                    <i>The Second Lesson:</i> Revelation 15<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Isaiah 28:14-22<br/>
                    <i>The Second Lesson:</i> Revelation 18:1-10<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="adv3">&nbsp;</a><br/>
                        Third Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 132, Psalm 134<br/>
                    <i>The First Lesson:</i> Nahum 1:3-8, 15<br/>
                    <i>The Second Lesson:</i> I Corinthians 9:7-23<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 130<br/>
                    <i>The First Lesson:</i> Isaiah 26:1-11<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:35 - 10:15<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 76<br/>
                    <i>The First Lesson:</i> Isaiah 29:15<br/>
                    <i>The Second Lesson:</i> Revelation 18:11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Isaiah 30:18-26<br/>
                    <i>The Second Lesson:</i> Revelation 19:1-16<br/>
                    *************<br/>
                    <b>Ember Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Jeremiah 23:16-22<br/>
                    <i>The Second Lesson:</i> St. Matthew 28:16<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 98<br/>
                    <i>The First Lesson:</i> Isaiah 33:1-10<br/>
                    <i>The Second Lesson:</i> Revelation 20:1-6<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Jeremiah 26:1-7, 10-15<br/>
                    <i>The Second Lesson:</i> II Timothy 3:14 - 4:8<br/>
                    *************<br/>
                    <b>Ember Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Malachi 3:1-6<br/>
                    <i>The Second Lesson:</i> Hebrews 4:14 - 5:10<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="adv4">&nbsp;</a><br/>
                        Fourth Sunday in Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Isaiah 40:12-18, 21-31<br/>
                    <i>The Second Lesson:</i> I Thessalonians 3:7<br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 102:15, Psalm 146<br/>
                    <i>The First Lesson:</i> Isaiah 42:1-16<br/>
                    <i>The Second Lesson:</i> St. Matthew 11:11-24<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Isaiah 35<br/>
                    <i>The Second Lesson:</i> Revelation 20:7<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 114, Psalm 122<br/>
                    <i>The First Lesson:</i> Genesis 49:1-2, 8-10<br/>
                    <i>The Second Lesson:</i> Revelation 21:1-8<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Haggai 2:1-9<br/>
                    <i>The Second Lesson:</i> Revelation 21:9<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Zephaniah 3:14<br/>
                    <i>The Second Lesson:</i> Revelation 22:1-9<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Jeremiah 23:5-8<br/>
                    <i>The Second Lesson:</i> Revelation 22:10<br/>
                    *************<br/>
                    <b>Christmas Eve</b><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> Zechariah 2:10-13<br/>
                    <i>The Second Lesson:</i> St. Matthew 1:18-25<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="chri">&nbsp;</a><br/>
                        Christmas Day<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 45<br/>
                    <i>The First Lesson:</i> Micah 4:1-5, 5:2-4<br/>
                    <i>The Second Lesson:</i> I John 4:7-14<br/>
                    *************<br/>
                    <b>St. Stephen the Martyr</b><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 31:1-6<br/>
                    <i>The First Lesson:</i> Wisdom 4:7-15<br/>
                    <i>The Second Lesson:</i> Acts 7:59 - 8:8<br/>
                    *************<br/>
                    <b>St. John the Evangelist</b><br/>
                    <i>The Psalter:</i> Psalm 97<br/>
                    <i>The First Lesson:</i> Isaiah 6:1-8<br/>
                    <i>The Second Lesson:</i> Revelation 1<br/>
                    *************<br/>
                    <b>The Holy Innocents</b><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 126<br/>
                    <i>The First Lesson:</i> Isaiah 54:1-13<br/>
                    <i>The Second Lesson:</i> St. Mark 10:13-16, 23-31<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="chr1">&nbsp;</a><br/>
                        First Sunday after Christmas<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 68, Psalm 27<br/>
                    <i>The First Lesson:</i> Isaiah 63:7-16<br/>
                    <i>The Second Lesson:</i> II Peter 1:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 8, Psalm 113<br/>
                    <i>The First Lesson:</i> Job 28:12-28<br/>
                    <i>The Second Lesson:</i> St. Matthew 11:25-30<br/>
                    *************<br/>
                    <b>December 29th</b><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 21:1-6<br/>
                    <i>The First Lesson:</i> Isaiah 57:13-21<br/>
                    <i>The Second Lesson:</i> Hebrews 1<br/>
                    *************<br/>
                    <b>December 30</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 112<br/>
                    <i>The First Lesson:</i> Isaiah 60:13-22<br/>
                    <i>The Second Lesson:</i> Hebrews 2<br/>
                    *************<br/>
                    <b>December 31</b><br/>
                    <i>The Psalter:</i> Psalm 90, Psalm 150<br/>
                    <i>The First Lesson:</i> Deuteronomy 10:12 - 11:1<br/>
                    <i>The Second Lesson:</i> Hebrews 3<br/>
                    *************<br/>
                    <b>Circumcision</b><br/>
                    <i>The Psalter:</i> Psalm 148<br/>
                    <i>The First Lesson:</i> Deuteronomy 30:11-20<br/>
                    <i>The Second Lesson:</i> Revelation 19:11-16<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="chr2">&nbsp;</a><br/>
                        Second Sunday after Christmas<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 112<br/>
                    <i>The First Lesson:</i> Proverbs 9:1-6, 10<br/>
                    <i>The Second Lesson:</i> II Corinthians 4:1-6<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Haggai 2:1-9<br/>
                    <i>The Second Lesson:</i> St. Luke 2:34-40<br/>
                    *************<br/>
                    <b>January 2nd</b><br/>
                    <i>The Psalter:</i> Psalm 2, Psalm 110<br/>
                    <i>The First Lesson:</i> Isaiah 63:15-64:1<br/>
                    <i>The Second Lesson:</i> Hebrews 4:1-13<br/>
                    *************<br/>
                    <b>January 3rd</b><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Isaiah 65:8-16<br/>
                    <i>The Second Lesson:</i> Hebrews 4:14-5:14<br/>
                    *************<br/>
                    <b>January 4th</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Isaiah 66:1-2, 5-13<br/>
                    <i>The Second Lesson:</i> Hebrews 6:1-12<br/>
                    *************<br/>
                    <b>January 5th</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 98<br/>
                    <i>The First Lesson:</i> Isaiah 49:1-7<br/>
                    <i>The Second Lesson:</i> Luke 3:15-22<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epip">&nbsp;</a><br/>
                        Epiphany<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Isaiah 61<br/>
                    <i>The Second Lesson:</i> Romans 15:8-21<br/>
                    *************<br/>
                    <b>January 7th</b><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 99<br/>
                    <i>The First Lesson:</i> Isaiah 43:1-12<br/>
                    <i>The Second Lesson:</i> Acts 11:1-18<br/>
                    *************<br/>
                    <b>January 8th</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 96<br/>
                    <i>The First Lesson:</i> Isaiah 48:12-21<br/>
                    <i>The Second Lesson:</i> Acts 26:1, 13-23<br/>
                    *************<br/>
                    <b>January 9th</b><br/>
                    <i>The Psalter:</i> Psalm 48, Psalm 117<br/>
                    <i>The First Lesson:</i> Isaiah 54:1-10<br/>
                    <i>The Second Lesson:</i> Acts 28:23<br/>
                    *************<br/>
                    <b>January 10th</b><br/>
                    <i>The Psalter:</i> Psalm 138, Psalm 146<br/>
                    <i>The First Lesson:</i> Zechariah 8:11-13, 20-23<br/>
                    <i>The Second Lesson:</i> Romans 10:1-20<br/>
                    *************<br/>
                    <b>January 11th</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Tobit 13:1b-5, 7-11<br/>
                    <i>The Second Lesson:</i> Romans 11:13-27<br/>
                    *************<br/>
                    <b>January 12th</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Isaiah 9:2-7<br/>
                    <i>The Second Lesson:</i> Galatians 3:27 - 4:7<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi1">&nbsp;</a><br/>
                        First Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 84, Psalm 122<br/>
                    <i>The First Lesson:</i> I Samuel 1:21<br/>
                    <i>The Second Lesson:</i> St. Matthew 18:1-14<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 67<br/>
                    <i>The First Lesson:</i> Isaiah 49:1-7<br/>
                    <i>The Second Lesson:</i> I John 1:1-9<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Ezekiel 1:2-6, 24-28<br/>
                    <i>The Second Lesson:</i> St. John 1:1-18<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Ezekiel 2<br/>
                    <i>The Second Lesson:</i> St. John 1:19-34<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 13, Psalm 14<br/>
                    <i>The First Lesson:</i> Ezekiel 3:4-14<br/>
                    <i>The Second Lesson:</i> St. John 1:35<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 21<br/>
                    <i>The First Lesson:</i> Ezekiel 3:16-21<br/>
                    <i>The Second Lesson:</i> St. John 2:1-12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 6, Psalm 26<br/>
                    <i>The First Lesson:</i> Ezekiel 7:10-15, 23-27<br/>
                    <i>The Second Lesson:</i> St. John 2:13<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Ezekiel 11:14-20<br/>
                    <i>The Second Lesson:</i> St. John 3:1-13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi2">&nbsp;</a><br/>
                        Second Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 102:15, Psalm 117<br/>
                    <i>The First Lesson:</i> Isaiah 45:1-15<br/>
                    <i>The Second Lesson:</i> Romans 9:14-26<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 127<br/>
                    <i>The First Lesson:</i> Isaiah 54:11<br/>
                    <i>The Second Lesson:</i> St. John 1:35<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Ezekiel 12:21<br/>
                    <i>The Second Lesson:</i> St. John 3:14-21<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Ezekiel 13:1-9<br/>
                    <i>The Second Lesson:</i> St. John 3:22<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> Ezekiel 14:1-11<br/>
                    <i>The Second Lesson:</i> St. John 4:1-14<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Ezekiel 14:12-20<br/>
                    <i>The Second Lesson:</i> St. John 4:15-26<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Ezekiel 18:1-4, 19-23<br/>
                    <i>The Second Lesson:</i> St. John 4:27-42<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Ezekiel 18:26<br/>
                    <i>The Second Lesson:</i> St. John 4:43<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi3">&nbsp;</a><br/>
                        Third Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 27, Psalm 134<br/>
                    <i>The First Lesson:</i> Isaiah 56:1-8<br/>
                    <i>The Second Lesson:</i> St. John 2:13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Isaiah 54:1-8<br/>
                    <i>The Second Lesson:</i> Romans 14:1-15:3<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 37:1-24<br/>
                    <i>The First Lesson:</i> Ezekiel 27:1-5, 26-36<br/>
                    <i>The Second Lesson:</i> John 5:1-15<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 47<br/>
                    <i>The First Lesson:</i> Ezekiel 33:1-9<br/>
                    <i>The Second Lesson:</i> St. John 5:16-29<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Ezekiel 33:10-20<br/>
                    <i>The Second Lesson:</i> St. John 5:30<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Ezekiel 33:23<br/>
                    <i>The Second Lesson:</i> St. John 6:1-14<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 54, Psalm 57<br/>
                    <i>The First Lesson:</i> Ezekiel 34:1-10<br/>
                    <i>The Second Lesson:</i> St. John 6:15-29<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 99<br/>
                    <i>The First Lesson:</i> Ezekiel 34:11-16<br/>
                    <i>The Second Lesson:</i> St. John 6:30-40<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi4">&nbsp;</a><br/>
                        Fourth Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Isaiah 45:20<br/>
                    <i>The Second Lesson:</i> Romans 10<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 36:5<br/>
                    <i>The First Lesson:</i> Daniel 10:10-19<br/>
                    <i>The Second Lesson:</i> St. Mark 6:45<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Ezekiel 34:25<br/>
                    <i>The Second Lesson:</i> St. John 6:41-59<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Ezekiel 36:22-28<br/>
                    <i>The Second Lesson:</i> St. John 6:60<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Ezekiel 37:1-14<br/>
                    <i>The Second Lesson:</i> St. John 7:1-13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Ezekiel 37:21b<br/>
                    <i>The Second Lesson:</i> St. John 7:14-24<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 75, Psalm 76<br/>
                    <i>The First Lesson:</i> Ezekiel 39:21<br/>
                    <i>The Second Lesson:</i> St. John 7:25-36<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 67<br/>
                    <i>The First Lesson:</i> Ezekiel 43:1-9<br/>
                    <i>The Second Lesson:</i> St. John 7:37<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi5">&nbsp;</a><br/>
                        Fifth Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 21, Psalm 22:23<br/>
                    <i>The First Lesson:</i> Joel 3:9-17<br/>
                    <i>The Second Lesson:</i> St. Matthew 13:36-52<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Amos 5:14-24<br/>
                    <i>The Second Lesson:</i> Galatians 6:1-10<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 81<br/>
                    <i>The First Lesson:</i> Isaiah 14:3-11<br/>
                    <i>The Second Lesson:</i> I Thessalonians 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Isaiah 14:12-20<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:1-13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Isaiah 22:1-5, 12-14<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:17 - 3:13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 94<br/>
                    <i>The First Lesson:</i> Isaiah 24:1-6, 10-16a<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:1-12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 102<br/>
                    <i>The First Lesson:</i> Isaiah 31<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:13<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 84, Psalm 122<br/>
                    <i>The First Lesson:</i> Isaiah 47:1, 7-15<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:1-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="epi6">&nbsp;</a><br/>
                        Sixth Sunday after Epiphany<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> Genesis 19:1-3, 12-17, 24-28<br/>
                    <i>The Second Lesson:</i> St. Luke 17:20<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 76, Psalm 96<br/>
                    <i>The First Lesson:</i> II Esdras 8:63 - 9:13<br/>
                    <i>The Second Lesson:</i> II Peter 3:1-14, 17-18<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Wisdom 1:1-7<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Wisdom 6:1-11<br/>
                    <i>The Second Lesson:</i> II Thessalonians 1<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 105<br/>
                    <i>The First Lesson:</i> Wisdom 6:12-21<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:1-12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 114, Psalm 124<br/>
                    <i>The First Lesson:</i> Wisdom 7:7-14<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:13 - 3:5<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Wisdom 7:15-22a<br/>
                    <i>The Second Lesson:</i> II Thessalonians 3:6<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 85, Psalm 134<br/>
                    <i>The First Lesson:</i> Wisdom 7:22 - 8:1<br/>
                    <i>The Second Lesson:</i> Jude<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="sept">&nbsp;</a><br/>
                        Septuagesima<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> I Maccabees 2:49-64<br/>
                    <i>The Second Lesson:</i> I Timothy 6:11-19<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Isaiah 5:1-7<br/>
                    <i>The Second Lesson:</i> St. Matthew 21:23-32<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 126, Psalm 128, Psalm 131<br/>
                    <i>The First Lesson:</i> Amos 7:1-8, 8:1-3<br/>
                    <i>The Second Lesson:</i> Galatians 1:1-10<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 129, Psalm 130<br/>
                    <i>The First Lesson:</i> Amos 1:1-5, 13-2:3<br/>
                    <i>The Second Lesson:</i> Galatians 1:11<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Amos 2:6<br/>
                    <i>The Second Lesson:</i> Galatians 2:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Amos 3<br/>
                    <i>The Second Lesson:</i> Galatians 2:11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 142, Psalm 146<br/>
                    <i>The First Lesson:</i> Amos 4:4<br/>
                    <i>The Second Lesson:</i> Galatians 3:1-9<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Amos 5:1-13<br/>
                    <i>The Second Lesson:</i> Galatians 3:10-18<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="sexa">&nbsp;</a><br/>
                        Sexagesima<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Ecclesiastes 11:1-6<br/>
                    <i>The Second Lesson:</i> St. John 4:31-38<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 37:26, Psalm 124<br/>
                    <i>The First Lesson:</i> Daniel 3:1-26<br/>
                    <i>The Second Lesson:</i> St. Matthew 10:16-23, 40-42<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Amos 5:14-24<br/>
                    <i>The Second Lesson:</i> Galatians 3:19<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Amos 6:1-8<br/>
                    <i>The Second Lesson:</i> Galatians 4:1-11<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 13, Psalm 14<br/>
                    <i>The First Lesson:</i> Amos 8:4-12<br/>
                    <i>The Second Lesson:</i> Galatians 4:12-20<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 17<br/>
                    <i>The First Lesson:</i> Amos 9:1-10<br/>
                    <i>The Second Lesson:</i> Galatians 4:21<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 6, Psalm 26<br/>
                    <i>The First Lesson:</i> Amos 7:10<br/>
                    <i>The Second Lesson:</i> Galatians 5:1-12<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 98<br/>
                    <i>The First Lesson:</i> Hosea 4:1-2, 6-10<br/>
                    <i>The Second Lesson:</i> Galatians 5:13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="quin">&nbsp;</a><br/>
                        Quinquagesima<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:33-48 (Section V - VI)<br/>
                    <i>The First Lesson:</i> Leviticus 19:1-2, 9-18<br/>
                    <i>The Second Lesson:</i> I John 4<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Isaiah 51:1-8<br/>
                    <i>The Second Lesson:</i> St. Mark 9:14-32<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 21:1-6<br/>
                    <i>The First Lesson:</i> Hosea 5:10-6:6<br/>
                    <i>The Second Lesson:</i> Galatians 6:1-10<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Hosea 11:1-4, 13:5-16a<br/>
                    <i>The Second Lesson:</i> Galatians 6:11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="ashw">&nbsp;</a><br/>
                        Ash Wednesday<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 102, Psalm 130<br/>
                    <i>The First Lesson:</i> Jonah 3, 4<br/>
                    <i>The Second Lesson:</i> St. Luke 15:11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 30<br/>
                    <i>The First Lesson:</i> Jeremiah 1:4-10, 13-19<br/>
                    <i>The Second Lesson:</i> St. John 8:1-11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> Jeremiah 2:1-9, 13<br/>
                    <i>The Second Lesson:</i> St. John 8:12-20, 31-36<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Jeremiah 3:11-18<br/>
                    <i>The Second Lesson:</i> St. John 8:45<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len1">&nbsp;</a><br/>
                        First Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 92<br/>
                    <i>The First Lesson:</i> Jeremiah 17:5-14<br/>
                    <i>The Second Lesson:</i> I Corinthians 10:1-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 69:1-19, 30-37<br/>
                    <i>The First Lesson:</i> Daniel 9:3-10<br/>
                    <i>The Second Lesson:</i> St. Luke 5:33-6:10<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Jeremiah 3:19<br/>
                    <i>The Second Lesson:</i> St. John 9:1-23<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 47<br/>
                    <i>The First Lesson:</i> Jeremiah 4:1-9<br/>
                    <i>The Second Lesson:</i> St. John 9:24<br/>
                    *************<br/>
                    <b>Ember Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 16<br/>
                    <i>The First Lesson:</i> Ezekiel 3:16<br/>
                    <i>The Second Lesson:</i> II Corinthians 4<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Jeremiah 4:11-22<br/>
                    <i>The Second Lesson:</i> St. John 10:1-10<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Ezekiel 37:1-14<br/>
                    <i>The Second Lesson:</i> I Timothy 4<br/>
                    *************<br/>
                    <b>Ember Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 23<br/>
                    <i>The First Lesson:</i> Ezekiel 37:21b<br/>
                    <i>The Second Lesson:</i> I Timothy 6:6<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len2">&nbsp;</a><br/>
                        Second Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 26, Psalm 119:1-16 (Section I - II)<br/>
                    <i>The First Lesson:</i> II Samuel 12:1-10, 13-14<br/>
                    <i>The Second Lesson:</i> I Corinthians 6:9<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 51:1-12<br/>
                    <i>The Second Lesson:</i> St. Luke 18:1-8<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Jeremiah 4:23<br/>
                    <i>The Second Lesson:</i> St. John 10:11-21<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Jeremiah 5:1-9<br/>
                    <i>The Second Lesson:</i> St. John 10:22-38<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 65, Psalm 67<br/>
                    <i>The First Lesson:</i> Jeremiah 5:10-19<br/>
                    <i>The Second Lesson:</i> St. John 11:1-16<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Jeremiah 5:20<br/>
                    <i>The Second Lesson:</i> St. John 11:17-27<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 69:1-22, 30-37<br/>
                    <i>The First Lesson:</i> Jeremiah 6:1-8<br/>
                    <i>The Second Lesson:</i> St. John 11:28-44<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Jeremiah 6:9-21<br/>
                    <i>The Second Lesson:</i> St. John 11:45<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len3">&nbsp;</a><br/>
                        Third Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:113-128 (Section XV - X), Psalm 143<br/>
                    <i>The First Lesson:</i> Amos 5:4-15<br/>
                    <i>The Second Lesson:</i> Galatians 5:16-24<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Proverbs 4:7-18<br/>
                    <i>The Second Lesson:</i> St. Luke 11:29-36<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Jeremiah 7:1-15<br/>
                    <i>The Second Lesson:</i> St. Mark 10:17-31<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Jeremiah 7:21-29<br/>
                    <i>The Second Lesson:</i> St. Mark 10:32-45<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Jeremiah 8:4-13<br/>
                    <i>The Second Lesson:</i> St. Mark 10:46<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Jeremiah 9:2-16<br/>
                    <i>The Second Lesson:</i> St. Mark 11:12-26<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> Jeremiah 9:17-24<br/>
                    <i>The Second Lesson:</i> St. Mark 12:1-12<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Jeremiah 10:1-13<br/>
                    <i>The Second Lesson:</i> St. Mark 12:13-17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len4">&nbsp;</a><br/>
                        Fourth Sunday in Lent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Isaiah 55<br/>
                    <i>The Second Lesson:</i> St. John 6:41-51<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 122<br/>
                    <i>The First Lesson:</i> II Esdras 2:15-32<br/>
                    <i>The Second Lesson:</i> Revelation 3:1-12<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Jeremiah 13:15<br/>
                    <i>The Second Lesson:</i> St. Mark 12:18-27<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Jeremiah 14:1-10<br/>
                    <i>The Second Lesson:</i> St. Mark 12:28-37<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 98<br/>
                    <i>The First Lesson:</i> Jeremiah 15:1-9<br/>
                    <i>The Second Lesson:</i> St. Mark 12:38<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 99, Psalm 100<br/>
                    <i>The First Lesson:</i> Jeremiah 15:10<br/>
                    <i>The Second Lesson:</i> St. Mark 13:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 107<br/>
                    <i>The First Lesson:</i> Jeremiah 16:5-13<br/>
                    <i>The Second Lesson:</i> St. Mark 13:14-23<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Jeremiah 17:5-15<br/>
                    <i>The Second Lesson:</i> St. Mark 13:24<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len5">&nbsp;</a><br/>
                        Passion Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Hosea 6:1-6<br/>
                    <i>The Second Lesson:</i> Hebrews 10:1-25<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 40:1-16<br/>
                    <i>The First Lesson:</i> Jeremiah 14:7-21<br/>
                    <i>The Second Lesson:</i> St. John 10:17-38<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 119:17-32 (Section III - IV), Psalm 117<br/>
                    <i>The First Lesson:</i> Jeremiah 20:7-13<br/>
                    <i>The Second Lesson:</i> St. John 12:1-11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 120, Psalm 121, Psalm 122<br/>
                    <i>The First Lesson:</i> Jeremiah 22:10-23<br/>
                    <i>The Second Lesson:</i> St. John 12:12-19<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Jeremiah 28:1-2, 10-17<br/>
                    <i>The Second Lesson:</i> St. John 12:20-33<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 133, Psalm 134, Psalm 137:1-6<br/>
                    <i>The First Lesson:</i> Jeremiah 30:12-17, 23-24<br/>
                    <i>The Second Lesson:</i> St. John 12:34-43<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Jeremiah 32:36-42<br/>
                    <i>The Second Lesson:</i> St. John 12:44<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Jeremiah 33:1-9, 14-16<br/>
                    <i>The Second Lesson:</i> St. John 13:1-17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="len6">&nbsp;</a><br/>
                        Palm Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 130, Psalm 138<br/>
                    <i>The First Lesson:</i> Jeremiah 8:9-15, 18-9:1<br/>
                    <i>The Second Lesson:</i> I Corinthians 1:17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Isaiah 59:1-3, 9-21<br/>
                    <i>The Second Lesson:</i> St. John 12:20-36<br/>
                    *************<br/>
                    <b>Monday before Easter</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Lamentations 1:7-12<br/>
                    <i>The Second Lesson:</i> St. John 14:15<br/>
                    *************<br/>
                    <b>Tuesday before Easter</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Lamentations 2:10, 13-19<br/>
                    <i>The Second Lesson:</i> St. John 15:17<br/>
                    *************<br/>
                    <b>Wednesday before Easter</b><br/>
                    <i>The Psalter:</i> Psalm 74<br/>
                    <i>The First Lesson:</i> Lamentations 3:1, 14-33<br/>
                    <i>The Second Lesson:</i> St. John 16:16<br/>
                    *************<br/>
                    <b>Maundy Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 142, Psalm 143<br/>
                    <i>The First Lesson:</i> Lamentations 3:40-58<br/>
                    <i>The Second Lesson:</i> St. John 17<br/>
                    *************<br/>
                    <b>Good Friday</b><br/>
                    <i>The Psalter:</i> Psalm 69:1-22, Psalm 88<br/>
                    <i>The First Lesson:</i> Isaiah 52:13-53:12<br/>
                    <i>The Second Lesson:</i> I Peter 2:11<br/>
                    *************<br/>
                    <b>Easter Even</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Job 19:21-27a<br/>
                    <i>The Second Lesson:</i> Romans 6:3-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="east">&nbsp;</a><br/>
                        Easter Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 98, Psalm 114<br/>
                    <i>The First Lesson:</i> Isaiah 51:9-16<br/>
                    <i>The Second Lesson:</i> St. Luke 24:13-35<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Isaiah 12<br/>
                    <i>The Second Lesson:</i> St. John 20:11-18<br/>
                    *************<br/>
                    <b>Easter Monday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Exodus 15:1-13<br/>
                    <i>The Second Lesson:</i> St. John 20:1-10<br/>
                    *************<br/>
                    <b>Easter Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Isaiah 30:18-21<br/>
                    <i>The Second Lesson:</i> St. John 20:11-18<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 148<br/>
                    <i>The First Lesson:</i> Isaiah 26:12-16, 19<br/>
                    <i>The Second Lesson:</i> St. John 20:19-23<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Isaiah 52:1-10<br/>
                    <i>The Second Lesson:</i> St. John 20:24<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 110, Psalm 114<br/>
                    <i>The First Lesson:</i> Zephaniah 3:14<br/>
                    <i>The Second Lesson:</i> St. John 21:1-14<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Jeremiah 31:10-14<br/>
                    <i>The Second Lesson:</i> St. John 21:15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est1">&nbsp;</a><br/>
                        First Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Zephaniah 3:13<br/>
                    <i>The Second Lesson:</i> St. John 20:19<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 121<br/>
                    <i>The First Lesson:</i> II Esdras 2:33<br/>
                    <i>The Second Lesson:</i> Revelation 1:4-18<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 11<br/>
                    <i>The First Lesson:</i> Isaiah 40:1-11<br/>
                    <i>The Second Lesson:</i> I Peter 1:1-12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 24<br/>
                    <i>The First Lesson:</i> Isaiah 40:12-17<br/>
                    <i>The Second Lesson:</i> I Peter 1:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Isaiah 40:18, 21-31<br/>
                    <i>The Second Lesson:</i> I Peter 2:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 46<br/>
                    <i>The First Lesson:</i> Isaiah 42:1-9<br/>
                    <i>The Second Lesson:</i> I Peter 2:11-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Isaiah 42:10-17<br/>
                    <i>The Second Lesson:</i> I Peter 2:18<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 111<br/>
                    <i>The First Lesson:</i> Isaiah 43:1-7<br/>
                    <i>The Second Lesson:</i> I Peter 3:1-12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est2">&nbsp;</a><br/>
                        Second Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Ezekiel 34:11-16, 30-31<br/>
                    <i>The Second Lesson:</i> St. John 21:1-19<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 16, Psalm 100<br/>
                    <i>The First Lesson:</i> II Esdras 8:20-30, 46, 51-54<br/>
                    <i>The Second Lesson:</i> I Corinthians 15:12-23<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 47, Psalm 48<br/>
                    <i>The First Lesson:</i> Isaiah 43:8-13<br/>
                    <i>The Second Lesson:</i> I Peter 3:13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 61, Psalm 62<br/>
                    <i>The First Lesson:</i> Isaiah 43:15-21, 44:1-3<br/>
                    <i>The Second Lesson:</i> I Peter 4:1-6<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Isaiah 44:6-8, 21-23<br/>
                    <i>The Second Lesson:</i> I Peter 4:7-11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Isaiah 44:9-20<br/>
                    <i>The Second Lesson:</i> I Peter 4:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Isaiah 44:24 - 45:4<br/>
                    <i>The Second Lesson:</i> I Peter 5:1-7<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Isaiah 45:5-12, 15-19<br/>
                    <i>The Second Lesson:</i> I Peter 5:8<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est3">&nbsp;</a><br/>
                        Third Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 68:1-20<br/>
                    <i>The First Lesson:</i> Isaiah 26:12-16, 19<br/>
                    <i>The Second Lesson:</i> II Corinthians 5<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 115<br/>
                    <i>The First Lesson:</i> Wisdom 5:1-6, 14-16<br/>
                    <i>The Second Lesson:</i> St. Luke 20:27-39<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Isaiah 45:20<br/>
                    <i>The Second Lesson:</i> Ephesians 1:1-14<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 84, Psalm 117<br/>
                    <i>The First Lesson:</i> Isaiah 46:3-4, 9-13<br/>
                    <i>The Second Lesson:</i> Ephesians 1:15<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Isaiah 48:12-21<br/>
                    <i>The Second Lesson:</i> Ephesians 2:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 98<br/>
                    <i>The First Lesson:</i> Isaiah 49:1-12<br/>
                    <i>The Second Lesson:</i> Ephesians 2:11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Isaiah 49:13-23<br/>
                    <i>The Second Lesson:</i> Ephesians 3:1-12<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 23, Psalm 30<br/>
                    <i>The First Lesson:</i> Isaiah 50:4-10<br/>
                    <i>The Second Lesson:</i> Ephesians 3:13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est4">&nbsp;</a><br/>
                        Fourth Sunday after Easter<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Daniel 12:1-4, 13<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Isaiah 60:13<br/>
                    <i>The Second Lesson:</i> St. John 8:12-30<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 113<br/>
                    <i>The First Lesson:</i> Isaiah 51:1-11<br/>
                    <i>The Second Lesson:</i> Ephesians 4:1-16<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 121, Psalm 122<br/>
                    <i>The First Lesson:</i> Isaiah 51:12-16<br/>
                    <i>The Second Lesson:</i> Ephesians 4:17<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 135<br/>
                    <i>The First Lesson:</i> Isaiah 52:1-2, 7-12<br/>
                    <i>The Second Lesson:</i> Ephesians 5:1-14<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Isaiah 54:1-10<br/>
                    <i>The Second Lesson:</i> Ephesians 5:15<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 130, Psalm 138<br/>
                    <i>The First Lesson:</i> Isaiah 54:11<br/>
                    <i>The Second Lesson:</i> Ephesians 6:1-9<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Isaiah 55<br/>
                    <i>The Second Lesson:</i> Ephesians 6:10<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="est5">&nbsp;</a><br/>
                        Rogation Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Isaiah 48:12-21<br/>
                    <i>The Second Lesson:</i> Revelation 5<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Ezekiel 36:25<br/>
                    <i>The Second Lesson:</i> St. Mark 11:22-26<br/>
                    *************<br/>
                    <b>Rogation Monday</b><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Deuteronomy 28:1-14<br/>
                    <i>The Second Lesson:</i> James 1:1-7<br/>
                    *************<br/>
                    <b>Rogation Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 65, Psalm 67<br/>
                    <i>The First Lesson:</i> I Kings 8:22-30<br/>
                    <i>The Second Lesson:</i> James 4:8<br/>
                    *************<br/>
                    <b>Ascension Eve</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 99<br/>
                    <i>The First Lesson:</i> Three Children 29-37<br/>
                    <i>The Second Lesson:</i> St. Luke 24:44<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="asce">&nbsp;</a><br/>
                        Ascension Day<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 24, Psalm 47<br/>
                    <i>The First Lesson:</i> Isaiah 33:5-6. 17, 20-22<br/>
                    <i>The Second Lesson:</i> Hebrews 4:14 - 5:10<br/>
                    *************<br/>
                    <b>Ascension Friday<br/>
                    </b>
                    <i>The Psalter:</i> Psalm 20, Psalm 29<br/>
                    <i>The First Lesson:</i> Isaiah 12<br/>
                    <i>The Second Lesson:</i> Acts 1:12<br/>
                    *************<br/>
                    <b>Ascension Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 8, Psalm 98<br/>
                    <i>The First Lesson:</i> Jeremiah 23:5-8<br/>
                    <i>The Second Lesson:</i> Acts 2:1-21<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="ascs">&nbsp;</a><br/>
                        Sunday After Ascension<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 96<br/>
                    <i>The First Lesson:</i> Wisdom 9<br/>
                    <i>The Second Lesson:</i> Ephesians 1<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 47<br/>
                    <i>The First Lesson:</i> Isaiah 32:1-4, 15-20<br/>
                    <i>The Second Lesson:</i> St. John 3:16-21, 31-36a<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 110<br/>
                    <i>The First Lesson:</i> Daniel 7:9-10, 13-14<br/>
                    <i>The Second Lesson:</i> Revelation 22<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Isaiah 66:1-2, 10-13<br/>
                    <i>The Second Lesson:</i> Acts 2:22-36<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 57, Psalm 138<br/>
                    <i>The First Lesson:</i> Isaiah 26:1-7<br/>
                    <i>The Second Lesson:</i> Acts 2:37<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Isaiah 25:1-9<br/>
                    <i>The Second Lesson:</i> Acts 3:1-10<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Isaiah 9:2-7<br/>
                    <i>The Second Lesson:</i> Acts 3:11<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 116, Psalm 117<br/>
                    <i>The First Lesson:</i> II Samuel 22:32-34, 44-51<br/>
                    <i>The Second Lesson:</i> Acts 4:1-12<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 133<br/>
                    <i>The First Lesson:</i> Deuteronomy 16:9-12<br/>
                    <i>The Second Lesson:</i> Romans 8:12-18<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="whit">&nbsp;</a><br/>
                        Whitsunday (Pentecost)<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Wisdom 7:22 - 8:1<br/>
                    <i>The Second Lesson:</i> I Corinthians 2<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 48, Psalm 122<br/>
                    <i>The First Lesson:</i> Isaiah 11:1-9<br/>
                    <i>The Second Lesson:</i> St. John 6:53-69<br/>
                    *************<br/>
                    <b>Whit Monday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Jeremiah 31:31-34<br/>
                    <i>The Second Lesson:</i> Acts 4:13-22<br/>
                    *************<br/>
                    <b>Whit Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Numbers 11:16-17, 24-30<br/>
                    <i>The Second Lesson:</i> Acts 4:23<br/>
                    *************<br/>
                    <b>Ember Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 84<br/>
                    <i>The First Lesson:</i> Wisdom 9:9-11, 17-18<br/>
                    <i>The Second Lesson:</i> Acts 5:12-28<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Wisdom 11:21 - 12:2<br/>
                    <i>The Second Lesson:</i> Acts 5:29<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 43, Psalm 134<br/>
                    <i>The First Lesson:</i> Isaiah 52:1-10<br/>
                    <i>The Second Lesson:</i> Acts 6<br/>
                    *************<br/>
                    <b>Trinity Eve</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 113<br/>
                    <i>The First Lesson:</i> Numbers 6:22<br/>
                    <i>The Second Lesson:</i> II Corinthians 13:5<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trin">&nbsp;</a><br/>
                        Trinity Sunday<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 98, Psalm 100<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 43:1-12, 27-33<br/>
                    <i>The Second Lesson:</i> Ephesians 4:1-16<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Job 38:1-11, 16-18, 42:1-6<br/>
                    <i>The Second Lesson:</i> St. John 1:29-34<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Ezra 1:1-8<br/>
                    <i>The Second Lesson:</i> Acts 7:1-16<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 16, Psalm 20<br/>
                    <i>The First Lesson:</i> Ezra 4:7, 11-24<br/>
                    <i>The Second Lesson:</i> Acts 7:17-34<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Haggai 1:1-8, 12-15<br/>
                    <i>The Second Lesson:</i> Acts 7:35-53<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Haggai 2:1-9<br/>
                    <i>The Second Lesson:</i> Acts 7:54 - 8:4<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 6, Psalm 26<br/>
                    <i>The First Lesson:</i> Zechariah 1:7-17<br/>
                    <i>The Second Lesson:</i> Acts 8:5-25<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 30<br/>
                    <i>The First Lesson:</i> Zechariah 2<br/>
                    <i>The Second Lesson:</i> Acts 8:26<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn1">&nbsp;</a><br/>
                        First Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:33-48 (Section V - VI)<br/>
                    <i>The First Lesson:</i> Deuteronomy 30:11<br/>
                    <i>The Second Lesson:</i> St. John 13:1-17, 34-35<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Job 21:17-33<br/>
                    <i>The Second Lesson:</i> St. Luke 16:19<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 85<br/>
                    <i>The First Lesson:</i> I Samuel 1:1-11, 19-20<br/>
                    <i>The Second Lesson:</i> Acts 6<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> Ezra 5:1-2, 6-17<br/>
                    <i>The Second Lesson:</i> Acts 9:1-19<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Ezra 6:1-12<br/>
                    <i>The Second Lesson:</i> Acts 9:20-31<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Ezra 6:13-18<br/>
                    <i>The Second Lesson:</i> Acts 9:32<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Zechariah 7:8<br/>
                    <i>The Second Lesson:</i> Acts 10:1-23<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 41, Psalm 54<br/>
                    <i>The First Lesson:</i> Zechariah 8:1-13<br/>
                    <i>The Second Lesson:</i> Acts 10:24-33<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 47<br/>
                    <i>The First Lesson:</i> Zechariah 8:14<br/>
                    <i>The Second Lesson:</i> Acts 10:34<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn2">&nbsp;</a><br/>
                        Second Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> I Samuel 20:1-7, 12-42<br/>
                    <i>The Second Lesson:</i> I Peter 1:17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 138, Psalm 146<br/>
                    <i>The First Lesson:</i> II Kings 4:8-17<br/>
                    <i>The Second Lesson:</i> St. Luke 14:12-24<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> I Samuel 3:1-18<br/>
                    <i>The Second Lesson:</i> Acts 7:44 - 8:4<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Ezra 5:1-2, 6-17<br/>
                    <i>The Second Lesson:</i> Acts 9:1-19<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Ezra 8:15a, 21-23, 31-36<br/>
                    <i>The Second Lesson:</i> Acts 11:19<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 61, Psalm 62<br/>
                    <i>The First Lesson:</i> Nehemiah 1<br/>
                    <i>The Second Lesson:</i> Acts 12:1-24<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Nehemiah 2:1-8<br/>
                    <i>The Second Lesson:</i> Acts 12:25 - 13:12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Nehemiah 2:9<br/>
                    <i>The Second Lesson:</i> Acts 13:13-25<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Nehemiah 4:6<br/>
                    <i>The Second Lesson:</i> Acts 13:26-43<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn3">&nbsp;</a><br/>
                        Third Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 32, Psalm 36:5<br/>
                    <i>The First Lesson:</i> Jeremiah 23:1-8<br/>
                    <i>The Second Lesson:</i> St. Luke 19:2-10<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Ezekiel 34:20-24<br/>
                    <i>The Second Lesson:</i> St. Luke 15:1-10<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> I Samuel 8<br/>
                    <i>The Second Lesson:</i> Acts 8:5-25<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 84, Psalm 85<br/>
                    <i>The First Lesson:</i> Nehemiah 5:1-13<br/>
                    <i>The Second Lesson:</i> Acts 13:44 -14:7<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Nehemiah 8:1-3, 5-6, 9-12<br/>
                    <i>The Second Lesson:</i> Acts 14:8-18<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Nehemiah 9:5-15<br/>
                    <i>The Second Lesson:</i> Acts 14:19<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 114<br/>
                    <i>The First Lesson:</i> Nehemiah 9:32<br/>
                    <i>The Second Lesson:</i> Acts 15:1-12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Nehemiah 13:15-22<br/>
                    <i>The Second Lesson:</i> Acts 15:13-21<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 99<br/>
                    <i>The First Lesson:</i> I Maccabees 1:1, 7-15<br/>
                    <i>The Second Lesson:</i> Acts 15:22-35<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn4">&nbsp;</a><br/>
                        Fourth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Isaiah 29:9-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 15:1-20<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Proverbs 27:1-6, 10-12<br/>
                    <i>The Second Lesson:</i> St. Luke 6:36-42<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> I Samuel 9:1-10, 18-19, 26 - 10:1<br/>
                    <i>The Second Lesson:</i> Acts 8:26<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 119:65-80 (Section IX - X), Psalm 117<br/>
                    <i>The First Lesson:</i> I Maccabees 1:41-53<br/>
                    <i>The Second Lesson:</i> Acts 15:36 - 16:5<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 126, Psalm 127, Psalm 130<br/>
                    <i>The First Lesson:</i> I Maccabees 1:54<br/>
                    <i>The Second Lesson:</i> Acts 16:6-15<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 132, Psalm 134<br/>
                    <i>The First Lesson:</i> I Maccabees 2:1-14<br/>
                    <i>The Second Lesson:</i> Acts 16:16-24<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> I Maccabees 2:15-30<br/>
                    <i>The Second Lesson:</i> Acts 16:25<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> I Maccabees 2:31-43<br/>
                    <i>The Second Lesson:</i> Acts 17:1-15<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> I Maccabees 2:49-52, 61-70<br/>
                    <i>The Second Lesson:</i> Acts 17:16<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn5">&nbsp;</a><br/>
                        Fifth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Proverbs 3:1-7, 11-12<br/>
                    <i>The Second Lesson:</i> St. Luke 14:25<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Judges 6:11-23<br/>
                    <i>The Second Lesson:</i> St. Luke 5:1-11<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 98<br/>
                    <i>The First Lesson:</i> I Samuel 11<br/>
                    <i>The Second Lesson:</i> Acts 9:1-20<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 8, Psalm 19<br/>
                    <i>The First Lesson:</i> I Maccabees 3:1-9<br/>
                    <i>The Second Lesson:</i> Acts 18:1-11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 13, Psalm 14<br/>
                    <i>The First Lesson:</i> I Maccabees 3:42-54<br/>
                    <i>The Second Lesson:</i> Acts 18:12-23<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> I Maccabees 4:36-51<br/>
                    <i>The Second Lesson:</i> Acts 18:24 - 19:7<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 31:1-6<br/>
                    <i>The First Lesson:</i> I Maccabees 4:52<br/>
                    <i>The Second Lesson:</i> Acts 19:8-20<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 32, Psalm 36:5<br/>
                    <i>The First Lesson:</i> Daniel 1:1-7, 17-21<br/>
                    <i>The Second Lesson:</i> Acts 19:21<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 47, Psalm 48<br/>
                    <i>The First Lesson:</i> Daniel 2:1-6, 10-13<br/>
                    <i>The Second Lesson:</i> Acts 20:1-16<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn6">&nbsp;</a><br/>
                        Sixth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 57, Psalm 130<br/>
                    <i>The First Lesson:</i> Exodus 24:1-11, 16-18<br/>
                    <i>The Second Lesson:</i> Hebrews 9:18<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 94:1-22<br/>
                    <i>The First Lesson:</i> Genesis 4:1-16<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:20-26<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> I Samuel 16:1-13<br/>
                    <i>The Second Lesson:</i> Acts 11:1-18<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Daniel 2:14-24<br/>
                    <i>The Second Lesson:</i> Acts 20:17<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Daniel 2:25-35<br/>
                    <i>The Second Lesson:</i> Acts 21:1-14<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 63<br/>
                    <i>The First Lesson:</i> Daniel 2:36-45<br/>
                    <i>The Second Lesson:</i> Acts 21:15-26<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Daniel 3:1-7<br/>
                    <i>The Second Lesson:</i> Acts 21:27-36<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Daniel 3:8-18<br/>
                    <i>The Second Lesson:</i> Acts 21:37 - 22:16<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 46<br/>
                    <i>The First Lesson:</i> Daniel 3:19<br/>
                    <i>The Second Lesson:</i> Acts 22:17-29<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn7">&nbsp;</a><br/>
                        Seventh Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Daniel 5:1-9, 13-30<br/>
                    <i>The Second Lesson:</i> Romans 1:17-21, 28-32<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Micah 7:14<br/>
                    <i>The Second Lesson:</i> St. Mark 8:1-21<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 24, Psalm 29<br/>
                    <i>The First Lesson:</i> I Samuel 17:1-11, 32, 40-50<br/>
                    <i>The Second Lesson:</i> Acts 11:19<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Daniel 4:4-5, 10-18<br/>
                    <i>The Second Lesson:</i> Acts 22:30 - 23:11<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 74<br/>
                    <i>The First Lesson:</i> Daniel 4:19-27<br/>
                    <i>The Second Lesson:</i> Acts 23:12-24<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 81<br/>
                    <i>The First Lesson:</i> Daniel 4:28<br/>
                    <i>The Second Lesson:</i> Acts 23:25 - 24:9<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Daniel 5:1-9<br/>
                    <i>The Second Lesson:</i> Acts 24:10-23<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Daniel 5:10-16<br/>
                    <i>The Second Lesson:</i> Acts 24:24 - 25:12<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 96, Psalm 98<br/>
                    <i>The First Lesson:</i> Daniel 5:17-30<br/>
                    <i>The Second Lesson:</i> Acts 25:13<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn8">&nbsp;</a><br/>
                        Eighth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 6:22<br/>
                    <i>The Second Lesson:</i> St. Luke 10:38<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Proverbs 11:24<br/>
                    <i>The Second Lesson:</i> St. Matthew 7:15-21<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> I Samuel 26:1-7, 12-17, 21-25<br/>
                    <i>The Second Lesson:</i> Acts 12:1-17<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Daniel 6:1-8<br/>
                    <i>The Second Lesson:</i> Acts 26:1-23<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Daniel 6:9-15<br/>
                    <i>The Second Lesson:</i> Acts 26:24 - 27:8<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 119:97-112 (Section XIII - XIV), Psalm 117<br/>
                    <i>The First Lesson:</i> Daniel 6:16-23, 25-27<br/>
                    <i>The Second Lesson:</i> Acts 27:9-26<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 132, Psalm 134<br/>
                    <i>The First Lesson:</i> Esther 2:5-8, 17-23<br/>
                    <i>The Second Lesson:</i> Acts 27:27<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 138, Psalm 146<br/>
                    <i>The First Lesson:</i> Esther 3:1-12<br/>
                    <i>The Second Lesson:</i> Acts 28:1-15<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Esther 4:1, 5-17<br/>
                    <i>The Second Lesson:</i> Acts 28:16<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn9">&nbsp;</a><br/>
                        Ninth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:9-24 (Section II, III)<br/>
                    <i>The First Lesson:</i> Proverbs 4:1-4, 20-27<br/>
                    <i>The Second Lesson:</i> Hebrews 12:1-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Lamentations 3:40-58<br/>
                    <i>The Second Lesson:</i> St. Luke 15:11<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 96<br/>
                    <i>The First Lesson:</i> I Samuel 31<br/>
                    <i>The Second Lesson:</i> Acts 13:1-3, 14-31, 38, 44-49<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Esther 5<br/>
                    <i>The Second Lesson:</i> Romans 1:1-17<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 16, Psalm 20<br/>
                    <i>The First Lesson:</i> Esther 6<br/>
                    <i>The Second Lesson:</i> Romans 2:1-16<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 23<br/>
                    <i>The First Lesson:</i> Esther 7<br/>
                    <i>The Second Lesson:</i> Romans 2:17<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 21:1-6, Psalm 24<br/>
                    <i>The First Lesson:</i> Micah 1:1-7a<br/>
                    <i>The Second Lesson:</i> Romans 3:1-20<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Micah 2<br/>
                    <i>The Second Lesson:</i> Romans 3:21<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 84<br/>
                    <i>The First Lesson:</i> Micah 3:1-8<br/>
                    <i>The Second Lesson:</i> Romans 4:1-12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn10">&nbsp;</a><br/>
                        Tenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 15, Psalm 46<br/>
                    <i>The First Lesson:</i> Isaiah 44:1-8, 21-23<br/>
                    <i>The Second Lesson:</i> Romans 12:1-9<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Lamentations 1:1-12<br/>
                    <i>The Second Lesson:</i> St. Luke 19:41<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 47, Psalm 48<br/>
                    <i>The First Lesson:</i> II Samuel 1:17<br/>
                    <i>The Second Lesson:</i> Acts 14:8<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 37:1-24<br/>
                    <i>The First Lesson:</i> Micah 4:1-8<br/>
                    <i>The Second Lesson:</i> Romans 4:13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 37:26<br/>
                    <i>The First Lesson:</i> Micah 4:9 - 5:1<br/>
                    <i>The Second Lesson:</i> Romans 5<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Micah 6:1-8<br/>
                    <i>The Second Lesson:</i> Romans 6<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Micah 6:9<br/>
                    <i>The Second Lesson:</i> Romans 7:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 54, Psalm 57<br/>
                    <i>The First Lesson:</i> Micah 7:1-9<br/>
                    <i>The Second Lesson:</i> Romans 7:14<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 65, Psalm 67<br/>
                    <i>The First Lesson:</i> Micah 7:14<br/>
                    <i>The Second Lesson:</i> Romans 8:1-17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn11">&nbsp;</a><br/>
                        Eleventh Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 68 or Psalm 123, Psalm 142<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 35:10-19<br/>
                    <i>The Second Lesson:</i> St. Mark 12:38<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 100, Psalm 101<br/>
                    <i>The First Lesson:</i> Ecclesiastes 5:1-7<br/>
                    <i>The Second Lesson:</i> St. Luke 18:9-14<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 121<br/>
                    <i>The First Lesson:</i> II Samuel 7:18<br/>
                    <i>The Second Lesson:</i> Acts 15:1-21<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Nahum 1:3-8, 15<br/>
                    <i>The Second Lesson:</i> Romans 8:18-27<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 78<br/>
                    <i>The First Lesson:</i> Nahum 2<br/>
                    <i>The Second Lesson:</i> Romans 8:28<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 85, Psalm 98<br/>
                    <i>The First Lesson:</i> Nahum 3<br/>
                    <i>The Second Lesson:</i> Romans 9:1-5, 14-24, 30-33<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Habakkuk 1:2-4, 12 - 2:4<br/>
                    <i>The Second Lesson:</i> Romans 10<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Habakkuk 2:9-14, 19-20<br/>
                    <i>The Second Lesson:</i> Romans 11:1-21<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> Habakkuk 3:2-6, 10-13, 18-19a<br/>
                    <i>The Second Lesson:</i> Romans 11:22<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn12">&nbsp;</a><br/>
                        Twelfth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Tobit 13:1b-5, 7-11<br/>
                    <i>The Second Lesson:</i> Romans 15:14-21<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 32, Psalm 126<br/>
                    <i>The First Lesson:</i> Isaiah 29:18<br/>
                    <i>The Second Lesson:</i> St. Mark 7:31<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 67, Psalm 122<br/>
                    <i>The First Lesson:</i> II Samuel 15:1-23<br/>
                    <i>The Second Lesson:</i> Acts 15:36 - 16:5, 9-15<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 114<br/>
                    <i>The First Lesson:</i> Zephaniah 1:2-3, 7, 14-18<br/>
                    <i>The Second Lesson:</i> Romans 12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Zephaniah 3:1-8<br/>
                    <i>The Second Lesson:</i> Romans 13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 121, Psalm 123, Psalm 124<br/>
                    <i>The First Lesson:</i> Zephaniah 3:9<br/>
                    <i>The Second Lesson:</i> Romans 14:1-12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 1:1-10<br/>
                    <i>The Second Lesson:</i> Romans 14:13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 1:11-20, 26-27<br/>
                    <i>The Second Lesson:</i> Romans 15:1-16<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 2<br/>
                    <i>The Second Lesson:</i> Romans 15:17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn13">&nbsp;</a><br/>
                        Thirteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Deuteronomy 15:7-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 26:6-13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> Deuteronomy 24:10<br/>
                    <i>The Second Lesson:</i> St. Luke 10:23-37<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 23<br/>
                    <i>The First Lesson:</i> II Samuel 18:1, 6-14, 19-33<br/>
                    <i>The Second Lesson:</i> Acts 16:16-34<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 3:17<br/>
                    <i>The Second Lesson:</i> St. Matthew 1:18<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 13, Psalm 14<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 4:1-18<br/>
                    <i>The Second Lesson:</i> St. Matthew 2:1-12<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 4:20 - 5:7<br/>
                    <i>The Second Lesson:</i> St. Matthew 2:13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 15:11<br/>
                    <i>The Second Lesson:</i> St. Matthew 3<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 16:17<br/>
                    <i>The Second Lesson:</i> St. Matthew 4:1-11<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 30<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 19:4-18<br/>
                    <i>The Second Lesson:</i> St. Matthew 4:12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn14">&nbsp;</a><br/>
                        Fourteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Jeremiah 7:1-11<br/>
                    <i>The Second Lesson:</i> St. Luke 13:18-30<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Deuteronomy 8:1-14, 17-20<br/>
                    <i>The Second Lesson:</i> St. Luke 17:11-19<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> I Kings 3:4-15<br/>
                    <i>The Second Lesson:</i> Acts 17:16<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 19:20<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:1-16<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 36:5, Psalm 47<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 20:9-20<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:17-26<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 62, Psalm 63<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 24:1-9, 18-22<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:27-37<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 28:13<br/>
                    <i>The Second Lesson:</i> St. Matthew 5:38<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 31:12-18, 25 - 32:2<br/>
                    <i>The Second Lesson:</i> St. Matthew 6:1-18<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 67, Psalm 93<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 34:1-8<br/>
                    <i>The Second Lesson:</i> St. Matthew 6:19<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn15">&nbsp;</a><br/>
                        Fifteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 26, Psalm 128<br/>
                    <i>The First Lesson:</i> Ecclesiastes 5:8<br/>
                    <i>The Second Lesson:</i> I Timothy 6:1-10<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Joel 2:21-27<br/>
                    <i>The Second Lesson:</i> St. Matthew 6:24<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 84<br/>
                    <i>The First Lesson:</i> I Kings 8:22-30, 54-63<br/>
                    <i>The Second Lesson:</i> Acts 18:1-17<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 71<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 34:18 - 35:3<br/>
                    <i>The Second Lesson:</i> St. Matthew 7:1-12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 36:1-17<br/>
                    <i>The Second Lesson:</i> St. Matthew 7:13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 37:6-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 8:1-13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 38:24<br/>
                    <i>The Second Lesson:</i> St. Matthew 8:14-27<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 89:1-19<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 42:15-21<br/>
                    <i>The Second Lesson:</i> St. Matthew 8:28 - 9:8<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 96<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 43:1-12<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:9-17<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn16">&nbsp;</a><br/>
                        Sixteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Ezekiel 33:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 24:37<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 142, Psalm 146<br/>
                    <i>The First Lesson:</i> I Kings 17:8-9, 17-24<br/>
                    <i>The Second Lesson:</i> St. Luke 7:11-17<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> I Kings 12:1-20<br/>
                    <i>The Second Lesson:</i> Acts 19:21<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 43:13-19<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:18-35<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 113<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 43:20<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:36 - 10:15<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 119:129-144 (Section XVII - XVIII), Psalm 117<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 44:1-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 10:16-31<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 121, Psalm 122, Psalm 138<br/>
                    <i>The First Lesson:</i> Job 1:1-12<br/>
                    <i>The Second Lesson:</i> St. Matthew 10:32 - 11:1<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Job 1:13<br/>
                    <i>The Second Lesson:</i> St. Matthew 11:2-19<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 97, Psalm 98<br/>
                    <i>The First Lesson:</i> Job 2<br/>
                    <i>The Second Lesson:</i> St. Matthew 11:20<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn17">&nbsp;</a><br/>
                        Seventeenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 36:5, Psalm 130<br/>
                    <i>The First Lesson:</i> Malachi 2:1-10<br/>
                    <i>The Second Lesson:</i> St. Luke 13:10-17<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 10:7-18<br/>
                    <i>The Second Lesson:</i> St. Luke 14:1-11<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> I Kings 18:1-2, 17-39<br/>
                    <i>The Second Lesson:</i> Acts 20:17<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Job 3:1-10, 13-20<br/>
                    <i>The Second Lesson:</i> St. Matthew 12:1-13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Job 4:12<br/>
                    <i>The Second Lesson:</i> St. Matthew 12:14-30<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 30<br/>
                    <i>The First Lesson:</i> Job 5:8-18<br/>
                    <i>The Second Lesson:</i> St. Matthew 12:31<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 31<br/>
                    <i>The First Lesson:</i> Job 10:1-9, 12-18<br/>
                    <i>The Second Lesson:</i> St. Matthew 13:1-23<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 22<br/>
                    <i>The First Lesson:</i> Job 11:7<br/>
                    <i>The Second Lesson:</i> St. Matthew 13:24-30,36-43<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Job 12:1-10<br/>
                    <i>The Second Lesson:</i> St. Matthew 13:31-35, 44-52<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn18">&nbsp;</a><br/>
                        Eighteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Deuteronomy 11:18-21, 26-28, 32<br/>
                    <i>The Second Lesson:</i> Galatians 1:1-12<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 119:89-104 (Section XII - XIII)<br/>
                    <i>The First Lesson:</i> Deuteronomy 5:1-21<br/>
                    <i>The Second Lesson:</i> St. Matthew 22:34<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> I Kings 19<br/>
                    <i>The Second Lesson:</i> Acts 21:7-19, 27-39<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Job 12:13-22<br/>
                    <i>The Second Lesson:</i> St. Matthew 13:53 - 14:12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 39<br/>
                    <i>The First Lesson:</i> Job 14:1-14<br/>
                    <i>The Second Lesson:</i> St. Matthew 14:13-21<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 50<br/>
                    <i>The First Lesson:</i> Job 18:5-7, 14-21<br/>
                    <i>The Second Lesson:</i> St. Matthew 14:22<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> Job 21:7-20, 29-33<br/>
                    <i>The Second Lesson:</i> St. Matthew 15:1-20<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 85, Psalm 86<br/>
                    <i>The First Lesson:</i> Job 24:1-4, 12-20<br/>
                    <i>The Second Lesson:</i> St. Matthew 15:21<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 98<br/>
                    <i>The First Lesson:</i> Job 25:2-6, 26:6-14<br/>
                    <i>The Second Lesson:</i> St. Matthew 16:1-12<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn19">&nbsp;</a><br/>
                        Nineteenth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Jeremiah 5:7-19<br/>
                    <i>The Second Lesson:</i> II Corinthians 13<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Wisdom 12:12-19<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:1-8<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 46<br/>
                    <i>The First Lesson:</i> I Kings 21:1-22<br/>
                    <i>The Second Lesson:</i> Acts 22:24 - 23:11<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Job 28:12<br/>
                    <i>The Second Lesson:</i> St. Matthew 16:13<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Job 38:1-11, 16-18<br/>
                    <i>The Second Lesson:</i> St. Matthew 17:1-13<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 113, Psalm 114<br/>
                    <i>The First Lesson:</i> Job 38:19-30<br/>
                    <i>The Second Lesson:</i> St. Matthew 17:14<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 116<br/>
                    <i>The First Lesson:</i> Job 38:31-38<br/>
                    <i>The Second Lesson:</i> St. Matthew 18:1-14<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 119:161-176 (Section XXI - XXII), Psalm 117<br/>
                    <i>The First Lesson:</i> Job 39:19<br/>
                    <i>The Second Lesson:</i> St. Matthew 18:15<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Job 42:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 19:1-15<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn20">&nbsp;</a><br/>
                        Twentienth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Jeremiah 31:31-37<br/>
                    <i>The Second Lesson:</i> St. John 13:31-35<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 107:1-9, 33-43 or Psalm 84<br/>
                    <i>The First Lesson:</i> Jeremiah 2:1-9, 13<br/>
                    <i>The Second Lesson:</i> St. Matthew 22:1-14<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 112<br/>
                    <i>The First Lesson:</i> II Kings 2:1-15<br/>
                    <i>The Second Lesson:</i> Acts 24:10<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 131, Psalm 133, Psalm 134<br/>
                    <i>The First Lesson:</i> Ecclesiastes 1:2-11<br/>
                    <i>The Second Lesson:</i> St. Matthew 19:16<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Ecclesiastes 2:1-11<br/>
                    <i>The Second Lesson:</i> St. Matthew 20:1-16<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 135<br/>
                    <i>The First Lesson:</i> Ecclesiastes 2:18<br/>
                    <i>The Second Lesson:</i> St. Matthew 20:17<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 137:1-6, Psalm 138<br/>
                    <i>The First Lesson:</i> Ecclesiastes 3:1-2, 9-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 21:1-16<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Ecclesiastes 3:16<br/>
                    <i>The Second Lesson:</i> St. Matthew 21:17-32<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 46<br/>
                    <i>The First Lesson:</i> Ecclesiastes 5:1-7<br/>
                    <i>The Second Lesson:</i> St. Matthew 21:33<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn21">&nbsp;</a><br/>
                        Twenty-First Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 25<br/>
                    <i>The First Lesson:</i> Genesis 15:1-6<br/>
                    <i>The Second Lesson:</i> Romans 4:1-8<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 30, Psalm 146<br/>
                    <i>The First Lesson:</i> II Kings 5:1-15a<br/>
                    <i>The Second Lesson:</i> St. John 4:46b<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> II Kings 6:8-23<br/>
                    <i>The Second Lesson:</i> Acts 25:1-22<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 4, Psalm 8<br/>
                    <i>The First Lesson:</i> Ecclesiastes 5:8<br/>
                    <i>The Second Lesson:</i> St. Matthew 22:15-33<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 11, Psalm 12<br/>
                    <i>The First Lesson:</i> Ecclesiastes 6:1-2, 7-12<br/>
                    <i>The Second Lesson:</i> St. Matthew 22:34<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 13, Psalm 14<br/>
                    <i>The First Lesson:</i> Ecclesiastes 8:12 - 9:1<br/>
                    <i>The Second Lesson:</i> St. Matthew 23:1-12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 16, Psalm 17<br/>
                    <i>The First Lesson:</i> Ecclesiastes 9:11<br/>
                    <i>The Second Lesson:</i> St. Matthew 23:13-23<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 6, Psalm 26<br/>
                    <i>The First Lesson:</i> Ecclesiastes 11<br/>
                    <i>The Second Lesson:</i> St. Matthew 23:25<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 18:1-20<br/>
                    <i>The First Lesson:</i> Ecclesiastes 12<br/>
                    <i>The Second Lesson:</i> St. Matthew 24:1-14<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn22">&nbsp;</a><br/>
                        Twenty-Second Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> I Kings 8:46-53<br/>
                    <i>The Second Lesson:</i> St. Luke 7:36<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Zechariah 7:8<br/>
                    <i>The Second Lesson:</i> St. Matthew 18:21<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> II Kings 9:1-6, 10b-13, 16-26<br/>
                    <i>The Second Lesson:</i> Acts 26<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 20, Psalm 24<br/>
                    <i>The First Lesson:</i> Deuteronomy 4:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 24:15-28<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 29, Psalm 36:5<br/>
                    <i>The First Lesson:</i> Deuteronomy 4:15-24<br/>
                    <i>The Second Lesson:</i> St. Matthew 24:29-41<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> Deuteronomy 4:25-31<br/>
                    <i>The Second Lesson:</i> St. Matthew 24:42<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 37:1-24<br/>
                    <i>The First Lesson:</i> Deuteronomy 4:32-40<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:1-13<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 37:26<br/>
                    <i>The First Lesson:</i> Deuteronomy 5:1-21<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:14-30<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Deuteronomy 5:22<br/>
                    <i>The Second Lesson:</i> St. Matthew 25:31<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn23">&nbsp;</a><br/>
                        Twenty-Third Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 19, Psalm 67<br/>
                    <i>The First Lesson:</i> Ezekiel 33:30<br/>
                    <i>The Second Lesson:</i> I Corinthians 4:8-16<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Wisdom 6:1-11<br/>
                    <i>The Second Lesson:</i> St. Matthew 22:15-22<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 99, Psalm 100<br/>
                    <i>The First Lesson:</i> II Kings 23:1-4, 11-14, 21-23<br/>
                    <i>The Second Lesson:</i> Acts 27:1-20, 27-32, 39-44<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 42, Psalm 43<br/>
                    <i>The First Lesson:</i> Deuteronomy 6:1-9<br/>
                    <i>The Second Lesson:</i> St. Matthew 26:1-16<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 46, Psalm 85<br/>
                    <i>The First Lesson:</i> Deuteronomy 6:10-16, 20-25<br/>
                    <i>The Second Lesson:</i> St. Matthew 26:17-30<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 47, Psalm 48<br/>
                    <i>The First Lesson:</i> Deuteronomy 7:6-13<br/>
                    <i>The Second Lesson:</i> St. Matthew 26:31-46<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 49<br/>
                    <i>The First Lesson:</i> Deuteronomy 8:1-10<br/>
                    <i>The Second Lesson:</i> St. Matthew 26:47-56<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 51<br/>
                    <i>The First Lesson:</i> Deuteronomy 8:11<br/>
                    <i>The Second Lesson:</i> St. Matthew 26:57<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 93, Psalm 98<br/>
                    <i>The First Lesson:</i> Deuteronomy 9:7-17, 25-29<br/>
                    <i>The Second Lesson:</i> St. Matthew 27:1-10<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="trn24">&nbsp;</a><br/>
                        Twenty-Fourth Sunday after Trinity<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Deuteronomy 33:1-3, 26-29<br/>
                    <i>The Second Lesson:</i> Jude 1-4, 17-25<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 86<br/>
                    <i>The First Lesson:</i> II Kings 4:18-37<br/>
                    <i>The Second Lesson:</i> St. Matthew 9:18-26<br/>
                    <br/>
                    <u>Third Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 73<br/>
                    <i>The First Lesson:</i> II Chronicles 36:11<br/>
                    <i>The Second Lesson:</i> Acts 28:16<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 56, Psalm 57<br/>
                    <i>The First Lesson:</i> Deuteronomy 10:12<br/>
                    <i>The Second Lesson:</i> St. Matthew 27:11-26<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 67, Psalm 84<br/>
                    <i>The First Lesson:</i> Deuteronomy 13:1-11<br/>
                    <i>The Second Lesson:</i> St. Matthew 27:27-44<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 72<br/>
                    <i>The First Lesson:</i> Deuteronomy 15:7-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 27:45-56<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 77<br/>
                    <i>The First Lesson:</i> Deuteronomy 17:14<br/>
                    <i>The Second Lesson:</i> St. Matthew 27:57<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 80<br/>
                    <i>The First Lesson:</i> Deuteronomy 18:15<br/>
                    <i>The Second Lesson:</i> St. Matthew 28:1-10<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 65<br/>
                    <i>The First Lesson:</i> Deuteronomy 19:11<br/>
                    <i>The Second Lesson:</i> St. Matthew 28:11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="bfa3">&nbsp;</a><br/>
                        Third Sunday before Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 21, Psalm 22:23<br/>
                    <i>The First Lesson:</i> Joel 3:9-17<br/>
                    <i>The Second Lesson:</i> St. Matthew 13:36-52<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 7<br/>
                    <i>The First Lesson:</i> Amos 5:14-24<br/>
                    <i>The Second Lesson:</i> Galatians 6:1-10<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Deuteronomy 24:10-18<br/>
                    <i>The Second Lesson:</i> I Thessalonians 1<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 91<br/>
                    <i>The First Lesson:</i> Deuteronomy 25:1-3, 13-16<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:1-16<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 92<br/>
                    <i>The First Lesson:</i> Deuteronomy 26:1-11<br/>
                    <i>The Second Lesson:</i> I Thessalonians 2:17 - 3:13<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Deuteronomy 28:1-14<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:1-12<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 102<br/>
                    <i>The First Lesson:</i> Deuteronomy 29:2, 9-21<br/>
                    <i>The Second Lesson:</i> I Thessalonians 4:13<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> Deuteronomy 30:11<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:1-11<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="bfa2">&nbsp;</a><br/>
                        Second Sunday before Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 9<br/>
                    <i>The First Lesson:</i> Genesis 19:1-3, 12-17, 24-28<br/>
                    <i>The Second Lesson:</i> St. Luke 17:20<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 76, Psalm 96<br/>
                    <i>The First Lesson:</i> II Esdras 8:63 - 9:13<br/>
                    <i>The Second Lesson:</i> II Peter 3:1-14, 17-18<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 107<br/>
                    <i>The First Lesson:</i> Wisdom 1:1-7<br/>
                    <i>The Second Lesson:</i> I Thessalonians 5:12<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 111, Psalm 112<br/>
                    <i>The First Lesson:</i> Wisdom 6:1-11<br/>
                    <i>The Second Lesson:</i> II Thessalonians 1<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Wisdom 6:12-21<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:1-12<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 121, Psalm 122<br/>
                    <i>The First Lesson:</i> Wisdom 7:7-14<br/>
                    <i>The Second Lesson:</i> II Thessalonians 2:13 - 3:5<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 125, Psalm 126, Psalm 127<br/>
                    <i>The First Lesson:</i> Wisdom 7:15-22a<br/>
                    <i>The Second Lesson:</i> II Thessalonians 3:6<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 99, Psalm 100<br/>
                    <i>The First Lesson:</i> Wisdom 7:22 - 8:1<br/>
                    <i>The Second Lesson:</i> Jude<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="bfa1">&nbsp;</a><br/>
                        Sunday Next Before Advent<br/>
                    </b>

                    <u>First Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 90<br/>
                    <i>The First Lesson:</i> Ecclesiastes 11:9 - 12:8, 13-14<br/>
                    <i>The Second Lesson:</i> Hebrews 13:1-21<br/>
                    <br/>
                    <u>Second Set of Readings</u><br/>
                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Isaiah 25:1-9<br/>
                    <i>The Second Lesson:</i> St. John 5:17-29<br/>
                    *************<br/>
                    <b>Monday</b><br/>
                    <i>The Psalter:</i> Psalm 131, Psalm 133, Psalm 134<br/>
                    <i>The First Lesson:</i> Wisdom 9:1-4, 9-11<br/>
                    <i>The Second Lesson:</i> Revelation 1:1-8<br/>
                    *************<br/>
                    <b>Tuesday</b><br/>
                    <i>The Psalter:</i> Psalm 132<br/>
                    <i>The First Lesson:</i> Wisdom 9:13<br/>
                    <i>The Second Lesson:</i> Revelation 1:9<br/>
                    *************<br/>
                    <b>Wednesday</b><br/>
                    <i>The Psalter:</i> Psalm 139<br/>
                    <i>The First Lesson:</i> Wisdom 10:1-4, 15-21<br/>
                    <i>The Second Lesson:</i> Revelation 2:1-11<br/>
                    *************<br/>
                    <b>Thursday</b><br/>
                    <i>The Psalter:</i> Psalm 140, Psalm 141:1-4<br/>
                    <i>The First Lesson:</i> Wisdom 11:21 - 12:2<br/>
                    <i>The Second Lesson:</i> Revelation 2:12-17<br/>
                    *************<br/>
                    <b>Friday</b><br/>
                    <i>The Psalter:</i> Psalm 144<br/>
                    <i>The First Lesson:</i> Wisdom 12:12-19<br/>
                    <i>The Second Lesson:</i> Revelation 3:1-6<br/>
                    *************<br/>
                    <b>Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Wisdom 13:1-9<br/>
                    <i>The Second Lesson:</i> Revelation 3:7-13<br/>
                    *************<br/>

                    <a id="andr">&nbsp;</a><br/>
                    <b>Eve of St. Andrew the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 102:15, Psalm 117<br/>
                    <i>The First Lesson:</i> Isaiah 49:1-6<br/>
                    <i>The Second Lesson:</i> I Corinthians 4:1-16<br/>

                    <b>
                        <br/>
                        St. Andrew the Apostle, </b><i>November 30</i><br/>


                    <i>The Psalter:</i> Psalm 96, Psalm 100<br/>
                    <i>The First Lesson:</i> Zechariah 8:20<br/>
                    <i>The Second Lesson:</i> St. John 12:20-36<br/>
                    *************<br/>

                    <a id="thom">&nbsp;</a><br/>
                    <b>Eve of St. Thomas the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 23, Psalm 121<br/>
                    <i>The First Lesson:</i> II Samuel 15:17-21<br/>
                    <i>The Second Lesson:</i> St. John 11:1-16<br/>

                    <b>
                        <br/>
                        St. Thomas the Apostle, </b><i>December 21</i><br/>


                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> Isaiah 43:8-13<br/>
                    <i>The Second Lesson:</i> I Peter 1:3-9<br/>
                    *************<br/>

                    <a id="paul">&nbsp;</a><br/>
                    <b>Eve of The Conversion of St. Paul</b><br/>

                    <i>The Psalter:</i> Psalm 1, Psalm 19<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 39:1-10<br/>
                    <i>The Second Lesson:</i><br/>

                    <b>
                        <br/>
                        The Conversion of St. Paul, </b><i>January 25</i><br/>


                    <i>The Psalter:</i> Psalm 67, Psalm 138<br/>
                    <i>The First Lesson:</i> Jeremiah 1:4-10<br/>
                    <i>The Second Lesson:</i> Acts 26:1-23<br/>
                    *************<br/>

                    <a id="puri">&nbsp;</a><br/>
                    <b>Purification Eve</b><br/>

                    <i>The Psalter:</i> Psalm 113, Psalm 122<br/>
                    <i>The First Lesson:</i> Exodus 13:11-16<br/>
                    <i>The Second Lesson:</i> Hebrews 10:1-10<br/>

                    <b>
                        <br/>
                        Purification, </b><i>February 2</i><br/>


                    <i>The Psalter:</i> Psalm 48, Psalm 134<br/>
                    <i>The First Lesson:</i> Haggai 2:1-9<br/>
                    <i>The Second Lesson:</i> I John 3:1-8<br/>
                    *************<br/>

                    <a id="mthi">&nbsp;</a><br/>
                    <b>Eve of St. Matthias the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> I Samuel 16:1-13<br/>
                    <i>The Second Lesson:</i> I John 2:15<br/>

                    <b>
                        <br/>
                        St. Matthias the Apostle, </b><i>February 24</i><br/>


                    <i>The Psalter:</i> Psalm 145<br/>
                    <i>The First Lesson:</i> I Samuel 12:1-5<br/>
                    <i>The Second Lesson:</i> Acts 20:17-35<br/>
                    *************<br/>

                    <a id="annu">&nbsp;</a><br/>
                    <b>Annunciation Eve</b><br/>

                    <i>The Psalter:</i> Psalm 111, Psalm 131<br/>
                    <i>The First Lesson:</i> Genesis 3:1-15<br/>
                    <i>The Second Lesson:</i><br/>

                    <b>
                        <br/>
                        Annunciation, </b><i>March 25</i><br/>


                    <i>The Psalter:</i> Psalm 36:5, Psalm 138<br/>
                    <i>The First Lesson:</i> I Samuel 2:1-10<br/>
                    <i>The Second Lesson:</i><br/>
                    *************<br/>

                    <a id="mark">&nbsp;</a><br/>
                    <b>Eve of St. Mark the Evangelist</b><br/>

                    <i>The Psalter:</i> Psalm 67, Psalm 96<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 51:13-22<br/>
                    <i>The Second Lesson:</i> Acts 12:25 - 13:3<br/>

                    <b>
                        <br/>
                        St. Mark the Evangelist, </b><i>April 25</i><br/>


                    <i>The Psalter:</i> Psalm 19, Psalm 112<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 2:1-11<br/>
                    <i>The Second Lesson:</i> II Timothy 4:1-11, 16-18<br/>

                    *************<br/>
                    <a id="phil">&nbsp;</a><br/>
                    <b>Eve of St. Philip and St. James, Apostles</b><br/>

                    <i>The Psalter:</i> Psalm 119:33-48 (Section V - VI)<br/>
                    <i>The First Lesson:</i> Proverbs 4:7-18<br/>
                    <i>The Second Lesson:</i> St. John 12:20-26<br/>

                    <b>
                        <br/>
                        St. Philip and St. James, Apostles, </b><i>May 1</i><br/>


                    <i>The Psalter:</i> Psalm 27<br/>
                    <i>The First Lesson:</i> Isaiah 30:18-21<br/>
                    <i>The Second Lesson:</i> St. John 17:1-8<br/>
                    *************<br/>

                    <a id="barn">&nbsp;</a><br/>
                    <b>Eve of St. Barnabas the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 112, Psalm 146<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 31:3-11<br/>
                    <i>The Second Lesson:</i> Acts 4:32<br/>

                    <b>
                        <br/>
                        St. Barnabas the Apostle, </b><i>June 11</i><br/>


                    <i>The Psalter:</i> Psalm 97, Psalm 100<br/>
                    <i>The First Lesson:</i> Isaiah 42:5-12<br/>
                    <i>The Second Lesson:</i> Acts 14:8<br/>
                    *************<br/>

                    <a id="jonb">&nbsp;</a><br/>
                    <b>Eve of St. John the Baptist</b><br/>

                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 48:1-10<br/>
                    <i>The Second Lesson:</i><br/>

                    <b>
                        <br/>
                        St. John the Baptist, </b><i>June 24</i><br/>


                    <i>The Psalter:</i> Psalm 24, Psalm 96<br/>
                    <i>The First Lesson:</i> Malachi 4<br/>
                    <i>The Second Lesson:</i> St. Matthew 11:2-19<br/>
                    *************<br/>

                    <a id="pete">&nbsp;</a><br/>
                    <b>Eve of St. Peter the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 118<br/>
                    <i>The First Lesson:</i> Ezekiel 3:4-11<br/>
                    <i>The Second Lesson:</i> Acts 4:8-20<br/>

                    <b>
                        <br/>
                        St. Peter the Apostle, </b><i>June 29</i><br/>


                    <i>The Psalter:</i> Psalm 23, Psalm 146<br/>
                    <i>The First Lesson:</i> Ezekiel 34:11-16<br/>
                    <i>The Second Lesson:</i> St. John 21:15-22<br/>
                    *************<br/>

                    <a id="jame">&nbsp;</a><br/>
                    <b>Eve of St. James the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 112, Psalm 113<br/>
                    <i>The First Lesson:</i> Exodus 3:1-15<br/>
                    <i>The Second Lesson:</i> St. Mark 1:14-20<br/>

                    <b>
                        <br/>
                        St. James the Apostle, </b><i>July 25</i><br/>


                    <i>The Psalter:</i> Psalm 33<br/>
                    <i>The First Lesson:</i> Jeremiah 26:8-15<br/>
                    <i>The Second Lesson:</i> St. Matthew 10:16-32<br/>
                    *************<br/>

                    <a id="tran">&nbsp;</a><br/>
                    <b>Eve of The Transfiguration of Christ</b><br/>

                    <i>The Psalter:</i> Psalm 97, Psalm 99<br/>
                    <i>The First Lesson:</i> I Kings 19:1-12<br/>
                    <i>The Second Lesson:</i> II Corinthians 4:1-6<br/>

                    <b>
                        3<br/>
                        The Transfiguration of Christ, </b><i>August 6</i><br/>


                    <i>The Psalter:</i> Psalm 29, Psalm 93<br/>
                    <i>The First Lesson:</i> Exodus 24:12<br/>
                    <i>The Second Lesson:</i> Philippians 3:13<br/>
                    *************<br/>

                    <a id="bart">&nbsp;</a><br/>
                    <b>Eve of St. Bartholomew the Apostle</b><br/>

                    <i>The Psalter:</i> Psalm 1, Psalm 15<br/>
                    <i>The First Lesson:</i> Deuteronomy 18:15-19<br/>
                    <i>The Second Lesson:</i> St. Luke 6:12-23<br/>

                    <b>
                        <br/>
                        St. Bartholomew the Apostle, </b><i>August 24</i><br/>


                    <i>The Psalter:</i> Psalm 46, Psalm 102:15<br/>
                    <i>The First Lesson:</i> Isaiah 66:1-2, 18-23<br/>
                    <i>The Second Lesson:</i> I Peter 5:1-11<br/>
                    *************<br/>

                    <a id="matt">&nbsp;</a><br/>
                    <b>Eve of St. Matthew, Apostle and Evangelist</b><br/>

                    <i>The Psalter:</i> Psalm 65, Psalm 117<br/>
                    <i>The First Lesson:</i> I Chronicles 29:9-17<br/>
                    <i>The Second Lesson:</i> Romans 10:1-15<br/>

                    <b>
                        <br/>
                        St. Matthew, Apostle and Evangelist, </b><i>September 21</i><br/>


                    <i>The Psalter:</i> Psalm 19, Psalm 112<br/>
                    <i>The First Lesson:</i> Job 28:12<br/>
                    <i>The Second Lesson:</i> I Timothy 6:6-19<br/>
                    *************<br/>

                    <a id="mich">&nbsp;</a><br/>
                    <b>Eve of St. Michael and All Angels</b><br/>

                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Daniel 12:1-3<br/>
                    <i>The Second Lesson:</i> Revelation 5<br/>

                    <b>
                        <br/>
                        St. Michael and All Angels, </b><i>September 29</i><br/>


                    <i>The Psalter:</i> Psalm 34<br/>
                    <i>The First Lesson:</i> II Kings 6:8-17<br/>
                    <i>The Second Lesson:</i> Acts 12:1-11<br/>
                    *************<br/>

                    <a id="luke">&nbsp;</a><br/>
                    <b>Eve of St. Luke the Evangelist</b><br/>

                    <i>The Psalter:</i> Psalm 103<br/>
                    <i>The First Lesson:</i> Ezekiel 47:1-2, 6-8, 12<br/>
                    <i>The Second Lesson:</i> St. Luke 1:1-4<br/>

                    <b>
                        <br/>
                        St. Luke the Evangelist, </b><i>October 18</i><br/>


                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 38:1-14<br/>
                    <i>The Second Lesson:</i> Colossians 4:2<br/>
                    *************<br/>

                    <a id="simo">&nbsp;</a><br/>
                    <b>Eve of St. Simon and St. Jude, Apostles</b><br/>

                    <i>The Psalter:</i> Psalm 66<br/>
                    <i>The First Lesson:</i> Isaiah 4:2<br/>
                    <i>The Second Lesson:</i> Acts 1:6-14<br/>

                    <b>
                        <br/>
                        St. Simon and St. Jude, Apostles, </b><i>October 28</i><br/>


                    <i>The Psalter:</i> Psalm 62, Psalm 121<br/>
                    <i>The First Lesson:</i> Deuteronomy 32:1-4<br/>
                    <i>The Second Lesson:</i> St. John 14:15<br/>
                    *************<br/>

                    <a id="alls">&nbsp;</a><br/>
                    <b>Eve of All Saints</b><br/>

                    <i>The Psalter:</i> Psalm 97, Psalm 112<br/>
                    <i>The First Lesson:</i> Ecclesiasticus 44:1-15<br/>
                    <i>The Second Lesson:</i> Hebrews 11:32 - 12:2<br/>

                    <b>
                        <br/>
                        All Saints, </b><i>November 1</i><br/>


                    <i>The Psalter:</i> Psalm 148, Psalm 150<br/>
                    <i>The First Lesson:</i> Wisdom 5:1-5, 14-16<br/>
                    <i>The Second Lesson:</i> Revelation 21:1-4, 22 - 22:5<br/>
                    *************<br/>

                    <br/>
                    <b>
                        <a id="embr">&nbsp;</a><br/>
                        <i>Ember Wednesday</i><br/>
                    </b>

                    <i>The Psalter:</i> Psalm 24, Psalm 26<br/>
                    <i>The First Lesson:</i> Jeremiah 42:1-6<br/>
                    <i>The Second Lesson:</i> I Timothy 3<br/>
                    *************<br/>
                    <b>Ember Friday</b><br/>
                    <i>The Psalter:</i> Psalm 84, Psalm 134<br/>
                    <i>The First Lesson:</i> Ezekiel 13:1-9<br/>
                    <i>The Second Lesson:</i> II Timothy 2:19<br/>
                    *************<br/>
                    <b>Ember Saturday</b><br/>
                    <i>The Psalter:</i> Psalm 99, Psalm 100<br/>
                    <i>The First Lesson:</i> Isaiah 6:1-8<br/>
                    <i>The Second Lesson:</i> Hebrews 13:7-21<br/>
                    *************<br/>

                    <b>
                        <a id="inde">&nbsp;</a><br/>
                        Independence Day<br/>
                    </b>

                    <i>The Psalter:</i> Psalm 121, Psalm 122<br/>
                    <i>The First Lesson:</i> Deuteronomy 4:1-14<br/>
                    <i>The Second Lesson:</i> Galatians 4:26 - 5:1<br/>
                    *************<br/>

                    <b>
                        <a id="than">&nbsp;</a><br/>
                        Thanksgiving Day<br/>
                    </b>

                    <u>First Set of Readings</u>:<br/>
                    <i>The Psalter:</i> Psalm 147<br/>
                    <i>The First Lesson:</i> Isaiah 12<br/>
                    <i>The Second Lesson:</i> Philippians 4:4-7<br/>
                    <u>Second Set of Readings</u>:<br/>
                    <i>The Psalter:</i> Psalm 104<br/>
                    <i>The First Lesson:</i> Deuteronomy 11:8-21<br/>
                    <i>The Second Lesson:</i> I Timothy 6:6-16<br/>
                    *************<br/>

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
