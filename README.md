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

![Screenshot (309)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/08d58be2-4cd1-4635-881f-2f4e93ce4c91)

![Screenshot (310)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/5e823005-1d09-4e5b-8df7-ba319ff9bb4e)

![Screenshot (311)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/fd9d62ad-c02c-47ba-8a4c-60165edd4a8b)

## ERD, Relasi dan UML Use Case

- ERD

![ERD](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/a10457dc-efdb-4cef-ba31-23b29b32c167)

- Relasi

![RELASI](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/24b09bb6-cf68-4388-86e7-8eb01e8b3688)

- UML

![UML](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/7ac0f1ef-8567-45fb-8f9f-85ff9b7dedb7)

## Prasyaratan

- PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (MariaDB dengan v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, Safari, Opera, Microsoft Edge dll)

## Instalasi
1. Clone Repository
```
https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha
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
