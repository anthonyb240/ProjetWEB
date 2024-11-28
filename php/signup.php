<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-link" rel="stylesheet" href="../css/dark-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Zen+Dots&display=swap" rel="stylesheet">
</head>
    <title>BTTS - Inscription</title>
</head>

<body class = "signup_body">
<div class = "container" id= "titre_signup">
    <h1> Remplissez le formulaire avec vos informations</h1> 
</div>
<div class ="container" id= "signup">
    <div class = "block" id="signup_block">
    <form method="POST" action="traitement.php">
        <label>Votre Nom</label>
        <input type="text" id="nom" name="nom", placeholder="Entrer votre Nom..." required>
        </br>
        <label>Votre Prénom</label>
        <input type="text" id="prenom" name="prenom", placeholder="Entrer votre Prénom..." required>
        </br>
        <label>Votre email</label>
        <input type="text" id="email" name="email", placeholder="Entrer votre email..." required>
        </br>
        <label>Votre pseudo</label>
        <input type="text" id="pseudo" name="pseudo", placeholder="Entrer votre pseudo..." required>
        </br>
        <label>Votre mot de passe</label>
        <input type="password" id="mdp" name="mdp", placeholder="entrer votre mot de passe..." required>
        </br>
        <input type="submit" value="M'inscrire" name="ok">
    </form>
    </div>
</div>
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="nav-logo">BACK TO THE STACK</a>
            <ul class="nav-links">
                <li><a href="../html/index.html">Menu Principal</a></li>
                <li><a href="../html/notreequipe.html">Équipe</a></li>
                <li><a href="../html/comptech.html">Compétences Techniques</a></li>
                <li><a href="../html/méthode.html">Méthodes</a></li>
                <li><a href="../html/anciens clients.html">Expérience</a></li>
                <li><a href="../html/recherche.html">Recherche</a></li>
            </ul>
        </div>
    </nav>
    
</body> 
<script src="../js/script.js"></script>

</body>
</html>