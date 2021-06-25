<?php
include('crudMhs.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>DaftarMahasiswa</title>
</head>
<body>
<h2>DaftarMahasiswa</h2>
Pilih Jurusan
<form action="bacamhs3.php" method="post">
<input type="radio" name="jurusan" value="ti">TI
<input type="radio" name="jurusan" value="si">SI
<input type="radio" name="jurusan" value="mi">MI
<input type="radio" name="jurusan" value="tk">TK
<br>
<input type="submit" name="submit" value="- OK -"> <br><br>
</form>
<?php

//Latihan
if(isset($_POST['jurusan'])){ //mengecek isi dari jurusan
$jurusan = $_POST['jurusan'];

$data = bacaMhsPerjurusan($jurusan);
if($data == null){
echo "Tidakada data mahasiswa";
}else{
?>
Jurusan <?php echo $jurusan; ?><br><br>
<table border="1">
<tr>
<th>NIM</th>
<th>Nama</th>
<th>JenisKelamin</th>
<th>Jurusan</th>
</tr>
<?php
foreach($data as $mhs){
$nim = $mhs['nim'];
$nama = $mhs['nama'];
$kelamin = $mhs['kelamin'];
$jurusan = $mhs['jurusan'];
echo "
<tr>
<td>$nim</td>
<td>$nama</td>
<td>$kelamin</td>
<td>$jurusan</td>
</tr>
";
}
echo '</table>';
}
}
?>
</body>
</html>