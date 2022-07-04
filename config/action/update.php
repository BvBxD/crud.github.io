<?php
  include('../koneksi.php');
  $no = $_GET['id'];
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $query = "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas' WHERE no=$no;";
  $result = mysqli_query($conn, $query);
  if($result) {
    $query = "ALTER TABLE siswa DROP no";
    $result = mysqli_query($conn, $query);
    if($result) {
      $query = "ALTER TABLE siswa ADD no INT NOT NULL AUTO_INCREMENT FIRST, ADD INDEX(no);";
      $result = mysqli_query($conn, $query);
      if($result) {
        echo "<script>
          alert('berhasil disimpan');
          window.location = '../../index.php';
        </script>
        ";
      }
    }
  } else {
    echo "<script>
      alert('gagal disimpan');
      window.location = '../editData.php';
    </script>
    ";
  }
?>