<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display"
      rel="stylesheet"
    />

    <title>Supermarket</title>
  </head>
  <body>
    <header>
      <nav>
      <ul class="main">
                <li>
                    <a  href="index.php"><i class="fas fa-home"></i> Acasa</a>
                </li>
                <li>
                <a href="contact.php"><i class="fas fa-angle-right"></i> Contacte </a>
                </li>
                <li>
                    <a href="produse.php"><i class="fas fa-angle-right"></i>Produse</a>
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
                    <a class="active"  href="login.php"><i class="fas fa-angle-right"></i>Login</a>
                </li>
            </ul>
      </nav>
      <article>
            <div class="main-title">
                <h1>Login</h1>
            </div>
        </article>
    </header>
    <form action="#" method="post">
    <div class="background">
      <div class="space"></div>
      <div class="loginBox">
        <div class="username">
          <p>E-mail:</p>
          <input type="text" name="email" class="form-control" required placeholder="E-mail" />
        </div>
        <div class="password">
          <p>Parola:</p>
          <input type="password" name="parola" class="form-control" required placeholder="Introduceti parola" />
        </div>
        <div class="more">
          <div class="signUp">
            <a href="register.php">
              Inscrie-te
            </a>
          </div>
        </div>

        <div class="btn">
          <button
            class="button"
            type="submit"
          >
            Login
          </button>
        </div>
      </div>
      <div class="spaceEnd"></div>
    </div>
    </form>
    <aside></aside>
    <!-- <footer class="footer">
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
    </footer> -->
  </body>
</html>
<?php
ob_start();
$conn=oci_connect("STUDENT","STUDENT","localhost/XE");

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$email = $_POST['email'];
$parola = $_POST['parola'];

$result = oci_parse($conn, "SELECT * FROM PISICI WHERE ( email like '$email' and parola like '$parola' ) ");
oci_execute($result) or die(oci_error($result));
oci_fetch_all($result, $array);
unset($array);
$numberofrows = oci_num_rows($result);
oci_free_statement($result);

if( $numberofrows >= 1 ){
  header('location:index.php');
}else{
  header('location:login.php');
}
}


?>
