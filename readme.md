# Formulir Kontak Sederhana
Proyek ini adalah sebuah formulir kontak sederhana yang memungkinkan pengguna untuk mengirimkan informasi mereka, termasuk nama, email, jenis kelamin, NIM, kelas, dan pesan. Data yang dikirimkan akan disimpan dalam database MySQL menggunakan PHP.

## Fitur
- Mengumpulkan data dari pengguna melalui form HTML.
- Memvalidasi input pengguna.
- Menyimpan data ke dalam database MySQL.
- Menampilkan pesan konfirmasi setelah data berhasil disimpan.
## Persyaratan
- XAMPP (untuk server Apache dan MySQL)
- PHP versi terbaru
- Browser web untuk mengakses form
## Instalasi
1. Unduh dan Instal XAMPP  
   Pastikan Anda sudah menginstal XAMPP di komputer Anda. XAMPP adalah paket perangkat lunak bebas yang berisi Apache, MySQL, PHP, dan Perl. Anda dapat mengunduhnya dari [Apache Friends](https://www.apachefriends.org/index.html).

2. Clone Repository Ini  
   Clone atau unduh repository ini ke folder `htdocs` di direktori instalasi XAMPP. Misalnya, jika Anda menginstal XAMPP di `C:\xampp`, clone repository ke `C:\xampp\htdocs\formulirkontak`.

3. **Buat Database di MySQL**  
   - Jalankan XAMPP dan aktifkan Apache dan MySQL.
   - Buka browser Anda dan akses `http://localhost/phpmyadmin`.
   - Buat database baru dengan nama `kontak_form`.
   - Di dalam database `kontak_form`, buat tabel dengan nama `kontak` menggunakan query SQL berikut:

     ```sql
     CREATE TABLE kontak (
         id INT AUTO_INCREMENT PRIMARY KEY,
         nama VARCHAR(100) NOT NULL,
         email VARCHAR(100) NOT NULL,
         kelamin VARCHAR(10) NOT NULL,
         nim VARCHAR(20) NOT NULL,
         kelas VARCHAR(20) NOT NULL,
         pesan TEXT NOT NULL
     );
     ```

4. **Konfigurasi Koneksi Database**  
   Buka file `prosesform.php` dan pastikan parameter untuk koneksi ke database sesuai dengan pengaturan XAMPP Anda (biasanya `servername = "localhost"`, `username = "root"`, dan `password = ""`).

5. **Menjalankan Proyek**  
   - Pastikan XAMPP (Apache dan MySQL) sedang berjalan.
   - Buka browser Anda dan akses `http://localhost/formulir_kontak/contact.html`.
   - Isi form dan kirimkan data. Setelah berhasil, pesan konfirmasi akan ditampilkan.



