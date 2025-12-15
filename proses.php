<?php
include 'koneksi.php';
$nama=$_POST['nama'];
$fak=$_POST['fakultas'];
$prodi=$_POST['prodi'];
$jk=$_POST['jk'];
$umur=$_POST['umur'];
$alamat=$_POST['alamat'];


mysqli_query($koneksi,"INSERT INTO biodata VALUES('', '$nama','$fak','$prodi','$jk','$umur','$alamat')");
header('location:tampil.php');
?>