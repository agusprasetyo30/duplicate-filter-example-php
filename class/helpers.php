<?php
   include "connect.php";

   class helpers extends connect
   {
      // $this->query() : fungsi ini digunakan untuk melakukan query select dan akan otomatis di kembalikan dalam bentuk array
      // bisa dilihat pada connect.php

      /**
       * fungsi yang digunakan untuk menampilkan daftar semua produk
       *
       * @return array
       */
      public function getAllProduct() : array
      {
         $query_produk = $this->query("SELECT p.*, kp.nama_kategori FROM produk p INNER JOIN kategori_produk kp ON p.id_kategori = kp.id_kategori");

         return $query_produk; 
      }

      /**
       * fungsi yang digunakan untuk menampilkan daftar semua kategori
       *
       * @return array
       */
      public function getAllKategori() : array
      {
         $query_kategori = $this->query("SELECT * FROM kategori_produk");

         return $query_kategori;
      }

      public function addKategori($post)
      {
         // mengabil data input
         $nama_kategori = $post['nama'];
         $keterangan = $post['keterangan'];

         // Cek kategori
         $cek_kategori = $this->query("SELECT * FROM kategori_produk WHERE nama_kategori = '$nama_kategori' ");

         // Jika nama kategori sudah diinputkan maka hasilnya tidak NULL
         // Jika belum maka akan bernilai null
         if ($cek_kategori == null) {
            // Keadaan jika data belum diinputkan, maka dapat melakukan penambahan
            $query = "INSERT INTO kategori_produk VALUES(NULL, '$nama_kategori', '$keterangan')";
            mysqli_query($this->koneksi, $query);

            // keadaan jika ada data tidak yang sama
            // maka akan di return true
            // ini digunakan untuk mengecek dan memberikan kondisi pada sistem
            return true;

         } else {
            // keadaan jika ada data yang sama
            // maka akan di return false
            // ini digunakan untuk mengecek dan memberikan kondisi pada sistem
            return false;
         }
      }

   }
?>