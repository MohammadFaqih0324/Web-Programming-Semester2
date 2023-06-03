<html>
<head>
    <title>Input Data</title>
</head>
<body bgcolor="orange">
<h1>Form Registrasi</h1>
<form action="tugas06.php" method="post">
Isi Data Dibawah ini :
<pre>
Nama              <input type="text" name="nama" size="25" maxlength="50"><br>
Alamat            <textarea name="alamat" rows="5" cols="40"></textarea><br>
Tempat Lahir      <input type="text" name="tempat lahir" size="25" maxlength="50"><br>
Tanggal Lahir     <input type="text" name="tanggal lahir" size="25" maxlength="50">
</pre>
Jenis Kelamin    
<input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
<input type="radio" name="jeniskel" value="Perempuan"> Perempuan
<p>
Pendidikan       
<select name="pendidikan">
<option value="-Pilih-">
<option value="SD">SD
<option value="SMP">SMP
<option value="SMA">SMA
<option value="D3">D3
<option value="S1">S1
<option value="S2">S2
<option value="Tidak Sekolah">Tidak Sekolah
</select>
<p>
<input type="submit" value="Submit"><input type="reset" value="Cancel">
</form>
</body>
</html>