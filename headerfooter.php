<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous - Faso Zaaka - Gestion Immobilière</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="contacte.css">
</head>
<body>
    <style>
         /* Header */
        header {
            background-color: var(--secondary-color);
            color: var(--white);
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            font-size: 1.5rem;
            color: var(--primary-color);
        }

        .logo span {
            display: block;
            font-size: 0.9rem;
            color: var(--white);
            font-weight: normal;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 1.5rem;
        }

        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--primary-color);
        }

          /* Footer */
        footer {
            background-color: #3AAA35;
            color: var(--white);
            padding: 2rem 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-links {
            margin-bottom: 1rem;
        }

        .social-links a {
            color
            margin: 0 0.5rem;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: var(--primary-color);
        }

        .copyright {
            font-size: 0.9rem;
            color: #bbb;
        }

    </style>
    <header>
        <div class="container header-content">
            <div class="logo">
               
                <div>
                    <img src="logoh.png" alt="">
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="a propo.php">a propo</a></li>
                    <li><a href="nos bien.php">categories</a></li>
                    <li><a href="Nous contacter.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <footer>
        <div class="container footer-content">
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copyright">&copy; 2023 Faso Zaaka - Tous droits réservés</p>
        </div>
    </footer>   
</html>
