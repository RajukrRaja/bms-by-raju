# Laravel JWT Authentication API

<p align="center">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="320" alt="Laravel Logo">
</p>

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-12-red" alt="Laravel">
    <img src="https://img.shields.io/badge/PHP-8.2-blue" alt="PHP">
    <img src="https://img.shields.io/badge/JWT-Authentication-green" alt="JWT">
    <img src="https://img.shields.io/badge/API-REST-orange" alt="REST API">
    <img src="https://img.shields.io/badge/License-MIT-black" alt="License">
</p>

---

# About Project

This project is a Laravel REST API application with JWT Authentication support and Book CRUD APIs.

Features included:

* JWT Authentication
* User Registration & Login
* Protected APIs
* User Profile
* Logout System
* Book CRUD APIs
* MySQL Database
* JSON API Responses
* Blade Authentication Pages
* Cookie Based Authentication

---

# Tech Stack

| Technology | Version        |
| ---------- | -------------- |
| PHP        | 8+             |
| Laravel    | 12             |
| MySQL      | Latest         |
| JWT Auth   | tymon/jwt-auth |

---

# Requirements

Make sure the following are installed:

* PHP 8+
* Composer
* MySQL
* Git

Check installed versions:

```bash
php -v
composer -V
mysql --version
```

---

# Project Setup

## 1. Clone Repository

```bash
git clone https://github.com/your-username/project-name.git
```

---

## 2. Open Project Directory

```bash
cd project-name
```

---

## 3. Install Dependencies

```bash
composer install
```

---

# Database Setup

## Download Database File

Direct download link:

```bash
https://github.com/your-username/your-repository/raw/main/database/bms_by_raju%20(1).sql
```

---

## Create Database

Create database using same database name:

```sql
CREATE DATABASE bms_by_raju;
```

---

## Import Database

Import SQL file using terminal:

```bash
mysql -u root -p bms_by_raju < "database/bms_by_raju (1).sql"
```

---

## Import Using phpMyAdmin

1. Open phpMyAdmin
2. Create database `bms_by_raju`
3. Click Import
4. Select `bms_by_raju (1).sql`
5. Click Go

---

# Environment Setup

## Copy Environment File

```bash
cp .env.example .env
```

---

## Configure `.env`

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bms_by_raju
DB_USERNAME=root
DB_PASSWORD=
```

---

# Generate Application Key

```bash
php artisan key:generate
```

---

# JWT Setup

## Install JWT Package

```bash
composer require tymon/jwt-auth
```

---

## Publish JWT Configuration

```bash
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```

---

## Generate JWT Secret

```bash
php artisan jwt:secret
```

JWT secret will automatically be added inside `.env`

```env
JWT_SECRET=your_generated_secret
```

---

# API Prefix Removed

Default Laravel `/api` prefix has been removed from `bootstrap/app.php`.

```php
->withRouting(
    web: __DIR__.'/../routes/web.php',
    api: __DIR__.'/../routes/api.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
    apiPrefix: '',
)
```

---

# Run Migration

```bash
php artisan migrate
```

---

# Start Development Server

```bash
php artisan serve
```

Application URL:

```bash
http://127.0.0.1:8000
```

---

# API Base URL

```http
http://127.0.0.1:8000
```

---

# Authentication APIs

| Method | Endpoint         | Controller Method | Description                    |
| ------ | ---------------- | ----------------- | ------------------------------ |
| POST   | `/auth/register` | `register()`      | Register new user              |
| POST   | `/auth/login`    | `login()`         | Login user                     |
| GET    | `/auth/profile`  | `profile()`       | Get authenticated user profile |
| POST   | `/auth/logout`   | `logout()`        | Logout authenticated user      |

---

# Book APIs

| Method | Endpoint             | Controller Method  | Description            |
| ------ | -------------------- | ------------------ | ---------------------- |
| POST   | `/books`             | `addBook()`        | Create new book        |
| GET    | `/books`             | `getBooks()`       | Fetch all books        |
| GET    | `/books/{id}`        | `getSingleBook()`  | Fetch single book      |
| GET    | `/update-books/{id}` | `updateBookView()` | Fetch update book view |
| PUT    | `/books/{id}`        | `updateBook()`     | Update book            |
| DELETE | `/books/{id}`        | `deleteBook()`     | Delete book            |

---

# Web Routes

| Method | Route                 | Description       |
| ------ | --------------------- | ----------------- |
| GET    | `/auth/register-page` | Register page     |
| GET    | `/auth/login-page`    | Login page        |
| GET    | `/auth/profile`       | User profile page |

---

# Authentication Header

Protected APIs require Bearer Token.

```http
Authorization: Bearer your_token
```

---

# Useful Commands

## Start Server

```bash
php artisan serve
```

---

## Run Migration

```bash
php artisan migrate
```

---

## Fresh Migration

```bash
php artisan migrate:fresh
```

---

## Clear Cache

```bash
php artisan optimize:clear
```

---

## Clear Routes Cache

```bash
php artisan route:clear
```

---

## Show Routes

```bash
php artisan route:list
```

---

# Common Errors

## JWT Secret Missing

Run:

```bash
php artisan jwt:secret
```

---

## Route Not Found

Run:

```bash
php artisan route:clear
php artisan cache:clear
```

---

## Database Connection Error

Check `.env` credentials:

```env
DB_DATABASE=bms_by_raju
DB_USERNAME=root
DB_PASSWORD=
```

---

## Migration Issues

Run:

```bash
php artisan migrate:fresh
```

---

# Project Structure

```bash
app/
├── Http/
│   └── Controllers/
│       └── Api/
│           ├── AuthController.php
│           └── BookController.php

database/
├── bms_by_raju (1).sql

resources/
├── views/
│   └── auth/

routes/
├── api.php
├── web.php
```

