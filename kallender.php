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
    $sundays = 0;
    for ($day = 1; $day <= 30; $day++) {
        $currentDate = strtotime("$year-09-$day");
        $dayOfWeek = date('w', $currentDate);

        if ($dayOfWeek === '0') {
            $sundays++;
        }

        if ($sundays === 3) {
            return date('Y-m-d', $currentDate);
        }
    }

    return false;
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

$eventList = array();

$pentecostWeek = array();
$emberDays = array();

$epiphany = "06-01-" . $currentYear;

$eventList[date('Y-m-d', strtotime("$epiphany"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +1 day"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +2 days"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +3 days"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +4 days"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +5 days"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +6 days"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("$epiphany +7 days"))] = array('event' => 'of the Octave<br/>of Epiphany', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("25-01-" . $currentYear))] = array('event' => 'Conversion of St. Paul', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("02-02-" . $currentYear))] = array('event' => 'Presentation of Christ (Purification of BVM)', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("24-02-" . $currentYear))] = array('event' => 'St. Matthias the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("25-03-" . $currentYear))] = array('event' => 'Annunciation of the B. V. M.', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("25-04-" . $currentYear))] = array('event' => 'St. Mark the Evangelist', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("01-05-" . $currentYear))] = array('event' => 'St. Philip & St. James, Apostles', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("11-06-" . $currentYear))] = array('event' => 'St. Barnabas the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("24-06-" . $currentYear))] = array('event' => 'St. John the Baptist', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("29-06-" . $currentYear))] = array('event' => 'St. Peter the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("04-07-" . $currentYear))] = array('event' => 'Independence Day', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("25-07-" . $currentYear))] = array('event' => 'St. James the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("06-08-" . $currentYear))] = array('event' => 'Transfiguration of Our Lord', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("24-08-" . $currentYear))] = array('event' => 'St. Bartholomew the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("21-09-" . $currentYear))] = array('event' => 'St. Matthew, Apostle & Evangelist', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("29-09-" . $currentYear))] = array('event' => 'St. Michael & All Angels', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("18-10-" . $currentYear))] = array('event' => 'St. Luke the Evangelist', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("28-10-" . $currentYear))] = array('event' => 'St. Simon & St. Jude Apostles', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("01-11-" . $currentYear))] = array('event' => 'All Saints Day', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("02-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("03-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("04-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("05-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("06-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("07-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("08-11-" . $currentYear))] = array('event' => 'of the Octave<br/>of All Saints', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("30-11-" . $currentYear))] = array('event' => 'St. Andrew the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("21-12-" . $currentYear))] = array('event' => 'St. Thomas the Apostle', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("24-12-" . $currentYear))] = array('event' => 'Christmas Eve', 'color' => 'cpo-pink');
$eventList[date('Y-m-d', strtotime("26-12-" . $currentYear))] = array('event' => 'St. Stephen, Deacon & Martyr<br/>(of the Octave)', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("27-12-" . $currentYear))] = array('event' => 'St. John the Evangelist<br/>(of the Octave)', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("28-12-" . $currentYear))] = array('event' => 'The Holy Innocents<br/>(of the Octave)', 'color' => 'cpo-red');
$eventList[date('Y-m-d', strtotime("29-12-" . $currentYear))] = array('event' => 'of the Octave<br/>of Christmas', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("30-12-" . $currentYear))] = array('event' => 'of the Octave<br/>of Christmas', 'color' => 'cpo-white');
$eventList[date('Y-m-d', strtotime("31-12-" . $currentYear))] = array('event' => 'of the Octave<br/>of Christmas', 'color' => 'cpo-white');


foreach (calculateLiturgicalDatess((int)$currentYear) as $eventName => $date) {
    $dateTime = DateTime::createFromFormat('m/d/Y', $date);

    if ($dateTime->format('Y') == $currentYear) {

        if ($eventName == 'Septuagesima Sunday') {
            $septuagesimaSunday = $date;
        } else if ($eventName == 'Easter') {
            $easterSunday = $date;

            $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Easter Monday<br/>(of the Octave)', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Easter Tuesday<br/>(of the Octave)', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +4 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +5 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +6 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +7 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-white');
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


            $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Whitsun Monday', 'color' => 'cpo-red');
            $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Whitsun Tuesday', 'color' => 'cpo-red');

        } else if ($eventName == '1st Sunday in Lent') {
            array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));
        } else if ($eventName == '3rd Sunday of Advent') {
            array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
            array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));
        } else if ($eventName == 'Quinquagesima Sunday') {
            $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'Ash Wednesday', 'color' => 'cpo-pink');
        } else if ($eventName == 'Palm Sunday') {
            $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Monday in Holy Week', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Tuesday in Holy Week', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'Wednesday in Holy Week', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +4 days"))] = array('event' => 'Maundy Thursday', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +5 days"))] = array('event' => 'Good Friday', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +6 days"))] = array('event' => 'Holy Saturday', 'color' => 'cpo-pink');
        } else if ($eventName == '5th Sunday after Easter (Rogation Sunday)') {
            $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Rogation Monday', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Rogation Tuesday', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'Rogation Wednesday', 'color' => 'cpo-pink');
            $eventList[date('Y-m-d', strtotime("$date +4 days"))] = array('event' => 'Ascension Day', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +5 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +6 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +7 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +8 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +9 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +10 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
            $eventList[date('Y-m-d', strtotime("$date +11 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-white');
        } else if ($eventName == 'Sunday next before Advent') {
            $eventList[date('Y-m-d', strtotime("$date -3 days"))] = array('event' => 'Thanksgiving', 'color' => 'cpo-white');
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

        table th{
            width: 250px;
        }

        table td {
            width: 250px;
            height: 170px;
        }

        td {
            position: relative;
            height: 140px;
            border: 1px solid black;
        }

        tr td .row {
            overflow: unset;
            width: 100%;
        }

        .pray-sec {
            position: absolute;
            bottom: 5px;
        }

        /* Custom CSS to always show scrollbar */
        .table-responsive {
            overflow-x: auto !important;
            -webkit-overflow-scrolling: touch; /* Optional: For smooth scrolling on iOS devices */
        }


        /* Custom CSS to show scrollbar on mobile */
        @media (max-width: 767.98px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch; /* Optional: For smooth scrolling on iOS devices */
            }
        }

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
        <div class="row pt-5">
            <div class="col-lg-3 wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>home">Home</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>daily-office">
                            Daily <br/>
                            Offices
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>morning-prayer">
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
                           href="<?php echo $extension; ?>evening-prayer">
                            Evening <br/>
                            Prayer
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>hourly-office">
                            Hourly <br/>
                            Offices
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>penitential-office">
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
                           href="<?php echo $extension; ?>visitation-of-the-sick">
                            Visitation <br/>
                            of Sick
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="<?php echo $extension; ?>family-prayer">
                            Family <br/>
                            Prayer
                        </a>
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
    <div class="row pt-5">
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension;
                    echo 'catholic/' . $currentYear . '-'.$currentMonth;
                    ?>">Anglo-Catholic</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension;
                    echo 'bcpcal/' . $currentYear . '-'.$currentMonth;
                    ?>">1928 ECUSA</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension;
                    echo 'kallender/' . $currentYear . '-'.$currentMonth;
                    ?>">Readings</a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#">Abbreviations Used</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Kalendar Start -->
<section class="container-fluid">
    <div class="row pt-3">
        <div class="col-12 text-center">
            <h1>Ordo Kalendar</h1>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-01';
                       ?>">January</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-02';
                       ?>">February</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-03';
                       ?>">March</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-04';
                       ?>">
                        April
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-05';
                       ?>">
                        May
                    </a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-06';
                       ?>">June</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-07';
                       ?>">July</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-08';
                       ?>">August</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-09';
                       ?>">September</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-10';
                       ?>">October</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-11';
                       ?>">November</a>
                </div>
                <div class="col-4 mb-3">
                    <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                       href="<?php echo $extension;
                       echo 'kallender/' . $currentYear . '-12';
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


            function isLeapYear($year)
            {
                return ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0));
            }

            /*                        echo '<pre>';
                                    echo var_dump($eventList);
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
                $calendarHTML .= '<td class="bg-secondary"></td>';
            }

            $currentDay = 1;
            while ($currentDay <= $lastDay->format('d')) {

                if ($dayOfWeek == 7) {
                    $calendarHTML .= '</tr><tr>';
                    $dayOfWeek = 0;
                }

                $currentDate = "$currentYear-$currentMonth-$currentDay";

                if (in_array(date('Y-m-d', strtotime($currentDate)), $pentecostWeek)) {
                    $color = 'cpo-red';
                    $condition = '0';
                } else if (strtotime($currentDate) >= strtotime($dateRanges[0]['start_date']) && strtotime($currentDate) <= strtotime($dateRanges[0]['end_date'])) {
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
                $event = '';
                $url = '';

                $text = '';

                if (isset($val_1['1st Sunday after Christmas']) && $val_1['1st Sunday after Christmas'] == date('m/d/Y', strtotime($currentDate))) {
                    $event = "1st Sunday after Christmas";
                    $url = $event;

                    $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $url);
                    $url = str_replace('  ', '-', $url);
                    $url = str_replace(' ', '-', $url);

                    $text .= '<a href="../event/' . $url . '">' . $event . '</a>';
                } elseif (isset($val_1['2nd Sunday after Christmas']) && $val_1['2nd Sunday after Christmas'] == date('m/d/Y', strtotime($currentDate))) {
                    $event = "2nd Sunday after Christmas";
                    $url = $event;

                    $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $url);
                    $url = str_replace('  ', '-', $url);
                    $url = str_replace(' ', '-', $url);

                    $text .= '<a href="../event/' . $url . '">' . $event . '</a>';
                } else {
                    if (in_array(date('Y-m-d', strtotime($currentDate)), $emberDays)) {
                        $event = 'Ember Days';
                        $url = $event;

                        $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $url);
                        $url = str_replace('  ', '-', $url);
                        $url = str_replace(' ', '-', $url);

                        $text .= '<a href="../event/' . $url . '">' . $event . '</a>';

                        if ($condition != '0') {
                            $color = 'cpo-pink';
                        }
                    } else {
                        $event = getOccasionNameSunday($currentDate);
                        $url = $event;

                        $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $url);
                        $url = str_replace('  ', '-', $url);
                        $url = str_replace(' ', '-', $url);

                        $text .= '<a href="../event/' . $url . '">' . $event . '</a>';
                    }
                }

                if (isset($eventList[date('Y-m-d', strtotime($currentDate))])) {
                    if ($event == '') {
                        $event = $eventList[date('Y-m-d', strtotime($currentDate))]['event'];

                        $url = $event;

                        $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $url);
                        $url = str_replace('  ', '-', $url);
                        $url = str_replace(' ', '-', $url);


                        $parts = explode('<br/>', $eventList[date('Y-m-d', strtotime($currentDate))]['event']);
                        if ($parts[0] == 'of the Octave') {
                            $event = '<small>' . $eventList[date('Y-m-d', strtotime($currentDate))]['event'] . '</small>';
                            $text .= $event;
                        } else {
                            if (isset($parts[1]) && $parts[1] == '(of the Octave)') {

                                $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $parts[0]);
                                $url = str_replace('  ', '-', $url);
                                $url = str_replace(' ', '-', $url);

                                $text .= '<a href="../event/' . $url . '">' . $parts[0] . '</a><br/><small>(of the Octave)</small>';
                            } else {
                                $text .= '<a href="../event/' . $url . '">' . $event . '</a>';
                            }
                        }


                    } else {

                        $parts = explode('<br/>', $eventList[date('Y-m-d', strtotime($currentDate))]['event']);

                        if ($parts[0] == 'of the Octave') {
                            $event = '<br/><small>(of the octave)</small>';
                            $text .= $event;
                        } else {
                            if (isset($parts[1]) && $parts[1] == '(of the Octave)') {
                                $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $parts[0]);
                                $url = str_replace('  ', '-', $url);
                                $url = str_replace(' ', '-', $url);

                                $text .= '<a href="../event/' . $url . '">' . $parts[0] . '</a><br/><small>(of the Octave)</small>';
                            } else {
                                if ($parts[0] == 'of the Octave') {
                                    $event = '<br/><small>' . $parts[0] . '</small>';
                                    $text .= $event;
                                } else {
                                    $url = preg_replace('/[^A-Za-z0-9\- ]/', '', $parts[0]);
                                    $url = str_replace('  ', '-', $url);
                                    $url = str_replace(' ', '-', $url);

                                    $text .= '<br/><a href="../event/' . $url . '">' . $parts[0] . '</a>';
                                }
                            }
                        }
                    }
                    $color = $eventList[date('Y-m-d', strtotime($currentDate))]['color'];
                }


                $dayOfYear = (int)date('z', strtotime($currentDate)) + 1;

                if (isLeapYear($currentYear) && $dayOfYear > 60) {
                    $dayOfYear -= 1;
                }


                $calendarHTML .= '<td class="' . $color . '">' . $currentDay . '<br/> <p class="text-center pt-2">' . $text . '</p><div class="row pray-sec"><div class="col-6 text-start"><a class="btn btn-primary cpo-footer-btn pray-btn" href="../morn-pray/' . $dayOfYear . '">MORN PRY</a></div><div class="col-6 text-end"><a class="btn btn-primary cpo-footer-btn pray-btn" href="../even-pray/' . $dayOfYear . '">EVEN PRY</a></div></div></td>';


                $currentDay++;
                $dayOfWeek++;
            }

            while ($dayOfWeek < 7) {
                $calendarHTML .= '<td class="bg-secondary"></td>';
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
