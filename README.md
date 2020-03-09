# General Store App
Basic Web Development App for General Store App.
### Languages
```bash
PHP
HTML
CSS
Bootstrap
```

### PHP Framework
```bash
Codeigniter
```

### Database
```bash
phpMyAdmin
```

### User Registration
URL : localhost/generalstoreapp.com/user/registration
body:(Registration form with method post)

### User Login
URL : localhost/generalstoreapp.com/user/login
body:(Login form with method post)

### Shopkeeper Registration
URL : localhost/generalstoreapp.com/vendor/registration
body:(Registration form with method post)

### Shopkeeper Login
URL : localhost/generalstoreapp.com/vendor/login
body:(Login form with method post)

### Vendors List
```bash
{
    "status": 1,
    "items": [
        {
            "title": "Book",
            "description": "Science, Hindi",
            "price": "130"
        },
        {
            "title": "Ball",
            "description": "Tennis Ball",
            "price": "100"
        },
        {
            "title": "Laptop",
            "description": "HP I5 Laptop",
            "price": "13000"
        },
        {
            "title": "Bag",
            "description": "Skybags Backpack",
            "price": "770"
        },
        {
            "title": "Pen Drive",
            "description": "16GB Kingston",
            "price": "700"
        }
    ]
}
```

### Steps for setup project
```bash
1. Upload generalstoreapp.com folder in server folder
2. Set base url in generalstoreapp.com->application->config->config.php
    $config['base_url'] = 'http://localhost/generalstoreapp.com/';
3. Run database query in database
    CREATE DATABASE general_store;
    CREATE TABLE store_user(id int AUTO_INCREMENT PRIMARY KEY, username varchar(50), name varchar(30), password varchar(60), created_at varchar(30), updated_at TIMESTAMP );
    CREATE TABLE store_vendor(id int AUTO_INCREMENT PRIMARY KEY, mobile varchar(10), name varchar(30), password varchar(60), created_at varchar(30), updated_at TIMESTAMP );
    CREATE TABLE store_vendor_list(id int AUTO_INCREMENT PRIMARY KEY, title varchar(50), description varchar(100), price float, created_at varchar(30), updated_at TIMESTAMP );
    INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Book', 'Science, Hindi', '130', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
    INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Ball', 'Tennis Ball', '100', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
    INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Laptop', 'HP I5 Laptop', '13000', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
    INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Bag', 'Skybags Backpack', '770', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
    INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Pen Drive', '16GB Kingston', '700', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
    
4. set database configuration in generalstoreapp.com->application->config->database.php
    $db['default'] = array(
        'dsn'   => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'general_store',
        'dbdriver' => 'mysqli',
        'dbprefix' => 'store_',
        'pconnect' => FALSE,
        'db_debug' => (ENVIRONMENT !== 'production'),
        'cache_on' => FALSE,
        'cachedir' => '',
        'char_set' => 'utf8',
        'dbcollat' => 'utf8_general_ci',
        'swap_pre' => '',
        'encrypt' => FALSE,
        'compress' => FALSE,
        'stricton' => FALSE,
        'failover' => array(),
        'save_queries' => TRUE
    );

5. Run generalstoreapp.com
```


