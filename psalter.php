<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');

$db_handle = new DBController();

$currentMonthKallender = date('Y-m');

function convertToRoman($number)
{
    if ($number < 1 || $number > 3999) {
        return "Invalid input";
    }

    $values = array(
        1000, 900, 500, 400,
        100, 90, 50, 40,
        10, 9, 5, 4, 1
    );

    $romanNumerals = array(
        "M", "CM", "D", "CD",
        "C", "XC", "L", "XL",
        "X", "IX", "V", "IV",
        "I"
    );

    $romanNumber = '';

    for ($i = 0; $i < count($values); $i++) {
        while ($number >= $values[$i]) {
            $romanNumber .= $romanNumerals[$i];
            $number -= $values[$i];
        }
    }

    return $romanNumber;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title>The Psalter - Common Prayer Online</title>
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
                THE PSALTER,
                or PSALMS OF DAVID
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
            <p>
                <?php
                $dateString = date("l, F j, Y");
                echo "Today is " . $dateString;
                ?>
            </p>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#topic">
                        Topical Index of Psalms
                    </a>
                </div>
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#num">
                        Numerical Index of Psalms
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <a class="btn btn-primary cpo-btn-home w-100" href="#daily">
                        Daily Psalter (30 Days)
                    </a>
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
                <div class="table-responsive" id="topic">
                    <table class="table table-striped cpo-table">
                        <thead>
                        <tr>
                            <th class="text-center pt-3 pb-3" scope="col" colspan="3"><h3>Topical Selections of
                                    Psalms</h3></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM `topical_selection`";
                        $data = $db_handle->runQuery($query);
                        $row_count = $db_handle->numRows($query);
                        for ($i = 0; $i < $row_count; $i++) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo convertToRoman($data[$i]["id"]); ?></th>
                                <td><?php echo $data[$i]["name"]; ?></td>
                                <td>
                                    <?php
                                    $pslamArray = explode(",", $data[$i]["pslam"]);
                                    foreach ($pslamArray as $value) {

                                        $link = substr($value, strpos($value, ". ") + 1);
                                        $link = trim(strtok($link, ':'));

                                        ?>
                                        <a href="psalm/<?php echo $link; ?>"><?php echo $value . ","; ?></a> &nbsp;
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <hr/>
                <div class="row mt-5" id="daily">
                    <div class="col-12 text-center">
                        <h2>
                            The Daily Psalter (30 days)
                        </h2>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped cpo-table text-center">
                                <thead>
                                <tr>
                                    <th class="pt-3 pb-3" scope="col" colspan="3"><h4>Daily Psalter, Morning</h4></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM `daily_psalter` where day_type='Morning'";
                                $data = $db_handle->runQuery($query);
                                $row_count = $db_handle->numRows($query);
                                for ($i = 0; $i < 30; $i+=3) {
                                    ?>
                                    <tr>
                                        <td><a href="dailym/<?php echo $data[$i]["day_name"]; ?>"><?php echo "Day " . $data[$i]["day_name"]; ?></a></td>
                                        <td><a href="dailym/<?php echo $data[$i + 1]["day_name"]; ?>"><?php echo "Day " . $data[$i + 1]["day_name"]; ?></a></td>
                                        <td><a href="dailym/<?php echo $data[$i + 2]["day_name"]; ?>"><?php echo "Day " . $data[$i + 2]["day_name"]; ?></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped cpo-table text-center">
                                <thead>
                                <tr>
                                    <th class="pt-3 pb-3" scope="col" colspan="3"><h4>Daily Psalter, Evening</h4></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM `daily_psalter` where day_type='Evening'";
                                $data = $db_handle->runQuery($query);
                                $row_count = $db_handle->numRows($query);
                                for ($i = 0; $i < 30; $i+=3) {
                                    ?>
                                    <tr>
                                        <td><a href="dailye/<?php echo $data[$i]["day_name"]; ?>"><?php echo "Day " . $data[$i]["day_name"]; ?></a></td>
                                        <td><a href="dailye/<?php echo $data[$i + 1]["day_name"]; ?>"><?php echo "Day " . $data[$i + 1]["day_name"]; ?></a></td>
                                        <td><a href="dailye/<?php echo $data[$i + 2]["day_name"]; ?>"><?php echo "Day " . $data[$i + 2]["day_name"]; ?></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="row mt-5" id="num">
                    <div class="col-12 text-center">
                        <h2>
                            Numerical Index of Psalms
                        </h2>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped cpo-table text-center">
                                <tbody>
                                <?php
                                $query = "SELECT * FROM `psalm` where id>=1 and id<=75";
                                $data = $db_handle->runQuery($query);
                                $row_count = $db_handle->numRows($query);
                                for ($i = 0; $i < 25; $i++) {
                                    ?>
                                    <tr>
                                        <td><a href="psalm/<?php echo $data[$i]["id"]; ?>"><?php echo "Ps " . $data[$i]["id"]; ?></a></td>
                                        <td><a href="psalm/<?php echo $data[($i * 2) + 1]["id"]; ?>"><?php echo "Ps " . $data[($i * 2) + 1]["id"]; ?></a></td>
                                        <td><a href="psalm/<?php echo $data[($i * 3) + 2]["id"]; ?>"><?php echo "Ps " . $data[($i * 3) + 2]["id"]; ?></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="table-responsive">
                            <table class="table table-striped cpo-table text-center">
                                <tbody>
                                <?php
                                $query = "SELECT * FROM `psalm` where id>=76 and id<=150";
                                $data = $db_handle->runQuery($query);
                                $row_count = $db_handle->numRows($query);
                                for ($i = 0; $i < 25; $i++) {
                                    ?>
                                    <tr>
                                        <td><a href="psalm/<?php echo $data[$i]["id"]; ?>"><?php echo "Ps " . $data[$i]["id"]; ?></a></td>
                                        <td><a href="psalm/<?php echo $data[($i * 2) + 1]["id"]; ?>"><?php echo "Ps " . $data[($i * 2) + 1]["id"]; ?></a></td>
                                        <td><a href="psalm/<?php echo $data[($i * 3) + 2]["id"]; ?>"><?php echo "Ps " . $data[($i * 3) + 2]["id"]; ?></a></td>
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
