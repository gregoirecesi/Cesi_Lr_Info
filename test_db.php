<?php

define("SERVEUR","localhost");
define("USER","root");
define("MDP","");
define("BD","db");
define("PORT","3306");

function connexionBd($hote=SERVEUR,$username=USER,$mdp=MDP,$bd=BD,$port=PORT)
{
    try
    {
        $connex= new PDO('mysql:host='.$hote.';dbname='.$bd.';port='.$port, $username, $mdp);
        $connex->exec("SET CHARACTER SET utf8");	//Gestion des accents

        return $connex;
    }
    catch(Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
        return null;
    }
}

?>
