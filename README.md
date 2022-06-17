# Laravel E-commerce 


## Features

- User login signup and profile settings
- Adding products to card for future purchases
- Check in page for taxes and total price 
- Order history page for previous prders
- Nice and minimilistic desgin using bootstrap 


## How To Run
1) Clone the repository ```git clone https://github.com/abdurrahmanseyidoglu/laravel-ecommerce.git```
2) go to the project directory ```cd laravel-ecommerce```
3) Run ```composer install``` on your cmd or terminal
4) Copy ```.env.example``` file content to a new file called ```.env``` on the root folder
5) Open your ```.env``` file and change the database name ```DB_DATABASE``` to whatever you have, username ```DB_USERNAME``` and password ```DB_PASSWORD``` field correspond to your configuration
6) Run ```php artisan key:generate```
7) Run ```php artisan migrate```
8) Run ```php artisan db:seed --class=Products```
9) Run ```php artisan serve```
10) Go to ```http://localhost:8000``` and you should be up and running ^^.

## License

MIT

