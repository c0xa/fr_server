CREATE DATABASE ft_db;
CREATE USER 'tblink'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON ft_db.* TO 'tblink'@'localhost';
FLUSH PRIVILEGES;
