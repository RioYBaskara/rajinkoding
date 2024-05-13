## Sistem Manajemen Inventaris dengan Laravel

Projek ini adalah Sistem Manajemen Inventaris yang dibangun dengan menggunakan Laravel. Terdapat lima tabel utama: `Siswa`, `Kategori`, `Barang`, `BarangMasuk`, dan `BarangKeluar`.

### Fitur

1. **Autentikasi Pengguna**: Pengguna dapat melakukan autentikasi untuk mengakses sistem.
2. **Integritas Referensial**: Menjaga integritas data dengan menerapkan konstrain integritas referensial antar tabel terkait.
3. **Pemicu (Triggers)**: Menggunakan pemicu untuk melakukan tindakan otomatis saat terjadi suatu peristiwa di database.
4. **Operasi CRUD**: Mendukung operasi CRUD (Create, Read, Update, Delete) untuk mengelola data dengan efektif.

### Template

Projek ini menggunakan template [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) untuk desain antarmuka pengguna.

### Clone Repositori

Untuk meng-clone repositori ini, ikuti langkah-langkah berikut:

1. Pastikan Git sudah terinstal di komputer Anda.
2. Buka terminal atau command prompt.
3. Arahkan ke direktori tempat Anda ingin meng-clone repositori.
4. Jalankan perintah berikut:

```bash
git clone https://github.com/RioYBaskara/rajinkoding.git
```

### Persyaratan

Sebelum menjalankan projek Laravel ini, pastikan Anda telah memenuhi persyaratan berikut:

1. **PHP**: Pastikan PHP sudah terinstal di sistem Anda. Anda dapat mengunduhnya dari [php.net](https://www.php.net/downloads).
2. **Composer**: Instal Composer, manajer dependensi untuk PHP, dari [getcomposer.org](https://getcomposer.org/download/).
3. **MySQL**: Siapkan server database MySQL. Anda dapat mengunduhnya dari [mysql.com](https://dev.mysql.com/downloads/).
4. **Laravel CLI**: Instal Laravel secara global menggunakan Composer:

```bash
composer global require laravel/installer
```

### Persiapan

Ikuti langkah-langkah berikut untuk menyiapkan projek:

1. **Clone Repositori**: Gunakan instruksi cloning yang disebutkan di atas.
2. **Instal Dependensi**: Arahkan ke direktori projek dan jalankan:

```bash
composer install
```

3. **Salin Variabel Lingkungan**: Duplikat file `.env.example` dan ganti namanya menjadi `.env`. Perbarui detail konfigurasi database (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD) di file ini.
4. **Menghasilkan Kunci Aplikasi**: Jalankan perintah berikut untuk menghasilkan kunci aplikasi yang unik:

```bash
php artisan key:generate
```

5. **Jalankan Migrasi**: Jalankan perintah berikut untuk menjalankan semua migrasi yang tertunda:

```bash
php artisan migrate
```

6. **Jalankan Aplikasi**: Terakhir, jalankan server pengembangan Laravel:

```bash
php artisan serve
```

Akses aplikasi melalui web browser Anda di `http://localhost:8000`.

Jangan lupa Bismillah.