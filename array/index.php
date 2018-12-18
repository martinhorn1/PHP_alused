<?php

$kasutajad = array(
    array(
        'alice',
        'Alice',
        'Liddell',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);

for ($i = 0; $i < count($kasutajad); $i++) {
    if ($kasutajad[$i][3] == 'female') {
        echo '<div style="color: blue">';
    } else {
        echo '<div style="color: red">';
    }
    foreach ($kasutajad[$i] as $info) {
        echo $info.'<br>';
    }
    echo '<hr>';
}
?>