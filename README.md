<p align="center"><img src="https://github.com/user-attachments/assets/3a755e21-d888-43de-aa6f-5e01fd680858" /></p>

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

- [Docker](https://docs.docker.com/) w/ [Compose](https://docs.docker.com/compose/)
- [Composer](https://getcomposer.org/)

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

## Authentication

### Generate a new Laravel Passport key pair
```bash
sail artisan passport:keys --force
```

### Generate a new Laravel Passport PKCE OAuth 2.0 client

(To learn more about PKCE, see [OAuth 2.0 for Browser-Based Apps](https://laravel.com/docs/11.x/passport#code-grant-pkce))

ELI12: _PKCE is like having a secret handshake that changes every time you meet - you make up a special code, scramble it before sending it to your friend, then prove it's really you by showing you know the original code that makes that scrambled version! 🤝✨_

```bash
sail artisan passport:client --public --redirect_uri=http://localhost/vendor/api-platform/swagger-ui/oauth2-redirect.html
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
