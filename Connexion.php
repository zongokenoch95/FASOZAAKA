<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <style>
    body {
      
      background-color: #ecf0f1;
      margin: 0;
      padding: 0;
      height: 100vh;

    }

    .login-box {
      background-color: #fff;
      padding: 40px 30px ;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
      margin: auto;
      margin-bottom: 25px;
      margin-top: 25px;
    }

    .login-box h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .login-box label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    .login-box input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      background-color: #27ae60;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-box button:hover {
      background-color: #219150;
    }

    .bottom-text {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .bottom-text a {
      color: #2980b9;
      text-decoration: none;
    }
   
    </style>
</head>

<body>
<?php include("header.php"); ?>


<div class="login-box">
  <h2>Connexion</h2>
  <form action="#" method="POST">
    <label for="email">Adresse Email</label>
    <input type="email" id="email" name="email" placeholder="Votre email" required>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

    <button type="submit">Se connecter</button>

    <div class="bottom-text">
      Vous n'avez pas de compte ? <a href="Inscription.php">Créer un compte</a>
    </div>
  </form>
</div>

 <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    echo '<div id="confirm"><h4> Merci  ' . $nom . '  pour la souscription!.</h4></div>';}
?> 

<?php include("footer.php"); ?>

</body>
</html>
