<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Magasin</title>
    <link rel="shortcut icon" type="image/png" href="./image/caddie.png" />

</head>

<body>


    <h1>tout pour vos lapins</h1>

    <section>
        <article>
            <p style="text-transform:none;">
                Bienvenue sur notre site dédié aux lapins ! Découvrez une sélection soignée de nourriture, matériel de soin, et jouets pour assurer le bonheur et la santé de vos compagnons à oreilles. Explorez notre catalogue pour offrir à vos lapins une vie épanouissante.
            </p>
        </article>
        <aside>
            <center>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="imgcarrousel grd" src="image/20210903_150731.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="imgcarrousel" src="image/20221022_133513.jpg" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="imgcarrousel" src="image/pin.jpg" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </center>
        </aside>
    </section><br>
    <div class="panier ">
        <h3>Votre panier :</h3>
        <?php
        session_start();
        if (empty($_SESSION['panier'])) {
            echo "<p>Votre panier est vide. <span style='color:red'>:_(</span></p>";
        } else {
            echo "<ul>";
            foreach ($_SESSION['panier'] as $index => $item) {
                echo "<li>$item <a href='shoppingcarte.php?remove_item=$index'>Supprimer</a></li>";            }
            echo "</ul>";
        }
        ?>
    </div><br>
    <section class="row justify-content-center">
        <aside class="col-5 col-lg-2 achat">
            <center>
                <img class="pett" src="./image/foin.jpg" alt="">
                <article>
                    <h2>foin de crau</h2>
                    <p>15€</p>
                    <form action="shoppingcarte.php" method="POST">
                        <input type="hidden" name="item" value="foin de crau">
                        <button type="submit" name="add_to_cart" class="boutton">
                            <img class="caddie" src="./image/caddie.png" alt="">
                        </button>
                    </form>
                </article>
            </center>
        </aside>
        <aside class=" col-5 col-lg-2 achat">
            <center><img src="./image/soin.webp" alt=" ">
                <article>
                    <h2> les soins</h2>
                    <p>35€</p>
                    <form action="shoppingcarte.php" method="POST">
                        <input type="hidden" name="item" value="les soins">
                        <button type="submit" name="add_to_cart" class="boutton">
                            <img class="caddie" src="./image/caddie.png" alt="">
                        </button>
                    </form>
                </article>
            </center>
        </aside>
        <aside class=" col-5 col-lg-2 achat">
            <center><img class="pett" src="./image/nourriture.jpg" alt="">
                <article>
                    <h2>nourriture</h2>
                    <p>5€</p>
                    <form action="shoppingcarte.php" method="POST">
                        <input type="hidden" name="item" value="nourriture">
                        <button type="submit" name="add_to_cart" class="boutton">
                            <img class="caddie" src="./image/caddie.png" alt="">
                        </button>
                    </form>
                </article>
            </center>
        </aside>
        <aside class=" col-5 col-lg-2 achat">
            <center><img src="./image/jouet.jfif" alt="">
                <article>
                    <h2>jouet</h2>
                    <p>25€</p>
                    <form action="shoppingcarte.php" method="POST">
                        <input type="hidden" name="item" value="jouet">
                        <button type="submit" name="add_to_cart" class="boutton">
                            <img class="caddie" src="./image/caddie.png" alt="">
                        </button>
                    </form>
                </article>
            </center>
        </aside>
    </section>
    <footer>
        <h3 style="text-transform:none;">Fais avec amour pour tous nos ami les pinous &#9829 <span>fais par Florie</span></h3>
        <center>
            <a href="https://twitter.com"><img class="reseaux" src="./image/twitter.png" alt=""></a>
            <a href="https://www.facebook.com"> <img class="reseaux" src="./image/facebook.png" alt=""></a>
            <a href="https://www.instagram.com"><img class="reseaux" src="./image/instagram.png" alt=""></a>
        </center>
    </footer>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery-3.6.1.min.js"></script>
</body>

</html>