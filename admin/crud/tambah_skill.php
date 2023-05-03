<div class="m-2 p-2">
  <h2>Tambah Data</h2>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="skill">Skill</label>
      <input type="text" name="skill" id="skill" class="form-control">
    </div>
    <div class="form-group" style="margin-top: 20px;">
      <label for="persentase">Persentase</label>
      <input type="text" name="persentase" id="persentase" class="form-control">
    </div>
    <div class="form-group">
      <label for="nilai">Nilai</label>
      <input type="text" name="nilai" id="nilai" class="form-control">
    </div>
    <button class="btn btn-primary" style="margin-top: 20px;" name="save">Simpan</button>
  </form>
</div>
<?php
if (isset($_POST['save'])) {
  $koneksi->query("INSERT INTO skill(skill, persentase, nilai)
  VALUES('$_POST[skill]','$_POST[persentase]', '$_POST[nilai]')");

  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=gambar'>";
}
?>