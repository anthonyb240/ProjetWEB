<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTS - Connexion</title>
</head>

<body>

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
<<<<<<< HEAD
                header("Location: ../html/index.html");
=======
                header("Location: success.php");
>>>>>>> 35c28ddcd31d1d9f2ff238c936beb4f6b0ce7079
                exit();
            }
            else{
                $error_msg = "Email ou mdp incorrect";
            }
        }
    }
?>
    <form method="POST" action=""> 
        <label form="email">Email</label>
        <input type="email" placeholder="Entrez votre email..." id="email" name="email" required>
        <label form="password">Mot de passe</label>
        <input type="password" placeholder="Entrez votre mot de passe..." id="password" name="password" required>
        <input type="submit" value="Se connecter" name="ok">
    </form>

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