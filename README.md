# WEB GALLERY

## Tentang Website

Simpelnya ini hanyalah Web yang saya buat dengan mengikuti style instagram, facebook dan twitter namun versi low budget yang sangat minim. meskipun tidak terlalu mirip, tapi fungsi yang ditonjolkan dari web ini adalah mampu memuat gallery dan user lain bisa melihat gambar apa yang kita posting.

## Fitur

Untuk Fitur masih minim:
- sign up
- log in
- log out
- multiuser
- add poto
- add album
- edit profile
- add comment
- edit comment
- delete comment
- like
- dll

## Tampilan Website

![Screenshot (1)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/3e1dd715-676f-420f-97d7-690c3c2429ee)
![Screenshot (2)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/102e2605-cd48-4896-820b-3d1b444257cc)
![Screenshot (3)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/65a4d1fb-555b-4b9a-88b1-faabe2c5af5c)

## ERD, Relasi dan UML Use Case

- ERD

![ERD](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/a10457dc-efdb-4cef-ba31-23b29b32c167)

- Relasi

![RELASI](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/6e5d0d97-9232-4458-aacf-8a580e76f6ce)

- UML

![UML](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/4ece3c3e-46bb-4802-8657-ec691cd6b2b3)

## Prasyaratan

- PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (MariaDB dengan v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, Safari, Opera, Microsoft Edge dll)

## Instalasi
1. Clone Repository
```
(https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha)
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=laravel_gallery
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate --seed
```

7. Buat Storage Link
```
php artisan storage:link
```

8. jangan lupa menginstall NPM
```
npm install
```
lalu jalankan
```
npm run dev
```

8. Jalankan Serve
```
php artisan serve
```
