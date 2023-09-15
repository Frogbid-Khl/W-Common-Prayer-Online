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

    return date("m/d/Y", mktime(0, 0, 0, $month, $day, $year));
}

function calculateLiturgicalDates($year) {
    $easterDate = calculateEasterDate($year);
    $christmasDate = $year . '-12-25';
    $date_epiphany = $year . '-01-06';

    $epiphany = new DateTime("$year-01-06");

    while ($epiphany->format('N') != 7) {
        $epiphany->add(new DateInterval('P1D')); // Add one day
    }

// Format the date in 'Y-m-d' format.
    $first_sunday_after_epiphany_date = $epiphany->format('Y-m-d');

    $christmas = new DateTime("$year-12-25");

    while ($christmas->format('N') != 7) {
        $christmas->add(new DateInterval('P1D'));
    }

    $sunday_before_christmas = clone $christmas;
    $sunday_before_christmas->sub(new DateInterval('P7D'));

    $first_sunday_after_christmas_date = $christmas->format('Y-m-d');
    $forth_sunday_advent = $sunday_before_christmas->format('Y-m-d');

    $liturgicalDates = [
        'Epiphany' => date('m/d/Y', strtotime($date_epiphany)),
        '1st Sunday after the Epiphany' => date('m/d/Y', strtotime($first_sunday_after_epiphany_date)),
        '2nd Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +1 weeks")),
        '3rd Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +2 weeks")),
        '4th Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +3 weeks")),
        '5th Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +4 weeks")),
        '6th Sunday after the Epiphany' => date('m/d/Y', strtotime("$first_sunday_after_epiphany_date +5 weeks")),
        'Septuagesima Sunday' => date('m/d/Y', strtotime("$easterDate -63 days")),
        'Sexagesima Sunday' => date('m/d/Y', strtotime("$easterDate -56 days")),
        'Quinquagesima Sunday' => date('m/d/Y', strtotime("$easterDate -49 days")),
        'Ash Wednesday' => date('m/d/Y', strtotime("$easterDate -46 days")),
        '1st Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -42 days")),
        '2nd Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -35 days")),
        '3rd Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -28 days")),
        '4th Sunday in Lent' => date('m/d/Y', strtotime("$easterDate -21 days")),
        '5th Sunday in Lent (Passion Sunday)' => date('m/d/Y', strtotime("$easterDate -14 days")),
        'Palm Sunday' => date('m/d/Y', strtotime("$easterDate -7 days")),
        'Good Friday' => date('m/d/Y', strtotime("$easterDate -2 days")),
        'Easter' => date('m/d/Y', strtotime($easterDate)),
        '1st Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +1 week")),
        '2nd Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +2 weeks")),
        '3rd Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +3 weeks")),
        '4th Sunday after Easter' => date('m/d/Y', strtotime("$easterDate +4 weeks")),
        '5th Sunday after Easter (Rogation Sunday)' => date('m/d/Y', strtotime("$easterDate +5 weeks")),
        'Ascension' => date('m/d/Y', strtotime("$easterDate +39 days")),
        'Sunday after the Ascension' => date('m/d/Y', strtotime("$easterDate +40 days")),
        'Pentecost (Whitsunday)' => date('m/d/Y', strtotime("$easterDate +49 days")),
        'Trinity Sunday' => date('m/d/Y', strtotime("$easterDate +56 days")),
        '1st Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +63 days")),
        '2nd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +70 days")),
        '3rd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +77 days")),
        '4th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +84 days")),
        '5th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +91 days")),
        '6th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +98 days")),
        '7th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +105 days")),
        '8th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +112 days")),
        '9th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +119 days")),
        '10th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +126 days")),
        '11th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +133 days")),
        '12th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +140 days")),
        '13th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +147 days")),
        '14th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +154 days")),
        '15th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +161 days")),
        '16th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +168 days")),
        '17th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +175 days")),
        '18th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +182 days")),
        '19th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +189 days")),
        '20th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +196 days")),
        '21st Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +203 days")),
        '22nd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +210 days")),
        '23rd Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +217 days")),
        '24th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +224 days")),
        '25th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +231 days")),
        '26th Sunday after Trinity' => date('m/d/Y', strtotime("$easterDate +238 days")),
        'Sunday next before Advent' => date('m/d/Y', strtotime("$forth_sunday_advent -28 days")),
        '1st Sunday of Advent' => date('m/d/Y', strtotime("$forth_sunday_advent -21 days")),
        '2nd Sunday of Advent' => date('m/d/Y', strtotime("$forth_sunday_advent -14 days")),
        '3rd Sunday of Advent' => date('m/d/Y', strtotime("$forth_sunday_advent -7 days")),
        '4th Sunday of Advent' => date('m/d/Y', strtotime($forth_sunday_advent)),
        'Christmas' =>  date('m/d/Y', strtotime($christmasDate)),
        '1st Sunday after Christmas' => date('m/d/Y', strtotime($first_sunday_after_christmas_date)),
        '2nd Sunday after Christmas' => date('m/d/Y', strtotime("$first_sunday_after_christmas_date +1 weeks")),
    ];

    return $liturgicalDates;
}

// Example usage:
$year = 2023;
$liturgicalDates = calculateLiturgicalDates($year);

foreach ($liturgicalDates as $occasion => $date) {
    echo "$occasion: $date<br/>";
}
