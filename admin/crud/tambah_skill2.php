<div class="m-2 p-2">
  <h2>Tambah Data</h2>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="skill2">Skill</label>
      <input type="text" name="skill2" id="skill2" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="persentase2">Persentase</label>
      <input type="text" name="persentase2" id="persentase2" class="form-control">
    </div>
    <div class="form-group">
      <label for="nilai2">Nilai</label>
      <input type="text" name="nilai2" id="nilai2" class="form-control">
    </div>
    <button class="btn btn-primary" style="margin-top: 20px;" name="save">Simpan</button>
  </form>
</div>
<?php
if (isset($_POST['save'])) {
  $koneksi->query("INSERT INTO skill2(skill2, persentase2, nilai2)
  VALUES('$_POST[skill2]','$_POST[persentase2]', '$_POST[nilai2]')");

  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>