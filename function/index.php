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

echo 'Funktsioon argumendiga<br>';
function printBR($txt) {
    print ($txt.'<br>');
}
printBR('This is a line');
printBR('This is another line');
printBR('This is yet another line<hr>');

?>