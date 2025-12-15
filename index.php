<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="style.css">


<div class="container">
<h2>Form Data Mahasiswa</h2>
<form method="post" action="proses.php">


<label>Nama</label>
<input type="text" name="nama" class="form-control" required>


<label>Fakultas</label>
<select name="fakultas" id="fakultas" class="form-control" onchange="ambilProdi()" required>
<option value="">-- Pilih Fakultas --</option>
<?php
$q = mysqli_query($koneksi,"SELECT * FROM fakultas");
while($f=mysqli_fetch_array($q)){
echo "<option value='$f[id_fakultas]'>$f[nama_fakultas]</option>";
}
?>
</select>


<label>Program Studi</label>
<select name="prodi" id="prodi" class="form-control" required>
<option value="">-- Pilih Prodi --</option>
</select>


<label>Jenis Kelamin</label>
<div class="form-check">
<input type="radio" name="jk" value="Man"> Man
<input type="radio" name="jk" value="Woman"> Woman
</div>


<label>Umur</label>
<input type="number" name="umur" class="form-control">


<label>Alamat</label>
<textarea name="alamat" class="form-control"></textarea>


<button class="btn" type="submit">Simpan</button>
</form>
</div>


<script>
function ambilProdi(){
let id = document.getElementById('fakultas').value;
let xhr = new XMLHttpRequest();
xhr.open('GET','ambil_prodi.php?id_fakultas='+id,true);
xhr.send();
xhr.onreadystatechange=function(){
if(xhr.readyState==4 && xhr.status==200){
document.getElementById('prodi').innerHTML=xhr.responseText;
}
}
}
</script>