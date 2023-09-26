<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
require_once('show-event-list.php');

$db_handle = new DBController();

$url = $_SERVER['REQUEST_URI'];
$id = substr($url, strrpos($url, '/') + 1);

$extension = '../';
$description = '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo $extension; ?>assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title><?php echo $id; ?> Sunday Calendar - Common Prayer Online</title>
    <link href="<?php echo $extension; ?>assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $extension; ?>assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href='<?php echo $extension; ?>assets/vendor/Animate/animate.min.css' rel='stylesheet'/>
    <link href="<?php echo $extension; ?>assets/css/style.css" rel="stylesheet"/>

    <style>
        td{
            height: 70px;
            border: 1px solid black;
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
                           href="<?php echo $extension; ?>kallender">Kalendar</a>
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
            <h1 class="cpo-content-page-title"><?php echo $id; ?> Sunday Calendar</h1>
            <p>As Written in the 1928 Book of Common Prayer</p>
        </div>
        <div class="col-lg-6 text-center mt-3">
            <p>Developed and Presented by</p>
            <h3>www.CommonPrayerOnline.org</h3>
            <p>An Independent, Traditional</p>
            <p>1928 BCP Ministry</p>
        </div>
        <div class="col-lg-6 text-center mt-3">
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
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100"
                       href="<?php echo $extension; ?>sunday/<?php echo $id - 1; ?>"><?php echo $id - 1; ?> Calendar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100"
                       href="<?php echo $extension; ?>sunday/<?php echo $id + 1; ?>"><?php echo $id + 1; ?> Calendar</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-3">
            <?php


            // Existing date ranges array
            $dateRanges = [];

            // Function to add a new date range to the array
            function addDateRange(&$dateRanges, $start_date, $end_date) {
                $dateRanges[] = array(
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                );
            }




            $val_1 = [];
            $val=[];


            foreach (calculateLiturgicalDatess($id-1) as $eventName => $date) {
                $dateTime = DateTime::createFromFormat('m/d/Y', $date);

                if ($dateTime->format('Y') == $id) {
                    $val_1[$eventName] = $date;
                }
            }

            $septuagesimaSunday='';
            $easterSunday='';
            $trinity='';
            $sundayAdvent='';

            foreach (calculateLiturgicalDatess($id) as $eventName => $date) {
                $dateTime = DateTime::createFromFormat('m/d/Y', $date);

                if ($dateTime->format('Y') == $id) {

                    if($eventName=='Septuagesima Sunday'){
                        $septuagesimaSunday=$date;
                    }else if($eventName=='Easter'){
                        $easterSunday=$date;
                    }else if($eventName=='1st Sunday after Trinity'){
                        $trinity=$date;
                    }else if($eventName=='1st Sunday of Advent'){
                        $sundayAdvent=$date;
                    }

                    $val[$eventName] = $date;
                }
            }


/*            echo '<pre>';
            echo var_dump($val);
            echo '</pre>';*/


            addDateRange($dateRanges, $id.'-01-01', $id.'-01-13');
            addDateRange($dateRanges, $id.'-01-14', date('Y-m-d',strtotime("$septuagesimaSunday -1 day")));
            addDateRange($dateRanges,date('Y-m-d',strtotime($septuagesimaSunday)), date('Y-m-d',strtotime("$easterSunday -1 day")));
            addDateRange($dateRanges,date('Y-m-d',strtotime($easterSunday)), date('Y-m-d',strtotime("$trinity -1 day")));
            addDateRange($dateRanges,date('Y-m-d',strtotime($trinity)), date('Y-m-d',strtotime("$sundayAdvent -1 day")));
            addDateRange($dateRanges, $id.'-11-01', $id.'-11-08');
            addDateRange($dateRanges,date('Y-m-d',strtotime($sundayAdvent)), $id.'-12-24');
            addDateRange($dateRanges, $id.'-12-25', $id.'-12-31');

            // Example of accessing the date ranges
/*            foreach ($dateRanges as $range) {
                $start_date = $range['start_date'];
                $end_date = $range['end_date'];

                echo "Start Date: $start_date, End Date: $end_date<br>";
            }*/

            ?>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        ?>
                        <tr>
                            <td style="font-size: 22px">
                                <?php
                                $monthName = date('F', strtotime($i . '/01/' . $id));
                                echo $monthName;
                                ?>
                            </td>
                            <?php
                            $j = 1;
                            $desiredMonth = date('m', strtotime($i . '/01/' . $id));
                            foreach ($val_1 as $event => $date) {
                                if (substr($date, 0, 2) == substr($desiredMonth, 0, 2)&&substr($date, 6, 4)==$id&&date('l', strtotime($date))=='Sunday') {
                                    echo '<td class="cpo-white"><b>'.substr($date, 3, 2).'</b>&nbsp;&nbsp;<small>' . $event . '</small></td>';
                                    $j += 1;
                                }
                            }

                            foreach ($val as $event => $date) {
                                if (substr($date, 0, 2) == substr($desiredMonth, 0, 2)&&substr($date, 6, 4)==$id&&(date('l', strtotime($date))=='Sunday')) {


                                    $color='';
                                    $condition='';

                                    if($event=='Pentecost (Whitsunday)'){
                                        $color='cpo-red';
                                        $condition='0';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[0]['start_date'])&&strtotime($date)<=strtotime($dateRanges[0]['end_date'])){
                                        $color='cpo-white';
                                        $condition='1';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[1]['start_date'])&&strtotime($date)<=strtotime($dateRanges[1]['end_date'])){
                                        $color='cpo-green';
                                        $condition='2';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[2]['start_date'])&&strtotime($date)<=strtotime($dateRanges[2]['end_date'])){
                                        $color='cpo-pink';
                                        $condition='3';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[3]['start_date'])&&strtotime($date)<=strtotime($dateRanges[3]['end_date'])){
                                        $color='cpo-white';
                                        $condition='4';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[5]['start_date'])&&strtotime($date)<=strtotime($dateRanges[5]['end_date'])){
                                        $color='cpo-white';
                                        $condition='5';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[4]['start_date'])&&strtotime($date)<=strtotime($dateRanges[4]['end_date'])){
                                        $color='cpo-green';
                                        $condition='6';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[6]['start_date'])&&strtotime($date)<=strtotime($dateRanges[6]['end_date'])){
                                        $color='cpo-pink';
                                        $condition='7';
                                    }
                                    else if(strtotime($date)>=strtotime($dateRanges[7]['start_date'])&&strtotime($date)<=strtotime($dateRanges[7]['end_date'])){
                                        $color='cpo-white';
                                        $condition='8';
                                    }
                                    else{
                                        $color='cpo-white';
                                        $condition='9';
                                    }


                                    echo '<td class="' . $color . '" title="' . $condition . '"><b>'.substr($date, 3, 2).'</b>&nbsp;&nbsp;<small>' . $event . '</small></td>';
                                    $j += 1;
                                }
                            }
                            if ($j == 4) {
                                echo '<td></td>';
                                echo '<td></td>';
                            } else if ($j == 5) {
                                echo '<td></td>';
                            }
                            ?>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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

<script src="<?php echo $extension; ?>assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="<?php echo $extension; ?>assets/vendor/Wow/wow.js"></script>
<script src="<?php echo $extension; ?>assets/js/main.js"></script>
</body>
</html>
