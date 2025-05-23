## Pre-requisites

- Node.js & Composer
- XAMPP

## Setup & Run

### Clone the repo

```bash
gh repo clone 1-kaiser/technical-exam-elite
cd technical-exam-elite
```

### PHP

```bash
php <filename.php>
```

### MYSQL

- Start the Apache Server & MySQL on XAMPP
- Create a database then import the neccesary file
- Run the queries on SQL tab using queries.sql

### Setup Laravel

```bash
composer install
php artisan migrate
php artisan migrate:fresh --seed
php artisan key:generate
npm install
```

- to run:

```bash
npm run dev
php artisan serve
```
