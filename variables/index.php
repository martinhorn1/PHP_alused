<?php
// muutujate defineerimine;
// $muutujanimi = väärtus;

$taisarv = 7;
$reaalarv = 3.14;
$sone = '7';
$toevaartusTrue = true;
$toevaartusFalse = false;

echo 'Täisarv = '.$taisarv.'<br>';
echo 'Reaalarv = '.$reaalarv.'<br>';
echo 'Sõne = '.$sone.'<br>';
echo 'Tõeväärtus õige = '.$toevaartusTrue.'<br>';
echo 'Tõeväärtus vale = '.$toevaartusFalse.'<br>';

echo gettype($sone).'<br>';
settype($sone,'int');
echo gettype($sone).'<br>';



?>