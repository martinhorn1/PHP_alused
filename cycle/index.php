<?php
// for
/*
 * for ($jm = alg; $jm < lopp; $jm++) {
 *  tegevused, mis sooritatakse nii kaua, kuni tsükli $jm väärtus
 * on väiksem kui lõppväärtus*/

echo '<h4>Tsüklid - for</h4>';
echo '<table>';

echo '<table style="border-collapse: collapse">';
echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcoral">&nbsp;</th>';
for($arv2 = 1; $arv2 <= 10; $arv2++){
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcoral">';
    echo $arv2;
    echo '</th>';
}
for($rida = 1; $rida <= 10; $rida++){
    echo '<tr>';

    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightcoral">';
    echo $rida;
    echo '</th>';

    for($veerg= 1; $veerg <= 10; $veerg++) {
        echo '<td style="width: 20px; text-align: center; border: solid 1px black;">';
        echo $rida * $veerg;
        echo '</td>';
    }
    echo '</tr>'; // rea lõpp
}
echo '</table>'; // tabeli lõpp
?>
