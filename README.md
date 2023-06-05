<p align="center"><img src="https://telkomuniversity.ac.id/wp-content/uploads/2019/03/Logo-Telkom-University-png-3430x1174.png" width="370" alt="Logo Telkom University"></p>
<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="500" alt="Laravel Logo"></p>
<p align="center"><img src="https://raw.githubusercontent.com/SI-RPL-2023/SI4406_F_ProfessionAble/main/Screenshot%20logo/logo%20dari%20wa.jpg" width="500" alt="ProfessionAble Logo Logo"></p>


# Kelompok F - SI-44-06

Repository ini dibuat bertujuan untuk memenuhi tugas besar mata kuliah Rekayasa Perangkat Lunak tahun 2023

# Tentang Bidji Course

website ProfessionAble ini adalah untuk merancang dan membuat bahan informasi lowongan kerja bagi penyandang disabilitas di Kabupaten Bandung berbasis web sebagai alat pengolah informasi penyedia lapangan kerja dan merupakan alat untuk membantu penyandang disabilitas mendapatkan informasi lowongan kerja.

# Anggota Kelompok

| No  | Nama                                                            | NIM        | Role            |
| --- | --------------------------------------------------------------- | ---------- | --------------- |
| 1   | Dhiaulhaq Salman Alfarisi    | 1202202272 | Project Manager |
| 2   | Adnan Nauli Harahap             | 1202202121 | Programmer 1         |
| 3   | Orvalamarva | 1202204249 | Programmer 2     |
| 4   | Alamanda Regita Utami     | 1202204015 | UI/UX Designer 1     |
| 5   | Yose Thimothy Gosal    | 1202204170 | UI/UX Designer 2     |
| 6   | Intania Fadya Safitri                | 1202201312 | System Analyst 1     |
| 7   | Tiara Azuraliyawan      | 1202204211 | System Analyst 2

# Cara Menjalankan Aplikasi

**_Salin perintah ini di terminal :_**

-   Clone project dari github ini

```bash
git https://github.com/SI-RPL-2023/SI4406_F_ProfessionAble.git 
```

-   Copy file `.env.example` dan rename menjadi `.env`

```bash
cp .env.example .env
```

-   Ubah database masing-masing di file `.env` yang sudah di copy tadi

```bash
DB_PORT=mysql_port
DB_DATABASE=nama_database
```

-   Install Composer

```bash
composer install
```

-   Generate Key

```bash
php artisan key:generate
```

-   Lakukan migrasi database

```bash
php artisan migrate:fresh --seed
```

-   Jalankan server

```bash
php artisan serve
```