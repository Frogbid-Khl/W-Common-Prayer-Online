<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/images/favicon.ico" rel="icon" type="image/x-icon">
    <title>Ordo Kalendar - Common Prayer Online</title>
    <link href="assets/vendor/Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/vendor/FontAwesome/css/all.min.css" rel="stylesheet"/>
    <link href='assets/vendor/Animate/animate.min.css' rel='stylesheet'/>
    <link href="assets/css/style.css" rel="stylesheet"/>
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
                           href="daily-office">Daily Offices</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#">Psalter</a>
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
                           href="#">Psalter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="row">
                    <div class="col-4 mb-3">
                        <a class="btn btn-primary cpo-home-btn w-100 d-flex justify-content-center align-items-center"
                           href="#">Prayers</a>
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

<!-- Kalendar Start -->
<section class="container-fluid cpo-body-padding-top">
    <div class="row">
        <div class="col-12 pt-5 text-center">
            <h1>Ordo Kalendar</h1>
        </div>
        <div class="col-12 mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="text-center" id="currentMonth"></h3>
                <div class="d-flex justify-content-end align-items-end">
                    <button id="prevMonth" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-block d-md-none me-1"><i class="fas fa-chevron-left"></i></button>
                    <button id="nextMonth" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-block d-md-none ms-1"><i class="fas fa-chevron-right"></i></button>
                    <button id="prevMonthDesktop" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-none d-md-block me-1"><i class="fas fa-chevron-left"></i> Previous Month</button>
                    <button id="nextMonthDesktop" class="btn btn-primary cpo-home-btn btn-sm ps-3 pe-3 d-none d-md-block ms-1">Next Month <i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2" id="calendar"></div>
</section>
<!-- Kalendar End -->

<!-- Main Button Start -->
<section class="container-fluid">
    <div class="card mt-4 cpo-card-btn wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="home">Home</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="daily-office">The Daily and Hourly Offices</a>
            </div>
            <div class="col-lg-4 mb-3">
                <a class="btn btn-primary cpo-btn-home w-100" href="occasional-office">Occasional Offices</a>
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
<script src="assets/vendor/Bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jQuery/jquery-3.6.4.min.js"></script>
<script src="assets/vendor/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/Wow/wow.js"></script>
<script src="assets/js/main.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const calendar = document.getElementById("calendar");
        const prevMonthBtn = document.getElementById("prevMonth");
        const nextMonthBtn = document.getElementById("nextMonth");
        const prevMonthBtnDesktop = document.getElementById("prevMonthDesktop");
        const nextMonthBtnDesktop = document.getElementById("nextMonthDesktop");
        const currentMonthLabel = document.getElementById("currentMonth");

        let currentMonth = new Date();

        function generateCalendar() {
            const year = currentMonth.getFullYear();
            const month = currentMonth.getMonth();

            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);

            const daysInMonth = lastDay.getDate();

            let calendarHTML = '<table class="table table-bordered">';
            calendarHTML += '<thead><tr>';
            calendarHTML += '<th>Sun</th>';
            calendarHTML += '<th>Mon</th>';
            calendarHTML += '<th>Tue</th>';
            calendarHTML += '<th>Wed</th>';
            calendarHTML += '<th>Thu</th>';
            calendarHTML += '<th>Fri</th>';
            calendarHTML += '<th>Sat</th>';
            calendarHTML += '</tr></thead>';
            calendarHTML += '<tbody><tr>';

            let dayOfWeek = firstDay.getDay();

            for (let i = 0; i < dayOfWeek; i++) {
                calendarHTML += '<td></td>';
            }

            for (let day = 1; day <= daysInMonth; day++) {
                if (dayOfWeek === 7) {
                    calendarHTML += '</tr><tr>';
                    dayOfWeek = 0;
                }

                calendarHTML += `<td>${day}</td>`;

                dayOfWeek++;
            }

            calendarHTML += '</tr></tbody>';
            calendarHTML += '</table>';

            calendar.innerHTML = calendarHTML;
        }

        function updateCalendar() {
            generateCalendar();
            currentMonthLabel.textContent = new Intl.DateTimeFormat('en-US', { month: 'long', year: 'numeric' }).format(currentMonth);
        }

        generateCalendar();
        updateCalendar();

        prevMonthBtn.addEventListener("click", function () {
            currentMonth.setMonth(currentMonth.getMonth() - 1);
            updateCalendar();
        });

        nextMonthBtn.addEventListener("click", function () {
            currentMonth.setMonth(currentMonth.getMonth() + 1);
            updateCalendar();
        });

        prevMonthBtnDesktop.addEventListener("click", function () {
            currentMonth.setMonth(currentMonth.getMonth() - 1);
            updateCalendar();
        });

        nextMonthBtnDesktop.addEventListener("click", function () {
            currentMonth.setMonth(currentMonth.getMonth() + 1);
            updateCalendar();
        });
    });
</script>
</body>
</html>
