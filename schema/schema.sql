CREATE TABLE demo.client
(
client_id INTEGER AUTO_INCREMENT,
user_name TEXT,
password_hash TEXT,
last_login DATETIME,
PRIMARY KEY (client_id)
) COMMENT='this is my test table';

INSERT INTO demo.client (user_name,password_hash) VALUES ('demo', MD5('demo'));