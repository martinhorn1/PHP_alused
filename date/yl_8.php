<?php
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');

$paevanimi = date('l');
if ($paevanimi == 'Monday') {
    echo $paev.'.'.$kuu.' '.$aasta.' esmaspäev';
}
else if ($paevanimi == 'Tuesday') {
    echo $paev.'.'.$kuu.' '.$aasta.' teisipäev';
}
else if ($paevanimi == 'Wednesday') {
    echo $paev.'.'.$kuu.' '.$aasta.' kolmapäev';
}
else if ($paevanimi == 'Thursday') {
    echo $paev.'.'.$kuu.' '.$aasta.' neljapäev';
}
else if ($paevanimi == 'Friday') {
    echo $paev.'.'.$kuu.' '.$aasta.' reede';
}
else if ($paevanimi == 'Saturday') {
    echo $paev.'.'.$kuu.' '.$aasta.' laupäev';
}
else if ($paevanimi == 'Sunday') {
    echo $paev.'.'.$kuu.' '.$aasta.' pühapäev';
}
?>


