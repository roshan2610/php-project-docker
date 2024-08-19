CREATE DATABASE IF NOT EXISTS portfolio-site;

USE portfolio-site;

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` BIGINT NOT NULL,
  `enquiry` varchar(150) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `users` (
  `user_id` int AUTO_INCREMENT PRIMARY KEY,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` BIGINT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

