CREATE DATABASE general_store;

CREATE TABLE store_user(id int AUTO_INCREMENT PRIMARY KEY, username varchar(50), name varchar(30), password varchar(60), created_at varchar(30), updated_at TIMESTAMP );
CREATE TABLE store_vendor(id int AUTO_INCREMENT PRIMARY KEY, mobile varchar(10), name varchar(30), password varchar(60), created_at varchar(30), updated_at TIMESTAMP );
CREATE TABLE store_vendor_list(id int AUTO_INCREMENT PRIMARY KEY, title varchar(50), description varchar(100), price float, created_at varchar(30), updated_at TIMESTAMP );


INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Book', 'Science, Hindi', '130', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Ball', 'Tennis Ball', '100', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Laptop', 'HP I5 Laptop', '13000', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Bag', 'Skybags Backpack', '770', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);
INSERT INTO `store_vendor_list` (`id`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES (NULL, 'Pen Drive', '16GB Kingston', '700', '2020-03-09 18:27:48', CURRENT_TIMESTAMP);