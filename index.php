<?php
$text1 = 'Bonjour à tous';
$text2 = 'et bienvenue';
function concatenText($string1, $string2){
	$result = $string1. ' '. $string2;
	return $result;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Exercice 7 PHP</title>
</head>
<body>
	<h1>Créer 2 variables et les initialiser avec des chaînes de caractères.
		Créer une fonction qui renvoie la concaténation de ces deux chaînes.
		Afficher le résultat.</h1>
		<p>voici ma 1ere variable $text1 : <?= $text1 ?></p>
		<p>voici ma 2eme variable $text2 : <?= $text2 ?></p>
		<p>et voici le résultat de la fonction de concaténation : <?= concatenText($text1,$text2)?>
	</body>
	</html>
