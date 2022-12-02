<?php
require('../test_db.php');

$co = new DBConnect();

$playername = "Joueur";//"SELECT pseudo FROM TB_User";
//$iduser = "SELECT id_user FROM TB_user";
$score = 10;//"SELECT pourcentage_purete FROM TB_Game WHERE id_user == $iduser";

if($score <= 10){
    $width = 30;
    $color = "#FF0000";
}
elseif($score > 10 && $score <=20){
    $width = 60;
    $color = "#FB4D05";
}
elseif($score > 20 && $score <=30){
    $width = 90;
    $color = "#FF6600";
}
elseif($score > 30 && $score <=40){
    $width = 120;
    $color = "#FE9900";
}
elseif($score > 40 && $score <=50){
    $width = 150;
    $color = "#FFCC00";
}
elseif($score > 50 && $score <=60){
    $width = 180;
    $color = "#FFFF00";
}
elseif($score > 60 && $score <=70){
    $width = 210;
    $color = "#CCFF00";
}
elseif($score > 70 && $score <=80){
    $width = 240;
    $color = "#65FF00";
}
elseif($score > 80 && $score <=90){
    $width = 270;
    $color = "#02FE01";
}
else{
    $width = 300;
    $color = "#22780F";
}


?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Classement.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
        <title>Connexion | Filou's Team</title>
    </head>
    <body>
        <div class="container">
            <div class = "text">
                <h1>
                    Bravo
                    <?php
                    echo $playername;
                    ?>
                    tu as fini le test !
                </h1>
            </div>
            <div>
                <div class = "text">
                Ton pourcentage de pureté est de :
                <?php
                echo $score;
                ?>
                %
                </div>
                <div class="barre" style="border: 10px solid <?php echo $color ?>; height: 0px; width: <?php echo $width ?>px;">
            </div>
            </div>
        </div>
    </body>
</html>