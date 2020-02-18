<?php
//for date 
$date=range("1","31");
$Cdate= count($date);

//for month
$month= array("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC");
$Cmonth=count($month);

//for year
$year=range("1965","2005");
$Cyear=count($year);

//for captcha
$UCase=range("A","Z");
$randUCase1=array_rand($UCase);

$Num=range("101","999");
$randNum=array_rand($Num);

$randUCase2=array_rand($UCase);
$captcha= $UCase[$randUCase1].$Num[$randNum].$UCase[$randUCase2];
?>