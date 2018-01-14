## TO-DO  API



## Running the Project

It's very simple to get the project up and running. First, create the database (and database
user if necessary) and add them to the `.env` file.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate:

1. `composer install`
2. `php artisan migrate`
3. `php artisan serve`

The API will be running on `localhost:8000`.