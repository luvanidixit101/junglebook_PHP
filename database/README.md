# Database

The application expects a MySQL or MariaDB database named `junglebook`.

Use [schema.sql](schema.sql) to initialize a fresh development database:

```bash
mysql -u root -p < database/schema.sql
```

The schema is inferred from the tables and columns currently used by the PHP pages. Compare it with the production database before applying it to an existing installation.

To export the current development database for comparison:

```bash
mysqldump -u root -p junglebook > database/schema.sql
```

Do not commit production credentials or customer data. Future schema changes should be added as versioned migrations rather than manual database edits.