<p align="center">

<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a>

<a href="https://laravel.com" target="_blank"><img src="https://vuejs.org/images/logo.png" width="100"></a>

</p>

#### Quick overview

[Video overview here](https://drive.google.com/file/d/1xzzKglxmpMAIHynWXB3SRQqeFYC0_7AG/view?usp=sharing)

# Technologies used

- Laravel 8.28
- Vue.Js 2.6
- PHP 7.4

# Tools used

- Laravel Voyager
- Unit tests
- knuckleswtf/scribe for the API docs

# Best practice used

- PHP Standard Recommendation PSR-12
- Repository design pattern
- Cached API requests for better performance
- Custom artisan console commands
- Commented out code
- Lightweight and maintainable classes
- Laravel Seeders
- API documentation for API consumers
- Pull requests and code review (Well, here I accepted it for myself at https://github.com/nyssLab/fashionette/pull/1)
- Laravel debugbar for better dev control (from barryvdh/laravel-debugbar)

# Helpful Stuff

- Index and Show APIs are cached for 1 min (configurable) and to bypass the limit of 20 requests / 10 sec 
- Number of items per page is configurable via backoffice at /admin
    - i.e. TVMaze API has a pagination of 250 per page, now fully customizable (example: 10/page)
- use _**admin@fashionette.test**_ / _**secret**_ to login to /admin
- Added 404 page for front end
- API docs at /docs

# Project structure
#### Front end
- Home page at / : for TV Shows listing
- Search page using the search input in header
- Single TV Show page by clicking any item
- About us page (dummy)
- 404 page for any other route
#### Back end
- /admin for administration (use _**admin@fashionette.test**_ / _**secret**_ to login to /admin)
- /api/shows?lastId=0 for TVShows listing (lastId : last TVShow id for simpler pagination)
- /api/shows/search?q=deadwood to search for TV Shows (q: search word)
- /api/shows/{id} to show a specific TVShow (example /api/shows/3 )


# Steps to install

- Clone project
- `npm install`
- `composer install`
- Configure Database parameters in .env file
- `php artisan project:install`


# TODO if we had more time

- Users authentication
- Favorite show and watch later lists
- Push notifications about new episodes for favorite shows
- Ability to rate a TV Show
