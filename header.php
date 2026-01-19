<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu avec Logo</title>
  <style>

  body {
    margin: 0;
  }

  hr {
    border: solid 3px #3CAA36;
    color: green;
    margin: 0;
  }

  header {
    background-color: rgb(255, 255, 255);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 40px 20px 40px;
    font-size: 30px;
  }
 

  .logo img {
    height: 70px;
  }

  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
  }

  nav ul li {
    position: relative;
  }

  nav ul li a {
    display: block;
    padding: 15px 20px;
    color: black;
    text-decoration: none;
    font-size: 20px;
  }

  nav ul li:hover > a {
    background-color: rgb(255, 255, 255);
  }

  /* Sous-menus */
  nav ul li ul {
    display: none;
    position: absolute;
    top: 50px;
    left: 0;
    background-color: rgb(255, 255, 255);
    min-width: 220px;
    z-index: 1000;
  }

  nav ul li:hover ul {
    display: block;
  }

  nav ul li ul li a {
    padding: 12px 15px;
  }

  nav ul li ul li a:hover {
    background-color: #3CAA36;
  }

  /* Style du bouton Se connecter */
  .btn-fav {
    background-color: #3CAA36;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-bottom: 10px;
  }

  .btn-fav:hover {
    background-color:rgb(252, 159, 0);
  }

  /* Responsive */
  @media screen and (max-width: 768px) {
    header {
      flex-direction: column;
      align-items: flex-start;
    }

    nav ul {
      flex-direction: column;
      width: 100%;
    }

  }
</style>

<header>
  <div class="logo">
    <a href="index.php"><img src="logoh.png" alt="Logo de l'agence"></a>
  </div>
  <div class="container">
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">Propriétés</a>
          <ul>
            <li><a href="Maisons.php">Maisons</a></li>
            <li><a href="Appartements.php">Appartements</a></li>
            <li><a href="Terrains.php">Terrains</a></li>
            <li><a href="Bureaux.php">Bureaux</a></li>
          </ul>
        </li>
        <li><a href="Nouveautés.php">Nouveautés</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <a href="Connexion.php"><button class="btn-fav">Se connecter</button></a>
      </ul>
    </nav>
  </div>
</header>
<hr>

