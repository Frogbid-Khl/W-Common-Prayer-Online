<?php
date_default_timezone_set("America/New_York");
function calculateEasterDate($year)
{
    $a = $year % 19;
    $b = floor($year / 100);
    $c = $year % 100;
    $d = floor($b / 4);
    $e = $b % 4;
    $f = floor(($b + 8) / 25);
    $g = floor(($b - $f + 1) / 3);
    $h = (19 * $a + $b - $d - $g + 15) % 30;
    $i = floor($c / 4);
    $k = $c % 4;
    $l = (32 + 2 * $e + 2 * $i - $h - $k) % 7;
    $m = floor(($a + 11 * $h + 22 * $l) / 451);
    $month = floor(($h + $l - 7 * $m + 114) / 31);
    $day = (($h + $l - 7 * $m + 114) % 31) + 1;

    return date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));
}

function getDayOfWeekName($date)
{
    $dayOfWeek = date('N', strtotime($date));
    $dayOfWeekNames = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday',
    ];
    return $dayOfWeekNames[$dayOfWeek];
}

function getPreviousLiturgicalOccasion($date)
{
    $year = date('Y', strtotime($date));

    $easterDate = calculateEasterDate($year);
    $date_epiphany = $year . '-01-06';

    $epiphany = new DateTime("$year-01-06");

    while ($epiphany->format('N') != 7) {
        $epiphany->add(new DateInterval('P1D')); // Add one day
    }

    $first_sunday_after_epiphany_date = $epiphany->format('Y-m-d');

    $christmasDate = $year . '-12-25';

    $christmasTimestamp = strtotime($christmasDate);

    if (date("w", $christmasTimestamp) == 0) {
        // If Christmas is on a Sunday, add 7 days (1 week) to skip it
        $nextSundayTimestamp = strtotime("+1 week", $christmasTimestamp);
    } else {
        // If Christmas is on any other day, find the next Sunday
        $daysUntilNextSunday = 7 - date("w", $christmasTimestamp);
        $nextSundayTimestamp = strtotime("+" . $daysUntilNextSunday . " days", $christmasTimestamp);
    }

    if (date("w", $christmasTimestamp) == 0) {
        // If Christmas is on a Sunday, subtract 7 days (1 week) to skip it
        $previousSundayTimestamp = strtotime("-1 week", $christmasTimestamp);
    } else {
        // If Christmas is on any other day, find the previous Sunday
        $daysUntilPreviousSunday = date("w", $christmasTimestamp);
        $previousSundayTimestamp = strtotime("-" . $daysUntilPreviousSunday . " days", $christmasTimestamp);
    }

    $previousSundayChristmas = date("Y-m-d", $previousSundayTimestamp);

    $nextSundayAfterChristmas = date("Y-m-d", $nextSundayTimestamp);

    $septuagesimaSunday = date('Y-m-d', strtotime("$easterDate -63 days"));


    $liturgicalDates = [
        'Epiphany' => date('Y-m-d', strtotime($date_epiphany)),
        '1st Sunday after the Epiphany' => date('Y-m-d', strtotime($first_sunday_after_epiphany_date)),
        '2nd Sunday after the Epiphany' => date('Y-m-d', strtotime("$first_sunday_after_epiphany_date +1 weeks")),
        '3rd Sunday after the Epiphany' => date('Y-m-d', strtotime("$first_sunday_after_epiphany_date +2 weeks")),
        '4th Sunday after the Epiphany' => date('Y-m-d', strtotime("$first_sunday_after_epiphany_date +3 weeks")),
        '5th Sunday after the Epiphany' => date('Y-m-d', strtotime("$first_sunday_after_epiphany_date +4 weeks")),
        '6th Sunday after the Epiphany' => date('Y-m-d', strtotime("$first_sunday_after_epiphany_date +5 weeks")),
        'Septuagesima Sunday' => date('Y-m-d', strtotime("$easterDate -9 weeks")),
        'Sexagesima Sunday' => date('Y-m-d', strtotime("$easterDate -8 weeks")),
        'Quinquagesima Sunday' => date('Y-m-d', strtotime("$easterDate -7 weeks")),
        'Ash Wednesday' => date('Y-m-d', strtotime("$easterDate -46 days")),
        '1st Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -6 weeks")),
        '2nd Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -5 weeks")),
        '3rd Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -4 weeks")),
        '4th Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -3 weeks")),
        '5th Sunday in Lent (Passion Sunday)' => date('Y-m-d', strtotime("$easterDate -2 weeks")),
        'Palm Sunday' => date('Y-m-d', strtotime("$easterDate -1 week")),
        'Good Friday' => date('Y-m-d', strtotime("$easterDate -2 days")),
        'Easter' => date('Y-m-d', strtotime($easterDate)),
        '1st Sunday after Easter' => date('Y-m-d', strtotime("$easterDate +1 week")),
        '2nd Sunday after Easter' => date('Y-m-d', strtotime("$easterDate +2 weeks")),
        '3rd Sunday after Easter' => date('Y-m-d', strtotime("$easterDate +3 weeks")),
        '4th Sunday after Easter' => date('Y-m-d', strtotime("$easterDate +4 weeks")),
        '5th Sunday after Easter (Rogation Sunday)' => date('Y-m-d', strtotime("$easterDate +5 weeks")),
        'Ascension' => date('Y-m-d', strtotime("$easterDate +39 days")),
        'Sunday after the Ascension' => date('Y-m-d', strtotime("$easterDate +6 weeks")),
        'Pentecost (Whitsunday)' => date('Y-m-d', strtotime("$easterDate +7 weeks")),
        'Trinity Sunday' => date('Y-m-d', strtotime("$easterDate +8 weeks")),
        '1st Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +9 weeks")),
        '2nd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +10 weeks")),
        '3rd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +11 weeks")),
        '4th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +12 weeks")),
        '5th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +13 weeks")),
        '6th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +14 weeks")),
        '7th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +15 weeks")),
        '8th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +16 weeks")),
        '9th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +17 weeks")),
        '10th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +18 weeks")),
        '11th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +19 weeks")),
        '12th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +20 weeks")),
        '13th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +21 weeks")),
        '14th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +22 weeks")),
        '15th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +23 weeks")),
        '16th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +24 weeks")),
        '17th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +25 weeks")),
        '18th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +26 weeks")),
        '19th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +27 weeks")),
        '20th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +28 weeks")),
        '21st Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +29 weeks")),
        '22nd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +30 weeks")),
        '23rd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +31 weeks")),
        '24th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +32 weeks")),
        '25th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +33 weeks")),
        '26th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +34 weeks")),
        'Sunday next before Advent' => date('Y-m-d', strtotime("$previousSundayChristmas -4 weeks")),
        '1st Sunday of Advent' => date('Y-m-d', strtotime("$previousSundayChristmas -3 weeks")),
        '2nd Sunday of Advent' => date('Y-m-d', strtotime("$previousSundayChristmas -2 weeks")),
        '3rd Sunday of Advent' => date('Y-m-d', strtotime("$previousSundayChristmas -1 week")),
        '4th Sunday of Advent' => date('Y-m-d', strtotime($previousSundayChristmas)),
        'Christmas' => date('Y-m-d', strtotime($christmasDate)),
        '1st Sunday after Christmas' => date('Y-m-d', strtotime($nextSundayAfterChristmas)),
        '2nd Sunday after Christmas' => date('Y-m-d', strtotime("$nextSundayAfterChristmas +1 weeks")),
    ];


    $epiphan_sunday = [
        '1st Sunday after the Epiphany',
        '2nd Sunday after the Epiphany',
        '3rd Sunday after the Epiphany',
        '4th Sunday after the Epiphany',
        '5th Sunday after the Epiphany',
        '6th Sunday after the Epiphany'
    ];

    for ($i = 0; $i < 6; $i++) {
        if (strtotime($septuagesimaSunday) < strtotime("$first_sunday_after_epiphany_date +" . ($i + 1) . " weeks")) {
            unset($liturgicalDates[$epiphan_sunday[$i]]);
        }
    }

    $trinity_sunday = [
        '1st Sunday after Trinity',
        '2nd Sunday after Trinity',
        '3rd Sunday after Trinity',
        '4th Sunday after Trinity',
        '5th Sunday after Trinity',
        '6th Sunday after Trinity',
        '7th Sunday after Trinity',
        '8th Sunday after Trinity',
        '9th Sunday after Trinity',
        '10th Sunday after Trinity',
        '11th Sunday after Trinity',
        '12th Sunday after Trinity',
        '13th Sunday after Trinity',
        '14th Sunday after Trinity',
        '15th Sunday after Trinity',
        '16th Sunday after Trinity',
        '17th Sunday after Trinity',
        '18th Sunday after Trinity',
        '19th Sunday after Trinity',
        '20th Sunday after Trinity',
        '21st Sunday after Trinity',
        '22nd Sunday after Trinity',
        '23rd Sunday after Trinity',
        '24th Sunday after Trinity',
        '25th Sunday after Trinity',
        '26th Sunday after Trinity'
    ];

    for ($i = 0; $i < 26; $i++) {
        if (strtotime("$previousSundayChristmas -29 days") < strtotime("$easterDate +" . ($i + 9) . " weeks")) {
            unset($liturgicalDates[$trinity_sunday[$i]]);
        }
    }

    $nextYear = $year + 1;


    if (strtotime($nextSundayAfterChristmas) > strtotime($nextYear . '-01-05')) {
        unset($liturgicalDates['1st Sunday after Christmas']);
    }

    if (strtotime("$nextSundayAfterChristmas +1 week") > strtotime($nextYear . '-01-05')) {
        unset($liturgicalDates['2nd Sunday after Christmas']);
    }

    asort($liturgicalDates);

    $previousOccasion = null;

    foreach ($liturgicalDates as $occasion => $liturgicalDate) {
        $formattedLiturgicalDate = date('Y-m-d', strtotime($liturgicalDate));
        $formattedDate = date('Y-m-d', strtotime($date));

        if (strtotime($formattedLiturgicalDate) <= strtotime($formattedDate)) {
            $previousOccasion = $occasion;
        } else {
            break;
        }
    }


    return $previousOccasion;

}


function checkSeason($event)
{
    $epiphany_sunday = [
        'Epiphany',
        '1st Sunday after the Epiphany',
        '2nd Sunday after the Epiphany',
        '3rd Sunday after the Epiphany',
        '4th Sunday after the Epiphany',
        '5th Sunday after the Epiphany',
        '6th Sunday after the Epiphany'
    ];

    $pre_lent_sunday = [
        'Septuagesima Sunday',
        'Sexagesima Sunday',
        'Quinquagesima Sunday'
    ];

    $lent_sunday = [
        'Ash Wednesday',
        '1st Sunday in Lent',
        '2nd Sunday in Lent',
        '3rd Sunday in Lent',
        '4th Sunday in Lent',
        '5th Sunday in Lent (Passion Sunday)'
    ];

    $easter_sunday = [
        'Easter',
        '1st Sunday after Easter',
        '2nd Sunday after Easter',
        '3rd Sunday after Easter',
        '4th Sunday after Easter',
        '5th Sunday after Easter (Rogation Sunday)'
    ];

    $accession_sunday = [
        'Ascension',
        'Sunday after the Ascension',
        'Pentecost (Whitsunday)'
    ];

    $trinity_sunday = [
        'Trinity Sunday',
        '1st Sunday after Trinity',
        '2nd Sunday after Trinity',
        '3rd Sunday after Trinity',
        '4th Sunday after Trinity',
        '5th Sunday after Trinity',
        '6th Sunday after Trinity',
        '7th Sunday after Trinity',
        '8th Sunday after Trinity',
        '9th Sunday after Trinity',
        '10th Sunday after Trinity',
        '11th Sunday after Trinity',
        '12th Sunday after Trinity',
        '13th Sunday after Trinity',
        '14th Sunday after Trinity',
        '15th Sunday after Trinity',
        '16th Sunday after Trinity',
        '17th Sunday after Trinity',
        '18th Sunday after Trinity',
        '19th Sunday after Trinity',
        '20th Sunday after Trinity',
        '21st Sunday after Trinity',
        '22nd Sunday after Trinity',
        '23rd Sunday after Trinity',
        '24th Sunday after Trinity',
        '25th Sunday after Trinity',
        '26th Sunday after Trinity',
        'Sunday next before Advent'
    ];

    $advent_sunday = [
        '1st Sunday of Advent',
        '2nd Sunday of Advent',
        '3rd Sunday of Advent',
        '4th Sunday of Advent'
    ];

    $christmas_sunday = [
        'Christmas',
        '1st Sunday after Christmas',
        '2nd Sunday after Christmas'
    ];

    if (in_array($event, $epiphany_sunday)) {
        return "Epiphany";
    } else if (in_array($event, $pre_lent_sunday)) {
        return "Pre Lent";
    } else if (in_array($event, $lent_sunday)) {
        return "Lent";
    } else if (in_array($event, $easter_sunday)) {
        return "Easter";
    } else if (in_array($event, $accession_sunday)) {
        return "Ascension";
    } else if (in_array($event, $trinity_sunday)) {
        return "Trinity";
    } else if (in_array($event, $advent_sunday)) {
        return "Advent";
    } else if (in_array($event, $christmas_sunday)) {
        return "Christmastide";
    } else {
        return 0;
    }
}

function getOccasionName($today)
{

    $occasionForLastSunday = getPreviousLiturgicalOccasion($today);

    if ($occasionForLastSunday) {
        $dayOfWeek = getDayOfWeekName($today);

        $christmas = date('m-d', strtotime($today));

        $epiphany = date('m-d', strtotime($today));

        $eventName = checkSeason($occasionForLastSunday);

        $class = '';
        if ($eventName == "Epiphany" || $eventName == "Trinity") {
            $class = 'cpo-event-color-green';
        } else if ($eventName == "Easter" || $eventName == "Christmastide" || $eventName == "Ascension") {
            $class = 'cpo-event-color-white';
        } else if ($eventName == "Pre Lent" || $eventName == "Lent" || $eventName == "Advent") {
            $class = 'cpo-event-color-purple';
        }

        if ($dayOfWeek != 'Sunday' && $christmas != '12-25' && $epiphany != '01-06') {

            $found_number = '';

            $text = $occasionForLastSunday;

            $pattern = '/\b(\d+)(?:st|nd|rd|th)?\b/';

            if (preg_match($pattern, $text, $matches)) {
                $found_number = $matches[1];
            }

            $lastSpacePos = strrpos($occasionForLastSunday, ' ');


            if ($lastSpacePos !== false && $found_number != '') {
                $lastWord = substr($occasionForLastSunday, $lastSpacePos + 1);
            } else {
                $lastWord = $occasionForLastSunday;
            }

            echo "Today is <span class='$class'>$dayOfWeek after $lastWord $found_number</span><br/>";
            echo "Season of <span class='$class'>$eventName</span><br/>";
        } else {
            echo "Today is <span class='$class'>$occasionForLastSunday</span><br/>";
            echo "Season of <span class='$class'>$eventName</span><br/>";
        }
    }
}

$dateRanges = [];

function addsDateRanges(&$dateRanges, $start_date, $end_date)
{
    $dateRanges[] = array(
        'start_date' => $start_date,
        'end_date' => $end_date,
    );
}

function getThirdSundayDateInSeptembers($year)
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

function getTodayOcasion($today)
{


    $currentYear = date('Y', strtotime($today));
    $currentMonth = date('m', strtotime($today));

    $thirdSunday = getThirdSundayDateInSeptembers($currentYear);

    $septuagesimaSunday = '';
    $easterSunday = '';
    $trinity = '';
    $sundayAdvent = '';

    $eventList = array();

    $pentecostWeek = array();
    $emberDays = array();

    $epiphany = "06-01-" . $currentYear;

    $eventList[date('Y-m-d', strtotime("01-01-" . $currentYear))] = array('event' => 'Circumcision', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +1 day"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +2 days"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +3 days"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +4 days"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +5 days"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +6 days"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("$epiphany +7 days"))] = array('event' => 'of the Octave of Epiphany', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("25-01-" . $currentYear))] = array('event' => 'Conversion of St. Paul', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("02-02-" . $currentYear))] = array('event' => 'Presentation of Christ (Purification of BVM)', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("24-02-" . $currentYear))] = array('event' => 'St. Matthias the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("25-03-" . $currentYear))] = array('event' => 'Annunciation of the B. V. M.', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("25-04-" . $currentYear))] = array('event' => 'St. Mark the Evangelist', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("01-05-" . $currentYear))] = array('event' => 'St. Philip & St. James, Apostles', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("11-06-" . $currentYear))] = array('event' => 'St. Barnabas the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("24-06-" . $currentYear))] = array('event' => 'St. John the Baptist', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("29-06-" . $currentYear))] = array('event' => 'St. Peter the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("04-07-" . $currentYear))] = array('event' => 'Independence Day', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("25-07-" . $currentYear))] = array('event' => 'St. James the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("06-08-" . $currentYear))] = array('event' => 'Transfiguration of Our Lord', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("24-08-" . $currentYear))] = array('event' => 'St. Bartholomew the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("29-08-" . $currentYear))] = array('event' => 'Beheading of St. John Baptist', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("17-09-" . $currentYear))] = array('event' => 'St. Lambert ', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("21-09-" . $currentYear))] = array('event' => 'St. Matthew, Apostle & Evangelist', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("29-09-" . $currentYear))] = array('event' => 'St. Michael & All Angels', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("04-10-" . $currentYear))] = array('event' => 'St. Francis of Assisi', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("18-10-" . $currentYear))] = array('event' => 'St. Luke the Evangelist', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("24-10-" . $currentYear))] = array('event' => 'St. Raphael', 'color' => 'cpo-event-color-green');
    $eventList[date('Y-m-d', strtotime("28-10-" . $currentYear))] = array('event' => 'St. Simon & St. Jude Apostles', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("01-11-" . $currentYear))] = array('event' => 'All Saints Day', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("02-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("03-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("04-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("05-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("06-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("07-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("08-11-" . $currentYear))] = array('event' => 'of the Octave of All Saints', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("10-11-" . $currentYear))] = array('event' => 'St. Martin', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("22-11-" . $currentYear))] = array('event' => 'St. Cecilia', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("30-11-" . $currentYear))] = array('event' => 'St. Andrew the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("04-12-" . $currentYear))] = array('event' => 'St. Barbara', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("21-12-" . $currentYear))] = array('event' => 'St. Thomas the Apostle', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("24-12-" . $currentYear))] = array('event' => 'Christmas Eve', 'color' => 'cpo-event-color-pink');
    $eventList[date('Y-m-d', strtotime("26-12-" . $currentYear))] = array('event' => 'St. Stephen, Deacon & Martyr (of the Octave)', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("27-12-" . $currentYear))] = array('event' => 'St. John the Evangelist (of the Octave)', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("28-12-" . $currentYear))] = array('event' => 'The Holy Innocents (of the Octave)', 'color' => 'cpo-event-color-red');
    $eventList[date('Y-m-d', strtotime("29-12-" . $currentYear))] = array('event' => 'of the Octave of Christmas', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("30-12-" . $currentYear))] = array('event' => 'of the Octave of Christmas', 'color' => 'cpo-event-color-white');
    $eventList[date('Y-m-d', strtotime("31-12-" . $currentYear))] = array('event' => 'of the Octave of Christmas', 'color' => 'cpo-event-color-white');


    foreach (calculateLiturgicalDatess((int)$currentYear) as $eventName => $date) {
        $dateTime = DateTime::createFromFormat('m/d/Y', $date);

        if ($dateTime->format('Y') == $currentYear) {

            if ($eventName == 'Septuagesima Sunday') {
                $septuagesimaSunday = $date;
            } else if ($eventName == 'Easter') {
                $easterSunday = $date;

                $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Easter Monday<br/>(of the Octave)', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Easter Tuesday<br/>(of the Octave)', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +4 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +5 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +6 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +7 days"))] = array('event' => 'of the Octave<br/>of Easter', 'color' => 'cpo-event-color-white');
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


                $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Whitsun Monday', 'color' => 'cpo-event-color-red');
                $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Whitsun Tuesday', 'color' => 'cpo-event-color-red');

            } else if ($eventName == '1st Sunday in Lent') {
                array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
                array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
                array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));
            } else if ($eventName == '3rd Sunday of Advent') {
                array_push($emberDays, date('Y-m-d', strtotime("$date +3 days")));
                array_push($emberDays, date('Y-m-d', strtotime("$date +5 days")));
                array_push($emberDays, date('Y-m-d', strtotime("$date +6 days")));
            } else if ($eventName == 'Quinquagesima Sunday') {
                $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'Ash Wednesday', 'color' => 'cpo-event-color-pink');
            } else if ($eventName == 'Palm Sunday') {
                $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Monday in Holy Week', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Tuesday in Holy Week', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'Wednesday in Holy Week', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +4 days"))] = array('event' => 'Maundy Thursday', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +5 days"))] = array('event' => 'Good Friday', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +6 days"))] = array('event' => 'Holy Saturday', 'color' => 'cpo-event-color-pink');
            } else if ($eventName == '5th Sunday after Easter (Rogation Sunday)') {
                $eventList[date('Y-m-d', strtotime("$date +1 day"))] = array('event' => 'Rogation Monday', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +2 days"))] = array('event' => 'Rogation Tuesday', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +3 days"))] = array('event' => 'Rogation Wednesday', 'color' => 'cpo-event-color-pink');
                $eventList[date('Y-m-d', strtotime("$date +4 days"))] = array('event' => 'Ascension Day', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +5 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +6 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +7 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +8 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +9 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +10 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
                $eventList[date('Y-m-d', strtotime("$date +11 days"))] = array('event' => 'of the Octave<br/>of Ascension', 'color' => 'cpo-event-color-white');
            } else if ($eventName == 'Sunday next before Advent') {
                $eventList[date('Y-m-d', strtotime("$date -3 days"))] = array('event' => 'Thanksgiving', 'color' => 'cpo-event-color-white');
            }

            $val[$eventName] = $date;
        }
    }


    array_push($emberDays, date('Y-m-d', strtotime("$thirdSunday +3 days")));
    array_push($emberDays, date('Y-m-d', strtotime("$thirdSunday +5 days")));
    array_push($emberDays, date('Y-m-d', strtotime("$thirdSunday +6 days")));


    addsDateRanges($dateRanges, $currentYear . '-01-01', $currentYear . '-01-13');
    addsDateRanges($dateRanges, $currentYear . '-01-14', date('Y-m-d', strtotime("$septuagesimaSunday -1 day")));
    addsDateRanges($dateRanges, date('Y-m-d', strtotime($septuagesimaSunday)), date('Y-m-d', strtotime("$easterSunday -1 day")));
    addsDateRanges($dateRanges, date('Y-m-d', strtotime($easterSunday)), date('Y-m-d', strtotime("$trinity -1 day")));
    addsDateRanges($dateRanges, date('Y-m-d', strtotime($trinity)), date('Y-m-d', strtotime("$sundayAdvent -1 day")));
    addsDateRanges($dateRanges, $currentYear . '-11-01', $currentYear . '-11-08');
    addsDateRanges($dateRanges, date('Y-m-d', strtotime($sundayAdvent)), $currentYear . '-12-24');
    addsDateRanges($dateRanges, $currentYear . '-12-25', $currentYear . '-12-31');


    if (in_array(date('Y-m-d', strtotime($today)), $pentecostWeek)) {
        $color = 'cpo-event-color-red';
        $condition = '0';
    }
    else if (strtotime($today) >= strtotime($dateRanges[0]['start_date']) && strtotime($today) <= strtotime($dateRanges[0]['end_date'])) {
        $color = 'cpo-event-color-white';
        $condition = '1';
    }
    else if (strtotime($today) >= strtotime($dateRanges[1]['start_date']) && strtotime($today) <= strtotime($dateRanges[1]['end_date'])) {
        $color = 'cpo-event-color-green';
        $condition = '2';
    }
    else if (strtotime($today) >= strtotime($dateRanges[2]['start_date']) && strtotime($today) <= strtotime($dateRanges[2]['end_date'])) {
        $color = 'cpo-event-color-pink';
        $condition = '3';
    }
    else if (strtotime($today) >= strtotime($dateRanges[3]['start_date']) && strtotime($today) <= strtotime($dateRanges[3]['end_date'])) {
        $color = 'cpo-event-color-white';
        $condition = '4';
    }
    else if (strtotime($today) >= strtotime($dateRanges[5]['start_date']) && strtotime($today) <= strtotime($dateRanges[5]['end_date'])) {
        $color = 'cpo-event-color-white';
        $condition = '5';
    }
    else if (strtotime($today) >= strtotime($dateRanges[4]['start_date']) && strtotime($today) <= strtotime($dateRanges[4]['end_date'])) {
        $color = 'cpo-event-color-green';
        $condition = '6';
    }
    else if (strtotime($today) >= strtotime($dateRanges[6]['start_date']) && strtotime($today) <= strtotime($dateRanges[6]['end_date'])) {
        $color = 'cpo-event-color-pink';
        $condition = '7';
    }
    else if (strtotime($today) >= strtotime($dateRanges[7]['start_date']) && strtotime($today) <= strtotime($dateRanges[7]['end_date'])) {
        $color = 'cpo-event-color-white';
        $condition = '8';
    }
    else {
        $color = 'cpo-event-color-white';
        $condition = '9';
    }


    $event = '';

    $text = '';

    if (isset($val_1['1st Sunday after Christmas']) && $val_1['1st Sunday after Christmas'] == date('m/d/Y', strtotime($today))) {
        $event = "1st Sunday after Christmas";

        $text .= $event;
    }
    elseif (isset($val_1['2nd Sunday after Christmas']) && $val_1['2nd Sunday after Christmas'] == date('m/d/Y', strtotime($today))) {
        $event = "2nd Sunday after Christmas";
        $text .= $event;
    }
    else {
        if (in_array(date('Y-m-d', strtotime($today)), $emberDays)) {
            $event = 'Ember Days';
            $text .= $event;

            if ($condition != '0') {
                $color = 'cpo-event-color-pink';
            }
        } else {
            $event = getOccasionNameSunday($today);
            $text .= $event;
        }
    }

    if (isset($eventList[date('Y-m-d', strtotime($today))])) {
        if ($event == '') {
            $event = $eventList[date('Y-m-d', strtotime($today))]['event'];

            $parts = explode('<br/>', $eventList[date('Y-m-d', strtotime($today))]['event']);
            if ($parts[0] == 'of the Octave') {
                $event = '<small>' . $eventList[date('Y-m-d', strtotime($today))]['event'] . '</small>';
                $text .= $event;
            } else {
                if (isset($parts[1]) && $parts[1] == '(of the Octave)') {


                    $text .= $parts[0] . '<small>(of the Octave)</small>';
                } else {
                    $text .= $event;
                }
            }
        }
        $color = $eventList[date('Y-m-d', strtotime($today))]['color'];
    }

    $occasionForLastSunday = getPreviousLiturgicalOccasion($today);

    if ($occasionForLastSunday) {
        $dayOfWeek = getDayOfWeekName($today);

        $christmas = date('m-d', strtotime($today));

        $epiphany = date('m-d', strtotime($today));

        $eventName = checkSeason($occasionForLastSunday);

        $class = '';
        if ($eventName == "Epiphany" || $eventName == "Trinity") {
            $class = 'cpo-event-color-green';
        } else if ($eventName == "Easter" || $eventName == "Christmastide" || $eventName == "Ascension") {
            $class = 'cpo-event-color-white';
        } else if ($eventName == "Pre Lent" || $eventName == "Lent" || $eventName == "Advent") {
            $class = 'cpo-event-color-purple';
        }

        if ($dayOfWeek != 'Sunday' && $christmas != '12-25' && $epiphany != '01-06') {
            if ($text != '') {
                echo "Today is <span class='$color'>$text</span><br/>";
                echo "Season of <span class='$class'>$eventName</span><br/>";
            } else {
                $found_number = '';

                $text = $occasionForLastSunday;

                $pattern = '/\b(\d+)(?:st|nd|rd|th)?\b/';

                if (preg_match($pattern, $text, $matches)) {
                    $found_number = $matches[1];
                }

                $lastSpacePos = strrpos($occasionForLastSunday, ' ');


                if ($lastSpacePos !== false && $found_number != '') {
                    $lastWord = substr($occasionForLastSunday, $lastSpacePos + 1);
                } else {
                    $lastWord = $occasionForLastSunday;
                }

                echo "Today is <span class='$class'>$dayOfWeek after $lastWord $found_number</span><br/>";
                echo "Season of <span class='$class'>$eventName</span><br/>";
            }
        } else {
            echo "Today is <span class='$color'>$text</span><br/>";
            echo "Season of <span class='$class'>$eventName</span><br/>";
        }

    }
    else {
        $dayOfWeek = getDayOfWeekName($today);

        $christmas = date('m-d', strtotime($today));

        $epiphany = date('m-d', strtotime($today));

        $eventName = "Christmastide";
        $class = 'cpo-event-color-white';

        if ($dayOfWeek != 'Sunday' && $christmas != '12-25' && $epiphany != '01-06') {
            if ($text != '') {
                echo "Today is <span class='$color'>$text</span><br/>";
                echo "Season of <span class='$class'>$eventName</span><br/>";
            } else {
                $found_number = '';

                $text = $occasionForLastSunday;

                $pattern = '/\b(\d+)(?:st|nd|rd|th)?\b/';

                if (preg_match($pattern, $text, $matches)) {
                    $found_number = $matches[1];
                }

                $lastSpacePos = strrpos($occasionForLastSunday, ' ');


                if ($lastSpacePos !== false && $found_number != '') {
                    $lastWord = substr($occasionForLastSunday, $lastSpacePos + 1);
                } else {
                    $lastWord = $occasionForLastSunday;
                }

                $yearNo = date('Y', strtotime($today));

                $circum = [
                    '01-01-' . $yearNo,
                    '02-01-' . $yearNo,
                    '03-01-' . $yearNo,
                    '04-01-' . $yearNo,
                    '05-01-' . $yearNo
                ];

                $epiphany = [
                    '06-01-' . $yearNo,
                    '07-01-' . $yearNo,
                    '08-01-' . $yearNo,
                    '09-01-' . $yearNo,
                    '10-01-' . $yearNo,
                    '11-01-' . $yearNo,
                    '12-01-' . $yearNo
                ];

                if (in_array(date('d-m-Y', strtotime($today)), $circum)) {
                    $lastWord = "Circumstance";
                } else if (in_array(date('d-m-Y', strtotime($today)), $epiphany)) {
                    $lastWord = "Epiphany";
                }

                echo "Today is <span class='$class'>$dayOfWeek after $lastWord $found_number</span><br/>";
                echo "Season of <span class='$class'>$eventName</span><br/>";
            }
        } else {
            echo "Today is <span class='$color'>$text</span><br/>";
            echo "Season of <span class='$class'>$eventName</span><br/>";
        }
    }
}

function liturgicalColor($today)
{
    $occasionForLastSunday = getPreviousLiturgicalOccasion($today);

    $eventName = checkSeason($occasionForLastSunday);

    if ($eventName == "Epiphany" || $eventName == "Trinity") {
        echo '<p class="mt-3 cpo-event-color-green">The liturgical color of the day is GREEN</p>';
    } else if ($eventName == "Easter" || $eventName == "Christmas" || $eventName == "Ascension") {
        echo '<p class="mt-3 cpo-event-color-white">The liturgical color of the day is WHITE</p>';
    } else if ($eventName == "Pre Lent" || $eventName == "Lent" || $eventName == "Advent") {
        echo '<p class="mt-3 cpo-event-color-purple">The liturgical color of the day is PURPLE</p>';
    }
}

function getOccasionNamePray($today)
{

    $occasionForLastSunday = getPreviousLiturgicalOccasion($today);

    if ($occasionForLastSunday) {
        $dayOfWeek = getDayOfWeekName($today);

        $christmas = date('m-d', strtotime($today));

        $epiphany = date('m-d', strtotime($today));


        if ($dayOfWeek != 'Sunday' && $christmas != '12-25' && $epiphany != '01-06') {

            $found_number = '';

            $text = $occasionForLastSunday;

            $pattern = '/\b(\d+)(?:st|nd|rd|th)?\b/';

            if (preg_match($pattern, $text, $matches)) {
                $found_number = $matches[1];
            }

            $lastSpacePos = strrpos($occasionForLastSunday, ' ');


            if ($lastSpacePos !== false && $found_number != '') {
                $lastWord = substr($occasionForLastSunday, $lastSpacePos + 1);
            } else {
                $lastWord = $occasionForLastSunday;
            }

            echo "<span class='cpo-event-color'>$dayOfWeek after $lastWord $found_number</span><br/>";
            echo "Season of <span class='cpo-event-color'>$lastWord</span><br/>";

        } else {
            echo "<span class='cpo-event-color'>$occasionForLastSunday</span><br/>";
        }
    }


    $occasionForLastSunday = getPreviousLiturgicalOccasion($today);

    if ($occasionForLastSunday) {
        $dayOfWeek = getDayOfWeekName($today);

        $christmas = date('m-d', strtotime($today));

        $epiphany = date('m-d', strtotime($today));

        $eventName = checkSeason($occasionForLastSunday);

        $class = '';
        if ($eventName == "Epiphany" || $eventName == "Trinity") {
            $class = 'cpo-event-color-green';
        } else if ($eventName == "Easter" || $eventName == "Christmastide" || $eventName == "Ascension") {
            $class = 'cpo-event-color-white';
        } else if ($eventName == "Pre Lent" || $eventName == "Lent" || $eventName == "Advent") {
            $class = 'cpo-event-color-purple';
        }

        if ($dayOfWeek != 'Sunday' && $christmas != '12-25' && $epiphany != '01-06') {

            $found_number = '';

            $text = $occasionForLastSunday;

            $pattern = '/\b(\d+)(?:st|nd|rd|th)?\b/';

            if (preg_match($pattern, $text, $matches)) {
                $found_number = $matches[1];
            }

            $lastSpacePos = strrpos($occasionForLastSunday, ' ');


            if ($lastSpacePos !== false && $found_number != '') {
                $lastWord = substr($occasionForLastSunday, $lastSpacePos + 1);
            } else {
                $lastWord = $occasionForLastSunday;
            }

            echo "Today is <span class='$class'>$dayOfWeek after $lastWord $found_number</span><br/>";
            echo "Season of <span class='$class'>$eventName</span><br/>";
        } else {
            echo "Today is <span class='$class'>$occasionForLastSunday</span><br/>";
            echo "Season of <span class='$class'>$eventName</span><br/>";
        }
    }
}


function getOccasionNameSunday($today)
{

    $occasionForLastSunday = getPreviousLiturgicalOccasion($today);

    if ($occasionForLastSunday) {
        $dayOfWeek = getDayOfWeekName($today);

        $christmas = date('m-d', strtotime($today));

        $epiphany = date('m-d', strtotime($today));


        if ($dayOfWeek != 'Sunday' && $christmas != '12-25' && $epiphany != '01-06') {

        } else {
            return $occasionForLastSunday;
        }
    }
}

$today = date('Y-m-d');

if (isset($_GET['today'])) {
    $today = $_GET['today'];
}