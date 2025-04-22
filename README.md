# assignment

# Laravel E-Commerce Product Management

This is a simple Laravel application to manage products in an e-commerce dashboard. It includes full CRUD (Create, Read, Update, Delete) functionality with a responsive Bootstrap UI.

## Features

- Add new products
- Edit and update existing products
- View product list with pagination
- View single product details
- Delete products with confirmation
- Calculate and store `total_amount` automatically (`price * quantity`)
- Flash messages for success actions
- Sidebar with collapsible navigation
- Login authentication and logout

## Tech Stack

- Laravel 10+
- Blade Templates
- Bootstrap 5
- Font Awesome
- Laravel Authentication

##  Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/Vishusinghrajpt/assignment.git
   cd assignment

2. **Install PHP Dependencies**

    composer install

3. **Create a .env File**

   cp .env.example .env

4. **Generate the Application Key**

   php artisan key:generate

5. **Run Migrations And Seed**

   php artisan migrate --seed

6. **Run Laravel Development Server**

  php artisan serve

Visit the app at: http://127.0.0.1:8000

7. **Login**

User: admin@example.com,
Pass: password

Path | Purpose
routes/web.php | Web routes for the app
app/Http/Controllers/ | Product and Auth controllers
resources/views/products/ | Product blade templates
resources/views/layouts/ | Layout structure for pages
app/Models/Product.php | Product model
database/migrations/ | Database schema

