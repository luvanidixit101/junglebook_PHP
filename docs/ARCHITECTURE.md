# Application Architecture

Jungle Book uses a public web root with application code and database documentation outside the directly served directory.

```text
.
├── app/
│   ├── Config/              # Environment and application configuration
│   ├── Database/            # Shared database connection and future repositories
│   ├── Http/                # Future request, response, and validation services
│   └── Services/            # Future business workflows
├── public/                  # Web-server document root
│   ├── admin/               # Admin pages and dashboard assets
│   ├── cards/               # Card pages and assets
│   ├── css/                 # Stylesheets
│   ├── images/              # Local media assets
│   ├── js/                  # JavaScript assets
│   └── *.php                # Public pages and forms
├── database/                # Schema, migrations, and seed documentation
├── docs/                    # Architecture and operational documentation
├── resources/               # Future templates, styles, and front-end sources
├── storage/                 # Runtime uploads, logs, and generated files
├── bootstrap/                # Future application bootstrap and error handling
```

## Current Migration Boundary

- `public/conn.php` is the compatibility wrapper for public pages.
- `public/admin/includes/dbconnection.php` is the admin compatibility wrapper.
- Both wrappers now use `app/Database/connection.php`.
- Public card, gallery, and volunteer pages now use the same connection boundary.
- Page URLs are now relative to the `public/` document root.
- New features should be added under `app/`, with thin public entry points only where page URLs require them.

## Recommended Migration Order

1. Export the current `junglebook` schema into `database/schema.sql`.
2. Move validation and form actions into `app/Http` services.
3. Move SQL queries into repositories under `app/Database`.
4. Move shared HTML into reusable templates under `resources/views`.
5. Configure Apache to serve `public/` and deny direct access to `app/`, `database/`, and `storage/`.
6. Add automated tests for authentication, bookings, ticket pricing, and admin permissions.