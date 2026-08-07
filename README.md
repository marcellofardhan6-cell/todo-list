# Yapindo TODO List

A simple Laravel-based TODO application with a database-backed backend and a responsive frontend.

## Features
- Create new todos
- Mark todos as completed
- Delete todos
- Persist all data in the database

## Requirements
- PHP 8.3+
- Composer
- Node.js + npm
- SQLite support enabled in PHP

## Setup
1. Clone the repository
2. Install PHP dependencies:
   ```bash
   composer install
   ```
3. Install frontend dependencies:
   ```bash
   npm install
   ```
4. Copy the environment file and generate an application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Run the database migration:
   ```bash
   php artisan migrate
   ```
6. Build the frontend assets:
   ```bash
   npm run build
   ```

## Run the application
```bash
php artisan serve
```
Then open http://localhost:8000

## Tests
Run the feature tests:
```bash
php artisan test --filter=TodoTest
```
