<p align="center">

<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a>

<a href="https://laravel.com" target="_blank"><img src="https://vuejs.org/images/logo.png" width="100"></a>

</p>

## Technologies used

- Laravel 8.28
- Vue.Js 2.6
- PHP 7.4

## Tools used

- Laravel Voyager
- Unit tests
- PHP 7.4

## Best practice used

- PHP Standard Recommendation PSR-12
- Repository design pattern
- Cached API requests for better performance
- Custom artisan console commands
- Commented out code
- Lightweight and maintainable classes
- Laravel Seeders

## Other Stuff

- Index and Show API routes are cached for 1 min (configurable)
- Number of items per page is configurable via backoffice at /admin
    - i.e. TVMaze API has a pagination of 250 per page, now fully customizable
- use _**admin@fashionette.test**_ / _**secret**_ to login to /admin
- Added 404 page for front end

## Steps to install

- Clone project
- `npm install`
- `composer install`
- Configure Database parameters in .env file
- `php artisan project:install`


## TODO if we had more time

- Users authentication
- Favorite show and watch later lists
- Ability to rate a TV Show
