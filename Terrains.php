<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Propriétés</title>
  <style>
    body {
    
      margin: 0;
      background-color: #f4f4f4;
    }

    h1 {
      text-align: center;
      padding: 30px 0;
      background-color: #2c3e50;
      color: white;
      margin: 0;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
      gap: 20px;
    }

    .property-card {
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .property-card:hover {
      transform: scale(1.02);
    }

    .property-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .property-info {
      padding: 15px;
    }

    .property-info h2 {
      margin-top: 0;
      font-size: 18px;
      color: #2c3e50;
    }

    .property-info p {
      margin: 5px 0;
      color: #555;
    }

    .tag {
      display: inline-block;
      background: #27ae60;
      color: white;
      padding: 3px 8px;
      font-size: 12px;
      border-radius: 4px;
      margin-right: 5px;
    }

    .tag.vente {
      background: #e67e22;
    }

    .tag.location {
      background: #3498db;
    }
  </style>
</head>
<body>
<?php include("header.php"); ?> 

<h1>Nos terrains</h1>
<div class="container">

  <!-- Propriété 1 -->
  <div class="property-card">
    <img src="t1.jpg" alt="Maison moderne">
    <div class="property-info">
      <h2>Villa Moderne</h2>
      <p><span class="tag vente">Vente</span> Usage résidentiel</p>
      <p><strong>Localisation :</strong> Ouagadougou, Zone du bois</p>
      <p><strong>Superficie :</strong> 350 m²</p>
      <p><strong>Prix :</strong> 95 000 000 FCFA</p>
      <button class="btn-fav">Ajouter en favoris </button>
    </div>
  </div>

  <!-- Propriété 2 -->
  <div class="property-card">
    <img src="t2.jpg" alt="Appartement à louer">
    <div class="property-info">
      <h2>Appartement Meublé</h2>
      <p><span class="tag location">Location</span> Usage résidentiel / professionnel</p>
      <p><strong>Localisation :</strong> Bobo-Dioulasso, Quartier 117</p>
      <p><strong>Superficie :</strong> 120 m²</p>
      <p><strong>Loyer :</strong> 250 000 FCFA / mois</p>
      <button class="btn-fav">Ajouter en favoris </button>
    </div>
  </div>

  <!-- Propriété 3 -->
  <div class="property-card">
    <img src="t3.jpg" alt="Terrain à vendre">
    <div class="property-info">
      <h2>Terrain Constructible</h2>
      <p><span class="tag vente">Vente</span> Usage commercial</p>
      <p><strong>Localisation :</strong> Ouaga 2000, Secteur 15</p>
      <p><strong>Superficie :</strong> 500 m²</p>
      <p><strong>Prix :</strong> 60 000 000 FCFA</p>
      <button class="btn-fav">Ajouter en favoris </button>
    </div>
  </div>
</div>
<div class="container">

  <!-- Propriété 1 -->
  <div class="property-card">
    <img src="t4.jpg" alt="Maison moderne">
    <div class="property-info">
      <h2>Villa Moderne</h2>
      <p><span class="tag vente">Vente</span> Usage résidentiel</p>
      <p><strong>Localisation :</strong> Ouagadougou, Zone du bois</p>
      <p><strong>Superficie :</strong> 350 m²</p>
      <p><strong>Prix :</strong> 95 000 000 FCFA</p>
      <button class="btn-fav">Ajouter en favoris </button>
    </div>
  </div>

  <!-- Propriété 2 -->
  <div class="property-card">
    <img src="t5.jpg" alt="Appartement à louer">
    <div class="property-info">
      <h2>Appartement Meublé</h2>
      <p><span class="tag location">Location</span> Usage résidentiel / professionnel</p>
      <p><strong>Localisation :</strong> Bobo-Dioulasso, Quartier 117</p>
      <p><strong>Superficie :</strong> 120 m²</p>
      <p><strong>Loyer :</strong> 250 000 FCFA / mois</p>
      <button class="btn-fav">Ajouter en favoris </button>
    </div>
  </div>

  <!-- Propriété 3 -->
  <div class="property-card">
    <img src="t6.jpg" alt="Terrain à vendre">
    <div class="property-info">
      <h2>Terrain Constructible</h2>
      <p><span class="tag vente">Vente</span> Usage commercial</p>
      <p><strong>Localisation :</strong> Ouaga 2000, Secteur 15</p>
      <p><strong>Superficie :</strong> 500 m²</p>
      <p><strong>Prix :</strong> 60 000 000 FCFA</p>
      <button class="btn-fav">Ajouter en favoris </button>
    </div>
  </div>
</div>



</body>

<?php include("footer.php"); ?>
</html>
