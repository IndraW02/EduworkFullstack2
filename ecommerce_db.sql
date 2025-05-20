
-- Membuat database
CREATE DATABASE ecommerce_db;
USE ecommerce_db;

-- Tabel products
CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_produk VARCHAR(100),
  harga INT,
  deskripsi TEXT,
  stok INT
);

-- Tabel users
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255)
);

-- Tabel orders
CREATE TABLE orders (
  order_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  product_id INT,
  quantity INT,
  total INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Query CRUD untuk tabel products

-- Create
INSERT INTO products (nama_produk, harga, deskripsi, stok)
VALUES ('Kaos Polos', 50000, 'Kaos katun nyaman dipakai', 100);

-- Read
SELECT * FROM products;
SELECT * FROM products WHERE id = 1;

-- Update
UPDATE products
SET stok = 90, harga = 55000
WHERE id = 1;

-- Delete
DELETE FROM products
WHERE id = 1;
