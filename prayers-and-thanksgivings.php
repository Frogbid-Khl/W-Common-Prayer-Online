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
    <title>Prayers and Thanksgivings - Common Prayer Online</title>
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
                           href="daily-office">Daily Offices</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="psalter">Psalter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#">
                            1st<br/>
                            Lesson
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#">
                            2nd<br/>
                            Lesson
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="collects">Collect</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="penitential-office">Penitential Office</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="family-prayer">Family Prayer</a>
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
            <h1 class="cpo-content-page-title">
                PRAYERS AND THANKSGIVINGS
            </h1>
            <p>As Written in the 1928 Book of Common Prayer</p>
        </div>
        <div class="col-lg-12 text-center mt-3">
            <p>Developed and Presented by</p>
            <h3>www.CommonPrayerOnline.org</h3>
            <p>An Independent, Traditional</p>
            <p>1928 BCP Ministry</p>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#prayer">Prayers</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#thanks">Thanksgivings</a>
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
                <a id="prayer">&nbsp;</a>
                <div class="text-center"><h3>PRAYERS.</h3></div>
                <div class="text-center">
                    <i>To be used before the Prayer for all Conditions of Men, or,
                        when that is not said, <br/>
                        before the final Prayer of Thanksgiving or of Blessing,
                        or before the Grace.<br/></i>
                    <br/>
                </div>
                <table width="100%">
                    <tbody>
                    <tr>
                        <td>
                            <a href="#pray01"> <small>A Prayer for Congress.</small></a>
                        </td>
                        <td>
                            <a href="#pray13"> <small>For Fair Weather.</small></a>
                        </td>
                        <td>
                            <a href="#pray24"> <small>For Christian Service.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray02"> <small>For a State Legislature.</small></a>
                        </td>
                        <td>
                            <a href="#pray14"> <small>In Time of Dearth and Famine.</small></a>
                        </td>
                        <td>
                            <a href="#pray25"> <small>For Social Justice.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray03"> <small>For Courts of Justice.</small></a>
                        </td>
                        <td>
                            <a href="#pray15"> <small>In Time of War and Tumults.</small></a>
                        </td>
                        <td>
                            <a href="#pray26"> <small>For Every Man in his Work.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray04"> <small>For Our Country.</small></a>
                        </td>
                        <td>
                            <a href="#pray16"> <small>In Time of Calamity.</small></a>
                        </td>
                        <td>
                            <a href="#pray27"> <small>For the Family of Nations.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray05"> <small>At Meetings of Convention.</small></a>
                        </td>
                        <td>
                            <a href="#pray17"> <small>For the Army.</small></a>
                        </td>
                        <td>
                            <a href="#pray28"> <small>In Time of Great Sickness and Mortality.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray06"> <small>For the Church.</small></a>
                        </td>
                        <td>
                            <a href="#pray18"> <small>For the Navy.</small></a>
                        </td>
                        <td>
                            <a href="#pray29"> <small>For a Sick Person.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray07"> <small>For the Unity of God's People.</small></a>
                        </td>
                        <td>
                            <a href="#pray19"> <small>Memorial Days.</small></a>
                        </td>
                        <td>
                            <a href="#pray30"> <small>For a Sick Child.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray08"> <small>For Missions.</small></a>
                        </td>
                        <td>
                            <a href="#pray20"> <small>For Schools, Colleges, and Universities.</small></a>
                        </td>
                        <td>
                            <a href="#pray31"> <small>For a Person under Affliction.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray09"> <small>For those to be admitted into Holy Orders.</small></a>
                        </td>
                        <td>
                            <a href="#pray21"> <small>For Religious Education.</small></a>
                        </td>
                        <td>
                            <a href="#pray32"> <small>For a Person, or Persons, going to Sea.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray10"> <small>For the Increase of the Ministry.</small></a>
                        </td>
                        <td>
                            <a href="#pray22"> <small>For Children.</small></a>
                        </td>
                        <td>
                            <a href="#pray33"> <small>For Prisoners.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray11"> <small>For Fruitful Seasons.</small></a>
                        </td>
                        <td>
                            <a href="#pray23"> <small>For those about to be Confirmed.</small></a>
                        </td>
                        <td>
                            <a href="#pray34"> <small>A Bidding Prayer.</small></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#pray12"> <small>For Rain.</small></a>
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            Additional Prayers <i>(from</i> <a href="../offices/family.cfm"> <i>"Family Prayer"</i></a>
                            <i>and</i> <a href="../offices/vis_sick.cfm"><i>"The Visitation of the Sick")</i> </a><br/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray35"> <small>For Recovery.</small></a>
                        </td>
                        <td>
                            <a href="#pray36"> <small>For Healing.</small></a>
                        </td>
                        <td>
                            <a href="#pray37"> <small>For the Sick with Small Hope of Recovery.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray38"> <small>For the Despondent.</small></a>
                        </td>
                        <td>
                            <a href="#pray41"> <small>For the Spirit of Prayer.</small></a>
                        </td>
                        <td>
                            <a href="#pray52"> <small>For the Recovery of a Sick Person.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray42"> <small>In the Morning.</small></a>
                        </td>
                        <td>
                            <a href="#pray53"> <small>For One about to undergo an Operation.</small></a>
                        </td>
                        <td>
                            <a href="#pray43"> <small>At Night.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray54"> <small>For a Birthday.</small></a>
                        </td>
                        <td>
                            <a href="#pray44"> <small>Sunday Morning.</small></a>
                        </td>
                        <td>
                            <a href="#pray55"> <small>For an Anniversary of One Departed.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray45"> <small>For Quiet Confidence.</small></a>
                        </td>
                        <td>
                            <a href="#pray56"> <small>For Those in Mental Darkness.</small></a>
                        </td>
                        <td>
                            <a href="#pray46"> <small>For Guidance.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray50"> <small>For the Absent.</small></a>
                        </td>
                        <td>
                            <a href="#pray47"> <small>For Trustfulness.</small></a>
                        </td>
                        <td>
                            <a href="#pray58"> <small>For all Poor, Homeless, and Neglected Folk.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray48"> <small>For Joy in God's Creation.</small></a>
                        </td>
                        <td>
                            <a href="#pray60"> <small>A General Intercession.</small></a>
                        </td>
                        <td>
                            <a href="#pray49"> <small>For the Children.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#pray61"> <small>Grace before Meat.</small></a>
                        </td>
                        <td>
                            <a href="#pray57"> <small>For a Blessing on the Families of the Land.</small></a>
                        </td>
                        <td>
                            <a href="#pray51"> <small>For Those We Love.</small></a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <a href="#pray59"> <small>For Faithfulness in the Use of this World's Goods.</small></a>
                        </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>

                    </tbody>
                </table>

                <hr>
                <blockquote>

                    <a id="pray01">&nbsp;</a>

                    <div class="text-center"><b>
                        <i>A Prayer for Congress.</i><br/>
                    </b>

                        <small><i>To be used during their Session.</i></small></div>
                    <br/>
                    <b>

                        MOST gracious God, we humbly beseech thee, as for the
                        people of these United States in general, so especially for
                        their Senate and Representatives in Congress assembled;
                        that thou wouldest be pleased to direct and prosper all
                        their consultations, to the advancement of thy glory, the
                        good of thy Church, the safety, honour, and welfare of thy
                        people; that all things may be so ordered and settled by
                        their endeavours, upon the best and surest foundations,
                        that peace and happiness, truth and justice, religion and
                        piety, may be established among us for all generations.
                        These and all other necessaries, for them, for us, and thy
                        whole Church, we humbly beg in the Name and
                        mediation of Jesus Christ, our most blessed Lord and
                        Saviour. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray02">&nbsp;</a>
                    <div class="text-center"><i><b>For a State Legislature.</b></i></div>
                    <br/>

                    <b>
                        O GOD, the fountain of wisdom, whose statutes are good
                        and gracious and whose law is truth; We beseech thee so
                        to guide and bless the Legislature of this State, that it
                        may ordain for our governance only such things as please
                        thee, to the glory of thy Name and the welfare of the
                        people; through Jesus Christ, thy Son, our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray03">&nbsp;</a>
                    <div class="text-center"><i><b>For Courts of Justice.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, who sittest in the throne judging right;
                        We humbly beseech thee to bless the courts of justice and
                        the magistrates in all this land; and give unto them the
                        spirit of wisdom and understanding, that they may
                        discern the truth, and impartially administer the law in
                        the fear of thee alone; through him who shall come to be
                        our Judge, thy Son, our Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray04">&nbsp;</a>
                    <div class="text-center"><i><b>For Our Country.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, who hast given us this good land for
                        our heritage; We humbly beseech thee that we may
                        always prove ourselves a people mindful of thy favour
                        and glad to do thy will. Bless our land with honourable
                        industry, sound learning, and pure manners. Save us
                        from violence, discord, and confusion; from pride and
                        arrogancy, and from every evil way. Defend our liberties,
                        and fashion into one united people the multitudes
                        brought hither out of many kindreds and tongues. Endue
                        with the spirit of wisdom those to whom in thy Name we
                        entrust the authority of government, that there may be
                        justice and peace at home, and that, through obedience to
                        thy law, we may show forth thy praise among the nations
                        of the earth. In the time of prosperity, fill our hearts
                        with thankfulness, and in the day of trouble, suffer not
                        our trust in thee to fail; all which we ask through Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray05">&nbsp;</a>
                    <div class="text-center"><i><b>A Prayer to be used at the Meetings of Convention.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY and everlasting God, who by thy Holy Spirit
                        didst preside in the Council of the blessed Apostles, and
                        hast promised, through thy Son Jesus Christ, to be with
                        thy Church to the end of the world; We beseech thee to be
                        with the Council of thy Church here assembled in thy
                        Name and Presence. Save us from all error, ignorance,
                        pride, and prejudice; and of thy great mercy vouchsafe,
                        we beseech thee, so to direct, sanctify, and govern us in
                        our work, by the mighty power of the Holy Ghost, that
                        the comfortable Gospel of Christ may be truly preached,
                        truly received, and truly followed, in all places, to the
                        breaking down the kingdom of sin, Satan, and death; till
                        at length the whole of thy dispersed sheep, being
                        gathered into one fold, shall become partakers of
                        everlasting life; through the merits and death of Jesus
                        Christ our Saviour. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <blockquote>
                        <small><i>During, or before, the session of any General or Diocesan Convention, the
                            above Prayer may be used by all Congregations of this Church, or of the
                            Diocese concerned; the clause,</i> here assembled in thy Name, <i>being changed to
                        </i>now assembled (<i>or</i> about to assemble) in thy Name and Presence;<i> and the
                            clause,</i> govern us in our work,<i> to </i>govern them in their work.</small><br/>
                    </blockquote>
                    <br/>

                    <a id="pray06">&nbsp;</a>
                    <div class="text-center"><i><b>For the Church.</b></i></div>
                    <br/>

                    <b>
                        O GRACIOUS Father, we humbly beseech thee for thy
                        holy Catholic Church; that thou wouldest be pleased to
                        fill it with all truth, in all peace. Where it is corrupt,
                        purify it; where it is in error, direct it; where in any thing
                        it is amiss, reform it. Where it is right, establish it;
                        where it is in want, provide for it; where it is divided,
                        reunite it; for the sake of him who died and rose again,
                        and ever liveth to make intercession for us, Jesus Christ,
                        thy Son, our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray07">&nbsp;</a>
                    <div class="text-center"><i><b>For the Unity of God's People.</b></i></div>
                    <br/>

                    <b>
                        O GOD, the Father of our Lord Jesus Christ, our only
                        Saviour, the Prince of Peace; Give us grace seriously to
                        lay to heart the great dangers we are in by our unhappy
                        divisions. Take away all hatred and prejudice, and
                        whatsoever else may hinder us from godly union and
                        concord: that as there is but one Body and one Spirit, and
                        one hope of our calling, one Lord, one Faith, one Baptism,
                        one God and Father of us all, so we may be all of one
                        heart and of one soul, united in one holy bond of truth
                        and peace, of faith and charity, and may with one mind
                        and one mouth glorify thee; through Jesus Christ our
                        Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray08">&nbsp;</a>
                    <div class="text-center"><i><b>For Missions.</b></i></div>
                    <br/>

                    <b>
                        O GOD, who hast made of one blood all nations of men
                        for to dwell on the face of the whole earth, and didst send
                        thy blessed Son to preach peace to them that are far off
                        and to them that are nigh; Grant that all men
                        everywhere may seek after thee and find thee. Bring the
                        nations into thy fold, pour out thy Spirit upon all flesh,
                        and hasten thy kingdom; through the same thy Son Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <div class="text-center"><i><small>Or this.</small></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, whose compassions fail not, and whose
                        loving-kindness reacheth unto the world's end; We give
                        thee humble thanks for opening heathen lands to the
                        light of thy truth; for making paths in the deep waters
                        and highways in the desert; and for planting thy Church
                        in all the earth. Grant, we beseech thee, unto us thy
                        servants, that with lively faith we may labour abundantly
                        to make known to all men thy blessed gift of eternal life;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray09">&nbsp;</a>
                    <div class="text-center"><i><b>For those who are to be admitted into Holy Orders.</b></i><br/>

                        <small><i>To be used in the Weeks preceding the stated Times of Ordination.</i></small>
                    </div>
                    <br/>

                    <b>
                        ALMIGHTY God, our heavenly Father, who hast
                        purchased to thyself an universal Church by the precious
                        blood of thy dear Son; Mercifully look upon the same, and
                        at this time so guide and govern the minds of thy
                        servants the Bishops and Pastors of thy flock, that they
                        may lay hands suddenly on no man, but faithfully and
                        wisely make choice of fit persons, to serve in the sacred
                        Ministry of thy Church. And to those who shall be
                        ordained to any holy function, give thy grace and
                        heavenly benediction; that both by their life and doctrine
                        they may show forth thy glory, and set forward the
                        salvation of all men; through Jesus Christ our Lord.
                        <i>Amen.</i><br/>
                    </b>

                    <br/>
                    <div class="text-center"><i><small>Or this.</small></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, the giver of all good gifts, who of thy
                        divine providence hast appointed divers Orders in thy
                        Church; Give thy grace, we humbly beseech thee, to all
                        those who are to be called to any office and
                        administration in the same; and so replenish them with
                        the truth of thy doctrine, and endue them with innocency
                        of life, that they may faithfully serve before thee, to the
                        glory of thy great Name, and the benefit of thy holy
                        Church; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray10">&nbsp;</a>
                    <div class="text-center"><i><b>For the Increase of the Ministry.</b></i></div>
                    <br/>

                    <b>
                        O ALMIGHTY God, look mercifully upon the world which
                        thou hast redeemed by the blood of thy dear Son, and
                        incline the hearts of many to dedicate themselves to the
                        sacred Ministry of thy Church; through the same thy Son
                        Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray11">&nbsp;</a>
                    <div class="text-center"><i><b>For Fruitful Seasons.</b></i><br/>

                        <small><i>To be used on Rogation Sunday and the Rogation Days.</i></small></div>
                    <br/>

                    <b>
                        ALMIGHTY God, who hast blessed the earth that it
                        should be fruitful and bring forth whatsoever is needful
                        for the life of man, and hast commanded us to work with
                        quietness, and eat our own bread; Bless the labours of the
                        husbandman, and grant such seasonable weather that we
                        may gather in the fruits of the earth, and ever rejoice in
                        thy goodness, to the praise of thy holy Name; through
                        Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>

                    <div class="text-center"><i><small>Or this.</small></i></div>
                    <br/>

                    <b>
                        O GRACIOUS Father, who openest thine hand and fillest
                        all things living with plenteousness; We beseech thee of
                        thine infinite goodness to hear us, who now make our
                        prayers and supplications unto thee. Remember not our
                        sins, but thy promises of mercy. Vouchsafe to bless the
                        lands and multiply the harvests of the world. Let thy
                        breath go forth that it may renew the face of the earth.
                        Show thy loving-kindness, that our land may give her
                        increase; and so fill us with good things that the poor and
                        needy may give thanks unto thy Name; through Christ
                        our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray12">&nbsp;</a>
                    <div class="text-center"><i><b>For Rain.</b></i></div>
                    <br/>

                    <b>
                        O GOD, heavenly Father, who by thy Son Jesus Christ
                        hast promised to all those who seek thy kingdom, and the
                        righteousness thereof, all things necessary to their bodily
                        sustenance; Send us, we beseech thee, in this our
                        necessity, such moderate rain and showers, that we may
                        receive the fruits of the earth to our comfort, and to thy
                        honour; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray13">&nbsp;</a>
                    <div class="text-center"><i><b>For Fair Weather.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY and most merciful Father, we humbly
                        beseech thee, of thy great goodness, to restrain those
                        immoderate rains, wherewith thou hast afflicted us. And
                        we pray thee to send us such seasonable weather, that
                        the earth may, in due time, yield her increase for our use
                        and benefit; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray14">&nbsp;</a>
                    <div class="text-center"><i><b>In Time of Dearth and Famine.</b></i></div>
                    <br/>

                    <b>
                        O GOD, heavenly Father, whose gift it is that the rain
                        doth fall, and the earth bring forth her increase; Behold,
                        we beseech thee, the afflictions of thy people; increase the
                        fruits of the earth by thy heavenly benediction; and grant
                        that the scarcity and dearth, which we now most justly
                        suffer for our sins, may, through thy goodness, be
                        mercifully turned into plenty; fortune love of Jesus Christ
                        our Lord, to whom, with thee and the Holy Ghost, be all
                        honour and glory, now and for ever. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray15">&nbsp;</a>
                    <div class="text-center"><i><b>In Time of War and Tumults.</b></i></div>
                    <br/>

                    <b>
                        O ALMIGHTY God, the supreme Governor of all things,
                        whose power no creature is able to resist, to whom it
                        belongeth justly to punish sinners, and to be merciful to
                        those who truly repent; Save and deliver us, we humbly
                        beseech thee, from the hands of our enemies; that we,
                        being armed with thy defence, may be preserved
                        evermore from all perils, to glorify thee, who art the only
                        giver of all victory; through the merits of thy Son, Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray16">&nbsp;</a>
                    <div class="text-center"><i><b>In Time of Calamity.</b></i></div>
                    <br/>

                    <b>
                        O GOD, merciful and compassionate, who art ever ready
                        to hear the prayers of those who put their trust in thee;
                        Graciously hearken to us who call upon thee, and grant
                        us thy help in this our need; through Jesus Christ our
                        Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray17">&nbsp;</a>
                    <div class="text-center"><i><b>For the Army.</b></i></div>
                    <br/>

                    <b>
                        O LORD God of Hosts, stretch forth, we pray thee, thine
                        almighty arm to strengthen and protect the soldiers of
                        our country. Support them in the day of battle, and in
                        the time of peace keep them safe from all evil; endue
                        them with courage and loyalty; and grant that in all
                        things they may serve without reproach; through Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray18">&nbsp;</a>
                    <div class="text-center"><i><b>For the Navy.</b></i></div>
                    <br/>

                    <b>
                        ETERNAL Lord God, who alone spreadest out the
                        heavens, and rulest the raging of the sea; Vouchsafe to
                        take into thy almighty and most gracious protection our
                        country's Navy, and all who serve therein. Preserve
                        them from the dangers of the sea, and from the violence
                        of the enemy; that they may be a safeguard unto the
                        United States of America, and a security for such as pass
                        on the seas upon their lawful occasions; that the
                        inhabitants of our land may in peace and quietness serve
                        thee our God, to the glory of thy Name; through Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray19">&nbsp;</a>
                    <div class="text-center"><i><b>Memorial Days.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, our heavenly Father, in whose hands
                        are the living and the dead; We give thee thanks for all
                        those thy servants who have laid down their lives in the
                        service of our country. Grant to them thy mercy and the
                        light of thy presence, that the good work which thou hast
                        begun in them may be perfected; through Jesus Christ
                        thy Son our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray20">&nbsp;</a>
                    <div class="text-center"><i><b>For Schools, Colleges, and Universities.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, we beseech thee, with thy gracious
                        favour to behold our universities, colleges, and schools,
                        that knowledge may be increased among us, and all good
                        learning flourish and abound. Bless all who teach and all
                        who learn; and grant that in humility of heart they may
                        ever look unto thee, who art the fountain of all wisdom;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray21">&nbsp;</a>
                    <div class="text-center"><i><b>For Religious Education.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, our heavenly Father, who hast
                        committed to thy holy Church the care and nurture of thy
                        children; Enlighten with thy wisdom those who teach and
                        those who learn, that, rejoicing in the knowledge of thy
                        truth, they may worship thee and serve thee from
                        generation to generation; through Jesus Christ our Lord.
                        <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray22">&nbsp;</a>
                    <div class="text-center"><i><b>For Children.</b></i></div>
                    <br/>

                    <b>
                        O LORD Jesus Christ, who dost embrace children with
                        the arms of thy mercy, and dost make them living
                        members of thy Church; Give them grace, we pray thee,
                        to stand fast in thy faith, to obey thy word, and to abide
                        in thy love; that, being made strong by thy Holy Spirit,
                        they may resist temptation and overcome evil, and may
                        rejoice in the life that now is, and dwell with thee in the
                        life that is to come; through thy merits, O merciful
                        Saviour, who with the Father and the Holy Ghost livest
                        and reignest one God, world without end. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray23">&nbsp;</a>
                    <div class="text-center"><i><b>For those about to be Confirmed.</b></i></div>
                    <br/>

                    <b>
                        O GOD, who through the teaching of thy Son Jesus
                        Christ didst prepare the disciples for the coming of the
                        Comforter; Make ready, we beseech thee, the hearts and
                        minds of thy servants who at this time are seeking to be
                        strengthened by the gift of the Holy Spirit through the
                        laying on of hands, that, drawing near with penitent and
                        faithful hearts, they may evermore be filled with the
                        power of his divine indwelling; through the same Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray24">&nbsp;</a>
                    <div class="text-center"><i><b>For Christian Service.</b></i></div>
                    <br/>

                    <b>
                        O LORD, our heavenly Father, whose blessed Son came
                        not to be ministered unto, but to minister; We beseech
                        thee to bless all who, following in his steps, give
                        themselves to the service of their fellow men. Endue
                        them with wisdom, patience, and courage to strengthen
                        the weak and raise up those who fall; that, being inspired
                        by thy love, they may worthily minister in thy Name to
                        the suffering, the friendless, and the needy; for the sake
                        of him who laid down his life for us, the same thy Son,
                        our Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray25">&nbsp;</a>
                    <div class="text-center"><i><b>For Social Justice.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, who hast created man in thine own
                        image; Grant us grace fearlessly to contend against evil,
                        and to make no peace with oppression; and, that we may
                        reverently use our freedom, help us to employ it in the
                        maintenance of justice among men and nations, to the
                        glory of thy holy Name; through Jesus Christ our Lord.
                    </b>
                    <i>Amen.</i><br/>
                    <br/>


                    <a id="pray26">&nbsp;</a>
                    <div class="text-center"><i><b>For Every Man in his Work.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, our heavenly Father, who declarest thy
                        glory and showest forth thy handiwork in the heavens
                        and in the earth; Deliver us, we beseech thee, in our
                        several callings, from the service of mammon, that we
                        may do the work which thou givest us to do, in truth, in
                        beauty, and in righteousness, with singleness of heart as
                        thy servants, and to the benefit of our fellow men; for the
                        sake of him who came among us as one that serveth, thy
                        Son Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray27">&nbsp;</a>
                    <div class="text-center"><i><b>For the Family of Nations.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, our heavenly Father, guide, we beseech
                        thee, the Nations of the world into the way of justice and
                        truth, and establish among them that peace which is the
                        fruit of righteousness, that they may become the
                        Kingdom of our Lord and Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray28">&nbsp;</a>
                    <div class="text-center"><i><b>In Time of Great Sickness and Mortality.</b></i></div>
                    <br/>

                    <b>
                        O MOST mighty and merciful God, in this time of
                        grievous sickness, we flee unto thee for succour. Deliver
                        us, we beseech thee, from our peril; give strength and
                        skill to all those who minister to the sick; prosper the
                        means made use of for their cure; and grant that,
                        perceiving how frail and uncertain our life is, we may
                        apply our hearts unto that heavenly wisdom which
                        leadeth to eternal life; through Jesus Christ our Lord.
                    </b>
                    <i>Amen.</i><br/>
                    <br/>


                    <a id="pray29">&nbsp;</a>
                    <div class="text-center"><i><b>For a Sick Person.</b></i></div>
                    <br/>

                    <b>
                        O FATHER of mercies and God of all comfort, our only
                        help in time of need; We humbly beseech thee to behold,
                        visit, and relieve thy sick servant [N.] for whom our
                        prayers are desired. Look upon him with the eyes of thy
                        mercy; comfort him with a sense of thy goodness;
                        preserve him from the temptations of the enemy; and
                        give him patience under his affliction. In thy good time,
                        restore him to health, and enable him to lead the residue
                        of his life in thy fear, and to thy glory; and grant that
                        finally he may dwell with thee in life everlasting; through
                        Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray30">&nbsp;</a>
                    <div class="text-center"><i><b>For a Sick Child.</b></i></div>
                    <br/>

                    <b>
                        HEAVENLY Father, watch with us, we pray thee, over
                        the sick child for whom our prayers are offered, and grant
                        that he may be restored to that perfect health which it is
                        thine alone to give; through Jesus Christ our Lord.
                    </b>
                    <i>Amen.</i><br/>
                    <br/>


                    <a id="pray31">&nbsp;</a>
                    <div class="text-center"><i><b>For a Person under Affliction.</b></i></div>
                    <br/>

                    <b>
                        O MERCIFUL God, and heavenly Father, who hast
                        taught us in thy holy Word that thou dost not willingly
                        afflict or grieve the children of men; Look with pity, we
                        beseech thee, upon the sorrows of thy servant for whom
                        our prayers are offered. Remember him, O Lord, in
                        mercy; endue his soul with patience; comfort him with a
                        sense of thy goodness; lift up thy countenance upon him,
                        and give him peace; through Jesus Christ our Lord.
                    </b>
                    <i>Amen.</i><br/>
                    <br/>


                    <a id="pray32">&nbsp;</a>
                    <div class="text-center"><i><b>For a Person, or Persons, going to Sea.</b></i></div>
                    <br/>

                    <b>
                        O ETERNAL God, who alone spreadest out the heavens,
                        and rulest the raging of the sea; We commend to thy
                        almighty protection, thy servant, for whose preservation
                        on the great deep our prayers are desired. Guard him,
                        we beseech thee, from the dangers of the sea, from
                        sickness, from the violence of enemies, and from every
                        evil to which he may be exposed. Conduct him in safety
                        to the haven where he would be, with a grateful sense of
                        thy mercies; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray33">&nbsp;</a>
                    <div class="text-center"><i><b>For Prisoners.</b></i></div>
                    <br/>

                    <b>
                        O GOD, who sparest when we deserve punishment, and
                        in thy wrath rememberest mercy; We humbly beseech
                        thee, of thy goodness, to comfort and succour all prisoners
                        [especially those who are condemned to die]. Give them a
                        right understanding of themselves, and of thy promises;
                        that, trusting wholly in thy mercy, they may not place
                        their confidence anywhere but in thee. Relieve the
                        distressed, protect the innocent, awaken the guilty; and
                        forasmuch as thou alone bringest light out of darkness,
                        and good out of evil, grant to these thy servants, that by
                        the power of thy Holy Spirit they may be set free from the
                        chains of sin, and may be brought to newness of life;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray34">&nbsp;</a>
                    <div class="text-center"><i><b>A Bidding Prayer.</b></i><br/>
                        <small><i>To be used before Sermons, or on Special Occasions.<br/>

                            And NOTE, That the Minister, in his discretion, may omit any of the clauses
                            in this Prayer, or may add others, as occasion may require.</i></small><br/>
                    </div>
                    <br/>


                    <b>
                        GOOD Christian People, I bid your prayers for Christ's
                        holy Catholic Church, the blessed company of all faithful
                        people; that it may please God to confirm and strengthen
                        it in purity of faith, in holiness of life, and in perfectness
                        of love, and to restore to it the witness of visible unity;
                        and more especially for that branch of the same planted
                        by God in this land, whereof we are members; that in all
                        things it may work according to God's will, serve him
                        faithfully, and worship him acceptably.<br/>
                        <br/>

                        Ye shall pray for the President of these United States,
                        and for the Governor of this State, and for all that are in
                        authority; that all, and every one of them, may serve
                        truly in their several callings to the glory of God, and the
                        edifying and well-governing of the people, remembering
                        the account they shall be called upon to give at the last
                        great day.<br/>
                        <br/>

                        Ye shall also pray for the ministers of God's Holy Word
                        and Sacraments; for Bishops [and herein more especially
                        for the Bishop of this Diocese], that they may minister
                        faithfully and wisely the discipline of Christ; likewise for
                        all Priests and Deacons [and herein more especially for
                        the Clergy here residing], that they may shine as lights
                        in the world, and in all things may adorn the doctrine of
                        God our Saviour.<br/>
                        <br/>

                        And ye shall pray for a due supply of persons fitted to
                        serve God in the Ministry and in the State; and to that
                        end, as well as for the good education of all the youth of
                        this land, ye shall pray for all schools, colleges, and
                        seminaries of sound and godly learning, and for all whose
                        hands are open for their maintenance; that whatsoever
                        tends to the advancement of true religion and useful
                        learning may for ever flourish and abound.<br/>
                        <br/>

                        Ye shall pray for all the people of these United States,
                        that they may live in the true faith and fear of God, and
                        in brotherly charity one towards another.<br/>
                        <br/>

                        Ye shall pray also for all who travel by land, sea, or air;
                        for all prisoners and captives; for all who are in sickness
                        or in sorrow; for all who have fallen into grievous sin; for
                        all who, through temptation, ignorance, helplessness,
                        grief, trouble, dread, or the near approach of death,
                        especially need our prayers.<br/>
                        <br/>

                        Ye shall also praise God for rain and sunshine; for the
                        fruits of the earth; for the products of all honest industry;
                        and for all his good gifts, temporal and spiritual, to us
                        and to all men.<br/>
                        <br/>

                        Finally, ye shall yield unto God most high praise and
                        hearty thanks for the wonderful grace and virtue
                        declared in all his saints, who have been the choice
                        vessels of his grace and the lights of the world in their
                        several generations; and pray unto God, that we may
                        have grace to direct our lives after their good examples;
                        that, this life ended, we may be made partakers with
                        them of the glorious resurrection, and the life everlasting.<br/>
                        <br/>

                        And now, brethren, summing up all our petitions, and all
                        our thanksgivings, in the words which Christ hath taught
                        us, we make bold to say,<br/>
                        <br/>

                        OUR Father, who art in heaven, Hallowed be thy Name.
                        Thy kingdom come. Thy will be done, On earth as it is in
                        heaven. Give us this day our daily bread. And forgive us
                        our trespasses, As we forgive those who trespass against
                        us. And lead us not into temptation, But deliver us from
                        evil. For thine is the kingdom, and the power, and the
                        glory, for ever and ever. Amen.<br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray35">&nbsp;</a>
                    <div class="text-center"><i><b>A Prayer for Recovery.</b></i></div>
                    <br/>

                    <b>
                        O GOD of heavenly powers, who, by the might of thy
                        command, drivest away from men's bodies all sickness
                        and all infirmity; Be present in thy goodness with this thy
                        servant, that his weakness may be banished and his strength
                        recalled; that his health being thereupon restored, he may
                        bless thy holy Name; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray36">&nbsp;</a>
                    <div class="text-center"><i><b>A Prayer for Healing.</b></i></div>
                    <br/>

                    <b>
                        O ALMIGHTY God, who art the giver of all health,
                        and the aid of them that turn to thee for succour;
                        We entreat thy strength and goodness in behalf of this thy
                        servant, that he may be healed of his infirmities, to thine
                        honour and glory; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray37">&nbsp;</a>
                    <div class="text-center"><i><b>A Prayer for a Sick Person, when there appeareth
                        but small hope of Recovery.</b></i></div>
                    <br/>

                    <b>
                        O FATHER of mercies, and God of all comfort, our
                        only help in time of need; We fly unto thee for succour
                        in behalf of this thy servant, here lying in great
                        weakness of body. Look graciously upon him, O Lord; and the
                        more the outward man decayeth, strengthen him, we
                        beseech thee, so much the more continually with thy grace
                        and Holy Spirit in the inner man. Give him unfeigned
                        repentance for all the errors of his life past, and stedfast faith
                        in thy Son Jesus; that his sins may be done away by thy
                        mercy, and his pardon sealed in heaven; through the same
                        thy Son, our Lord and Saviour. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray38">&nbsp;</a>
                    <div class="text-center"><i><b>A Prayer for the Despondent.</b></i></div>
                    <br/>

                    <b>
                        COMFORT, we beseech thee, most gracious God, this
                        thy servant, cast down and faint of heart amidst the
                        sorrows and difficulties of the world; and grant that, by the
                        power of thy Holy Spirit, he may be enabled to go upon his
                        way rejoicing, and give thee continual thanks for thy
                        sustaining providence; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray39">&nbsp;</a>
                    <div class="text-center"><i><b>A Commendatory Prayer for a Sick Person
                        at the point of Departure.</b></i></div>
                    <br/>

                    <b>
                        O ALMIGHTY God, with whom do live the spirits of
                        just men made perfect, after they are delivered from
                        their earthly prisons; We humbly commend the soul of
                        this thy servant, our dear brother, into thy hands, as into
                        the hands of a faithful Creator, and most merciful Saviour;
                        beseeching thee, that it may be precious in thy sight. Wash
                        it, we pray thee, in the blood of that immaculate Lamb,
                        that was slain to take away the sins of the world; that
                        whatsoever defilements it may have contracted, through
                        the lusts of the flesh or the wiles of Satan, being purged
                        and done away, it may be presented pure and without spot
                        before thee; through the merits of Jesus Christ thine
                        only Son our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <a id="pray41">&nbsp;</a>
                    <div class="text-center"><i><b>For the Spirit of Prayer.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, who pourest out on all who desire it,
                        the spirit of grace and of supplication; Deliver
                        us, when we draw nigh to thee, from coldness of heart and
                        wanderings of mind, that with stedfast thoughts and
                        kindled affections, we may worship thee in spirit and in
                        truth; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray42">&nbsp;</a>
                    <div class="text-center"><i><b>In the Morning.</b></i></div>
                    <br/>

                    <b>
                        O GOD, the King eternal, who dividest the day from
                        the darkness, and turnest the shadow of death into the
                        morning; Drive far off from us all wrong desires, incline
                        our hearts to keep thy law, and guide our feet into the way
                        of peace; that having done thy will with cheerfulness while
                        it was day, we may, when the night cometh, rejoice to give
                        thee thanks; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <b>
                        ALMIGHTY God, who alone gavest us the breath of
                        life, and alone canst keep alive in us the holy desires
                        thou dost impart; We beseech thee, for thy compassion's
                        sake, to sanctify all our thoughts and endeavours; that we
                        may neither begin an action without a pure intention nor
                        continue it without thy blessing. And grant that, having the
                        eyes of the mind opened to behold things invisible and
                        unseen, we may in heart be inspired by thy wisdom, and in
                        work be upheld by thy strength, and in the end be accepted
                        of thee as thy faithful servants; through Jesus Christ our
                        Saviour. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray43">&nbsp;</a>
                    <div class="text-center"><i><b>At Night.</b></i></div>
                    <br/>

                    <b>
                        O LORD, support us all the day long, until the shadows
                        lengthen and the evening comes, and the busy world
                        is hushed, and the fever of life is over, and our work is
                        done. Then in thy mercy grant us a safe lodging, and a holy
                        rest, and peace at the last. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <b>
                        O GOD, who art the life of mortal men, the light of the
                        faithful, the strength of those who labour, and the
                        repose of the dead; We thank thee for the timely blessings
                        of the day, and humbly supplicate thy merciful protection
                        all this night. Bring us, we beseech thee, in safety to the
                        morning hours; through him who died for us and rose
                        again, thy Son, our Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray44">&nbsp;</a>
                    <div class="text-center"><i><b>Sunday Morning.</b></i></div>
                    <br/>

                    <b>
                        O GOD, who makest us glad with the weekly remembrance
                        of the glorious resurrection of thy Son our
                        Lord; Vouchsafe us this day such blessing through our
                        worship of thee, that the days to come may be spent in
                        thy service; through the same Jesus Christ our Lord.
                        <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray45">&nbsp;</a>
                    <div class="text-center"><i><b>For Quiet Confidence.</b></i></div>
                    <br/>

                    <b>
                        O GOD of peace, who hast taught us that in returning
                        and rest we shall be saved, in quietness and in
                        confidence shall be our strength; By the might of thy Spirit
                        lift us, we pray thee, to thy presence, where we may be
                        still and know that thou art God; through Jesus Christ our
                        Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray46">&nbsp;</a>
                    <div class="text-center"><i><b>For Guidance.</b></i></div>
                    <br/>

                    <b>
                        O GOD, by whom the meek are guided in judgment,
                        and light riseth up in darkness for the godly; Grant
                        us, in all our doubts and uncertainties, the grace to ask
                        what thou wouldest have us to do, that the Spirit of
                        Wisdom may save us from all false choices, and that in thy
                        light we may see light, and in thy straight path may not
                        stumble; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray47">&nbsp;</a>
                    <div class="text-center"><i><b>For Trustfulness.</b></i></div>
                    <br/>

                    <b>
                        O MOST loving Father, who willest us to give thanks
                        for all things, to dread nothing but the loss of thee,
                        and to cast all our care on thee, who carest for us;
                        Preserve us from faithless fears and worldly anxieties, and
                        grant that no clouds of this mortal life may hide from us
                        the light of that love which is immortal, and which thou
                        hast manifested unto us in thy Son, Jesus Christ our Lord.
                        <i>Amen.</i><br/>
                        <br/>

                        O HEAVENLY Father, thou understandest all thy children;
                        through thy gift of faith we bring our perplexities to
                        the light of thy wisdom, and receive the blessed
                        encouragement of thy sympathy, and a clearer knowledge of
                        thy will. Glory be to thee for all thy gracious gifts. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray48">&nbsp;</a>
                    <div class="text-center"><i><b>For Joy in God's Creation.</b></i></div>
                    <br/>

                    <b>
                        O HEAVENLY Father, who hast filled the world with
                        beauty; Open, we beseech thee, our eyes to behold
                        thy gracious hand in all thy works; that rejoicing in thy
                        whole creation, we may learn to serve thee with gladness;
                        for the sake of him by whom all things were made, thy
                        Son, Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray49">&nbsp;</a>
                    <div class="text-center"><i><b>For the Children.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, heavenly Father, who hast blessed us
                        with the joy and care of children; Give us light and
                        strength so to train them, that they may love whatsoever
                        things are true and pure and lovely and of good report,
                        following the example of their Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray50">&nbsp;</a>
                    <div class="text-center"><i><b>For the Absent.</b></i></div>
                    <br/>

                    <b>
                        O GOD, whose fatherly care reacheth to the uttermost
                        parts of the earth; We humbly beseech thee graciously
                        to behold and bless those whom we love, now absent
                        from us. Defend them from all dangers of soul and
                        body; and grant that both they and we, drawing nearer to
                        thee, may be bound together by thy love in the communion
                        of thy Holy Spirit, and in the fellowship of thy saints;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray51">&nbsp;</a>
                    <div class="text-center"><i><b>For Those We Love.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, we entrust all who are dear to us to
                        thy never-failing care and love, for this life and the
                        life to come; knowing that thou art doing for them better
                        things than we can desire or pray for; through Jesus Christ
                        our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray52">&nbsp;</a>
                    <div class="text-center"><i><b>For the Recovery of a Sick Person.</b></i></div>
                    <br/>

                    <b>
                        O MERCIFUL God, giver of life and health; Bless, we
                        pray thee, thy servant, [N.], and those who administer
                        to him of thy healing gifts; that he may be restored
                        to health of body and of mind; through Jesus Christ our
                        Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray53">&nbsp;</a>
                    <div class="text-center"><i><b>For One about to undergo an Operation.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God our heavenly Father, we beseech
                        thee graciously to comfort thy servant in his suffering,
                        and to bless the means made use of for his cure. Fill
                        his heart with confidence, that though he be sometime
                        afraid, he yet may put his trust in thee; through Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray54">&nbsp;</a>
                    <div class="text-center"><i><b>For a Birthday.</b></i></div>
                    <br/>

                    <b>
                        WATCH over thy child, O Lord, as his days increase;
                        bless and guide him wherever he may be, keeping
                        him unspotted from the world. Strengthen him when he
                        stands; comfort him when discouraged or sorrowful; raise
                        him up if he fall; and in his heart may thy peace which
                        passeth understanding abide all the days of his life;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray55">&nbsp;</a>
                    <div class="text-center"><i><b>For an Anniversary of One Departed.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, we remember this day before thee
                        thy faithful servant [N.], and we pray thee that,
                        having opened to him the gates of larger life, thou wilt
                        receive him more and more into thy joyful service; that he
                        may win, with thee and thy servants everywhere, the
                        eternal victory; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray56">&nbsp;</a>
                    <div class="text-center"><i><b>For Those in Mental Darkness.</b></i></div>
                    <br/>

                    <b>
                        O HEAVENLY Father, we beseech thee to have mercy
                        upon all thy children who are living in mental
                        darkness. Restore them to strength of mind and cheerfulness
                        of spirit, and give them health and peace; through Jesus
                        Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray57">&nbsp;</a>
                    <div class="text-center"><i><b>For a Blessing on the Families of the Land.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, our heavenly Father, who settest the
                        solitary in families; We commend to thy continual
                        care the homes in which thy people dwell. Put far from
                        them, we beseech thee, every root of bitterness, the desire
                        of vain-glory, and the pride of life. Fill them with faith,
                        virtue, knowledge, temperance, patience, godliness. Knit
                        together in constant affection those who, in holy wedlock,
                        have been made one flesh; turn the heart of the fathers to
                        the children, and the heart of the children to the fathers;
                        and so enkindle fervent charity among us all, that we be
                        evermore kindly affectioned with brotherly love; through
                        Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray58">&nbsp;</a>
                    <div class="text-center"><i><b>For all Poor, Homeless, and Neglected Folk.</b></i></div>
                    <br/>

                    <b>
                        O GOD, Almighty and merciful, who healest those that
                        are broken in heart, and turnest the sadness of the
                        sorrowful to joy; Let thy fatherly goodness be upon all
                        that thou hast made. Remember in pity such as are this
                        day destitute, homeless, or forgotten of their fellow-men.
                        Bless the congregation of thy poor. Uplift those who are
                        cast down. Mightily befriend innocent sufferers, and
                        sanctify to them the endurance of their wrongs. Cheer with
                        hope all discouraged and unhappy people, and by thy
                        heavenly grace preserve from falling those whose penury
                        tempteth them to sin; though they be troubled on every
                        side, suffer them not to be distressed; though they be
                        perplexed, save them from despair. Grant this, O Lord, for the
                        love of him, who for our sakes became poor, thy Son, our
                        Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray59">&nbsp;</a>
                    <div class="text-center"><i><b>For Faithfulness in the Use of this World's Goods.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, whose loving hand hath given us all
                        that we possess; Grant us grace that we may honour
                        thee with our substance, and remembering the account
                        which we must one day give, may be faithful stewards of
                        thy bounty; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray60">&nbsp;</a>
                    <div class="text-center"><i><b>A General Intercession.</b></i></div>
                    <br/>

                    <b>
                        O GOD, at whose word man goeth forth to his work
                        and to his labour until the evening; Be merciful to all
                        whose duties are difficult or burdensome, and comfort them
                        concerning their toil. Shield from bodily accident and
                        harm the workmen at their work. Protect the efforts of sober
                        and honest industry, and suffer not the hire of the
                        labourers to be kept back by fraud. Incline the heart of
                        employers and of those whom they employ to mutual forbearance,
                        fairness, and good-will. Give the spirit of governance and
                        of a sound mind to all in places of authority. Bless all those
                        who labour in works of mercy or in schools of good learning.
                        Care for all aged persons, and all little children, the
                        sick and the afflicted, and those who travel by land or by
                        sea. Remember all who by reason of weakness are over-tasked,
                        or because of poverty are forgotten. Let the sorrowful
                        sighing of the prisoners come before thee; and according
                        to the greatness of thy power, preserve thou those that are
                        appointed to die. Give ear unto our prayer, O merciful and
                        gracious Father, for the love of thy dear Son, our Saviour
                        Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray61">&nbsp;</a>
                    <div class="text-center"><i><b>Grace before Meat.</b></i></div>
                    <br/>

                    <b>
                        BLESS, O Father, thy gifts to our use and us to thy
                        service; for Christ's sake. <i>Amen.</i><br/>
                        <br/>

                        GIVE us grateful hearts, our Father, for all thy mercies,
                        and make us mindful of the needs of others; through
                        Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>

                </blockquote>

                <hr>

                <a id="thanks">&nbsp;</a>
                <div class="text-center"><h3>THANKSGIVINGS.</h3></div>

                <div class="text-center">
                    <small><i>To be used after the General Thanksgiving, or, when that is not said, before
                        the final Prayer of Blessing or the Benediction.</i></small>
                </div>
                <div class="text-center">
                    <table width="80%">
                        <tbody>
                        <tr>
                            <td class="text-start" width="33%">
                                <a href="#thank01"><small>For the Fruits of the Earth.</small></a>
                            </td>
                            <td class="text-start" width="33%">
                                <a href="#thank06"><small>For Peace.</small></a>
                            </td>
                            <td class="text-start" width="33%" rowspan="2">
                                <a href="#thank11"><small>For the Beginning of a Recovery.</small></a><br/>
                                <small><i>From "The Visitation of the Sick"</i></small><br/>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-start">
                                <a href="#thank02"><small>After Child-birth.</small></a>
                            </td>
                            <td class="text-start">
                                <a href="#thank07"><small>For Restoring Public Peace.</small></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <a href="#thank03"><small>For Rain.</small></a>
                            </td>
                            <td class="text-start">
                                <a href="#thank08"><small>For Recovery from Sickness.</small></a>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <a href="#thank04"><small>For Fair Weather.</small></a>
                            </td>
                            <td class="text-start">
                                <a href="#thank09"><small>For a Child's Recovery from Sickness.</small></a>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                <a href="#thank05"><small>For Plenty.</small></a>
                            </td>
                            <td class="text-start">
                                <a href="#thank10"><small>For Safe Return from a Journey.</small></a>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr>

                <blockquote>

                    <a id="thank01">&nbsp;</a>
                    <div class="text-center"><i><b>A Thanksgiving to Almighty God for the Fruits of the
                        Earth and all the other Blessings of His merciful
                        Providence.</b></i></div>
                    <br/>

                    <b>
                        MOST gracious God, by whose knowledge the depths are
                        broken up, and the clouds drop down the dew; We yield
                        thee unfeigned thanks and praise for the return of seed-
                        time and harvest, for the increase of the ground and the
                        gathering in of the fruits thereof, and for all the other
                        blessings of thy merciful providence bestowed upon this
                        nation and people. And, we beseech thee, give us a just
                        sense of these great mercies; such as may appear in our
                        lives by an humble, holy, and obedient walking before
                        thee all our days; through Jesus Christ our Lord, to
                        whom, with thee and the Holy Ghost, be all glory and
                        honour, world without end. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank02">&nbsp;</a>
                    <div class="text-center"><i><b>The Thanksgiving of Women after Child-birth.</b></i><br/>
                        <br/>

                        <small><i>To be said when any Woman, being present in Church, shall have desired to
                            return thanks to Almighty God for her safe deliverance.</i></small></div>
                    <br/>

                    <b>
                        ALMIGHTY God, we give thee humble thanks for that
                        thou hast been graciously pleased to preserve, through
                        the great pain and peril of child-birth, this woman, thy
                        servant, who desireth now to offer her praises and
                        thanksgivings unto thee. Grant, we beseech thee, most
                        merciful Father, that she, through thy help, may
                        faithfully live according to thy will in this life, and also
                        may be partaker of everlasting glory in the life to come;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank03">&nbsp;</a>
                    <div class="text-center"><i><b>For Rain.</b></i></div>
                    <br/>

                    <b>
                        O GOD, our heavenly Father, by whose gracious
                        providence the former and the latter rain descend upon
                        the earth, that it may bring forth fruit for the use of man;
                        We give thee humble thanks that it hath pleased thee to
                        send us rain to our great comfort, and to the glory of thy
                        holy Name; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank04">&nbsp;</a>
                    <div class="text-center"><i><b>For Fair Weather.</b></i></div>
                    <br/>

                    <b>
                        O LORD God, who hast justly humbled us by thy late
                        visitation of us with immoderate rain and waters, and in
                        thy mercy hast relieved and comforted our souls by this
                        seasonable and blessed change of weather; We praise and
                        glorify thy holy Name for this thy mercy, and will always
                        declare thy loving-kindness from generation to
                        generation; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank05">&nbsp;</a>
                    <div class="text-center"><i><b>For Plenty.</b></i></div>
                    <br/>

                    <b>
                        O MOST merciful Father, who of thy gracious goodness
                        hast heard the devout prayers of thy Church, and turned
                        our dearth and scarcity into plenty; We give thee humble
                        thanks for this thy special bounty; beseeching thee to
                        continue thy loving-kindness unto us, that our land may
                        yield us her fruits of increase, to thy glory and our
                        comfort; through Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank06">&nbsp;</a>
                    <div class="text-center"><i><b>For Peace, and Deliverance from our Enemies.</b></i></div>
                    <br/>

                    <b>
                        O ALMIGHTY God, who art a strong tower of defence
                        unto thy servants against the face of their enemies; We
                        yield thee praise and thanksgiving for our deliverance
                        from those great and apparent dangers wherewith we
                        were compassed. We acknowledge it thy goodness that
                        we were not delivered over as a prey unto them;
                        beseeching thee still to continue such thy mercies
                        towards us, that all the world may know that thou art
                        our Saviour and mighty Deliverer; through Jesus Christ
                        our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank07">&nbsp;</a>
                    <div class="text-center"><i><b>For Restoring Public Peace at Home.</b></i></div>
                    <br/>

                    <b>
                        O ETERNAL God, our heavenly Father, Who alone
                        makest men to be of one mind in a house, and stillest the
                        outrage of a violent and unruly people; We bless thy holy
                        Name, that it hath pleased thee to appease the seditious
                        tumults which have been lately raised up amongst us;
                        most humbly beseeching thee to grant to all of us grace,
                        that we may henceforth obediently walk in thy holy
                        commandments; and, leading a quiet and peaceable life in
                        all godliness and honesty, may continually offer unto thee
                        our sacrifice of praise and thanksgiving for these thy
                        mercies towards us; through Jesus Christ our Lord.
                        <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank08">&nbsp;</a>
                    <div class="text-center"><i><b>For a Recovery from Sickness.</b></i></div>
                    <br/>

                    <b>
                        O GOD, who art the giver of life, of health, and of safety;
                        We bless thy Name, that thou hast been pleased to
                        deliver from his bodily sickness this thy servant, who now
                        desireth to return thanks unto thee, in the presence of all
                        thy people. Gracious art thou, O Lord, and full of
                        compassion to the children of men. May his heart be duly
                        impressed with a sense of thy merciful goodness, and
                        may he devote the residue of his days to an humble, holy,
                        and obedient walking before thee; through Jesus Christ
                        our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank09">&nbsp;</a>
                    <div class="text-center"><i><b>For a Child's Recovery from Sickness.</b></i></div>
                    <br/>

                    <b>
                        ALMIGHTY God and heavenly Father, we give thee
                        humble thanks for that thou hast been graciously pleased
                        to deliver from his bodily sickness the child in whose
                        behalf we bless and praise thy Name, in the presence of
                        all thy people. Grant, we beseech thee, O gracious
                        Father, that he, through thy help, may both faithfully
                        live in this world according to thy will, and also may be
                        partaker of everlasting glory in the life to come; through
                        Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="thank10">&nbsp;</a>
                    <div class="text-center"><i><b>For a Safe Return from a Journey.</b></i></div>
                    <br/>

                    <b>
                        MOST gracious Lord, whose mercy is over all thy works;
                        We praise thy holy Name that thou hast been pleased to
                        conduct in safety, through the perils of the great deep (of
                        his way), this thy servant, who now desireth to return his
                        thanks unto thee in thy holy Church. May he be duly
                        sensible of thy merciful providence towards him, and ever
                        express his thankfulness by a holy trust in thee, and
                        obedience to thy laws; through Jesus Christ our Lord.
                        <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <a id="thank11">&nbsp;</a>
                    <div class="text-center"><i><b>A Thanksgiving for the Beginning of a Recovery.</b><br/>
                        <small>(From "The Visitation of the Sick")</small></i></div>
                    <br/>

                    <b>
                        GREAT and mighty God, who bringest down to the
                        grave, and bringest up again; We bless thy wonderful
                        goodness, for having turned our heaviness into joy and
                        our mourning into gladness, by restoring this our brother
                        to some degree of his former health. Blessed be thy Name
                        that thou didst not forsake him in his sickness; but didst
                        visit him with comforts from above; didst support him in
                        patience and submission to thy will; and at last didst send
                        him seasonable relief. Perfect, we beseech thee, this thy
                        mercy towards him; and prosper the means which shall be
                        made use of for his cure: that, being restored to health
                        of body, vigour of mind, and cheerfulness of spirit, he may
                        be able to go to thine house, to offer thee an oblation
                        with great gladness, and to bless thy holy Name for all thy
                        goodness towards him; through Jesus Christ our Saviour,
                        to whom, with thee and the Holy Spirit, be all honour
                        and glory, world without end.
                        <i>Amen.</i><br/>
                    </b>
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
                           href="#">
                            MORNING PRAYER
                        </a>
                        <p class="mt-3 d-lg-none d-block"><i class="fa-solid fa-arrow-left"></i>Today's Readings<i
                                class="fa-solid fa-arrow-right"></i></p>
                        <p class="mt-3 d-lg-block d-none"><i class="fa-solid fa-arrow-left"></i> Today's Readings <i
                                class="fa-solid fa-arrow-right"></i></p>
                        <a class="btn btn-primary cpo-footer-btn d-flex justify-content-center align-items-center"
                           href="#">
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
