<?php

$jaan = mktime(0,0,0,6,24,2019);

echo 'Jaanipäevani on '.round(date($jaan-strtotime('now'))/3600/24).' päeva.';

?>


