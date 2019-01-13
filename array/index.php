<?php
$first = array('x'=>5, 'a'=>2, 'f'=>1);
ksort($first);
foreach ($first as $key => $var) {
    print $key = $var.'<br>';
}
?>