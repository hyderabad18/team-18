<?php
session_start();
$from_time1=date('Y-m-d H:i:s');
$to_time1=10;
//$_SESSION["end_time"];
$timefirst=strtotime($from_time1);
$timesecond=strtotime($to_time1);
$diff=$timesecond-$timefirst;
//echo $diff;
echo gmdate("i:s", $diff);
?>