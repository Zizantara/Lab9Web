# 📘 README – Praktikum 9: PHP Modular & Routing
## 🔰 Informasi Praktikum

Mata Kuliah: Pemrograman Web

Praktikum: 9 — PHP Modular

Topik: Modularisasi, Routing, dan Integrasi Database

Dosen: Agung Nugroho,S.Kom.,M.Kom – Universitas Pelita Bangsa

## 📌 Tujuan Praktikum

- Mahasiswa memahami konsep modularisasi program pada PHP.

- Mahasiswa mampu memisahkan layout menjadi header, footer, dan konten.

- Mahasiswa mampu menerapkan routing menggunakan parameter URL.

- Mahasiswa mampu mengimplementasikan CRUD (Create, Read, Update, Delete) secara modular.

- Mahasiswa mampu membuat proyek PHP yang terstruktur, reusable, dan mudah dikembangkan.

📁 Struktur Folder Proyek

<img src="/pict/1.png">

Struktur ini digunakan agar aplikasi menjadi modular, mudah dipahami, dan mengikuti standar industri.

## ⚙️ Penjelasan Setiap File
1. index.php (Routing Utama)

File ini berfungsi sebagai controller utama yang menangani semua routing berdasarkan:


`index.php?page=nama_route`

Router ini memanggil file yang sesuai di dalam folder `views` ataupun `modules`.

Contoh:

`?page=user/list` → modules/user/list.php

`?page=user/add` → modules/user/add.php

`?page=user/update` → modules/user/update.php

Jika halaman tidak ditemukan → menampilkan 404 custom.

2. Folder /views (Tampilan Utama)
✔ header.php

- Berisi struktur layout header HTML

- Navigasi menu

- Memanggil file CSS

- Membuka `<div class="content">`

✔ footer.php

- Penutup layout halaman

- Copyright

- Menutup tag `<div>` dan `<body>`

✔ dashboard.php

- Halaman default ketika aplikasi dibuka

- Berisi konten dashboard

✔ about.php

- Halaman informasi sederhana

3. Folder /config
✔ database.php

- Koneksi ke MySQL menggunakan mysqli

- Menghubungkan aplikasi ke database `latihan1`

- Digunakan oleh semua file CRUD

4. Folder /modules/user (CRUD User)
✔ list.php

- Menampilkan daftar user dari database

- Menampilkan tabel data

- Menyediakan tombol:

    - Tambah User

    - Edit

    - Delete

✔ add.php

- Form untuk menambahkan user baru

- Mengirim data ke `insert.php`

✔ insert.php

- Proses INSERT ke tabel `users`

- Redirect kembali ke list setelah berhasil

✔ edit.php

- Mengambil data user berdasarkan ID

- Menampilkan form edit

- Mengirim ke `update.php`

✔ update.php

- Proses UPDATE data `user`

- Redirect ke list setelah berhasil

✔ delete.php

- Menghapus user berdasarkan ID

- Redirect ke halaman list

Semua file menggunakan database.php agar lebih modular.

## 🎨 CSS (assets/css/style.css)

File style.css digunakan untuk:

- Mendesain tampilan agar lebih modern

- Membuat navigasi lebih rapi

- Mempercantik tabel

- Membuat form lebih profesional

- Menambahkan efek hover dan shadow

Tampilan menjadi jauh lebih elegan dan bersih.

## 🧪 Cara Menjalankan Proyek

1. Letakkan folder di:

`C:\xampp\htdocs\lab9_php_modular`


2. Jalankan Apache & MySQL di XAMPP

3. Buat database:

`latihan1`


4. Buat tabel:

`users (id, nama, email, username, password)`


5. Akses di browser:

`http://localhost/lab9_php_modular/index.php`

## 📷 Screenshot (Tambahkan Sendiri di GitHub)

- Struktur folder

<img src="/pict/1.png">

Halaman dashboard

<img src="/pict/dash.png">

Halaman tambah user

<img src="/pict/add.png">

Halaman edit user

<img src="/pict/edit.png">

Tampilan data tabel

<img src="/pict/image.png">
