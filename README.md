<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://api-platform.com/docs/laravel/images/empty-docs.png" width="600" alt="API Platform example"></a></p>

# API Platform for Laravel Demo (Game Collection)

This is a demo Laravel application showcasing how to build a RESTful API for managing video game collections using [API Platform](https://api-platform.com/docs/laravel/) and Laravel.

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

## Setup

### Clone the repository
```bash
git clone https://github.com/jpcaparas/demo-laravel-api-platform.git
```

### Install dependencies
```
composer install
```

### Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

### Run migrations
```bash
php artisan migrate
```

### Seed demo data
```bash
php artisan db:seed
```

## Testing it out

Once everything is set up, you can start the development server and test the API endpoints.

```bash
php artisan serve
```

You can now access the API at `http://localhost:8000/api`.

## Resources

- [API Platform for Laravel](https://api-platform.com/docs/laravel/)
  - [Customising the API](https://api-platform.com/docs/laravel/#customizing-the-api)
  - [Adding filters](https://api-platform.com/docs/laravel/#adding-filters)
  - [Adding authentication](https://api-platform.com/docs/laravel/#authentication)
- [Parameters & filters](https://api-platform.com/docs/laravel/filters/)