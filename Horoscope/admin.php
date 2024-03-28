<html>
    <body>


    <form method="post" action="index.php?action=administrer">
        
            <?php foreach($tableau as $cle => $valeur):?>
            <?= $cle ?> <input type=text id="<?= $cle ?>" name="<?= $cle ?>" value="<?= $valeur ?>"> <br>
            <?php endforeach ?>
            <input type="submit" value="ok">

    </body>
</html>