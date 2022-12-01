<?php
print("Salut romain");

define("SERVEUR","127.0.0.1");
define("USER","root");
define("MDP","cesi");
define("BD","db");
define("PORT","8001");

function connexionBd($hote=SERVEUR,$username=USER,$mdp=MDP,$bd=BD,$port=PORT)
{
    // try
    // {
        $connex= new PDO('mysql:host='.$hote.';dbname='.$bd.';port='.$port, $username, $mdp);
        $connex->exec("SET CHARACTER SET utf8");	//Gestion des accents

        return $connex;
    // }
    // catch(Exception $e)
    // {
        // echo 'Erreur : '.$e->getMessage().'<br />';
        // echo 'NÂ° : '.$e->getCode();
        // return null;
    // }
}

connexionBd();