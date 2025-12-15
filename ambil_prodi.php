<?php
include 'koneksi.php';
$id = $_GET['id_fakultas'];
$q = mysqli_query($koneksi,"SELECT * FROM prodi WHERE id_fakultas='$id'");
echo "<option value=''>-- Pilih Prodi --</option>";
while($p=mysqli_fetch_array($q)){
echo "<option value='$p[id_prodi]'>$p[nama_prodi]</option>";
}
?>