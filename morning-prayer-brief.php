<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
$db_handle = new DBController();

$currentMonthKallender = date('Y-m');

$currentYear = date('Y');

$currentDate = date('Y-m-d');

$extension='';

$url = $_SERVER['REQUEST_URI'];
$id = substr($url, strrpos($url, '/') + 1);

if((int)$id>0){
    $extension = '../';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo $extension; ?>assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title>Morning Prayer Brief - Common Prayer Online</title>
    <link href="<?php echo $extension; ?>assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $extension; ?>assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href='<?php echo $extension; ?>assets/vendor/Animate/animate.min.css' rel='stylesheet'/>
    <link href="<?php echo $extension; ?>assets/css/style.css" rel="stylesheet"/>
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
                           href="<?php echo $extension; ?>home">Home</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>daily-office">Daily Offices</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>psalter">Psalter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#lesson1">
                            1st<br/>
                            Lesson
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#lesson2">
                            2nd<br/>
                            Lesson
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>collects">Collect</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>penitential-office">Penitential Office</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>family-prayer">Family Prayer</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>psalter">Psalter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>prayers-and-thanksgivings">Prayers</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>litany">Litany</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>kallender/<?php echo $currentMonthKallender; ?>">Kalendar</a>
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
            <h1 class="cpo-content-page-title">THE ORDER FOR MORNING PRAYER</h1>
            <p>As Written in the 1928 Book of Common Prayer</p>
        </div>
        <div class="col-lg-6 text-center mt-3">
            <img alt="" class="img-fluid cpo-logo" src="<?php echo $extension; ?>assets/images/book.webp"/>
            <p class="mt-4">Presented By the</p>
            <h5 class="cpo-angelina-title">
                ANGLICAN PROVINCE OF AMERICA
            </h5>
            <p><a href="https://anglicanprovince.org/" class="cpo-angli-url">www.anglicanprovince.org</a></p>
        </div>
        <div class="col-lg-6 text-center mt-3 d-flex justify-content-center align-items-center">
            <div>
                <p>
                    <?php
                    $dateString = date("l, F j, Y");
                    echo "Today is " . $dateString;
                    ?>
                </p>
                <h3>
                    <?php
                    $day = date('Y-m-d');
                    getOccasionName($day);
                    ?>
                </h3>
                <p class="mt-3 text-success">The liturgical color of the day is GREEN</p>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>services">Concerning the Service of the Church</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>rubrics">Miscellaneous Rubrics from the 1928 BCP</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>info">Information about the BCP and Lectionary</a>
                </div>
            </div>
        </div>
        <?php

                function isLeapYear($year)
                {
                    return ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0));
                }

                $dayOfYear = (int)date('z', strtotime($currentDate)) + 1;

                if (isLeapYear($currentYear) && $dayOfYear > 60) {
                    $dayOfYear -= 1;
                }


                if((int)$id>0){
                    $dayOfYear=$id;
                }

        ?>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>morning-prayer-brief">Today's Readings/Propers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>morning-prayer-brief/<?php echo $dayOfYear+1; ?>">Tomorrow's Readings/Propers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>morning-prayer-brief/<?php echo $dayOfYear-1; ?>">Yesterday's Readings/Propers</a>
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
            <blockquote id="text-container">

                <?php


                $description = '';

                $query = "SELECT * FROM morning_pray where id='$dayOfYear'";

                $data = $db_handle->runQuery($query);
                $row = $db_handle->numRows($query);
                for ($j = 0; $j < $row; $j++) {
                    $description = $data[$j]["description"];
                }


                $psalm_pattern = '/<div class="text-center"><h2>The Psalter<\/h2><\/div>.*?<div class="text-center"><h2>The First Lesson<\/h2><\/div>/s';
                $first_lesson_pattern = '/<a id="lesson1">(.*?)<a id="lesson2">/s';
                $second_lesson_pattern = '/<a id="lesson2">(.*?)<a id="collect">/s';
                $collect_pattern = '/<a id="collect">(.*?)<\/blockquote>/s';

                $psalm = '';
                $first_lesson = '';
                $second_lesson = '';
                $collect = '';

                // Use preg_match to find the matching content
                if (preg_match($psalm_pattern, $description, $psalm_matches)) {
                    $psalm = $psalm_matches[0];

                    // Remove the specified text from the end
                    $psalm = preg_replace('/<a id="lesson1"> &nbsp; <\/a>/', '', $psalm);

                    // Remove the additional text
                    $psalm = preg_replace('/<div class="text-center"><h2>The First Lesson<\/h2><\/div>/', '', $psalm);
                }

                // Extract First Lesson
                if (preg_match($first_lesson_pattern, $description, $first_lesson_matches)) {
                    $first_lesson = $first_lesson_matches[1];
                }

                // Extract Second Lesson
                if (preg_match($second_lesson_pattern, $description, $second_lesson_matches)) {
                    $second_lesson = $second_lesson_matches[1];
                }

                // Extract Collect
                if (preg_match($collect_pattern, $description, $collect_matches)) {
                    $collect = $collect_matches[1];
                }
                ?>

                <br/>
                <blockquote>

                    <div class="text-center"><i><b>Sentences of Scripture.</b></i></div>
                    <br/>

                    <b>
                        Let the words of my mouth, and the meditation of my
                        heart, be alway acceptable in thy sight, O LORD, my
                        strength and my redeemer.</b> <i>Psalm xix. 14.</i><br/>
                    <small>&nbsp; <br/></small>

                    <b>
                        The hour cometh, and now is, when the true worshippers
                        shall worship the Father in spirit and in truth: for the
                        Father seeketh such to worship him.</b> <i>St. John iv. 23.</i><br/>
                    <br/>

                    <a id="absol">&nbsp;</A>
                    <a href="#">General Confession &amp; Absolution</a><br/>
                    <br/>

                    <b>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; O Lord, open thou our lips.<br/>
                        <i>Answer.</i> And our mouth shall show forth thy praise.<br/>
                    </b>

                    <b>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Glory be to the Father, and to the Son, and to
                        the Holy Ghost;<br/>
                        <br/>

                        <i>Answer.</i> As it was in the beginning, is now, and ever shall be,
                        world without end. Amen.<br/>
                        <i>Minister.</i> Praise ye the Lord.<br/>
                        <i>Answer.</i> The Lord's Name be praised.<br/>
                        <br/>
                    </b>

                    <a id="venite">&nbsp;</A>
                    <div class="text-center">
                        <hr/>

                        <small><i>
                                Seasonal substitute the Venite</i><br/>
                            <A href="#">Easter</A> &nbsp; &nbsp; &nbsp; &nbsp;<A href="#">Thanksgiving</A>
                        </small>

                    </div>

                    <br/>
                    <div class="text-center"><i><b>Venite, exultemus Domino.</b></i></div>
                    <br/>

                    <b>
                        O COME, let us sing unto the LORD; * let us heartily
                        rejoice in the strength of our salvation.<br/>
                        Let us come before his presence with thanksgiving; * and
                        show ourselves glad in him with psalms.<br/>
                        For the LORD is a great God; * and a great King
                        above all gods.<br/>
                        In his hand are all the corners of the earth; * and the
                        strength of the hills is his also.<br/>
                        The sea is his, and he made it; * and his hands
                        prepared the dry land.<br/>
                        O come, let us worship and fall down, * and kneel
                        before the LORD our Maker.<br/>
                        For he is the Lord our God; * and we are the people
                        of his pasture, and the sheep of his hand.<br/>
                        O worship the LORD in the beauty of holiness; * let
                        the whole earth stand in awe of him.<br/>
                        For he cometh, for he cometh to judge the earth; * and
                        with righteousness to judge the world, and the peoples
                        with his truth.<br/>
                        <br/>
                    </b>
                    <b>Glory be to the Father, and to the Son, and to the Holy Ghost;<br/>
                        As it was in the beginning, is now, and ever shall be, world without end. Amen.
                    </b><br/>

                    <a id="psalm">&nbsp;</A>



                    <?php
                    echo $psalm;
                    ?>


                    <a id="psalter">&nbsp;</A>
                    <br/>
                    <br/>

                    <b>
                        GLORY be to the Father, and to the Son, * and to the
                        Holy Ghost;<br/>
                        AS it was in the beginning, is now, and ever shall be, * world
                        without end. Amen.<br/>
                    </b>


                    <a id="lesson1">&nbsp;</A>

                    <?php
                    echo $first_lesson;
                    ?>


                    <br/>

                    <a id="benedictuses">&nbsp;</A>
                    <div class="text-center"><i><b>Benedictus es, Domine.</b></i></div>
                    <br/>

                    <b>
                        BLESSED art thou, O Lord God of our fathers:* praised
                        and exalted above all for ever.<br/>
                        Blessed art thou for the Name of thy Majesty:* praised
                        and exalted above all for ever.<br/>
                        Blessed art thou in the temple of thy holiness:* praised
                        and exalted above all for ever.<br/>
                        Blessed art thou that beholdest the depths, and dwellest
                        between the Cherubim: * praised and exalted above all forever.<br/>
                        Blessed art thou on the glorious throne of thy kingdom: * praised
                        and exalted above all for ever.<br/>
                        Blessed art thou in the firmament of heaven: * praised
                        and exalted above all for ever.<br/>
                    </b>
                    <br/>

                    <a id="less1gl">&nbsp;</A>
                    <a href="#">Te deum laudamus</a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="#">Benedicite, omnia</a><br/>
                    <br/>

                    <b>Glory be to the Father, and to the Son, and to the Holy Ghost;<br/>
                        As it was in the beginning, is now, and ever shall be, world without end. Amen.
                    </b><br/>


                    <a id="lesson2">&nbsp;</A>

                    <?php
                    echo $second_lesson;
                    ?>

                    <br/>

                    <br/>
                    <div class="text-center"><i><b>Benedictus.</b></i> St. Luke i. 68.</div>
                    <br/>

                    <b>
                        BLESSED be the Lord God of Israel; * for he hath visited and
                        redeemed his people;<br/>
                        And hath raised up a mighty salvation for us, * in the
                        house of his servant David;<br/>
                        As he spake by the mouth of his holy Prophets, * which
                        have been since the world began;<br/>
                        That we should be saved from our enemies, * and from
                        the hand of all that hate us.<br/>
                        <br/>

                        To perform the mercy promised to our forefathers, * and
                        to remember his holy covenant;<br/>
                        To perform the oath which he sware to our forefather
                        Abraham, * that he would give us;<br/>
                        That we being delivered out of the hand of our enemies *
                        might serve him without fear;<br/>
                        In holiness and righteousness before him, * all the days
                        of our life.<br/>
                        And thou, child, shalt be called the prophet of the Highest: * for
                        thou shalt go before the face of the Lord to prepare his ways;<br/>
                        To give knowledge of salvation unto his people * for the
                        remission of their sins,<br/>
                        Through the tender mercy of our God; * whereby the
                        day-spring from on high hath visited us;<br/>
                        To give light to them that sit in darkness, and in the
                        shadow of death, * and to guide our feet into the way of
                        peace.<br/>
                        <br/>
                    </b>

                    <a id="less2gl">&nbsp;</A>
                    <a href="#">Jubilate Deo</a><br/>
                    <br/>


                    <b>Glory be to the Father, and to the Son, and to the Holy Ghost;<br/>
                        As it was in the beginning, is now, and ever shall be, world without end. Amen.
                    </b><br/>

                    <br/>
                    <br/>
                    <a id="creed">&nbsp;</A>

                    <div class="text-center"><i><b>The Apostles' Creed.</b></i></div>
                    <br/>

                    <b>
                        I BELIEVE in God the Father Almighty, Maker of heaven and earth:<br/>
                        <small>&nbsp; <br/></small>

                        And in Jesus Christ his only Son our Lord: Who was conceived by the Holy
                        Ghost, Born of the Virgin Mary: Suffered under Pontius Pilate, Was
                        crucified, dead, and buried: He descended into hell; The third day he
                        rose again from the dead: He ascended into heaven, And sitteth on the
                        right hand of God the Father Almighty: From thence he shall come to judge
                        the quick and the dead.<br/>
                        <small>&nbsp; <br/></small>

                        I believe in the Holy Ghost: The holy Catholic Church; The Communion of
                        Saints: The Forgiveness of sins: The Resurrection of the body: And the
                        Life everlasting. Amen.<br/>
                        <br/>
                    </b>


                    <b>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; The Lord be with you.<br/>
                        <i>Answer.</i> And with thy spirit.<br/>
                        <i>Minister.</i> Let us pray.<br/>
                    </b>
                    <br/>

                    <div class="text-center"><i><b>The Lord's Prayer.</b></i></div>
                    <br/>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom come.
                        Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver us
                        from evil. For thine is the kingdom, and the power, and the glory, for
                        ever and ever. Amen.<br/>
                        <br/>
                    </b>


                    <b>
                        <i>Minister.</i> O Lord, show thy mercy upon us.<br/>
                        <i>Answer.</i> And grant us thy salvation.<br/>
                        <i>Minister.</i> O God, make clean our hearts within us.<br/>
                        <i>Answer.</i> And take not thy Holy Spirit from us.<br/>
                        <br/>
                    </b>


                    <a id="collect">&nbsp;</A>
                    <?php
                    echo $collect;
                    ?>


                    <br/>
                    <div class="text-center"><i><b>A Collect for Peace.</b></i></div>
                    <br/>

                    <b>
                        O GOD, who art the author of peace and lover of concord,
                        in knowledge of whom standeth our eternal life, whose service
                        is perfect freedom; Defend us thy humble servants in all assaults
                        of our enemies; that we, surely trusting in thy defence, may not
                        fear the power of any adversaries, through the might of Jesus Christ
                        our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center"><i><b>A Collect for Grace.</b></i></div>
                    <br/>

                    <b>
                        O Lord, our heavenly Father, Almighty and everlasting God,
                        who hast safely brought us to the beginning of this day; Defend
                        us in the same with thy mighty power; and grant that this day
                        we fall into no sin, neither run into any kind of danger; but
                        that all our doings, being ordered by thy governance, may be
                        righteous in thy sight; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <a id="presidmo">&nbsp;</A>
                    <a href="#">A Prayer for the President of the United States</a><br/>
                    <br/>

                    <div class="text-center"><i><b>A Prayer for the Clergy and People.</b></i></div>
                    <br/>

                    <b>
                        Almighty and everlasting God, from whom cometh every good and perfect
                        gift; Send down upon our Bishops, and other Clergy, and upon the
                        Congregations committed to their charge, the healthful Spirit of thy
                        grace; and, that they may truly please thee, pour upon them the continual
                        dew of thy blessing. Grant this, O Lord, for the honour of our Advocate
                        and Mediator, Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center"><i><b>A Prayer for All Conditions of Men.</b></i></div>
                    <br/>

                    <b>
                        O God, the Creator and Preserver of all mankind, we humbly beseech thee
                        for all sorts and conditions of men; that thou wouldest be pleased to
                        make thy ways known unto them, thy saving health unto all nations. More
                        especially we pray for thy holy Church universal; that it may be so
                        guided and governed by thy good Spirit, that all who profess and call
                        themselves Christians may be led into the way of truth, and hold the
                        faith in unity of spirit, in the bond of peace, and in righteousness of
                        life. Finally, we commend to thy fatherly goodness all those who are any
                        ways afflicted, or distressed, in mind, body, or estate; <i>[* especially
                            those for whom our prayers are desired;]</i> that it may please thee to
                        comfort and relieve them, according to their several necessities; giving
                        them patience under their sufferings, and a happy issue out of all their
                        afflictions. And this we beg for Jesus Christ's sake. <i> Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <a id="prymen">&nbsp;</A>
                    <a href="#">A General Thanksgiving</a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="#">A Prayer of St. Chrysostom</a><br/>
                    <br/>

                    <div class="text-center"><i><b>2 Cor. xiii. 14.</b></i></div>
                    <br/>

                    <b>
                        The grace of our Lord Jesus Christ, and the love of God, and the
                        fellowship of the Holy Ghost, be with us all evermore. <i> Amen.</i><br/>
                    </b>

                </blockquote>

                <div class="text-center">
                    <small>
                        <i>Here endeth the Order of Morning Prayer.</i>
                    </small>
                </div>
                <br/>

            </blockquote>
        </div>
    </div>
</section>

<!-- Main Button Start -->
<section class="container-fluid">
    <div class="card mt-4 cpo-card-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>home">Home</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>occasional-office">Occasional Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>church-year">The Church Year</a>
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
                           href="<?php echo $extension; ?>morning-prayer-brief">
                            MORNING PRAYER
                        </a>
                        <p class="mt-3 d-lg-none d-block"><i class="fa-solid fa-arrow-left"></i>Today's Readings<i
                                    class="fa-solid fa-arrow-right"></i></p>
                        <p class="mt-3 d-lg-block d-none"><i class="fa-solid fa-arrow-left"></i> Today's Readings <i
                                    class="fa-solid fa-arrow-right"></i></p>
                        <a class="btn btn-primary cpo-footer-btn d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>evening-prayer-brief">
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

<script src="<?php echo $extension; ?>assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/Wow/wow.js"></script>
<script src="<?php echo $extension; ?>assets/js/main.js"></script>
</body>
</html>
