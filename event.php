<?php
date_default_timezone_set("America/New_York");
require_once("include/dbController.php");
require_once('event-calculation.php');

$currentMonthkalendar = date('Y-m');

$db_handle = new DBController();

$url = $_SERVER['REQUEST_URI'];
$id = substr($url, strrpos($url, '/') + 1);

$extension = '../';
$description = '';

$query = "SELECT * FROM event where name='$id'";

$data = $db_handle->runQuery($query);
$row = $db_handle->numRows($query);
for ($j = 0; $j < $row; $j++) {
    $description = $data[$j]["description"];

    $id=$data[$j]["o_name"];
}



if ($row == 0) {
    echo "<script>
                window.location.href='../coming-soon';
                </script>";
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
    <title><?php echo ucwords($id); ?> - Common Prayer Online</title>
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
                           href="#epist">
                            The <br/>
                            Epistle
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#gospl">
                            The <br/>
                            Gospel
                        </a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#collect">
                            The <br/>
                            Collect
                        </a>
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
            <h1 class="cpo-content-page-title"><?php echo $id; ?></h1>
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
        <div class="col-lg-12 mt-3">
            <div>
                <span>Aa</span>
                <input type="range" id="fontSizeRange" class="cpo-range" min="10" max="40" step="1" value="16"/>
                <span>Aa</span>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <blockquote id="text-container">
                <?php echo $description; ?>
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
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>occasional-office">Occasional Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="<?php echo $extension; ?>church-year">The Church Year</a>
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
