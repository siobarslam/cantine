<?php
$fourchettes = 150;
$couteaux = 150;
$cuilleres = 150;
$assiettes = 150;
echo "<h1>Bienvenue sur l'application de gestion 'cantine'"</h1>
echo "Liste des couverts :";
echo "<br/>";
echo "Fourchettes : " . $fourchettes;
echo "<br/>";
echo "Couteaux : " . $couteaux;
echo "<br/>";
echo "Cuilleres : " . $cuilleres;
echo "<br/>";
echo "Assiettes : " . $assiettes;
echo "<br/>";
echo "<br/>";
$quantites = array();
$quantites[] = $fourchettes;
$quantites[] = $couteaux;
$quantites[] = $cuilleres;
$quantites[] = $assiettes;
$repas = min($quantites);
echo "Vous pouvez organiser un repas avec " . $repas . " convives.";
?>
