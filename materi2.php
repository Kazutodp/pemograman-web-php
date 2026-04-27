<form method = "POST">
    Masukan Angka : <input type= "number" name="angka">
    <input type="submit" name ="kirim" value="kirim">
</form>

<?php
if(isset($_POST["angka"])) {
    $newangka = $_POST["angka"];
    for ($i = 1; $i <= $newangka; $i++) {
        echo "ini angka ke $i <br>";
    }
}
if(isset($_POST["angka"])) {
    $data = $_POST["angka"];
    if($data % 2 ==0 ) {
        echo "Genap";
    } else {
        echo "ganjil";
    }
    }

?>