<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link id="theme-link" rel="stylesheet" href="../css/dark-theme.css">
=======
>>>>>>> 36257024ba478c7b077647135e48f01de832197e
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
                <li><a href="index.html">Menu Principal</a></li>
                <li><a href="notreequipe.html">Équipe</a></li>
                <li><a href="comptech.html">Compétences Techniques</a></li>
                <li><a href="méthode.html">Méthodes</a></li>
                <li><a href="anciens clients.html">Expérience</a></li>
                <li><a href="recherche.html">Recherche</a></li>
            </ul>
        </div>
    </nav>
    
<<<<<<< HEAD
</body> 
<script src="../js/script.js"></script>

=======
    <style> 
.signup_body{
    font-family: 'Kanit', sans-serif;
    margin: 0;
    padding: 0;
    background-color: whitesmoke;
    height: 100%;
    display: flex;
    flex-direction: column;
}   


#titre_signup {
    padding-top: 5%;
    color: black;
    text-align: center;
}
#signup {
    align-items: center;
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
#signup_block {
    padding: 20px;
    border-radius: 10px;
    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(209, 209, 209, 1) 30%, rgba(160, 216, 255, 1) 60%);
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.7);
    transition: transform 0.3s, box-shadow 0.3s;
}

#signup_block:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.8);
}


    
.navbar {
    background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(209, 209, 209, 1) 30%, rgba(160, 216, 255, 1) 60%);
    color: #fff;
    padding: 1% 2%;
    position: fixed;
    top: 0;
    width: 97%;
    z-index: 1000;
    box-shadow: 0 0.2% 0.4% rgba(0, 0, 0, 0.1);
}

.nav-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-logo {
    font-size: 25px;
    font-weight: bold;
    color: black;
    text-decoration: none;
}

.nav-links {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-links li {
    margin: 0 15px;
}

.nav-links a {
    text-decoration: none;
    color: black;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #ff004c;
    font-weight: bold;
}

/* Variations de la police Kanit par poids et style */
.kanit-thin { font-family: "Kanit", serif; font-weight: 100; font-style: normal; }
.kanit-extralight { font-family: "Kanit", serif; font-weight: 200; font-style: normal; }
.kanit-light { font-family: "Kanit", serif; font-weight: 300; font-style: normal; }
.kanit-regular { font-family: "Kanit", serif; font-weight: 400; font-style: normal; }
.kanit-medium { font-family: "Kanit", serif; font-weight: 500; font-style: normal; }
.kanit-semibold { font-family: "Kanit", serif; font-weight: 600; font-style: normal; }
.kanit-bold { font-family: "Kanit", serif; font-weight: 700; font-style: normal; }
.kanit-extrabold { font-family: "Kanit", serif; font-weight: 800; font-style: normal; }
.kanit-black { font-family: "Kanit", serif; font-weight: 900; font-style: normal; }

/* Variations italique pour chaque poids */
.kanit-thin-italic { font-family: "Kanit", serif; font-weight: 100; font-style: italic; }
.kanit-extralight-italic { font-family: "Kanit", serif; font-weight: 200; font-style: italic; }
.kanit-light-italic { font-family: "Kanit", serif; font-weight: 300; font-style: italic; }
.kanit-regular-italic { font-family: "Kanit", serif; font-weight: 400; font-style: italic; }
.kanit-medium-italic { font-family: "Kanit", serif; font-weight: 500; font-style: italic; }
.kanit-semibold-italic { font-family: "Kanit", serif; font-weight: 600; font-style: italic; }
.kanit-bold-italic { font-family: "Kanit", serif; font-weight: 700; font-style: italic; }
.kanit-extrabold-italic { font-family: "Kanit", serif; font-weight: 800; font-style: italic; }
.kanit-black-italic { font-family: "Kanit", serif; font-weight: 900; font-style: italic; }
>>>>>>> 36257024ba478c7b077647135e48f01de832197e
</body>
</html>