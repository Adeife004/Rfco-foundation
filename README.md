# Rev. Fr. Callistus Osiaga Foundation Website

A professional, secure, and modern website for the Rev. Fr. Callistus Osiaga Foundation - a charitable organization dedicated to transforming lives and empowering vulnerable communities through education, skill acquisition, and community development.

## 🌟 Features

### Public Features
- **Responsive Design** - Mobile-friendly interface
- **Donation System** - Secure donation processing
- **Volunteer Registration** - Online volunteer application forms
- **Fundraising Campaigns** - Fundraising request management
- **Contact Forms** - Multiple contact options
- **Newsletter Subscription** - Email subscription system
- **Photo Gallery** - Image showcase
- **Blog System** - News and updates
- **Event Management** - Event listings and details
- **FAQ Section** - Frequently asked questions

### Admin Features
- **Secure Admin Panel** - Protected administrative interface
- **User Management** - Admin user accounts
- **Data Management** - View, edit, and delete submissions
- **Export Functionality** - PDF and Excel exports
- **Print Reports** - Printable submission reports
- **Contact Management** - Message handling system

## 🛠️ Technical Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: HTML5, CSS3, JavaScript
- **Framework**: Bootstrap 4
- **Security**: PDO with prepared statements
- **PDF Generation**: DOMPDF
- **Icons**: Font Awesome

## 📋 Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache/Nginx web server
- mod_rewrite enabled (for .htaccess)
- Composer (for dependencies)

## 🚀 Installation

### 1. Download and Setup
```bash
# Clone or download the project
# Extract to your web server directory
cd well-known
```

### 2. Database Configuration
1. Create a MySQL database
2. Update database credentials in `includes/db.php`:
```php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Database Setup
1. Access `create_database.php` in your browser
2. This will create all necessary tables
3. Default admin credentials:
   - Username: `admin`
   - Password: `admin123`
   - **Important**: Change password immediately after first login

### 5. File Permissions
Ensure proper file permissions:
```bash
chmod 755 assets/
chmod 644 .htaccess
chmod 644 includes/db.php
```

## 🔧 Configuration

### Security Settings
- Update admin passwords in admin panel
- Configure email settings for notifications
- Set up SSL certificate for production
- Review and customize .htaccess security headers

### Customization
- Update logo in `assets/img/logo/`
- Modify contact information in footer
- Customize color scheme in CSS files
- Update content in PHP files

## 📁 File Structure

```
well-known/
├── admin/                 # Admin panel files
├── assets/               # Static assets (CSS, JS, images)
├── includes/             # PHP includes and shared files
├── vendor/               # Composer dependencies
├── .htaccess            # Apache configuration
├── index.php            # Homepage
├── about-us.php         # About page
├── contact.php          # Contact page
├── donate.php           # Donation page
├── volunteer.php        # Volunteer page
├── fundraising.php      # Fundraising page
├── create_database.php  # Database setup script
└── README.md           # This file
```

## 🔒 Security Features

- **SQL Injection Protection** - Prepared statements
- **XSS Protection** - Input sanitization
- **CSRF Protection** - Session-based security
- **Secure Headers** - Security headers in .htaccess
- **Password Hashing** - bcrypt password hashing
- **Input Validation** - Comprehensive form validation
- **Error Handling** - Secure error management

## 📞 Support

For technical support or questions:
- Email: helps@rfcofoundation.org
- Phone: 08160226089

## 📄 License

This project is proprietary software developed for the Rev. Fr. Callistus Osiaga Foundation.

## 🔄 Updates

### Version 2.0 (Current)
- ✅ Fixed database connection issues
- ✅ Implemented proper PDO usage
- ✅ Added security measures
- ✅ Updated phone numbers
- ✅ Professional code structure
- ✅ Enhanced error handling
- ✅ Improved user experience

### Planned Features
- [ ] Email notification system
- [ ] Payment gateway integration
- [ ] Advanced reporting
- [ ] Multi-language support
- [ ] Mobile app integration

---

**Developed with ❤️ for the Rev. Fr. Callistus Osiaga Foundation** 