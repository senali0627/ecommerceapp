ClickGift OnlineGiftStore
ClickGift is an online gift store built with Laravel, designed to offer users a seamless experience for browsing and purchasing gifts. The platform includes features such as user authentication, gift categorization, cart functionality, and an admin dashboard for managing products.

To set up ClickGift locally, follow these steps:

Clone the repository:
git clone <repository-url>
cd clickgift


Install dependencies: Ensure you have Composer and Node.js installed, then run:
composer install
npm install

Set up the environment file: Copy .env.example to .env:
cp .env.example .env

Generate the application key:
php artisan key:generate

Environment Setup
In the .env file, set the following:
APP_NAME=ClickGift
APP_ENV=local
APP_KEY=base64:your_generated_key
APP_DEBUG=true
APP_URL=http://localhost

For database configuration, update:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Database Configuration
Run migrations:
php artisan migrate


API Setup
If you're using any third-party services (e.g., Stripe for payments), configure them in .env:
STRIPE_KEY=your_stripe_key

Running the Application
Start the development server:

php artisan serve
This will start the application on http://localhost:8000.

Front-end setup: Compile assets by running:
npm run dev

Features
User Authentication: Laravel Jetstream for user login and registration.
Gift Management: Admins can add, update, and manage gift categories, descriptions, and prices.
Search and Filters: Users can search and filter gifts based on categories, price range, and occasion.
Cart Functionality: Users can add gifts to their cart and proceed to checkout.
Order Tracking: Users can view the status of their orders.
Admin Dashboard: A dashboard to manage products, users, and orders.
Ratings and Reviews: Users can rate and review gifts.
Discounts and Coupons: Implement discounts and promotional codes for users.

Admin Dashboard
To access the admin dashboard, log in with admin credentials at:
Login URL: /admin/login



