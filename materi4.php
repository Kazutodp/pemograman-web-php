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

<?php
if (isset($_GET['edit'])){
    $ID = $_GET["edit"];
    $sql = "SELECT * FROM users WHERE id = '$ID'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    echo "<form method = 'POST'>;
    username : <input type = 'text' name= 'username' value ='{$row['username']}'>;
    password : <input type = 'password' name= 'password' value ='{$row['password']}'>;
    nama : <input type = 'text' name= 'nama' value ='{$row['nama']}'>;
    email : <input type = 'email' name= 'email' value ='{$row['email']}'>;
    <input type='submit' value ='edit data' nama='edit'>;
    </form>";
}

if (isset($_POST['edit'])) {
    $ID = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username = '$username', password = '$password', nama = '$nama', email = '$email' WHERE id = '$ID'";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        echo "data berhasil diupdate";
    } else {
        echo "data gagal diudpate";
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


