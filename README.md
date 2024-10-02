# HRMS

This document outlines the software requirements for Version 1 of the HRMS enhancement project. The focus is on delivering essential job seeker, organisational, and HRMS functionalities to improve hiring and employee management processes.

## Features



## Requirements

- PHP 8.0 or higher
- Composer
- Node.js and npm
- A web server (e.g., Apache, Nginx)
- MySQL or any other supported database

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/emon1432/hrms.git
cd hrms
```

### 2. Install dependencies

#### Install PHP dependencies:

```bash
composer install
or
composer update
```

#### Install Node.js dependencies:

```bash
npm install
npm run build
```

### 3. Set up the environment

- Duplicate `.env.example` to create `.env`:

```bash
cp .env.example .env
```


### 4. Generate the application key

```bash
php artisan key:generate
```

### 5. Configure the .env File
Open the `.env` file and configure your database and other environment variables.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 6. Run migrations

To set up the database structure, run:

```bash
php artisan migrate:fresh --seed
```


### 8. Start the development server

Run the following command to start your local development server:

```bash
php artisan serve
```

Now, you can access the application at `http://127.0.0.1:8000`.

## Additional Commands


### Clearing cache

```bash
php artisan optimize:clear
```
### Some extra route for optimization.
To cache clear :
```bash
http://127.0.0.1:8000/clear
```
To migrate fresh seed :
```bash
http://127.0.0.1:8000/migrate
```
To make seed :
```bash
http://127.0.0.1:8000/iseed
```
To update composer :
```bash
http://127.0.0.1:8000/composer
```

### Contributors 
- <a href="https://emonideas.com" target="_blank">Md. Khairul Islam Emon</a>
