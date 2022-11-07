# Website Profil Pribadi dengan CRUD Sederhana

Untuk memenuhi tugas UTS mata  kuliah Pemogaraman Web Sistem Informasi Semester 3 UIN SUSKA RIAU. 

Nama    : M. Wira Ade Kusuma

NIM     : 12150311480

Kelas   : 3 A Sistem Informasi

## Fitur Yang Tersedia
* Menambah Sertifikat
* Mengedit Sertifikat
* Menghapus Sertifikat
* Menambah Aktifitas
* Mengedit Aktifitas
* Menghapus Aktifitas
  
## Konfigurasi Database
Konfigurasi yang digunakan dalam kode program ini adalah PDO. Kode koneksi ke database berada dalam folder **/backend/getConnection.php**

Kode getConnection.php
```<?php

function getConnection():PDO{
    $host="localhost";
    $port= 3306;
    $database= "uts-peweb";
    $username="admin"; // sesuaikan dengan username mysql
    $password="!Password123"; // sesuaikan dengan password mysql

    return new PDO("mysql:host=$host:$port;dbname=$database",$username,$password);
}
```

Anda dapat mengubah kode diatas sesuai dengan kebutuhan.

### Cara mengimport database
Buat database baru dengan nama **uts-peweb**. Lalu klik **import** pada phpmyadmin, masukan file **uts-peweb.sql** yang telah disediakan.


## Penjelasan Hirarki Folder
* /backend -> berisi semua kode proses menggunakan php
* /bootstrap -> berisi library bootstrap
* /css -> berisi style css kustom
* /frontend -> berisi kode program tampilan
* /img -> berisi gambar-gambar yang ditampilkan dalam website ini
* /js -> berisi kode library particle.js, lightgallery.js, typed.js


## Teknologi Yang Digunakan
* HTML
* CSS
* Js
* PHP
* Bootstrap
* Particle.js
* Lightgallery.js
* Typed.js

## Lisensi
**Lisensi Publik Creative Commons Atribusi-NonKomersial 4.0 Internasional**

**Anda diperbolehkan:**
* Berbagi — menyalin dan menyebarluaskan kembali materi ini dalam bentuk atau format apapun;
* Adaptasi — menggubah, mengubah, dan membuat turunan dari materi ini

Pemberi lisensi tidak dapat mencabut ketentuan di atas sepanjang Anda mematuhi ketentuan lisensi ini.

**Berdasarkan ketentuan berikut:**
* Atribusi — Anda harus mencantumkan nama yang sesuai, mencantumkan tautan terhadap lisensi, dan menyatakan bahwa telah ada perubahan yang dilakukan. Anda dapat melakukan hal ini dengan cara yang sesuai, namun tidak mengisyaratkan bahwa pemberi lisensi mendukung Anda atau penggunaan Anda.

* NonKomersial — Anda tidak dapat menggunakan materi ini untuk kepentingan komersial.

Tidak ada pembatasan tambahan — Anda tidak dapat menggunakan ketentuan hukum atau sarana kontrol teknologi yang secara hukum membatasi orang lain untuk melakukan hal-hal yang diizinkan lisensi ini.