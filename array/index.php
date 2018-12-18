<?php

$kasutajad = array();

$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, 'lucy');

$lisaKasutajad = array('mark', 'george');

$kasutajadKokku = count($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}
array_shift($kasutajad);
for($i = 0; $i < $kasutajadKokku; $i++){
    echo $kasutajad[$i].'<br>';
}
$uuedKasutajad = array_merge($kasutajad, $lisaKasutajad);
for($i = 0; $i < $uuedKasutajad; $i++) {
    echo $uuedKasutajad[$i] . '<br>';
}

echo '<hr>';
foreach ($uuedKasutajad as $kasutaja) {
    echo $kasutajad.'<br>';
}
?>