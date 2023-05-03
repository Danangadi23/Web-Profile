<div class="m-2 p-2">
  <h2>Tambah Gambar</h2>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama">Nama Gambar</label>
      <input type="text" class="form-control" name="nama" id="nama">
    </div>
    <div class="form-group">
      <label for="jenis_gambar">Tingkatan</label>
      <input type="text" class="form-control" name="jenis_gambar" id="jenis_gambar">
    </div>
    <div class="form-group">
      <label for="keterangan">Keterangan Gambar</label>
      <input type="text" class="form-control" name="keterangan" id="keterangan">
    </div>
    <div class="form-group">
      <label for="foto">Foto</label>
      <input type="file" class="form-control" name="foto" id="foto">
    </div>
    <button class="btn btn-primary" style="margin-top: 20px;" name="save">Simpan</button>
  </form>
</div>
<?php
if (isset($_POST['save'])) {
  $nama = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['tmp_name'];
  move_uploaded_file($lokasi, "../foto_gambar/" . $nama);
  $koneksi->query("INSERT INTO gambar(nama_gambar, jenis_gambar, keterangan, foto_gambar)
  VALUES('$_POST[nama]','$_POST[jenis_gambar]', '$_POST[keterangan]', '$nama')");

  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>