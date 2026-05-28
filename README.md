# Laravel JWT Authentication API




# Git Commit History

| Commit ID | Commit Message                                                                           | Description                                                                                                                                                       |
| --------- | ---------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `4bac242` | Resolve the conflict jwt due to csrf in browser or postman and clean maintained all code | Fixed JWT authentication conflict caused by CSRF protection in browser and Postman requests. Refactored and cleaned project structure for better maintainability. |
| `1245e04` | modified and improve view pages and added route , migration for books                    | Improved authentication and book management view pages. Added routes and database migration for books module.                                                     |
| `fad32f5` | added middleware and AuthController for register login and profile                       | Added authentication middleware and implemented AuthController with register, login, and profile APIs.                                                             |
| `71447ed` | add migration for user table also model for user                                         | Added migration for users table and created User model configuration.                                                                                             |
| `a397a50` | generated jwt token and added routes for auth                                            | Configured JWT authentication and added authentication API routes.                                                                                                |
| `8278665` | first commit by raju                                                                     | Initial Laravel project setup and base configuration.                                                                                                             |
 ---

# Postman Collection

```bash
bms-by-raju.postman_collection.json
```

Import collection into Postman using `Import` button.



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

1. Open database folder:

```bash
https://github.com/RajukrRaja/bms-by-raju/database
```

2. Open file:

```bash
database/bms_by_raju (1).sql
```

3. Click `Raw`

4. Press `Ctrl + S` to download the database file


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


