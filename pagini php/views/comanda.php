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
                    <a class="active"  href="login.php"><i class="fas fa-angle-right"></i>Login</a>
                </li>
                <li>
                    <a href="register.php"><i class="fas fa-angle-right"></i>Register</a>
                </li>
            </ul>
      </nav>
      <article>
            <div class="main-title">
                <h1>Comanda</h1>
            </div>
        </article>
    </header>
    <form action="#" method="post">
    <div class="background">
      <div class="infoComanda">
        <div class="idComanda">
          <p>ID Comanda</p>
          <input type="text" name="id_comanda" class="form-control" required placeholder="ID Comanda" />
        </div>
        <div class="btn_idComanda">
          <button
            class="button"
            type="submit"
          >
            Info
          </button>
        </div>
      </div>
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
function getInfoComanda($id)
{
$conn=oci_connect("PROIECT","PROIECT","localhost/XE");

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$v_id='1';
$stid = oci_parse($conn, 'declare 
v_rez varchar2(20);
v_rez2 int;
BEGIN
afisare_produse_comanda(:v_id,:v_rez,:v_rez2);
END;');
oci_bind_by_name($stid, ':v_id', $v_id);
// The second procedure parameter is an OUT bind. The default type
// will be a string type so binding a length 40 means that at most 40
// digits will be returned.
oci_bind_by_name($stid, ':v_rez', $v_rez, 40);
oci_bind_by_name($stid, ':v_rez2', $v_rez2, 40);


oci_execute($stid);

print "$v_rez";
print " ";
print "$v_rez2";

oci_free_statement($stid);
oci_close($conn);
}
// getInfoComanda(1);
?> 
<?php
ob_start();
$conn=oci_connect("PROIECT","PROIECT","localhost/XE");

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$id_comanda = $_POST['id_comanda'];

$result = oci_parse($conn, "SELECT * FROM detalii_comenzi WHERE id_comanda like '$id_comanda' ");
oci_execute($result) or die(oci_error($result));
oci_fetch_all($result, $array);
unset($array);
$numberofrows = oci_num_rows($result);
oci_free_statement($result);

if( $numberofrows >= 1 ){
    echo "Comanda se afla in baza de date."."<br>";
    getInfoComanda($id_comanda);
}else{
    echo "Nu exista niciun fel de comanda cu acest id.";
}
}
?>