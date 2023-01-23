
<?php

    require("config/commandes.php");

    $products=display();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/clothing.css">
    <title>Clothing</title>
</head>

<body>

    <header class="header">

    <div class="header__logo">
        <a href="../index.php">
            <p class="use"> Use </p>
            <P class="me"> Me </P>
            <p class="once"> Once </p>
            <p class="more"> More </p>
        </a>
    </div>

    <img class="svgMan" alt="logo" src="../assets/images/svg.svg">

        <ul class="connexionDiv">
            <li class="connexionDivLien"> <a class="connexion" href="admin/index.php" target="_blank"> Connexion </li>
        </ul>    

    </header>

    <nav>

        <ul class="list">
            <li> <a class="li" href="../index.php"> accueil </a> </li>
        </ul>

        <ul class="products"> 
            <li> <a href="#">PRODUITS </a>
                <ul class="categories">
                    <li> <a href="../index.php#clothing"> Vêtements </a> </li>
                    <li> <a href="../index.php#decoration"> Décoration </a> </li>
                    <li> <a href="../index.php#multimedia"> Multimedia </a> </li>
                    <li> <a href="../index.php#books"> Livres </a> </li>
                    <li> <a href="../index.php#toys"> Jouets </a> </li>
                    <li> <a href="../index.php#aesthetic"> Esthétique </a> </li>
                    <li> <a href="../index.php#various"> Divers </a> </li>
                </ul>
            </li>
        </ul>

        <div class="burger" id="menuIcon">
            <span></span>
        </div>

        <div class="menu_box" id="menuBox">
            <ul>
                <li><a href="../index.php">Accueil</li>
                <li><a href="../about.php" target="_blank"> A propos </a></li>
                <li><a href="../contact.php" target="_blank">Contact</a></li>
            </ul>
        </div>

    </nav>

    <main>

        <div class="total">

        <?php foreach($products as $product): ?>

                <article class="box">

                <section>

                    <img class="imgProduct" alt="produit_image" src="<?= $product->image?>">
                
                </section>

                <section>

                    <h3 class="titleProduct"> <?= $product->name ?> </h3>

                    <p class="descriptionProduct"> <?= substr($product->description, 0, 150) ?> </p>

                    <p class="priceProduct"> <?= $product->price ?> € </p>

                </section>       

                <section>

                    <button class="buyProduct"> <img class="buyProductImg" src="../assets/images/panier.png" alt="panier"> </button>

                </section>

            </article>

        <?php endforeach; ?>

        </div>

    </main>

    <footer>


    </footer>

    <script src="../assets/JS/script.js"></script>

</body>

</html>

