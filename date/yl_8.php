<?php

$synd1 = date('Y', mktime(0,0,0,11,6,1980));
$synd2 = date('Y', mktime(0,0,0,2,20,1993));

if ($synd1 > $synd2) {
    echo 'Noorem '.($synd1-$synd2).' aastat';
}
else {
    echo 'Vanem '.($synd2-$synd1).' aastat';
}

?>


