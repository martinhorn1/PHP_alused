<?php

function loendaja($arv, $kontroll) {
    $loendaja = 0;
    echo 'Arv on algselt '.$arv.'<br>';
    while ($arv != 0) {
        $number = $arv%10;
        echo 'Number = '.$number.'<br>';
        if ($number == $kontroll) {
            echo 'Lisatud arv loendajasse<br>';
            $loendaja++;
        }
        $arv = floor($arv/10);
    }
    echo 'Number '.$kontroll.' esineb arvus '.$loendaja.' korda<br><hr>';
}

loendaja(4653268785559,5);
loendaja(4653268785559,7);

?>