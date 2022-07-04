<?php
  include("config/koneksi.php");

  $query = "SELECT * FROM siswa";
  $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD NOo LIAT YTB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>SIMPLE CRUD WITH PHP</h1>
    <br>
    <a href="config/tambahData.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Tambah Data</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nis</th>
          <th scope="col">Nama</th>
          <th scope="col">Kelas</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($data = mysqli_fetch_array($result)) {
            
        ?>
            <tr>
              <th scope="col"><?php echo $data["no"]?></th> 
              <td><?php echo $data["nis"]?></td>
              <td><?php echo $data["nama"]?></td>
              <td><?php echo $data["kelas"]?></td>
              <td>
                <a href="config/editData.php?id=<?php echo $nis=$data['nis']?> " class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Edit</a>
                <a href="config/action/delete.php?id=<?php echo $nis=$data['nis']?>" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Hapus</a>
              </td>
            </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>