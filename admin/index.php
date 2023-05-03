<?php
include "header.php";
// if (!isset($_SESSION)) {
//   session_start();
// }
// 
?>

<?php
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='signin.php';</script>";
  header('location:signin.php');
  exit();
}
?>

<?php

if (isset($_GET['halaman'])) {
  if ($_GET['halaman'] == "gambar") {
    include 'gambar.php';
  } elseif ($_GET['halaman'] == "tambah-gambar") {
    include 'crud/tambah_gambar.php';
  } elseif ($_GET['halaman'] == "hapus-gambar") {
    include 'crud/hapus_gambar.php';
  } elseif ($_GET['halaman'] == "ubah-gambar") {
    include 'crud/ubah_gambar.php';
  } elseif ($_GET['halaman'] == "logout") {
    include 'logout.php';
  } elseif ($_GET['halaman'] == "ubah-about") {
    include 'crud/ubah_about.php';
  } elseif ($_GET['halaman'] == "tambah-about") {
    include 'crud/tambah_about.php';
  } elseif ($_GET['halaman'] == "hapus-about") {
    include 'crud/hapus_about.php';
  } elseif ($_GET['halaman'] == "hapus-skill") {
    include 'crud/hapus_skill.php';
  } elseif ($_GET['halaman'] == "tambah-skill") {
    include 'crud/tambah_skill.php';
  } elseif ($_GET['halaman'] == "ubah-skill") {
    include 'crud/ubah_skill.php';
  } elseif ($_GET['halaman'] == "hapus-skill2") {
    include 'crud/hapus_skill2.php';
  } elseif ($_GET['halaman'] == "tambah-skill2") {
    include 'crud/tambah_skill2.php';
  } elseif ($_GET['halaman'] == "ubah-skill2") {
    include 'crud/ubah_skill2.php';
  }
} else {
  include 'dashboard.php';
}
?>

<?php
include "footer.php"
?>