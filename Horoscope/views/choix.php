<html>
    <body>
   <?php
   if($_SESSION['user']['rôle'] == 'admin'){ ?>
    <a href="index.php?action=modifier"> Administrer </a>
    <?php } ?>
<?php

?>

    <form method="post" action="index.php?action=reponse">
        <select name="horoscope" size="1">
            <?php foreach($tableau as $cle => $valeur):?>
                <option value="<?= $cle?>"><?= $cle?> </option>
                <?php endforeach ?>
            </select>
            <input type="submit" value="envoyer">
            
    </body>
</html>