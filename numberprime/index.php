<!DOCTYPE html>
<html>
<head>
<title>Check Number Prime</title>
</head>
<body>
<h2>Cek Bilangan Prima</h2>
<form method="POST">
Masukkan Angka:
<input type="number" name="angka" required>
<button type="submit">Cek</button>
</form>
<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $prima = true;

    if ($angka <= 1){
        $prima = false;
    } else {
        for ($i = 2; $i < $angka;$i++){
            if ($angka % $i == 0){
                $prima = false;
                break;
            }
        }
    }

    if ($prima) {
        echo "$angka adalah bilangan prima";
    } else {
        echo "$angka bukan bilangan prima";
    }
}
?>
</body>
</html>