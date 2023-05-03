<div class="m-2 p-2">
  <h2>Tambah Data</h2>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="kutipan">Kutipan</label>
      <input type="text" name="kutipan" id="kutipan" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="birthday">Birthday</label>
      <input type="text" name="birthday" id="birthday" class="form-control">
    </div>
    <div class="form-group">
      <label for="instagram">Instagram</label>
      <input type="text" name="instagram" id="instagram" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="phone">Phone</label>
      <input type="text" name="phone" id="phone" class="form-control">
    </div>
    <div class="form-group">
      <label for="kota">Kota</label>
      <input type="text" name="kota" id="kota" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="age">Age</label>
      <input type="text" name="age" id="age" class="form-control">
    </div>
    <div class="form-group">
      <label for="hobby">Hobby</label>
      <input type="text" name="hobby" id="hobby" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="agama">Agama</label>
      <input type="text" name="agama" id="agama" class="form-control">
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
  $koneksi->query("INSERT INTO about(kutipan, birthday, instagram, phone, kota, age, hobby, email, agama, gambar)
  VALUES('$_POST[kutipan]','$_POST[birthday]', '$_POST[instagram]','$_POST[phone]', '$_POST[kota]','$_POST[age]', '$_POST[hobby]','$_POST[email]', '$_POST[agama]', '$nama')");

  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>