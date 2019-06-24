<?php

require_once './Materiel.php';

$n= $_POST["nom"];
$m= $_POST["marque"];
$f= $_POST["fonction"];

$materiel= new Materiel($n,$m,$f);
$materiel->ajouter();
header('location: ajoutertest.php');
?>