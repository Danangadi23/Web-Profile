<h2 style="margin-top: 20px; margin-left: 20px; ">Ubah about</h2>
<?php
$terambil = $koneksi->query("SELECT * FROM about WHERE id_about = '$_GET[id]'");
$pecahan = $terambil->fetch_assoc();
?>

<form action="" method="POST" style="margin-top: 20px; margin-left: 20px;" enctype="multipart/form-data">
  <div class="form-group">
    <label for="kutipan">Kutipan</label>
    <input type="text" name="kutipan" id="kutipan" class="form-control" value="<?php echo $pecahan['kutipan']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="birthday">Birthday</label>
    <input type="text" name="birthday" id="birthday" class="form-control" value="<?php echo $pecahan['birthday']; ?>">
  </div>
  <div class="form-group">
    <label for="instagram">Instagram</label>
    <input type="text" name="instagram" id="instagram" class="form-control"
      value="<?php echo $pecahan['instagram']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $pecahan['phone']; ?>">
  </div>
  <div class="form-group">
    <label for="kota">Kota</label>
    <input type="text" name="kota" id="kota" class="form-control" value="<?php echo $pecahan['kota']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="age">Age</label>
    <input type="text" name="age" id="age" class="form-control" value="<?php echo $pecahan['age']; ?>">
  </div>
  <div class="form-group">
    <label for="hobby">Hobby</label>
    <input type="text" name="hobby" id="hobby" class="form-control" value="<?php echo $pecahan['hobby']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $pecahan['email']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="agama">Agama</label>
    <input type="text" name="agama" id="agama" class="form-control" value="<?php echo $pecahan['agama']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <img src="../foto_gambar/<?php echo $pecahan['gambar']; ?>" width="200">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="foto">Ganti Profil</label>
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

    $koneksi->query("UPDATE about SET 
      kutipan = '$_POST[kutipan]', 
      birthday = '$_POST[birthday]',
      instagram = '$_POST[instagram]', 
      phone = '$_POST[phone]',
      kota = '$_POST[kota]', 
      age = '$_POST[age]',
      hobby = '$_POST[hobby]', 
      email = '$_POST[email]',
      agama = '$_POST[agama]',
      gambar = '$namafoto' WHERE id_about = '$_GET[id]'");
  } else {
    $koneksi->query("UPDATE about SET 
      kutipan = '$_POST[kutipan]', 
      birthday = '$_POST[birthday]',
      instagram = '$_POST[instagram]', 
      phone = '$_POST[phone]',
      kota = '$_POST[kota]', 
      age = '$_POST[age]',
      hobby = '$_POST[hobby]', 
      email = '$_POST[email]',
      agama = '$_POST[agama]',
      gambar = '$namafoto' WHERE id_about = '$_GET[id]'");
  }

  echo "<script> alert('Data Telah DiUbah'); </script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>