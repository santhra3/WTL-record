<?php  
function dateDiffInDays($date1, $date2) 
{
    $diff = strtotime($date2) - strtotime($date1);
     return abs(round($diff / 86400));
}
$date1 = "25-09-2020";
$date2 = "31-01-2021";
$dateDiff = dateDiffInDays($date1, $date2);
printf("Difference between two dates: ". $dateDiff . " Days ");
?>
