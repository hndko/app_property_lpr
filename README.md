# Landing Pages & Admin Dashboard PT Ladang Padi Resor

Aplikasi penjualan apartemen sederhana

## Installation

```bash
  git clone https://github.com/hndko/app_property_lpr.git
  composer Install
  php artisan key:generate
  php artisan storage:link
  cp .env.example .env
```

## Documentation

Change .env database

```bash
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

To

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_property_lpr
DB_USERNAME=root
DB_PASSWORD=
```

And Then

```bash
php artisan migrate
php artisan serve
```

## Support

For support, email hd.doko22@gmail.com or join our KodeKreatif channel.
