<?php
function calculateEasterDate($year) {
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

function getDayOfWeekName($date) {
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

function getPreviousLiturgicalOccasion($date) {
    $currentYear = date('Y');
    $easterDate = calculateEasterDate($currentYear);

    //echo $easterDate.'<br/>';

    // Calculate pre-Lenten Sundays
    $epiphany=date('Y-m-d', strtotime("$currentYear-01-06"));
    $septuagesimaSunday = date('Y-m-d', strtotime("$easterDate -63 days"));
    $sexagesimaSunday = date('Y-m-d', strtotime("$easterDate -56 days"));
    $quinquagesimaSunday = date('Y-m-d', strtotime("$easterDate -49 days"));



    $liturgicalDates = [
        'Epiphany' => date('Y-m-d', strtotime("$currentYear-01-06")),
        'Septuagesima Sunday' => date('Y-m-d', strtotime("$easterDate -63 days")),
        'Sexagesima Sunday' => date('Y-m-d', strtotime("$easterDate -56 days")),
        'Quinquagesima Sunday' => date('Y-m-d', strtotime("$easterDate -49 days")),
        'Ash Wednesday' => date('Y-m-d', strtotime("$easterDate -46 days")),
        '1st Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -42 days")),
        '2nd Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -35 days")),
        '3rd Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -28 days")),
        '4th Sunday in Lent' => date('Y-m-d', strtotime("$easterDate -21 days")),
        '5th Sunday in Lent (Passion Sunday)' => date('Y-m-d', strtotime("$easterDate -14 days")),
        'Palm Sunday' => date('Y-m-d', strtotime("$easterDate -7 days")),
        'Good Friday' => date('Y-m-d', strtotime("$easterDate -2 days")),
        'Easter' => $easterDate,
    ];

// Check if Septuagesima Sunday has already passed
    if (strtotime($easterDate) > strtotime("$currentYear-01-06")) {
        $liturgicalDates += [
            '1st Sunday after the Epiphany' => date('Y-m-d', strtotime("$epiphany +1 week")),
            '2nd Sunday after the Epiphany' => date('Y-m-d', strtotime("$epiphany +2 weeks")),
            '3rd Sunday after the Epiphany' => date('Y-m-d', strtotime("$epiphany +3 weeks")),
            '4th Sunday after the Epiphany' => date('Y-m-d', strtotime("$epiphany +4 weeks")),
            '5th Sunday after the Epiphany' => date('Y-m-d', strtotime("$epiphany +5 weeks")),
            '6th Sunday after the Epiphany' => date('Y-m-d', strtotime("$epiphany +6 weeks")),
        ];
    }

// Other events that do not depend on Septuagesima Sunday
    $liturgicalDates += [
        'Ascension' => date('Y-m-d', strtotime("$easterDate +39 days")),
        'Sunday after the Ascension' => date('Y-m-d', strtotime("$easterDate +40 days")),
        'Pentecost (Whitsunday)' => date('Y-m-d', strtotime("$easterDate +49 days")),
        'Trinity Sunday' => date('Y-m-d', strtotime("$easterDate +56 days")),
        '1st Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +63 days")),
        '2nd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +70 days")),
        '3rd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +77 days")),
        '4th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +84 days")),
        '5th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +91 days")),
        '6th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +98 days")),
        '7th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +105 days")),
        '8th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +112 days")),
        '9th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +119 days")),
        '10th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +126 days")),
        '11th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +133 days")),
        '12th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +140 days")),
        '13th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +147 days")),
        '14th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +154 days")),
        '15th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +161 days")),
        '16th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +168 days")),
        '17th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +175 days")),
        '18th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +182 days")),
        '19th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +189 days")),
        '20th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +196 days")),
        '21st Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +203 days")),
        '22nd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +210 days")),
        '23rd Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +217 days")),
        '24th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +224 days")),
        '25th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +231 days")),
        '26th Sunday after Trinity' => date('Y-m-d', strtotime("$easterDate +238 days")),
        'Sunday next before Advent' => date('Y-m-d', strtotime("$easterDate +252 days")),
        '1st Sunday of Advent' => date('Y-m-d', strtotime("$currentYear-12-03")),
        '2nd Sunday of Advent' => date('Y-m-d', strtotime("$currentYear-12-10")),
        '3rd Sunday of Advent' => date('Y-m-d', strtotime("$currentYear-12-17")),
        '4th Sunday of Advent' => date('Y-m-d', strtotime("$currentYear-12-24")),
        '1st Sunday after Christmas' => date('Y-m-d', strtotime("$currentYear-12-26")),
        '2nd Sunday after Christmas' => date('Y-m-d', strtotime("$currentYear-01-02")),
    ];

    asort($liturgicalDates);

    $previousOccasion = null;

    foreach ($liturgicalDates as $occasion => $liturgicalDate) {
        if ($liturgicalDate < $date) {
            $previousOccasion = $occasion;
        } else {
            break;
        }
    }

    return $previousOccasion;

}

// Find the date of the last Sunday
$lastSunday = date('Y-m-d', strtotime('last Sunday'));

// Get the liturgical occasion for the last Sunday
$occasionForLastSunday = getPreviousLiturgicalOccasion($lastSunday);

$today=date('Y-m-d');
if ($occasionForLastSunday) {
    $dayOfWeek = getDayOfWeekName($today);
    echo "Today is $dayOfWeek after $occasionForLastSunday\n";
} else {
    echo "No liturgical occasion for last Sunday\n";
}
