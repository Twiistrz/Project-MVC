# Project MVC
Model - View - Controller

Use `database.sql` to create a table in your database and edit `config/database.php` file.
```php
// Database Configuration

// Database Type
define('DBTYPE', '');

// Database Host
define('DBHOST', '');

// Database Username
define('DBUSER', '');

// Database Password
define('DBPASS', '');

// Database Name
define('DBNAME', '');
```

Inside `.htaccess` file change the URL of Errors, Example below:
```htaccess
ErrorDocument 404 http://localhost/project_mvc/error/page_404/
ErrorDocument 401 http://localhost/project_mvc/error/page_401/
```

Users
Developer:
  Username: mannyseete
  Password: admin
  
Admin:
  Username: administrator
  Password: admin
  
Default:
  Username: default
  Password: default

> This Project will be updated.
> Copyright 2017 [Emmanuel See Te](https://emmanuelseete.xyz)
