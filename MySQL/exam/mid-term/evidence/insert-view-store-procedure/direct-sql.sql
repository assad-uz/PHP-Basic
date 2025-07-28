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
/*
 যদি product টেবিল আগে থেকেই থাকে?
তাহলে তুমি ALTER TABLE দিয়ে foreign key অ্যাড করতে পারো:

ALTER TABLE product
ADD CONSTRAINT cn_manufacturer
FOREIGN KEY (manufacturer_id) 
REFERENCES manufacturer(manufacturer_id)
ON DELETE CASCADE;
এখানে cn_manufacturer হচ্ছে constraint এর একটা নাম (তুমি যেকোনো নাম দিতে পারো)
কোথায় চালাবে > phpMyAdmin > SQL tab 
*/

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


