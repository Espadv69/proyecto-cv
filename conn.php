<?php

function conectar() {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cv_ejercicio";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    mysqli_select_db($conn, $dbname);
    return $conn;
}
