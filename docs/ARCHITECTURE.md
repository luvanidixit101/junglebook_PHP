# Application Architecture

Jungle Book is currently a legacy PHP application with direct page-based routing. The target structure below introduces clear ownership while keeping the existing public URLs working during migration.

```text
.
├── app/
│   ├── Config/              # Environment and application configuration
│   ├── Database/            # Shared database connection and future repositories
│   ├── Http/                # Future request, response, and validation services
│   └── Services/            # Future business workflows
├── admin/                   # Existing admin pages and dashboard assets
├── database/                # Schema, migrations, and seed documentation
├── docs/                    # Architecture and operational documentation
├── public/                  # Future web-server document root
├── resources/               # Future templates, styles, and front-end sources
├── storage/                 # Runtime uploads, logs, and generated files
├── bootstrap/                # Future application bootstrap and error handling
└── *.php                    # Existing compatibility entry points
```

## Current Migration Boundary

- `conn.php` remains a compatibility wrapper for public pages.
- `admin/includes/dbconnection.php` remains a compatibility wrapper for admin pages.
- Both wrappers now use `app/Database/connection.php`.
- Public card, gallery, and volunteer pages now use the same connection boundary.
- Existing page URLs and form contracts are unchanged.
- New features should be added under `app/`, with thin page entry points only where legacy URLs require them.

## Recommended Migration Order

1. Export the current `junglebook` schema into `database/schema.sql`.
2. Move validation and form actions into `app/Http` services.
3. Move SQL queries into repositories under `app/Database`.
4. Move shared HTML into reusable templates under `resources/views`.
5. Configure Apache to serve `public/` and deny direct access to `app/`, `database/`, and `storage/`.
6. Add automated tests for authentication, bookings, ticket pricing, and admin permissions.