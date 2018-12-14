<?php
// for
/*
 * for ($jm = alg; $jm < lopp; $jm++) {
 *  tegevused, mis sooritatakse nii kaua, kuni tsükli $jm väärtus
 * on väiksem kui lõppväärtus*/

echo '<h4>Tsüklid - for</h4>';
echo '<table>';

echo '<table style="border-collapse: collapse">';
echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightgreen">&nbsp;</th>';
for($veerg = 1; $veerg <= 10; $veerg++){
    echo '<th style="width: 20px; text-align: center; border: solid 1px black; background: lightgreen">';
    echo $veerg;
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
echo '<br>';
echo '<hr>';
echo '<br>';

$arv=123456789;
$numbriteSumma = 0;

while ($arv != 0) {
    $number = $arv%10;
    echo 'Number = '.$number.'<br>';
    $arv = floor($arv/10);
    echo 'Uus arv on '.$arv.'<br>';
    $numbriteSumma = $numbriteSumma + $number;
    echo 'Summa on '.$numbriteSumma.'<br>';
}

echo 'Lõplik summa: '.$numbriteSumma;
echo '<hr>';

$arv = 467484561431564;
$loendaja = 0;
echo 'Arv on algselt '.$arv.'<br>';
while ($arv != 0) {
    $number = $arv%10;
    echo 'Number = '.$number.'<br>';
    if ($number == 5) {
        echo 'Lisatud arv loendajasse<br>';
        $loendaja++;
    }
    $arv = floor($arv/10);
}
echo 'Number 5 esineb arvus '.$loendaja.' korda<br>';


?>