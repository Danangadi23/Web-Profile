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
      <h6 class="mb-0">Data Portfolio</h6>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">No</th>
            <th scope="col">Nama Gambar</th>
            <th scope="col">Tingkatan</th>
            <th scope="col">Keterangan Gambar</th>
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
            <td><?php echo $pecah['keterangan']; ?></td>
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
    </div><br><br>

    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Data About</h6>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">No</th>
            <th scope="col">Kutipan</th>
            <th scope="col">Birthday</th>
            <th scope="col">Instagram</th>
            <th scope="col">Phone</th>
            <th scope="col">Kota</th>
            <th scope="col">Age</th>
            <th scope="col">Hobby</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Gambar</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $angka = 1; ?>
          <?php $terambil = $koneksi->query("SELECT * FROM about"); ?>
          <?php while ($pecahan = $terambil->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $angka; ?></td>
            <td><?php echo $pecahan['kutipan']; ?></td>
            <td><?php echo $pecahan['birthday']; ?></td>
            <td><?php echo $pecahan['instagram']; ?></td>
            <td><?php echo $pecahan['phone']; ?></td>
            <td><?php echo $pecahan['kota']; ?></td>
            <td><?php echo $pecahan['age']; ?></td>
            <td><?php echo $pecahan['hobby']; ?></td>
            <td><?php echo $pecahan['email']; ?></td>
            <td><?php echo $pecahan['agama']; ?></td>
            <td><img src="../foto_gambar/<?php echo $pecahan['gambar']; ?>" width="120"></td>
            <td scope="row">
              <a class="btn btn-warning btn-primary" style="margin-bottom: 10px;"
                href="index.php?halaman=ubah-about&id=<?php echo $pecahan['id_about']; ?>">Edit</a>
              <!-- <a class="btn btn-danger btn-primary"
                href="index.php?halaman=hapus-about&id=<?php echo $pecahan['id_about']; ?>" id="delete">Delete</a> -->
            </td>
          </tr>
          <?php $angka++; ?>
          <?php } ?>
        </tbody>
      </table>
      <!-- <a href="index.php?halaman=tambah-about" style="margin-top: 20px;" class="btn btn-primary">Tambah Data</a> -->
    </div><br><br>


    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Data Skill 1</h6>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">No</th>
            <th scope="col">Nama Skill</th>
            <th scope="col">Persentase</th>
            <th scope="col">Nilai</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          <?php $keambil = $koneksi->query("SELECT * FROM skill"); ?>
          <?php while ($pecahkan = $keambil->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecahkan['skill']; ?></td>
            <td><?php echo $pecahkan['persentase']; ?></td>
            <td><?php echo $pecahkan['nilai']; ?></td>
            <td scope="row">
              <a class="btn btn-warning btn-primary"
                href="index.php?halaman=ubah-skill&id=<?php echo $pecahkan['id_skill']; ?>">Edit</a>
              <!-- <a class="btn btn-danger btn-primary"
                href="index.php?halaman=hapus-skill&id=<?php echo $pecahkan['id_skill']; ?>" id="hapus">Delete</a> -->
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php } ?>
        </tbody>
      </table>
      <!-- <a href="index.php?halaman=tambah-skill" style="margin-top: 20px;" class="btn btn-primary">Tambah Skill</a> -->
    </div><br><br>


    <div class="d-flex align-items-center justify-content-between mb-4">
      <h6 class="mb-0">Data Skill 2</h6>
    </div>
    <div class="table-responsive">
      <table class="table text-start align-middle table-bordered table-hover mb-0">
        <thead>
          <tr class="text-dark">
            <th scope="col">No</th>
            <th scope="col">Nama Skill</th>
            <th scope="col">Persentase</th>
            <th scope="col">Nilai</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 1; ?>
          <?php $keambil2 = $koneksi->query("SELECT * FROM skill2"); ?>
          <?php while ($pecahkan2 = $keambil2->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecahkan2['skill2']; ?></td>
            <td><?php echo $pecahkan2['persentase2']; ?></td>
            <td><?php echo $pecahkan2['nilai2']; ?></td>
            <td scope="row">
              <a class="btn btn-warning btn-primary"
                href="index.php?halaman=ubah-skill2&id=<?php echo $pecahkan2['id_skill2']; ?>">Edit</a>
              <!-- <a class="btn btn-danger btn-primary"
                href="index.php?halaman=hapus-skill2&id=<?php echo $pecahkan2['id_skill2']; ?>" id="hapus">Delete</a> -->
            </td>
          </tr>
          <?php $nomor++; ?>
          <?php } ?>
        </tbody>
      </table>
      <!-- <a href="index.php?halaman=tambah-skill2" style="margin-top: 20px;" class="btn btn-primary">Tambah Skill</a> -->
    </div><br><br>
  </div>
</div>
</div>
</div>
<!-- Recent Sales End -->