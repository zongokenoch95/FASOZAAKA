<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <style>
    body {
      font-family: Arial, sans-serif;
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
 <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    echo '<div id="confirm"><h4> Merci Mr/Mme ' . $nom . 'de nous avoir contacter <br>Nous vous rcontacterons dans les plus bref délais!.</h4></div>';}
    ?> 
</div>



<?php include("footer.php"); ?>

</body>
</html>
