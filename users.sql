create database registration;
use registration;
create table users (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(255) NOT NULL,
fname VARCHAR(255),
lname VARCHAR(255),
password VARCHAR(255) NOT NULL,
confirm_password VARCHAR(255) NOT NULL,
town VARCHAR(255),
postcode VARCHAR(7)
);
INSERT into users (email, fname, lname, password, confirm_password, town, postcode)
VALUES('stevie', 'mills', 'steviejpersonal@gmail.com', 'Rubybooby21', 'Rubybooby21', 'Chepstow', 'gl154dy');
SELECT * FROM users