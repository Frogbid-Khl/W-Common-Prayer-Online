<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
$db_handle = new DBController();

$currentMonthkalendar = date('Y-m');

$currentYear = date('Y');

$currentDate = date('Y-m-d');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon">

    <!-- Developer: Monoget Saha (www.monoget.com.bd) -->
    <!-- Company: FrogBid (www.frogbid.com) -->

    <title>Hourly Office - Common Prayer Online</title>
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
        <div class="row mt-5">
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="home">
                            Home
                        </a>
                    </div>
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
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#matins">
                            Matins
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#lauds">
                            Lauds
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#prime">
                            Prime
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#terce">Terce</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#sext">Sext</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#none">None</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#vespers">Vespers</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#compline">Compline</a>
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
            <h1 class="cpo-content-page-title">THE ORDER FOR THE HOURLY OFFICES</h1>
            <p>As Written in the 1928 Book of Common Prayer</p>
            <p>
                The Customary times for saying the hours are as follows:<br/><br/>

                Matins - Upon Waking/Arising for the day<br/>
                Lauds -   Dawn/Sunrise<br/>
                Prime -   6:00 A.M. (Start of the day)<br/>
                Terce -   9:00 A.M. (Third Hour of the day)<br/>
                Sext -   12:00 Noon (Sixth Hour of the Day<br/>
                None -   3:00 P.M. (Ninth Hour of the day)<br/>
                Vespers - Dusk/Sunset<br/>
                Compline - Just prior to retiring for the day
            </p><!--
            <p class="text-danger">
                Web Server Time is <?php /*echo date('h:i A'); */?>
            </p>-->
        </div>
        <div class="col-lg-6 text-center mt-3">
            <img alt="" class="img-fluid cpo-logo" src="assets/images/book.webp"/>
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
                    getTodayOcasion($day);
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
                    <a class="btn btn-primary cpo-btn-home w-100" href="#matins">Matins</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#lauds">Lauds</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#prime">Prime</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#terce">Terce</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#sext">Sext</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#none">None</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#vespers">Vespers</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#compline">Compline</a>
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
                <a id="matins">&nbsp;</A>
                <div class="text-center">
                    <h3><b>Matins</b></h3>
                </div>
                <br/>
                <blockquote>
                    <small>
                        <i>
                            (The source Breviaries used include a differenting sets of Psalms,
                            Memorials, and Chapter for various occasions at Matins. For the sake
                            of simplicity, only the Ordinary order for Matins is included here.)
                        </i>
                    </small>
                </blockquote>


                <blockquote>
                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom come.
                        Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        And lead us not into temptation. But deliver us from evil.<br/>
                        <br/>

                        <i>V.</i> O Lord, open thou our lips.<br/>
                        <i>R.</i> And our mouths shall shew forth thy praise.<br/>
                        <i>V.</i> O God, make speed to save us.<br/>
                        <i>R.</i> O Lord, make haste to help us.<br/>
                        <br/>

                        <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                        Ghost;<br/>
                        <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                        without end. Amen.<br/>
                    </b>
                    <br/>

                    <b>
                        Alleluia.<br/>
                    </b>

                    <br/>
                    <b>
                        <i>Antiphon</i>: Let us worship the Lord, for he made us.<br/>
                    </b>

                    <div class="text-center">
                        <i><b>Venite, exultemus.</b></i> &nbsp; &nbsp; Psalm xcv.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O come, let us sing unto the Lord let us heartily rejoince in the
                        strength of our salvation.<br/>
                        &nbsp; &nbsp; Let us come before his presence with thanksgiving and shew ourselves
                        glad in him with psalms.
                        &nbsp; &nbsp; For the Lord is a great God and a great king above all gods.<br/>
                        &nbsp; &nbsp; In his hands are all the corners of the earth and the strength of
                        the hills is his also.<br/>
                        &nbsp; &nbsp; The sea is his, and he made it and his hands prepared the dry land.<br/>
                        &nbsp; &nbsp; O come, let us worship, and fall down and kneel before the Lord our maker.<br/>
                        &nbsp; &nbsp; For he is the Lord our God and we are the people of his pasture, and
                        the sheep of his hand.<br/>
                        &nbsp; &nbsp; To-day if ye will hear his voice, harden not your hearts as in the
                        provocation, and as in the day of temptation in the wilderness.<br/>
                        &nbsp; &nbsp; When your fathers tempted me proved me, and saw my works.<br/>
                        &nbsp; &nbsp; Forty years long was I grieved with this generation, and said It
                        is a people that do err in their hearts, for they have not known
                        my ways.<br/>
                        &nbsp; &nbsp; Unto whom I sware in my wrath that they should not enter into my rest.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Let us worship the Lord, for he made us.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                        Ghost;<br/>
                        <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                        without end. Amen.<br/>

                        <br/>

                        <i>V.</i> For he made us.<br/>
                        <i>R.</i> Let us worship the Lord for he made us.<br/>
                    </b>
                </blockquote>

                <div class="text-center">
                    <b>Hymn.</b> <i>Primo die, quo Trinitas.</i><br/>
                </div>
                <blockquote>
                    <blockquote>
                        <b>
                            TODAY the Blessed Trinity<br/>
                            first shed o'er earth his quickening breath.<br/>
                            Today our Maker, risen anew,<br/>
                            delivered us from conquered death.<br/>
                            <br/>
                            Let us obey the Prophet's word,<br/>
                            from sleep and slothfulness arise,<br/>
                            And duly seek unto the Lord<br/>
                            with waking hearts and waking eyes.<br/>
                            <br/>
                            That he may hearken to our prayer,<br/>
                            and stretching forth his high right hand,<br/>
                            May put away our sin and fear,<br/>
                            and lead us to our native land.<br/>
                            <br/>
                            That we who raise the chant of praise<br/>
                            in this most still and silent hour,<br/>
                            On this the holiest of days,<br/>
                            may win his gifts of love and power.<br/>
                            <br/>
                            Now then, O Father of all light!<br/>
                            before thy feet our prayers we pour:<br/>
                            Banish afar the torch of vice,<br/>
                            and every act of sin and dour.<br/>
                            <br/>
                            Let no uncleanness, nor deceit,<br/>
                            to body or to soul be knit,<br/>
                            Lest fiercer flames of hellish fire<br/>
                            from such unhallowed spark be lit.<br/>
                            <br/>
                            Redeemer of the world, we crave<br/>
                            that thou wouldst wash our sins away;<br/>
                            And let us plenteous entrance win<br/>
                            to thy bright home of endless day.<br/>
                            <br/>
                            Grant this, O Father, Lord most High,<br/>
                            co-equal, sole-begotten Son,<br/>
                            And Holy Spirit, Paraclete,<br/>
                            God, while eternal ages run. Amen.<br/>
                            <br/>
                        </b>
                    </blockquote>
                </blockquote>

                <blockquote>
                    <br/>
                    <b>
                        <i>Antiphon</i>: Blessed is the man whose delight is in the law of the Lord.<br/>
                    </b>

                    <div class="text-center">
                        <i><b>Beatus vir.</b></i> &nbsp; &nbsp; Psalm i.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; BLESSED is the man that hath not walked in the counsel of the ungodly, nor
                        stood in the way of sinners and hath not sat in the seat of the scornful.<br/>
                        &nbsp; &nbsp; But his delight is in the law of the Lord and in his law will he exercise
                        himself day and night.<br/>
                        &nbsp; &nbsp; And he shall be like a tree planted by the water side that will bring
                        forth his fruit in due season.<br/>
                        &nbsp; &nbsp; His leaf also shall not wither and look, whatsoever he doeth, it
                        shall prosper.<br/>
                        &nbsp; &nbsp; As for the ungodly, it is not so with them but they are like the chaff,
                        which the wind scattereth away from the face of the earth.<br/>
                        &nbsp; &nbsp; Therefore the ungodly shall not be able to stand in the judgment neither
                        the sinners in the congregation of the righteous.<br/>
                        &nbsp; &nbsp; But the Lord knoweth the way of the righteous and the way of the
                        ungodly shall perish.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                        Ghost;<br/>
                        <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                        without end. Amen.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Blessed is the man whose delight is in the law of the Lord.<br/>
                    </b>
                    <br/>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Serve the Lord in fear, and rejoice unto him with reverence.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <i><b>Quare fremuerent gentes?</b></i> &nbsp; &nbsp; Psalm ii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; WHY do the heathen so furiously rage together and why do the people
                        imagine a vain thing?<br/>
                        &nbsp; &nbsp; The kings of the earth stand up, and the rulers take counsel together
                        against the Lord, and against his Anointed.<br/>
                        &nbsp; &nbsp; Let us break their bonds asunder and cast away their cords from us.<br/>
                        &nbsp; &nbsp; He that dwelleth in heaven shall laugh them to scorn the Lord shall
                        have them in derision.<br/>
                        &nbsp; &nbsp; Then shall he speak unto them in his wrath and vex them in his
                        sore displeasure.<br/>
                        &nbsp; &nbsp; Yet have I set my King upon my holy hill of Sion.<br/>
                        &nbsp; &nbsp; I will preach the law, whereof the Lord hath said unto me Thou
                        art my Son, this day have I begotten thee.<br/>
                        &nbsp; &nbsp; Desire of me, and I shall give thee the heathen for thine inheritance
                        and the utmost parts of the earth for thy possession.<br/>
                        &nbsp; &nbsp; Thou shalt bruise them with a rod of iron and break them in
                        pieces like a potter's vessel.<br/>
                        &nbsp; &nbsp; Be Wise now therefore, O ye kings be learned, ye that are judges
                        of the earth.<br/>
                        &nbsp; &nbsp; Serve the Lord in fear and rejoice unto him with reverence.<br/>
                        &nbsp; &nbsp; Kiss the Son, lest he be angry, and so ye perish from the right
                        way if his Wrath be kindled, (yea, but a little,) blessed are all they
                        that put their trust in him.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Serve the Lord in fear, and rejoice unto him with reverence.<br/>
                    </b>
                    <br/>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Arise Lord, and help me, O my God.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <i><b>Domine, quid multiplicati?</b></i> &nbsp; &nbsp; Psalm iii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; LORD, how are they increased that trouble me, many are
                        they that rise against me.<br/>
                        &nbsp; &nbsp; Many one there be that say of my soul There is no help for him in his God.<br/>
                        &nbsp; &nbsp; But thou, O Lord, art my defender, thou art my worship, and
                        the lifter up of my head.<br/>
                        &nbsp; &nbsp; I did call upon the Lord with my voice and he heard me out of his holy hill.<br/>
                        &nbsp; &nbsp; I laid me down and slept, and rose up again for the Lord sustained me.<br/>
                        &nbsp; &nbsp; I will not be afraid for ten thousands of the people that have set
                        themselves against me roundabout.<br/>
                        &nbsp; &nbsp; Up, Lord, and help me, O my God, for thou smitest all mine enemies upon
                        the cheek-bone; thou hast broken the teeth of the ungodly.<br/>
                        &nbsp; &nbsp; Salvation belongeth unto the Lord and thy blessing is upon thy people.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Arise Lord, and help me, O my God.<br/>
                    </b>
                    <br/>
                    <br/>

                    <b>
                        <i>V.</i> I have thought upon thy name, O Lord, in the night season.<br/>
                        <i>R.</i> And have kept thy law.<br/>

                        <br/>
                        Glory be, etc.
                    </b>
                    <br/>


                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom come.
                        Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us.<br/>
                    </b>
                    <br/>

                    <br/>
                    <b>
                        <i>V.</i> And lead us not into temptation.<br/>
                        <i>R.</i> But deliver us from evil.<br/>
                        <br/>
                        Let us pray.
                    </b>
                </blockquote>


                <blockquote>

                    <b>
                        <i>Antiphon</i>: How excellent is thy name, O Lord, in all the world.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <i><b>Domine, Dominus noster</b></i> &nbsp; &nbsp; Ps. viii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O LORD our Governor, how excellent is thy Name in all the world; thou that
                        hast set thy glory above the heavens!<br/>
                        &nbsp; &nbsp; Out of the mouth of very babes and sucklings hast thou ordained strength,
                        because of thine enemies that thou mightest still the enemy,
                        and the avenger.<br/>
                        &nbsp; &nbsp; For I will consider thy heavens, even the works of thy fingers, the
                        moon and the stars, which thou hast ordained.<br/>
                        &nbsp; &nbsp; What is man, that thou art mindful of him, and the son of man, that
                        thou visitest him?<br/>
                        &nbsp; &nbsp; Thou madest him lower than the angels to crown him with glory and worship.<br/>
                    </b>
                    <br/>


                    <b>
                        <i>Antiphon</i>: Up, Lord and let not man have the upper hand.<br/>
                    </b>

                    <br/>
                    <div class="text-center">
                        <i><b>Psallite Domino</b></i> &nbsp; &nbsp; Psalm ix. 11-20.<br/>
                    </div>
                    <br/>

                    <b>
                        &nbsp; &nbsp; O praise the LORD which dwelleth in Sion;
                        show the people of his doings.<br/>
                        &nbsp; &nbsp; For when he maketh inquisition for blood,
                        he remembereth them,
                        and forgetteth not the complaint of the poor.<br/>
                        &nbsp; &nbsp; Have mercy upon me, O LORD; consider the trouble
                        which I suffer of them that hate me,
                        thou that liftest me up from the gates of death; <br/>
                        &nbsp; &nbsp; That I may show all thy praises within the gates of
                        the daughter of Sion:
                        I will rejoice in thy salvation.<br/>
                        &nbsp; &nbsp; The heathen are sunk down in the pit that they made;
                        in the same net which they hid privily is their foot taken.<br/>
                        &nbsp; &nbsp; The LORD is known to execute judgment;
                        the ungodly is trapped in the work of his own hands.<br/>
                        &nbsp; &nbsp; The wicked shall be turned to destruction,
                        and all the people that forget God.<br/>
                        &nbsp; &nbsp; For the poor shall not alway be forgotten;
                        the patient abiding of the meek shall not perish for ever.<br/>
                        &nbsp; &nbsp; Up, LORD, and let not man have the upper hand;
                        let the heathen be judged in thy sight.<br/>
                        &nbsp; &nbsp; Put them in fear, O LORD,
                        that the heathen may know themselves to be but men.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Up, Lord and let not man have the upper hand.<br/>
                    </b>

                    <b>
                        <i>V.</i> Blessing, and glory, and wisdom, and
                        thanksgiving, and honour, and power, and might
                        be unto our GOD for ever and ever.<br/>
                        <i>R.</i> Thanks be to GOD.<br/>
                    </b>
                    <br/>
                </blockquote>


                <div class="text-center">
                    <b>Hymn.</b> <i>Ecce jam noctis.</i><br/>
                </div>
                <blockquote>
                    <blockquote>
                        <b>
                            Paler have grown the shades of night,<br/>
                            and nearer draws the day;<br/>
                            Checkering the sky with streaks of light,<br/>
                            since we began to pray:<br/>
                            <br/>
                            To pray for mercy when we sin,<br/>
                            for cleansing and release;<br/>
                            For ghostly safety, and within<br/>
                            for everlasting peace.<br/>
                            <br/>
                            Grant this to us, O Father, Son,<br/>
                            and Spirit, God of grace;<br/>
                            To Whom all worship shall be done<br/>
                            in every time and place. Amen.<br/>
                        </b>
                        <br/>
                    </blockquote>
                </blockquote>
                <br/>

                <blockquote>
                    <b>
                        <i>V.</i> The LORD is King, and hath put on glorious apparel:<br/>
                        <i>R.</i> The LORD hath put on His apparel, and girded Himself with strength.<br/>
                        <br/>

                        <b>
                            O LORD, we give thanks unto thee who hast
                            kept us this night from all evils, both bodily and
                            spiritual ; and we beseech thee, for thy mercies'
                            sake, to awaken those who sleep in the grave of
                            sin. Give us grace to cast off the works of darkness,
                            and to walk as children of light; and preserve us
                            this day from all sin, and from all perils
                            and dangers, For Jesus Christ's sake. Amen.<br/>
                            <br/>

                            O HOLY LORD, who dwellest on high, and
                            beholdest the lowly, we bow before thee. Stretch
                            forth thy hand from thy holy dwelling-place,
                            and bless us all; and if we have offended in
                            anything voluntarily or involuntarily, do thou who
                            art the gracious GOD, and the lover of men,
                            pardon us, giving us the good things of this world
                            and of that which is to come; for thine it is to
                            have mercy and to save us: and to thee, Father,
                            Son, and Holy Ghost, be all glory for ever.
                            Amen.<br/>
                            <br/>

                            O LORD, we beseech thee, absolve thy people
                            from their offences; that through thy bountiful
                            goodness we may all be delivered from the bands
                            of those sins which, by our frailty, we have
                            committed. Grant this, O heavenly Father, for
                            Jesus Christ's sake, our blessed Lord and
                            Savior. Amen.<br/>
                            <br/>

                            O ETERNAL GOD and merciful Father, we
                            humbly beseech thee to bless thy Holy Catholic
                            Church spread upon the face of the whole earth.
                            Purge it, good LORD, from all unbelief, heresy,
                            schism, and factions; that one faith, one LORD,
                            one baptism may in all places be confessed with
                            one accord; and grant, good LORD, that we may
                            be, and continue, faithful, living, and working
                            members therein, under Christ our Lord, all
                            the days of our life, through the merits and by
                            the grace of the same Jesus Christ our only
                            Savior. Amen.<br/>
                            <br/>

                            O MERCIFUL GOD, bless the Church of this land
                            in which we live; make it, and all the members
                            of it, sound in faith, and holy in life, that they
                            may serve thee, and that thou mayest bless them;
                            through Jesus Christ our LORD. Amen.<br/>
                            <br/>

                            HEAR, O LORD JESUS CHRIST, the prayers of
                            thy servants, and have mercy upon us, who
                            livest and reignest with the Father and the
                            Holy Spirit, world without end. Amen<br/>
                        </b>
                        <br/>

                        <b>
                            <i>V.</i> Let us bless the LORD.<br/>
                            <i>R.</i> Thanks be to GOD.<br/>
                            <i>V.</i> May the souls of the faithful, through the
                            mercy of GOD, rest in peace.<br/>
                            <i>R.</i> Amen.<br/>
                        </b>
                        <br/>
                </blockquote>


                <blockquote>
                    <i>
                        After the repetition. of the Ant. at the end of the last Psalm is said
                        the appropriate V. and R., and then is said,<br/>
                    </i>
                    <br/>

                    <b>
                        Our Father, ....<br/> <i>R.</i>
                        <i>V.</i> And lead us not into temptation.<br/>
                        R. but deliver us from evil.<br/>


                        - Absolution<br/>
                        <i>V.</i> BREAK the bonds of our sins and set us free ; O Lord almighty and merciful.<br/>
                        <i>R.</i> Who livest and reignest for ever and ever.<br/>
                        Amen.<br/>

                        Benediction<br/>
                        <b>
                            <i>V.</i> May he who ever liveth and reigneth bestow upon us his gracious blessing.<br/>
                            <i>R.</i> May help divine be with us all, for ever abiding.<br/>
                            <i>V.</i> May the King of Angels give us fellowship with all the citizens of heaven.<br/>
                            <i>R.</i> Amen.<br/>
                        </b>
                        <br/>

                        Te Deum Laudamus.<br/>
                        <br/>
                        <b>
                            &nbsp; &nbsp; We praise thee, O God: we acknowledge Thee to be the Lord.<br/>
                            &nbsp; &nbsp; All the earth doth worship Thee, the Father everlasting.<br/>
                            &nbsp; &nbsp; To Thee all Angels cry aloud: the Heavens and all the powers therein.<br/>
                            &nbsp; &nbsp; To Thee Cherubim and Seraphim continually do cry,<br/>
                            &nbsp; &nbsp; Holy, Holy, Holy:<br/>
                            &nbsp; &nbsp; Lord God of Sabaoth;<br/>
                            &nbsp; &nbsp; Heaven and earth are full of the Majesty of Thy Glory.<br/>
                            &nbsp; &nbsp; The glorious company of the Apostles praise Thee.<br/>
                            &nbsp; &nbsp; The godly fellowship of the Prophets praise Thee.<br/>
                            &nbsp; &nbsp; The noble army of Martyrs praise Thee.<br/>
                            &nbsp; &nbsp; The holy Church throughout all the world doth acknowledge Thee;<br/>
                            &nbsp; &nbsp; The Father of an infinite Majesty;<br/>
                            &nbsp; &nbsp; Thine honourable, true, and only Son;<br/>
                            &nbsp; &nbsp; Also the Holy Ghost: the Comforter.<br/>
                            <br/>

                            &nbsp; &nbsp; Thou art the King of Glory, O Christ.<br/>
                            &nbsp; &nbsp; Thou art the everlasting Son of the Father.
                            &nbsp; &nbsp; When Thou tookest upon Thee to deliver man: Thou didst not abhor the Virgin's
                            womb.<br/>
                            &nbsp; &nbsp; When Thou hadst overcome the sharpness of death, Thou didst open the Kingdom
                            of Heaven to all believers.<br/>
                            &nbsp; &nbsp; Thou sittest at the right hand of God in the glory of the Father.<br/>
                            &nbsp; &nbsp; We believe that Thou shalt come to be our Judge.<br/>
                            &nbsp; &nbsp; We therefore pray Thee, help Thy servants whom Thou hast redeemed with Thy
                            precious blood.<br/>
                            &nbsp; &nbsp; Make them to be numbered with Thy Saints in glory everlasting.<br/>
                            <br/>

                            &nbsp; &nbsp; O Lord, save Thy people: and bless Thine heritage.<br/>
                            &nbsp; &nbsp; Govern them and lift them up for ever.<br/>
                            &nbsp; &nbsp; Day by day we magnify Thee; and we worship Thy Name, ever world without
                            end.<br/>
                            &nbsp; &nbsp; Vouchsafe, O Lord, to keep us this day without sin.<br/>
                            &nbsp; &nbsp; O Lord, have mercy upon us.<br/>
                            &nbsp; &nbsp; O Lord, let Thy mercy lighten upon us: as our trust is in Thee.<br/>
                            &nbsp; &nbsp; O Lord, in Thee have I trusted: let me never be confounded.<br/>
                        </b>
                        <br/>

                        <i>
                            When the Te Deum has been said, is said the Salutation, and
                            then 'Let us pray', followed by the Closing Versicles.<br/>
                        </i>
                        <br/>
                </blockquote>


                <div class="text-center">
                    <small>
                        <i><b>Here ends the Order for Matins</b></i>
                    </small>
                </div>
                <br/>
                <br/>

                <hr>
                <a id="lauds">&nbsp;</A>
                <div class="text-center">
                    <h3><b>Lauds</b></h3>
                </div>
                <br/>
                <blockquote>
                    <small>
                        <i>
                            (The source Breviaries used include a different set of Psalms,
                            Memorials, and Chapter for each day of the week at Lauds. For the sake
                            of simplicity, only the Sunday order for Lauds is included here.)
                        </i>
                    </small>
                </blockquote>

                <blockquote>

                    <blockquote>
                        <b>
                            <i>V. </i> The Lord is high above all heathen.<br/>
                            <i>R. </i> And His glory above the heathens.<br/>
                            <i>V. </i> O God, make speed to save us.<br/>
                            <i>R. </i> O Lord, make haste to help us.<br/>
                            <i>V. </i> Glory be to the Father, and to the Son, and to the Holy Ghost,<br/>
                            <i>R. </i> As it was in the beginning, is now, and ever shall be, world without end.
                            Amen.<br/>
                        </b>
                    </blockquote>
                    <br/>

                    <div class="text-center">
                        <b>
                            Alleluia.<br/>
                        </b>
                    </div>

                    <br/>
                    <i>
                        [From Septuagesima to Wednesday in Holy Week, inclusive, instead of Alleluia is said:<br/>
                    </i>
                    <b>Praise be to Thee, O Lord, King of eternal glory.</b><i>]</i><br/>
                    <br/>
                    <br/>
                    <b>
                        <i>Antiphon</i>: The Lord is King * and hath put on glorious apparel: he hath girded Himself
                        with strength,<br/>
                    </b>
                    <br/>
                    <div class="text-center">
                        <i><b>Dominus Regnavit.</b></i> &nbsp; &nbsp; Psalm xciii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; THE LORD is King, and hath put on glorious apparel; * the LORD
                        hath put on his apparel, and girded himself with strength.<br/>
                        &nbsp; &nbsp; He hath made the round world so sure, * that it cannot be
                        moved.<br/>
                        &nbsp; &nbsp; Ever since the world began, hath thy seat been prepared: *
                        thou art from everlasting.<br/>
                        &nbsp; &nbsp; The floods are risen, O LORD, the floods have lift up their
                        voice; * the floods lift up their waves.<br/>
                        &nbsp; &nbsp; The waves of the sea are mighty, and rage horribly; * but yet
                        the LORD, who dwelleth on high, is mightier.<br/>
                        &nbsp; &nbsp; Thy testimonies, O LORD, are very sure: * holiness becometh
                        thine house for ever.<br/>
                        <br/>
                        <i>Antiphon</i>: The Lord is King * and hath put on glorious apparel: he hath girded Himself
                        with strength,<br/>
                    </b>
                    <br/>
                    <br/>
                    <br/>
                    <i>
                        [Instead of Psalm xciii is said, between Septuagesima and Easter:<br/>
                    </i>
                    <br/>
                    <div class="text-center">
                        <i><b>Miserere mei, Deus.</b></i> &nbsp; &nbsp; Psalm li.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; HAVE mercy upon me, O God, after thy great goodness; *
                        according to the multitude of thy mercies do away mine offences.<br/>
                        &nbsp; &nbsp; Wash me throughly from my wickedness, * and cleanse me
                        from my sin.<br/>
                        &nbsp; &nbsp; For I acknowledge my faults, * and my sin is ever before me.<br/>
                        &nbsp; &nbsp; Against thee only have I sinned, and done this evil in thy sight; * that thou
                        mightest be justified in thy saying, and clear when thou shalt judge.<br/>
                        &nbsp; &nbsp; Behold, I was shapen in wickedness, * and in sin hath my
                        mother conceived me.<br/>
                        &nbsp; &nbsp; But lo, thou requirest truth in the inward parts, * and shalt
                        make me to understand wisdom secretly.<br/>
                        &nbsp; &nbsp; Thou shalt purge me with hyssop, and I shall be clean; * thou
                        shalt wash me, and I shall be whiter than snow.<br/>
                        &nbsp; &nbsp; Thou shalt make me hear of joy and gladness, * that the bones
                        which thou hast broken may rejoice.<br/>
                        &nbsp; &nbsp; Turn thy face from my sins, * and put out all my misdeeds.<br/>
                        &nbsp; &nbsp; Make me a clean heart, O God, * and renew a right spirit
                        within me.<br/>
                        &nbsp; &nbsp; Cast me not away from thy presence, * and take not thy holy
                        Spirit from me.<br/>
                        &nbsp; &nbsp; O give me the comfort of thy help again, * and stablish me
                        with thy free Spirit.<br/>
                        &nbsp; &nbsp; Then shall I teach thy ways unto the wicked, * and sinners
                        shall be converted unto thee.<br/>
                        &nbsp; &nbsp; Deliver me from blood-guiltiness, O God, thou that art the
                        God of my health; * and my tongue shall sing of thy righteousness.<br/>
                        &nbsp; &nbsp; Thou shalt open my lips, O Lord, * and my mouth shall show
                        thy praise.<br/>
                        &nbsp; &nbsp; For thou desirest no sacrifice, else would I give it thee; *
                        but thou delightest not in burnt-offerings.<br/>
                        &nbsp; &nbsp; The sacrifice of God is a troubled spirit: * a broken and
                        contrite heart, O God, shalt thou not despise.<br/>
                        &nbsp; &nbsp; O be favourable and gracious unto Sion; * build thou the
                        walls of Jerusalem.<br/>
                        &nbsp; &nbsp; Then shalt thou be pleased with the sacrifice of righteousness,
                        with the burnt-offerings and oblations; * then shall they offer young bullocks
                        upon thine altar.<br/>
                        <br/>
                        Glory be, etc.</b><i>]</i><br/>
                    <br/>
                    <br/>
                    <br/>
                    <b>
                        <i>Antiphon</i>: Let us all know * that the Lord He is God: in Him let us be joyful, and exalt
                        and praise His Name for ever.<br/>
                    </b>
                    <br/>
                    <div class="text-center">
                        <i><b>Jubilate Deo.</b></i> &nbsp; &nbsp; Psalm c.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O BE joyful in the LORD, all ye lands: * serve the LORD with
                        gladness, and come before his presence with a song.<br/>
                        &nbsp; &nbsp; Be ye sure that the LORD he is God; it is he that hath made
                        us, and not we ourselves; * we are his people, and the sheep of his pasture.<br/>
                        &nbsp; &nbsp; O go your way into his gates with thanksgiving, and into his
                        courts with praise; * be thankful unto him, and speak good of his Name.<br/>
                        &nbsp; &nbsp; For the LORD is gracious, his mercy is everlasting; * and his
                        truth endureth from generation to generation.<br/>
                        <br/>
                        <i>Antiphon</i>: Let us all know * that the Lord He is God: in Him let us be joyful, and exalt
                        and praise His Name for ever.<br/>
                    </b>
                    <br/>
                    <br/>
                    <i>
                        [Instead of Psalm c. is said, between Septuagesima and Easter:<br/>
                    </i>
                    <br/>
                    <div class="text-center">
                        <i><b>Confitemini Domino.</b></i> &nbsp; &nbsp; Psalm cxviii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O GIVE thanks unto the LORD, for he is gracious; * because his
                        mercy endureth for ever.<br/>
                        &nbsp; &nbsp; Let Israel now confess that he is gracious, * and that his
                        mercy endureth for ever.<br/>
                        &nbsp; &nbsp; Let the house of Aaron now confess, * that his mercy endureth
                        for ever.<br/>
                        &nbsp; &nbsp; Yea, let them now that fear the LORD confess, * that his mercy
                        endureth for ever.<br/>
                        &nbsp; &nbsp; I called upon the LORD in trouble; * and the LORD heard me at
                        large.<br/>
                        &nbsp; &nbsp; The LORD is on my side; * I will not fear what man doeth unto
                        me.<br/>
                        &nbsp; &nbsp; The LORD taketh my part with them that help me; * therefore
                        shall I see my desire upon mine enemies.<br/>
                        &nbsp; &nbsp; It is better to trust in the LORD, * than to put any confidence
                        in man.<br/>
                        &nbsp; &nbsp; It is better to trust in the LORD, * than to put any confidence
                        in princes.<br/>
                        &nbsp; &nbsp; All nations compassed me round about; * but in the Name of the
                        LORD will I destroy them.<br/>
                        &nbsp; &nbsp; They kept me in on every side, they kept me in, I say, on every
                        side; * but in the Name of the LORD will I destroy them.<br/>
                        &nbsp; &nbsp; They came about me like bees, and are extinct even as the fire
                        among the thorns; * for in the Name of the LORD I will destroy them.<br/>
                        &nbsp; &nbsp; Thou hast thrust sore at me, that I might fall; * but the LORD
                        was my help.<br/>
                        &nbsp; &nbsp; The LORD is my strength, and my song; * and is become my salvation.<br/>
                        &nbsp; &nbsp; The voice of joy and health is in the dwellings of the
                        righteous; * the right hand of the LORD bringeth mighty things to pass.<br/>
                        &nbsp; &nbsp; The right hand of the LORD hath the pre-eminence; * the right
                        hand of the LORD bringeth mighty things to pass.<br/>
                        &nbsp; &nbsp; I shall not die, but live, * and declare the works of the LORD.<br/>
                        &nbsp; &nbsp; The LORD hath chastened and corrected me; * but he hath not given
                        me over unto death.<br/>
                        &nbsp; &nbsp; Open me the gates of righteousness, * that I may go into them,
                        and give thanks unto the LORD.<br/>
                        &nbsp; &nbsp; This is the gate of the LORD, * the righteous shall enter into
                        it.<br/>
                        &nbsp; &nbsp; I will thank thee; for thou hast heard me, * and art become my
                        salvation.<br/>
                        &nbsp; &nbsp; The same stone which the builders refused, * is become the
                        head-stone in the corner.<br/>
                        &nbsp; &nbsp; This is the LORD'S doing, * and it is marvellous in our eyes.<br/>
                        &nbsp; &nbsp; This is the day which the LORD hath made; * we will rejoice
                        and be glad in it.<br/>
                        &nbsp; &nbsp; Help me now, O LORD: * O LORD, send us now prosperity.<br/>
                        &nbsp; &nbsp; Blessed be he that cometh in the Name of the LORD: * we have
                        wished you good luck, we that are of the house of the LORD.<br/>
                        &nbsp; &nbsp; God is the LORD, who hath showed us light: * bind the sacrifice
                        with cords, yea, even unto the horns of the altar.<br/>
                        &nbsp; &nbsp; Thou art my God, and I will thank thee; * thou art my God, and
                        I will praise thee.<br/>
                        &nbsp; &nbsp; O give thanks unto the LORD; for he is gracious, * and his
                        mercy endureth for ever.<br/>
                        <br/>
                        <br/>
                        <br/>
                        <i>Antiphon</i>: As long as I live * will I magnify Thee : that I may behold Thy power and
                        glory.<br/>
                    </b>
                    <br/>
                    <div class="text-center">
                        <i><b>Deus, Deus Meus.</b></i> &nbsp; &nbsp; Psalm lxiii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O GOD, thou art my God; * early will I seek thee.<br/>
                        &nbsp; &nbsp; My soul thirsteth for thee, my flesh also longeth after thee,
                        * in a barren and dry land where no water is.<br/>
                        &nbsp; &nbsp; Thus have I looked for thee in the sanctuary, * that I might
                        behold thy power and glory.<br/>
                        &nbsp; &nbsp; For thy loving-kindness is better than the life itself: * my
                        lips shall praise thee.<br/>
                        &nbsp; &nbsp; As long as I live will I magnify thee in this manner, * and
                        lift up my hands in thy Name.<br/>
                        &nbsp; &nbsp; My soul shall be satisfied, even as it were with marrow and
                        fatness, * when my mouth praiseth thee with joyful lips.<br/>
                        &nbsp; &nbsp; Have I not remembered thee in my bed, * and thought upon thee
                        when I was waking?<br/>
                        &nbsp; &nbsp; Because thou hast been my helper; * therefore under the shadow of
                        thy wings will I rejoice.<br/>
                        &nbsp; &nbsp; My soul hangeth upon thee; * thy right hand hath upholden me.<br/>
                        &nbsp; &nbsp; These also that seek the hurt of my soul, * they shall go under
                        the earth.<br/>
                        &nbsp; &nbsp; Let them fall upon the edge of the sword, * that they may be a
                        portion for foxes.<br/>
                        &nbsp; &nbsp; But the King shall rejoice in God; all they also that swear by
                        him shall be commended; * for the mouth of them that speak lies shall be stopped.<br/>
                        <br/>
                        <i>Antiphon</i>: As long as I live * will I magnify Thee : that I may behold Thy power and
                        glory.<br/>
                    </b>
                    <br/>
                    <i>Here is not said</i><b> Glory be, etc.</b><i>]</i><br/>

                    <br/>
                    <br/>
                    <div class="text-center">
                        <i><b>Deus misereatur.</b></i> &nbsp; &nbsp; Psalm lxvii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; God be merciful unto us, and bless us, * and show us the light
                        of his countenance, and be merciful unto us;<br/>
                        &nbsp; &nbsp; That thy way may be known upon earth, * thy saving health
                        among all nations.<br/>
                        &nbsp; &nbsp; Let the peoples praise thee, O God; * yea, let all the peoples
                        praise thee.<br/>
                        &nbsp; &nbsp; O let the nations rejoice and be glad; * for thou shalt judge
                        the folk righteously, and govern the nations upon earth.<br/>
                        &nbsp; &nbsp; Let the peoples praise thee, O God; * yea, let all the peoples
                        praise thee.<br/>
                        &nbsp; &nbsp; Then shall the earth bring forth her increase; * and God,
                        even our own God, shall give us his blessing.<br/>
                        &nbsp; &nbsp; God shall bless us; * and all the ends of the world shall fear
                        him.<br/>
                        <br/>
                        <i>Antiphon</i>: As long as I live * will I magnify Thee : that I may behold Thy power and
                        glory.<br/>
                    </b>
                    <br/>
                    <br/>
                    <br/>
                    <b>
                        <i>Antiphon</i>: Let every creature * which is in heaven and on the earth bless the Lord: praise
                        Him and magnify Him for ever.<br/>
                    </b>
                    <br/>

                    <br/>
                    <div class="text-center">
                        <b>Song of the Three Children.</b> &nbsp; &nbsp; <i> Benedicite.</i><br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O ALL ye Works of the Lord, bless ye the Lord: * praise Him and magnify
                        Him for ever.<br/>
                        &nbsp; &nbsp; O ye Angels of the Lord, bless ye the Lord: * O ye heavens, bless
                        ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Waters that be above the Firmament, bless ye the Lord: * O
                        all ye Powers of the Lord, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Sun and Moon, bless ye the Lord: * O ye Stars of Heaven,
                        bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Showers and Dew, bless ye the Lord: * O ye Winds of God,
                        bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Fire and Heat, bless ye the Lord: * O ye Winter and Summer,
                        bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Dews and Frosts, bless ye the Lord: * O ye Frost and Cold,
                        bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Ice and Snow, bless ye the Lord: * O ye Nights and Days,
                        bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Light and Darkness, bless ye the Lord: * O ye Lightnings
                        and Clouds, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O let the earth bless the Lord: * yea, let it praise Him, and
                        magnify Him for ever.<br/>
                        &nbsp; &nbsp; O ye Mountains and Hills, bless ye the Lord: * O all ye Green
                        Things upon the earth, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Wells, bless ye the Lord: * O ye Seas and Floods, bless
                        ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Whales, and all that move in the waters, bless ye the
                        Lord : * O all ye Fowls of the air, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O all ye Beasts and Cattle, bless ye the Lord: * O ye Children
                        of men, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O let Israel bless the Lord: * praise Him, and magnify Him for ever.<br/>
                        &nbsp; &nbsp; O ye Priests of the Lord, bless ye the Lord: * O ye Servants
                        of the Lord, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O ye Spirits and Souls of the righteous, bless ye thee Lord: * O
                        ye holy and humble Men of heart, bless ye the Lord.<br/>
                        &nbsp; &nbsp; O Ananias, Azarias, and Missel, bless ye the Lord: * praise Him
                        and magnify Him for ever.<br/>
                        <br/>
                        &nbsp; &nbsp; &nbsp; </b><i>Instead of</i><b> Glory be, etc.:<br/>
                        Let us bless the Father, the Son, and the Holy Ghost: let us praise and
                        exalt Him above all for ever.<br/>
                        Blessed art Thou, O Lord, in the firmament of heaven : and above all to be
                        praised and glorified for ever.<br/>
                        <br/>
                        <i>Antiphon</i>: Let every creature which is in heaven, and on the earth, bless the Lord: praise
                        Him and magnify Him for ever.<br/>
                    </b>
                    <br/>
                    <br/>
                    <b>
                        <i>Antiphon</i>: Let every thing that hath breath * praise the Lord: for He spake the word, and
                        they were made; He commanded, and they were created.<br/>
                    </b>
                    <br/>

                    <br/>
                    <div class="text-center">
                        <i><b>Laudate Dominum.</b></i> &nbsp; &nbsp; Psalm cxlviii.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O PRAISE the LORD from the heavens: * praise him in the heights.<br/>
                        &nbsp; &nbsp; Praise him, all ye angels of his: * praise him, all his host.<br/>
                        &nbsp; &nbsp; Praise him, sun and moon: * praise him, all ye stars and light.<br/>
                        &nbsp; &nbsp; Praise him, all ye heavens, * and ye waters that are above the heavens.<br/>
                        &nbsp; &nbsp; Let them praise the Name of the LORD: * for he spake the word, and
                        they were made; he commanded, and they were created.<br/>
                        &nbsp; &nbsp; He hath made them fast for ever and ever: * he hath given them
                        a law which shall not be broken.<br/>
                        &nbsp; &nbsp; Praise the LORD from the earth, * ye dragons and all deeps;<br/>
                        &nbsp; &nbsp; Fire and hail, snow and vapours, * wind and storm, fulfilling
                        his word;<br/>
                        &nbsp; &nbsp; Mountains and all hills; * fruitful trees and all cedars;<br/>
                        &nbsp; &nbsp; Beasts and all cattle; * creeping things and flying fowls;<br/>
                        &nbsp; &nbsp; Kings of the earth, and all peoples; * princes, and all judges
                        of the world;<br/>
                        &nbsp; &nbsp; Young men and maidens, old men and children, praise the Name of
                        the LORD: * for his Name only is excellent, and his praise above heaven and earth.<br/>
                        &nbsp; &nbsp; He shall exalt the horn of his people: all his saints shall
                        praise him; * even the children of Israel, even the people that serveth him.<br/>
                    </b>
                    <br/>
                    <i>Here is not said</i><b> Glory be, etc.</b><br/>
                    <br/>
                    <br/>
                    <div class="text-center">
                        <i><b>Cantate Domino.</b></i> &nbsp; &nbsp; Psalm cxlix.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O SING unto the LORD a new song; * let the congregation of saints
                        praise him.<br/>
                        &nbsp; &nbsp; Let Israel rejoice in him that made him, * and let the children
                        of Sion be joyful in their King.<br/>
                        &nbsp; &nbsp; Let them praise his Name in the dance: * let them sing praises
                        unto him with tabret and harp.<br/>
                        &nbsp; &nbsp; For the LORD hath pleasure in his people, * and helpeth the
                        meek-hearted.<br/>
                        &nbsp; &nbsp; Let the saints be joyful with glory; * let them rejoice in their
                        beds.<br/>
                        &nbsp; &nbsp; Let the praises of God be in their mouth; * and a two-edged sword
                        in their hands;<br/>
                        &nbsp; &nbsp; To be avenged of the nations, * and to rebuke the peoples;<br/>
                        &nbsp; &nbsp; To bind their kings in chains, * and their nobles with links
                        of iron;<br/>
                        &nbsp; &nbsp; To execute judgment upon them; as it is written, * Such honour
                        have all his saints.<br/>
                    </b>
                    <br/>
                    <i>Here is not said</i><b> Glory be, etc.</b><br/>
                    <br/>
                    <br/>
                    <div class="text-center">
                        <i><b>Laudate Dominum.</b></i> &nbsp; &nbsp; Psalm cl.<br/>
                    </div>
                    <br/>
                    <b>
                        &nbsp; &nbsp; O PRAISE God in his sanctuary: * praise him in the firmament
                        of his power.<br/>
                        &nbsp; &nbsp; Praise him in his noble acts: * praise him according to his
                        excellent greatness.<br/>
                        &nbsp; &nbsp; Praise him in the sound of the trumpet: * praise him upon the
                        lute and harp.<br/>
                        &nbsp; &nbsp; Praise him in the timbrels and dances: * praise him upon the
                        strings and pipe.<br/>
                        &nbsp; &nbsp; Praise him upon the well-tuned cymbals: * praise him upon the
                        loud cymbals.<br/>
                        &nbsp; &nbsp; Let every thing that hath breath * praise the LORD.<br/>
                        <br/>
                        <i>Antiphon</i>: Let every thing that hath breath praise the Lord: for He spake the word, and
                        they were made; He commanded, and they were created.<br/>
                    </b>
                    <br/>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>The Chapter.</b> &nbsp; &nbsp; <i>Revelation vii.</i><br/>
                    </div>

                    <br/>
                    <b>
                        BLESSING, and glory, and wisdom, and thanksgiving, and honour, and power,
                        and might, be unto our God for ever and ever. Amen.<br/>
                        <i>R. </i> Thanks be to God.<br/>
                    </b>
                    <br/>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>Hymn.</b> <i>Ecce jam noctis.</i><br/>
                    </div>
                    <br/>
                    <blockquote>
                        <blockquote>
                            <b>
                                LO! now the nesting shades of night are ending,<br/>
                                Flickers the golden gleam of dawning day, <br/>
                                Let us before the Lord of all, low bending,<br/>
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Suppliants pray;<br/>
                                That He would of the stain of guilt relieve us,<br/>
                                Grant our souls health, of His most blessed love,<br/>
                                And of His pitying grace and mercy give us<br/>
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Heaven above.<br/>
                                Be this by Thy thrice holy Godhead granted,<br/>
                                Father, and Son, and Spirit ever blest,<br/>
                                whose glory by the firmament is chanted,<br/>
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; By all confest. Amen.<br/>
                            </b>
                        </blockquote>

                    </blockquote>
                    <br/>
                    <b>
                        <i>V. </i> The Lord is King.<br/>
                        <i>R. </i> He hath put on glorious apparel. Alleluia.<br/>
                    </b>
                    <br/>
                    <br/>
                    <div class="text-center">
                        <b>Song of Zacharias.</b> &nbsp; &nbsp; <i>Benedictus.</i> &nbsp; &nbsp; St. Luke i.<br/>
                    </div>
                    <br/>
                    <b>
                        BLESSED be the Lord God of Israel: for He hath visited and redeemed His people;<br/>
                        And hath raised up a mighty salvation for us: in the house of His servant David;<br/>
                        As He spake by the mouth of His holy prophets: which have been since the world began<br/>
                        That we should be saved from our enemies: and from the hands of all that hate us;<br/>
                        To perform the mercy promised to our forefathers: and to remember His holy covenant.<br/>
                        To perform the oath which He sware to our forefather Abraham: that He would give us;<br/>
                        That we being delivered out of the hand of our enemies: might serve Him without fear;<br/>
                        In holiness and righteousness before him: all the days of our life.<br/>
                        And thou, child, shalt be called the prophet of the Highest: for thou shalt go before the face
                        of the Lord to prepare His ways;<br/>
                        To give knowledge of salvation unto His people: for the remission of their sins,<br/>
                        Through the tender mercy of our God: whereby the day-spring from on high hath visited us;<br/>
                        To give light to them that sit in darkness, and in the shadow of death: and to guide our feet
                        into the way of peace.<br/>
                        <br/>
                        Glory be, etc.<br/>
                    </b>
                    <br/>
                    <blockquote>
                        <b>
                            <i>V. </i> The Lord be with you.<br/>
                            <i>R. </i> And with thy spirit.<br/>
                            <br/>
                            Let us pray.<br/>
                        </b>
                    </blockquote>
                    <br/>
                    <div class="text-center">
                        <b>The Collect</b> <i>(as in the Proper Season)</i><br/>
                    </div>
                    <br/>
                    <blockquote>
                        <b>
                            <i>V. </i> The Lord be with you.<br/>
                            <i>R. </i> And with thy spirit.<br/>
                            <i>V. </i> Bless we the Lord.<br/>
                            <i>R. </i> Thanks be to God.<br/>
                        </b>
                    </blockquote>
                    <br/>
                    <br/>
                    <br/>
                    <div class="text-center">
                        <b>
                            MEMORIALS<br/>
                        </b>
                        <i>used as appropriate within the Seasons</i><br/>
                    </div>

                    <br/>
                    <div class="text-center">
                        <b>
                            Memorial of the Holy Cross<br/>
                        </b>
                    </div>
                    <br/>
                    <b>
                        <i>Antiphon</i>: It behoveth us to glory: in the Cross of our Lord Jesus Christ.<br/>
                        <i>V. </i> All the world shall worship Thee, and sing of Thee.<br/>
                        <i>R. </i> And praise Thy Name.<br/>
                        <br/>
                        Let us pray.<br/>
                        <br/>
                        O GOD, Who didst ascend Thy holy Cross to enlighten the darkness of the world;
                        may it please Thee to enlighten our hearts and bodies, Thou Saviour of the world,
                        Who livest and reignest with the Father and the Holy Ghost, ever one God, world
                        without end. Amen.<br/>
                    </b>
                    <br/>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>
                            Memorial of St. Mary<br/>
                        </b>
                    </div>
                    <br/>
                    <b>
                        <i>Antiphon</i>: Lo, Mary hath brought forth the Saviour, of Whom when John saw
                        Him, he said: Behold the Lamb of God, which taketh away the sins of the
                        world.<br/>
                        <i>V. </i> After child-bearing thou remainedst a Virgin.<br/>
                        <i>R. </i> O Mother of God.<br/>
                        <br/>
                        Let us pray.<br/>
                        <br/>
                        O GOD, Who through the fruitful virginity of the Blessed Virgin
                        Mary, hast bestowed the rewards of eternal salvation on the human race;
                        grant, we beseech Thee, that she may intercede for us, through whom we
                        have received the Author of Life, Thy Son Jesus Christ our Lord. Amen.<br/>
                    </b>
                    <br/>
                    <blockquote>
                        <b>
                            <i>V. </i> The Lord be with you.<br/>
                            <i>R. </i> And with thy spirit.<br/>
                            <i>V. </i> Bless we the Lord.<br/>
                            <i>R. </i> Thanks be to God.<br/>
                        </b>
                    </blockquote>
                    <br/>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>
                            For the Peace of the Church<br/>
                        </b>
                    </div>
                    <br/>
                    <div class="text-center">
                        <i><b>Ad te levavi oculos meos.</b></i> &nbsp; &nbsp; Psalm cxxiii.<br/>
                    </div>

                    <br/>
                    <b>
                        UNTO thee lift I up mine eyes, * O thou that dwellest in the heavens.<br/>
                        Behold, even as the eyes of servants look unto the hand of their masters,
                        and as the eyes of a maiden unto the hand of her mistress, * even so our
                        eyes wait upon the LORD our God, until he have mercy upon us.<br/>
                        Have mercy upon us, O LORD, have mercy upon us; * for we are utterly
                        despised.<br/>
                        Our soul is filled with the scornful reproof of the wealthy, * and with
                        the despitefulness of the proud.
                        <br/>
                        Glory be, etc.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <b>
                            Lord, have mercy.<br/>
                            Christ, have Mercy.<br/>
                            Lord, have Mercy.<br/>
                        </b>
                    </div>

                    <br/>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom come.
                        Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us.<br/>
                    </b>
                    <br/>

                    <br/>
                    <blockquote>
                        <b>
                            <i>V. </i> And lead us not into temptation.<br/>
                            <i>R. </i> But deliver us from evil.<br/>
                            <i>V. </i> O Lord, arise, help us.<br/>
                            <i>R. </i> And deliver us for Thy Name's sake.<br/>
                            <i>V. </i> Turn us again, O Lord God of Hosts.<br/>
                            <i>R. </i> Show the light of thy countenance, and we shall be whole.<br/>
                            <i>V. </i> Hear my prayer, O Lord.<br/>
                            <i>R. </i> And let my crying come unto thee.<br/>
                            <i>V. </i> The Lord be with you.<br/>
                            <i>R. </i> And with thy spirit.<br/>
                            <br/>
                            Let us pray.
                        </b>
                    </blockquote>
                    <br/>
                    <b>
                        O LORD, we beseech Thee, mercifully to hear the prayers of Thy
                        Church, and grant that we, being delivered from all adversities, may
                        serve Thee with a quiet mind; and grant us Thy peace all the days
                        of our life; through Jesus Christ our Lord, who liveth and
                        reigneth with Thee and the Holy Ghost, ever One God, world
                        without end. Amen.<br/>
                    </b>
                </blockquote>

                <div class="text-center">
                    <small>
                        <i><b>Here ends the Order for Lauds</b></i>
                    </small>
                </div>
                <br/>
                <br/>

                <hr>

                <blockquote>

                    <a id="prime">&nbsp;</A>
                    <div class="text-center">
                        <h3><b>Prime</b></h3>
                    </div>

                    <blockquote>
                        <b>
                            <i>V.</i> In the Name of the Father, and of the Son, and of the
                            Holy Ghost.<br/>
                            <i>R.</i> Amen.<br/>
                        </b>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> O Lord, open thou our lips.<br/>
                            <i>R.</i> And our mouth shall show forth thy praise.<br/>
                            <i>V.</i> O God, make speed to help us.<br/>
                            <i>R.</i> O Lord, make haste to help us.<br/>
                            <br/>

                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                            Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <br/>
                    <div class="text-center"><i>(Here may be sung a Hymn)</i></div>
                    <br/>
                    <div class="text-center"><A HREF="office/prim">View Music &amp; Lyrics for the Hymn &nbsp;&nbsp;<i class="fa-solid fa-music"></i></A>
                    </div>
                    <a id="primehym">&nbsp;</A>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <h3>
                            Hymn.<br/>
                        </h3>
                    </div>

                    <br/>
                    <blockquote>
                        <blockquote>
                            <b>
                                Now that the daylight fills the sky,<br/>
                                we lift our hearts to God on high,<br/>
                                That he in all we do or say,<br/>
                                Would keep us safe from harm today.<br/>
                                <br/>
                                Would guard our hearts and tongues from strife;<br/>
                                From anger's din would hide our life;<br/>
                                From all ill sights would turn our eyes;<br/>
                                Would close our ears from vanities.<br/>
                                <br/>
                                Would keep our inmost conscience pure;<br/>
                                Our souls from folly would secure;<br/>
                                Would bid us check the pride of sense<br/>
                                With due and holy abstinence.<br/>
                                <br/>
                                So we, when this new day is gone,<br/>
                                And night in turn is drawing on,<br/>
                                With conscience by the world unstained<br/>
                                Shall praise his Name for vict'ry gained.<br/>
                                <br/>
                                All laud to God the Father be;<br/>
                                All praise Eternal Son to thee;<br/>
                                All glory as is ever meet,<br/>
                                To God the Holy Paraclete.<br/>
                            </b>
                            <br/>
                        </blockquote>
                    </blockquote>
                    <br/>

                    <b>
                        <i>Antiphon</i>: I laid me down and slept.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <i><b>Deus, in nomine.</b></i> &nbsp; &nbsp; Psalm liv.<br/>
                    </div>
                    <br/>
                    <br/>

                    <b>
                        &nbsp; &nbsp; SAVE me, O God, for thy Name's sake, * and avenge me in thy strength.<br/>
                        &nbsp; &nbsp; Hear my prayer, O God, * and hearken unto the words of my mouth.<br/>
                        &nbsp; &nbsp; For strangers are risen up against me; * and tyrants, which have not
                        God before their eyes, seek after my soul.<br/>
                        &nbsp; &nbsp; Behold, God is my helper; * the Lord is with them that uphold my soul.<br/>
                        &nbsp; &nbsp; He shall reward evil unto mine enemies: * destroy thou them in thy truth.<br/>
                        &nbsp; &nbsp; An offering of a free heart will I give thee, and praise thy Name, O
                        LORD; * because it is so comfortable.<br/>
                        &nbsp; &nbsp; For he hath delivered me out of all my trouble; * and mine eye hath
                        seen his desire upon mine enemies.<br/>
                    </b>
                    <br/>


                    <br/>
                    <div class="text-center"><i><b>Beati immaculati.</b></i> &nbsp; &nbsp; Psalm cxix: 1-32.
                    </div>
                    <br/>
                    <br/>

                    <b>
                        &nbsp; &nbsp; BLESSED are those that are undefiled in the way, * and walk in the law
                        of the LORD.<br/>
                        &nbsp; &nbsp; Blessed are they that keep his testimonies, * and seek him with their
                        whole heart;<br/>
                        &nbsp; &nbsp; Even they who do no wickedness, * and walk in his ways.<br/>
                        &nbsp; &nbsp; Thou hast charged * that we shall diligently keep thy commandments.<br/>
                        &nbsp; &nbsp; O that my ways were made so direct, * that I might keep thy statutes!<br/>
                        &nbsp; &nbsp; So shall I not be confounded, * while I have respect unto all thy
                        commandments.<br/>
                        &nbsp; &nbsp; I will thank thee with an unfeigned heart, * when I shall have learned
                        the judgments of thy righteousness.<br/>
                        &nbsp; &nbsp; I will keep thy statutes; * O forsake me not utterly.<br/>
                        &nbsp; &nbsp; Wherewithal shall a young man cleanse his way? * even by ruling himself
                        after thy word.<br/>
                        &nbsp; &nbsp; With my whole heart have I sought thee; * O let me not go wrong out
                        of thy commandments.<br/>
                        &nbsp; &nbsp; Thy word have I hid within my heart, * that I should not sin against
                        thee.<br/>
                        &nbsp; &nbsp; Blessed art Thou, O LORD; * O teach me thy statutes.<br/>
                        &nbsp; &nbsp; With my lips have I been telling * of all the judgments of thy mouth.<br/>
                        &nbsp; &nbsp; I have had as great delight in the way of thy testimonies, * as in
                        all manner of riches.<br/>
                        &nbsp; &nbsp; I will talk of thy commandments, * and have respect unto thy ways.<br/>
                        &nbsp; &nbsp; My delight shall be in thy statutes, * and I will not forget thy word.<br/>
                        &nbsp; &nbsp; O do well unto thy servant; * that I may live, and keep thy word.<br/>
                        &nbsp; &nbsp; Open thou mine eyes; * that I may see the wondrous things of thy law.<br/>
                        &nbsp; &nbsp; I am a stranger upon earth; * O hide not thy commandments from me.<br/>
                        &nbsp; &nbsp; My soul breaketh out for the very fervent desire * that it hath alway
                        unto thy judgments.<br/>
                        &nbsp; &nbsp; Thou hast rebuked the proud; * and cursed are they that do err from
                        thy commandments.<br/>
                        &nbsp; &nbsp; O turn from me shame and rebuke; * for I have kept thy testimonies.<br/>
                        &nbsp; &nbsp; Princes also did sit and speak against me; * but thy servant is occupied
                        in thy statutes.<br/>
                        &nbsp; &nbsp; For thy testimonies are my delight, * and my counsellors.<br/>
                        &nbsp; &nbsp; My soul cleaveth to the dust; * O quicken thou me, according to thy
                        word.<br/>
                        &nbsp; &nbsp; I have acknowledged my ways, and thou heardest me: * O teach me thy
                        statutes.<br/>
                        &nbsp; &nbsp; Make me to understand the way of thy commandments; * and so shall I
                        talk of thy wondrous works.<br/>
                        &nbsp; &nbsp; My soul melteth away for very heaviness; * comfort thou me according
                        unto thy word.<br/>
                        &nbsp; &nbsp; Take from me the way of lying, * and cause thou me to make much of thy
                        law.<br/>
                        &nbsp; &nbsp; I have chosen the way of truth, * and thy judgments have I laid before
                        me.<br/>
                        &nbsp; &nbsp; I have stuck unto thy testimonies; * O LORD, confound me not.<br/>
                        &nbsp; &nbsp; I will run the way of thy commandments, * when thou hast set my heart
                        at liberty.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: I laid me down and slept, and rose up again, for the Lord
                        sustained me.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>The Chapter.</b> &nbsp; &nbsp; <i>I John 1:7</i><br/>
                    </div>

                    <b>
                        If we walk in the light, as He is in the light, we have fellowship one
                        with another, and the blood of Jesus Christ his Son cleanseth us from all
                        sin.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> But Thou, O Lord, have mercy upon us.<br/>
                            <i>R.</i> Thanks be to God.<br/>
                            <i>V.</i> O Christ, son of the living God.<br/>
                            <i>R.</i> Have mercy upon us.<br/>
                            <i>V.</i> Thou who sittest at the right hand of the Father.<br/>
                            <i>R.</i> Have mercy upon us.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                        Ghost;<br/>
                        <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                        without end. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> O Christ, Son of the living God, have mercy upon us.<br/>
                            <i>R.</i> O Christ, arise, help us.<br/>
                            <i>V.</i> And deliver us, for thy name's sake.<br/>
                            <i>R.</i> The Lord be with you.<br/>
                            <i>V.</i> And with thy spirit.<br/>
                            <br/>

                            Let us pray.<br/>
                            <br/>

                            <i>V.</i> Lord, have mercy upon us.<br/>
                            <i>R.</i> Christ, have mercy upon us.<br/>
                            <i>V.</i> Lord, have mercy upon us.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>


                    <blockquote>
                        <b>
                            <i>V.</i> Unto thee have I cried, O Lord.<br/>
                            <i>R.</i> And early shall my prayer come before Thee.<br/>
                            <i>V.</i> O let my mouth be filled with Thy praise.<br/>
                            <i>R.</i> That I may sing of Thy glory and honour all the day long.<br/>
                            <i>V.</i> Lord, turn Thy face from my sins.<br/>
                            <i>R.</i> And put out all my misdeeds.<br/>
                            <br/>

                            <i>V.</i> Make me a clean heart, O God.<br/>
                            <i>R.</i> And renew a right spirit within me.<br/>
                            <i>V.</i> Cast me not away from Thy presence.<br/>
                            <i>R.</i> And take not Thy Holy Spirit from me.<br/>
                            <i>V.</i> O give me the comfort of Thy help again.<br/>
                            <i>R.</i> And stablish me with Thy free Spirit.<br/>
                            <i>V.</i> Then shall I teach Thy ways unto the wicked.<br/>
                            <i>R.</i> And sinners shall be converted unto Thee.<br/>
                            <br/>
                            <i>V.</i> Our help is in the Name of the Lord.<br/>
                            <i>R.</i> Who hath made heaven and earth.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        I confess to God the Father Almighty, to His only-begotten Son Jesus
                        Christ our Lord, and to God the Holy Ghost, and before the whole company
                        of heaven, that I have sinned exceedingly, in thought, word, and deed,
                        through my fault, through my own fault, through my own most grievous fault.
                        Wherefore I beseech God the Father Almighty, His only-begotten Son Jesus
                        Christ our Lord, and God the Holy Ghost, to have mercy upon me, and to
                        bring me to everlasting life.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> Wilt Thou not turn again and quicken us, O Lord?<br/>
                            <i>R.</i> That Thy people may rejoice in Thee.<br/>
                            <i>V.</i> Show us Thy mercy, O Lord,<br/>
                            <i>R.</i> And grant us Thy salvation.<br/>
                            <i>V.</i> Vouchsafe, O Lord,<br/>
                            <i>R.</i> To keep us safe this day without sin.<br/>
                            <br/>

                            <i>V.</i> O Lord, have mercy upon us.<br/>
                            <i>R.</i> Have mercy upon us.<br/>
                            <i>V.</i> O Lord, let Thy mercy lighten upon us.<br/>
                            <i>R.</i> As our trust is in Thee.<br/>
                            <i>V.</i> Turn Thee again, O Lord, at the last.<br/>
                            <i>R.</i> And be gracious unto Thy servants.<br/>
                            <br/>

                            <i>V.</i> Lord, hear our prayer.<br/>
                            <i>R.</i> And let our cry come unto Thee.<br/>
                            <i>V.</i> Let us pray.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        O LORD, our heavenly Father, almighty and everlasting God, who hast
                        safely brought us to the beginning of this day; Defend us in the same with
                        thy mighty power; and grant that this day we fall into no sin, neither
                        run into any kind of danger; but that all our doings, being ordered
                        by thy governance, may be righteous in thy sight; through Jesus Christ
                        our Lord. Amen.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <small>
                            <i><b>Here ends the Order for Prime</b></i>
                        </small>
                    </div>
                    <br/>
                    <br/>

                    <hr>

                    <a id="terce">&nbsp;</A>
                    <div class="text-center">
                        <h3><b>Terce</b></h3>
                    </div>

                    <blockquote>
                        <b>
                            <i>V.</i> In the Name of the Father, and of the Son, and of the
                            Holy Ghost.<br/>
                            <i>R.</i> Amen.<br/>
                        </b>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> O God, make speed to help us.<br/>
                            <i>R.</i> O Lord, make haste to help us.<br/>
                            <br/>

                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <br/>
                    <div class="text-center"><i>(Here may be sung a Hymn)</i></div>
                    <br/>
                    <div class="text-center"><A HREF="office/terc">View Music &amp; Lyrics for the Hymn &nbsp;&nbsp;<i class="fa-solid fa-music"></i></A>
                    </div>
                    <a id="tercehym">&nbsp;</A>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <h3>
                            Hymn.<br/>
                        </h3>
                    </div>
                    <br/>
                    <blockquote>
                        <blockquote>

                            <b>
                                Come Holy Ghost, with God the Son<br/>
                                And God the Father, ever One;<br/>
                                Shed forth thy grace within our breast,<br/>
                                And dwell with us, a ready guest.<br/>
                                <br/>
                                By ev'ry power, by heart and tongue,<br/>
                                By act and deed, thy praise be sung,<br/>
                                Inflame with perfect love each sense,<br/>
                                That others' souls may kindle thence.<br/>
                                <br/>
                                O Father, that we ask be done,<br/>
                                Through Jesus Christ, thine only Son,<br/>
                                Who, with the Holy Ghost and thee,<br/>
                                Doth live and reign eternally.<br/>
                            </b>
                            <br/>
                        </blockquote>
                    </blockquote>
                    <br/>

                    <b>
                        <i>Antiphon</i>: O Learn me.<br/>
                    </b>
                    <br/>

                    <div class="text-center"><i><b>Legem pone.</b></i> &nbsp; &nbsp; Psalm cxix: 33-80</div>
                    <br/>

                    <b>
                        &nbsp; &nbsp; TEACH me, O LORD, the way of thy statutes, * and I shall keep it unto
                        the end.<br/>
                        &nbsp; &nbsp; Give me understanding, and I shall keep thy law; * yea, I shall keep
                        it with my whole heart.<br/>
                        &nbsp; &nbsp; Make me to go in the path of thy commandments; * for therein is my desire.<br/>
                        &nbsp; &nbsp; Incline my heart unto thy testimonies, * and not to covetousness.<br/>
                        &nbsp; &nbsp; O turn away mine eyes, lest they behold vanity; * and quicken thou me
                        in thy way.<br/>
                        &nbsp; &nbsp; O stablish thy word in thy servant, * that I may fear thee.<br/>
                        &nbsp; &nbsp; Take away the rebuke that I am afraid of; * for thy judgments
                        are good.<br/>
                        &nbsp; &nbsp; Behold, my delight is in thy commandments; * O quicken me in thy
                        righteousness.<br/>
                        &nbsp; &nbsp; Let thy loving mercy come also unto me, O LORD, * even thy salvation,
                        according unto thy word.<br/>
                        &nbsp; &nbsp; So shall I make answer unto my blasphemers; * for my trust is in thy
                        word.<br/>
                        &nbsp; &nbsp; O take not the word of thy truth utterly out of my mouth; * for my hope
                        is in thy judgments.<br/>
                        &nbsp; &nbsp; So shall I alway keep thy law; * yea, for ever and ever.<br/>
                        &nbsp; &nbsp; And I will walk at liberty; * for I seek thy commandments.<br/>
                        &nbsp; &nbsp; I will speak of thy testimonies also, even before kings, * and will
                        not be ashamed.<br/>
                        &nbsp; &nbsp; And my delight shall be in thy commandments, * which I have loved.<br/>
                        &nbsp; &nbsp; My hands also will I lift up unto thy commandments, which I have loved;
                        * and my study shall be in thy statutes.<br/>
                        &nbsp; &nbsp; O think upon thy servant, as concerning thy word, * wherein thou hast
                        caused me to put my trust.<br/>
                        &nbsp; &nbsp; The same is my comfort in my trouble; * for thy word hath quickened
                        me.<br/>
                        &nbsp; &nbsp; The proud have had me exceedingly in derision; * yet have I not shrinked
                        from thy law.<br/>
                        &nbsp; &nbsp; For I remembered thine everlasting judgments, O LORD, * and received
                        comfort.<br/>
                        &nbsp; &nbsp; I am horribly afraid, * for the ungodly that forsake thy law.<br/>
                        &nbsp; &nbsp; Thy statutes have been my songs, * in the house of my pilgrimage.<br/>
                        &nbsp; &nbsp; I have thought upon thy Name, O LORD, in the night season, * and have
                        kept thy law.<br/>
                        &nbsp; &nbsp; This I had, * because I kept thy commandments.<br/>
                        &nbsp; &nbsp; Thou art my portion, O LORD; * I have promised to keep thy law.<br/>
                        &nbsp; &nbsp; I made my humble petition in thy presence with my whole heart; * O be
                        merciful unto me, according to thy word.<br/>
                        &nbsp; &nbsp; I called mine own ways to remembrance, * and turned my feet unto thy
                        testimonies.<br/>
                        &nbsp; &nbsp; I made haste, and prolonged not the time, * to keep thy commandments.<br/>
                        &nbsp; &nbsp; The snares of the ungodly have compassed me about; * but I have not
                        forgotten thy law.<br/>
                        &nbsp; &nbsp; At midnight I will rise to give thanks unto thee, * because of thy righteous
                        judgments.<br/>
                        &nbsp; &nbsp; I am a companion of all them that fear thee, * and keep thy commandments.<br/>
                        &nbsp; &nbsp; The earth, O LORD, is full of thy mercy: * O teach me thy statutes.<br/>
                        &nbsp; &nbsp; O LORD, thou hast dealt graciously with thy servant, * according unto
                        thy word.<br/>
                        &nbsp; &nbsp; O teach me true understanding and knowledge; * for I have believed thy
                        commandments.<br/>
                        &nbsp; &nbsp; Before I was troubled, I went wrong; * but now have I kept thy word.<br/>
                        &nbsp; &nbsp; Thou art good and gracious; * O teach me thy statutes.<br/>
                        &nbsp; &nbsp; The proud have imagined a lie against me; * but I will keep thy commandments
                        with my whole heart.<br/>
                        &nbsp; &nbsp; Their heart is as fat as brawn; * but my delight hath been in thy law.<br/>
                        &nbsp; &nbsp; It is good for me that I have been in trouble; * that I may learn thy
                        statutes.<br/>
                        &nbsp; &nbsp; The law of thy mouth is dearer unto me * than thousands of gold and
                        silver.<br/>
                        &nbsp; &nbsp; Thy hands have made me and fashioned me: * O give me understanding,
                        that I may learn thy commandments.<br/>
                        &nbsp; &nbsp; They that fear thee will be glad when they see me; * because I have
                        put my trust in thy word.<br/>
                        &nbsp; &nbsp; I know, O LORD, that thy judgments are right, * and that thou of very
                        faithfulness hast caused me to be troubled.<br/>
                        &nbsp; &nbsp; O let thy merciful kindness be my comfort, * according to thy word unto
                        thy servant.<br/>
                        &nbsp; &nbsp; O let thy loving mercies come unto me, that I may live; * for thy law
                        is my delight.<br/>
                        &nbsp; &nbsp; Let the proud be confounded, for they go wickedly about to destroy me;
                        * but I will be occupied in thy commandments.<br/>
                        &nbsp; &nbsp; Let such as fear thee, and have known thy testimonies, * be turned unto
                        me.<br/>
                        &nbsp; &nbsp; O let my heart be sound in thy statutes, * that I be not ashamed.<br/>
                        <br/>

                        <i>Antiphon</i>: O learn me true understanding and knowledge.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>The Chapter.</b> &nbsp; &nbsp; <i>Revelation 22:17</i><br/>
                    </div>

                    <b>
                        The Spirit and the Bride say, Come; and let him that heareth say, Come,
                        and let him that is athirst come: and whosoever will, let him take of the
                        water of life freely.<br/>
                    </b>
                    <br/>


                    <blockquote>
                        <b>
                            <i>V.</i> But Thou, O Lord, have mercy upon us.<br/>
                            <i>R.</i> Thanks be to God.<br/>
                            <i>V.</i> Now the Lord is that Spirit.<br/>
                            <i>R.</i> And where the Spirit is, there is liberty.<br/>
                            <br/>

                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                            Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                            <br/>

                            <i>V.</i> The Spirit itself beareth witness with our spirit.<br/>
                            <i>R.</i> That we are the children of God.<br/>
                            <br/>

                            <i>R.</i> The Lord be with you.<br/>
                            <i>V.</i> And with thy spirit.<br/>
                            <br/>

                            Let us pray.<br/>
                            <br/>

                            <i>V.</i> Lord, have mercy upon us.<br/>
                            <i>R.</i> Christ, have mercy upon us.<br/>
                            <i>V.</i> Lord, have mercy upon us.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> Send out Thy light and Thy truth, that they may lead me.<br/>
                            <i>R.</i> And bring me unto Thy holy hill, and to Thy dwelling.<br/>
                            <i>V.</i> O let us live.<br/>
                            <i>R.</i> And we shall call upon Thy name.<br/>
                            <i>V.</i> Turn us again, O Lord God of Hosts.<br/>
                            <i>R.</i> Show the light of thy countenance, and we shall be whole.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        Grant, we beseech Thee, Almighty and Merciful God, that Thy Holy Spirit
                        may come unto us, and dwell in us, and make us to be a worthy temple of
                        Thy glory. Through Jesus Christ our Lord. Amen.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <small>
                            <i><b>Here ends the Order for Terce</b></i>
                        </small>
                    </div>
                    <br/>
                    <br/>

                    <hr>

                    <a id="sext">&nbsp;</A>
                    <div class="text-center">
                        <h3><b>Sext</b></h3>
                    </div>

                    <blockquote>
                        <b>
                            <i>V.</i> In the Name of the Father, and of the Son, and of the Holy Ghost.<br/>
                            <i>R.</i> Amen.<br/>
                        </b>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> O God, make speed to help us.<br/>
                            <i>R.</i> O Lord, make haste to help us.<br/>
                            <br/>

                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <br/>
                    <div class="text-center"><i>(Here may be sung a Hymn)</i></div>
                    <br/>
                    <div class="text-center"><A HREF="office/sext">View Music &amp; Lyrics for the Hymn &nbsp;&nbsp;<i class="fa-solid fa-music"></i></A>
                    </div>
                    <a id="sexthym">&nbsp;</A>
                    <br/>

                    <div class="text-center">
                        <h3>
                            Hymn.<br/>
                        </h3>
                    </div>
                    <br/>
                    <blockquote>
                        <blockquote>

                            <b>
                                O God of truth, O Lord of might,<br/>
                                Who ord'rest time and change aright,<br/>
                                And sends't the early morning ray,<br/>
                                And light'st the glow of perfect day:<br/>
                                <br/>
                                Extinguish thou each sinful fire,<br/>
                                And banish ev'ry ill desire;<br/>
                                And while thou keeps't the body whole,<br/>
                                Shed forth thy peace upon the soul.<br/>
                                <br/>
                                O Father, that we ask be done,<br/>
                                Through Jesus Christ, thine only Son,<br/>
                                Who, with the Holy Ghost and thee,<br/>
                                Doth live and reign eternally.<br/>
                            </b>
                            <br/>
                        </blockquote>
                    </blockquote>
                    <br/>

                    <b>
                        <i>Antiphon</i>: The ungodly laid wait for me to destroy me.<br/>
                    </b>
                    <br/>

                    <br/>
                    <div class="text-center">
                        <i><b>Defecit anime mea.</b></i> &nbsp; &nbsp; Psalm cxix: 81-128.
                    </div>
                    <br/>

                    <b>
                        &nbsp; &nbsp; MY soul hath longed for thy salvation, * and I have a good hope because
                        of thy word.<br/>
                        &nbsp; &nbsp; Mine eyes long sore for thy word; * saying, O when wilt thou comfort
                        me?<br/>
                        &nbsp; &nbsp; For I am become like a bottle in the smoke; * yet do I not forget thy
                        statutes.<br/>
                        &nbsp; &nbsp; How many are the days of thy servant? * when wilt thou be avenged of
                        them that persecute me?<br/>
                        &nbsp; &nbsp; The proud have digged pits for me, * which are not after thy law.<br/>
                        &nbsp; &nbsp; All thy commandments are true: * they persecute me falsely; O be thou
                        my help.<br/>
                        &nbsp; &nbsp; They had almost made an end of me upon earth; * but I forsook not thy
                        commandments.<br/>
                        &nbsp; &nbsp; O quicken me after thy loving-kindness; * and so shall I keep the testimonies
                        of thy mouth.<br/>
                        &nbsp; &nbsp; O LORD, thy word * endureth for ever in heaven.<br/>
                        &nbsp; &nbsp; Thy truth also remaineth from one generation to another; * thou hast
                        laid the foundation of the earth, and it abideth.<br/>
                        &nbsp; &nbsp; They continue this day according to thine ordinance; * for all things
                        serve thee.<br/>
                        &nbsp; &nbsp; If my delight had not been in thy law, * I should have perished in my
                        trouble.<br/>
                        &nbsp; &nbsp; I will never forget thy commandments; * for with them thou hast quickened
                        me.<br/>
                        &nbsp; &nbsp; I am thine: O save me, * for I have sought thy commandments.<br/>
                        &nbsp; &nbsp; The ungodly laid wait for me, to destroy me; * but I will consider thy
                        testimonies.<br/>
                        &nbsp; &nbsp; I see that all things come to an end; * but thy commandment is exceeding
                        broad.<br/>
                        &nbsp; &nbsp; LORD, what love have I unto thy law! * all the day long is my study
                        in it.<br/>
                        &nbsp; &nbsp; Thou, through thy commandments, hast made me wiser than mine enemies;
                        * for they are ever with me.<br/>
                        &nbsp; &nbsp; I have more understanding than my teachers; * for thy testimonies are
                        my study.<br/>
                        &nbsp; &nbsp; I am wiser than the aged; * because I keep thy commandments.<br/>
                        &nbsp; &nbsp; I have refrained my feet from every evil way, * that I may keep thy
                        word.<br/>
                        &nbsp; &nbsp; I have not shrunk from thy judgments; * for thou teachest me.<br/>
                        &nbsp; &nbsp; O how sweet are thy words unto my throat; * yea, sweeter than honey
                        unto my mouth!<br/>
                        &nbsp; &nbsp; Through thy commandments I get understanding: * therefore I hate all
                        evil ways.<br/>
                        &nbsp; &nbsp; Thy word is a lantern unto my feet, * and a light unto my paths.<br/>
                        &nbsp; &nbsp; I have sworn, and am stedfastly purposed, * to keep thy righteous judgments.<br/>
                        &nbsp; &nbsp; I am troubled above measure: * quicken me, O LORD, according to thy
                        word.<br/>
                        &nbsp; &nbsp; Let the free-will offerings of my mouth please thee, O LORD; * and teach
                        me thy judgments.<br/>
                        &nbsp; &nbsp; My soul is alway in my hand; * yet do I not forget thy law.<br/>
                        &nbsp; &nbsp; The ungodly have laid a snare for me; * but yet I swerved not from thy
                        commandments.<br/>
                        &nbsp; &nbsp; Thy testimonies have I claimed as mine heritage for ever; * and why?
                        they are the very joy of my heart.<br/>
                        &nbsp; &nbsp; I have applied my heart to fulfil thy statutes alway, * even unto the
                        end.<br/>
                        &nbsp; &nbsp; I hate them that imagine evil things; * but thy law do I love.<br/>
                        &nbsp; &nbsp; Thou art my defence and shield; * and my trust is in thy word.<br/>
                        &nbsp; &nbsp; Away from me, ye wicked; * I will keep the commandments of my God.<br/>
                        &nbsp; &nbsp; O stablish me according to thy word, that I may live; * and let me not
                        be disappointed of my hope.<br/>
                        &nbsp; &nbsp; Hold thou me up, and I shall be safe; * yea, my delight shall be ever
                        in thy statutes.<br/>
                        &nbsp; &nbsp; Thou hast trodden down all them that depart from thy statutes;
                        * for they imagine but deceit.<br/>
                        &nbsp; &nbsp; Thou puttest away all the ungodly of the earth like dross; * therefore
                        I love thy testimonies.<br/>
                        &nbsp; &nbsp; My flesh trembleth for fear of thee; * and I am afraid of thy judgments.<br/>
                        &nbsp; &nbsp; I deal with the thing that is lawful and right; * O give me not over
                        unto mine oppressors.<br/>
                        &nbsp; &nbsp; Make thou thy servant to delight in that which is good, * that the proud
                        do me no wrong.<br/>
                        &nbsp; &nbsp; Mine eyes are wasted away with looking for thy health, * and for the
                        word of thy righteousness.<br/>
                        &nbsp; &nbsp; O deal with thy servant according unto thy loving mercy, * and teach
                        me thy statutes.<br/>
                        &nbsp; &nbsp; I am thy servant; O grant me understanding, * that I may know thy testimonies.<br/>
                        &nbsp; &nbsp; It is time for thee, LORD, to lay to thine hand; * for they have destroyed
                        thy law.<br/>
                        &nbsp; &nbsp; For I love thy commandments * above gold and precious stones.<br/>
                        &nbsp; &nbsp; Therefore hold I straight all thy commandments; * and all false ways
                        I utterly abhor.<br/>
                    </b>
                    <br/>

                    <b>
                        <i>Antiphon</i>: The ungodly laid wait for me to destroy me, but I will consider
                        Thy testimonies.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>The Chapter.</b> &nbsp; &nbsp; <i>Isaiah 4:6</i><br/>
                    </div>

                    <b>
                        There shall be a tabernacle for a shadow in the daytime from the heat,
                        and for a place of refuge, and for a covert from storm and from rain.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> But Thou, O Lord, have mercy upon us.<br/>
                            <i>R.</i> Thanks be to God.<br/>
                            <i>V.</i> I said, I will go up to the palm-tree.<br/>
                            <i>R.</i> I will take hold of the boughs thereof.<br/>
                            <br/>

                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                            <br/>

                            <i>V.</i> Therefore shall He lift up mine head.<br/>
                            <i>R.</i> Above mine enemies round about me.<br/>
                            <br/>

                            <i>R.</i> The Lord be with you.<br/>
                            <i>V.</i> And with thy spirit.<br/>
                            <br/>

                            Let us pray.<br/>
                            <br/>

                            <i>V.</i> Lord, have mercy upon us.<br/>
                            <i>R.</i> Christ, have mercy upon us.<br/>
                            <i>V.</i> Lord, have mercy upon us.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> Hide not Thy face from Thy servant, for I am in trouble.<br/>
                            <i>R.</i> O haste Thee and hear me.<br/>
                            <i>V.</i> Draw nigh unto my soul and save it.<br/>
                            <i>R.</i> O deliver me, because of mine enemies.<br/>
                            <i>V.</i> Lord, hear our prayer.<br/>
                            <i>R.</i> And let our cry come unto Thee.<br/>
                            <i>V.</i> Let us pray.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        O Lord Jesus Christ, who at the sixth hour of the day didst ascend the
                        Cross for the redemption of the world, and didst shed Thy precious Blood
                        for the remission of our sins; grant, we humbly beseech Thee, that by the
                        merits of Thy Passion and Wounds, we may, after our death, enter into the
                        gates of Paradise with joy. Who liveth and reigneth with the Father
                        and the Holy Ghost, ever one God, world without end. Amen.<br/>
                        <br/>

                        O Lord Jesus Christ, Who wast lifted up upon the wood of the Cross that
                        all the world, which was in darkness, might be enlightened; pour forth,
                        we beseech Thee, that light upon our souls and bodies, through which we
                        may attain unto life everlasting. Who liveth and reigneth with the
                        Father and the Holy Ghost, ever one God, world without end. Amen.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <small>
                            <i><b>Here ends the Order for Sext</b></i>
                        </small>
                    </div>
                    <br/>
                    <br/>

                    <hr>

                    <a id="none">&nbsp;</A>
                    <div class="text-center">
                        <h3><b>None</b></h3>
                    </div>

                    <blockquote>
                        <b>
                            <i>V.</i> In the Name of the Father, and of the Son, and of the
                            Holy Ghost.<br/>
                            <i>R.</i> Amen.<br/>
                        </b>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> O God, make speed to help us.<br/>
                            <i>R.</i> O Lord, make haste to help us.<br/>
                            <br/>

                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <br/>
                    <div class="text-center"><i>(Here may be sung a Hymn)</i></div>
                    <br/>
                    <div class="text-center"><A HREF="office/none">View Music &amp; Lyrics for the Hymn &nbsp;&nbsp;<i class="fa-solid fa-music"></i></A>
                    </div>
                    <a id="nonehym">&nbsp;</A>
                    <br/>
                    <br/>


                    <div class="text-center">
                        <h3>
                            Hymn.<br/>
                        </h3>
                    </div>
                    <br/>
                    <blockquote>
                        <blockquote>

                            <b>
                                O God, creation's secret force,<br/>
                                Thyself unmov'd, all motions source,<br/>
                                Who from the morn till evening ray,<br/>
                                Through all its changes guid'st the day:<br/>
                                <br/>
                                Grant us, when this short life is past,<br/>
                                The glorious evening that shall last,<br/>
                                That, by a holy death attained,<br/>
                                Eternal glory may be gained.<br/>
                                <br/>
                                O Father, that we ask be done,<br/>
                                Through Jesus Christ, thine only Son,<br/>
                                Who, with the Holy Ghost and thee,<br/>
                                Doth live and reign eternally.<br/>
                            </b>
                            <br/>
                        </blockquote>
                    </blockquote>
                    <br/>

                    <b>
                        <i>Antiphon</i>: Mine eyes prevent the night watches.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <i><b>Mirabilia.</b></i> &nbsp; &nbsp; Psalm cxix: 129-176
                    </div>
                    <br/>
                    <br/>

                    <b>
                        &nbsp; &nbsp; THY testimonies are wonderful; * therefore doth my soul keep them.<br/>
                        &nbsp; &nbsp; When thy word goeth forth, * it giveth light and understanding unto
                        the simple.<br/>
                        &nbsp; &nbsp; I opened my mouth, and drew in my breath; * for my delight was in thy
                        commandments.<br/>
                        &nbsp; &nbsp; O look thou upon me, and be merciful unto me, * as thou usest to do
                        unto those that love thy Name.<br/>
                        &nbsp; &nbsp; Order my steps in thy word; * and so shall no wickedness have dominion
                        over me.<br/>
                        &nbsp; &nbsp; O deliver me from the wrongful dealings of men; * and so shall I keep
                        thy commandments.<br/>
                        &nbsp; &nbsp; Show the light of thy countenance upon thy servant, * and teach me thy
                        statutes.<br/>
                        &nbsp; &nbsp; Mine eyes gush out with water, * because men keep not thy law.<br/>
                        &nbsp; &nbsp; Righteous art thou, O LORD; * and true are thy judgments.<br/>
                        &nbsp; &nbsp; The testimonies that thou hast commanded * are exceeding righteous and
                        true.<br/>
                        &nbsp; &nbsp; My zeal hath even consumed me; * because mine enemies have forgotten
                        thy words.<br/>
                        &nbsp; &nbsp; Thy word is tried to the uttermost, * and thy servant loveth it.<br/>
                        &nbsp; &nbsp; I am small and of no reputation; * yet do I not forget thy commandments.<br/>
                        &nbsp; &nbsp; Thy righteousness is an everlasting righteousness, * and thy law is
                        the truth.<br/>
                        &nbsp; &nbsp; Trouble and heaviness have taken hold upon me; * yet is my delight in
                        thy commandments.<br/>
                        &nbsp; &nbsp; The righteousness of thy testimonies is everlasting: * O grant me understanding,
                        and I shall live.<br/>
                        &nbsp; &nbsp; I call with my whole heart; * hear me, O LORD; I will keep thy statutes.<br/>
                        &nbsp; &nbsp; Yea, even unto thee do I call; * help me, and I shall keep thy testimonies.<br/>
                        &nbsp; &nbsp; Early in the morning do I cry unto thee; * for in thy word is my trust.<br/>
                        &nbsp; &nbsp; Mine eyes prevent the night watches; * that I might be occupied in thy
                        word.<br/>
                        &nbsp; &nbsp; Hear my voice, O LORD, according unto thy loving-kindness; * quicken
                        me, according to thy judgments.<br/>
                        &nbsp; &nbsp; They draw nigh that of malice persecute me, * and are far from thy law.<br/>
                        &nbsp; &nbsp; Be thou nigh at hand, O LORD; * for all thy commandments are true.<br/>
                        &nbsp; &nbsp; As concerning thy testimonies, I have known long since, * that thou
                        hast grounded them for ever.<br/>
                        &nbsp; &nbsp; O consider mine adversity, and deliver me, * for I do not forget thy law.<br/>
                        &nbsp; &nbsp; Avenge thou my cause, and deliver me; * quicken me according to thy word.<br/>
                        &nbsp; &nbsp; Health is far from the ungodly; * for they regard not thy statutes.<br/>
                        &nbsp; &nbsp; Great is thy mercy, O LORD; * quicken me, as thou art wont.<br/>
                        &nbsp; &nbsp; Many there are that trouble me, and persecute me; * yet do I not swerve
                        from thy testimonies.<br/>
                        &nbsp; &nbsp; It grieveth me when I see the transgressors; * because they keep not
                        thy law.<br/>
                        &nbsp; &nbsp; Consider, O LORD, how I love thy commandments; * O quicken me, according
                        to thy loving-kindness.<br/>
                        &nbsp; &nbsp; Thy word is true from everlasting; * all the judgments of thy righteousness
                        endure for evermore.<br/>
                        &nbsp; &nbsp; Princes have persecuted me without a cause; * but my heart standeth
                        in awe of thy word.<br/>
                        &nbsp; &nbsp; I am as glad of thy word, * as one that findeth great spoils.<br/>
                        &nbsp; &nbsp; As for lies, I hate and abhor them; * but thy law do I love.<br/>
                        &nbsp; &nbsp; Seven times a day do I praise thee; * because of thy righteous judgments.<br/>
                        &nbsp; &nbsp; Great is the peace that they have who love thy law; * and they have
                        none occasion of stumbling.<br/>
                        &nbsp; &nbsp; LORD, I have looked for thy saving health, * and done after thy commandments.<br/>
                        &nbsp; &nbsp; My soul hath kept thy testimonies, * and loved them exceedingly.<br/>
                        &nbsp; &nbsp; I have kept thy commandments and testimonies; * for all my ways are
                        before thee.<br/>
                        &nbsp; &nbsp; Let my complaint come before thee, O LORD; * give me understanding according
                        to thy word.<br/>
                        &nbsp; &nbsp; Let my supplication come before thee; * deliver me according to thy
                        word.<br/>
                        &nbsp; &nbsp; My lips shall speak of thy praise, * when thou hast taught me thy statutes.<br/>
                        &nbsp; &nbsp; Yea, my tongue shall sing of thy word; * for all thy commandments are
                        righteous.<br/>
                        &nbsp; &nbsp; Let thine hand help me; * for I have chosen thy commandments.<br/>
                        &nbsp; &nbsp; I have longed for thy saving health, O LORD; * and in thy law is my
                        delight.<br/>
                        &nbsp; &nbsp; O let my soul live, and it shall praise thee; * and thy judgments shall
                        help me.<br/>
                        &nbsp; &nbsp; I have gone astray like a sheep that is lost; * O seek thy servant,
                        for I do not forget thy commandments.<br/>
                        <br/>

                        <i>Antiphon</i>: Mine eyes prevent the night watches, that I might be occupied
                        in Thy words.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <b>The Chapter.</b> &nbsp; &nbsp; <i>I Thessalonians 4:14</i><br/>
                    </div>

                    <b>
                        If we believe that Jesus died, and rose again, even so them also that
                        sleep in Jesus shall God bring with Him.<br/>
                    </b>
                    <br/>

                    <blockquote>
                        <b>
                            <i>V.</i> But Thou, O Lord, have mercy upon us.<br/>
                            <i>R.</i> Thanks be to God.<br/>
                            <i>V.</i> I said, I will go up to the palm-tree.<br/>
                            <i>R.</i> I will take hold of the boughs thereof.<br/>
                            <i>V.</i> GLORY be to the Father, and to the Son, and to the Holy
                            Ghost;<br/>
                            <i>R.</i> As it was in the beginning, is now, and ever shall be, world
                            without end. Amen.<br/>
                            <br/>

                            <i>V.</i> O death, I will be thy plagues.<br/>
                            <i>R.</i> O grave, I will be thy destruction.<br/>
                            <br/>

                            <i>R.</i> The Lord be with you.<br/>
                            <i>V.</i> And with thy spirit.<br/>
                            <br/>

                            Let us pray.<br/>
                            <br/>

                            <i>V.</i> Lord, have mercy upon us.<br/>
                            <i>R.</i> Christ, have mercy upon us.<br/>
                            <i>V.</i> Lord, have mercy upon us.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                        come. Thy will be done, On earth as it is in heaven. Give us this day our
                        daily bread. And forgive us our trespasses, As we forgive those who
                        trespass against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power, and the glory,
                        for ever and ever. Amen.<br/>
                    </b>
                    <br/>


                    <blockquote>
                        <b>
                            <i>V.</i> Cast me not away in the time of age.<br/>
                            <i>R.</i> Forsake me not when my strength faileth me.<br/>
                            <i>V.</i> Hide not Thy face from me.<br/>
                            <i>R.</i> Lest I be like unto them that go down into the pit.<br/>
                            <i>V.</i> Quicken me, O Lord, for Thy Name's sake.<br/>
                            <i>R.</i> And for Thy righteousness' sake bring my soul out of trouble.<br/>
                            <i>V.</i> Lord, hear our prayer.<br/>
                            <i>R.</i> And let our cry come unto Thee.<br/>
                            <i>V.</i> Let us pray.<br/>
                        </b>
                        <br/>
                    </blockquote>

                    <b>
                        O Lord Jesus Christ, who for our sakes didst tread the paths of death;
                        make known to us the way of life; that as Thou wast reckoned with the transgressors
                        in Thy death, and with the rich in Thy burial, so we, who are dead in trespasses
                        and sins, may be raised up by Thee to the land of true riches. Who
                        liveth and reigneth with the Father and the Holy Ghost, ever one God, world
                        without end. Amen.<br/>
                    </b>
                    <br/>

                    <div class="text-center">
                        <small>
                            <i><b>Here ends the Order for None</b></i>
                        </small>
                    </div>
                    <br/>
                    <br/>

                    <hr>

                    <a id="vespers">&nbsp;</A>
                    <div class="text-center">
                        <h3><b>Vespers</b></h3>
                    </div>

                    <br/>
                    <blockquote>
                        <small>
                            <i>
                                (The source Breviaries used include a different set of Psalms,
                                Memorials, and Chapter for each day of the week at Vespers. For the sake
                                of simplicity, only the Sunday order for Vespers is included here.)
                            </i>
                        </small>
                    </blockquote>

                    <blockquote>
                        <b>
                            <i>V. </i> O God, make speed to save us.<br/>
                            <i>R. </i> O Lord, make haste to help us.<br/>
                            <i>V. </i> Glory be to the Father, and to the Son, and to the Holy Ghost.<br/>
                            <i>R. </i> As it was in the beginning, is now, and ever shall be: world without
                            end. Amen.<br/>
                        </b>
                        <br/>

                        <div class="text-center">
                            <b>
                                Alleluia.<br/>
                            </b>
                        </div>

                        <br/>
                        <i>
                            [From Septuagesima to Wednesday in Holy Week, inclusive, instead of Alleluia is said:<br/>
                        </i>
                        <b>Praise be to Thee, O Lord, King of eternal glory.</b><i>]</i><br/>
                        <br/>
                        <br/>
                        <br/>

                        <b>
                            <i>Antiphon</i>: Sit thou * on My right hand: said the Lord my God.<br/>
                        </b>
                        <br/>
                        <div class="text-center">
                            <i><b>Dixit Dominus.</b></i> &nbsp; &nbsp; Psalm cx.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; THE LORD said unto my Lord, * Sit thou on my right hand, until I make thine
                            enemies thy footstool.<br/>
                            &nbsp; &nbsp; The LORD shall send the rod of thy power out of Sion: * be thou ruler, even
                            in the midst among thine enemies.<br/>
                            &nbsp; &nbsp; In the day of thy power shall thy people offer themselves willingly with an
                            holy worship: * thy young men come to thee as dew from the womb of the
                            morning.<br/>
                            &nbsp; &nbsp; The LORD sware, and will not repent, * Thou art a Priest for ever after the
                            order of Melchizedek.<br/>
                            &nbsp; &nbsp; The Lord upon thy right hand * shall wound even kings in the day of his wrath.<br/>
                            &nbsp; &nbsp; He shall judge among the heathen; * he shall fill the places with the dead
                            bodies, and smite in sunder the heads over divers countries.<br/>
                            &nbsp; &nbsp; He shall drink of the brook in the way; * therefore shall he lift up his head.<br/>
                            <br/>
                            Glory be, etc.<br/>
                            <br/>
                            <i>Antiphon</i>: Sit Thou * on My right hand: said the Lord my God.<br/>
                        </b>
                        <br/>

                        <br/>
                        <div class="text-center">
                            <i><b>Confitebor tibi.</b></i> &nbsp; &nbsp; Psalm cxi.<br/>
                        </div>
                        <br/>

                        <b>
                            <i>Antiphon</i>: All His commandments * are true: they stand fast for ever and ever.<br/>
                            <br/>
                            &nbsp; &nbsp; I WILL give thanks unto the LORD with my whole heart, * secretly among the
                            faithful, and in the congregation.<br/>
                            &nbsp; &nbsp; The works of the LORD are great, * sought out of all them that have pleasure
                            therein.<br/>
                            &nbsp; &nbsp; His work is worthy to be praised and had in honour, * and his righteousness
                            endureth for ever.<br/>
                            &nbsp; &nbsp; The merciful and gracious LORD hath so done his marvellous works, * that they
                            ought to be had in remembrance.<br/>
                            &nbsp; &nbsp; He hath given meat unto them that fear him; * he shall ever be mindful of his
                            covenant.<br/>
                            &nbsp; &nbsp; He hath showed his people the power of his works, * that he may give them
                            the heritage of the heathen.<br/>
                            &nbsp; &nbsp; The works of his hands are verity and judgment; * all his commandments are
                            true.<br/>
                            &nbsp; &nbsp; They stand fast for ever and ever, * and are done in truth and equity.<br/>
                            &nbsp; &nbsp; He sent redemption unto his people; * he hath commanded his covenant for
                            ever; holy and reverend is his Name.<br/>
                            &nbsp; &nbsp; The fear of the LORD is the beginning of wisdom; * a good understanding
                            have all they that do thereafter; his praise endureth for ever.<br/>
                            <br/>
                            Glory be, etc.<br/>
                            <br/>
                            <i>Antiphon</i>: All His commandments * are true: they stand fast for ever and ever.<br/>
                            <br/>
                            <br/>

                            <br/>
                            <i>Antiphon</i>: He hath great delight * in His commandments.<br/>
                        </b>
                        <br/>

                        <div class="text-center">
                            <i><b>Beatus vir.</b></i> &nbsp; &nbsp; Psalm cxii.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; BLESSED is the man that feareth the LORD; * he hath great delight in his
                            commandments.<br/>
                            &nbsp; &nbsp; His seed shall be mighty upon earth; * the generation of the faithful
                            shall be blessed.<br/>
                            &nbsp; &nbsp; Riches and plenteousness shall be in his house; * and his righteousness
                            endureth for ever.<br/>
                            &nbsp; &nbsp; Unto the godly there ariseth up light in the darkness; * he is merciful,
                            loving, and righteous.<br/>
                            &nbsp; &nbsp; A good man is merciful, and lendeth; * and will guide his words with
                            discretion.<br/>
                            &nbsp; &nbsp; For he shall never be moved: * and the righteous shall be had in everlasting
                            remembrance.<br/>
                            &nbsp; &nbsp; He will not be afraid of any evil tidings; * for his heart standeth fast,
                            and believeth in the LORD.<br/>
                            &nbsp; &nbsp; His heart is stablished, and will not shrink, * until he see his desire
                            upon his enemies.<br/>
                            &nbsp; &nbsp; He hath dispersed abroad, and given to the poor. * and his righteousness
                            remaineth for ever; his horn shall be exalted with honour.<br/>
                            &nbsp; &nbsp; The ungodly shall see it, and it shall grieve him; * he shall gnash with
                            his teeth, and consume away; the desire of the ungodly shall perish.<br/>
                            <br/>
                            Glory be, etc.<br/>
                            <br/>
                            <i>Antiphon</i>: He hath great delight * in His commandments.<br/>
                            <br/>

                            <br/>
                            <br/>
                            <i>Antiphon</i>: Blessed be the Name * of the Lord: from this time forth for evermore.<br/>
                        </b>
                        <br/>
                        <div class="text-center">
                            <i><b>Laudate, pueri.</b></i> &nbsp; &nbsp; Psalm cxiii.<br/>
                        </div>
                        <br/>
                        <b>
                            &nbsp; &nbsp; PRAISE the LORD, ye servants; * O praise the Name of the LORD.<br/>
                            &nbsp; &nbsp; Blessed be the Name of the LORD * from this time forth for evermore.<br/>
                            &nbsp; &nbsp; The LORD'S Name is praised * from the rising up of the sun unto the going
                            down of the same.<br/>
                            &nbsp; &nbsp; The LORD is high above all nations, * and his glory above the heavens.<br/>
                            &nbsp; &nbsp; Who is like unto the LORD our God, that hath his dwelling so high, * and yet
                            humbleth himself to behold the things that are in heaven and earth!<br/>
                            &nbsp; &nbsp; He taketh up the simple out of the dust, * and lifteth the poor out of the
                            mire;<br/>
                            &nbsp; &nbsp; That he may set him with the princes, * even with the princes of his
                            people.<br/>
                            &nbsp; &nbsp; He maketh the barren woman to keep house, * and to be a joyful mother
                            of children.<br/>
                            <br/>
                            Glory be, etc.<br/>
                            <br/>
                            <i>Antiphon</i>: Blessed be the Name * of the Lord: from this time forth for evermore.<br/>
                            <br/>
                            <br/>
                            <br/>
                            <i>Antiphon</i>: But we who live * will praise the Lord.<br/>
                        </b>
                        <br/>

                        <div class="text-center">
                            <i><b>In exitu Israel.</b></i> &nbsp; &nbsp; Psalm cxiv.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; WHEN Israel came out of Egypt, * and the house of Jacob from among the
                            strange people,<br/>
                            &nbsp; &nbsp; Judah was his sanctuary, * and Israel his dominion.<br/>
                            &nbsp; &nbsp; The sea saw that, and fled; * Jordan was driven back.<br/>
                            &nbsp; &nbsp; The mountains skipped like rams, * and the little hills like young sheep.<br/>
                            &nbsp; &nbsp; What aileth thee, O thou sea, that thou fleddest? * and thou Jordan, that
                            thou wast driven back?<br/>
                            &nbsp; &nbsp; Ye mountains, that ye skipped like rams? * and ye little hills, like young
                            sheep?<br/>
                            &nbsp; &nbsp; Tremble, thou earth, at the presence of the Lord: * at the presence of
                            the God of Jacob;<br/>
                            &nbsp; &nbsp; Who turned the hard rock into a standing water, * and the flint-stone into
                            a springing well.<br/>
                        </b>
                        <br/>
                        <i>Here is not said</i><b> Glory be, etc.</b><br/>
                        <br/>
                        <br/>
                        <br/>
                        <div class="text-center">
                            <i><b>Non nobis, Domine.</b></i> &nbsp; &nbsp; Psalm cxv.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; NOT unto us, O LORD, not unto us, but unto thy Name give the praise; * for thy
                            loving mercy, and for thy truth's sake.<br/>
                            &nbsp; &nbsp; Wherefore shall the heathen say, * Where is now their God?<br/>
                            &nbsp; &nbsp; As for our God, he is in heaven: * he hath done whatsoever pleased him.<br/>
                            &nbsp; &nbsp; Their idols are silver and gold, * even the work of men's hands.<br/>
                            &nbsp; &nbsp; They have mouths, and speak not; * eyes have they, and see not.<br/>
                            &nbsp; &nbsp; They have ears, and hear not; * noses have they, and smell not.<br/>
                            &nbsp; &nbsp; They have hands, and handle not; feet have they,
                            and walk not; * neither speak they through their throat.<br/>
                            &nbsp; &nbsp; They that make them are like unto them; * and so are all such as
                            put their trust in them.<br/>
                            &nbsp; &nbsp; But thou, house of Israel, trust thou in the LORD; * he is their
                            helper and defender.<br/>
                            &nbsp; &nbsp; Ye house of Aaron, put your trust in the LORD; * he is their helper
                            and defender.<br/>
                            &nbsp; &nbsp; Ye that fear the LORD, put your trust in the LORD; * he is
                            their helper and defender.<br/>
                            &nbsp; &nbsp; The LORD hath been mindful of us, and he shall bless us; * even he
                            shall bless the house of Israel, he shall bless the house of Aaron.<br/>
                            &nbsp; &nbsp; He shall bless them that fear the LORD, * both small and great.<br/>
                            &nbsp; &nbsp; The LORD shall increase you more and more, * you and your children.<br/>
                            &nbsp; &nbsp; Ye are the blessed of the LORD, * who made heaven and earth.<br/>
                            &nbsp; &nbsp; All the whole heavens are the LORD'S; * the earth hath he given
                            to the children of men.<br/>
                            &nbsp; &nbsp; The dead praise not thee, O LORD, * neither all they that go
                            down into silence.<br/>
                            &nbsp; &nbsp; But we will praise the LORD, * from this time forth for evermore.
                            &nbsp; &nbsp; Praise the LORD.<br/>
                            <br/>
                            Glory be, etc.<br/>
                            <br/>
                            <i>Antiphon</i>: But we who live * will praise the Lord.<br/>
                        </b>
                        <br/>
                        <br/>
                        <br/>

                        <div class="text-center">
                            <b>The Chapter.</b> &nbsp; &nbsp; <i>II Thessalonians iii.</i><br/>
                        </div>
                        <br/>

                        <b>
                            THE Lord direct your hearts into the love of God, and into the
                            patient waiting for Christ.<br/>
                            <i>R. </i> Thanks be to God.<br/>
                        </b>
                        <br/>
                        <br/>


                        <br/>
                        <div class="text-center"><i>(Here may be sung a Hymn)</i></div>
                        <br/>
                        <div class="text-center"><A HREF="office/vesp">View Music &amp; Lyrics for the Hymn &nbsp;&nbsp;<i class="fa-solid fa-music"></i></div>
                        <a id="vesphym">&nbsp;</A>
                        <br/>
                        <br/>

                        <div class="text-center">
                            <h3>
                                <b>Hymn.</b> <i>Lucis Creator optime.</i><br/>
                            </h3>
                        </div>

                        <br/>
                        <blockquote>
                            <blockquote>
                                <b>
                                    O BLEST creator of the light,<br/>
                                    Who mak'st the day with radiance bright, <br/>
                                    And o'er the forming world didst call<br/>
                                    The light from chaos first of all<br/>
                                    <br/>
                                    Whose wisdom joined in meet array<br/>
                                    The morn and eve, and named them day:<br/>
                                    Night comes with all its darkling fears<br/>
                                    Regard Thy people's prayers and tears.<br/>
                                    <br/>
                                    Lest, sunk in sin, and whelmed with strife,<br/>
                                    They lose the gift of endless life;<br/>
                                    While thinking but the thoughts of time,<br/>
                                    They weave new chains of woe and crime.<br/>
                                    <br/>
                                    But grant them grace that they may strain<br/>
                                    The heavenly gate, and prize to gain;<br/>
                                    Each harmful lure aside to cast,<br/>
                                    And purge away each error past.<br/>
                                    <br/>
                                    O Father, that we ask be done,<br/>
                                    Through Jesus Christ, Thine only Son;<br/>
                                    Who, with the Holy Ghost, and Thee,<br/>
                                    Shall live and reign eternally. Amen<br/>
                                </b>
                                <br/>
                            </blockquote>
                        </blockquote>
                        <br/>


                        <br/>
                        <b>
                            <i>V. </i> Lord, let my prayer be set forth.<br/>
                            <i>R. </i> In Thy sight as the incense.<br/>
                        </b>
                        <br/>
                        <br/>

                        <br/>
                        <div class="text-center">
                            <b>The Song of the Blessed Virgin.</b> &nbsp; &nbsp; <i>Magnificat.</i> &nbsp; &nbsp; St.
                            Luke i.<br/>
                        </div>
                        <br/>

                        <b>
                            My soul doth magnify the Lord, and my spirit hath rejoiced in God my Saviour.<br/>
                            For he hath regarded the lowliness of his handmaiden.<br/>
                            For behold, from henceforth all generations shall call me blessed.<br/>
                            For he that is mighty hath magnified me; and holy is his Name.<br/>
                            And his mercy is on them that fear him throughout all generations.<br/>
                            He hath showed strength with his arm; he hath scattered the proud in the imagination of
                            their hearts.<br/>
                            He hath put down the mighty from their seat, and hath exalted the humble and meek;.<br/>
                            He hath filled the hungry with good things; and the rich he hath sent empty away.<br/>
                            He remembering his mercy hath holpen his servant Israel; as he promised to our forefathers,
                            Abraham and his seed, for ever.<br/>
                            <br/>
                            Glory be to the Father, and to the Son, and to the Holy Ghost;<br/>
                            As it was in the beginning, is now, and ever shall be, world without end. Amen.<br/>
                            <br/>
                            Glory be, etc.<br/>
                            <br/>
                            <i>V. </i> The Lord be with you.<br/>
                            <i>R. </i> And with thy spirit.<br/>

                            <br/>
                            Let us pray.<br/>
                        </b>
                        <br/>

                        <div class="text-center">
                            <b>The Collect</b> <i>(as in the Proper Season)</i><br/>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <b>
                            <i>V. </i> The Lord be with you.<br/>
                            <i>R. </i> And with thy spirit.<br/>
                            <i>V. </i> Bless we the Lord.<br/>
                            <i>R. </i> Thanks be to God.<br/>
                        </b>
                        <br/>


                        <br/>
                        <div class="text-center">
                            <b>MEMORIALS</b><br/>
                            <i>used as appropriate within the Seasons</i><br/>
                        </div>

                        <br/>
                        <div class="text-center">
                            <b>
                                Memorial of the Holy Cross.<br/>
                            </b>
                        </div>
                        <br/>
                        <b>
                            <i>Antiphon</i>: Save us, O Christ our Saviour, by the virtue of the Holy Cross:
                            as Thou savedst Peter in the sea; and have mercy upon us all.<br/>
                            <i>V. </i> All the world shall worship Thee, and sing of Thee.<br/>
                            <i>R. </i> And praise Thy Name.<br/>
                            <br/>
                            Let us pray.<br/>
                            <br/>

                            KEEP, we beseech Thee, O Lord, in perpetual peace, those whom Thou hast
                            vouchsafed to redeem by the wood of the Holy Cross, O Saviour of the world,
                            Who livest and reignest with the Father and the Holy Ghost, ever one God, world
                            without end. Amen.<br/>
                        </b>
                        <br/>
                        <br/>

                        <br/>
                        <div class="text-center">
                            <b>
                                Memorial of St. Mary.<br/>
                            </b>
                        </div>
                        <br/>
                        <b>
                            <i>Antiphon</i>: In the bush which Moses saw unconsumed: we recognize thy
                            glorious virginity, O Mother of God.<br/>
                            <i>V. </i> Thou art fairer than the children of men.<br/>
                            <i>R. </i> Full of grace are thy lips.<br/>

                            <br/>
                            Let us pray.<br/>
                            <br/>

                            ALMIGHTY, everlasting God, by the right hand of Thy power defend Thy
                            servants from all perils; and, blessed Mary, ever-virgin gloriously
                            interceding, grant us prosperity both now and hereafter;
                            through Jesus Christ our Lord; Who livest and reignest with the Father
                            and the Holy Ghost, ever one God, world without end. Amen.<br/>
                        </b>
                        <br/>


                        <br/>
                        <div class="text-center">
                            <b>
                                Memorial of All Saints.<br/>
                            </b>
                        </div>

                        <br/>
                        <b>
                            <i>Antiphon</i>: O how glorious is the kingdom where all the Saints rejoice
                            with Christ: they are clothed with white Robes and follow the Lamb
                            whithersoever He goeth.<br/>
                            <i>V. </i> Let the Saints be joyful with glory.<br/>
                            <i>R. </i> Let them rejoice in their beds.<br/>

                            <br/>
                            Let us pray.<br/>
                            <br/>

                            GRANT, we beseech Thee, O Lord, that all Thy Saints may always
                            pray for us: and vouchsafe always to hear their prayers;
                            through Jesus Christ our Lord; Who livest and reignest with the Father
                            and the Holy Ghost, ever one God, world without end. Amen.<br/>
                        </b>
                        <br/>
                        <br/>

                        <blockquote>
                            <b>
                                <i>V. </i> The Lord be with you.<br/>
                                <i>R. </i> And with thy spirit.<br/>
                                <i>V. </i> Bless we the Lord.<br/>
                                <i>R. </i> Thanks be to God.<br/>
                            </b>
                        </blockquote>
                        <br/>

                        <div class="text-center">
                            <small>
                                <i><b>Here ends the Order for Vespers</b></i>
                            </small>
                        </div>
                        <br/>
                        <br/>

                        <hr>

                        <a id="compline">&nbsp;</A>
                        <div class="text-center">
                            <h3><b>Compline</b></h3>
                        </div>

                        <blockquote>
                            <b>
                                <i>V.</i> In the Name of the Father, and of the Son, and of the
                                Holy Ghost.<br/>
                                <i>R.</i> Amen.<br/>
                                <br/>

                                <i>V.</i> The Lord Almighty grant us a quiet night and a perfect end.<br/>
                                <i>R.</i> Amen.<br/>
                            </b>
                            <br/>
                        </blockquote>

                        <div class="text-center">
                            <b>The Chapter.</b> &nbsp; &nbsp; <i>I Peter 5:8</i><br/>
                        </div>
                        <br/>

                        <b>
                            Brethren, be sober, be vigilant, because your adversary the devil, as
                            a roaring lion, walketh about, seeking whom he may devour, whom resist,
                            steadfast in the faith.<br/>
                        </b>
                        <br/>

                        <blockquote>
                            <b>
                                <i>V.</i> But Thou, O Lord, have mercy upon us.<br/>
                                <i>R.</i> Thanks be to God.<br/>
                                <i>V.</i> Our help standeth in the name of the Lord.<br/>
                                <i>R.</i> Who hath made heaven and earth.<br/>
                                <br/>
                                Let us pray.<br/>
                            </b>
                            <br/>
                        </blockquote>


                        <b>
                            I confess to God the Father Almighty, to His only-begotten Son Jesus
                            Christ our Lord, and to God the Holy Ghost, and before the whole company
                            of heaven, that I have sinned exceedingly, in thought, word, and deed,
                            through my fault, through my own fault, through my own most grievous fault.
                            Wherefore I beseech God the Father Almighty, His only-begotten Son Jesus
                            Christ our Lord, and God the Holy Ghost, to pity me, and to have mercy
                            upon me.<br/>
                            <br/>

                            The Almighty and merciful God grant to us pardon, absolution, and remission
                            of all our sins.<br/>
                        </b>
                        <br/>

                        <blockquote>
                            <b>
                                <br/>
                                <i>V.</i> Turn thou us, O God our Saviour.<br/>
                                <i>R.</i> And let thine anger cease from us.<br/>
                                <i>V.</i> O God, make speed to save us.<br/>
                                <i>R.</i> O Lord, make haste to help us.<br/>
                            </b>
                            <br/>
                        </blockquote>

                        <b>
                            <i>Antiphon</i>: I will lay me down in peace.<br/>
                        </b>
                        <br/>
                        <br/>

                        <div class="text-center">
                            <i><b>Cum invocarem.</b></i> &nbsp; &nbsp; Psalm iv.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; HEAR me when I call, O God of my righteousness: * thou hast set me at
                            liberty when I was in trouble; have mercy upon me, and hearken unto my
                            prayer.<br/>
                            &nbsp; &nbsp; O ye sons of men, how long will ye blaspheme mine honour, * and have
                            such pleasure in vanity, and seek after falsehood?<br/>
                            &nbsp; &nbsp; Know this also, that the LORD hath chosen to himself the man that is
                            godly; * when I call upon the LORD he will hear me.<br/>
                            &nbsp; &nbsp; Stand in awe, and sin not; * commune with your own heart, and in your
                            chamber, and be still.<br/>
                            &nbsp; &nbsp; Offer the sacrifice of righteousness, * and put your trust in the LORD.<br/>
                            &nbsp; &nbsp; There be many that say, * Who will show us any good?<br/>
                            &nbsp; &nbsp; LORD, lift thou up * the light of thy countenance upon us.<br/>
                            &nbsp; &nbsp; Thou hast put gladness in my heart; * yea, more than when their corn
                            and wine and oil increase.<br/>
                            &nbsp; &nbsp; I will lay me down in peace, and take my rest; * for it is thou,
                            LORD, only, that makest me dwell in safety.<br/>
                        </b>
                        <br/>

                        <br/>
                        <div class="text-center">
                            <i><b>In te, Domine, speravi.</b></i> &nbsp; &nbsp; Psalm xxxi.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; IN thee, O LORD, have I put my trust; let me never be put to confusion;
                            * deliver me in thy righteousness.<br/>
                            &nbsp; &nbsp; Bow down thine ear to me; * make haste to deliver me.<br/>
                            &nbsp; &nbsp; And be thou my strong rock, and house of defence, * that thou mayest
                            save me.<br/>
                            &nbsp; &nbsp; For thou art my strong rock, and my castle: * be thou also my guide,
                            and lead me for thy Name's sake.<br/>
                            &nbsp; &nbsp; Draw me out of the net that they have laid privily for me; * for thou
                            art my strength.<br/>
                            &nbsp; &nbsp; Into thy hands I commend my spirit; * for thou hast redeemed me, O LORD,
                            thou God of truth.<br/>
                        </b>
                        <br/>

                        <br/>
                        <div class="text-center">
                            <i><b>Qui habitat.</b></i> &nbsp; &nbsp; Psalm xci.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; WHOSO dwelleth under the defence of the Most High, * shall abide under
                            the shadow of the Almighty.<br/>
                            &nbsp; &nbsp; I will say unto the LORD, Thou art my hope, and my stronghold; * my
                            God, in him will I trust.<br/>
                            &nbsp; &nbsp; For he shall deliver thee from the snare of the hunter, * and from the
                            noisome pestilence.<br/>
                            &nbsp; &nbsp; He shall defend thee under his wings, and thou shalt be safe under his
                            feathers; * his faithfulness and truth shall be thy shield and buckler.<br/>
                            &nbsp; &nbsp; Thou shalt not be afraid for any terror by night, * nor for the arrow
                            that flieth by day;<br/>
                            &nbsp; &nbsp; For the pestilence that walketh in darkness, * nor for the sickness
                            that destroyeth in the noon-day.<br/>
                            &nbsp; &nbsp; A thousand shall fall beside thee, and ten thousand at thy right hand;
                            * but it shall not come nigh thee.<br/>
                            &nbsp; &nbsp; Yea, with thine eyes shalt thou behold, * and see the reward of the
                            ungodly.<br/>
                            &nbsp; &nbsp; For thou, LORD, art my hope; * thou hast set thine house of defence
                            very high.<br/>
                            &nbsp; &nbsp; There shall no evil happen unto thee, * neither shall any plague
                            come nigh thy dwelling.<br/>
                            &nbsp; &nbsp; For he shall give his angels charge over thee, * to keep thee in all
                            thy ways.<br/>
                            &nbsp; &nbsp; They shall bear thee in their hands, * that thou hurt not thy
                            foot against a stone.<br/>
                            &nbsp; &nbsp; Thou shalt go upon the lion and adder: * the young lion and the dragon
                            shalt thou tread under thy feet.<br/>
                            &nbsp; &nbsp; Because he hath set his love upon me, therefore will I deliver him;
                            * I will set him up, because he hath known my Name.<br/>
                            &nbsp; &nbsp; He shall call upon me, and I will hear him; * yea, I am with him in
                            trouble; I will deliver him, and bring him to honour.<br/>
                            &nbsp; &nbsp; With long life will I satisfy him, * and show him my salvation.<br/>
                        </b>
                        <br/>

                        <br/>
                        <div class="text-center">
                            <i><b>Ecce nunc.</b></i> &nbsp; &nbsp; Psalm cxxxiv.<br/>
                        </div>
                        <br/>

                        <b>
                            &nbsp; &nbsp; BEHOLD now, praise the LORD, * all ye servants of the LORD;<br/>
                            &nbsp; &nbsp; Ye that by night stand in the house of the LORD, * even in the courts
                            of the house of our God.<br/>
                            &nbsp; &nbsp; Lift up your hands in the sanctuary, * and praise the LORD.<br/>
                            &nbsp; &nbsp; The LORD that made heaven and earth * give thee blessing out of Sion.<br/>
                            <br/>

                            <i>Antiphon</i>: I will lay me down in peace, and take my rest, for it is Thou,
                            Lord, only that makest me dwell in safety.
                            <br/>&nbsp;<br/>
                        </b>
                        <br/>

                        <div class="text-center"><i>(Here may be sung a Hymn)</i></div>
                        <br/>
                        <div class="text-center"><A HREF="office/comp">View Music &amp; Lyrics for the Hymn &nbsp;&nbsp;<i class="fa-solid fa-music"></i></div>
                        <a id="comphym">&nbsp;</A>
                        <br/>
                        <br/>


                        <div class="text-center">
                            <h3>
                                Hymn.<br/>
                            </h3>
                        </div>
                        <br/>
                        <blockquote>
                            <blockquote>

                                <b>
                                    To thee before the close of day,<br/>
                                    Creator of the world, we pray,<br/>
                                    That, with thy wonted favour, thou<br/>
                                    Wouldst be our guard and keeper now.<br/>
                                    <br/>
                                    From all ill dreams defend our sight,<br/>
                                    From fears and terrors of the night,<br/>
                                    Withhold from us our Ghostly foe,<br/>
                                    That spot of sin we may not know.<br/>
                                    <br/>
                                    O Father, that we ask be done,<br/>
                                    Through Jesus Christ, thine only Son,<br/>
                                    Who, with the Holy Ghost and thee,<br/>
                                    Doth live and reign eternally.<br/>
                                    <br/>
                                </b>
                            </blockquote>
                        </blockquote>
                        <br/>


                        <div class="text-center">
                            <b>The Chapter.</b> &nbsp; &nbsp; <i>Jeremiah 14:9</i><br/>
                        </div>
                        <br/>

                        <b>
                            Thou, O Lord, art in the midst of us, and we are called by thy Name.
                            Leave us not, O Lord our God.<br/>
                        </b>
                        <br/>

                        <blockquote>
                            <b>
                                <i>V.</i> But Thou, O Lord, have mercy upon us.<br/>
                                <i>R.</i> Thanks be to God.<br/>
                                <i>V.</i> Into Thy hands, O Lord, I commend my spirit.<br/>
                                <i>R.</i> For thou hast redeemed me, O Lord, thou God of truth.<br/>
                                <i>V.</i> Keep us, O Lord, as the apple of an eye.<br/>
                                <i>R.</i> Hide us under the shadow of Thy wings.<br/>
                            </b>
                            <br/>
                        </blockquote>

                        <br/><br/>
                        <div class="text-center"><i><b>Nunc Dimittis</b></i></div>
                        <br/>

                        <b>
                            Lord, now lettest thou thy servant depart in peace, according to thy
                            word, for mine eyes have seen thy salvation which thou hast prepared before
                            the face of all people, to be a light to lighten the Gentiles, and to be
                            the glory of thy people Israel.<br/>
                            <br/>

                            <i>Antiphon</i>: Save us O Lord, watching, guard us sleeping, that we may watch
                            with Christ, and rest in peace.<br/>
                        </b>
                        <br/>

                        <blockquote>
                            <b>
                                <i>V.</i> Lord, have mercy upon us.<br/>
                                <i>R.</i> Christ, have mercy upon us.<br/>
                                <i>V.</i> Lord, have mercy upon us.<br/>
                            </b>
                            <br/>
                        </blockquote>

                        <b>
                            OUR Father, who art in heaven, Hallowed be thy Name. Thy kingdom
                            come. Thy will be done, On earth as it is in heaven. Give us this day our
                            daily bread. And forgive us our trespasses, As we forgive those who
                            trespass against us. And lead us not into temptation, But deliver
                            us from evil. For thine is the kingdom, and the power, and the glory,
                            for ever and ever. Amen.<br/>
                        </b>
                        <br/>

                        <blockquote>
                            <b>
                                <i>V.</i> Blessed art thou, O Lord God of our fathers.<br/>
                                <i>R.</i> And greatly to be praised and glorified for ever.<br/>
                                <i>V.</i> Let us bless the Father, and the Son, and the Holy Ghost.<br/>
                                <i>R.</i> Let us praise and exalt Him for ever.<br/>
                                <i>V.</i> Blessed be Thou, O Lord, in the firmament of heaven.<br/>
                                <i>R.</i> And greatly to be praised and glorified, and highly exalted forever.<br/>
                                <i>V.</i> The Almighty and merciful Lord bless and protect us.<br/>
                                <i>R.</i> And defend us from all perils and dangers of this night.<br/>
                                <i>V.</i> Vouchsafe, O Lord.<br/>
                                <i>R.</i> To keep us this night without sin.<br/>
                                <i>V.</i> O Lord, have mercy upon us.<br/>
                                <i>R.</i> Have mercy upon us.<br/>
                                <i>V.</i> O Lord, let Thy mercy lighten upon us.<br/>
                                <i>R.</i> As our trust is in Thee.<br/>
                                <i>V.</i> Lord, hear our prayer.<br/>
                                <i>R.</i> And let our cry come unto thee.<br/>
                                <i>V.</i> Let us pray.<br/>
                            </b>
                            <br/>
                        </blockquote>

                        <b>
                            Visit, we beseech Thee, O Lord, this habitation, and drive far from
                            it all the snares of the enemy. Let Thy holy angels abide in it to
                            preserve us in peace, and let Thy blessing be ever upon us, through Jesus
                            Christ our Lord.<br/>
                        </b>
                        <br/>

                        <blockquote>
                            <b>
                                <i>V.</i> The Lord be with you.<br/>
                                <i>R.</i> And with thy spirit.<br/>
                                <i>V.</i> Let us bless the Lord.<br/>
                                <i>R.</i> Thanks be to God.<br/>
                                <br/>

                                <i>V.</i> May the Lord Almighty and merciful, the Father, the Son, and
                                the Holy Ghost, vouchsafe to bless us and keep us.
                                <br/><i>R.</i> Amen.<br/>
                            </b>
                            <br/>
                        </blockquote>
                    </blockquote>


                    <div class="text-center">
                        <small>
                            <i><b>Here ends the Order for Compline</b></i>
                        </small>
                    </div>

                </blockquote>

            </blockquote>
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
