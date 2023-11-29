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

    <!-- Developer: Monoget Saha (www.monoget.com.bd) -->
    <!-- Company: FrogBid (www.frogbid.com) -->

    <link href="<?php echo $extension; ?>assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title>Evening Prayer - Common Prayer Online</title>
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
                           href="#collect">Collect</a>
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
            <h1 class="cpo-content-page-title">THE ORDER FOR EVENING PRAYER</h1>
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
                <?php
                liturgicalColor($day);
                ?>
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
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>evening-prayer">Today's Readings/Propers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>evening-prayer/<?php echo $dayOfYear+1; ?>">Tomorrow's Readings/Propers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>evening-prayer/<?php echo $dayOfYear-1; ?>">Yesterday's Readings/Propers</a>
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

                $query = "SELECT * FROM evening_pray where id='$dayOfYear'";

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


                <small>
                    <i>The Minister shall begin the Evening Prayer by reading one or more of
                        the following Sentences of Scripture; and then he shall say that which is
                        written after them. But he may, at his discretion, pass at once from the
                        Sentences to the Lord's Prayer.</i><br/>
                    <br/>

                    <i>And NOTE, that when the Confession and Absolution are omitted, the
                        Minister may, after the Sentences, pass to the
                        <a href="#versicles"><b> Versicles,</b></a></i> O Lord,
                    open thou our lips,<i> etc., in which case the Lord's Prayer shall be said with
                        the other prayers, immediately after</i> The Lord be with you,<i> etc.,
                        and before the Versicles and Responses which follow.</i><br/>
                    <br/>
                </small>
                <b>
                    THE LORD is in his holy temple: let all the earth keep silence before
                    him.</b> <i>Hab. ii. 20.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    LORD, I have loved the habitation of thy house, and the place where thine
                    honour dwelleth.</b> <i>Psalm xxvi. 8.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Let my prayer be set forth in thy sight as the incense; and let the
                    lifting up of my hands be an evening sacrifice.</b> <i>Psalm cxli. 2.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    O worship the LORD in the beauty of holiness; let the whole earth stand
                    in awe of him.</b> <i>Psalm xcvi. 9.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Let the words of my mouth, and the meditation of my heart, be alway
                    acceptable in thy sight, O LORD, my strength and my redeemer.</b>
                <i>Psalm xix. 14.</i><br/>
                <br/>

                <i><u>Advent.</u></i><br/>
                <b>
                    Watch ye, for ye know not when the master of the house cometh, at even,
                    or at midnight, or at the cock-crowing, or in the morning: lest coming
                    suddenly he find you sleeping.</b> <i>St. Mark xiii. 35, 36.</i><br/>
                <br/>

                <i><u>Christmas.</u></i><br/>
                <b>
                    Behold, the tabernacle of God is with men, and he will dwell with them,
                    and they shall be his people, and God himself shall be with them, and be
                    their God.</b> <i>Rev. xxi. 3.</i><br/>
                <br/>

                <i><u>Epiphany.</u></i><br/>
                <b>
                    The Gentiles shall come to thy light, and kings to the brightness of thy
                    rising.</b> <i>Isaiah lx. 3.</i><br/>
                <br/>

                <i><u>Lent</u></i><br/>
                <b>
                    I acknowledge my transgressions, and my sin is ever before me.</b>
                <i>Psalm li. 3.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    To the Lord our God belong mercies and forgivenesses, though we have
                    rebelled against him; neither have we obeyed the voice of the LORD our
                    God, to walk in his laws which he set before us.</b>
                <i>Dan. ix. 9, 10.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    If we say that we have no sin, we deceive ourselves, and the truth is not
                    in us; but if we confess our sins, God is faithful and just to forgive us
                    our sins, and to cleanse us from all unrighteousness.</b>
                <i>1 St. John i. 8, 9.</i><br/>
                <br/>

                <br/><i><u>Good Friday.</u></i><br/>

                <b>
                    All we like sheep have gone astray; we have turned every one to his own
                    way; and the LORD hath laid on him the iniquity of us all.</b>
                <i>Isaiah liii. 6.</i><br/>
                <br/>

                <i><u>Easter.</u></i><br/>
                <b>
                    Thanks be to God, which giveth us the victory through our Lord Jesus
                    Christ.</b> <i>1 Cor. xv. 57.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    If ye then be risen with Christ, seek those things which are above, where
                    Christ sitteth on the right hand of God.</b> <i>Col. iii. 1.</i><br/>
                <br/>

                <i><u>Ascension.</u></i><br/>
                <b>
                    Christ is not entered into the holy places made with hands, which are the
                    figures of the true; but into heaven itself, now to appear in the
                    presence of God for us.</b> <i>Heb. ix. 24.</i><br/>
                <br/>

                <i><u>Whitsunday.</u></i><br/>
                <b>
                    There is a river, the streams whereof shall make glad the city of God,
                    the holy place of the tabernacles of the Most High.</b>
                <i>Psalm xlvi. 4.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    The Spirit and the bride say, Come. And let him that heareth say, Come.
                    And let him that is athirst come. And whosoever will, let him take the
                    water of life freely.</b> <i>Rev. xxii. 17.</i><br/>
                <br/>

                <i><u>Trinity Sunday.</u></i><br/>
                <b>
                    Holy, holy, holy, is the LORD of hosts: the
                    whole earth is full of his glory.</b> <i>Isaiah vi. 3.</i><br/>
                <br/>

                <br/>
                <br/>

                <div class="text-center"><b>LET us humbly confess our sins unto Almighty God.</b></div>
                <br/>

                <div class="text-center">
                    <small>
                        <i>Or else he shall say as followeth.</i>
                    </small>
                </div>
                <br/>


                <b>
                    DEARLY beloved brethren, the Scripture moveth us, in sundry places, to
                    acknowledge and confess our manifold sins and wickedness; and that we
                    should not dissemble nor cloak them before the face of Almighty God our
                    heavenly Father; but confess them with an humble, lowly, penitent, and
                    obedient heart; to the end that we may obtain forgiveness of the same, by
                    his infinite goodness and mercy. And although we ought, at all times,
                    humbly to acknowledge our sins before God; yet ought we chiefly so to do,
                    when we assemble and meet together to render thanks for the great
                    benefits that we have received at his hands, to set forth his most worthy
                    praise, to hear his most holy Word, and to ask those things which are
                    requisite and necessary, as well for the body as the soul. Wherefore I
                    pray and beseech you, as many as are here present, to accompany me with a
                    pure heart, and humble voice, unto the throne of the heavenly grace,
                    saying --<br/>
                </b>
                <br/>

                <br/>
                <div class="text-center"><i><b>A General Confession</b></i></div>
                <br/>

                <div class="text-center">
                    <small>
                        <i>To be said by the whole Congregation, after the Minister,
                            all kneeling.</i>
                    </small>
                </div>
                <br/>

                <b>
                    ALMIGHTY and most merciful Father; We have erred, and strayed from thy
                    ways like lost sheep. We have followed too much the devices and desires
                    of our own hearts. We have offended against thy holy laws. We have left
                    undone those things which we ought to have done; And we have done those
                    things which we ought not to have done; And there is no health in us.
                    But thou, O Lord, have mercy upon us, miserable offenders. Spare thou
                    those, O God, who confess their faults. Restore thou those who are
                    penitent; According to thy promises declared unto mankind In Christ Jesus
                    our Lord. And grant, O most merciful Father, for his sake; That we may
                    hereafter live a godly, righteous, and sober life, To the glory of thy
                    holy Name. Amen.<br/>
                </b>
                <br/>


                <div class="text-center"><i><b>The Declaration of Absolution, or Remission of Sins.</b></i></div>
                <br/>

                <div class="text-center">
                    <small>
                        <i>To be made by the Priest alone, standing; the People still
                            kneeling.</i>
                    </small>
                </div>
                <br/>

                <b>
                    ALMIGHTY God, the Father of our Lord Jesus Christ, who desireth not the
                    death of a sinner, but rather that he may turn from his wickedness and
                    live, hath given power, and commandment, to his Ministers, to declare and
                    pronounce to his people, being penitent, the Absolution and Remission of
                    their sins. He pardoneth and absolveth all those who truly repent, and
                    unfeignedly believe his holy Gospel.<br/>
                    <br/>

                    Wherefore let us beseech him to grant us true repentance, and his Holy
                    Spirit, that those things may please him which we do at this present; and
                    that the rest of our life hereafter may be pure and holy; so that at the
                    last we may come to his eternal joy; through Jesus Christ our Lord.
                    <i>Amen.</i><br/>
                    <br/>
                </b>

                <div class="text-center">
                    <small>
                        <i>Or this.</i>
                    </small>
                </div>
                <br/>

                <b>
                    THE Almighty and merciful Lord grant you Absolution and Remission of all
                    your sins, true repentance; amendment of life, and the grace and
                    consolation of his Holy Spirit. <i>Amen.</i><br/>
                    <br/>
                </b>

                <a id="lordsprayer">&nbsp;</a>
                <small>
                    <br/><i>Then the Minister shall kneel, and say the Lord's Prayer;
                        the People still kneeling, and repeating it with him.</i><br/>
                    <br/>
                </small>

                <b>
                    OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom come.
                    Thy will be done, On earth as it is in heaven. Give us this day our
                    daily bread. And forgive us our trespasses, As we forgive those who
                    trespass against us. And lead us not into temptation, But deliver us
                    from evil. For thine is the kingdom, and the power, and the glory, for
                    ever and ever. Amen.<br/>
                </b>
                <br/>


                <div class="text-center">
                    <small>
                        <i>Then likewise he shall say,</i>
                    </small>
                </div>

                <a id="versicles">&nbsp;</a>

                <div class="text-center">
                    <b>
                        O Lord, open thou our lips.<br/>
                        <i>Answer.</i> And our mouth shall show forth thy praise.
                    </b>
                </div>
                <br/>

                <div class="text-center">
                    <small>
                        <i>Here, all standing up, the Minister shall say,</i>
                    </small>
                </div>
                <br/>

                <b>
                    Glory be to the Father, and to the Son, and to the Holy Ghost;<br/>
                    <br/>

                    <i>Answer.</i> As it was in the beginning, is now, and ever shall be,
                    world without end. Amen.<br/>
                    <i>Minister.</i> Praise ye the Lord.<br/>
                    <i>Answer.</i> The Lord's Name be praised.<br/>
                    <br/>
                </b>

                <a id="psalm">&nbsp;</a><br/>

                <small>
                    <i>Then shall follow a Portion of the Psalms, according to the Use of this
                        Church. And at the end of every Psalm, and likewise at the end of the
                        Magnificat, Cantate Domino, Bonum est confiteri, Nunc dimittis, Deus
                        misereatur, Benedic, anima mea, may be sung or said the Gloria Patri; and
                        at the end of the whole Portion or Selection of the Psalms for the day,
                        shall be sung or said the Gloria Patri, or else the Gloria in excelsis,
                        as followeth.</i>
                </small>
                <br/>
                <br/>


                <a href="#">Today's Psalms from the Daily Psalter</a><br/>


                <?php
                echo $psalm;
                ?>


                <a id="psalter">&nbsp;</a>

                <br/>
                <div class="text-center"><i><b>Gloria in excelsis.</b></i></div>
                <br/>

                <b>
                    GLORY be to God on high, and on earth peace, good will towards men. We
                    praise thee, we bless thee, we worship thee, we glorify thee, we give
                    thanks to thee for thy great glory, O Lord God, heavenly King, God the
                    Father Almighty.<br/>
                    <br/>

                    O Lord, the only-begotten Son, Jesus Christ; O Lord God, Lamb of God, Son
                    of the Father, that takest away the sins of the world, have mercy upon
                    us. Thou that takest away the sins of the world, receive our prayer.
                    Thou that sittest at the right hand of God the Father, have mercy upon
                    us. For thou only art holy; thou only art the Lord; thou only, O Christ,
                    with the Holy Ghost, art most high in the glory of God the Father. Amen.<br/>
                    <br/>
                </b>

                <small>
                    <i>Then shall be read the First Lesson, according to the Table or
                        Calendar.</i><br/>
                </small>

                <a id="lesson1">&nbsp;</a>


                <?php
                echo $first_lesson;
                ?>


                <div class="text-center">
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#cantate"> Go to <i>Cantate Domino</i></a>&nbsp;
                    &nbsp; &nbsp; &nbsp;
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#bonum"> Go to <i>Bonum est</i></a><br/>
                </div>
                <br/>

                <small>
                    <i>After which shall be sung or said the Hymn called Magnificat, as
                        followeth.</i><br/>
                    <br/>

                    <i>But </i>NOTE,<i> That the Minister, at his discretion, may omit one of the
                        Lessons in Evening Prayer, the Lesson being followed by one of the
                        Evening Canticles.</i>
                </small>
                <br/>
                <br/>

                <br/>
                <div class="text-center"><i><b>Magnificat.</b></i> St. Luke i. 46.</div>
                <br/>

                <b>
                    MY soul doth magnify the Lord, * and my spirit hath rejoiced in God my
                    Saviour.<br/>
                    For he hath regarded * the lowliness of his handmaiden.<br/>
                    For behold, from henceforth * all generations shall call me blessed.<br/>
                    For he that is mighty hath magnified me; * and holy is his Name.<br/>
                    And his mercy is on them that fear him * throughout all generations.<br/>
                    He hath showed strength with his arm; * he hath scattered the proud in
                    the imagination of their hearts.<br/>
                    He hath put down the mighty from their seat, * and hath exalted the
                    humble and meek.<br/>
                    He hath filled the hungry with good things; * and the rich he hath sent
                    empty away.<br/>
                    He remembering his mercy hath holpen his servant Israel; * as he
                    promised to our forefathers,<br/>
                    Abraham and his seed, for ever.<br/>
                    <br/>
                </b>

                <div class="text-center"><h3>
                        <i class="fa-solid fa-book-bible"></i> <a href="#lesson2">Go to the Scripture Readings for the
                            Second Lesson</a><br/>
                    </h3></div>

                <br/>
                <div class="text-center">

                    <small>
                        <i>Or this Psalm.</i>
                    </small>
                </div>

                <a id="cantate">&nbsp;</a>
                <div class="text-center"><i><b>Cantate Domino.</b></i> Psalm xcviii.</div>
                <br/>

                <b>
                    O SING unto the LORD a new song; * for he hath done marvellous things.<br/>
                    With his own right hand, and with his holy arm, * hath he gotten himself
                    the victory.<br/>
                    The LORD declared his salvation; * his righteousness hath he openly
                    showed in the sight of the heathen.<br/>
                    He hath remembered his mercy and truth toward the house of Israel; * and
                    all the ends of the world<br/>
                    have seen the salvation of our God.<br/>
                    Show yourselves joyful unto the LORD, all ye lands; * sing, rejoice, and
                    give thanks.<br/>
                    Praise the LORD upon the harp; * sing to the harp with a psalm of
                    thanksgiving.<br/>
                    With trumpets also and shawms, * O show yourselves joyful before the
                    LORD, the King.<br/>
                    Let the sea make a noise, and all that therein is; * the round world, and
                    they that dwell therein.<br/>
                    Let the floods clap their hands, and let the hills be joyful together
                    before the LORD; * for he cometh<br/>
                    to judge the earth.<br/>
                    With righteousness shall he judge the world, * and the peoples with
                    equity.<br/>
                </b>
                <br/>

                <div class="text-center"><h3>
                        <i class="fa-solid fa-book-bible"></i> <a href="#lesson2">Go to the Scripture Readings for the
                            Second Lesson</a><br/>
                    </h3></div>

                <br/>
                <div class="text-center">

                    <small>
                        <i>Or this.</i>
                    </small>
                </div>

                <a id="bonum">&nbsp;</a>
                <div class="text-center"><i><b>Bonum est confiteri.</b></i> Psalm xcii.</div>
                <br/>

                <b>
                    IT is a good thing to give thanks unto the LORD, * and to sing praises
                    unto thy Name, O Most Highest;<br/>
                    To tell of thy loving-kindness early in the morning, * and of thy truth in
                    the night season;<br/>
                    Upon an instrument of ten strings, and upon the lute; * upon a loud
                    instrument, and upon the harp.<br/>
                    For thou, LORD, hast made me glad through thy works; * and I will
                    rejoice in giving praise<br/>
                    for the operations of thy hands.<br/>
                    <br/>
                </b>

                <small>
                    <i>Then a Lesson of the New Testament, as it is appointed.</i><br/>
                    <br/>

                    <i>And after that shall be sung or said the Hymn called Nunc dimittis, as
                        followeth.</i>
                </small>
                <br/>

                <a id="lesson2">&nbsp;</a>


                <?php
                echo $second_lesson;
                ?>


                <br/>

                <div class="text-center">
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#deus"> Go to <i>Deus misereatur</i></a>&nbsp;
                    &nbsp; &nbsp; &nbsp;
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#benedic"> Go to <i>Benedic, anima mea</i></a><br/>
                </div>
                <br/>

                <div class="text-center"><i><b>Nunc Dimittis.</b></i> St. Luke ii. 29.</div>
                <br/>

                <b>
                    LORD, now lettest thou thy servant depart in peace, * according to thy
                    word.<br/>
                    For mine eyes have seen * thy salvation,<br/>
                    Which thou hast prepared * before the face of all people;<br/>
                    To be a light to lighten the Gentiles, * and to be the glory of thy
                    people Israel.<br/>
                </b>
                <br/>

                <div class="text-center"><i class="fa-solid fa-circle-arrow-down"></i><a href="#creed"> Go to the
                        Creed</a><br/></div>

                <br/>
                <br/>

                <div class="text-center">
                    <small>
                        <i>Or else this Psalm.</i>
                    </small>
                </div>

                <a id="deus">&nbsp;</a>
                <div class="text-center"><i><b>Deus misereatur.</b></i> Psalm lxvii.</div>
                <br/>

                <b>
                    GOD be merciful unto us, and bless us, * and show us the light of his
                    countenance, and be merciful unto us;<br/>
                    That thy way may be known upon earth, * thy saving health among all
                    nations.<br/>
                    Let the peoples praise thee, O God; * yea, let all the peoples praise
                    thee.<br/>
                    O let the nations rejoice and be glad; * for thou shalt judge the folk
                    righteously, and govern the nations upon earth.<br/>
                    Let the peoples praise thee, O God; * yea, let all the peoples praise
                    thee.<br/>
                    Then shall the earth bring forth her increase; * and God, even our own
                    God, shall give us his blessing.<br/>
                    God shall bless us; * and all the ends of the world shall fear him.<br/>
                    <br/>
                </b>

                <div class="text-center"><i class="fa-solid fa-circle-arrow-down"></i><a href="#creed"> Go to the
                        Creed</a><br/></div>

                <br/>
                <br/>

                <div class="text-center">

                    <small>
                        <i>Or this.</i>
                    </small>
                </div>


                <a id="benedic">&nbsp;</a>
                <div class="text-center"><i><b>Benedic, anima mea.</b></i> Psalm ciii.</div>
                <br/>

                <b>
                    PRAISE the LORD, O my soul; * and all that is within me, praise his holy
                    Name.<br/>
                    Praise the LORD, O my soul, * and forget not all his benefits:<br/>
                    Who forgiveth all thy sin, * and healeth all thine infirmities;<br/>
                    Who saveth thy life from destruction, * and crowneth thee with mercy and
                    loving-kindness.<br/>
                    O praise the LORD, ye angels of his, ye that excel in strength; * ye that
                    fulfil his commandment, and hearken unto the voice of his word.<br/>
                    O praise the LORD, all ye his hosts; * ye servants of his that do his
                    pleasure.<br/>
                    O speak good of the LORD, all ye works of his, in all places of his
                    dominion: * praise thou<br/>
                    the LORD, O my soul.<br/>
                </b>
                <br/>


                <a id="creed">&nbsp;</a>
                <br/>
                <small>
                    <i>Then shall be said the Apostles' Creed by the Minister and the People,
                        standing. And any churches may, instead of the words </i>He descended into
                    hell,<i> use the words</i> He went into the place of departed spirits,<i> which are
                        considered as words of the same meaning in the Creed.</i>
                </small>
                <br/>
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

                <div class="text-center">
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#prayers"> Go to <i>Prayers</i></a><br/>
                </div>

                <br/>
                <br/>
                <div class="text-center">

                    <small>
                        <i>Or the Creed commonly called the Nicene.</i>
                    </small>
                </div>
                <br/>

                <b>
                    I BELIEVE in one God the Father Almighty, Maker of heaven and earth, And
                    of all things visible and invisible:<br/>
                    <small>&nbsp; <br/></small>

                    And in one Lord Jesus Christ, the only-begotten Son of God; Begotten of
                    his Father before all worlds, God of God, Light of Light, Very God of
                    very God; Begotten, not made; Being of one substance with the Father; By
                    whom all things were made: Who for us men and for our salvation came down
                    from heaven, And was incarnate by the Holy Ghost of the Virgin Mary, And
                    was made man: And was crucified also for us under Pontius Pilate; He
                    suffered and was buried: And the third day he rose again according to the
                    Scriptures: And ascended into heaven, And sitteth on the right hand of
                    the Father: And he shall come again, with glory, to judge both the quick
                    and the dead; Whose kingdom shall have no end.<br/>
                    <small>&nbsp; <br/></small>

                    And I believe in the Holy
                    Ghost, The Lord, and Giver of Life, Who proceedeth from the Father and
                    the Son; Who with the Father and the Son together is worshipped and
                    glorified; Who spake by the Prophets: And I believe one Catholic and
                    Apostolic Church: I acknowledge one
                    Baptism for the remission of sins: And I look for the Resurrection of the
                    dead: And the Life of the world to come. Amen.<br/><br/>
                    <br/>
                </b>

                <a id="prayers">&nbsp;</a>

                <small>
                    <i>And after that, these Prayers following, the People devoutly kneeling;
                        the Minister first pronouncing,</i>
                </small>
                <br/>
                <br/>

                <div class="text-center">
                    <b>
                        The Lord be with you.<br/>
                        <i>Answer.</i> And with thy spirit.<br/>
                        <i>Minister.</i> Let us pray.
                    </b>
                </div>
                <br/>
                <br/>

                <small>
                    <i>Here, if it hath not already been said, shall follow
                        the <a href="#lordsprayer"><b> Lord's Prayer</b></a>.</i>
                </small>
                <br/>
                <br/>

                <b>
                    <i>Minister.</i> O Lord, show thy mercy upon us.<br/>
                    <i>Answer.</i> And grant us thy salvation.<br/>
                    <i>Minister.</i> O Lord, save the State.<br/>
                    <i>Answer.</i> And mercifully hear us when we call upon thee.<br/>
                    <i>Minister.</i> Endue thy Ministers with righteousness.<br/>
                    <i>Answer.</i> And make thy chosen people joyful.<br/>
                    <i>Minister.</i> O Lord, save thy people.<br/>
                    <i>Answer.</i> And bless thine inheritance.<br/>
                    <i>Minister.</i> Give peace in our time, O Lord.<br/>
                    <i>Answer.</i> For it is thou, Lord, only, that makest us dwell in safety.<br/>
                    <i>Minister.</i> O God, make clean our hearts within us.<br/>
                    <i>Answer.</i> And take not thy Holy Spirit from us.<br/>
                    <br/>
                </b>

                <small>
                    <i>Then shall be said the Collect for the Day, and after that the Collects
                        and Prayers following.</i>
                </small>
                <br/>


                <a id="collect">&nbsp;</a>
                <?php
                echo $collect;
                ?>


                <br/>

                <div class="text-center"><i><b>A Collect for Peace.</b></i></div>
                <br/>

                <b>
                    O GOD, from whom all holy desires, all good counsels, and all just works
                    do proceed; Give unto thy servants that peace which the world cannot
                    give; that our hearts may be set to obey thy commandments, and also that
                    by thee, we, being defended from the fear of our enemies, may pass our
                    time in rest and quietness; through the merits of Jesus Christ our
                    Saviour. <i> Amen.</i><br/>
                </b>
                <br/>
                <br/>

                <div class="text-center"><i><b>A Collect for Aid against Perils.</b></i></div>
                <br/>

                <b>
                    LIGHTEN our darkness, we beseech thee, O Lord; and by thy great mercy
                    defend us from all perils and dangers of this night; for the love of thy
                    only Son, our Saviour, Jesus Christ. <i> Amen.</i><br/>
                </b>
                <br/>

                <small>
                    <i>In places where it may be convenient, here followeth the Anthem.<br/>
                        The Minister may here end the Evening Prayer with such
                        <a href="#"><b>Prayer</b></a>, or Prayers,
                        taken out of this Book, as he shall think fit.</i>
                </small><br/>
                <br/>
                <br/>

                <div class="text-center"><i><b>A Prayer for The President of the United States,<br/>
                            and all in Civil Authority.</b></i></div>
                <br/>

                <b>
                    Almighty God, whose kingdom is everlasting and power infinite; Have mercy
                    upon this whole land; and so rule the hearts of thy servants THE
                    PRESIDENT OF THE UNITED STATES, The Governor of this State, and all
                    others in authority, that they, knowing whose ministers they are, may
                    above all things seek thy honour and glory; and that we and all the
                    People, duly considering whose authority they bear, may faithfully and
                    obediently honour them, according to thy blessed Word and ordinance;
                    through Jesus Christ our Lord, who with thee and the Holy Ghost liveth
                    and reigneth ever, one God, world without end. <i> Amen.</i><br/>
                </b>
                <br/>
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

                <small>
                    <i>* This may be said when any desire the prayers of the Congregation.</i>
                </small><br/>
                <br/>
                <br/>

                <div class="text-center"><i><b>A General Thanksgiving.</b></i></div>
                <br/>

                <b>
                    Almighty God, Father of all mercies, we, thine unworthy servants, do give
                    thee most humble and hearty thanks for all thy goodness and
                    lovingkindness to us, and to all men; <i>[* particularly to those who desire
                        now to offer up their praises and thanksgivings for thy late mercies
                        vouchsafed unto them.]</i> We bless thee for our creation, preservation, and
                    all the blessings of this life; but above all, for thine inestimable love
                    in the redemption of the world by our Lord Jesus Christ; for the means of
                    grace, and for the hope of glory. And, we beseech thee, give us that due
                    sense of all thy mercies that our hearts may be unfeignedly thankful; and
                    that we show forth thy praise, not only with our lips, but in our lives,
                    by giving up our selves to thy service, and by walking before thee in
                    holiness and righteousness all our days; through Jesus Christ our Lord,
                    to whom, with thee and the Holy Ghost, be all honour and glory, world
                    without end. <i> Amen.</i><br/>
                </b>
                <br/>

                <small>
                    <i>* This may be said when any desire to return thanks for mercies
                        vouchsafed to them.</i>
                </small>
                <br/>
                <br/>

                <small>
                    <i>NOTE, That the General Thanksgiving may be said by the Congregation with
                        the Minister.</i>
                </small>
                <br/>
                <br/>
                <br/>

                <div class="text-center"><i><b>A Prayer of St. Chrysostom</b></i></div>
                <br/>

                <b>
                    Almighty God, who hast given us grace at this time with one accord to
                    make our common supplications unto thee; and dost promise that when two
                    or three are gathered together in thy Name thou wilt grant their
                    requests; Fulfil now, O Lord, the desires and petitions of thy servants,
                    as may be most expedient for them; granting us in this world knowledge of
                    thy truth, and in the world to come life everlasting. <i>Amen.</i><br/>
                </b>
                <br/>
                <br/>

                <div class="text-center"><i><b>2 Cor. xiii. 14.</b></i></div>
                <br/>

                <b>
                    The grace of our Lord Jesus Christ, and the love of God, and the
                    fellowship of the Holy Ghost, be with us all evermore. <i> Amen.</i><br/>
                    <br/>
                </b>


                <div class="text-center">
                    <small>
                        <i>Here endeth the Order of Evening Prayer.</i>
                    </small></div>
                <br/>
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
