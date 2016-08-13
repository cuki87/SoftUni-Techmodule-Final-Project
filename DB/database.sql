DROP DATABASE IF EXISTS monys_kitchen;

CREATE DATABASE monys_kitchen CHARACTER SET utf8;

USE monys_kitchen;

CREATE TABLE users
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password_hash VARCHAR(100),
  full_name VARCHAR(200),
  address VARCHAR (500),
  email VARCHAR (100),
  phone VARCHAR (14),
  profile_picture VARCHAR (200),
  admin TINYINT(1)
);


CREATE TABLE categories
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  cat_name VARCHAR(100),
  cat_description VARCHAR(500),
  cat_picture VARCHAR(200)
);


CREATE TABLE products
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  product_name VARCHAR(100),
  product_description VARCHAR(300),
  product_picture VARCHAR(200),
  cat_id INT(11),
  CONSTRAINT fk_categories_products FOREIGN KEY (cat_id) REFERENCES categories (id)
);


CREATE TABLE orders
(
  id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  product_id INT(11),
  user_id INT(11),
  CONSTRAINT fk_orders_products FOREIGN KEY (product_id) REFERENCES products (id),
  CONSTRAINT fk_orders_users FOREIGN KEY (user_id) REFERENCES users (id)
);


CREATE TABLE forme
(
  text VARCHAR (1000)
);
