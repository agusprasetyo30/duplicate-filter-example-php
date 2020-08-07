<?php
   include "connect.php";

   class helpers extends connect
   {

      public function getAllProduct() : array
      {
         $query_produk = $this->query("SELECT p.*, kp.nama_kategori FROM produk p INNER JOIN kategori_produk kp ON p.id_kategori = kp.id_kategori");

         return $query_produk; 
      }

   }
?>