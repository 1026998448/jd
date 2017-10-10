SET NAMES UTF8;
DROP DATABASE IF EXISTS jd;
CREATE DATABASE jd CHARSET=UTF8;

USE jd;
CREATE TABLE userinfo(
  userid INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(32), 
  userpw VARCHAR(32), 
  telephone INT,  
  email VARCHAR(32)
);

INSERT INTO userinfo VALUES(NULL,'lug','1234gf','12345678','www.qq2134433.com');
		
SELECT * FROM userinfo;
