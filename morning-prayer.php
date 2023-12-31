<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
$db_handle = new DBController();

$currentMonthkalendar = date('Y-m');

$currentYear = date('Y');

$currentDate = date('Y-m-d');

$extension = '';

$url = $_SERVER['REQUEST_URI'];
$id = substr($url, strrpos($url, '/') + 1);

if ((int)$id > 0) {
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
    <title>Morning Prayer - Common Prayer Online</title>
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
                           href="<?php echo $extension; ?>kalendar/<?php echo $currentMonthkalendar; ?>">Kalendar</a>
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
                <?php
                liturgicalColor($day);
                ?>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>services">Concerning
                        the Service of the Church</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>rubrics">Miscellaneous
                        Rubrics from the 1928 BCP</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>info">Information about
                        the BCP and Lectionary</a>
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


        if ((int)$id > 0) {
            $dayOfYear = $id;
        }

        ?>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>morning-prayer">Today's
                        Readings/Propers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100"
                       href="<?php echo $extension; ?>morning-prayer/<?php echo $dayOfYear + 1; ?>">Tomorrow's
                        Readings/Propers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100"
                       href="<?php echo $extension; ?>morning-prayer/<?php echo $dayOfYear - 1; ?>">Yesterday's
                        Readings/Propers</a>
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

                <small>
                    <i>The Minister shall begin the Morning Prayer by reading one or more of
                        the following Sentences of Scripture.</i><br/>
                    <br/>

                    <i>On any day, save a Day of Fasting or Abstinence, or on any day when the
                        Litany or Holy Communion is immediately to follow, the Minister may, at
                        his discretion, pass at once from the Sentences to the Lord's Prayer, first
                        pronouncing, </i>The Lord be with you. <i>Answer. </i> And with thy spirit.
                    <i> Minister. </i> Let us pray.<br/>
                    <br/>

                    <i>And NOTE, That when the Confession and Absolution are omitted, the
                        Minister may, after the Sentences, pass to the
                        <a href="#versicles"><b> Versicles,</b></a></i> O Lord,
                    open thou our lips,<i> etc., in which case the Lord's Prayer shall be
                        said with the other prayers, immediately after </i> The Lord be with you,<i>
                        etc., and before the Versicles and Responses which follow, or, in the
                        Litany, as there appointed. </i><br/>
                    <br/>
                </small>
                <b>
                    THE LORD is in his holy temple: let all the earth
                    keep silence before him.</b> <i>Hab. ii. 20.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    I was glad when they said unto me, We will go into
                    the house of the LORD.</b> <i>Psalm cxxii. 1.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Let the words of my mouth, and the meditation of my
                    heart, be alway acceptable in thy sight, O LORD, my
                    strength and my redeemer.</b> <i>Psalm xix. 14.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    O send out thy light and thy truth, that they may lead
                    me, and bring me unto thy holy hill, and to thy dwelling.</b>
                <i>Psalm xliii. 3.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Thus, saith the high and lofty One that inhabiteth
                    eternity, whose name is Holy; I dwell in the high
                    and holy place, with him also that is of a contrite
                    and humble spirit, to revive the spirit of the humble,
                    and to revive the heart of the contrite ones.</b>
                <i>Isaiah Ivii. 15.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    The hour cometh, and now is, when the true worshippers
                    shall worship the Father in spirit and in truth: for the
                    Father seeketh such to worship him.</b> <i>St. John iv. 23.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Grace be unto you, and peace, from God our Father, and
                    from the Lord Jesus Christ.</b> <i>Phil. i. 2.</i><br/>
                <br/>

                <i><u>Advent.</u></i><br/>
                <b>
                    Repent ye, for the Kingdom of heaven is at hand.</b>
                <i>St. Matt. iii. 2.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Prepare ye the way of the LORD, make straight in the
                    desert a highway for our God.</b> <i>Isaiah xl. 3.</i><br/>
                <br/>

                <i><u>Christmas.</u></i><br/>
                <b>
                    Behold, I bring you good tidings of great joy,
                    which shall be to all people. For unto you is
                    born this day in the city of David a Saviour, which is
                    Christ the Lord.</b> <i>St. Luke ii. 10, 11.</i><br/>
                <br/>

                <i><u>Epiphany.</u></i><br/>
                <b>
                    From the rising of the sun even unto the going
                    down of the same my Name shall be great among
                    the Gentiles; and in every place incense shall be offered
                    unto my Name, and a pure offering: for my Name shall
                    be great among the heathen, saith the LORD of hosts.</b>
                <i>Mal. i. 11.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Awake, awake; put on thy strength, O Zion; put on thy
                    beautiful garments, O Jerusalem.</b> <i>Isaiah lii. 1.</i><br/>
                <br/>

                <i><u>Lent.</u></i><br/>
                <b>
                    Rend your heart, and not your garments, and turn unto
                    the LORD your God: for he is gracious and merciful, slow
                    to anger, and of great kindness, and repenteth him of
                    the evil.</b> <i>Joel ii. 13.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    The sacrifices of God are a broken spirit: a broken and a
                    contrite heart, O God, thou wilt not despise.</b> <i>Psalm li. 17.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    I will arise and go to my father, and will say unto him,
                    Father, I have sinned against heaven, and before thee, and
                    am no more worthy to be called thy son.</b> <i>St. Luke xv. 18, 19.</i><br/>
                <br/>

                <i><u>Good Friday.</u></i><br/>
                <b>
                    Is it nothing to you, all ye that pass by? behold,
                    and see if there be any sorrow like unto my sorrow
                    which is done unto me, wherewith the LORD hath
                    afflicted me.</b> <i>Lam. i. I 2.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    In whom we have redemption through his blood, the
                    forgiveness of sins, according to the riches of his grace.</b>
                <i>Eph. i. 7.</i><br/>
                <br/>

                <i><u>Easter.</u></i><br/>
                <b>
                    He is risen. The Lord is risen indeed.</b>
                <i>St. Mark xvi. 6; St. Luke xxiv. 34.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    This is the day which the LORD hath made;
                    we will rejoice and be glad in it.</b> <i>Psalm cxviii. 24.</i><br/>
                <br/>

                <i><u>Ascension.</u></i><br/>
                <b>
                    Seeing that we have a great High Priest, that is
                    passed into the heavens, Jesus the Son of God, let
                    us come boldly unto the throne of grace, that we may
                    obtain mercy, and find grace to help in time of need.</b>
                <i>Heb. iv. 14, 16.</i><br/>
                <br/>

                <i><u>Whitsunday.</u></i><br/>
                <b>
                    Ye shall receive power, after that the Holy Ghost
                    is come upon you: and ye shall be witnesses unto me
                    both in Jerusalem, and in all Judaea, and in Samaria,
                    and unto the uttermost part of the earth.</b> <i> Acts i. 8.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    Because ye are sons, God hath sent forth the Spirit of
                    his Son into your hearts, crying, Abba, Father.</b> <i>Gal. iv. 6.</i><br/>
                <br/>

                <i><u>Trinity Sunday.</u></i><br/>
                <b>
                    Holy, holy, holy, Lord God Almighty, which
                    was, and is, and is to come.</b> <i>Rev. iv. 8.</i><br/>
                <br/>

                <i><u>Thanksgiving Day.</u></i><br/>
                <b>
                    Honour the LORD with thy substance, and with the
                    first-fruits of all thine increase: so shall thy
                    barns be filled with plenty, and thy presses shall
                    burst out with new wine.</b> <i>Prov. iii. 9, 10.</i><br/>
                <small>&nbsp; <br/></small>

                <b>
                    The LORD by wisdom hath founded the earth; by
                    understanding hath he established the heavens.
                    By his knowledge the depths are broken up, and
                    the clouds drop down the dew.</b> <i>Prov. iii. 19, 20.</i><br/>
                <br/>

                <br/>
                <div class="text-center">
                    <small>
                        <i>Then the Minister shall say,</i>
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
                    <br/>
                </b>

                <br/>
                <div class="text-center">
                    <small>
                        <i>Or he shall say, </i>
                    </small>
                </div>
                <br/>

                <b>
                    LET us humbly confess our sins unto Almighty God.<br/>
                </b><br/>

                <br/>
                <div class="text-center"><i><b>A General Confession</b></i></div>
                <br/>

                <div class="text-center">>
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

                <br/>
                <div class="text-center"><i><b>The Declaration of Absolution, or Remission of Sins.</b></i></div>
                <br/>

                <small>
                    <i>To be made by the Priest alone, standing; the People still
                        kneeling. But NOTE, That the Priest, at his discretion, may use,
                        instead of what follows, the Absolution from the Order for Holy
                        Communion.</i>
                </small>
                <br/>
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
                <br/>
                <small>
                    <i>Then the Minister shall kneel, and say the Lord's Prayer;
                        the People still kneeling, and repeating it with him, both here and
                        wheresoever else it is used in Divine Service.</i>
                </small>
                <a id="lordsprayer"></a>
                <br/>
                <br/>


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
                <a id="versicles"></a>
                <div class="text-center">
                    <b>
                        O Lord, open thou our lips.<br/>
                        <i>Answer.</i> And our mouth shall show forth thy praise.
                        <br/>
                    </b>
                </div>

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

                <small>

                    <i>Then shall be said or sung the following Canticle; except on those
                        days for which other Canticles are appointed; and except also, that
                        <a href="#">Psalm 95</a> may be used in this place.</i><br/>
                    <br/>
                    <i>But </i>NOTE,<i> That on Ash Wednesday and Good Friday the
                        <a href="#venite"><b> Venite</b></a> may be omitted.</i><br/>
                    <br/>
                    <i>On the days hereafter named, immediately before the Venite may
                        be sung or said,</i><br/>
                </small>

                <br/>
                <i>On the Sundays in Advent. </i><b>Our King and Saviour draweth nigh; *
                    O come, let us adore him.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On Christmas Day and until the Epiphany. </i><b>Alleluia. Unto us a child
                    is born; * O come, let us adore him. Alleluia.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On the Epiphany and seven days after, and on the Feast of the
                    Transfiguration. </i><b>The Lord hath manifested forth his glory; * O come,
                    let us adore him.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On Monday in Easter Week and until Ascension Day. </i><b>Alleluia. The Lord
                    is risen indeed; * O come, let us adore him. Alleluia.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On Ascension Day and until Whitsunday. </i><b>Alleluia. Christ the Lord
                    ascendeth into heaven; * O come, let us adore him. Alleluia.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On Whitsunday and six days after. </i><b>Alleluia. The Spirit of the Lord
                    filleth the world; * O come, let us adore him. Alleluia.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On Trinity Sunday. </i><b>Father, Son, and Holy Ghost, one God; * O come,
                    let us adore him.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On the Purification, and the Annunciation. </i><b>The Word was made flesh,
                    and dwelt among us; * O come, let us adore him.<br/>
                </b>
                <small>&nbsp; <br/></small>

                <i>On other Festivals for which a proper Epistle and Gospel are ordered.
                </i>
                <b>The Lord is glorious in his saints; * O come, let us adore him.<br/>
                </b>


                <a id="venite"></a>
                <div class="text-center">
                    <hr>

                    <small><i>
                            Seasonal substitute the Venite</i><br/>
                        <a href="event/Easter">Easter</a> &nbsp; &nbsp; &nbsp; &nbsp;<a
                                href="event/Thanksgiving">Thanksgiving</a>
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
                <br/>

                <small>
                    <i>Then shall follow a Portion of the Psalms, according to the Use
                        of this Church. And at the end of every Psalm, and likewise at the end
                        of the Venite, Benedictus es, Benedictus, Jubilate, may be, and at the
                        end of the whole Portion, or Selection from the Psalter, shall be sung
                        or said the Gloria Patri:</i>
                </small>
                <br/>
                <br/>

                <?php
                $todayDayNum=date('d');
                if($todayDayNum==31){
                    $todayDayNum=30;
                }
                ?>
                <a href="dailym/<?php echo $todayDayNum; ?>">Today's Psalms from the Daily Psalter</a><br/>


                <?php
                echo $psalm;
                ?>
                <br/>

                <b>
                    GLORY be to the Father, and to the Son, * and to the
                    Holy Ghost;<br/>
                    AS it was in the beginning, is now, and ever shall be, * world
                    without end. Amen.<br/>
                </b>
                <br/>


                <small>
                    <i>Then shall be read the First Lesson, according to the Table or Calendar.
                        And </i>NOTE,<i> That before every Lesson, the Minister shall say, </i>Here
                    beginneth <i>such a</i> Chapter (<i>or</i> Verse of <i>such a</i> Chapter) of
                    <i>such a Book; and after every Lesson, </i>Here endeth the First (<i>or</i>
                    the Second) Lesson.<br/>
                </small>

                <br/>
                <a id="lesson1">&nbsp;</a>
                <?php
                echo $first_lesson;
                ?>


                <div class="text-center">
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#benedictuses"> Go to <i>Benedictus es</i></a>&nbsp;
                    &nbsp; &nbsp; &nbsp;
                    <i class="fa-solid fa-circle-arrow-down"></i><a href="#benedicite"> Go to <i>Benedicite,
                            omnia</i></a><br/>
                </div>

                <br/>
                <small>
                    <i>Here Shall be said or sung the following Hymn.<br/>
                        But </i>NOTE,<i> That on any day when the Holy Communion is immediately
                        to follow, the Minister at his discretion, after any one of the following
                        Canticles of Morning Prayer has been said or sung, may pass at once to
                        the Communion Service.</i><br/>
                </small>
                <br/>

                <div class="text-center"><i><b>Te Deum laudamus.</b></i></div>
                <br/>

                <b>
                    WE praise thee, O God; we acknowledge thee to be the Lord.<br/>
                    All the earth doth worship thee, the Father everlasting.<br/>
                    To thee all Angels cry aloud; the Heavens, and all the Powers therein;<br/>
                    To thee Cherubim and Seraphim continually do cry,<br/>
                    Holy, Holy, Holy, Lord God of Sabaoth;<br/>
                    Heaven and earth are full of the Majesty of thy glory.<br/>
                    The glorious company of the Apostles praise thee.<br/>
                    The goodly fellowship of the Prophets praise thee.<br/>
                    The noble army of Martyrs praise thee.<br/>
                    The holy Church throughout all the world doth acknowledge thee;<br/>
                    The Father, of an infinite Majesty;<br/>
                    Thine adorable, true, and only Son;<br/>
                    Also the Holy Ghost, the Comforter.<br/>
                    <br/>

                    THOU art the King of Glory, O Christ.<br/>
                    Thou art the everlasting Son of the Father.<br/>
                    When thou tookest upon thee to deliver man, thou didst
                    humble thyself to be born of a Virgin.<br/>
                    When thou hadst overcome the sharpness of death, thou
                    didst open the Kingdom of Heaven to all believers.<br/>
                    Thou sittest at the right hand of God, in the glory of the Father.<br/>
                    We believe that thou shalt come to be our Judge.<br/>
                    We therefore pray thee, help thy servants, whom thou<br/>
                    hast redeemed with thy precious blood.<br/>
                    Make them to be numbered with thy Saints, in glory everlasting.<br/>
                    <br/>

                    O LORD, save thy people, and bless thine heritage.<br/>
                    Govern them, and lift them up forever.<br/>
                    Day by day we magnify thee;<br/>
                    And we worship thy Name ever, world without end.<br/>
                    Vouchsafe, O Lord, to keep us this day without sin.<br/>
                    O Lord, have mercy upon us, have mercy upon us.<br/>
                    O Lord, let thy mercy be upon us, as our trust is in thee.<br/>
                    O Lord, in thee have I trusted; let me never be confounded.<br/>
                    <br/>
                </b>

                <div class="text-center"><h3>
                        <i class="fa-solid fa-book-bible"></i> <a href="#lesson2">Go to the Scripture Readings for
                            the Second Lesson</a><br/>
                    </h3></div>

                <br/>
                <div class="text-center">
                    <small>
                        <i>Or this Canticle.</i>
                    </small>
                </div>

                <a id="benedictuses"></a>
                <div class="text-center"><i><b>Benedictus es, Domine.</b></i></div>
                <br/>

                <b>
                    BLESSED art thou, O Lord God of our fathers:* praised
                    and exalted above all forever.<br/>
                    Blessed art thou for the Name of thy Majesty:* praised
                    and exalted above all forever.<br/>
                    Blessed art thou in the temple of thy holiness:* praised
                    and exalted above all forever.<br/>
                    Blessed art thou that beholdest the depths, and dwellest
                    between the Cherubim: * praised and exalted above all forever.<br/>
                    Blessed art thou on the glorious throne of thy kingdom: * praised
                    and exalted above all forever.<br/>
                    Blessed art thou in the firmament of heaven: * praised
                    and exalted above all forever.<br/>
                    <br/>
                </b>

                <div class="text-center"><h3>
                        <i class="fa-solid fa-book-bible"></i> <a href="#lesson2">Go to the Scripture Readings for
                            the Second Lesson</a><br/>
                    </h3></div>

                <div class="text-center">
                    <small>
                        <i>Or this Canticle.</i>
                    </small>
                </div>
                <a id="benedicite"></a>
                <div class="text-center"><i><b>Benedicite, omnia opera Domini.</b></i></div>
                <br/>

                <b>
                    O ALL ye Works of the Lord, bless ye the Lord: *
                    praise him, and magnify him forever.<br/>
                    O ye Angels of the Lord, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    <br/>

                    O ye Heavens, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Waters that be above the firmament, bless ye the
                    Lord: * praise him, and magnify him forever.<br/>
                    O all ye Powers of the Lord, bless ye the Lord: * praise
                    him, and magnify him forever.<br/>
                    O ye Sun and Moon, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Stars of heaven, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Showers and Dew, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Winds of God, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Fire and Heat, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Winter and Summer, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Dews and Frosts, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Frost and Cold, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Ice and Snow, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Nights and Days, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Light and Darkness, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Lightnings and Clouds, bless ye the Lord: * praise
                    him, and magnify him forever.<br/>
                    <br/>

                    O let the Earth bless the Lord: * yea, let it praise him,
                    and magnify him forever.<br/>
                    O ye Mountains and Hills, bless ye the Lord: * praise
                    him, and magnify him forever.<br/>
                    O all ye Green Things upon the earth, bless ye the
                    Lord: * praise him, and magnify him forever.<br/>
                    O ye Wells, bless ye the Lord: * praise him, and magnify
                    him forever.<br/>
                    O ye Seas and Floods, bless ye the Lord: * praise him, and
                    magnify him forever.<br/>
                    O ye Whales, and all that move in the waters, bless ye
                    the Lord: * praise him, and magnify him forever.<br/>
                    O all ye Fowls of the air, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O all ye Beasts and Cattle, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Children of Men, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    <br/>

                    O LET Israel bless the Lord: * praise him, and magnify
                    him forever.<br/>
                    O ye Priests of the Lord, bless ye the Lord: * praise him,
                    and magnify him forever.<br/>
                    O ye Servants of the Lord, bless ye the Lord: * praise
                    him, and magnify him forever.<br/>
                    O ye Spirits and Souls of the Righteous, bless ye the
                    Lord: * praise him, and magnify him forever.<br/>
                    O ye holy and humble Men of heart, bless ye the
                    Lord: * praise him, and magnify him forever.<br/>
                    <br/>

                    Let us bless the Father, and the Son, and the Holy
                    Ghost: * praise him, and magnify him forever.<br/>
                    <br/>
                </b>

                <br/>
                <small>
                    <i>Then shall be read, in like manner, the Second Lesson, taken out of the
                        New Testament, according to the Table or Calendar.<br/>
                        And after that shall be sung or said the Hymn following.<br/>
                        But </i>NOTE,<i> That, save on the Sundays in Advent, the latter portion thereof
                        may be omitted.</i>
                </small>
                <br/>
                <br/>

                <a id="lesson2">&nbsp;</a>

                <?php
                echo $second_lesson;
                ?>


                <div class="text-center">
                    <i class="fa-solid fa-circle-arrow-down"></i> <a href="#jubilate"> Go to <i>Jubilate,
                            Deo</i></a><br/>
                </div>
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
                <div class="text-center"><i class="fa-solid fa-circle-arrow-down"></i> <a href="#creed"> Go to the
                        Creed</a><br/>
                </div>

                <br/>
                <div class="text-center">
                    <small>
                        <i>Or this Psalm.</i>
                    </small>
                </div>
                <a id="jubilate"></a>
                <div class="text-center"><i><b>Jubilate Deo.</b></i> Psalm c.</div>
                <br/>

                <b>
                    O BE joyful in the LORD, all ye lands: * serve the LORD
                    with gladness, and come before his presence with a
                    song.<br/>
                    Be ye sure that the LORD he is God; it is he that hath
                    made us, and not we ourselves; * we are his people, and the
                    sheep of his pasture.<br/>
                    O go your way into his gates with thanksgiving, and into
                    his courts with praise; * be thankful unto him, and speak
                    good of his Name.<br/>
                    For the LORD is gracious, his mercy is everlasting; * and
                    his truth endureth from generation to generation.<br/>
                    <br/>
                </b>
                <br/>
                <small>
                    <i>Then shall be said the Apostles' Creed by the Minister and the People,
                        standing. And any Churches may, instead of the words, </i>He descended
                    into hell,<i> use the words, </i>He went into the place of departed
                    spirits,<i> which are considered as words of the same meaning in
                        the Creed.</i>
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
                    <i class="fa-solid fa-circle-arrow-down"></i> <a href="#prayers"> Go to <i>Prayers</i></a><br/>
                </div>
                <a id="creed"></a>
                <br/>
                <div class="text-center">
                    <small>
                        <i>Or the Creed commonly called the Nicene.</i>
                    </small>
                </div>
                <br/>
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
                    glorified; Who spake by the Prophets:<br/>
                    And I believe one Catholic and Apostolic Church: I acknowledge one
                    Baptism for the remission of sins: And I look for the Resurrection of the
                    dead: And the Life of the world to come. Amen.<br/>
                    <br/>
                </b>

                <br/>
                <br/>

                <small>
                    <i>And after that, these Prayers following, the People devoutly kneeling;
                        the Minister first pronouncing,</i>
                </small>
                <a id="prayers"></a>
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
                    <i>Minister.</i> O God, make clean our hearts within us.<br/>
                    <i>Answer.</i> And take not thy Holy Spirit from us.<br/>
                    <br/>
                </b>

                <br/>
                <br/>

                <small>
                    <i>Then shall be said the Collect for the Day, except when the
                        Communion Service is read; and then the Collect for the Day shall be
                        omitted here.</i>
                </small>
                <br/>
                <a id="collect">&nbsp;</a>
                <?php
                echo $collect;
                ?>


                <br/>
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
                <small>
                    <i>The following Prayers shall be omitted here when the
                        <a href="litany"><b>Litany</b></a> is said,
                        and may be omitted when the Holy Communion is to follow.<br/>
                        <br/>
                        And </i>Note,<i> That the Minister may here end the Morning Prayer with
                        such general <a href="prayers-and-thanksgivings"><b>intercessions</b></a> taken out of this Book, as he shall think
                        fit,
                        or with the Grace.</i>
                </small>
                <br/>
                <br/>

                <br/>
                <div class="text-center"><i><b>A Prayer for The President of the United States,<br/>
                            and all in Civil Authority.</b></i></div>
                <br/>

                <b>
                    O LORD, our heavenly Father, the high and mighty Ruler of the universe,
                    who dost from thy throne behold all the dwellers upon earth;
                    Most heartily we beseech thee, with thy favour to behold and bless
                    thy servant THE PRESIDENT OF THE UNITED STATES, and all others in
                    authority; and so replenish them with the grace of thy Holy Spirit,
                    that they may always incline to thy will, and walk in thy way.
                    Endue them plenteously with heavenly gifts; grant them in
                    health and prosperity long to live; and finally, after this life,
                    to attain everlasting joy and felicity; through Jesus Christ
                    our Lord. <i>Amen.</i><br/>
                </b>

                <div class="text-center">
                    <small>
                        <i>Or this.</i>
                    </small>
                </div>

                <br/>

                <b>
                    O LORD our Governor, whose glory is in all the world;
                    We commend this nation to thy merciful care, that
                    being guided by thy Providence, we may dwell secure in
                    thy peace. Grant to THE PRESIDENT OF THE UNITED STATES,
                    and to all in authority, wisdom and strength to know and to
                    do thy will. Fill them with the love of truth and righteousness;
                    and make them ever mindful of their calling to serve
                    this people in thy fear; through Jesus Christ our Lord,
                    who liveth and reigneth with thee and the Holy Ghost, one
                    God, world without end. <i>Amen.</i><br/>
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
                        vouchsafed to them.</i><br/>
                    <br/>
                    <i>NOTE, That the General Thanksgiving may be said by the Congregation with
                        the Minister.</i>
                </small><br/>
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
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>occasional-office">Occasional
                    Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>church-year">The Church
                    Year</a>
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
