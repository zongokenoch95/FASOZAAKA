<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez-nous</title>
  <style>
    body {
      
      margin: 0;
      background-color: #f9f9f9;
      color: #333;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      margin-top: 25px;
      margin-bottom: 25px;
    }
    

    .contact-form, .contact-info {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      padding: 25px;
      width: 400px;
    }

    
    .contact-info h2 {
      margin-top: 0;
      color: #2c3e50;
    }

    .contact-form label {
      display: block;
      margin-top: 15px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .contact-form textarea {
      resize: vertical;
      height: 100px;
    }

    .contact-form button {
      margin-top: 20px;
      background-color: #27ae60;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-form button:hover {
      background-color: #1e8449;
    }

    .contact-info p {
      margin: 10px 0;
      line-height: 1.6;
    }

    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
    #confirm{
      color: #27ae60;
    margin: auto;
    margin-bottom: 25px;
    margin-top: 25px;
    }



  </style>
</head>
<body>
<?php include("header.php"); ?> 


<div class="container">

  <!-- Formulaire de contact -->
  <div class="contact-form">
    <h2>Envoyez-nous un message</h2>
    <form action="#confirm" method="post">
      <label for="name">Nom et prénom</label>
      <input type="text" id="nom" name="nom" required>

      <label for="email">Adresse email</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Téléphone</label>
      <input type="tel" id="phone" name="phone">

      <label for="message">Votre message</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Envoyer</button>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"]));
   
    echo '<div id="confirm" ><h3 class="MERCI"> <strong> Merci Mr/Me ' . $nom . ' de nous avoir contacter <br>Nous vous recontacterons dans les plus bref délais! </strong>.</h3></div>';}
    ?> 
  </div>


</div>

<?php include("footer.php"); ?>
</body>
</html>
