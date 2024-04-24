## Creating OAuth Google login using Socialite in Laravel 11

Go inside the Project and install the required packages.
- composer install
- npm install

Create your database. I am using MySQL. So, add the required credentials inside .env file.

Create a Google Application from this url ( https://console.cloud.google.com/projectcreate). It will give you the client_id and client client_secret.

Save the client_id, client_secret, and redirect url into the .env file. Make sure you give the proper permission in your Google Developer application.

To start the laravel server, use this command: php artisan serve

Go to this URL: (http://localhost:8000/login) and you will see the "Login with Google" Button.