# Master Data Management System (MDM)

## Project Overview
The Master Data Management System (MDM) is a simple Laravel-based application for managing master data, including brands, categories, and items. It allows authenticated users to perform CRUD operations on master data, with a focus on user authentication, data management, and an intuitive UI. The system supports role-based access control, validation, and advanced features such as search, filters, and export options.

## Key Features
- **User Authentication**: Register, log in, and log out.
- **Master Data Management**: Create, read, update, and delete brands, categories, and items.
- **Role-Based Access Control**: Admin users can manage tasks for all users.
- **Data Pagination**: Pagination is implemented for viewing lists of brands, categories, and items.
- **Search and Filters (Optional)**: Search and filter items by code/name or status.
- **Export Tasks (Optional)**: Option to export items to CSV, Excel, or PDF.

## Table of Contents
- [Installation](#installation)
- [Database Design](#database-design)
- [Features to Implement](#features-to-implement)
- [Technologies Used](#technologies-used)
- [Usage](#usage)
- [License](#license)

---

## Installation

Follow the steps below to set up the Master Data Management System locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/yourusername/mdm.git
   cd mdm
Install Dependencies: Ensure you have Composer and Node.js installed. Run the following command to install the PHP dependencies:

bash
Copy
Edit
composer install
Set Up Environment Variables: Copy the .env.example file to .env and configure the database connection:

bash
Copy
Edit
cp .env.example .env
In the .env file, set the DB_DATABASE, DB_USERNAME, and DB_PASSWORD to your MySQL credentials:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mdm_db
DB_USERNAME=root
DB_PASSWORD=yourpassword
Generate Application Key: Run the following command to generate an application key:

bash
Copy
Edit
php artisan key:generate
Run Migrations: Apply the database migrations:

bash
Copy
Edit
php artisan migrate
Install Frontend Dependencies: Run the following command to install the necessary frontend dependencies:

bash
Copy
Edit
npm install
Run the Application: Finally, start the development server:

bash
Copy
Edit
php artisan serve
The application will be available at http://localhost:8000.

Database Design
The application uses the following tables:

Users Table:
id: Primary key

name: User's full name

email: User's email address

password: Hashed password

created_at: Timestamp

updated_at: Timestamp

is_admin: Boolean to distinguish admin users

Master Brand Table:
id: Primary key

code: Unique brand code

name: Brand name

status: Active/Inactive

created_at: Timestamp

updated_at: Timestamp

Master Category Table:
id: Primary key

code: Unique category code

name: Category name

status: Active/Inactive

created_at: Timestamp

updated_at: Timestamp

Master Item Table:
id: Primary key

brand_id: Foreign key referencing master_brands

category_id: Foreign key referencing master_categories

code: Unique item code

name: Item name

attachment: File attachment (optional)

status: Active/Inactive

created_at: Timestamp

updated_at: Timestamp

Features to Implement
User Authentication
Only authenticated users can access the system.

Users can register, log in, and log out using Laravel's built-in authentication features.

Admin users can manage tasks for all users.

Master Data Management
Create Brands: Authenticated users can create new brands with a code, name, and status (Active by default).

View Brands: Display a paginated list of brands created by the logged-in user (5 per page).

Update Brands: Users can edit the code and name of their brands.

Delete Brands: Users can delete a brand, with confirmation via modal or alert.

Create Categories: Users can create new categories with a code, name, and status (Active by default).

View Categories: Display a paginated list of categories created by the logged-in user (5 per page).

Update Categories: Users can edit the code and name of their categories.

Delete Categories: Users can delete a category with confirmation via modal or alert.

Create Items: Users can create new items with a brand, category, code, name, and status (Active by default).

View Items: Display a paginated list of items created by the logged-in user (5 per page).

Update Items: Users can edit the code, name, brand, category, and upload an attachment for their items.

Delete Items: Users can delete an item, with confirmation via modal or alert.

Role-Based Access Control
Add is_admin column to the users table for role differentiation.

Admin users can manage all tasks, while regular users can only manage their own data.

Validation
Input fields are validated for required fields and character limits.

Error messages are displayed when validation fails.

Advanced Features (Optional)
Search and Filters: Users can search items by code, name, or status.

Export Tasks: Users can export item data to CSV, Excel, or PDF files.

Technologies Used
Backend: Laravel (PHP)

Frontend: Blade templates, Bootstrap or Tailwind CSS

Database: MySQL

Authentication: Laravel Breeze or Laravel UI

Frontend Build Tools: npm, Laravel Mix

Usage
Login: After registration, users can log in to the system to manage brands, categories, and items.

Create and Manage Data: Navigate to the respective pages for creating, updating, or deleting brands, categories, and items.

Admin Access: Admin users can manage all tasks and users within the application.

License
This project is open-source and available under the MIT License. See the LICENSE file for more details.

pgsql
Copy
Edit

This is a markdown file for your Master Data Management System (MDM), formatted for easy copying and pasting into your `README.md`.
