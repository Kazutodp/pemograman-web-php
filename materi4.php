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

<table border="1">
    <th>id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Nama</th>
    <th>Email</th>
    <th>aksi</th>

    <?php
    $sql = "SELECT * FROM users";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        echo"<tr>";
        echo"<td>" . $row['ID'] . "</td>";
        echo"<td>" . $row['username'] . "</td>";
        echo"<td>" . $row['password'] . "</td>";
        echo"<td>" . $row['nama'] . "</td>";
        echo"<td>" . $row['email'] . "</td>";
        echo"<td> <a href='materi4.php?edit=$row[ID]'>Edit</a> | <a href='materi4.php?hapus=$row[ID]'>Hapus</a> </td>";
        echo"</tr>";
    }
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        $sql = "DELETE FROM users WHERE ID = $id";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo "Data berhasil dihapus";
        } else {
            echo "Data gagal dihapus";
        }
    }
    ?> 
</table>


<form method = "POST">
    Username : <input type="text" name="username"><br><br>
    password : <input type="password" name="password"><br><br>
    nama  : <input type="text" name="nama"><br><br>
    email : <input type="email" name="email"><br><br>
    <input type="submit" value="kirim data" name="kirim"><br><br>
</form>


