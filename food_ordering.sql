CREATE DATABASE food_ordering;

USE food_ordering;

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100),
    customer_phone VARCHAR(15),
    customer_address TEXT,
    order_details TEXT,
    order_status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
