<?php
date_default_timezone_set('Europe/Tallinn');

$aeg = date('H');
if ($aeg >= 8 and $aeg < 13) {
    echo 'Tere hommikust';
}
else if ($aeg >= 13 and $aeg < 17) {
    echo 'Tere päevast';
}
else if ($aeg >= 17) {
    echo 'Tere õhtust';
}

?>