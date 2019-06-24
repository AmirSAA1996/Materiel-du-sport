<?php

require_once './Materiel.php';

//Récupération des paramètres envoyés par le formulaire (méthode post)
$id = $_POST['id'];
$nom = $_POST['nom'];
$marque = $_POST['marque'];
$fonction = $_POST['fonction'];
//Création d’un nouveau objet en utilisant les nouveaux paramètres
$objMateriel = new Materiel($nom, $marque, $fonction, $id);

//Modification de materiel en utilisant la méthode modifier()
$objMateriel->modifier();

//Redirection vers la page liste_materiel.php
header('location: liste_materiel.php');


