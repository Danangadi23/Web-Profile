<h2 style="margin-top: 20px; margin-left: 20px; ">Ubah Skill</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM skill2 WHERE id_skill2 = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form action="" method="POST" style="margin-top: 20px; margin-left: 20px;" enctype="multipart/form-data">
  <div class="form-group">
    <label for="skill2">Skill</label>
    <input type="text" name="skill2" id="skill2" class="form-control" value="<?php echo $pecah['skill2']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="persentase2">Persentase</label>
    <input type="text" name="persentase2" id="persentase2" class="form-control"
      value="<?php echo $pecah['persentase2']; ?>">
  </div>
  <div class="form-group">
    <label for="nilai2">Nilai</label>
    <input type="text" name="nilai2" id="nilai2" class="form-control" value="<?php echo $pecah['nilai2']; ?>">
  </div>
  <button class="btn btn-primary" style="margin-top: 20px;" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  // jika diubah
  if (!empty($lokasifoto)) {

    $koneksi->query("UPDATE skill2 SET 
      skill2 = '$_POST[skill2]', 
      persentase2 = '$_POST[persentase2]',
      nilai2 = '$_POST[nilai2]' WHERE id_skill2 = '$_GET[id]'");
  } else {
    $koneksi->query("UPDATE skill2 SET 
      skill2 = '$_POST[skill2]', 
      persentase2 = '$_POST[persentase2]',
      nilai2 = '$_POST[nilai2]' WHERE id_skill2 = '$_GET[id]'");
  }

  echo "<script> alert('Data Telah DiUbah'); </script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>