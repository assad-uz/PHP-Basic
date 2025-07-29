-- Drop existing database if needed
DROP DATABASE IF EXISTS manufacture_company;

-- Create Database
CREATE DATABASE manufacture_company;
USE manufacture_company;

-- create manufacturer table
CREATE TABLE manufacturer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    address VARCHAR(100),
    contact_no VARCHAR(50),
);

-- create product table with foreign key
CREATE TABLE product (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price INT(5),
    manufacturer_id INT(10),
    FOREIGN KEY (manufacturer_id) REFERENCES manufacturer(id)
);
/*
 যদি product টেবিল আগে থেকেই থাকে?
তাহলে তুমি ALTER TABLE দিয়ে foreign key অ্যাড করতে পারো:

ALTER TABLE product
ADD CONSTRAINT fk_manufacturer
FOREIGN KEY (manufacturer_id) 
REFERENCES manufacturer(manufacturer_id)
ON DELETE CASCADE;
এখানে fk_manufacturer হচ্ছে constraint এর একটা নাম (তুমি যেকোনো নাম দিতে পারো)
কোথায় চালাবে > phpMyAdmin > SQL tab 
*/

-- Create Stored Procedure: Insert Manufacturer
DELIMITER //
DROP PROCEDURE IF EXISTS call_insert_m;
CREATE PROCEDURE call_insert_m(
    IN m_name VARCHAR(50),
    IN m_address VARCHAR(100),
    IN m_contact VARCHAR(50)
)
BEGIN
    INSERT INTO manufacturer(name, address, contact_no)
    VALUES(m_name, m_address, m_contact);
END;
//
DELIMITER;

-- Create Stored Procedure: Insert Product
DELIMITER //
DROP PROCEDURE IF EXISTS call_insert_p;
CREATE PROCEDURE call_insert_p(
    IN rname VARCHAR(50),
    IN rprice INT(5),
    IN rmanufacture_id INT(10)
)
BEGIN
    INSERT INTO product(name, price, manufacture_id)
    VALUES (rname, rprice, rmanufacture_id);
END;
//
DELIMITER;

-- Create Stored Procedure: Update Product

-- Create Stored Procedure: Delete Product using Trigger
CREATE TRIGGER after_delete_manufacturer
AFTER DELETE ON manufacturer
FOR EACH ROW
BEGIN
    DELETE FROM product
    WHERE manufacture_id = OLD.id;
END;



