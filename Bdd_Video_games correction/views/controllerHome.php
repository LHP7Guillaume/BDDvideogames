<?php

// indiqué le chemin de votre fichier JSON, il peut s'agir d'une URL
$json ="../Video_games.json";
$data = file_get_contents($json); 
// décoder le flux JSON
$obj = json_decode($data); 
// accéder à l'élément approprié

        



?>
