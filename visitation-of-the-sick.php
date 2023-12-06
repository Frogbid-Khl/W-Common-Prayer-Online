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

    <title>The Visitation of The Sick - Common Prayer Online</title>
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
                <input class="form-check-input" type="checkbox" role="switch" id="darkModeSwitch" style="margin-left: unset;">
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
                THE ORDER FOR <br/>
                THE VISITATION OF THE SICK
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
        <div class="col-lg-12 mt-3">
            <div>
                <span>Aa</span>
                <input type="range" id="fontSizeRange" class="cpo-range" min="10" max="40" step="1" value="16"/>
                <span>Aa</span>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <blockquote  id="text-container">

                <small>
                    <i>The following Service, or any part thereof, may be used at the
                        discretion of the Minister.</i><br/>
                    <br/>

                    <i>When any person is sick, notice shall be given thereof to the
                        Minister of the Parish; who, coming into the sick person's presence,
                        shall say,</i><br/>
                    <br/>
                </small>

                <b>
                    PEACE be to this house, and to all that dwell in it.<br/>
                </b>
                <br/>

                <small>
                    <i>After which he shall say the Antiphon following, and then, according
                        to his discretion, one of the Penitential Psalms.</i><br/>
                </small>
                <br/>

                <i>Antiphon.</i> <b> Remember not, Lord, our iniquities; Nor the
                iniquities of our forefathers.<br/>
            </b>
                <br/>

                <div class="text-center">
                    <small>
                        <i>Then the Minister shall say,</i><br/>
                    </small>
                </div>
                <br/>

                <div class="text-center">
                    <b>Let us pray.<br/>
                        <br/>
                        Lord, have mercy upon us.<br/>
                        <i>Christ, have mercy upon us.</i><br/>
                        Lord, have mercy upon us.<br/>
                    </b>
                </div>
                <br/>

                <b>
                    OUR Father, who art in heaven, Hallowed be thy
                    Name. Thy kingdom come. Thy will be done, On
                    earth as it is in heaven. Give us this day our daily bread.
                    And forgive us our trespasses, As we forgive those who
                    trespass against us. And lead us not into temptation, But
                    deliver us from evil. Amen.<br/>
                </b>
                <br/>

                <blockquote>
                    <i>Minister. </i><b>O Lord, save thy servant;</b><br/>
                    <i>Answer. </i><b>Who putteth <u>his</u> trust in thee.</b><br/>
                    <i>Minister. </i><b>Send <u>him</u> help from thy holy place;</b><br/>
                    <i>Answer. </i><b>And evermore mightily defend <u>him</u>.</b><br/>
                    <i>Minister. </i><b>Let the enemy have no advantage of <u>him</u>;</b><br/>
                    <i>Answer. </i><b>Nor the wicked approach to hurt <u>him</u>.</b><br/>
                    <i>Minister. </i><b>Be unto <u>him</u>, O Lord, a strong tower;</b><br/>
                    <i>Answer. </i><b>From the face of <u>his</u> enemy.</b><br/>
                    <i>Minister. </i><b>O Lord, hear our prayer.</b><br/>
                    <i>Answer. </i><b>And let our cry come unto thee.</b><br/>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <i><b>Minister.</b></i><br/>
                    <br/>
                </div>

                <b>O LORD, look down from heaven, behold, visit, and relieve
                    this thy servant. Look upon <u>him</u> with the eyes
                    of thy mercy, give <u>him</u> comfort and sure confidence in
                    thee, defend <u>him</u> in all danger, and keep <u>him</u> in perpetual
                    peace and safety; through Jesus Christ our Lord.<i>Amen.</i><br/>
                </b>
                <br/>

                <small>
                    <i>Here may be said any one or more of the Psalms following, with
                        Antiphon and Collect.</i><br/>
                </small>
                <br/>

                <i>Antiphon.</i> <b>I did call upon the LORD with my voice; And
                he heard me out of his holy hill.<br/>
            </b>
                <br/>

                <div class="text-center">
                    <i><b>Domine, quid multiplicati?</b></i> Psalm iii.<br/>
                </div>
                <br/>

                <blockquote>
                    <b>&nbsp; &nbsp; &nbsp; LORD, how are they increased that trouble me! many
                        are they that rise against me.<br/>
                        &nbsp; &nbsp; &nbsp; Many one there be that say of my soul, There is no
                        help for him in his God.<br/>
                        &nbsp; &nbsp; &nbsp; But thou, O LORD, art my defender; thou art my worship,
                        and the lifter up of my head.<br/>
                        &nbsp; &nbsp; &nbsp; I did call upon the LORD with my voice, and he heard
                        me out of his holy hill.<br/>
                        &nbsp; &nbsp; &nbsp; I laid me down and slept, and rose up again; for the
                        LORD sustained me.<br/>
                        &nbsp; &nbsp; &nbsp; Salvation belongeth unto the LORD; and thy blessing is
                        upon thy people.<br/>
                    </b>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <i><b>The Collect.</b></i><br/>
                </div>
                <br/>

                <b>HEAR us, Almighty and most merciful God and Saviour;
                    extend thy accustomed goodness to this thy
                    servant who is grieved with sickness. Visit <u>him</u>, O Lord,
                    with thy loving mercy, and so restore <u>him</u> to <u>his</u> former
                    health, that <u>he</u> may give thanks unto thee in thy holy
                    Church; through Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <hr>

                <i>Antiphon.</i> <b>I will go unto the altar of God; Unto the
                God of my joy and gladness.</b><br/>
                <br/>

                <div class="text-center">
                    <i><b>Judica me, Deus.</b></i> Psalm xliii.<br/>
                </div>
                <br/>

                <blockquote>
                    <b>&nbsp; &nbsp; &nbsp; GIVE sentence with me, O God, and defend my cause
                        against the ungodly people; O deliver me from the
                        deceitful and wicked man.<br/>
                        &nbsp; &nbsp; &nbsp; For thou art the God of my strength; why hast thou
                        put me from thee? and why go I so heavily, while the
                        enemy oppresseth me?<br/>
                        &nbsp; &nbsp; &nbsp; O send out thy light and thy truth, that they may lead
                        me, and bring me unto thy holy hill, and to thy dwelling;<br/>
                        &nbsp; &nbsp; &nbsp; And that I may go unto the altar of God, even unto the
                        God of my joy and gladness; and upon the harp will I give
                        thanks unto thee, O God, my God.<br/>
                        &nbsp; &nbsp; &nbsp; Why art thou so heavy, O my soul? and why art thou
                        so disquieted within me?<br/>
                        &nbsp; &nbsp; &nbsp; O put thy trust in God; for I will yet give him thanks,
                        which is the help of my countenance, and my God.<br/>
                    </b>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <i><b>The Collect.</b></i><br/>
                </div>
                <br/>

                <b>SANCTIFY, we beseech thee, O Lord, the sickness of
                    this thy servant; that the sense of <u>his</u> weakness may
                    add strength to <u>his</u> faith, and seriousness to <u>his</u> repentance;
                    and grant that <u>he</u> may dwell with thee in life everlasting;
                    through Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <hr>

                <i>Antiphon.</i><b> I have considered the days of old; And the
                years that are past.</b><br/>
                <br/>

                <div class="text-center">
                    <i><b>Voce mea ad Dominum.</b></i> Psalm lxxvii.<br/>
                </div>
                <br/>

                <blockquote>
                    <b>&nbsp; &nbsp; &nbsp; I WILL cry unto God with my voice; even unto God
                        will I cry with my voice, and he shall hearken unto me.<br/>
                        &nbsp; &nbsp; &nbsp; In the time of my trouble I sought the Lord: I stretched
                        forth my hands unto him, and ceased not in the night
                        season; my soul refused comfort.<br/>
                        &nbsp; &nbsp; &nbsp; When I am in heaviness, I will think upon God; when
                        my heart is vexed, I will complain.<br/>
                        &nbsp; &nbsp; &nbsp; Thou holdest mine eyes waking: I am so feeble that I
                        cannot speak.<br/>
                        &nbsp; &nbsp; &nbsp; I have considered the days of old, and the years that
                        are past.<br/>
                        &nbsp; &nbsp; &nbsp; I call to remembrance my song, and in the night I commune
                        with mine own heart, and search out my spirit.<br/>
                        &nbsp; &nbsp; &nbsp; Will the Lord absent himself for ever? and will he be
                        no more intreated?<br/>
                        &nbsp; &nbsp; &nbsp; Is his mercy clean gone for ever? and is his promise
                        come utterly to an end for evermore?<br/>
                        &nbsp; &nbsp; &nbsp; Hath God forgotten to be gracious? and will he shut up
                        his loving-kindness in displeasure?<br/>
                        &nbsp; &nbsp; &nbsp; And I said, It is mine own infirmity; but I will remember
                        the years of the right hand of the Most Highest.<br/>
                    </b>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <i><b>The Collect.</b></i><br/>
                </div>
                <br/>

                <b>HEAR, O Lord, we beseech thee, these our prayers, as
                    we call upon thee on behalf of this thy servant; and
                    bestow upon <u>him</u> the help of thy merciful consolation;
                    through Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <hr>

                <i>Antiphon.</i> <b>Though I walk in the midst of trouble; Yet
                shalt thou refresh me.</b><br/>
                <br/>

                <div class="text-center">
                    <i><b>Confitebor tibi.</b></i> Psalm cxxxviii.<br/>
                </div>
                <br/>

                <blockquote>
                    <b>&nbsp; &nbsp; &nbsp; I WILL give thanks unto thee, O Lord, with my whole
                        heart; even before the gods will I sing praise unto thee.<br/>
                        &nbsp; &nbsp; &nbsp; I will worship toward thy holy temple, and praise thy
                        Name, because of thy loving-kindness and truth; for thou
                        hast magnified thy Name, and thy word, above all things.<br/>
                        &nbsp; &nbsp; &nbsp; When I called upon thee, thou heardest me; and enduedst
                        my soul with much strength.<br/>
                        &nbsp; &nbsp; &nbsp; Though I walk in the midst of trouble, yet shalt thou
                        refresh me; thou shalt stretch forth thy hand upon the
                        furiousness of mine enemies, and thy right hand shall save
                        me.<br/>
                        &nbsp; &nbsp; &nbsp; The LORD shall make good his loving-kindness toward
                        me; yea, thy mercy, O LORD, endureth for ever; despise
                        not then the works of thine own hands.<br/>
                    </b>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <p><i><b>The Collect.</b></i></p>
                </div>

                <b>O GOD, the strength of the weak and the comfort of
                    sufferers; Mercifully accept our prayers, and grant
                    to thy servant the help of thy power, that <u>his</u> sickness may
                    be turned into health, and our sorrow into joy; through
                    Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <hr>

                <i>Antiphon.</i> <b>The LORD saveth thy life from destruction;
                And crowneth thee with mercy and loving-kindness.<br/>
            </b>
                <br/>

                <div class="text-center">
                    <i><b>Benedic, anima mea.</b></i> Psalm ciii.<br/>
                </div>
                <br/>

                <blockquote>
                    <b>PRAISE the LORD, O my soul; and all that is within me,
                        praise his holy Name.<br/>
                        <br/>
                        Praise the LORD, O my soul, and forget not all his benefits:<br/>
                        <br/>
                        Who forgiveth all thy sin, and healeth all thine infirmities;<br/>
                        <br/>
                        Who saveth thy life from destruction, and crowneth thee
                        with mercy and loving-kindness.<br/>
                        <br/>
                        O praise the LORD, ye angels of his, ye that excel in
                        strength; ye that fulfil his commandment, and hearken
                        unto the voice of his word.<br/>
                        <br/>
                        O praise the LORD, all ye his hosts; ye servants of his
                        that do his pleasure.<br/>
                        <br/>
                        O speak good of the LORD, all ye works of his, in all
                        places of his dominion: praise thou the LORD, O my soul.<br/>
                    </b>
                    <br/>
                </blockquote>

                <div class="text-center">
                    <i><b>The Collect.</b></i><br/>
                </div>
                <br/>

                <b>ACCEPT, we beseech thee, merciful Lord, the devout
                    praise of thy humble servant; and grant <u>him</u> an
                    abiding sense of thy loving-kindness; through Jesus Christ
                    our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <hr>

                <small>
                    <i>Any of the following Psalms,
                        <a href="#"> 20</a>,
                        <a href="#"> 27</a>,
                        <a href="#"> 42</a>,
                        <a href="#"> 91</a>,
                        <a href="#"> 121</a>,
                        <a href="#"> 146</a>,
                        may, at the discretion of the Minister, be substituted for any of
                        those given above.</i><br/>
                </small>
                <br/>

                <div class="text-center">
                    <small>
                        <i>Here shall be said,</i><br/>
                    </small>
                </div>
                <br/>

                <b>O SAVIOUR of the world, who by thy Cross and
                    precious Blood hast redeemed us; Save us, and help
                    us, we humbly beseech thee, O Lord.<br/>
                </b>
                <br/>

                <small>
                    <i>As occasion demands, the Minister shall address the sick person
                        on the meaning and use of the time of sickness, and the opportunity
                        it affords for spiritual profit.</i><br/>
                    <br/>

                    <i>Here may the Minister inquire of the sick person as to his acceptance
                        of the Christian Faith, and as to whether he repent him truly of his
                        sins, and be in charity with all the world; exhorting him to forgive,
                        from the bottom of his heart, all persons that have offended him; and
                        if he hath offended any other, to ask them forgiveness; and where he
                        hath done injury or wrong to any man, that he make amends to the
                        uttermost of his power.</i><br/>
                    <br/>

                    <i>Then shall the sick person be moved to make a special confession of his
                        sins, if he feel his conscience troubled with any matter; after which
                        confession, on evidence of his repentance, the Minister shall assure
                        him of God's mercy and forgiveness.</i><br/>
                    <br/>
                </small>

                <div class="text-center">
                    <small>
                        <i>Then the Minister shall say,</i><br/>
                    </small>
                </div>
                <br/>

                <div class="text-center">
                    <b>Let us pray.</b><br/>
                </div>
                <br/>

                <b>
                    O MOST merciful God, who, according to the multitude
                    of thy mercies, dost so put away the sins of
                    those who truly repent, that thou rememberest them no
                    more; Open thine eye of mercy upon this thy servant,
                    who most earnestly desireth pardon and forgiveness.
                    Renew in <u>him</u>, most loving Father, whatsoever hath been
                    decayed by the fraud and malice of the devil, or by <u>his</u>
                    own carnal will and frailness; preserve and continue this
                    sick member in the unity of the Church; consider <u>his</u>
                    contrition, accept <u>his</u> tears, assuage <u>his</u> pain, as shall seem to
                    thee most expedient for <u>him</u>. And forasmuch as <u>he</u> putteth
                    <u>his</u> full trust only in thy mercy, impute not unto <u>him</u> <u>his</u>
                    former sins, but strengthen <u>him</u> with thy blessed Spirit;
                    and, when thou art pleased to take <u>him</u> hence, take <u>him</u>
                    unto thy favour; through the merits of thy most dearly
                    beloved Son, Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <div class="text-center">
                    <small>
                        <i>Then shall the Minister say,</i><br/>
                    </small>
                </div>
                <br/>

                <b>THE Almighty Lord, who is a most strong tower to all
                    those who put their trust in him, to whom all things
                    in heaven, in earth, and under the earth, do bow and obey;
                    Be now and evermore thy defence; and make thee know
                    and feel, that there is none other Name under heaven
                    given to man, in whom, and through whom, thou mayest
                    receive health and salvation, but only the Name of our
                    Lord Jesus Christ. <i>Amen.</i><br/>
                </b>
                <br/>

                <small>
                    <i>Here the Minister may use any part of the service of the
                        Book, which, in his discretion, he shall think convenient to
                        the occasion; and after that shall say,</i><br/>
                </small>
                <br/>

                <b>UNTO God's gracious mercy and protection we commit
                    thee. The LORD bless thee, and keep thee. The
                    LORD make his face to shine upon thee, and be gracious
                    unto thee. The LORD lift up his countenance upon thee,
                    and give thee peace, both now and evermore. <i>Amen.</i><br/>
                </b>
                <br/>

                <br/>
                <br/>
                <div class="text-center">
                    <p><b>PRAYERS.</b></p>
                </div>

                <small>
                    <i>These Prayers may be said with the foregoing Service, or any
                        part thereof, at the discretion of the Minister.</i><br/>
                </small>
                <br/>

                <br/><div class="text-center">
                <i><b>A Prayer for Recovery.</b></i><br/>
            </div>
                <br/>

                <b>O GOD of heavenly powers, who, by the might of thy
                    command, drivest away from men's bodies all sickness
                    and all infirmity; Be present in thy goodness with this thy
                    servant, that <u>his</u> weakness may be banished and <u>his</u> strength
                    recalled; that <u>his</u> health being thereupon restored, <u>he</u> may
                    bless thy holy Name; through Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>

                <br/><div class="text-center">
                <i><b>A Prayer for Healing.</b></i><br/>
            </div>
                <br/>

                <b>O ALMIGHTY God, who art the giver of all health,
                    and the aid of them that turn to thee for succour;
                    We entreat thy strength and goodness in behalf of this thy
                    servant, that <u>he</u> may be healed of <u>his</u> infirmities, to thine
                    honour and glory; through Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <br/><div class="text-center">
                <i><b>A Thanksgiving for the Beginning of a Recovery.</b></i><br/>
            </div>
                <br/>

                <b>GREAT and mighty God, who bringest down to the
                    grave, and bringest up again; We bless thy wonderful
                    goodness, for having turned our heaviness into joy and
                    our mourning into gladness, by restoring this our <u>brother</u>
                    to some degree of <u>his</u> former health. Blessed be thy Name
                    that thou didst not forsake <u>him</u> in <u>his</u> sickness; but didst
                    visit <u>him</u> with comforts from above; didst support <u>him</u> in
                    patience and submission to thy will; and at last didst send
                    <u>him</u> seasonable relief. Perfect, we beseech thee, this thy
                    mercy towards <u>him</u>; and prosper the means which shall be
                    made use of for <u>his</u> cure: that, being restored to health
                    of body, vigour of mind, and cheerfulness of spirit, <u>he</u> may
                    be able to go to thine house, to offer thee an oblation
                    with great gladness, and to bless thy holy Name for all thy
                    goodness towards <u>him</u>; through Jesus Christ our Saviour,
                    to whom, with thee and the Holy Spirit, be all honour
                    and glory, world without end. <i>Amen.</i><br/>
                </b>
                <br/>

                <br/><div class="text-center">
                <i><b>A Prayer for a Sick Person, when there appeareth but
                    small hope of Recovery.</b></i><br/>
            </div>
                <br/>

                <b>O FATHER of mercies, and God of all comfort, our
                    only help in time of need; We fly unto thee for succour
                    in behalf of this thy servant, here lying in great
                    weakness of body. Look graciously upon <u>him</u>, O Lord; and the
                    more the outward <u>man</u> decayeth, strengthen <u>him</u>, we
                    beseech thee, so much the more continually with thy grace
                    and Holy Spirit in the inner <u>man.</u> Give <u>him</u> unfeigned
                    repentance for all the errors of <u>his</u> life past, and stedfast faith
                    in thy Son Jesus; that <u>his</u> sins may be done away by thy
                    mercy, and <u>his</u> pardon sealed in heaven; through the same
                    thy Son, our Lord and Saviour. <i>Amen.</i><br/>
                </b>
                <br/>

                <br/><div class="text-center">
                <i><b>A Prayer for the Despondent.</b></i><br/>
            </div>
                <br/>

                <b>COMFORT, we beseech thee, most gracious God, this
                    thy servant, cast down and faint of heart amidst the
                    sorrows and difficulties of the world; and grant that, by the
                    power of thy Holy Spirit, <u>he</u> may be enabled to go upon <u>his</u>
                    way rejoicing, and give thee continual thanks for thy
                    sustaining providence; through Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <br/><div class="text-center">
                <i><b>A Prayer which may be said by the Minister in behalf
                    of all present at the Visitation.</b></i><br/>
            </div>
                <br/>

                <b>O GOD, whose days are without end, and whose mercies
                    cannot be numbered; Make us, we beseech thee,
                    deeply sensible of the shortness and uncertainty of human
                    life; and let thy Holy Spirit lead us in holiness and
                    righteousness, all our days: that, when we shall have served thee
                    in our generation, we may be gathered unto our fathers,
                    having the testimony of a good conscience; in the
                    communion of the Catholic Church; in the confidence of a
                    certain faith; in the comfort of a reasonable, religious,
                    and holy hope; in favour with thee our God, and in perfect
                    charity with the world. All which we ask through
                    Jesus Christ our Lord. <i>Amen.</i><br/>
                </b>
                <br/>

                <br/><div class="text-center">
                <i><b>A Commendatory Prayer for a Sick Person
                    at the point of Departure.</b></i><br/>
            </div>
                <br/>

                <b>O ALMIGHTY God, with whom do live the spirits of
                    just men made perfect, after they are delivered from
                    their earthly prisons; We humbly commend the soul of
                    this thy servant, our dear <u>brother,</u> into thy hands, as into
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

                <br/><div class="text-center">
                <b>LITANY FOR THE DYING.</b><br/>
            </div>
                <br/>

                <blockquote>
                    <b>O GOD the Father;<br/>
                        <i>Have mercy upon the soul of thy servant.</i><br/>
                        O God the Son;<br/>
                        <i>Have mercy upon the soul of thy servant.</i><br/>
                        O God the Holy Ghost;<br/>
                        <i>Have mercy upon the soul of thy servant.</i><br/>
                        O holy Trinity, one God;<br/>
                        <i>Have mercy upon the soul of thy servant.</i><br/>
                        From all evil, from all sin, from all tribulation;<br/>
                        <i>Good Lord, deliver <u>him</u>.</i><br/>
                        By thy holy Incarnation, by thy Cross and Passion, by
                        thy precious Death and Burial;<br/>
                        <i>Good Lord, deliver <u>him</u>.</i><br/>
                        By thy glorious Resurrection and Ascension, and by the
                        coming of the Holy Ghost;<br/>
                        <i>Good Lord, deliver <u>him</u>.</i><br/>
                        We sinners do beseech thee to hear us, O Lord God;<br/>
                        That it may please thee to deliver the soul of thy
                        servant from the power of the evil one, and from eternal
                        death;<br/>
                        <i>We beseech thee to hear us, good Lord.</i><br/>
                        That it may please thee mercifully to pardon all <u>his</u> sins.
                        <i>We beseech thee to hear us, good Lord.</i><br/>
                        That it may please thee to grant <u>him</u> a place of refreshment
                        and everlasting blessedness;<br/>
                        <i>We beseech thee to hear us, good Lord.</i><br/>
                        That it may please thee to give <u>him</u> joy and gladness in
                        thy kingdom, with thy saints in light;<br/>
                        <i>We beseech thee to hear us, good Lord.</i><br/>
                        O Lamb of God, who takest away the sins of the world;<br/>
                        <i>Have mercy upon <u>him</u>.</i>
                        O Lamb of God, who takest away the sins of the world;<br/>
                        <i>Have mercy upon <u>him</u>.</i>
                        O Lamb of God, who takest away the sins of the world;<br/>
                        <i>Grant <u>him</u> thy peace.</i>
                        Lord, have mercy.<br/>
                        <i>Christ, have mercy.</i>
                        Lord, have mercy.<br/>
                        <br/>
                    </b>
                </blockquote>

                <b>
                    OUR Father, who art in heaven, Hallowed be thy Name.
                    Thy kingdom come. Thy will be done, On earth as it
                    is in heaven. Give us this day our daily bread. And forgive
                    us our trespasses, As we forgive those who trespass against
                    us. And lead us not into temptation, But deliver us from
                    evil. Amen.<br/>
                </b>
                <br/>

                <div class="text-center">
                    <b>Let us pray.</b><br/>
                </div>
                <br/>

                <b>
                    O SOVEREIGN Lord, who desirest not the death of a
                    sinner; We beseech thee to loose the spirit of this
                    thy servant from every bond, and set <u>him</u> free from all
                    evil; that <u>he</u> may rest with all thy saints in the eternal
                    habitations; through Jesus Christ our Lord, who liveth and
                    reigneth with thee and the Holy Ghost, one God, world
                    without end.<i> Amen.</i><br/>
                </b>
                <br/>
                <br/>

                <div class="text-center">
                    <i><b>An Absolution to be said by the Priest.</b></i><br/>
                </div>
                <br/>

                <b>THE Almighty and merciful Lord grant thee pardon
                    and remission of all thy sins, and the grace and comfort
                    of the Holy Spirit. <i>Amen.</i><br/>
                </b>
                <br/>
                <br/>

                <div class="text-center">
                    <i><b>A Commendation.</b></i><br/>
                </div>
                <br/>

                <b>DEPART, O Christian soul, out of this world,<br/>
                    In the Name of God the Father Almighty who created thee.<br/>
                    In the Name of Jesus Christ who redeemed thee.<br/>
                    In the Name of the Holy Ghost who sanctifieth thee.<br/>
                    May thy rest be this day in peace, and thy dwelling-place
                    in the Paradise of God.<br/>
                </b>
                <br/>
                <br/>

                <div class="text-center">
                    <i><b>A Commendatory Prayer when the Soul is Departed.</b></i><br/>
                </div>
                <br/>

                <b>INTO thy hands, O merciful Saviour, we commend the
                    soul of thy servant, now departed from the body.
                    Acknowledge, we humbly beseech thee, a sheep of thine own
                    fold, a lamb of thine own flock, a sinner of thine own
                    redeeming. Receive <u>him</u> into the arms of thy mercy, into
                    the blessed rest of everlasting peace, and into the glorious
                    company of-the saints in light. <i>Amen.</i><br/>
                </b>
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
