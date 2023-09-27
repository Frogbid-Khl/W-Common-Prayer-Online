<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');
$db_handle = new DBController();

$url = $_SERVER['REQUEST_URI'];
$id = substr($url, strrpos($url, '/') + 1);

$extension = '../';
$description = '';

$currentYear = substr($id,0,4);
$currentMonth = substr($id,5,2);

// Function to generate the calendar
function generateCalendar($month, $year) {
    $firstDay = new DateTime("$year-$month-01");
    $lastDay = new DateTime("$year-$month-" . date('t', strtotime("$year-$month-01")));

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



        $calendarHTML .= '<td>' . $currentDay . '</td>';
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

    return $calendarHTML;
}

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
        .table > :not(caption) > * > * {
            background: #d7d2c8 !important;
            border: unset;
        }

        tr{
            border: unset;
        }

        th{
            height: 50px;
            border: 3px solid #847a68 !important;
        }

        td{
            height: 100px;
            border: 3px solid #847a68 !important;
        }

        th,td{
            border: 3px solid #847a68 !important;
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

<!-- Kalendar Start -->
<section class="container-fluid cpo-body-padding-top">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h1>Ordo Kalendar</h1>
        </div>
        <div class="col-12 mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-center" id="currentMonth">
                    <?php
                    echo date('F Y', strtotime("$currentYear-$currentMonth-01"));
                    ?>
                </h3>
                <div class="d-flex justify-content-end align-items-end">
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/'.date('Y-m', strtotime("$currentYear-$currentMonth-01 -1 month"));
                    ?>'" id="prevMonth" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-block d-md-none me-1"><i class="fas fa-chevron-left"></i></button>
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/'.date('Y-m', strtotime("$currentYear-$currentMonth-01 +1 month"));
                    ?>'" id="nextMonth" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-block d-md-none ms-1"><i class="fas fa-chevron-right"></i></button>
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/'.date('Y-m', strtotime("$currentYear-$currentMonth-01 -1 month"));
                    ?>'" id="prevMonthDesktop" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-none d-md-block me-1"><i class="fas fa-chevron-left"></i> Previous Month</button>
                    <button onclick="window.location.href='<?php echo $extension;
                    echo 'kallender/'.date('Y-m', strtotime("$currentYear-$currentMonth-01 +1 month"));
                    ?>'" id="nextMonthDesktop" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-none d-md-block ms-1">Next Month <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2" id="calendar">
        <?php
        echo generateCalendar($currentMonth, $currentYear);
        ?>
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
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>daily-office">The Daily and Hourly Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>occasional-office">Occasional Offices</a>
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
                        <p class="mt-3 d-lg-none d-block"><i class="fa-solid fa-arrow-left"></i>Today's Readings<i class="fa-solid fa-arrow-right"></i></p>
                        <p class="mt-3 d-lg-block d-none"><i class="fa-solid fa-arrow-left"></i> Today's Readings <i class="fa-solid fa-arrow-right"></i></p>
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
