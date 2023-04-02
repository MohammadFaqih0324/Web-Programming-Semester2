<html>
<head>
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
<?php
//konstanta untuk nilai judul -> Deklarasi komentar
define("Judul","Hitung Luas Lingkaran");
//konstanta untuk nilai phi -> Deklarasi konstanta
define("PHI",3.14);
echo Judul;
$r = 10;
echo "<br> Jari-jari : $r <br>";
$luas = PHI*$r*$r;
echo "Luas Lingkaran = $luas";
?>
</body>
</html>