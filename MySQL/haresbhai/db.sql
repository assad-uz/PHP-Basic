-- Drop & recreate database
DROP DATABASE IF EXISTS new_exam;
CREATE DATABASE new_exam;
USE new_exam;

-- Manufacturer table
CREATE TABLE manufacturer (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  address VARCHAR(100) NOT NULL,
  contact_no VARCHAR(50) NOT NULL
);

-- Product table (No ON DELETE CASCADE, we’ll handle with trigger)
CREATE TABLE product (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  price INT(5) NOT NULL,
  manufacturer_id INT(10) NOT NULL,
  FOREIGN KEY (manufacturer_id) REFERENCES manufacturer(id)
);

-- Insert Manufacturer SP
DELIMITER //
CREATE PROCEDURE insert_manufacturer(
  IN pname VARCHAR(50),
  IN paddress VARCHAR(100),
  IN pcontact VARCHAR(50)
)
BEGIN
  INSERT INTO manufacturer(name, address, contact_no)
  VALUES (pname, paddress, pcontact);
END //
DELIMITER ;

-- Insert Product SP
DELIMITER //
CREATE PROCEDURE insert_product(
  IN pname VARCHAR(50),
  IN pprice INT(5),
  IN mid INT(10)
)
BEGIN
  INSERT INTO product(name, price, manufacturer_id)
  VALUES (pname, pprice, mid);
END //
DELIMITER ;

-- Update Product SP
DELIMITER //
CREATE PROCEDURE update_product(
  IN pid INT,
  IN pname VARCHAR(50),
  IN pprice INT(5)
)
BEGIN
  UPDATE product SET name = pname, price = pprice WHERE id = pid;
END //
DELIMITER ;

-- Delete Product SP
DELIMITER //
CREATE PROCEDURE delete_product(
  IN pid INT
)
BEGIN
  DELETE FROM product WHERE id = pid;
END //
DELIMITER ;

-- ✅ After DELETE Trigger
DELIMITER //
CREATE TRIGGER after_manufacturer_delete
AFTER DELETE ON manufacturer
FOR EACH ROW
BEGIN
  DELETE FROM product WHERE manufacturer_id = OLD.id;
END //
DELIMITER ;

-- ✅ View for products > 5000
CREATE VIEW expensive_products AS
SELECT 
  p.id,
  p.name,
  p.price,
  m.name AS manufacturer_name
FROM product p
JOIN manufacturer m ON p.manufacturer_id = m.id
WHERE p.price > 5000;

--  View: Manufacturers (Just for showing manufacturer table)
CREATE VIEW view_manufacturers AS
SELECT 
  id,
  name,
  address,
  contact_no
FROM 
  manufacturer;


--  Dummy Data Insert (optional)
CALL insert_manufacturer('Apple', 'USA', '123456');
CALL insert_manufacturer('Samsung', 'Korea', '654321');
CALL insert_manufacturer('Sony', 'Japan', '111222');
CALL insert_manufacturer('LG', 'Korea', '333444');
CALL insert_manufacturer('Dell', 'USA', '555666');
CALL insert_manufacturer('HP', 'USA', '777888');
CALL insert_manufacturer('Asus', 'Taiwan', '999000');
CALL insert_manufacturer('Acer', 'Taiwan', '121212');
CALL insert_manufacturer('Lenovo', 'China', '343434');
CALL insert_manufacturer('Microsoft', 'USA', '565656');

CALL insert_product('iPhone', 80000, 1);
CALL insert_product('Galaxy S23', 70000, 2);
CALL insert_product('Bravia TV', 60000, 3);
CALL insert_product('LG Fridge', 55000, 4);
CALL insert_product('Dell XPS', 85000, 5);
CALL insert_product('HP Pavilion', 52000, 6);
CALL insert_product('Asus ROG', 95000, 7);
CALL insert_product('Acer Aspire', 48000, 8);
CALL insert_product('Lenovo ThinkPad', 72000, 9);
CALL insert_product('Surface Pro', 90000, 10);
