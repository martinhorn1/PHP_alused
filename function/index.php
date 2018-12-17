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

echo 'Funktsioon, mis tagastab väärtuseid<br>';
function addNums($firstnum, $secondnum) {
    $result = $firstnum + $secondnum;
    return $result;
}
print addNums(3,5).'<br><hr>';

echo 'Funktsiooni dünaamilised väljakutsed<br>';
function sayHello() {
    print 'Hello<br>';
}
$function_holder = 'sayHello';
$function_holder();
print '<hr>';

echo 'Muutujate nähtavuse piirkond<br>';
function test() {
    $testvariable = 'this is a test variable';
}
print 'test variable: '.$testvariable.'<hr>';

?>