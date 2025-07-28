-- create table manufacturer
CREATE TABLE manufacturer (
    manufacturer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    address VARCHAR(100),
    contact_no VARCHAR(50),
);

-- create table product
CREATE TABLE product (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    manufacturer_id INT,
    FOREIGN KEY (manufacturer_id) REFERENCES manufacturer(manufacturer_id)
);


-- insert manufacturer
DELIMITER //

CREATE PROCEDURE insert_manufacturer(
    IN m_name VARCHAR(50),
    IN m_address VARCHAR(100),
    IN m_contact VARCHAR(50)
)
BEGIN
    INSERT INTO manufacturer(name, address, contact_no)
    VALUES(m_name, m_address, m_contact);
END;
//

DELIMITER ;


