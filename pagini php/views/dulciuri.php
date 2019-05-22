<?php
function getCategorie($v_id,$v_comanda)
{
$conn=oci_connect("PROIECT","PROIECT","localhost/XE");
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, 'begin :r := afisare_tip_articole(:v_id,:v_comanda); end;');
oci_bind_by_name($stid, ':v_id', $v_id);
oci_bind_by_name($stid, ':v_comanda', $v_comanda);

oci_bind_by_name($stid, ':r', $r, 40);
oci_execute($stid);

print "$r";

oci_free_statement($stid);
oci_close($conn);
}
?>

<?php

function getTipProdus($v_comanda)
{
$conn=oci_connect("PROIECT","PROIECT","localhost/XE");
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, 'begin :r := contorizare_tip_produs(:v_comanda); end;');
oci_bind_by_name($stid, ':v_comanda', $v_comanda);

oci_bind_by_name($stid, ':r', $r, 40);
oci_execute($stid);

print "$r";

oci_free_statement($stid);
oci_close($conn);
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
                        <img src="https://images.okr.ro/serve/auctions.v7/2017/mar/16/4ceeed224c35906c41b52f5ae727b470-2043709-400_400.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                           <?php getCategorie(112233445,'NUME_PRODUS'); ?>
                        </h2>
                    </div>
                    <div class="pret">
                            <h1>Subtotal:</h1>
                            <?php getCategorie(112233445,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getCategorie(112233445,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="http://www.bonina.ro/wp-content/uploads/2017/05/bomboane-bucuria-chisinaul-de-seara-100-g-997-400x400.jpg"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                        <?php getCategorie(112233455,'NUME_PRODUS'); ?>

                        </h2>
                    </div>
                    <div class="pret">
                            <h1>Subtotal:</h1>
                            <?php getCategorie(112233455,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getCategorie(112233455,'NUMAR_BUCATI'); ?> buc</h2>
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
                        <img src="https://comenzi.bebetei.ro/filemanager/loadImage/caramele-cu-propolis-250g-apidava-10095620"
                            alt="imgPost" />
                    </div>
                    <div class="articleTitle">
                        <h2>
                        <?php getCategorie(112233465,'NUME_PRODUS'); ?>

                        </h2>
                    </div>
                    <div class="pret">
                            <h1>Subtotal:</h1>
                            <?php getCategorie(112233465,'PRET'); ?> Lei
                    </div>
                    <div class="cantitate">
                        <h2>Cantitate:  <?php getCategorie(112233465,'NUMAR_BUCATI'); ?> buc</h2>
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
                            <img src="https://www.marketgradimex.ro/wp-content/uploads/2018/09/FIVE-SPEARMINT.jpg"
                                alt="imgPost" />
                        </div>
                        <div class="articleTitle">
                            <h2>
                            <?php getCategorie(112233475,'NUME_PRODUS'); ?>
                            </h2>
                        </div>
                        <div class="pret">
                                <h1>Subtotal:</h1>
                                <?php getCategorie(112233475,'PRET'); ?> Lei
                        </div>
                        <div class="cantitate">
                        <h2>Cantitate:  <?php getCategorie(112233475,'NUMAR_BUCATI'); ?> buc</h2>
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
                                    1232
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
                                    <?php getTipProdus('LEGUME'); ?>
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
                                <?php getTipProdus('FRUCTE'); ?>
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
                                <?php getTipProdus('LACTATE'); ?>
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
                                <?php getTipProdus('DULCIURI'); ?>
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
                                <?php getTipProdus('BAUTURI'); ?>
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