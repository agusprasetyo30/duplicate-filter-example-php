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

   <title>Tambah Kategori</title>
</head>
<body>
   <div class="container p-3">
      <div class="row justify-content-center">
         
         <div class="col-md-6">
            <h1 class="text-center">Tambah Kategori</h1>
            <a href="./" class="btn btn-primary mb-2">Kembali</a>
            <form action="" method="post">
               <div class="card card-default">
                  <div class="card-header bg-primary text-white">
                     Tambah Kategori
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama" class="form-control">
                     </div>

                     <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" rows="3" class="form-control"></textarea>
                     </div>

                     <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-block">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

<?php
   if (isset($_POST['simpan'])) {

      // return bernilai TRUE maka akan tampil alert SUKSES
      if ($db->addKategori($_POST)) {
         echo '
            <script>
               alert("Data berhasil ditambahkan");
               window.location.href = "./";
            </script>
         ';
      
      // jika return dari $db->addKategori($_POST) bernilai FALSE maka akan tampil 
      // alert TIDAK DAPAT MENAMBAHKAN DATA DIKARENAKAN DATA SUDAH DIINPUTKAN
      } else {
         echo '
            <script>
               alert("Data sudah diinputkan");
               window.location.href = "./";
            </script>
         ';
      }
   }
   
?>