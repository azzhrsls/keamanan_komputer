<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Deskripsi
Ini merupakan website yang digunakan untuk membooking studio foto GAZEWHY yang berada di lemah abang Indramayu secara online, pada website ini kita juga dapat melihat profil mengenai gazewhy sendiri.

Spesifikasi
- Laravel versi 8.75
- PHP 8.1.12
- PhpMyAdmin(MySQL) 5.2.0

Cara Install

- clone projek dengan perintah git clone https://github.com/azzhrsls/keamanan_komputer.git
- Buka halaman GitHub repository dari project GAZEWHY. Klik tombol "Code" yang terdapat di sebelah kanan atas, kemudian pilih "Download ZIP" atau salin link HTTPS yang terdapat di bawahnya. Jika Anda memilih "Download ZIP", ekstrak file yang telah diunduh ke dalam folder lokal komputer Anda. Jika Anda memilih salin link HTTPS, buka terminal dan jalankan perintah git clone <link HTTPS> untuk mengunduh repository ke dalam folder lokal. Buka terminal dan pindah ke direktori tempat file project diunduh atau dikloning dengan perintah cd <nama_folder>.
- Jika project menggunakan dependensi, pastikan Anda telah menginstal dependensi-dependensi tersebut dengan menjalankan perintah npm install atau composer install di terminal.
- Salin file .env.example dengan perintah cp .env.example .env (untuk Mac dan Linux) atau copy .env.example .env (untuk Windows).
- Buka file .env dan atur pengaturan database sesuai dengan konfigurasi database yang dimiliki.
- Jika database belum dibuat, buatlah database baru di server Anda.
- Jalankan perintah php artisan migrate untuk menjalankan migration dan membuat tabel-tabel di dalam database.
- Jika ada data yang perlu dimasukkan ke dalam database, jalankan perintah php artisan db:seed untuk menjalankan seeder.
- Jalankan perintah php artisan serve untuk menjalankan aplikasi di server lokal Anda.

Credential 
Login 
- email : admin@gmail.com
- password : admin

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
