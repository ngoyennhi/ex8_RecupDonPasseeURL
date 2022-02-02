<?php
include_once('commun.inc.php');
$numero = filter_input(INPUT_GET,'numero',FILTER_VALIDATE_INT);
if (is_int($numero) and array_key_exists($numero,$auteurs)) {
$auteur = $auteurs[$numero];
}
?>

<?php
include_once('commun.inc.php');
$numero = filter_input(INPUT_GET,'numero',FILTER_VALIDATE_INT);
if (is_int($numero) and array_key_exists($numero,$auteurs)) {
$auteur = $auteurs[$numero];
}
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8" />
<title>Auteur</title>
</head>
<body>
    <!-- ex 3 de filtre -->
<h1><?php 
$nom=isset($auteur)?$auteur:'Auteur introuvable';
echo $nom;
?></h1>

<p><a href="accueil.php">Retour à la liste</a></p>
</body>
</html>

<!-- Dans cette solution nous utilisons un fltre pour vérifer que le numéro passé
dans l’URL existe et est bien un entier ; si ce n’est pas le cas, la fonction
flter_input retourne FALSE. Le test is_int($numero) permet ensuite de vérifer
que ce numéro est bien un entier (et n’est donc efectivement pas FALSE) et le
test array_key_exists($numero,$auteurs) que ce numéro est bien le numéro
(l’indice) d’un auteur. -->

