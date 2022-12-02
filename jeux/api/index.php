<?php

$response = file_get_contents('https://geo.api.gouv.fr/regions?fields=nom,code');
$response = json_decode($response);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Régions de la france</title>
</head>
<body>
    <h1>Régions</h1>

    <div>Voici les différentes régions de la france à l'aide de l'api du gouvernement</div>

    <div>
        <?php
            foreach($response as $row)
            {
                echo $row->nom;
                echo "</br>";
            }
        ?>
    </div>
</body>
</html>