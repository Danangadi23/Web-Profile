<h2 style="margin-top: 20px; margin-left: 20px; ">Ubah Skill</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM skill WHERE id_skill = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form action="" method="POST" style="margin-top: 20px; margin-left: 20px;" enctype="multipart/form-data">
  <div class="form-group">
    <label for="skill">Skill</label>
    <input type="text" name="skill" id="skill" class="form-control" value="<?php echo $pecah['skill']; ?>">
  </div>
  <div class="form-group" style="margin-top: 20px;">
    <label for="persentase">Persentase</label>
    <input type="text" name="persentase" id="persentase" class="form-control"
      value="<?php echo $pecah['persentase']; ?>">
  </div>
  <div class="form-group">
    <label for="nilai">Nilai</label>
    <input type="text" name="nilai" id="nilai" class="form-control" value="<?php echo $pecah['nilai']; ?>">
  </div>
  <button class="btn btn-primary" style="margin-top: 20px;" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
  // jika diubah
  if (!empty($lokasifoto)) {

    $koneksi->query("UPDATE skill SET 
      skill = '$_POST[skill]', 
      persentase = '$_POST[persentase]',
      nilai = '$_POST[nilai]' WHERE id_skill = '$_GET[id]'");
  } else {
    $koneksi->query("UPDATE skill SET 
      skill = '$_POST[skill]', 
      persentase = '$_POST[persentase]',
      nilai = '$_POST[nilai]' WHERE id_skill = '$_GET[id]'");
  }

  echo "<script> alert('Data Telah DiUbah'); </script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>