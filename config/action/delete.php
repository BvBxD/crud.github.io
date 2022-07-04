<?php
  include('../koneksi.php');

  $nis = $_GET['id'];
  $query = "DELETE FROM siswa WHERE nis='$nis'";
  $result = mysqli_query($conn, $query);
  if($result) {
    $query = "ALTER TABLE siswa DROP no";
    $result = mysqli_query($conn, $query);
    if($result) {
      $query = "ALTER TABLE siswa ADD no INT NOT NULL AUTO_INCREMENT FIRST, ADD INDEX(no);";
      $result = mysqli_query($conn, $query);
      echo "<script>
        alert('berhasil menghapus data');
        window.location = '../../index.php';
      </script>";
    }
  }
?>