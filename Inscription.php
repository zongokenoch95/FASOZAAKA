<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <style>
    body {
     
      background-color: #ecf0f1;
      margin: 0;
      padding: 0;
      height: 100vh;
      
      align-items: center;
    }

    .register-box {
   margin: auto;
      margin-bottom: 25px;
      margin-top: 25px;
      background-color: #fff;
      padding: 40px 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;

    }
    .container{
        display: flex;
        justify-content: center;
    }

    .register-box h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .register-box label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    .register-box input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .register-box button {
      width: 100%;
      padding: 12px;
      background-color: #2980b9;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .register-box button:hover {
      background-color: #1c5985;
    }

    .bottom-text {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .bottom-text a {
      color: #27ae60;
      text-decoration: none;
    }
  </style>
</head>
<body>
<?php include("header.php"); ?>

<div class="register-box">
  <h2>Créer un compte</h2>
  <form action="#" method="POST">
    <label for="name">Nom complet</label>
    <input type="text" id="name" name="name" placeholder="Ex: Jean Ouédraogo" required>

    <label for="email">Adresse Email</label>
    <input type="email" id="email" name="email" placeholder="Ex: exemple@mail.com" required>

    <label for="phone">Téléphone</label>
    <input type="tel" id="phone" name="phone" placeholder="Ex: +226 70 00 00 00">

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm">Confirmer le mot de passe</label>
    <input type="password" id="confirm" name="confirm" required>

    <button type="submit">S'inscrire</button>

    <div class="bottom-text">
      Vous avez déjà un compte ? <a href="connexion.html">Se connecter</a>
    </div>
  </form>
</div>


<?php include("footer.php"); ?>
</body>
</html>
