<?php
// session_start();
// include "header.php";
?>

<?php
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='signin.php';</script>";
  header('location:signin.php');
  exit();
}
?>

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
  <div class="bg-light text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Data Table</h6>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">No</th>
            <th scope="col">Nama Gambar</th>
            <th scope="col">Jenis Gambar</th>
            <th scope="col">Gambar</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          <?php $ambil = $koneksi->query("SELECT * FROM gambar"); ?>
          <?php while ($pecah = $ambil->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_gambar']; ?></td>
            <td><?php echo $pecah['jenis_gambar']; ?></td>
            <td><img src="../foto_gambar/<?php echo $pecah['foto_gambar']; ?>" width="120"></td>
            <td scope="row">
              <a class="btn btn-warning btn-primary"
                href="index.php?halaman=ubah-gambar&id=<?php echo $pecah['id_gambar']; ?>">Edit</a>
              <a class="btn btn-danger btn-primary"
                href="index.php?halaman=hapus-gambar&id=<?php echo $pecah['id_gambar']; ?>" id="hapus">Delete</a>
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php } ?>
        </tbody>
      </table>
      <a href="index.php?halaman=tambah-gambar" style="margin-top: 20px;" class="btn btn-primary">Tambah Gambar</a>
    </div>
  </div>
</div>
<!-- Recent Sales End -->