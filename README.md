<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# API Platform for Laravel Demo (Game Collection)

This is a demo Laravel application showcasing how to build a RESTful API for managing video game collections using API Platform and Laravel.

## Features

- RESTful API endpoints for managing video games
- Integration with API Platform for standardized API responses
- Game entity with properties like title, genre, platform, release date
- Collection management features
- Full CRUD operations
- API documentation via OpenAPI/Swagger
- Authentication and authorization
- Pagination and filtering

## Requirements

- PHP 8.2 or higher
- Composer
- Laravel 11.x
- Database (MySQL by default)

## Installation

```bash
# Clone the repository
git clone https://github.com/jpcaparas/demo-laravel-api-platform.git

# Install dependencies
composer install

# Configure environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Seed demo data
php artisan db:seed