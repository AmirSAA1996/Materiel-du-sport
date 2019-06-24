<?php

require_once './Materiel.php';

//Récupération du paramètre id envoyé par la méthode get
$id = $_GET['id'];

//Récupération de l'objet materiel 
$objMateriel = Materiel::getMaterielById($id);

//Suppression de l'objet materiel
$objMateriel->supprimer();

//Redirection vers la page liste_materiel.php
header("location:liste_materiel.php");
