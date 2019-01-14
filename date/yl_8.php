<?php
$paevanimi = date('l');
if ($paevanimi == 'Monday') {
    echo 'Esmaspäev';
}
else if ($paevanimi == 'Tuesday') {
    echo 'Teisipäev';
}
else if ($paevanimi == 'Wednesday') {
    echo 'Kolmapäev';
}
else if ($paevanimi == 'Thursday') {
    echo 'Neljapäev';
}
else if ($paevanimi == 'Friday') {
    echo 'Reede';
}
else if ($paevanimi == 'Saturday') {
    echo 'Laupäev';
}
else if ($paevanimi == 'Sunday') {
    echo 'Pühapäev';
}
?>


