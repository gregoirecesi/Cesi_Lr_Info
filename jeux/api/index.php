<?php

$response = file_get_contents('https://geo.api.gouv.fr/regions?fields=nom,code');
$response = json_decode($response);
foreach($response as $row)
{
    echo $row->nom;
    echo "</br>";
}


