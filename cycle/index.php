<?php
// for
/*
 * for ($jm = alg; $jm < lopp; $jm++) {
 *  tegevused, mis sooritatakse nii kaua, kuni tsükli $jm väärtus
 * on väiksem kui lõppväärtus*/

echo '<h4>Tsüklid - for</h4>';
echo '<table>';
for ($rida = 1; $rida <= 10; $rida++) {
    echo '<tr>';
        for ($veerg = 1; $veerg <=10; $veerg++) {
            echo '<td>';
            echo $rida*$veerg.'&nbsp';
            echo '</td>';
        }
    echo '<tr>';
}
?>