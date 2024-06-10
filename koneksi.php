<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "uts_312310153";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if ($koneksi == false) {
    die("Koneksi ke server gagal: " . mysqli_connect_error());
}

?>