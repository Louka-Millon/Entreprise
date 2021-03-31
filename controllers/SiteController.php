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
            `personne`(`prenom`,`nom`,`mail`,`password`,`id_statut`, `id_promo`) 
            VALUES (?, ?, ?, ?, ?, 3);');
        $req->execute([$prenom,$nom,$mail,$pass,$statut]);
        $requ =$bdd->getPDO()->prepare('SELECT `id_personne` FROM `personne` ORDER BY `id_personne` DESC LIMIT 1');
        $requ->execute([]);
        $posts = $requ->fetch();
        return $posts;
    }

    public function addentreprise($nom, $localisation, $nombre_sta, $desc, $telephone, $email,$idpersonne){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('INSERT INTO `entreprise`(`nom_entreprise`, `localisation`, `nombre_stagiaires`, `description`, `telephone`, `email`, `id_personne`) VALUES (?,?,?,?,?,?,?)');
        $req->execute([$nom, $localisation, $nombre_sta, $desc, $telephone, $email,$idpersonne]);
    }
    
    /* login part */
    public function login($email){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `personne` 
        INNER JOIN `promotion` ON `personne`.`id_promo` = `promotion`.`id_promo`
        INNER JOIN `acces` ON `acces`.`id_statut` = `personne`.`id_statut`
        WHERE `mail`= ?');
        $req->execute([$email]);
        $posts = $req->fetch();
        return $posts;
    }


    /*show entreprise part */
    public function showentreprisebyname($id){

        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            'SELECT * FROM `entreprise` INNER JOIN `offre` ON 
            `offre`.`id_entreprise` = `entreprise`.`id_entreprise` 
            WHERE `offre`.`id_offre` =  ?');
        $req->execute([$id]);
        $posts = $req->fetch();
        return $posts;
    }
    public function showentreprise($premier, $dernier){

        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT * from offre
        INNER JOIN `entreprise` ON `offre`.`id_entreprise` = `entreprise`.`id_entreprise` LIMIT '.$premier.' ,'.$dernier);
        $req->execute();
        $posts = $req->fetchAll();
        return $posts;
    }

    public function shownbligneentreprise(){

        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT * from offre
        INNER JOIN `entreprise` ON `offre`.`id_entreprise` = `entreprise`.`id_entreprise`');
        $req->execute([]);
        $posts = $req->rowCount();
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
    public function showcompetence($id){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare('SELECT `qualification`.`competence_recherchee` 
            FROM `entreprise` INNER JOIN `offre` ON 
            `entreprise`.`id_entreprise` = `offre`.`id_entreprise` 
            INNER JOIN `demande` ON `offre`.`id_offre` = `demande`.`id_offre` 
            INNER JOIN `qualification` ON 
            `qualification`.`id_competence` = `demande`.`id_competence` 
            WHERE `offre`.`id_offre` = ?');
        $req->execute([$id]);
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

    /*favori part */
    public function addfavori($idpersonne, $offreid){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('INSERT INTO `favori`(`id_personne`, `id_offre`) 
            VALUES (?,?)');
        $req->execute([$idpersonne, $offreid]);
    }
    public function showfavori($idpersonne){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            "SELECT * FROM `favori` 
            INNER JOIN `personne` ON `personne`.`id_personne` = `favori`.`id_personne`
            INNER JOIN `offre` ON `offre`.`id_offre` = `favori`.`id_offre`
            INNER JOIN `entreprise` ON `entreprise`.`id_entreprise` = `offre`.`id_entreprise`
            WHERE `personne`.`id_personne` = ?"
        );
        $req->execute([$idpersonne]);
        $posts = $req->fetchAll();
        return $posts;
    }
    public function delfavori($idpersonne, $offreid){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('DELETE FROM `favori` 
            WHERE `id_personne` = ? and `id_offre` = ?');
        $req->execute([$idpersonne, $offreid]);
    }
    public function testfavori($idpersonne, $offreid){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            "SELECT * FROM `favori` 
                WHERE `favori`.`id_personne` = ? and `favori`.`id_offre` = ?"
        );
        $req->execute([$idpersonne, $offreid]);
        $posts = $req->fetch();
        return $posts;
    }
    /* get value for cookies */
    public function checkcookies(){
        $bdd = new DBConnection('entreprise', 'localhost', 'root', '');
        $req = $bdd->getPDO()->prepare(
            "SELECT * FROM `personne` 
            INNER JOIN `promotion` ON `personne`.`id_promo` = `promotion`.`id_promo`
            INNER JOIN `acces` ON `acces`.`id_statut` = `personne`.`id_statut`"
        );
        $req->execute([]);
        $posts = $req->fetchAll();
        return $posts;
    }
    public function logincookies(){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `personne` 
        INNER JOIN `promotion` ON `personne`.`id_promo` = `promotion`.`id_promo`
        INNER JOIN `acces` ON `acces`.`id_statut` = `personne`.`id_statut`
        WHERE `id_personne`= ?');
        $req->execute([$id]);
        $posts = $req->fetch();
        return $posts;
        
    }

    /* note etudiant et tuteur */
    public function addnoteetudiant($note, $idpersonne){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('INSERT INTO `eleve`(`evaluation_stagiaire`, `id_personne`) 
            VALUES (?,?)');
        $req->execute([$note, $idpersonne]);
        
        
    }

    public function liaisonetudiant($idoffre){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT `id_entreprise` FROM `offre` WHERE `id_offre` = ?');
        $req->execute([$idoffre]);
        $posts = $req->fetch();
        $requ = $bdd->getPDO()->prepare('SELECT `id_eval_stagiaire` FROM `eleve` ORDER BY `id_eval_stagiaire` DESC LIMIT 1');
        $requ->execute([]);
        $post = $requ->fetch();
        $send = $bdd->getPDO()->prepare('INSERT INTO `evalue`(`id_eval_stagiaire`, `id_entreprise`) VALUES (?,?)');
        $send->execute([$post["id_eval_stagiaire"],$posts["id_entreprise"]]);
    }

    public function moyenneetudiant($idoffre){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT AVG(`evaluation_stagiaire`) as moyenne, COUNT(`evaluation_stagiaire`) as compte FROM `eleve` 
        INNER JOIN `evalue` ON `evalue`.`id_eval_stagiaire` = `eleve`.`id_eval_stagiaire`
        WHERE `evalue`.`id_entreprise` = (SELECT `id_entreprise` FROM `offre` WHERE `id_offre` = ? LIMIT 1)');
        $req->execute([$idoffre]);
        $posts = $req->fetch();
        return $posts;
    }
    public function testetudiantvote($idoffre, $idpersonne){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `eleve` INNER JOIN `evalue` ON `evalue`.`id_eval_stagiaire` = `eleve`.`id_eval_stagiaire` WHERE `evalue`.`id_entreprise` = (SELECT `id_entreprise` FROM `offre` WHERE `id_offre` = ? LIMIT 1) and `eleve`.`id_personne` = ? ');
        $req->execute([$idoffre, $idpersonne]);
        $posts = $req->fetch();
        return $posts;
    }





    public function addnotetuteur($note, $idpersonne){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('INSERT INTO `pilote`(`confiance_pilote`, `id_personne`) 
            VALUES (?,?)');
        $req->execute([$note, $idpersonne]);
        
        
    }

    public function liaisontuteur($idoffre){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT `id_entreprise` FROM `offre` WHERE `id_offre` = ?');
        $req->execute([$idoffre]);
        $posts = $req->fetch();
        $requ = $bdd->getPDO()->prepare('SELECT `id_confiance_pilote` FROM `pilote` ORDER BY `id_confiance_pilote` DESC LIMIT 1');
        $requ->execute([]);
        $post = $requ->fetch();
        $send = $bdd->getPDO()->prepare('INSERT INTO `attribue`(`id_confiance_pilote`, `id_entreprise`) VALUES (?,?)');
        $send->execute([$post["id_confiance_pilote"],$posts["id_entreprise"]]);
    }

    public function moyennetuteur($idoffre){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT AVG(`confiance_pilote`) as moyenne, COUNT(`confiance_pilote`) as compte FROM `pilote` 
        INNER JOIN `attribue` ON `attribue`.`id_confiance_pilote` = `pilote`.`id_confiance_pilote`
        WHERE `attribue`.`id_entreprise` = (SELECT `id_entreprise` FROM `offre` WHERE `id_offre` = ? LIMIT 1)');
        $req->execute([$idoffre]);
        $posts = $req->fetch();
        return $posts;
    }
    public function testtuteurvote($idoffre, $idpersonne){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `pilote` INNER JOIN `attribue` ON `attribue`.`id_confiance_pilote` = `pilote`.`id_confiance_pilote` WHERE `attribue`.`id_entreprise` = (SELECT `id_entreprise` FROM `offre` WHERE `id_offre` = ? LIMIT 1) and `pilote`.`id_personne` = ? ');
        $req->execute([$idoffre, $idpersonne]);
        $posts = $req->fetch();
        return $posts;
    }

    public function addoffre($titreoffre, $descoffre, $debutoffre, $dureeoffre, $nbplace, $salaireoffre, $typeoffre, $identreprise){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('INSERT INTO 
            `offre`(`titre_offre`, `desc_offre`, `date_offre`, `duree_offre`, `nombre_places`, `remuneration`, `type_offre`, `id_entreprise`) 
            VALUES (?,?,?,?,?,?,?,?)');
        $req->execute([$titreoffre, $descoffre, $debutoffre, $dureeoffre, $nbplace, $salaireoffre, $typeoffre, $identreprise]);
    }

    public function updateoffre($titreoffre, $descoffre, $debutoffre, $dureeoffre, $nbplace, $salaireoffre, $typeoffre, $identreprise){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('UPDATE `offre` SET `titre_offre`= ?,`desc_offre`= ?,`date_offre`= ?,`duree_offre`= ?,`nombre_places`= ?,`remuneration`= ?,`type_offre`= ? WHERE `id_offre` = ?');
        $req->execute([$titreoffre, $descoffre, $debutoffre, $dureeoffre, $nbplace, $salaireoffre, $typeoffre, $identreprise]);
    }

    public function getEntreprisebyId($id){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT `id_entreprise` FROM `entreprise` WHERE `entreprise`.`id_personne` = ?');
        $req->execute([$id]);
        $posts = $req->fetch();
        return $posts;
    }

    public function getoffre($id){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `entreprise` 
            INNER JOIN `offre` ON `offre`.`id_entreprise` = `entreprise`.`id_entreprise` 
            WHERE `entreprise`.`id_personne` = ? ');
        $req->execute([$id]);
        $posts = $req->fetchAll();
        return $posts;
    }

    public function deloffre($id){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('DELETE FROM `offre` WHERE `id_offre` = ?');
        $req->execute([$id]);
    }

    /* login part */
    public function afficheuserbyaccess($access){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `personne` 
        INNER JOIN `promotion` ON `personne`.`id_promo` = `promotion`.`id_promo`
        INNER JOIN `acces` ON `acces`.`id_statut` = `personne`.`id_statut`
        WHERE `acces`.`statut` = ?
        ORDER BY `nom`,`prenom` ASC');
        $req->execute([$access]);
        $posts = $req->fetchAll();
        return $posts;
    }

    public function updatepersonne($prenom, $nom, $mail, $centre, $role, $iduser){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('UPDATE `personne` SET 
            `prenom`= ?,`nom`= ?,`mail`= ?,`centre`= ?,`id_statut`= ? 
            WHERE `id_personne` = ?');
        $req->execute([$prenom, $nom, $mail, $centre, $role, $iduser]);
    }

    public function getinfobyid($id){
        $bdd = new DBConnection('entreprise', 'localhost', "root", "");
        $req = $bdd->getPDO()->prepare('SELECT * FROM `personne`
        INNER JOIN `acces` ON `acces`.`id_statut` = `personne`.`id_statut`
        WHERE `id_personne` = ?');
        $req->execute([$id]);
        $posts = $req->fetch();
        return $posts;
    }

}