-- Created by Professor Wergeles for CS2830 at the University of Missouri


-- Set password for your root user so it is harder to get into the admin account 
SET PASSWORD FOR 'root'@'localhost' = PASSWORD('nick');


-- Grant regular user "ec2-user" to select, insert, and update the database. 
-- You should not use "root" when updating the database from the PHP running from browser
-- You will use "ec2-user" instead that way it is a more secure system
GRANT SELECT, INSERT, UPDATE ON CS2830.* TO 'ec2-user'@'localhost';


-- Set password for your new mysql user 
SET PASSWORD FOR 'ec2-user'@'localhost' = PASSWORD('nick'); 


create table users (
id int primary key auto_increment,
username varchar(255) not null unique,
password text not null, 
addDate datetime,
changeDate datetime
); 

INSERT INTO users (username, password, addDate, changeDate) VALUES ('nick', 'nick', now(), now() ); 

select * from users; 

update users set password = sha1(password), changeDate = now() where id = 1;  

INSERT INTO users (username, password, addDate, changeDate) VALUES ('test', sha1('pass'), now(), now() ); 

insert into users (username, password, addDate, changeDate) values ('guest', sha1('guest'), now(), now() ); 


