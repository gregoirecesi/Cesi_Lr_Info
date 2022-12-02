<?php 

require('../../test_db.php');
$connexion=connexionBd();
/*
$req_toutes_entreprises = "SELECT * FROM tb_admin";
$rep_req_toutes_entreprises=$connexion->query($req_toutes_entreprises);
$result_entreprise=$rep_req_toutes_entreprises->fetchAll(PDO::FETCH_OBJ);

foreach($result_entreprise as $ok)
{
    var_dump($ok);
}
*/


if(isset($_POST["btn_ajouter_question"])) {

    $text_question = addSlashes(htmlspecialchars($_POST["question"]));

    $req_ajout_question= "INSERT INTO `tb_question`(`id_question`, `question`) VALUES (null,:question)";
    
    $requete_ajout_question = $connexion->prepare($req_ajout_question);
    $requete_ajout_question->bindValue(":question", $text_question);
    $requete_ajout_question->execute();


}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  

    <title>Ajouter question</title>
</head>



<body id="body">

    <h1 class="titre">Ajouter des questions</h1>

    <form action="" method="post">

        <input type="text" id="question" name="question" class="" placeholder="Question" value="<?php if (isset($_POST['question'])){echo $_POST['question'];} ?>">

        <div id="firstdoc">
            <div class="doc">
                <input type="text" id="doc" name="doc" class="" placeholder="documentation" value="<?php if (isset($_POST['doc'])){echo $_POST['doc'];} ?>">
            </div>
        </div>

        <div id="moredoc">


        </div>
        

        <button type="button" onclick="addDoc();">Ajouter plus de doc</button>
        <button type="button" onclick="removeDoc();">Supprimer ce doc</button>
        
        <input type="submit" value="Ajouter" name="btn_ajouter_question">

        
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript">
        function addDoc(){
            $('#firstdoc .doc').clone().find('input').val('').end().appendTo('#moredoc');
        }

        function removeDoc(){
            $('#moredoc .doc').last().remove();
        }

    </script>

</body>






</html>

