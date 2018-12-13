<?php
// Tingimuslaused
// if (tingimus) {
// tegevused, kui tingimus kehtib
// } else {
// tegevused, kui tingimus ei kehti
// }

$arv = rand(0,100);

echo '<h4>Tingimuslaused</h4>';
if ($arv % 2 == 0) {
    echo '<p style="color: green">'.$arv.'</p>';
} else {
    echo '<p style="color: red">'.$arv.'</p>';
}
?>