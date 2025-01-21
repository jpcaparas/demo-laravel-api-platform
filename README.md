<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://api-platform.com/docs/laravel/images/empty-docs.png" width="600" alt="API Platform example"></a></p>

# API Platform for Laravel Demo (Game Collection)

This is a demo Laravel application (running on [Laravel Sail](https://laravel.com/docs/11.x/sail) for isolation) showcasing how to build a RESTful API for managing video game collections using [API Platform](https://api-platform.com/docs/laravel/) and Laravel.

## Features

- [x] RESTful API endpoints for managing video games
- [x] Integration with API Platform for standardized API responses
- [x] Game entity with properties like title, description, collection, reviews, and release date
- [x] Full CRUD operations
- [x] API documentation via OpenAPI/Swagger
- [ ] Authentication and authorization

## Requirements

- Docker w/ Laravel Sail
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
```bash
cp .env.example .env
```

```bash
composer install
```

### Start the web and DB containers
```bash
sail up
```

### Configure environment
```bash
sail artisan key:generate
```

### Run migrations
```bash
sail artisan migrate --seed
```

## Testing it out

You can now access the API at `http://localhost/api`.

## Wrapping up

### Stopping the containers
```bash
sail down --volumes
```

## Resources

- [API Platform for Laravel](https://api-platform.com/docs/laravel/)
  - [Customising the API](https://api-platform.com/docs/laravel/#customizing-the-api)
  - [Adding filters](https://api-platform.com/docs/laravel/#adding-filters)
  - [Adding authentication](https://api-platform.com/docs/laravel/#authentication)
- [Parameters & filters](https://api-platform.com/docs/laravel/filters/)
