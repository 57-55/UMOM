<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site qui permet de donner une seconde vie à de nombreux articles variés, en excellent état, à des prix avantageux.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title> UMOM - Accueil </title>
</head>
<body>
    
    <header class="header">

        <div class="header__logo">
            <a href="index.php">
                <p class="use"> Use </p>
                <P class="me"> Me </P>
                <p class="once"> Once </p>
                <p class="more"> More </p>
            </a>
        </div>

        <img class="svgMan" alt="logo" src="assets/images/svg.svg">
      
            <ul class="connexionDiv">
                <li class="connexionDivLien"> <a class="connexion" href="" target="_blank"> Connexion </li>
            </ul>       
        
    </header>

    <nav>

        <ul class="list">
            <li> <a class="li" href="index.php"> accueil </a> </li>
        </ul>

        <ul class="products"> 
            <li> <a href="#">PRODUITS </a>
                <ul class="categories">
                    <li> <a href="#clothing"> Vêtements </a> </li>
                    <li> <a href="#decoration"> Décoration </a> </li>
                    <li> <a href="#multimedia"> Multimedia </a> </li>
                    <li> <a href="#books"> Livres </a> </li>
                    <li> <a href="#toys"> Jouets </a> </li>
                    <li> <a href="#aesthetic"> Esthétique </a> </li>
                    <li> <a href="#various"> Divers </a> </li>
                </ul>
            </li>
        </ul>

        <div class="burger" id="menuIcon">
            <span></span>
        </div>

        <div class="menu_box" id="menuBox">
            <ul>
                <li class="liFixe">Accueil</li>
                <li><a href="about.php" target="_blank"> A propos </a></li>
                <li><a href="contact.php" target="_blank">Contact</a></li>
            </ul>
        </div>

    </nav>

    <main>

        <section id="section">

            <article id="article1" class="article">

                <div id="carrousel1" class="carrousel">

                    <div id="clothing">

                    </div>

                    <img id="g1" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="d1" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="clothing/clothing.php"> Vêtements </a>

            </article>

            <article id="article2" class="article">

                <div id="carrousel2" class="carrousel">

                    <div id="decoration">

                    </div>

                    <img id="g2" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="d2" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="decoration/decoration.php">Décoration </a>

            </article>

            <article id="article3" class="article">

                <div id="carrousel3" class="carrousel">

                    <div id="multimedia">

                    </div>

                    <img id="g3" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="d3" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="multimedia/multimedia.php">Multimedia </a>

            </article>

            <article id="article4" class="article">

                <div id="carrousel4" class="carrousel">

                    <div id="books">

                    </div>

                    <img id="g4" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="d4" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="books/books.php">Livres </a>

            </article>

            <article id="article5" class="article">

                <div id="carrousel5" class="carrousel">

                    <div id="toys">

                    </div>

                    <img id="g5" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="d5" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="toys/toys.php">Jeux/jouets </a>

            </article>

            <article id="article6" class="article">

                <div id="carrousel6" class="carrousel">

                    <div id="aesthetic">

                    </div>

                    <img id="g6" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="d6" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="aesthetic/aesthetic.php">Esthétique </a>

            </article>

            <article id="articleZ" class="article">

                <div id="carrouselZ" class="carrousel">

                    <div id="various">

                    </div>

                    <img id="gZ" class="g" src="assets/images/bouton-fleche.png" alt="bouton gauche">
                    <img id="dZ" class="d" src="assets/images/bouton-fleche.png" alt="bouton droit">

                </div>

                <a href="various/various.php">Divers </a>

            </article>
            
        </section>        

    </main>

    <footer>

    </footer>

    <script src="assets/JS/script.js"></script>
    
</body>

</html>