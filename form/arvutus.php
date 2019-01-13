<?php
$raadius = $_GET['rad'];
$keha = $_GET['kuju'];
$kõrgus = $_GET['korg'];
if ($keha == 1) {
    echo 'Kera ruumala on '.(4/3*3.14*$raadius**3).' cm^3';
}
else if ($keha == 2) {
    echo 'Silindri ruumala on '.($kõrgus*3.14*$raadius**2).' cm^3';
}
else if ($keha == 3) {
    echo 'Koonuse ruumala on '.($kõrgus/3*3.14*$raadius**2).' cm^3';
}
?>