<?php
  include('../koneksi.php');
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];

  $query = "INSERT INTO siswa(no, nis, nama, kelas) VALUES(NULL, '$nis', '$nama', '$kelas')";
  $result = mysqli_query($conn, $query);
  if($result) {
    $query = "ALTER TABLE siswa DROP no";
    $result = mysqli_query($conn, $query);
    if($result) {
      $query = "ALTER TABLE siswa ADD no INT NOT NULL AUTO_INCREMENT FIRST, ADD INDEX(no);";
      $result = mysqli_query($conn, $query);
      echo "<script>
        alert('berhasil menambahkan data');
        window.location = '../../index.php';
      </script>";
    }
  } else {
  echo "<script>
    alert('gagal menambahkan data(bisa jadi nis nya yang sama)');
    window.location = '../tambahData.php';
  </script>";
  }
?>