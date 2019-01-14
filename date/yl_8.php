<?php

$synd = date('Y', mktime(0,0,0,2,20,1993));
$jarg = date('Y');

echo $jarg+1-$synd.'<br>';
if (($jarg+1-$synd) % 5 == 0) {
    echo 'Mul on järgmisel aastal juubel';
}
else {
    echo 'Järgmine juubel tuleb veel hiljem';
}

?>