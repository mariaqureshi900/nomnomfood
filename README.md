# Foodpanda Clone Project Documentation

## 1. What Is This Project?
This is a Foodpanda Clone website.

It started as plain HTML and CSS files, where every page was written by hand as a normal web page.

We converted it into a Laravel project so we could add user authentication, which means users can create accounts and sign in safely.

Now users can register, log in, and log out.

The other pages such as restaurants, offers, categories, and contact are still static for now, which means they show fixed content and do not yet pull data from a database.

## 2. What Is Laravel?
Laravel is a PHP framework.

A framework is a ready-made structure that gives you useful tools, so you do not have to build everything from scratch.

Laravel helps with routing, sessions, security, database work, and many other common web tasks.

We used Laravel because the client wanted a PHP backend with MySQL support.

## 3. Project Folder Structure
```text
nomnomfood/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php     ← controls which page loads
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php          ← master layout (navbar + footer)
│       ├── components/
│       │   └── guest-layout.blade.php ← layout for login/register pages
│       ├── home.blade.php             ← homepage
│       ├── restaurants/
│       │   └── index.blade.php        ← restaurants page
│       ├── offers/
│       │   └── index.blade.php        ← offers page
│       ├── categories/
│       │   └── index.blade.php        ← categories page
│       ├── contact/
│       │   └── index.blade.php        ← contact page
│       └── auth/
│           ├── login.blade.php        ← login page
│           └── register.blade.php     ← signup page
├── routes/
│   └── web.php                        ← all URL routes defined here
├── public/
│   ├── css/
│   │   └── style.css                  ← all website styling
│   └── images/                        ← put all images here
├── .env                               ← secret config (DB name, app name)
└── README.md                          ← this file
```

`app/` holds the backend PHP code that controls the site.

`PageController.php` decides which page to show when a user visits a page link.

`resources/views/` contains all Blade template files, which are the HTML pages Laravel renders.

`resources/views/layouts/app.blade.php` is the main shell for the public site, including the navbar and footer.

`resources/views/components/guest-layout.blade.php` is the layout used by guest pages like login and register.

`resources/views/home.blade.php` is the homepage view.

`resources/views/restaurants/index.blade.php` is the restaurants page.

`resources/views/offers/index.blade.php` is the offers page.

`resources/views/categories/index.blade.php` is the categories page.

`resources/views/contact/index.blade.php` is the contact page.

`resources/views/auth/login.blade.php` is the login page.

`resources/views/auth/register.blade.php` is the signup page.

`routes/web.php` is where the public website URLs are defined.

`public/css/style.css` contains the site styling.

`public/images/` stores all images that the website loads in the browser.

`.env` stores project settings such as the app name and database connection details.

`DOCUMENTATION.md` is this guide.

## 4. What Is a Blade Template?
Blade is Laravel's templating system.

Blade files end in `.blade.php` instead of `.html`.

Blade lets you write PHP logic inside HTML by using special syntax.

### Example 1 - Extending a layout
```blade
@extends('layouts.app')
@section('content')
    <!-- your page content here -->
@endsection
```

This means every page extends the master layout, so the navbar and footer appear automatically without copy-pasting the same HTML into every file.

### Example 2 - Auth check in navbar
```blade
@auth
    <span>Welcome, {{ auth()->user()->name }}</span>
    <form method="POST" action="/logout">
        @csrf
        <button>Logout</button>
    </form>
@else
    <a href="/login">Login</a>
    <a href="/register">Sign Up</a>
@endauth
```

`@auth` checks whether the user is logged in, and it shows a different navbar depending on the login state.

### Example 3 - CSRF token
```blade
@csrf
```

Laravel requires this hidden field in every form for security.

It helps protect against fake form submissions from other websites.

Without it, Laravel rejects the form with a 419 error.

### Example 4 - asset() helper
```blade
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<img src="{{ asset('images/logo.png') }}">
```

`asset()` generates the correct URL to the `public/` folder.

You should use this instead of hardcoded file paths.

### Example 5 - route() helper
```blade
<a href="{{ route('home') }}">Home</a>
```

`route()` generates a URL from a named route defined in `web.php`.

It is safer than hardcoding `/home` because if the URL changes later, the link updates automatically.

## 5. How Routing Works
Routing means Laravel decides what to show when someone visits a URL.

Here is one route from `routes/web.php`:

```php
Route::get('/', [PageController::class, 'home'])->name('home');
```

`Route::get` means this route responds to GET requests, which happen when the browser visits a page.

`'/'` is the URL, and it means the homepage.

`PageController::class` tells Laravel to use the PageController class.

`'home'` means Laravel should call the `home()` method inside that controller.

`->name('home')` gives the route the name `home`, so Blade files can use `route('home')`.

All public routes in this project are:

```php
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/restaurants', [PageController::class, 'restaurants'])->name('restaurants');
Route::get('/offers', [PageController::class, 'offers'])->name('offers');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::redirect('/dashboard', '/');

require __DIR__.'/auth.php';
```

The homepage route loads the main landing page.

The restaurants route loads the restaurants page.

The offers route loads the deals page.

The categories route loads the category page.

The contact route loads the contact page.

`Route::redirect('/dashboard', '/')` sends any dashboard visit back to the homepage.

`require __DIR__.'/auth.php'` includes the authentication routes file.

`auth.php` is auto-loaded by Laravel Breeze and contains the `/login`, `/register`, and `/logout` routes, so you do not need to write those manually.

## 6. How PageController Works
A controller is a PHP class that decides what happens when a URL is visited.

Each method in the controller returns a view.

Here is the full `PageController.php` file:

```php
<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function restaurants()
    {
        return view('restaurants.index');
    }

    public function offers()
    {
        return view('offers.index');
    }

    public function categories()
    {
        return view('categories.index');
    }

    public function contact()
    {
        return view('contact.index');
    }
}
```

`return view('home')` loads `resources/views/home.blade.php`.

`return view('restaurants.index')` loads `resources/views/restaurants/index.blade.php`.

In Blade view names, dots replace folder slashes.

That means `restaurants.index` becomes `resources/views/restaurants/index.blade.php`.

## 7. How Authentication Works (Laravel Breeze)
Laravel Breeze is Laravel's official starter kit for login and registration.

It gives us ready-made authentication pages, routes, and controllers.

### Registration flow
Step 1: The user visits `/register`.

Step 2: The user fills in name, email, password, and confirm password.

Step 3: The user clicks Sign Up.

Step 4: Laravel validates the input by checking the email format, the password match, and whether the email is already taken.

Step 5: If the data is valid, Laravel hashes the password, which means it converts the password into a safe encrypted form before saving it.

Step 6: Laravel saves the user in the `users` table in MySQL.

Step 7: Laravel logs the user in automatically.

Step 8: Laravel redirects the user to `/`, which is the homepage.

### Login flow
Step 1: The user visits `/login`.

Step 2: The user enters email and password.

Step 3: The user clicks Login.

Step 4: Laravel checks the email and password against the saved user record.

Step 5: If the details are correct, Laravel logs the user in.

Step 6: Laravel redirects the user to the homepage.

### What a session means
After login, Laravel stores a session cookie in the browser.

On every page request after that, Laravel reads the cookie and knows which user is logged in.

When the user clicks logout, Laravel destroys the session and clears the cookie.

That is how the site remembers the user between page loads.

## 8. The users Table (MySQL)
When `php artisan migrate` runs, Laravel creates database tables from migration files.

The `users` table is created automatically, so you do not need to write SQL by hand.

| Column | Type | Purpose |
| --- | --- | --- |
| id | integer | unique ID for each user |
| name | string | user's full name |
| email | string | user's email, must be unique |
| password | string | hashed password, never plain text |
| remember_token | string | used for the "remember me" feature |
| created_at | timestamp | when the account was created |
| updated_at | timestamp | when the account was last updated |

Laravel creates this table from a migration file inside `database/migrations/`.

## 9. How Images Work
The original HTML used image paths like this:

```html
src="c:\Users\hp\Pictures\burger.jpg"
```

That only works on the original developer's laptop.

On another computer or on a server, those files cannot be found, so the images disappear.

The fix is to place all images inside `public/images/`.

Then, in Blade, use this kind of path:

```blade
{{ asset('images/filename.jpg') }}
```

`asset()` builds the full correct URL, such as `http://localhost:8000/images/filename.jpg`.

This project also uses an `onerror` fallback, which means if an image is missing, the browser shows a grey placeholder automatically.

The student needs to add these image files to `public/images/`:

```text
logo.png
category-italian.jpg
category-chinese.jpg
category-pizza.jpg
category-burger.jpg
category-healthy.jpg
category-desserts.jpg
category-seafood.jpg
restaurant-r1.jpg through restaurant-r16.jpg
offer images such as fiesta, pizza-delight, donuts, refresh, and similar files
```

## 10. How To Run This Project (Step by Step)
Step 1: Navigate to the project folder.

```powershell
cd "c:\Users\USER\Desktop\marias food website\nomnomfood"
```

This command moves your terminal into the Laravel project folder.

Step 2: Install Laravel Breeze, which is the authentication package.

```powershell
composer require laravel/breeze --dev
```

Composer is PHP's package manager, similar to pip for Python or npm for Node.

Step 3: Install Breeze with Blade templates.

```powershell
php artisan breeze:install blade
```

This creates the login and registration views and routes automatically.

Step 4: Set up the database.

```powershell
php artisan migrate
```

This creates the `users` table in MySQL.

Make sure MySQL is running and that the database settings in `.env` are correct.

Step 5: Install frontend dependencies.

```powershell
npm install
```

This downloads the JavaScript and CSS build tools.

Step 6: Build frontend assets.

```powershell
npm run build
```

This compiles the CSS and JavaScript files used by the site.

Step 7: Start the server.

```powershell
php artisan serve
```

This starts the local server at `http://localhost:8000`.

Step 8: Open the browser and visit the site.

```text
http://localhost:8000
```

## 11. .env File — What To Configure
Before running the project, update these lines in `.env`:

```env
APP_NAME="Foodpanda Clone"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=foodpanda_clone
DB_USERNAME=root
DB_PASSWORD=
```

If you use the default XAMPP setup, you can leave `DB_PASSWORD` blank.

First, create the database manually in phpMyAdmin.

Open phpMyAdmin at `http://localhost/phpmyadmin`.

Click New, type `foodpanda_clone`, and click Create.

After that, run `php artisan migrate`.

## 12. Common Errors and Fixes
**Error: 419 Page Expired**

Cause: `@csrf` is missing from a form.

Fix: Add `@csrf` inside every `<form>` tag.

**Error: Class PageController not found**

Cause: The Composer autoload cache is stale.

Fix: Run `php artisan optimize:clear`.

**Error: No application encryption key**

Cause: The `.env` file is missing or `APP_KEY` is empty.

Fix: Run `php artisan key:generate`.

**Error: SQLSTATE: Connection refused**

Cause: MySQL is not running or the `.env` database settings are wrong.

Fix: Start MySQL from the XAMPP control panel and check `DB_USERNAME` and `DB_PASSWORD` in `.env`.

**Error: View not found**

Cause: The Blade file is missing or the path in `return view()` is wrong.

Fix: Check the spelling, for example `return view('restaurants.index')` must point to `resources/views/restaurants/index.blade.php`.

**Error: Images not showing**

Cause: The files are not inside `public/images/` or the filename is wrong.

Fix: Add the image files to `public/images/` with the exact names used in `asset()`.

## 13. What Is NOT Built Yet (Future Scope)
This project is not finished in every possible way yet.

The restaurant detail page is not built, so clicking a restaurant does nothing yet.

There is no menu page, so users cannot browse food items yet.

There is no cart system, so users cannot add items to a cart.

Checkout and payment are not built.

Order history and tracking are not built.

Search is only visual for now.

Category filters are only visual for now.

The contact form does not send data to the backend yet.

Offers are hardcoded instead of coming from a database.

These features would need more controllers, models, migrations, and extra development time.

## 14. Glossary
Laravel: PHP framework for building web applications.

Blade: Laravel's HTML templating system.

Controller: PHP class that handles what happens when a URL is visited.

Route: mapping between a URL and a controller method.

Migration: PHP file that creates or modifies database tables.

Middleware: code that runs before a request reaches the controller, such as an auth check.

Session: temporary storage that remembers who is logged in.

CSRF: security token that protects forms from fake submissions.

asset(): Laravel helper that generates the correct URL for files inside `public/`.

route(): Laravel helper that generates a URL from a named route.

@auth: Blade directive that checks if the user is logged in.

Breeze: Laravel's official starter kit for authentication.

.env: configuration file with secret values such as database credentials and app name.

Artisan: Laravel's command-line tool used with commands like `php artisan ...`.

Composer: PHP package manager used to install Laravel and other packages.