Mini Aplikasi Manajemen Data Akademik — Praktikum Laravel

Nama            : Fathur Ramadhan
Nim             : C050425007
Kelas           : SIKC 3B
Mata Kuliah     : Pemograman Berbasis Web
Dosen Pengampu  : Arifin Noor Asyikin, S.T.,M.T.

PS C:\xampp\htdocs\praktikum-laravel> php artisan route:list --except-vendor

  GET|HEAD   / .................................................................................................................................................... home › routes/web.php:89
  GET|HEAD   daftar-mahasiswa ............................................................................................................................................ routes/web.php:63
  GET|HEAD   halo ........................................................................................................................................................ routes/web.php:14
  GET|HEAD   kontak ...................................................................................................................................................... routes/web.php:29
  GET|HEAD   mahasiswa ......................................................................................................................... mahasiswa.index › MahasiswaController@index
  GET|HEAD   mahasiswa/{mahasiswa} ............................................................................................................... mahasiswa.show › MahasiswaController@show
  GET|HEAD   matakuliah ...................................................................................................................... matakuliah.index › MatakuliahController@index
  POST       matakuliah ...................................................................................................................... matakuliah.store › MatakuliahController@store
  GET|HEAD   matakuliah/create ............................................................................................................. matakuliah.create › MatakuliahController@create
  GET|HEAD   matakuliah/{matakuliah} ........................................................................................................... matakuliah.show › MatakuliahController@show
  GET|HEAD   profil ...................................................................................................................................................... routes/web.php:25
  GET|HEAD   profil-mahasiswa ............................................................................................................................................ routes/web.php:49
  GET|HEAD   sapa ........................................................................................................................................................ routes/web.php:18
  GET|HEAD   statistik ................................................................................................................................................... routes/web.php:56
  GET|HEAD   tentang ..................................................................................................................................................... routes/web.php:33
  GET|HEAD   {fallbackPlaceholder} ....................................................................................................................................... routes/web.php:85

                                                                                                                                                                         Showing [16] routes


Cara Menjalankan Project :
composer install
Salin .env.example menjadi .env, sesuaikan konfigurasi database, lalu jalankan:php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
Buka http://127.0.0.1:8000/mahasiswa dan http://127.0.0.1:8000/matakuliah