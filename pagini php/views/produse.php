<?php
function getDataForProdus($id,$name)
{
    $conn=oci_connect("PROIECT","PROIECT","localhost/XE");
    $result = oci_parse($conn, "SELECT * FROM produse where id like '".$id."'");
    oci_execute($result);
    while($row = oci_fetch_array($result))
    {
        echo $row [$name];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet" />

    <title>Supermarket</title>
</head>

<body>
    <header>
        <nav>
            <ul class="main">
                <li>
                    <a href="index.php"><i class="fas fa-home"></i> Acasa</a>
                </li>
                <li>
                    <a href="contact.php"><i class="fas fa-angle-right"></i> Contacte </a>
                </li>
                <li>
                    <a class="active" href="produse.php"><i class="fas fa-angle-right"></i>Produse</a>
                </li>
                <li>
                    <a href="reduceri.php"><i class="fas fa-angle-right"></i>Reduceri</a>
                </li>
                <li>
                    <a href="clienti.php"><i class="fas fa-users"></i>Clienti</a>
                </li>
                <li>
                    <a href="furnizori.php"><i class="fas fa-angle-right"></i>Furnizori</a>
                </li>
                <li>
                    <a href="login.php"><i class="fas fa-angle-right"></i>Login</a>
                </li>
            </ul>
        </nav>
        <article>
            <div class="main-title">
                <h1>Supermarket</h1>
            </div>
        </article>
    </header>

    <article class="mainContainer">
        <section class="mainPage">
            <div class="articles">
                <div class="articleContainer">
                    <div class="articleImg">
                        <img src="https://i.pinimg.com/564x/30/01/c8/3001c883c614c01ea0cffd84b89b7f35.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(1,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(1,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(1,'NUMAR_BUCATI'); ?> buc</h2>
                    </div>
                    <div class="buyButton">
                        <button class="btn normal" type="button">
                            Cumpara
                        </button>
                    </div>
                    <div class="articleButton">
                        <button class="btn normal" onclick="location.href='produs.php'" type="button">
                            Vezi mai multe
                        </button>
                    </div>
                </div>

                <div class="articleContainer">
                    <div class="articleImg">
                        <img src="https://i.pinimg.com/564x/30/01/c8/3001c883c614c01ea0cffd84b89b7f35.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(2,'NUME_PRODUS');
                        ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(2,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(2,'NUMAR_BUCATI'); ?> buc</h2>
                    </div>
                    <div class="buyButton">
                        <button class="btn normal" type="button">
                            Cumpara
                        </button>
                    </div>
                    <div class="articleButton">
                        <button class="btn normal" onclick="location.href='produs.php'" type="button">
                            Vezi mai multe
                        </button>
                    </div>
                </div>

                <div class="articleContainer">
                    <div class="articleImg">
                        <img src="https://i.pinimg.com/564x/30/01/c8/3001c883c614c01ea0cffd84b89b7f35.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(3,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(3,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(3,'NUMAR_BUCATI'); ?> buc</h2>
                    </div>
                    <div class="buyButton">
                        <button class="btn normal" type="button">
                            Cumpara
                        </button>
                    </div>
                    <div class="articleButton">
                        <button class="btn normal" onclick="location.href='produs.php'" type="button">
                            Vezi mai multe
                        </button>
                    </div>
                </div>

                <div class="articleContainer">
                    <div class="articleImg">
                        <img src="https://i.pinimg.com/564x/30/01/c8/3001c883c614c01ea0cffd84b89b7f35.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(4,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(4,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(4,'NUMAR_BUCATI'); ?> buc</h2>
                    </div>
                    <div class="buyButton">
                        <button class="btn normal" type="button">
                            Cumpara
                        </button>
                    </div>
                    <div class="articleButton">
                        <button class="btn normal" onclick="location.href='produs.php'" type="button">
                            Vezi mai multe
                        </button>
                    </div>
                </div>

            </div>
            <div class="pageOptions">
                <div class="categories">
                    <div class="categoriesTitle">
                        <span>Categorii</span>
                    </div>
                    <div class="categoriesBody">
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Legume
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Fructe
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Carne
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Dulciuri
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="#">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Bauturi
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
    <aside></aside>
    <footer class="footer">
        <div class="iconsFooter">
            <a href="https://www.facebook.com/andreea.vatamanelu"><i class="fab fa-facebook-f"></i></a>
            <a href="https://github.com/andreeavata2/Wews"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/xranobi/"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <div class="creator">
            <p class="creat">
                Powered by Mavriche Gabriela-Raluca and Vatamanelu Andreea
            </p>
        </div>
    </footer>
</body>

</html>