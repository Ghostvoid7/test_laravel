# Laravel Blog Application

This is a simple blog application built with Laravel. It includes user authentication and CRUD operations for articles.

## Requirements

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL or SQLite
- Git

## Installation

### 1. Clone the repository

    git clone git@github.com:Ghostvoid7/test_laravel.git
    cd laravel_blog

**2. Install dependencies**
Composer dependencies

    composer install

Node.js dependencies

    npm install

**3. Configure environment variables**
Copy the .env.example file to .env and set your environment variables.

    cp .env.example .env

Edit the .env file to match your database configuration:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

**4. Generate application key**

    php artisan key:generate
  
**5. Run migrations**
Run the database migrations to set up your database schema.

    php artisan migrate

**6. Build assets**
Build the frontend assets using Vite.

    npm run dev

**7. Start the development server**
Start the Laravel development server.

    php artisan serve

