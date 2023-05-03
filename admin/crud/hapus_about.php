<?php

$terambil = $koneksi->query("SELECT * FROM about  WHERE id_about = '$_GET[id]'");
$pecahan = $terambil->fetch_assoc();
$fotogambar = $pecahan['foto_gambar'];
if (file_exists("../foto_gambar/$fotogambar")) {
  unlink("../foto_gambar/$fotogambar");
}

$koneksi->query("DELETE FROM about WHERE id_about = '$_GET[id]'");

echo "<script> confirm('Yakin Mau Hapus About??'); </script>";
echo "<script> location='index.php?halaman=gambar';</script>";