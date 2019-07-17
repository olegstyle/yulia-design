# My Portfolio Web-page

It is my Portfolio WEB-page.

## Installation ##
0. `sudo chgrp -R www-data storage bootstrap/cache`
0. `sudo chmod -R ug+rwx storage bootstrap/cache`
0. `cp .env.example .env`
0. `nano .env`
0. `composer install`
0. `php artisan key:generate`
0. `php artisan storage:link`
0. `php artisan voyager:install`
0. `php artisan migrate --seed`
0. `npm install`
0. `npm run production`

## To Do ##

after each git pull

```
composer install && 
php artisan cache:clear && 
php artisan migrate &&
npm install &&
npm run production
```

## To Do on hosting ##
`php-7.1 composer.phar dump-autoload && 
 php-7.1 artisan cache:clear && 
 php-7.1 artisan migrate` after each git ftp pull
 
## Used frameworks

[Laravel](http://laravel.com/) 

[Bootstrap3](http://bootstrap3.com/)

[JQuery](https://jquery.com/)

[Toastr](http://codeseven.github.io/toastr/)

[AOS](http://michalsnik.github.io/aos/)

[FancyBox](https://www.fancyapps.com/fancybox/3/)

## License
[MIT license](http://opensource.org/licenses/MIT).

