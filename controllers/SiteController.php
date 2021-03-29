<?php 
require "BDConnect.php";

class SiteController{
    public function showentreprisebyname(string $name){

        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            'SELECT * FROM `entreprise` INNER JOIN `offre` ON 
            `offre`.`id_entreprise` = `entreprise`.`id_entreprise` 
            WHERE `entreprise`.`nom_entreprise` =  ?');
        $req->execute([$name]);
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

    public function showentreprisebydetails(){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT * FROM `entreprise` INNER JOIN `offre` ON 
            `offre`.`id_entreprise` = `entreprise`.`id_entreprise`');
        $req->execute();
        $posts = $req->fetchAll();
        return $posts;
    }
    public function showcompetence($name){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT `qualification`.`competence_recherchee` 
            FROM `entreprise` INNER JOIN `offre` ON 
            `entreprise`.`id_entreprise` = `offre`.`id_entreprise` 
            INNER JOIN `demande` ON `offre`.`id_offre` = `demande`.`id_offre` 
            INNER JOIN `qualification` ON 
            `qualification`.`id_competence` = `demande`.`id_competence` 
            WHERE `entreprise`.`nom_entreprise` = ?');
        $req->execute([$name]);
        $posts = $req->fetchAll();
        return $posts;
    }

    public function showcompetences(){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            'SELECT `entreprise`.`nom_entreprise`,`qualification`.`competence_recherchee` 
            FROM `entreprise` INNER JOIN `offre` ON 
            `entreprise`.`id_entreprise` = `offre`.`id_entreprise` 
            INNER JOIN `demande` ON `offre`.`id_offre` = `demande`.`id_offre` 
            INNER JOIN `qualification` ON 
            `qualification`.`id_competence` = `demande`.`id_competence` 
            ');
        $req->execute();
        $posts = $req->fetchAll();
        return $posts;
    }
    public function showrecherche($offre, $competence, $lieu){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            "SELECT * FROM `entreprise` 
            INNER JOIN `offre` ON `entreprise`.`id_entreprise` = `offre`.`id_entreprise` 
            INNER JOIN `demande` ON `demande`.`id_offre` = `offre`.`id_offre` 
            INNER JOIN `qualification` ON `qualification`.`id_competence` = `demande`.`id_competence` 
            WHERE `offre`.`type_offre` LIKE ? 
            AND `qualification`.`competence_recherchee` LIKE ? 
            AND `entreprise`.`localisation` LIKE ? 
            GROUP BY `entreprise`.`nom_entreprise`"
        );
        $req->execute([$offre, $competence, $lieu]);
        $posts = $req->fetchAll();
        return $posts;
    }
}