<?php

// for
/*
 * for ($jm = alg; $jm < lopp; $jm++) {
 *  tegevused, mis sooritatakse nii kaua, kuni tsükli $jm väärtus on väiksem kui lõppväärtus*/

echo '<h4>Tsüklid - for</h4>';

for ($arv = 1; $arv <= 10; $arv++) {
    if ($arv % 2 == 0) {
        $varv = 'green';
    }
    else {
        $varv = 'red';
    }
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}

?>