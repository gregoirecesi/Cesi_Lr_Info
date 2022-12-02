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
    <link rel="stylesheet" href="../CSS/api.scss">
    <title>Régions de la france</title>
</head>
<body>
<img id="img" src="../IMG/smile.jpg" alt="" style="display: none;width:1920px;height:1080px;">
    <h1>Régions</h1>

    <div>Voici les différentes régions de la france à l'aide de l'api du gouvernement</div>

    <div class="regions">
        <?php
            foreach($response as $row)
            {
                ?>
                <div class="independantes">
                    <?php
                    echo $row->nom;
                    echo "</br>";
                    ?>
                </div>
                <?php
            }
        ?>
    </div>
    <div>
        <a href="#" id="bouton" style="text-decoration:none; color:black">No clip</a>
    </div>

<script>
    bouton.onclick=function(){
        var audio = new Audio("../mp3/backrooms.mp3");
        audio.play();
        document.getElementById('img').style.display="inline";
    };
 
</script>
</body>
</html>