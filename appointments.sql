create database appointments;
use appointments;

create table appointment_data (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(255) NOT NULL,
lname VARCHAR(255) NOT NULL,
date VARCHAR(255) NOT NULL,
time VARCHAR(255) NOT NULL
);