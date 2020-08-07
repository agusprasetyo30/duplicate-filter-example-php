# Revisi

## Keterangan

- folder `class` berisi file untuk keperluan `koneksi` dan `helper`
- `connect.php` : digunakan untuk keperluan koneksi, dan juga terdapat fungsi `protected function query($query)` yang berfungsi untuk query data select
   > BTW kui aku ngawe dewe lo sing query() nggak otomatis ono, aku ngawe ben gawe mempermudah ae :v

- `helpers.php` : digunakan untuk keperluan sistem, class tersebut secara otomatis sudah turunan dari class `connect` / `extend`, disana terdapat beberapa fungsi antara lain : 
  - `public function getAllProduct()` => Untuk menampilkan data semua produk yang ada pada database
  - `public function getAllKategori()` => Untuk menampilkan data semua kategori yang ada pada database
  - `public function addKategori($post)` => Digunakan untuk menyimpan data kategori beserta filter data jika data sama tidak boleh diinputkan, untuk parameter `$post` berarti data $_POST ditampung pada parameter dan di proses di fungsi. 
      > parameter filter yang digunakan pada addKategori() adalah `nama kategori` 
  - `public function addProduk($post)` => Digunakan untuk menyimpan data produk beserta filter data jika data sama tidak boleh diinputkan, untuk parameter `$post` berarti data $_POST ditampung pada parameter dan di proses di fungsi. 
      > parameter filter yang digunakan pada addProduk() adalah `id_kategori` dan `nama produk`

