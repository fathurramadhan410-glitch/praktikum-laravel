Mini Aplikasi Manajemen Data Akademik — Praktikum Laravel

Nama            : Fathur Ramadhan
Nim             : C050425007
Kelas           : SIKC 3B
Mata Kuliah     : Pemograman Berbasis Web
Dosen Pengampu  : Arifin Noor Asyikin, S.T.,M.T.

Deskripsi Proyek
Mini aplikasi manajemen data akademik berbasis Laravel yang dibangun melaluiPraktikum 1–5. Aplikasi memuat tabel mahasiswas, matakuliahs, users (dosen),dan tabel pivot mahasiswa_matakuliah yang menghubungkan mahasiswa dengan matakuliah yang diambil (many-to-many). Relasi Eloquent yang digunakan:

belongsToMany : Mahasiswa ↔ Matakuliah
belongsTo : Matakuliah → User (dosen pengampu)
hasMany : User → Matakuliah
Data awal diisi melalui factory dan seeder (5 dosen, 50 mahasiswa, 20 matakuliah, beserta relasi pivotnya), kemudian ditampilkan pada halaman web serta relasinya.

Daftar Perintah Artisan yang Digunakan
php artisan make:migration create_mahasiswas_table
php artisan make:migration add_email_to_mahasiswas_table --table=mahasiswas
php artisan make:migration created_matakuliahs_table
php artisan make:migration add_dosen_id_to_matakuliahs_table --table=matakuliahs
php artisan make:migration create_matakuliah_mahasiswa_table
php artisan make:model Mahasiswa -mcr
php artisan make:model Matakuliah
php artisan make:controller MatakuliahController
php artisan make:seeder MahasiswaSeeder
php artisan make:seeder MatakuliahSeeder
php artisan make:seeder UserSeeder
php artisan make:factory MahasiswaFactory --model=Mahasiswa
php artisan make:factory MatakuliahFactory --model=Matakuliah
php artisan migrate / migrate:status / migrate:rollback
php artisan db:seed / php artisan migrate:fresh --seed
php artisan tinker / php artisan route:list / php artisan serve

Cara Menjalankan Project
composer install
Salin .env.example menjadi .env, sesuaikan konfigurasi database, lalu jalankan:php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
Buka http://127.0.0.1:8000/mahasiswa dan http://127.0.0.1:8000/matakuliah