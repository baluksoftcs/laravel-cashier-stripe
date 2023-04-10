#Laravel 7 - Cashier Stripe Application

##Objective
This application will demo the simple payment using Stripe ('test' mode enabled) on purchase of dummy products availble in the site.

###Deployment steps:
1. Clone the project "git clone https://github.com/baluksoftcs/laravel-cashier-stripe.git laravel-cashier-stripe".
2. Switch to the repo folder "cd laravel-cashier-stripe".
3. Install all the dependencies using composer "composer install".
4. Copy the example env file and make the required configuration changes in the .env file - update local database credentials (after creating a new empty database) and stripe related keys.
For stripe, make sure to add below details along with corresponding keys retrieved from Stripe:
STRIPE_KEY=~publishable-key~
STRIPE_SECRET=~secret-key~
CASHIER_CURRENCY=usd
note: Stripe account must be enabled with test mode.
5. Generate a new application key "php artisan key:generate".
6. Run the database migrations (Set the database connection in .env before migrating) "php artisan migrate".
7. Run the database seeder for populating dummy products "php artisan db:seed".
8. Start the local development server "php artisan serve".

note: once server started the application can be accessed through url: http://127.0.0.1:8000 in browser.

###This application includes the following Laravel features:
1. UI Bootstrap with in-built auth.
2. Factory for Product model.
3. Product seeder.
4. Migrations for Product and Orders.
5. Model 'Accessor' for displaying product price with symbol.
6. Encryption for product-id.
7. Jquery form validation in checkout page (shipping and payment form).
8. Integration of 'Stripe' credit card form and its scripts.
9. Data-table integrated for showing 'My orders'.