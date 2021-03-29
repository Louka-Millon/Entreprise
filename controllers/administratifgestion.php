<?php
session_start();
$_SESSION["mail"] = "jean-jacques@gmail.com";

/*file test*/
$dossier = "../core/stored_data/";
if(!file_exists($dossier . $_SESSION["mail"])){
    mkdir($dossier . $_SESSION["mail"], 0777, true);
}else{
    $dossier = $dossier . $_SESSION["mail"] . "/";
}


print_r($_FILES["CV"]);

if(isset($_FILES['CV'])){
    
    move_uploaded_file($_FILES["CV"]["tmp_name"], $dossier, $_FILES["CV"]["name"]);
}

/*
if(isset($_FILES['CV']) && $_FILES['CV']['error']==0){
    $fichier = basename($_FILES['CV']['name']);
    $taille_maxi = 10000000;
    $taille = filesize($_FILES['CV']['tmp_name']);

    $extensions = array('.docx', '.pdf', '.odt', '.pub');
    $extension = strrchr($_FILES['CV']['name'], '.'); 
    //Début des vérifications de sécurité...
    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if($taille>$taille_maxi)
    {
        $erreur = 'Le fichier est trop gros...';
    }
    if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
    {
        if(move_uploaded_file($_FILES['CV']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
            echo 'Upload effectué avec succès !';
        }
        else //Sinon (la fonction renvoie FALSE).
        {
            echo 'Echec de l\'upload !';
        }
        
    }
    else
    {
        echo  $erreur;
    }
}*/