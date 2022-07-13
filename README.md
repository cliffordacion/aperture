<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Dependencies

I developed this using laravel sail, so docker is a must to easily run this.
Otherwise, you might need to install lots of other dependencies on your local.

- Docker

## Installation

1. clone this repo and checkout develop
2. cd to the directory
3. issue `./vendor/bin/sail up -d`
4. issue `./vendor/bin/sail php artisan migrate`
5. issue `./vendor/bin/sail php artisan db:seed`

## Testing
1. go to `localhost/stats/logs/country` - endpoint for Statistics
2. command to create stat cacsh `./vendor/bin/sail calculateStatistics:country-logs`