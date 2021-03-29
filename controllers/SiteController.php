<?php
require "BDConnection.php";

class SiteController{
    public function verifiexistence(string $prenom, string $nom, string $mail){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `personne` 
            WHERE `prenom`= ? AND `nom`= ? AND `mail`= ?;');
        $req->execute([$prenom,$nom,$mail]);
        $posts = $req->fetch();
        return $posts;
    }

    public function inscriptioncompte(string $prenom, string $nom, string $mail, string $pass, int $statut){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('INSERT INTO 
            `personne`(`prenom`,`nom`,`mail`,`password`,`id_statut`) 
            VALUES (?, ?, ?, ?, ?);');
        $req->execute([$prenom,$nom,$mail,$pass,$statut]);
    }
}

?>