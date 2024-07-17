<?php
$month = 2;
$year = 2024;
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
echo "Кількість днів у місяці: $daysInMonth<br>";
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) 
{
    echo "$year є високосним роком";
} 
else 
{
    echo "$year не є високосним роком";
}
?>