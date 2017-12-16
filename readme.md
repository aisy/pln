# pln

> Web aplikasi sistem pengaduan layanan user kepada pihak pln di kota Malang, baik dalam urusan umum maupun tekniksi di kota Malang.

<br/>

#### Update Baru :
1. Halaman User : 
- Lain-lain sudah fix di setiap halaman
2. Halaman Admin (semua): 
    - admin pengaduan tidak keluar list sudah di benahi
    - register admin error sudah di benahi
    - berita yg bisa hanya CS sudah di benahi
    - sorting data di summary dan data pengaduan sudah urut dari nomor urut 1 dan seterusnya
3. Halaman admin (CS)
    - menambah kolom status sudah selesai sudah di tambahkan

#### Kebutuhan Perangkat Lunak :

Requierment :
- Composer versi 4/5
- Xampp yang mendukung php 5 keatas (termasuk phpmyadmin dll)
- Text Editor untuk keperluan editor(Vscode, notepad++, Atom pilih salah satu saja)
- Aplikasi terminal Cmder (Untuk Windows) karena untuk windows sudah include git dan perintah-perinta UNIX
- Browser yang mendukung html5 dan debugging javascript (Google Chrome, Mozilla, Edge)

<br/>

#### Installasi Dasar
1. Pastikan Koneksi tersedia dan stabil
2. Clone Project dari github ini melalui terminal
```command line
git clone https://github.com/aisy/pln.git
```
3. Masuk ke folder "pln" dengan perintah :
```command line
cd pln
``` 
4. Install Package atau kebutuhan laravel
```command line
php artisan install
``` 
5. Buat file .env (untuk windows bisa menggunakan aplikasi terminal cmder, karena Windows tidak mendukung perintah UNIX) lalu masukkan perintah :
```command line
touch .env
```
6. Masukkan Script dibawah di .env, ubah DB_USERNAME dan DB_PASSWORD sesuai dengan setting mysql :
```env
APP_ENV=local
APP_DEBUG=true
APP_KEY=m8n9u9CtONP0MZYWgTycLQ36hp64K3N3

DB_CONNECTION=mysql
DB_HOST=localhost
DB_DATABASE=pln
DB_USERNAME=(isi_sendiri sesuai dengan mysql)
DB_PASSWORD=(isi_sendiri sesuai dengan mysql)

CACHE_DRIVER=file 
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=smtp
MAIL_HOTS=mailtrap.io
MAIL_PORT=2525 
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRIPTION=null
```
7. Buat App Key dan clear cache agar bisa digunakan dengan memasukkan perintah :
```command line
php artisan key:generate
php artisan cache:clear
```
8. Nyalakan Server Phpmyadmin dan Apache di Xampp

<br/>

#### Memasang Database

Untuk Memasang Database cuku buka phpmyadmin di Browser, lalu buat database bernama "pln" setelah itu import file database "pln.sql" dari folder yang di clone sebelumnya.

#### Menggunakan Aplikasi 
Untuk menjalankan aplikasi bisa menggunakan perintah :
```command line
php artisan serve
```
#### Masalah saat running?
1. buka "folder/config/app.php"
2. temukan dan komentar script dibawah ini :
```php
     Collective\Html\HtmlServiceProvider::class,
     'Form'     => Collective\Html\FormFacade::class,
     'Html'     => Collective\Html\HtmlFacade::class,
```
3. buka command prompt lagi dan jalankan perintah : 
```node
 composer require illuminate/html
```
4. lalu ikuti langkah di **menggunakan aplikasi**


