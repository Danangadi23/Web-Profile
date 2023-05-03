<h2 style="margin-top: 20px; margin-left: 20px; ">Ubah Gambar</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM gambar WHERE id_gambar = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form action="" method="POST" style="margin-top: 20px; margin-left: 20px;" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nama">Nama Gambar</label>
    <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $pecah['nama_gambar']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="jenis_gambar">Jenis Gambar</label>
    <input type="text" name="jenis_gambar" id="jenis_gambar" class="form-control"
      value="<?php echo $pecah['jenis_gambar']; ?>">
  </div>
  <div class="form-group">
    <label for="keterangan">Keterangan Gambar</label>
    <input type="text" name="keterangan" id="keterangan" class="form-control"
      value="<?php echo $pecah['keterangan']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <img src="../foto_gambar/<?php echo $pecah['foto_gambar']; ?>" width="200">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="foto">Ganti foto</label>
    <input type="file" name="foto" class="form-control">
  </div>
  <button class="btn btn-primary" style="margin-top: 20px;" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  $namafoto = $_FILES['foto']['name'];
  $lokasifoto = $_FILES['foto']['tmp_name'];
  // jika diubah
  if (!empty($lokasifoto)) {
    move_uploaded_file($lokasifoto, "../foto_gambar/$namafoto");

    $koneksi->query("UPDATE gambar SET 
      nama_gambar = '$_POST[nama]', 
      jenis_gambar = '$_POST[jenis_gambar]',
      keterangan = '$_POST[keterangan]',
      foto_gambar = '$namafoto' WHERE id_gambar = '$_GET[id]'");
  } else {
    $koneksi->query("UPDATE gambar SET 
      nama_gambar = '$_POST[nama]', 
      jenis_gambar = '$_POST[jenis_gambar]', 
      keterangan = '$_POST[keterangan]',
      foto_gambar = '$namafoto' WHERE id_gambar = '$_GET[id]'");
  }

  echo "<script> alert('Data Gambar Telah DiUbah'); </script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>