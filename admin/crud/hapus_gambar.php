<?php

$ambil = $koneksi->query("SELECT * FROM gambar  WHERE id_gambar = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotogambar = $pecah['foto_gambar'];
if(file_exists("../foto_gambar/$fotogambar"))
{
  unlink("../foto_gambar/$fotogambar");
}

$koneksi->query("DELETE FROM gambar WHERE id_gambar = '$_GET[id]'");

echo "<script> confirm('Yakin Mau Hapus Gambar??'); </script>";
echo "<script> location='index.php?halaman=gambar';</script>";