# Install

Add to `.env` file

```
ADMIN_EMAIL="******"
ADMIN_PASSWORD="******"
ADMIN_NAME="*******"
```

set database to sqlite:

```
DB_CONNECTION=sqlite
```

remove the rest of database entries!

create database:

```bash
touch database/database.sqlite
```

refresh config

```bash
php artisan config:cache
```

run migrate:

```bash
php artisan migrate
```
