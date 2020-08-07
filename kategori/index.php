<?php
   include "../class/helpers.php";

   $db = new helpers();

   $kategori = $db->getAllKategori();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <title>Kategori</title>
</head>
<body>
   <div class="row justify-content-center p-3">
      <div class="container">
         <h1 class="text-center">Kategori</h1>

         <a href="../" class="btn btn-primary float-left mb-2">Kembali</a>
         <a href="./add_kategori.php" class="btn btn-success float-right mb-2">Tambah Kategori</a>
         <table class="table table-hover table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Keterangan</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  foreach ($kategori as $key => $data) {
               ?>
               <tr>
                  <td><?= ++$key ?>. </td>
                  <td><?= $data['nama_kategori'] ?></td>
                  <td><?= $data['keterangan'] ?></td>
               </tr>
               <?php } ?>

            </tbody>
         </table>
      
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>