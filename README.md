# Dr. Aquatic - Penjualan ikan hias dan koral 


## Donwload

Clone Projek

```bash
  git clone https://github.com/abdulaziz-m5u/toko-online-laravel.git nama_projek
```

Masuk ke folder dengan perintah

```bash
  cd nama_projek
```

-   Copy .env.example menjadi .env kemudia edit database dan api key nya

```bash
    cp .env.example .env
```

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate --seed
```

```bash
    php artisan storage:link
```

#### Login

-   email = admin@min
-   password = 123
