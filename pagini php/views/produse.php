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
                    <a href="logout.php"><i class="fas fa-angle-right"></i>Logout</a>
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
                        <img src="https://globalromania.ro/wp-content/uploads/2018/07/a7fa94da540af02479026939dae3a616.jpeg"                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(18,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(18,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(18,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://www.minuneanaturii.ro/17202-home_default/otet-de-mere-si-miere-1l-nera-plant-.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(12,'NUME_PRODUS');
                        ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(12,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(12,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://www.raraul.ro/images/products/Unt-De-Masa-Tip-B-200g-367.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(13,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(13,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(13,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://comenzi.farmaciatei.ro/images/products/comenzi.farmaciatei.ro/biscuiti-cu-ciocolata-si-zmeura-gerble-140-g-nutrition-sante-10054211.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(15,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(15,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(15,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://i.pinimg.com/originals/d5/ed/37/d5ed37b57f006af4ba1433baac7617e8.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(22,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(22,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(22,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://d27ucmmhxk51xv.cloudfront.net/media/english/illustration/nectarine.jpg?version=1.1.86"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(17,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(17,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(17,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://www.marketgradimex.ro/wp-content/uploads/2018/09/ATIFCO-OREZ-BOB-LUNG-1KG-PREMIUM.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(18,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(18,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(18,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="http://www.oceanfish.ro/oceanfish/files/assets/thumbs_400_400/204526d5f7432126e37e2a51e037cb30.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(19,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(19,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(19,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://comenzi.farmaciatei.ro/images/products/comenzi.farmaciatei.ro/soia-boabe-1-kg-sanovita-10037867.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(23,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(23,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(23,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="http://www.france-export-fv.com/WebRoot/Orange/Shops/6449c484-4b17-11e1-a012-000d609a287c/574C/05DE/3476/12FD/9023/D580/9A38/705E/fruits_du_verger.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                            <?php getDataForProdus(21,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                        <h1>Subtotal:</h1>
                        <?php getDataForProdus(21,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getDataForProdus(21,'NUMAR_BUCATI'); ?> buc</h2>
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
                            <a href="produse.php">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    All
                                </span>
                                <span class="numberOfPostsForCategories">
                                    80
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="legume.php">
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
                            <a href="fructe.php">
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
                            <a href="lactate.php">
                                <span class="icon">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="nameCategories">
                                    Lactate
                                </span>
                                <span class="numberOfPostsForCategories">
                                    10
                                </span>
                            </a>
                        </div>
                        <div class="categoriesContainer">
                            <a href="dulciuri.php">
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
                            <a href="bauturi.php">
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