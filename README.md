
# ClickGift OnlineGiftStore

ClickGift is an online gift store built with Laravel, designed to offer users a seamless experience for browsing and purchasing gifts. The platform includes features such as user authentication, gift categorization, cart functionality, and an admin dashboard for managing products.

---

## Table of Contents

- [Installation](#installation)
- [Environment Setup](#environment-setup)
- [Database Configuration](#database-configuration)
- [API Setup](#api-setup)
- [Running the Application](#running-the-application)
- [Features](#features)
- [Admin Dashboard](#admin-dashboard)

---

## Installation

Follow these steps to set up ClickGift locally:

### 1. Clone the repository:

```bash
git clone <repository-url>
cd clickgift
```

### 2. Install dependencies:
Ensure you have **Composer** and **Node.js** installed. Then, run:

```bash
composer install
npm install
```

### 3. Set up the environment file:
Copy `.env.example` to `.env`:

```bash
cp .env.example .env
```

### 4. Generate the application key:

```bash
php artisan key:generate
```

---

## Environment Setup

In the `.env` file, set the following environment variables:

```plaintext
APP_NAME=ClickGift
APP_ENV=local
APP_KEY=base64:your_generated_key
APP_DEBUG=true
APP_URL=http://localhost
```

For database configuration, update:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

---

## Database Configuration

Run migrations:

```bash
php artisan migrate
```

---

## API Setup

If you're using any third-party services (e.g., Stripe for payments), configure them in `.env`:

```plaintext
STRIPE_KEY=your_stripe_key
```

---

## Running the Application

### 1. Start the development server:

```bash
php artisan serve
```

This will start the application on [http://localhost:8000](http://localhost:8000).

### 2. Front-end setup:
Compile assets by running:

```bash
npm run dev
```

---

## Features

- **User Authentication**: Laravel Jetstream for user login and registration.
- **Gift Management**: Admins can add, update, and manage gift categories, descriptions, and prices.
- **Search and Filters**: Users can search and filter gifts based on categories.
- **Cart Functionality**: Users can add gifts to their cart and proceed to checkout.
- **Order Tracking**: Admins can view the status of the orders.
- **Admin Dashboard**: A dashboard to manage products, users, and orders.
- **Ratings and Reviews**: Users can rate and review gifts.


---

## Admin Dashboard

To access the admin dashboard, log in with admin credentials at:

- **Login URL**: `/admin/login`

