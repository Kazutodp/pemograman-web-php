<?php 
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, nama, email) VALUES ('$username', '$password', '$nama', '$email')";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        echo "data berhasil ditambahkan";
    } else {
        echo "data gagal ditambahkan";
    }
}
?>

<form method = "POST">
    Username : <input type="text" name="username"><br><br>
    password : <input type="password" name="password"><br><br>
    nama  : <input type="text" name="nama"><br><br>
    email : <input type="email" name="email"><br><br>
    <input type="submit" value="kirim data" name="kirim"><br><br>
</form>


