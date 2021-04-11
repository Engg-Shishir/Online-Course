# Rabbil-Laravel-Portfolio-10/04-2021
 Rabbil-Laravel-Portfolio-10/04-2021


+ First install laravel and create two folder .
one for Admin
And One for Site `composer create-project laravel/laravel sites/test --prefer-dist`

+ Then copy assential `asset(css,js,image)` property and put in the destination public folder

+ make database connection in `.env` file

+ Create Model,migration,Controller for access visitor ip `php artisan make:model VisitorModel -m` & create `HomeController.php` where i create function to insert user ip in the database 

+ Now run migration to create table inside database `php artisan migrate`

+ Now Create a `route` where i call `HomeIndex()` from `HomeController.php`