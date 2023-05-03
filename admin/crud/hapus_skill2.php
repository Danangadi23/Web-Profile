<?php

$ambil = $koneksi->query("SELECT * FROM skill2  WHERE id_skill2 = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM skill2 WHERE id_skill2 = '$_GET[id]'");

echo "<script> confirm('Yakin Mau Hapus Skill??'); </script>";
echo "<script> location='index.php?halaman=gambar';</script>";