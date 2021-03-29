<?php 
require "BDConnect.php";

class SiteController{
    /*sign in part  */
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
    
    /* login part */
    public function login($email){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `personne` 
        INNER JOIN `promotion` ON `personne`.`id_promo` = `promotion`.`id_promo`
        WHERE `mail`= ?');
        $req->execute([$email]);
        $posts = $req->fetch();
        return $posts;
    }


    /*show entreprise part */
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

    public function showtopsecteur(){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            "SELECT `secteur`.`secteur_activite`, COUNT(`secteur_activite`) AS `nombre_secteur`
            FROM `entreprise`
            INNER JOIN `vise` ON `vise`.`id_entreprise` = `entreprise`.`id_entreprise`
            INNER JOIN `secteur` ON `secteur`.`id_secteur` = `vise`.`id_secteur`
            GROUP BY `secteur`.`secteur_activite`
            ORDER BY `nombre_secteur` DESC LIMIT 4;"
        );
        $req->execute([]);
        $posts = $req->fetchAll();
        return $posts;
    }
    
}