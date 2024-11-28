<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTS - Connexion</title>
    <link id="theme-link" rel="stylesheet" href="../css/dark-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Zen+Dots&display=swap" rel="stylesheet">
</head>

<body class= "traitement_body">
<nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="nav-logo">BACK TO THE STACK</a>
            <ul class="nav-links">
                <li><a href="../html/recherche.html">🔎</a></li>
                <li><a href="login.php">Connexion</a></li>
                <li><a href="signup.php">Inscription</a></li>
                <li><a href="../html/index.html">Menu Principal</a></li>
                <li><a href="../html/comptech.html">Compétences Techniques</a></li>
                <li><a href="../html/méthode.html">Méthode</a></li>
                <li><a href="../html/anciens clients.html">Expérience</a></li>
                <li><a href="../html/notreequipe.html">Équipe</a></li>
            </ul>
        </div>
    </nav>
    <script src="../js/script.js"></script>
<?php
$servername = "localhost";
$username = "root";
$password = "root";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

if(isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudo, :nom, :prenom, MD5(:mdp), :email)");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "nom" => $nom,
            "prenom" => $prenom,
            "mdp" => $mdp,
            "email" => $email
        )
    );
    echo "Utilisateur ajouté avec succès.";
}
?>