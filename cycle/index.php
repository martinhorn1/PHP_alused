<?php
header('Refresh: 1');
// for
/*
 * for ($jm = alg; $jm < lopp; $jm++) {
 *  tegevused, mis sooritatakse nii kaua, kuni tsükli $jm väärtus on väiksem kui lõppväärtus*/

echo '<h4>Tsüklid - for</h4>';
echo '<table>';
for ($rida = 1; $rida <= 5; $rida++) {
    $varv = '#'.rand(0,9).rand(0,9).rand(0,9);
    echo '<tr>';
        echo '<td style="background: '.$varv.'">';
        echo '&nbsp';
        echo '</td>';
    echo '<tr>';
}
?>