<!DOCTYPE html>
<html lang="fr">
<head>
        <title>{$title}</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="../core/css/header.css" media="screen" />
        <link rel="shortcut icon" href="images/favicon.ico" />
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
<header>
        <div class="bg"></div>
        <div class="container">
                <a href="#row-nav" id="open" onclick="display();">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="27px" viewBox="0 0 34 27" enable-background="new 0 0 34 27" xml:space="preserve">
                                <rect fill="#000" width="34" height="4"/>
                                <rect y="11" fill="#000" width="34" height="4"/>
                                <rect y="23" fill="#000" width="34" height="4"/>
                        </svg>
                </a>
               
                <div class="row-nav">
                        
                        <div class="items-left">
                                <h1>{$title}</h1>
                        </div>
                        <div class="items"><a href="#">Home</a></div>
                        <div class="items"><a href="#">Recherche d'emplois</a></div>
                        <div class="items"><a href="#">A propos</a></div>
                        <div class="items"><a href="#">Contact</a></div>
                        <div class="items"><a href="#">Connexion</a></div>
                        <div class="items"><a href="#">S'inscrire</a></div>
                        <a href="#" id="close" onclick="hide();">X</a>
                </div>
                <div class="row-search">
                        <h2 id="titre">{$page_name}</h2>
                </div>

        </div>
        <script src="../core/js/navbar.js"></script>
</header>