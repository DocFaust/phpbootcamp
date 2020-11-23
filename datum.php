<?php

//$geburtstag = "02.03.1975";
//
//$dat = explode(".", $geburtstag);
//var_dump($dat);
//$time = mktime(12, 0, 0, $dat[1], $dat[0], $dat[2]);
//
//$now = time();
//
//$age = $now - $time;
//echo "<br/>";
//echo $age / (60 * 60 * 24 * 365);
//
//$seconds = $age % (60 *60 *24*365);
//echo "<br/>$seconds";
//echo $seconds / (60*60*24)  ;

//echo date("l d.m.Y", time());
setlocale(LC_ALL,  'de_DE@euro', 'de_DE', 'deu', 'german');

echo strftime("%A, %d. %B %Y", time());