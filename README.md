# Yapindo TODO List

Aplikasi TODO List sederhana yang dibuat menggunakan Laravel. Data todo disimpan ke database SQLite sehingga setiap data yang ditambahkan, diubah, atau dihapus akan langsung tersimpan.

## Fitur

- Menambahkan todo baru
- Menandai todo sebagai selesai
- Menghapus todo
- Data tersimpan di database SQLite

## Requirement

- PHP 8.3 atau lebih baru
- Composer
- Node.js dan npm

## Cara Menjalankan

1. Clone repository

```bash
git clone https://github.com/marcellofardhan6-cell/todo-list.git
```

2. Masuk ke folder project

```bash
cd todo-list
```

3. Install dependency

```bash
composer install
npm install
```

4. Copy file `.env`

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Buat file database

```
database/database.sqlite
```

Lalu ubah `.env` menjadi:

```env
DB_CONNECTION=sqlite
```

7. Jalankan migration

```bash
php artisan migrate
```

8. Jalankan aplikasi

```bash
php artisan serve
```

Buka browser:

```
http://127.0.0.1:8000
```

## Cara Menggunakan

- Tambahkan todo baru.
- Klik **Complete** untuk menyelesaikan todo.
- Klik **Delete** untuk menghapus todo.

## Framework

- Laravel
- Bootstrap
- SQLite