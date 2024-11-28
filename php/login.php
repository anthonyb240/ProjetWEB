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

<body class= "login_body">
<div class = "container" id= "titre_login">
    <h1> Connectez-vous !</h1> 
</div>
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

    <div class= "container" id= "login">
    <div class= "block" id= "login_block">
        <form method="POST" action=""> 
        <label form="email">Email</label>
        <input type="email" placeholder="Entrez votre email..." id="email" name="email" required>
        </br>
        <label form="password">Mot de passe</label>
        <input type="password" placeholder="Entrez votre mot de passe..." id="password" name="password" required>
</br>
        <input type="submit" value="Se connecter" name="ok">
        </form>
    </div
</div>
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

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if($email !="" && $pass != ""){
            $req = $bdd->query("SELECT * FROM users WHERE email = '$email' AND mdp = '$pass'");
            $rep = $req->fetch();
            if($rep['id'] != false){
                header("Location: ../html/index.html");
                exit();
            }
            else{
                $error_msg = "Email ou mdp incorrect";
            }
        }
    }
?>

    <?php 
    $error_msg = "Email ou mdp incorrect";
    if($error_msg){
        ?>
        <p><?php echo $error_msg; ?></p>
        <?php
    }
    ?>
</body>
</html>