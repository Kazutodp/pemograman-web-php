<?php
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "data";

$conn = mysqli_connect($_SERVER, $username, $password, $database);

if(mysqli_connect_error()){
    echo "koneksi gagal";
} else {
    echo "koneksi Berhasil";
}
?>
