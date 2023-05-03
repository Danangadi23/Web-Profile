<?php

$ambil = $koneksi->query("SELECT * FROM skill  WHERE id_skill = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM skill WHERE id_skill = '$_GET[id]'");

echo "<script> confirm('Yakin Mau Hapus Skill??'); </script>";
echo "<script> location='index.php?halaman=gambar';</script>";