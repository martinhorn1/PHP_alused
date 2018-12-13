<?php
// Tingimuslaused
// if (tingimus) {
// tegevused, kui tingimus kehtib
// } else {
// tegevused, kui tingimus ei kehti
// }

echo '<h4>Tingimuslaused</h4>';

$foor = 'sinine';

switch ($foor) {
    case 'punane':
        echo '<p style="color: red">Punane</p>';
        break;
    case 'kollane':
        echo '<p style="color: yellow">Kollane</p>';
        break;
    case 'roheline':
        echo '<p style="color: green">Roheline</p>';
        break;
    default:
        echo '<p>Mingi teine</p>';
        break;
}

    ?>