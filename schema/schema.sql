use demo;

CREATE TABLE client
(
client_id INTEGER AUTO_INCREMENT,
user_name VARCHAR,
password_hash VARCHAR,
last_login DATETIME,
PRIMARY KEY (client_id)
) COMMENT='this is my test table';