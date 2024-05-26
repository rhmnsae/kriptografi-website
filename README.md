# Website Kriptografi With Laravel

### how to use
    1. Unduh repository ini
    2. Jalankan "composer install"
    3. Jalankan "cp .env.example .env"
    4. Jalankan "php artisan key:generate"
    5. Jalankan "php artisan migrate:fresh"
    6. Setting .env file (Sub judul selanjutnya)
    7. Selanjutnya file setting file .env di bawah ini

### How to set the .env file
    1. APP_DEBUG=false
    2. APP_URL=https://sesuaikan_url_anda.com *disarankan / http://sesuaikan_url_anda.com
    3. Tambahkan FORCE_HTTPS=true(jika menggunakan protokol https *disarankan) / false(jika menggunakan protokol http)
    4. DB_HOST=host_mysql
    5. DB_PORT=3306 / sesuaikan port mysql anda
    6. DB_DATABASE=kriptografi / sesuaikan nama database anda
    9. APP_ENV=local / production / testing (sesuaikan dengan lingkungan anda)

### Running a website
    php artisan serve
