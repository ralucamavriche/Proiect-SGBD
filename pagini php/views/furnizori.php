<?php
function getFurnizori($id,$name)
{
    $conn=oci_connect("PROIECT","PROIECT","localhost/XE");
    $result = oci_parse($conn, "SELECT * FROM furnizori where id like '".$id."'");
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
                    <a  href="produse.php"><i class="fas fa-angle-right"></i>Produse</a>
                </li>
                <li>
                    <a href="reduceri.php"><i class="fas fa-angle-right"></i>Reduceri</a>
                </li>
                <li>
                    <a  href="clienti.php"><i class="fas fa-users"></i>Clienti</a>
                </li>
                <li>
                    <a class="active"  href="furnizori.php"><i class="fas fa-angle-right"></i>Furnizori</a>
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
    <div class="mainContainer">
            <div class="secondContainer">
                <div class="containerFurnizor">
                <div class="titleContainer">
                    Lista furnizori
                </div>
                <ul class="list_furnizori">
                    <li class="furnizor">
                        <span> <?php getFurnizori(1,'NUME_FURNIZOR') ; ?>/ E-mail / Adresa / Telefon</span>
                        <button class="delete_button">
                            Delete
                        </button>
                    </li>
                    <li class="furnizor">
                        <span><?php getFurnizori(2,'NUME_FURNIZOR') ; ?>/ E-mail / Adresa / Telefon</span>
                        <button class="delete_button">
                                Delete
                            </button>
                    </li>
                    <li class="furnizor">
                        <span><?php getFurnizori(3,'NUME_FURNIZOR') ; ?> / E-mail / Adresa / Telefon </span>
                        <button class="delete_button">
                                Delete
                            </button>
                    </li>
                    <li class="furnizor">
                        <span><?php getFurnizori(4,'NUME_FURNIZOR') ; ?> / E-mail / Adresa / Telefon </span>
                        <button class="delete_button">
                                Delete
                            </button>
                    </li>
                    <li class="furnizor">
                        <span><?php getFurnizori(5,'NUME_FURNIZOR') ; ?> / E-mail / Adresa / Telefon </span>
                        <button class="delete_button">
                                Delete
                            </button>
                    </li>
                    <li class="furnizor">
                        <span><?php getFurnizori(6,'NUME_FURNIZOR') ; ?>/ E-mail / Adresa / Telefon </span>
                        <button class="delete_button">
                                Delete
                            </button>
                    </li>
                    <li class="furnizor">
                        <span><?php getFurnizori(7,'NUME_FURNIZOR') ; ?> / E-mail / Adresa / Telefon </span>
                        <button class="delete_button">
                                Delete
                            </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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