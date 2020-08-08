<?php
   $hostname = "localhost";
   $username = "root";
   $password = "gokpras123";
   $database = "yj-mebel";

   $koneksi = mysqli_connect($hostname, $username, $password, $database) or trigger_error(mysqli_error($this->koneksi), E_USER_NOTICE);
   
?>