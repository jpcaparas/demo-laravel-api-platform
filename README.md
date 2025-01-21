<p align="center"><img src="https://github.com/user-attachments/assets/3a755e21-d888-43de-aa6f-5e01fd680858" /></p>

# API Platform for Laravel Demo (Game Collection)

This is a demo Laravel application (running on [Laravel Sail](https://laravel.com/docs/11.x/sail) for isolation) showcasing how to build a RESTful API for managing video game collections using [API Platform](https://api-platform.com/docs/laravel/) and Laravel.

API Platform is a powerful and flexible API framework that allows you to build modern APIs in PHP with absolute ease. It removes the endless boilerplate code and provides a set of tools to help you build APIs faster and more efficiently.

For example, if you want to expose a set of CRUD operations for a resource, you can do so with just a few lines of code. API Platform will automatically generate the necessary routes, controllers, and responses for you.

## Features

- [x] RESTful API endpoints for managing video games
- [x] Integration with API Platform for standardized API responses
- [x] Game entity with properties like title, description, collection, reviews, and release date
- [x] Full CRUD operations
- [x] API documentation via OpenAPI/Swagger
- [x] oAuth 2.0 PKCE authentication

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

### Register for an account

Go to http://localhost/register and create a new account. This will be used for PKCE OAuth 2.0 authentication.

### Generate a new Laravel Passport PKCE OAuth 2.0 client

(To learn more about PKCE, see [OAuth 2.0 for Browser-Based Apps](https://laravel.com/docs/11.x/passport#code-grant-pkce))

ELI12: _PKCE is like having a secret handshake that changes every time you meet - you make up a special code, scramble it before sending it to your friend, then prove it's really you by showing you know the original code that makes that scrambled version! 🤝✨_

```bash
sail artisan passport:client --public --name=PKCE_CLIENT --redirect_uri=http://localhost/vendor/api-platform/swagger-ui/oauth2-redirect.html
```

(When prompted to enter the user ID of the user to associate with the client, leave it blank so the client can be associated with all users.)

## Testing it out

You can now access the API at `http://localhost/api`.

However, since the routes are protected by authentication, you won't be able to access them directly. 

![image](https://github.com/user-attachments/assets/b55c9548-b37a-4e82-afed-a2784b79d213)

You'll need to use the Swagger UI to authenticate and access the API.

On the top right of the Swagger UI, click the _Authorize_ button and enter `1` as the PKCE client ID (the one we created earlier). No need to enter a client secret.

![image](https://github.com/user-attachments/assets/1581f496-565c-4866-bce0-e0ceca33d5cb)

It will prompt you to log in with the account you created earlier.  

This will create a PKCE OAuth 2.0 token (secret-less) that you can use to access the API.

The token is then automatically appended as a auth header to every request made on the Swagger UI to give you access to the protected API routes:

![image](https://github.com/user-attachments/assets/5fed136d-7d25-4369-a14c-0d2d2b861afa)

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
