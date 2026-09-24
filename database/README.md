# Database

The application expects a MySQL or MariaDB database named `junglebook`.

The current repository does not contain a schema export. Create one from the development database before deploying:

```bash
mysqldump -u root -p junglebook > database/schema.sql
```

Do not commit production credentials or customer data. Future schema changes should be added as versioned migrations rather than manual database edits.