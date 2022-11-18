## TUTORIAL INSTALL/RUN PROJECT LARAVEL RESEPKU

(Laravel 9 PHP Version : PHP 8.1.10 (cli)) <br>
Requirement sebelum instalasi :
1. Composer
2. XAMPP (include PHP)
3. Same or higher version of PHP

Cara Instalasi Project Laravel RESEPKU

1. Buat folder untuk penempatan file laravel (nama bebas ex. resepku). Lalu masuk kedalam folder kosong tersebut.
2. Buka CMD dalam folder tersebut dan jalankan perintah " git clone https://github.com/Bima1301/resepku.git " (tanpa tanda petik).
3. Maka akan terdapat folder dengan nama "resepku". Jika terjadi eror pastikan untuk cek versi PHP apakah sudah sama atau belum.
4. Setelah proses clone selesai. Selanjutnya adalah run perintah " cd resepku " lalu run lagi perintah " composer intall " pada CMD.
5. Jalankan software XAMPP dan lakukan Start pada Apache dan MySQL.
6. Copy file " .env.example" dan paste pada tempat yang sama, setelah itu ubah nama menjadi " .env ". Buka file " .env" tersebut dan lakukan konfigurasi didalamnya seperti database, nama aplikasi, dsb.<br>
Note : buat database baru terlebih dahulu dengan nama yang sama yang terdapat pada file .env
6. Jalankan perintah " php artisan config:cache " setiap kali ada perubahan pada file " .env" .
8. Selanjutnya adalah melakukan migrasi database dengan menjalankan perintah " php artisan migrate " .
9. Jalankan perintah " php artisan key:generate ", lalu jalankan perintah " php artisan config:cache " lagi.
10. Lalu jalankan perintah " npm install ", selanjutnya jalankan perintah " npm run dev " (jangan tutup CMD).
11. Buka CMD baru pada folder berisi berkas file project dan jalankan perintah " php artisan serve " .
12. Buka link project yang tersedia ke browser (biasanya http://127.0.0.1:8000).


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
