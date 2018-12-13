<?php
// Tingimuslaused
// if (tingimus) {
// tegevused, kui tingimus kehtib
// } else {
// tegevused, kui tingimus ei kehti
// }

$arv = rand(0,100);

echo '<h4>Tingimuslaused</h4>';
if ($arv  >= 0 and $arv < 25) {
    echo '<p style="color: green">'.$arv.'</p>';
} else if ($arv  >= 25 and $arv < 50){
    echo '<p style="color: red">'.$arv.'</p>';
} else if ($arv  >= 50 and $arv < 75){
    echo '<p style="color: blue">'.$arv.'</p>';
} else if ($arv  >= 75 and $arv < 100){
    echo '<p style="color: orange">'.$arv.'</p>';
}
    ?>