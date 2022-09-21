CREATE DATABASE registration;
USE registration;
create table patients (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
confirm_password VARCHAR(255) NOT NULL,
year INT,
month VARCHAR(255),
date INT,
postcode VARCHAR(11)
);

