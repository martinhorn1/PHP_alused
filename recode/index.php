<menu>
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>

<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    if(is_file($leht.'.php')){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
    ?>
    <h1>Avaleht</h1>
    <p>Tekst</p>

<?php
    }
?>