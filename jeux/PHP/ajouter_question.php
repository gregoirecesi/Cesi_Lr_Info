<?php 

require('../../test_db.php');
$connexion=connexionBd();

$req_toutes_entreprises = "SELECT * FROM tb_admin";
$rep_req_toutes_entreprises=$connexion->query($req_toutes_entreprises);
$result_entreprise=$rep_req_toutes_entreprises->fetchAll(PDO::FETCH_OBJ);

foreach($result_entreprise as $ok)
{
    var_dump($ok);
}


?>