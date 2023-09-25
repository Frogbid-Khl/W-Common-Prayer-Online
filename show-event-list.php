<?php
date_default_timezone_set("America/New_York");
function calculateEasterDates($year)
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

    return date("m/d/Y", mktime(0, 0, 0, $month, $day, $year));
}

function calculateLiturgicalDatess($year)
{
    $easterDate = calculateEasterDates($year);
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
        'Epiphany' => date('m/d/Y', strtotime($date_epiphany)),
        '1st Sunday after the Epiphany' => date('m/d/Y', strtotime($first_sunday_after_epiphany_date)),
        '2nd Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +1 weeks")),
        '3rd Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +2 weeks")),
        '4th Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +3 weeks")),
        '5th Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +4 weeks")),
        '6th Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +5 weeks")),
        'Septuagesima Sunday' => date('m/d/Y', strtotime("$easterDate -9 weeks")),
        'Sexagesima Sunday' => date('m/d/Y', strtotime("$easterDate -8 weeks")),
        'Quinquagesima Sunday' => date('m/d/Y', strtotime("$easterDate -7 weeks")),
        'Ash Wednesday' => date('m/d/Y', strtotime("$easterDate -46 days")),
        '1st Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -6 weeks")),
        '2nd Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -5 weeks")),
        '3rd Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -4 weeks")),
        '4th Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -3 weeks")),
        '5th Sunday in Lent (Passion Sunday)' => date('m/d/Y', strtotime("$easterDate -2 weeks")),
        'Palm Sunday' => date('m/d/Y', strtotime("$easterDate -1 week")),
        'Good Friday' => date('m/d/Y', strtotime("$easterDate -2 days")),
        'Easter' => date('m/d/Y', strtotime($easterDate)),
        '1st Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +1 week")),
        '2nd Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +2 weeks")),
        '3rd Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +3 weeks")),
        '4th Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +4 weeks")),
        '5th Sunday after Easter (Rogation Sunday)' => date('m/d/Y', strtotime("$easterDate +5 weeks")),
        'Ascension' => date('m/d/Y', strtotime("$easterDate +39 days")),
        'Sunday after the Ascension' => date('m/d/Y', strtotime("$easterDate +40 days")),
        'Pentecost (Whitsunday)' => date('m/d/Y', strtotime("$easterDate +7 weeks")),
        'Trinity Sunday' => date('m/d/Y', strtotime("$easterDate +8 weeks")),
        '1st Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +9 weeks")),
        '2nd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +10 weeks")),
        '3rd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +11 weeks")),
        '4th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +12 weeks")),
        '5th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +13 weeks")),
        '6th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +14 weeks")),
        '7th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +15 weeks")),
        '8th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +16 weeks")),
        '9th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +17 weeks")),
        '10th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +18 weeks")),
        '11th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +19 weeks")),
        '12th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +20 weeks")),
        '13th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +21 weeks")),
        '14th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +22 weeks")),
        '15th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +23 weeks")),
        '16th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +24 weeks")),
        '17th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +25 weeks")),
        '18th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +26 weeks")),
        '19th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +27 weeks")),
        '20th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +28 weeks")),
        '21st Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +29 weeks")),
        '22nd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +30 weeks")),
        '23rd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +31 weeks")),
        '24th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +32 weeks")),
        '25th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +33 weeks")),
        '26th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +34 weeks")),
        'Sunday next before Advent' => date('m/d/Y', strtotime("$previousSundayChristmas -4 weeks")),
        '1st Sunday of Advent' => date('m/d/Y', strtotime("$previousSundayChristmas -3 weeks")),
        '2nd Sunday of Advent' => date('m/d/Y', strtotime("$previousSundayChristmas -2 weeks")),
        '3rd Sunday of Advent' => date('m/d/Y', strtotime("$previousSundayChristmas -1 week")),
        '4th Sunday of Advent' => date('m/d/Y', strtotime($previousSundayChristmas)),
        'Christmas' => date('m/d/Y', strtotime($christmasDate)),
        '1st Sunday after Christmas' => date('m/d/Y', strtotime($nextSundayAfterChristmas)),
        '2nd Sunday after Christmas' => date('m/d/Y', strtotime("$nextSundayAfterChristmas +1 weeks")),
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

    return $liturgicalDates;
}

function getFullYearOccasions($year){
    $liturgicalDates = calculateLiturgicalDatess($year);

    foreach ($liturgicalDates as $occasion => $date) {
        echo "$occasion: $date<br/>";
    }
}

$year= date('Y');

if(isset($_GET['year'])){
    $year= $_GET['year'];
}

