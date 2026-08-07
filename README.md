# Yapindo TODO List

Aplikasi TODO List simple yang dibuat menggunakan Laravel. Semua data disimpan ke database SQLite jadi todo tetap tersimpan meskipun aplikasi ditutup

## Fitur

- Menambahkan todo baru
- Menandai todo selesai dengan checkbox
- Menghapus todo
- Menampilkan jumlah todo
- Data tersimpan di database SQLite

## Teknologi

- Laravel
- PHP
- SQLite
- HTML
- CSS

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

4. Copy file environment

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Buat file database SQLite

Buat file:

```
database/database.sqlite
```

Lalu ubah pada file `.env`

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

- Ketik kegiatan pada kolom input.
- Klik **Add Todo** untuk menambahkan todo.
- Klik **checkbox** untuk menandai todo selesai.
- Klik **Delete** untuk menghapus todo.

## Database

Project ini menggunakan database **SQLite** dan seluruh data todo tersimpan di database melalui Laravel.