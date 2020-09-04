#******************************************************************************************************
#Script to create ejdesign database
#Name			Date			Description
#Kyle			8/28/2020		Inital deployment
#Kyle                   9/3/2020                Added new user
#
#******************************************************************************************************

DROP DATABASE IF EXISTS portfolio;
CREATE DATABASE portfolio;
USE portfolio;


CREATE TABLE IF NOT EXISTS information
(
    userID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS visitor
(
    visitor_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    visitor_name VARCHAR(255) NOT NULL,
    visitor_email VARCHAR(255) NOT NULL,
    visitor_subject VARCHAR(255) NOT NULL,
    visitor_comments VARCHAR(255),
    vist_date DATETIME NOT NULL,
    userID INT NOT NULL,
    FOREIGN KEY (userID) REFERENCES information (userID)
);

# Insert Test Data
INSERT INTO information
(first_name, last_name)
VALUES
('Buster', 'Bronco');
INSERT INTO information
(first_name, last_name)
VALUES
('Joe', 'Vandal');
INSERT INTO information
(first_name, last_name)
VALUES
('Aubie', 'Tiger');
INSERT INTO information
(first_name, last_name)
VALUES
('Ralphie', 'Buffalo');
INSERT INTO information
(first_name, last_name)
VALUES
('Cocky', 'Gamecock');
INSERT INTO information
(first_name, last_name)
VALUES
('CWI', 'Otter');
INSERT INTO information
(first_name, last_name)
VALUES
('Gus', 'Gorilla');
INSERT INTO information
(first_name, last_name)
VALUES
('Kyle', 'Killian');
INSERT INTO information
(first_name, last_name)
VALUES
('Desi', 'Tolman');
INSERT INTO information
(first_name, last_name)
VALUES
('Braxten', 'Hieb');
INSERT INTO information
(first_name, last_name)
VALUES
('Zach', 'Machiane');
INSERT INTO information
(first_name, last_name)
VALUES
('Izzy', 'Mobile');
INSERT INTO information
(first_name, last_name)
VALUES
('Beua', 'Bronson');
INSERT INTO information
(first_name, last_name)
VALUES
('David', 'Agulate');
INSERT INTO information
(first_name, last_name)
VALUES
('Chris', 'Kyle');
INSERT INTO information
(first_name, last_name)
VALUES
('Kyle', 'Holt');
INSERT INTO information
(first_name, last_name)
VALUES
('Delcan', 'James');
INSERT INTO information
(first_name, last_name)
VALUES
('First', 'Last');
INSERT INTO information
(first_name, last_name)
VALUES
('Walt', 'White');
INSERT INTO information
(first_name, last_name)
VALUES
('Jessie', 'Bronson');
INSERT INTO information
(first_name, last_name)
VALUES
('Leiws', 'Clark');

#Insert test data into visitor
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('1', 'Leiws', 'Leiws@hotmail.com', 'job', 'job', 'NA', NOW(), '1');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('2', 'Clark', 'Clark@hotmail.com', 'job', 'job', 'NA', NOW(), '2');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('3', 'Kyle', 'Kyle@hotmail.com', 'job', 'job', 'NA', NOW(), '3');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('4', 'Braxten', 'Braxten@hotmail.com', 'job', 'job', 'NA', NOW(), '4');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('5', 'Jon', 'Jon@hotmail.com', 'job', 'job', 'NA', NOW(), '5');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('6', 'John', 'John@hotmail.com', 'job', 'job', 'NA', NOW(), '6');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('7', 'Pebbles', 'Pebbles@hotmail.com', 'job', 'job', 'NA', NOW(), '7');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('8', 'Rocky', 'Rocky@hotmail.com', 'job', 'job', 'NA', NOW(), '8');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('9', 'House', 'House@hotmail.com', 'job', 'job', 'NA', NOW(), '9');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('10', 'Cindy', 'Cindy@hotmail.com', 'job', 'job', 'NA', NOW(), '10');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('11', 'Paula', 'Paula@hotmail.com', 'job', 'job', 'NA', NOW(), '11');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('12', 'Kayla', 'Kayla@hotmail.com', 'job', 'job', 'NA', NOW(), '12');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('13', 'Mat', 'Mat@hotmail.com', 'job', 'job', 'NA', NOW(), '13');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('14', 'Matt', 'Matt@hotmail.com', 'job', 'job', 'NA', NOW(), '14');
INSERT INTO visitor
(visitor_id, name, email, RFM, subject, comments, vist_date, userID)
VALUES
('15', 'Desi', 'Desi@hotmail.com', 'job', 'job', 'NA', NOW(), '15');
INSERT INTO visitor
(visitor_id, name, email, subject, comments, vist_date, userID)
VALUES
('16', 'Zach', 'Zach@hotmail.com', 'job', 'job', 'NA', NOW(), '16');
INSERT INTO visitor
(visitor_id, name, email, subject, comments, vist_date, userID)
VALUES
('17', 'Izzy', 'Izzy@hotmail.com', 'job', 'job', 'NA', '5/20/2020', '17');
INSERT INTO visitor
(visitor_id, name, email, subject, comments, vist_date, userID)
VALUES
('18', 'Brian', 'Brian@hotmail.com', 'job', 'job', 'NA', NOW(), '18');
INSERT INTO visitor
(visitor_id, name, email, subject, comments, vist_date, userID)
VALUES
('19', 'Allisa', 'Allisa@hotmail.com', 'job', 'job', 'NA', NOW(), '19');
INSERT INTO visitor
(visitor_id, name, email, subject, comments, vist_date, userID)
VALUES
('20', 'Chris', 'Chris@hotmail.com', 'job', 'job', 'NA', NOW(), '20');

use portfolio;
GRANT SELECT, INSERT, UPDATE
ON portfolio.*
TO recrute_user
IDENTIFIED by 'Pa$$w0rd';