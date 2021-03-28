<?php 
require "connexion.php";

class SiteController{
    public function showentreprisebyid(int $id){

        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT * from entreprise WHERE id_entreprise = ?');
        $req->execute([$id]);
        $posts = $req->fetch();
        return $posts;
    }
    public function showentreprise(){

        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT * from entreprise');
        $req->execute();
        $posts = $req->fetchAll();
        return $posts;
    }
}