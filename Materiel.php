<?php

class Materiel {

    public $id;
    public $marque;
    public $nom;
    public $fonction;

    public function __construct($n, $m, $f, $id = NULL) {
        
		$this->id = $id;
        $this->nom = $n;
        $this->marque = $m;
        $this->fonction = $f;
    }

    public function ajouter() {
        $con = new PDO("mysql:host=localhost;dbname=amir", 'root', '');
        $requette = "insert into materiel (nom,marque,fonction) values ('$this->nom','$this->marque','$this->fonction')";
        $con->query($requette);
    }

    public static function getMateriel() {
        $con = new PDO('mysql:host=localhost;dbname=amir', 'root', '');
        $req = "select * from materiel";
        $stmt = $con->query($req);
        $listeMateriel = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $listeMateriel;
    }

    public static function getMaterielById($id) {
        $con = new PDO('mysql:host=localhost;dbname=amir', 'root', '');
        $req = "select * from materiel where id=$id";
        $stmt = $con->query($req);
        $tabMateriel = $stmt->fetch(PDO::FETCH_ASSOC);

        //Création de l'objet
        $objMateriel = new Materiel($tabMateriel['nom'], $tabMateriel['marque'], $tabMateriel['fonction'], $tabMateriel['id']);
        return $objMateriel;
    }

    public function supprimer() {
        $con = new PDO('mysql:host=localhost;dbname=amir', 'root', '');
        $req = "delete from materiel where id=$this->id";
        $con->query($req);
    }

    public function modifier() {
        $con = new PDO('mysql:host=localhost;dbname=amir', 'root', '');
        $req = "update materiel set nom='$this->nom', marque='$this->marque' , fonction='$this->fonction' where id=$this->id";
        $con->query($req);
    }

    public function getid() {
        return $this->id;
    }

    public function getnom() {
        return $this->nom;
    }

    public function getmarque() {
        return $this->marque;
    }

    public function getfonction() {
        return $this->fonction;
    }

}

?>
