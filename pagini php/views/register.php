<?php
ob_start();
$conn=oci_connect("PROIECT","PROIECT","localhost/XE");
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$email = $_POST['email'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$strada = $_POST['strada'];
$bloc = $_POST['bloc'];
$apartament = $_POST['apartament'];
$telefon = $_POST['telefon'];
$parola = $_POST['parola'];
$result = oci_parse($conn, "SELECT * FROM clienti WHERE email like '$email' ");
oci_execute($result) or die(oci_error($result));
oci_fetch_all($result, $array);
unset($array);
$numberofrows = oci_num_rows($result);
oci_free_statement($result);
if( $numberofrows == 1 ){
  header('location:register.php');
}else{
  $sql =oci_parse($conn,"INSERT INTO clienti VALUES ('$email', '$nume', '$prenume','$strada', '$bloc','$apartament', '$telefon', '$parola')");
  oci_execute($sql);
  header('location:index.php');
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

    <title>Document</title>
  </head>
  <body>
    <header>
      <nav>
        <ul class="main">
            <li>
                <a href="login.php"><i class="fas fa-angle-right"></i>Login</a>
            </li>
            <li>
                <a class="active" href="register.php"><i class="fas fa-angle-right"></i>Register</a>
            </li>

        </ul>
      </nav>
      <article>
        <div class="main-title">
          <span>Formular de inregistrare</span>
        </div>
      </article>
    </header>
    <form action="#" method="post">
    <div class="background">
      <div class="space"></div>
      <section class="loginBox">
      <div class="email">
          <p>
            E-mail
          </p>
          <input type="text" name="email" class="form-control" required placeholder="E-mail" />
        </div>
        <div class="firstName">
          <p>
            Nume
          </p>
          <input type="text" name="nume" class="form-control" required placeholder="Nume" />
        </div>
        <div class="Prenume">
          <p>Prenume</p>
          <input type="text" name="prenume" class="form-control" required placeholder="Prenume" />
        </div>
        <div class="strada">
        <p>Strada</p>
        <input type="text"  name="strada" class="form-control" required placeholder="Strada">
        </div>
        <div class="bloc">
        <p>Bloc</p>
        <input type="text"  name="bloc" class="form-control" required placeholder="Bloc">
        </div>
        <div class="apartament">
        <p>Apartament</p>
        <input type="number"  name="apartament" class="form-control" required placeholder="Apartament">
        </div>
        <div class="phone">
          <p>Telefon</p>
          <input type="text" name="telefon" class="form-control" placeholder="Telefon" required />
        </div>
        
        <div class="password">
          <p>Parola</p>
          <input type="password" name="parola" class="form-control" required placeholder="Parola" />
        </div>
        <div class="confPass">
          <p>Confirma Parola</p>
          <input
            type="password"
            name="confPass"
            class="form-control"
            required
            placeholder="Confirma parola"
          />
        </div>
        <div class="btn">
          <button class="button"  type="submit">
            Inscrie-te
            <i class="fas fa-arrow-right"></i>
          </button>
      </div>
      </section>
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