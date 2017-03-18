![alt text](https://github.com/Twiistrz/Project-MVC/blob/master/assets/img/logo.png)

Requirements
------------
A PHP 7.0 (or equivalent) environment
MySQL 5.7+

Deploying
------------
### Database
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

### Config
Inside `.htaccess` file change the URL of Errors, Example below:
```htaccess
ErrorDocument 404 http://localhost/project_mvc/error/page_404/
ErrorDocument 401 http://localhost/project_mvc/error/page_401/
```

### Accounts
| Role          | Username      | Password  |
| ------------- | ------------- | --------- |
| Developer     | mannyseete    | admin     |
| Admin         | administrator | admin     |
| Default       | default       | default   |

Seeking Help
------------
### Create an issue
If you have something you want to discuss in detail, or have hit an issue which you believe others will also have in deployment or development on the system, [opening an issue](https://github.com/Twiistrz/Project-MVC/issuess) is the best way to get help. It creates a permanent resource for others wishing to contribute to conversation. Please **make sure to search first** in case someone else has already addressed the same issue!

------------
This Project will be updated.
Copyright 2017 [Emmanuel See Te](https://emmanuelseete.xyz)
