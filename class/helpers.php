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

      /**
       * Fungsi ini digunakan untuk menambahkan data produk
       * dengan filter data tidak boleh sama dengan yang sudah ditambahkan
       *
       * @param [type] $post
       * @return boolean
       */
      public function addProduk($post) : bool
      {
         // mengabil data input
         $nama_produk = $post['nama'];
         $kategori = $post['kategori'];
         $keterangan = $post['keterangan'];
         $harga = $post['harga'];
         $gambar = $post['gambar'];

         // Cek produk
         $cek_produk = $this->query("SELECT * FROM produk WHERE id_kategori = '$kategori' AND nama_barang = '$nama_produk' ");
         

         // Jika nama produk AND kategori sudah diinputkan maka hasilnya tidak NULL
         // Jika belum maka akan bernilai null
         if ($cek_produk == null) {
            // Keadaan jika data belum diinputkan, maka dapat melakukan penambahan
            $query = "INSERT INTO produk VALUES(NULL, '$kategori', '$nama_produk', '$keterangan', '$harga', '$gambar')";
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