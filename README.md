# Jungle Book

Jungle Book is a PHP/MySQL website for an environmental and wildlife-focused non-governmental organization. The project presents the organization, its forest education work, environmental social work, tribal initiatives, gallery, contact forms, and visitor services through a responsive web interface.

![Jungle Book logo](images/mix_01.png)

## Project Preview

![Jungle Book landscape](images/leh-ladhakh.jpg)

![Forest education](images/edu1.jpg)

![Jungle Book gallery](images/tribel01.jpg)

## Features

- Responsive public website with a forest-inspired visual design
- Home, about, services, education, social work, tribal, gallery, and contact pages
- Service registration and contact forms
- Wildlife, gallery, and environmental information pages
- Ticket and camping booking workflows
- Admin dashboard for managing content, animals, gallery images, tickets, bookings, volunteers, and reports
- MySQL-backed PHP forms and administrative records

## Technology

- PHP
- MySQL
- HTML5 and CSS3
- Bootstrap
- JavaScript and jQuery
- Animate.css, Owl Carousel, Magnific Popup, Icomoon, Themify Icons, and ScrollReveal

## Project Structure

```text
.
├── index.php              # Public home page
├── about.php              # About page
├── education.php          # Forest education content
├── services.php           # Public services
├── portfolio.php          # Gallery page
├── contact.php            # Contact page
├── login_rg.php           # User login and registration flow
├── conn.php               # Public-site database connection
├── admin/                 # Admin dashboard and content management
├── images/                # Public images and media
├── video/                 # Video assets
├── css/                   # Shared stylesheets and vendor CSS
└── js/                    # Shared JavaScript and vendor scripts
```

## Requirements

- PHP 7.4 or newer with the MySQLi extension
- MySQL or MariaDB
- Apache, XAMPP, WAMP, or another PHP-compatible web server
- A database named `junglebook`

## Local Setup

1. Clone or copy the project into your web server document root.
2. Create a MySQL database named `junglebook`.
3. Import the project database schema and seed data if available.
4. Review the connection values in `conn.php` and `admin/includes/dbconnection.php`.
5. Start Apache and MySQL.
6. Open the project in a browser, for example:

   ```text
   http://localhost/aesthetic/index.php
   ```

The admin area is available at:

```text
http://localhost/aesthetic/admin/index.php
```

## Configuration Notes

- Keep database credentials outside version control for production deployments.
- The public site and admin area currently use separate connection files.
- Uploaded admin images are stored in `admin/images/`.
- Email and OTP-related forms may require SMTP configuration before they work outside a local environment.

## Credits

This project uses open-source front-end libraries including Bootstrap, jQuery, Animate.css, Owl Carousel, Magnific Popup, Icomoon, Themify Icons, and ScrollReveal. Check the relevant vendor files and project history for their individual license terms.