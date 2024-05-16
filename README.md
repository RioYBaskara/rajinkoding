## Sistem Manajemen Inventaris dengan Laravel

Projek ini adalah Sistem Manajemen Inventaris yang dibangun dengan menggunakan Laravel. Terdapat lima tabel utama: `Siswa`, `Kategori`, `Barang`, `BarangMasuk`, dan `BarangKeluar`.

### Foto
- ![Screenshot_341](https://github.com/RioYBaskara/rajinkoding/assets/156874101/382c653e-0c4e-4799-b326-7818b53ef585)
- ![Screenshot_342](https://github.com/RioYBaskara/rajinkoding/assets/156874101/6240f9f7-587d-41f7-9afe-93241a2d0b11)
- ![Screenshot_347](https://github.com/RioYBaskara/rajinkoding/assets/156874101/f8a2f73e-b689-474b-846a-104fc368e2a8)

### Fitur

1. **Autentikasi Pengguna**: Pengguna dapat melakukan autentikasi untuk mengakses sistem.
2. **Referential Integrity**: Menjaga integritas data dengan menerapkan konstrain integritas referensial antar tabel terkait.
3. **Triggers**: Menggunakan trigger untuk melakukan tindakan otomatis saat terjadi suatu peristiwa di database.
4. **Operasi CRUD**: Mendukung operasi CRUD (Create, Read, Update, Delete) untuk mengelola data dengan efektif.
5. **API untuk Tabel Kategori**: Menyediakan API untuk data dalam tabel `Kategori`.

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

```bash
cp .env.example .env
```

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

### API untuk Tabel Kategori

- **.../api/kategori**: Mendapatkan daftar semua data kategori.
- **.../api/kategori/{kategori_id}**: Mendapatkan daftar semua data kategori.
