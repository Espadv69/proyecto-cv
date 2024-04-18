<?php 
include "conn.php";

$conn = conectar();

if(isset($_POST["enviar"])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $cp = $_POST['cp'];
    $ciudad = $_POST['ciudad'];
    $sobre = $_POST['sobre'];
    $exp = $_POST['exp'];
    $idiomas = implode(", ",$_POST['idiomas']);

    $insertar = "INSERT INTO datos(nombre,apellidos,email,telefono,cp,ciudad, sobre,exp,idiomas)VALUE(
        '$nombre',
        '$apellidos',
        '$email',
        $telefono,
        $cp,
        '$ciudad',
        '$sobre',
        '$exp',
        '$idiomas'
    )";

    $query = mysqli_query($conn, $insertar);
}

if($query) {
    header('location: subir.php');
    exit();
} else {

}
