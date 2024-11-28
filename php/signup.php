<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTS - Inscription</title>
</head>

<body>
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
</body>
</html>