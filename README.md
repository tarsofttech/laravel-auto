# Laravel Auto by TARSOFT

![Laravel Auto Logo](icon/Laravel_Auto.png)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tarsoft/laravel-auto.svg?style=flat-square)](https://packagist.org/packages/tarsoft/laravel-auto)
[![Total Downloads](https://img.shields.io/packagist/dt/tarsoft/laravel-auto.svg?style=flat-square)](https://packagist.org/packages/tarsoft/laravel-auto)
[![GitHub](https://img.shields.io/github/license/tarsoft/laravel-auto?style=flat-square)](LICENSE.md)



## Description

**Laravel Auto** is a package designed to automate CRUD (Create, Read, Update, Delete) generation for Laravel applications, making it quick and efficient to scaffold models, controllers, views, and routes with a single command. It supports both web and API generation, allowing developers to focus on application logic rather than repetitive setup.

## Motivation

The process of building CRUD operations is crucial for most applications but can be time-consuming and repetitive. **Laravel Auto** solves this by automating CRUD generation, ensuring consistency across projects and aligning with Laravel's best practices. This package is developed to help developers:

- **Increase Productivity**: Automatically generate essential parts of Laravel applications, saving time and effort on boilerplate code.
- **Maintain Consistency**: Standardize patterns across projects, reducing errors and improving maintainability.
- **Adopt API-First Design**: Easily set up API routes and controllers, supporting modern development practices.
- **Empower All Developers**: With a simple command, this package is accessible to beginners while being flexible enough for experienced developers.

## Features

- Generates a **Model** with fillable attributes
- Generates a **Controller** with CRUD methods for web or API setup
- Creates **Views** (index, show, create, edit) for web routes
- Appends routes to `web.php` or `api.php` based on setup type

## Installation

To install the Laravel Auto package, follow these steps:

1. Install the package using Composer:
   ```bash
   composer require tarsoft/laravel-auto
   ```

2. Publish the stubs (optional):
   ```bash
   php artisan vendor:publish --tag=tarsoft-stubs
   ```

## Usage

### Generating Web CRUD
To generate a CRUD structure for a model (e.g., `Blog`) with web controllers and views, run:

```bash
php artisan auto:crud Blog
```

This will create:
- `Blog` model (in `app/Models/`)
- `BlogController` (in `app/Http/Controllers/`)
- Views (`index`, `show`, `create`, `edit`) under `resources/views/blogs/`
- Web routes in `routes/web.php`

### Generating API CRUD
For API-only routes and controllers, use the `--api` flag:

```bash
php artisan auto:crud Blog --api
```

This will create:
- `Blog` model (in `app/Models/`)
- `BlogController` (in `app/Http/Controllers/API/`)
- API routes in `routes/api.php`

## License

Laravel Auto is open-source software licensed under the [MIT license](LICENSE.md).