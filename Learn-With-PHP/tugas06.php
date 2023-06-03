<html>
<head>
    <title>Output Data</title>
</head>
<body bgcolor="ff3399">
<p style="font-size:40px">
    <font color="#000000">
        Data Registrasi
    </font>
    </p>
<?php
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tempat_lahir =$_POST['tempat_lahir'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$jeniskel =$_POST['jeniskel'];
$pendidikan =$_POST['pendidikan'];
?>
<table border=1 bgcolor="Cyan">
<tr>
<td>Nama</td><td><?php echo $nama; ?></td>
</tr>
<td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jeniskel; ?></td>
</tr>
<td>Pendidikan</td><td><?php echo $pendidikan; ?></td>
</tr></table>
<a href="tugasinput06.php">
    <font color="#000000">Back To Home</font></a>
</body>
</html>