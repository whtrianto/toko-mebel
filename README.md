
# Toko Mebel (evas_db)

Project ini adalah aplikasi web toko mebel berbasis PHP yang dapat digunakan untuk mengelola produk, transaksi, dan laporan penjualan mebel.

## Tampilan Awal
![Screenshot_1](https://github.com/whtrianto/toko-mebel/blob/main/images/screenshot1.png)

![Screenshot_2](https://github.com/whtrianto/klasifikasi-buah-pisang/blob/main/static/images/screenshot2.png?raw=true)

## Fitur Utama
- Manajemen produk (baju, kasur, lemari, meja, rak TV, sofa, sprei, dll)
- Transaksi penjualan
- Laporan penjualan
- Login/logout admin
- Pengaturan toko

## Struktur Folder
- `index.php` : Halaman utama
- `login.php` : Halaman login admin
- `transaksi.php` : Manajemen transaksi
- `laporan.php` : Laporan penjualan
- `produk-*.php` : Daftar produk per kategori
- `assets/` : CSS, JS, gambar pendukung
- `images/`, `img/` : Gambar produk dan aset
- `database/` : File SQL database
- `scss/`, `css/`, `css1/` : File stylesheet
- `lib/`, `js/`, `js1/` : Library JS dan plugin

## Cara Menjalankan di Localhost
1. **Clone repository**
   ```
   git clone https://github.com/whtrianto/toko-mebel.git
   ```
2. **Copy folder ke direktori XAMPP**
   Misal ke `C:/xampp/htdocs/`
3. **Import database**
   - Buka phpMyAdmin
   - Buat database baru, misal: `db_evas`
   - Import file `database/db_evas.sql`
4. **Konfigurasi koneksi database**
   - Edit file `config.php` jika perlu menyesuaikan user/password database
5. **Jalankan di browser**
   - Akses `http://localhost/evas_db` atau nama folder project Anda

## Kebutuhan
- PHP 7.x atau lebih baru
- MySQL/MariaDB
- XAMPP/LAMPP/WAMP atau web server sejenis

## Kontribusi
Pull request dan issue sangat diterima untuk pengembangan lebih lanjut.

---

**Copyright © 2024** 
