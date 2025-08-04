# Database Setup Guide

## For Production Server

### Step 1: Get Your Database Credentials
Contact your hosting provider to get:
- Database host (usually `localhost`)
- Database username
- Database password  
- Database name

### Step 2: Update Database Configuration
Edit the file `includes/db.php` and replace these lines:

```php
$username = "your_production_username";
$password = "your_production_password";
$dbname = "your_production_database";
```

With your actual credentials.

### Step 3: Test Database Connection
You can test the database connection by adding `?debug_db=1` to any page URL.

## Form Submissions Without Database
If you don't configure the database, form submissions will be logged to a file called `form_submissions.log` in your website root directory. 