-- Host: localhost    Database: school

-- Table structure for table `guestbook`

CREATE TABLE users(
                      users_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
                      users_uid TINYTEXT not null,
                      users_pwd LONGTEXT not null,
                      users_email TINYTEXT not null
);

DEFAULT CHARSET = utf8mb4;

INSERT INTO `school`
VALUES (1, 'simona', 'simona123', 'simona@gmail.com'),
       (2, 'abc', 'abc123', 'info@gmail.com');