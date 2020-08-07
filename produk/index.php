<?php
   include "../class/helpers.php";

   $db = new helpers();

   $products = $db->getAllProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <title>Produk</title>
</head>
<body>
   <div class="row justify-content-center p-3">
      <div class="container">
         <h1 class="text-center">Produk</h1>

         <a href="../" class="btn btn-primary float-left mb-2">Kembali</a>
         <a href="./add_produk.php" class="btn btn-success float-right mb-2">Tambah Produk</a>
         <table class="table table-hover table-bordered">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Kategori</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  foreach ($products as $key => $product) {
               ?>
               <tr>
                  <td><?= ++$key ?>. </td>
                  <td><?= $product['nama_kategori'] ?></td>
                  <td><?= $product['nama_barang'] ?></td>
                  <td><?= $product['keterangan'] ?></td>
                  <td><?= $product['harga'] ?></td>
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