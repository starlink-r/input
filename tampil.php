<?php include 'koneksi.php'; ?>
<h2>Data Mahasiswa</h2>
<table border="1" cellpadding="5">
<tr>
<th>No</th><th>Nama</th><th>Fakultas</th><th>Prodi</th><th>JK</th><th>Umur</th><th>Alamat</th>
</tr>
<?php $no=1;
$q=mysqli_query($koneksi,"SELECT b.*, f.nama_fakultas, p.nama_prodi FROM biodata b JOIN fakultas f ON b.fakultas=f.id_fakultas JOIN prodi p ON b.prodi=p.id_prodi");
while($d=mysqli_fetch_array($q)){
?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nama'] ?></td>
<td><?= $d['nama_fakultas'] ?></td>
<td><?= $d['nama_prodi'] ?></td>
<td><?= $d['jenis_kelamin'] ?></td>
<td><?= $d['umur'] ?></td>
<td><?= $d['alamat'] ?></td>
</tr>
<?php } ?>
</table>