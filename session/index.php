<?php
session_strt();
require_once 'fnk.php';

if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['last_name'].'!<br>';
    echo '<a href="acts/logout.php">Logi välja</a>';
} else {
    $loginForm = htmlFromFile('login');
    echo $loginForm;
}