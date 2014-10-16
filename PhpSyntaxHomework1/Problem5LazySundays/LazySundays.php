<?php
$month = date("F");
echo "Now is ".$month." and we have some lazy Sundays: <br><br>";

function getSundays($y,$m){
    return new DatePeriod(
            new DateTime("first Sunday of $y-$m"),
            DateInterval::createFromDateString('next sunday'),
            new DateTime("last day of $y-$m-01")
//we change "last day of $y-$m" to "last day of $y-$m-01" in order to include the last sunday
            );        

}

foreach(getSundays(2014, $month) as $sunday){
    echo $sunday->format("jS F, Y");
    echo "<br>";
}
?>
