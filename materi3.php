<?php
function hello()
{
    echo"selamat datang di kelas TIA1";
}

hello();

echo "<br><br>==========================<br><br>";

function tambah(int $a, int $b){
    $hasil = $a + $b;
    return $hasil;
}
tambah(10,4);
echo "hasil dari 10 + 4 adalah ".tambah (10,4);

echo "<br><br>==========================<br><br>";

function kali(int $a, int $b){
    $hasil = $a * $b;
    return $hasil;
}
tambah(5,4);
echo "hasil dari 5 * 4 adalah ".kali (5,4);

echo "<br><br>==========================<br><br>";

function pembagian(int $a, int $b){
    $hasil = $a / $b;
    return $hasil;
}
tambah(5,10);
echo "hasil dari 5 / 10 adalah ".pembagian (5,10);

echo "<br><br>==========================<br><br>";

function pengurangan(int $a, int $b){
    $hasil = $a - $b;
    return $hasil;
}
tambah(10,30);
echo "hasil dari 10 - 30 adalah ".pengurangan (10,30);

echo "<br><br>==========================<br><br>";

function login($username, $password)
{
    $usernamebah = "admin";
    $passwordbah =  "12345";
    if ($username == $usernamebah && $passwordbah) {
        return true;
    } else {
        return "login gagal";
    }
}

?>

<form method = "POST">
    Masukan Angka 1 : <input type= "number" name="angka">
    Masukan Angka 2 : <input type= "number" name="angka2">
    <input type="submit" name ="kirim" value="kirim">
</form>

<?php
if(isset($_POST["angka"])) {
    $angka  = $_POST["angka"];
    $angka2  = $_POST["angka2"];
    echo "hasil dari ".$angka." + ".$angka2." adalah ".tambah ($angka,$angka2);
}

echo "<br><br>==========================<br><br>";

?>

<form method = "POST";>
    <label for="username">username</label>
    <input type="text" name ="username">
    <label for="password">password</label>
    <input type="password" name="password">
    <input type="submit" name="login" value= "login"></input>
</form>

<?php
if(isset($_POST["login"])) {
    $usernamenew = $_POST['username'];
    $passwordnew = $_POST['password'];
    if (login($usernamenew, $passwordnew)){
        echo "login berhasil";
    } else {
        echo "login gagal";
    }
}
