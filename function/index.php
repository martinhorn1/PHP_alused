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

echo 'Globaalse muutuja kasutamine<br>';
$life = 42;
function meaningOfLife() {
    global $life;
    print 'The meaning of life is '.$life.'<hr>';
}
meaningOfLife();

echo 'Funktsiooni seisundi meelespidamine<br>';
$num_of_calls = 0;
function andAnotherThing($txt) {
    global $num_of_calls;
    $num_of_calls++;
    print '<h1>'.$num_of_calls.'. '.$txt.'</h1>';
}
andAnotherThing('Widgets');
print ('We build a fine range of widgets');
andAnotherThing('Doodads');
print ('Finest in the world');


?>