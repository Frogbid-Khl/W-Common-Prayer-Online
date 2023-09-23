<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
$db_handle = new DBController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title>Family Prayer - Common Prayer Online</title>
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
                           href="kallender">Kalendar</a>
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
                FAMILY PRAYER AND
                ADDITIONAL PRAYERS
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
                    <a class="btn btn-primary cpo-btn-home w-100" href="#fammor">Family Prayer - Morning</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#fameve">Family Prayer - Evening</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#famsho">Family Prayer - A Shorter Form</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#addit">Additional Prayers</a>
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
                <div class="text-center" id="fammor"><h2>Forms of Prayer to be used in Families</h2></div>

                <div class="text-center"><h3>MORNING PRAYER.</h3></div>

                <blockquote>

                    <small><i>
                        The Master or Mistress having called together as many of the
                        Family as can conveniently be present, let one of them, or any other
                        who may be appointed, say as followeth, all kneeling, and repeating
                        with him the Lord's Prayer.<br/>
                        <br/>
                    </i></small>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy
                        Name. Thy kingdom come. Thy will be done,
                        On earth as it is in heaven. Give us this day our daily
                        bread. And forgive us our trespasses, As we forgive
                        those who trespass against us. And lead us not into
                        temptation, But deliver us from evil. For thine is the kingdom,
                        and the power, and the glory, for ever and ever. Amen.<br/>
                        <br/>
                    </b>

                    <div class="text-center">
                        <small><i>
                            Here may follow the Collect for the day.<br/>
                            <br/>
                        </i></small>
                    </div>
                    <br/>

                    <div class="text-center"><i><b>Acknowledgment of God's Mercy and Preservation,
                        especially through the Night past.</b>
                        <br/>
                    </i></div>
                    <br/>

                    <b>
                        ALMIGHTY and everlasting God, in whom we live and
                        move and have our being; We, thy needy creatures,
                        render thee our humble praises, for thy preservation of us
                        from the beginning of our lives to this day, and especially
                        for having delivered us from the dangers of the past night.
                        For these thy mercies, we bless and magnify thy glorious
                        Name; humbly beseeching thee to accept this our morning
                        sacrifice of praise and thanksgiving; for his sake who lay
                        down in the grave, and rose again for us, thy Son our
                        Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <div class="text-center"><i><b>Dedication of Soul and Body to God's Service, with a
                        Resolution to be growing daily in Goodness.</b>
                    </i></div>
                    <br/>

                    <b>
                        AND since it is of thy mercy, O gracious Father, that
                        another day is added to our lives; We here dedicate
                        both our souls and our bodies to thee and thy service, in a
                        sober, righteous, and godly life: in which resolution, do
                        thou, O merciful God, confirm and strengthen us; that, as
                        we grow in age, we may grow in grace, and in the knowledge
                        of our Lord and Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center"><i><b>Prayer for Grace to enable us to perform that Resolution.</b>
                    </i></div>
                    <br/>

                    <b>
                        BUT, O God, who knowest the weakness and corruption
                        of our nature, and the manifold temptations which we
                        daily meet with; We humbly beseech thee to have
                        compassion on our infirmities, and to give us the constant
                        assistance of thy Holy Spirit; that we may be effectually
                        restrained from sin, and incited to our duty. Imprint upon
                        our hearts such a dread of thy judgments, and such a
                        grateful sense of thy goodness to us, as may make us both
                        afraid and ashamed to offend thee. And, above all, keep in
                        our minds a lively remembrance of that great day, in which
                        we must give a strict account of our thoughts, words, and
                        actions to him whom thou hast appointed the Judge of
                        quick and dead, thy Son Jesus Christ our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <div class="text-center"><i><b>For Grace to guide and keep us the following Day, and
                        for God's Blessing on the business of the Same.</b>
                    </i></div>
                    <br/>

                    <b>
                        IN particular, we implore thy grace and protection for the
                        ensuing day. Keep us temperate in all things, and diligent
                        in our several callings. Grant us patience under our
                        afflictions. Give us grace to be just and upright in all our
                        dealings; quiet and peaceable; full of compassion; and ready
                        to do good to all men, according to our abilities and opportunities.
                        Direct us in all our ways. Defend us from all dangers and
                        adversities; and be graciously pleased to take us,
                        and all who are dear to us, under thy fatherly care and protection.
                        These things, and whatever else thou shalt see to
                        be necessary and convenient to us, we humbly beg, through
                        the merits and mediation of thy Son Jesus Christ, our
                        Lord and Saviour. <i>Amen.</i><br/>
                        <br/>
                        <br/>

                        THE grace of our Lord Jesus Christ, and the love of
                        God, and the fellowship of the Holy Ghost, be with
                        us all evermore. <i>Amen.</i><br/>
                    </b>
                    <br/>

                </blockquote>

                <hr/>

                <div class="text-center" id="fameve"><h2>Forms of Prayer to be used in Families</h2></div>

                <div class="text-center"><h3>EVENING PRAYER.</h3></div>

                <blockquote>

                    <small><i>
                        The Family being together, a little before bedtime, let the Master
                        or Mistress, or any other who may be appointed, say as followeth,
                        all kneeling, and repeating with him the Lord's Prayer.<br/>
                        <br/>
                    </i></small>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy
                        Name. Thy kingdom come. Thy will be done, On
                        earth as it is in heaven. Give us this day our daily bread.
                        And forgive us our trespasses, As we forgive those who trespass
                        against us. And lead us not into temptation, But deliver
                        us from evil. For thine is the kingdom, and the power,
                        and the glory, for ever and ever. Amen.<br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center">
                        <small><i>
                            Here may follow the Collect for the day.<br/>
                            <br/>
                            <br/>
                        </i></small>
                    </div>

                    <div class="text-center"><i><b>Confession of Sins, with a Prayer for Contrition
                        and Pardon.</b></i></div>
                    <br/>

                    <b>
                        MOST merciful God, who art of purer eyes than to behold iniquity,
                        and hast promised forgiveness to all those who confess and forsake
                        their sins; We come before thee in an humble sense of our own
                        unworthiness, acknowledging our manifold transgressions of thy
                        righteous laws. * But, O gracious Father, who desirest not the death
                        of a sinner, look upon us, we beseech thee, in mercy, and forgive us all
                        our transgressions. Make us deeply sensible of the great evil of them;
                        and work in us an hearty contrition; that we may obtain
                        forgiveness at thy hands, who art ever ready to receive
                        humble and penitent sinners; for the sake of thy Son Jesus
                        Christ, our only Saviour and Redeemer. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <small><i>
                        * Here let him who reads make a short pause, that every
                        one may secretly confess the sins and failings of that day<br/>
                        <br/>
                    </i></small>
                    <br/>


                    <div class="text-center"><i><b>Prayer for Grace to reform and grow Better.</b></i></div>
                    <br/>

                    <b>
                        AND lest, through our own frailty, or the temptations
                        which encompass us, we be drawn again into sin,
                        vouchsafe us, we beseech thee, the direction and assistance
                        of thy Holy Spirit. Reform whatever is amiss in the temper
                        and disposition of our souls; that no unclean thoughts,
                        unlawful designs, or inordinate desires, may rest there.
                        Purge our hearts from envy, hatred, and malice; that we
                        may never suffer the sun to go down upon our wrath; but
                        may always go to our rest in peace, charity, and good-will,
                        with a conscience void of offence towards thee, and towards
                        men; that so we may be preserved pure and blameless, unto
                        the coming of our Lord and Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center"><i><b>The Intercession.</b></i></div>
                    <br/>

                    <b>
                        AND accept, O Lord, our intercessions for all mankind.
                        Let the light of thy Gospel shine upon all nations;
                        and may as many as have received it, live as becomes it.
                        Be gracious unto thy Church; and grant that every member
                        of the same, in his vocation and ministry, may serve
                        thee faithfully. Bless all in authority over us; and so rule
                        their hearts and strengthen their hands, that they may punish
                        wickedness and vice, and maintain thy true religion and
                        virtue. Send down thy blessings, temporal and spiritual,
                        upon all our relations, friends, and neighbours. Reward all
                        who have done us good, and pardon all those who have
                        done or wish us evil, and give them repentance and better
                        minds. Be merciful to all who are in any trouble; and do
                        thou, the God of pity, administer to them according to
                        their several necessities; for his sake who went about doing
                        good, thy Son our Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>

                    <div class="text-center"><i><b>The Thanksgiving.</b></i></div>
                    <br/>

                    <b>
                        TO our prayers, O Lord, we join our unfeigned thanks
                        for all thy mercies; for our being, our reason, and all
                        other endowments and faculties of soul and body; for our
                        health, friends, food, and raiment, and all the other comforts
                        and conveniences of life. Above all, we adore thy mercy in
                        sending thy only Son into the world, to redeem us from
                        sin and eternal death, and in giving us the knowledge and
                        sense of our duty towards thee. We bless thee for thy patience
                        with us, notwithstanding our many and great provocations;
                        for all the directions, assistances, and comforts of
                        thy Holy Spirit; for thy continual care and watchful providence
                        over us through the whole course of our lives; and
                        particularly for the mercies and benefits of the past day;
                        beseeching thee to continue these thy blessings to us, and to
                        give us grace to show our thankfulness in a sincere obedience
                        to his laws, through whose merits and intercession we
                        received them all, thy Son our Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <div class="text-center"><i><b>Prayer for God's Protection through the Night following.</b>
                    </i></div>
                    <br/>

                    <b>
                        IN particular, we beseech thee to continue thy gracious
                        protection to us this night. Defend us from all dangers
                        and mischiefs, and from the fear of them; that we may
                        enjoy such refreshing sleep as may fit us for the duties of the
                        coming day. And grant us grace always to live in such a
                        state that we may never be afraid to die; so that, living and
                        dying, we may be thine, through the merits and satisfaction
                        of thy Son Christ Jesus, in whose Name we offer up
                        these our imperfect prayers. <i>Amen.</i><br/>
                        <br/>
                        <br/>

                        THE grace of our Lord Jesus Christ, and the love of
                        God, and the fellowship of the Holy Ghost, be with
                        us all evermore. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <small><i>
                        On Sundays, and on other days when it may be convenient, it will
                        be proper to begin with a Chapter, or part of a Chapter, from the
                        New Testament.<br/>
                        <br/>
                    </i></small>

                </blockquote>

                <hr/>
                <div class="text-center" id="famsho"><h2>Forms of Prayer to be used in Families</h2></div>

                <div class="text-center"><h3>A SHORTER FORM.<br/>
                    MORNING</h3></div>

                <blockquote>

                    <small><i>
                        After the reading of a brief portion of Holy Scripture, let the
                        Head of the Household, or some other member of the family, say as
                        followeth, all kneeling, and repeating with him the Lord's Prayer.<br/>
                        <br/>
                    </i></small>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy Name.
                        Thy kingdom come. Thy will be done, On earth as it
                        is in heaven. Give us this day our daily bread. And forgive
                        us our trespasses, As we forgive those who trespass against
                        us. And lead us not into temptation, But deliver us from
                        evil. For thine is the kingdom, and the power, and the
                        glory, for ever and ever. Amen.<br/>
                        <br/>

                        O LORD, our heavenly Father, Almighty and everlasting God,
                        who hast safely brought us to the beginning of this day;
                        Defend us in the same with thy mighty
                        power; and grant that this day we fall into no sin, neither
                        run into any kind of danger; but that all our doings, being
                        ordered by thy governance, may be righteous in thy sight;
                        through Jesus Christ our Lord. <i>Amen.</i><br/>
                        <br/>
                    </b>

                    <small><i>
                        Here may be added any special Prayers.<br/>
                        <br/>
                    </i></small>

                    <b>
                        THE grace of our Lord Jesus Christ, and the love of
                        God, and the fellowship of the Holy Ghost, be with
                        us all evermore. <i>Amen.</i><br/>
                    </b>
                    <br/>

                </blockquote>

                <br/>
                <br/>
                <br/>
                <br/>

                <div class="text-center"><h3>A SHORTER FORM.<br/>
                    EVENING</h3></div>

                <blockquote>

                    <small><i>
                        After the reading of a brief portion of Holy Scripture, let the
                        Head of the Household, or some other member of the family, say
                        as followeth, all kneeling and repeating with him the Lord's Prayer.<br/>
                        <br/>
                    </i></small>

                    <b>
                        OUR Father, who art in heaven, Hallowed be thy
                        Name. Thy kingdom come. Thy will be done, On
                        earth as it is in heaven. Give us this day our daily bread.
                        And forgive us our trespasses, As we forgive those who trespass
                        against us. And lead us not into temptation, But deliver us from
                        evil. For thine is the kingdom, and the power,
                        and the glory, for ever and ever. Amen.<br/>
                        <br/>

                        LIGHTEN our darkness, we beseech thee, O Lord; and by
                        thy great mercy defend us from all perils and dangers
                        of this night; for the love of thy only Son, our Saviour,
                        Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>

                    <small><i>
                        Here may be added any special Prayers.<br/>
                        <br/>
                    </i></small>

                    <b>
                        THE Lord bless us and keep us. The Lord make his face
                        to shine upon us, and be gracious unto us. The Lord
                        lift up his countenance upon us, and give us peace, this
                        night and evermore. <i>Amen.</i><br/>
                    </b>
                    <br/>

                </blockquote>

                <hr/>

                <div class="text-center" id="addit"><h2>Forms of Prayer to be used in Families</h2></div>

                <div class="text-center"><h3>ADDITIONAL PRAYERS</h3></div>

                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <a href="#pray01">
                                    <small>
                                        For the Spirit of Prayer.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray02">
                                    <small>
                                        In the Morning.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray03">
                                    <small>
                                        At Night.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray04">
                                    <small>Sunday Morning.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray05">
                                    <small>
                                        For Quiet Confidence.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray06">
                                    <small>
                                        For Guidance.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray07">
                                    <small>
                                        For Trustfulness.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray08">
                                    <small>
                                        For Joy in God's Creation.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray09">
                                    <small>
                                        For the Children.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray10">
                                    <small>
                                        For the Absent.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray11">
                                    <small>
                                        For Those We Love.
                                    </small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <a href="#pray12">
                                    <small>
                                        For the Recovery of a Sick Person.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray13">
                                    <small>
                                        For One about to undergo an Operation.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray14">
                                    <small>
                                        For a Birthday.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray15">
                                    <small>
                                        For an Anniversary of One Departed.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray16">
                                    <small>
                                        For Those in Mental Darkness.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray17">
                                    <small>
                                        For a Blessing on the Families of the Land.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray18">
                                    <small>
                                        For all Poor, Homeless, and Neglected Folk.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray19">
                                    <small>
                                        For Faithfulness in the Use of this World's Goods.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray20">
                                    <small>
                                        A General Intercession.
                                    </small>
                                </a>
                            </li>
                            <li>
                                <a href="#pray21">
                                    <small>
                                        Grace before Meat.
                                    </small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <blockquote>

                    <a id="pray01">&nbsp;</a>
                    <div class="text-center"><i><b>For the Spirit of Prayer.</b>
                    </i></div>
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
                    <br/>


                    <a id="pray02">&nbsp;</a>
                    <div class="text-center"><i><b>In the Morning.</b>
                    </i></div>
                    <br/>

                    <b>
                        O GOD, the King eternal, who dividest the day from
                        the darkness, and turnest the shadow of death into the
                        morning; Drive far off from us all wrong desires, incline
                        our hearts to keep thy law, and guide our feet into the way
                        of peace; that having done thy will with cheerfulness while
                        it was day, we may, when the night cometh, rejoice to give
                        thee thanks; through Jesus Christ our Lord. <i>Amen.</i><br/>
                        <br/>

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
                    <br/>


                    <a id="pray03">&nbsp;</a>
                    <div class="text-center"><i><b>At Night.</b>
                    </i></div>
                    <br/>

                    <b>
                        O LORD, support us all the day long, until the shadows
                        lengthen and the evening comes, and the busy world
                        is hushed, and the fever of life is over, and our work is
                        done. Then in thy mercy grant us a safe lodging, and a holy
                        rest, and peace at the last. <i>Amen.</i><br/>
                        <br/>

                        O GOD, who art the life of mortal men, the light of the
                        faithful, the strength of those who labour, and the
                        repose of the dead; We thank thee for the timely blessings
                        of the day, and humbly supplicate thy merciful protection
                        all this night. Bring us, we beseech thee, in safety to the
                        morning hours; through him who died for us and rose
                        again, thy Son, our Saviour Jesus Christ. <i>Amen.</i><br/>
                    </b>
                    <br/>
                    <br/>


                    <a id="pray04">&nbsp;</a>
                    <div class="text-center"><i><b>Sunday Morning.</b></i>
                    </div>
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
                    <br/>


                    <a id="pray05">&nbsp;</a>
                    <div class="text-center"><i><b>For Quiet Confidence.</b>
                    </i></div>
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
                    <br/>


                    <a id="pray06">&nbsp;</a>
                    <div class="text-center"><i><b>For Guidance.</b>
                    </i></div>
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


                    <a id="pray07">&nbsp;</a>
                    <div class="text-center"><i><b>For Trustfulness.</b></i>
                    </div>
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


                    <a id="pray08">&nbsp;</a>
                    <div class="text-center"><i><b>For Joy in God's Creation.</b></i>
                    </div>
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


                    <a id="pray09">&nbsp;</a>
                    <div class="text-center"><i><b>For the Children.</b></i>
                    </div>
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


                    <a id="pray10">&nbsp;</a>
                    <div class="text-center"><i><b>For the Absent.</b></i>
                    </div>
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


                    <a id="pray11">&nbsp;</a>
                    <div class="text-center"><i><b>For Those We Love.</b>
                    </i></div>
                    <br/>

                    <b>
                        ALMIGHTY God, we entrust all who are dear to us to
                        thy never-failing care and love, for this life and the
                        life to come; knowing that thou art doing for them better
                        things than we can desire or pray for; through Jesus Christ
                        our Lord. <i>Amen.</i><br/>
                    </b>
                    <br/>


                    <a id="pray12">&nbsp;</a>
                    <div class="text-center"><i><b>For the Recovery of a Sick Person.</b>
                    </i></div>
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


                    <a id="pray13">&nbsp;</a>
                    <div class="text-center"><i><b>For One about to undergo an Operation.</b></i>
                    </div>
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


                    <a id="pray14">&nbsp;</a>
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


                    <a id="pray15">&nbsp;</a>
                    <div class="text-center"><i><b>For an Anniversary of One Departed.</b></i>
                    </div>
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


                    <a id="pray16">&nbsp;</a>
                    <div class="text-center"><i><b>For Those in Mental Darkness.</b></i>
                    </div>
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


                    <a id="pray17">&nbsp;</a>
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


                    <a id="pray18">&nbsp;</a>
                    <div class="text-center"><i><b>For all Poor, Homeless, and Neglected Folk.</b></i>
                    </div>
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


                    <a id="pray19">&nbsp;</a>
                    <div class="text-center"><i><b>For Faithfulness in the Use of this World's Goods.</b></i>
                    </div>
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


                    <a id="pray20">&nbsp;</a>
                    <div class="text-center"><i><b>A General Intercession.</b></i>
                    </div>
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


                    <a id="pray21">&nbsp;</a>
                    <div class="text-center"><i><b>Grace before Meat.</b></i>
                    </div>
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
                <?php include('event-calculation.php'); ?>
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
