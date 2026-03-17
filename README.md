Installasi 

1. Clone/Download Repository =
   git clone https://github.com/TiyasTasya/belajarcoding.git
   cd belajarcoding
   
2. Install Dependencies =
   composer install

3. Konfigurasi Environment =
   -Jika belum ada file .env, copy dari .env.example:'
   -Edit file .env dan sesuaikan konfigurasi database:
       DB_CONNECTION=mysqk
       DB_HOST=127.0.0.1
       DB_PORT=3306
       DB_DATABASE=db_laravel
       DB_USERNAME=root
       DB_PASSWORD=

4. Buat Database =
   Buat database baru di MySQL/MariaDB:
       CREATE DATABASE db_laravel;
   
6. Jalankan Migration =
   php artisan migrate

7. Jalankan Aplikasi =
   php artisan serve
