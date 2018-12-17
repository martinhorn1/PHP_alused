<?php

echo 'Funktsiooni väljakutsumine<br>';
$num = -321;
$newnum = abs($num);
print $newnum.'<br><hr>';

echo 'Funktsiooni loomine<br>';
function bighello() {
    print '<h1>HELLO!</h1><br><hr>';
}
bighello();

?>