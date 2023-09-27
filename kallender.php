<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
require_once('show-event-list.php');
$db_handle = new DBController();

$currentMonthKallender = date('Y-m');

$url = $_SERVER['REQUEST_URI'];
$id = substr($url, strrpos($url, '/') + 1);

$extension = '../';
$description = '';

$currentYear = substr($id, 0, 4);
$currentMonth = substr($id, 5, 2);


// Existing date ranges array
$dateRanges = [];

// Function to add a new date range to the array
function addDateRange(&$dateRanges, $start_date, $end_date)
{
    $dateRanges[] = array(
        'start_date' => $start_date,
        'end_date' => $end_date,
    );
}

function getThirdSundayDateInSeptember($year)
{
    $sundays=0;
    for ($day = 1; $day <= 30; $day++) { // Loop through the days of September
        $currentDate = strtotime("$year-09-$day");
        $dayOfWeek = date('w', $currentDate);

        if ($dayOfWeek === '0') {
            // If it's a Sunday, increment the Sunday counter
            $sundays++;
        }

        if ($sundays === 3) {
            // If it's the third Sunday, return the date
            return date('Y-m-d', $currentDate);
        }
    }

    return false; // Third Sunday in September not found in the given year
}


$thirdSunday = getThirdSundayDateInSeptember($currentYear);

$val_1 = [];
$val = [];


foreach (calculateLiturgicalDatess((int)$currentYear - 1) as $eventName => $date) {
    $dateTime = DateTime::createFromFormat('m/d/Y', $date);

    if ($dateTime->format('Y') == $currentYear) {
        $val_1[$eventName] = $date;
    }
}

$septuagesimaSunday = '';
$easterSunday = '';
$trinity = '';
$sundayAdvent = '';

$pentecostWeek= array();

$emberDays = array();


foreach (calculateLiturgicalDatess((int)$currentYear) as $eventName => $date) {
    $dateTime = DateTime::createFromFormat('m/d/Y', $date);

    if ($dateTime->format('Y') == $currentYear) {

        if ($eventName == 'Septuagesima Sunday') {
            $septuagesimaSunday = $date;
        } else if ($eventName == 'Easter') {
            $easterSunday = $date;
        } else if ($eventName == '1st Sunday after Trinity') {
            $trinity = $date;
        } else if ($eventName == '1st Sunday of Advent') {
            $sundayAdvent = $date;
        } else if ($eventName == 'Pentecost (Whitsunday)') {
            array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));

            array_push($pentecostWeek, date('Y-m-d', strtotime("$date")));
            array_push($pentecostWeek, date('Y-m-d', strtotime("$date +1 days")));
            array_push($pentecostWeek, date('Y-m-d', strtotime("$date +2 days")));
            array_push($pentecostWeek, date('Y-m-d', strtotime("$date +3 days")));
            array_push($pentecostWeek, date('Y-m-d', strtotime("$date +4 days")));
            array_push($pentecostWeek, date('Y-m-d', strtotime("$date +5 days")));
            array_push($pentecostWeek, date('Y-m-d', strtotime("$date +6 days")));
        } else if ($eventName == '1st Sunday in Lent') {
            array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));
        } else if ($eventName == '3rd Sunday of Advent') {
            array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));
        }

        $val[$eventName] = $date;
    }
}


array_push($emberDays, date('Y-m-d', strtotime("$thirdSunday +3 days")));
array_push($emberDays, date('Y-m-d', strtotime("$thirdSunday +5 days")));
array_push($emberDays, date('Y-m-d', strtotime("$thirdSunday +6 days")));


addDateRange($dateRanges, $currentYear . '-01-01', $currentYear . '-01-13');
addDateRange($dateRanges, $currentYear . '-01-14', date('Y-m-d', strtotime("$septuagesimaSunday -1 day")));
addDateRange($dateRanges, date('Y-m-d', strtotime($septuagesimaSunday)), date('Y-m-d', strtotime("$easterSunday -1 day")));
addDateRange($dateRanges, date('Y-m-d', strtotime($easterSunday)), date('Y-m-d', strtotime("$trinity -1 day")));
addDateRange($dateRanges, date('Y-m-d', strtotime($trinity)), date('Y-m-d', strtotime("$sundayAdvent -1 day")));
addDateRange($dateRanges, $currentYear . '-11-01', $currentYear . '-11-08');
addDateRange($dateRanges, date('Y-m-d', strtotime($sundayAdvent)), $currentYear . '-12-24');
addDateRange($dateRanges, $currentYear . '-12-25', $currentYear . '-12-31');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo $extension; ?>assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title>Ordo Kalendar - Common Prayer Online</title>
    <link href="<?php echo $extension; ?>assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $extension; ?>assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href='<?php echo $extension; ?>assets/vendor/Animate/animate.min.css' rel='stylesheet'/>
    <link href="<?php echo $extension; ?>assets/css/style.css" rel="stylesheet"/>

    <style>
        table {
            table-layout: fixed;
            width: 100%;
        }

        table th, table td {
            width: 200px;
        }

        td {
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
                           href="<?php echo $extension; ?>kallender/<?php echo $currentMonthKallender; ?>">Kalendar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button End -->
</section>




<!-- Kalendar Start -->
<section class="container-fluid cpo-body-padding-top">
    <div class="row pt-3">
        <div class="col-12 pt-5 text-center">
            <h1>Ordo Kalendar</h1>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-01';
                       ?>">January</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-02';
                       ?>">February</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-03';
                       ?>">March</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-04';
                       ?>">
                        April
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-05';
                       ?>">
                        May
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-06';
                       ?>">June</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-07';
                       ?>">July</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-08';
                       ?>">August</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-09';
                       ?>">September</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-10';
                       ?>">October</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-11';
                       ?>">November</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' .$currentYear.'-12';
                       ?>">December</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-12 mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-center" id="currentMonth">
                    <?php
                    echo date('F Y', strtotime("$currentYear-$currentMonth-01"));
                    ?>
                </h3>
                <div class="d-flex justify-content-end align-items-end">
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/' . date('Y-m', strtotime("$currentYear-$currentMonth-01 -1 month"));
                    ?>'" id="prevMonth" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-block d-md-none me-1"><i
                                class="fas fa-chevron-left"></i></button>
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/' . date('Y-m', strtotime("$currentYear-$currentMonth-01 +1 month"));
                    ?>'" id="nextMonth" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-block d-md-none ms-1"><i
                                class="fas fa-chevron-right"></i></button>
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/' . date('Y-m', strtotime("$currentYear-$currentMonth-01 -1 month"));
                    ?>'" id="prevMonthDesktop"
                            class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-none d-md-block me-1"><i
                                class="fas fa-chevron-left"></i> Previous Month
                    </button>
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/' . date('Y-m', strtotime("$currentYear-$currentMonth-01 +1 month"));
                    ?>'" id="nextMonthDesktop"
                            class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-none d-md-block ms-1">Next Month <i
                                class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2" id="calendar">
        <div class="table-responsive">
            <?php


/*            echo '<pre>';
            echo var_dump($emberDays);
            echo '</pre>';*/


            $firstDay = new DateTime("$currentYear-$currentMonth-01");
            $lastDay = new DateTime("$currentYear-$currentMonth-" . date('t', strtotime("$currentYear-$currentMonth-01")));

            $calendarHTML = '<table class="table table-bordered">';
            $calendarHTML .= '<thead><tr>';
            $calendarHTML .= '<th>Sun</th>';
            $calendarHTML .= '<th>Mon</th>';
            $calendarHTML .= '<th>Tue</th>';
            $calendarHTML .= '<th>Wed</th>';
            $calendarHTML .= '<th>Thu</th>';
            $calendarHTML .= '<th>Fri</th>';
            $calendarHTML .= '<th>Sat</th>';
            $calendarHTML .= '</tr></thead>';
            $calendarHTML .= '<tbody><tr>';

            $dayOfWeek = $firstDay->format('w');
            for ($i = 0; $i < $dayOfWeek; $i++) {
                $calendarHTML .= '<td></td>';
            }

            $currentDay = 1;
            while ($currentDay <= $lastDay->format('d')) {

                if ($dayOfWeek == 7) {
                    $calendarHTML .= '</tr><tr>';
                    $dayOfWeek = 0;
                }

                $currentDate = "$currentYear-$currentMonth-$currentDay";

                if(in_array(date('Y-m-d', strtotime($currentDate)),$pentecostWeek)){
                    $color='cpo-red';
                    $condition='0';
                }
                else if (strtotime($currentDate) >= strtotime($dateRanges[0]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[0]['end_date'])) {
                    $color = 'cpo-white';
                    $condition = '1';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[1]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[1]['end_date'])) {
                    $color = 'cpo-green';
                    $condition = '2';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[2]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[2]['end_date'])) {
                    $color = 'cpo-pink';
                    $condition = '3';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[3]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[3]['end_date'])) {
                    $color = 'cpo-white';
                    $condition = '4';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[5]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[5]['end_date'])) {
                    $color = 'cpo-white';
                    $condition = '5';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[4]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[4]['end_date'])) {
                    $color = 'cpo-green';
                    $condition = '6';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[6]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[6]['end_date'])) {
                    $color = 'cpo-pink';
                    $condition = '7';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[7]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[7]['end_date'])) {
                    $color = 'cpo-white';
                    $condition = '8';
                } else {
                    $color = 'cpo-white';
                    $condition = '9';
                }


                if (isset($val_1['1st Sunday after Christmas']) && $val_1['1st Sunday after Christmas'] == date('m/d/Y', strtotime($currentDate))) {
                    $event = "1st Sunday after Christmas";
                } elseif (isset($val_1['2nd Sunday after Christmas']) && $val_1['2nd Sunday after Christmas'] == date('m/d/Y', strtotime($currentDate))) {
                    $event = "2nd Sunday after Christmas";
                } else {
                    if (in_array(date('Y-m-d', strtotime($currentDate)),$emberDays)) {
                        $event = 'Ember Days';

                        if($condition!='0'){
                            $color = 'cpo-pink';
                        }
                    }else{
                        $event = getOccasionNameSunday($currentDate);
                    }
                }


                $calendarHTML .= '<td class="' . $color . '">' . $currentDay . '<br/> <p class="text-center pt-2"><a href="#" style="color: #000000">' . $event . '</a></p></td>';
                $currentDay++;
                $dayOfWeek++;
            }

            // Fill in remaining cells to ensure a consistent number
            while ($dayOfWeek < 7) {
                $calendarHTML .= '<td></td>';
                $dayOfWeek++;
            }

            $calendarHTML .= '</tr></tbody>';
            $calendarHTML .= '</table>';

            echo $calendarHTML;
            ?>
        </div>
    </div>
</section>
<!-- Kalendar End -->

<!-- Main Button Start -->
<section class="container-fluid">
    <div class="card mt-4 cpo-card-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>home">Home</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>daily-office">The Daily and
                    Hourly Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>occasional-office">Occasional
                    Offices</a>
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
