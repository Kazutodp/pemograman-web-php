<form method = "POST">
    Masukan Angka : <input type= "number" name="angka">
    <input type="submit" name ="kirim" value="kirim">
</form>

<?php
if(isset($_POST["angka"])) {
    $newangka = $_POST["angka"];
    if($newangka % 2 ==0 ) {
        echo "Genap";
    } else {
        echo "ganjil";
    }
        
    }
?>