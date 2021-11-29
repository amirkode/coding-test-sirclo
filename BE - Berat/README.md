Project ini saya menggunakan bahasa PHP versi 7.4 karena saya banyak project yang saya selesaikan menggunakan framework laravel untuk mengembangkan aplikasi backend. Namun, project ini dibuat sepenuhnya tanpa framework laravel.

###**Cara Installasi & Menjalankan Project**

1. Install PHP 7.4
2. Install Composer
3. Siapkan Database Mysql atau lainnya. Lalu, pastikan konfigurasi sudah benar di ``config/db_config``
4. Clone Project
5. Jalankan ``composer install``
6. Jalankan ``composer refresh-data`` untuk migrasi database dan seed data
7. Masuk ke directory /public dan jalankan ``php -S localhost:[port]``
8. http://localhost:[port] bisa dibuka via browser


###**Cara Testing Project**

Untuk testing, saya menggunakan library tambahan yaitu **Codeception**

1. Jalankan ``composer test``
2. Jika, tidak bisa coba jalankan ``php vendor/bin/codecept bootstrap``. Lalu, kembali ke nomor 1