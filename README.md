# Contact US Form Package

## This will send email to admin and save contact to database


## Instructions

Laravel New / Old Project

`
composer create-project --prefer-dist laravel/laravel Testing-package
`

composer require sakshikbc/contact

php artisan vendor:publish --provider="Sakshikbc\Contact\ContactServiceProvider"

## Create a database
Change database settings in env
Change SMTP settings in env

## Run the Migrations
php artisan migrate


## Start the Server
php artisan serve

## Go to URL
http://127.0.0.1:8000/contact


