-- Create the database first 
CREATE DATABASE IF NOT EXISTS `wikiplant_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci; 
USE `wikiplant_db`; 

-- Admin table 
CREATE TABLE IF NOT EXISTS `admin` ( 
    `admin_id` INT AUTO_INCREMENT PRIMARY KEY, 
    `username` VARCHAR(50) NOT NULL UNIQUE, 
    `password` VARCHAR(255) NOT NULL, 
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB; 

-- Insert default admin creds 
INSERT INTO `admin` (`username`, `password`) 
VALUES ('Admin', 'Admin') 
ON DUPLICATE KEY UPDATE `username`=`username`; 

-- User table 
CREATE TABLE IF NOT EXISTS `user` ( 
    `user_id` INT AUTO_INCREMENT PRIMARY KEY, 
    `username` VARCHAR(25) NOT NULL UNIQUE, 
    `password` VARCHAR(255) NOT NULL, 
    `email` VARCHAR(100) NOT NULL UNIQUE, 
    `phone` VARCHAR(15) DEFAULT NULL, 
    `address` TEXT DEFAULT NULL, 
    `profile_picture` VARCHAR(255) DEFAULT 'images/default-avatar.jpg', 
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB; 

-- Register form table 
CREATE TABLE IF NOT EXISTS `register` ( 
    `register_id` INT AUTO_INCREMENT PRIMARY KEY, 
    `first_name` VARCHAR(25) NOT NULL, 
    `last_name` VARCHAR(25) NOT NULL, 
    `username` VARCHAR(25) NOT NULL, 
    `email` VARCHAR(100) NOT NULL, 
    `phone_number` VARCHAR(15) NOT NULL, 
    `street_address` VARCHAR(40) NOT NULL, 
    `city_town` VARCHAR(20) NOT NULL, 
    `state` VARCHAR(30) NOT NULL, 
    `postcode` VARCHAR(5) NOT NULL, 
    `registration_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB; 

-- Contribution form table 
CREATE TABLE IF NOT EXISTS `contribute` ( 
    `contribute_id` INT AUTO_INCREMENT PRIMARY KEY, 
    `contributor_name` VARCHAR(50) NOT NULL, 
    `plant_name` VARCHAR(50) NOT NULL, 
    `plant_category` VARCHAR(30) DEFAULT 'Species', 
    `photo_path` VARCHAR(255) DEFAULT NULL, 
    `comments` TEXT DEFAULT NULL, 
    `status` ENUM('pending', 'approved', 'rejected') DEFAULT 'pending', 
    `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB; 

-- Enquiry Form table 
CREATE TABLE IF NOT EXISTS `enquiry` ( 
    `enquiry_id` INT AUTO_INCREMENT PRIMARY KEY, 
    `first_name` VARCHAR(25) NOT NULL, 
    `last_name` VARCHAR(25) NOT NULL, 
    `email` VARCHAR(100) NOT NULL, 
    `phone_number` VARCHAR(15) NOT NULL, 
    `category` VARCHAR(50) NOT NULL, 
    `comments` TEXT NOT NULL, 
    `status` ENUM('pending', 'responded', 'closed') DEFAULT 'pending', 
    `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
) ENGINE=InnoDB; 

-- Plants table 
CREATE TABLE IF NOT EXISTS `plant` ( 
    `plant_id` INT AUTO_INCREMENT PRIMARY KEY, 
    `scientific_name` VARCHAR(100) NOT NULL, 
    `common_name` VARCHAR(100) NOT NULL, 
    `family` VARCHAR(50) NOT NULL, 
    `genus` VARCHAR(50) NOT NULL, 
    `description` TEXT DEFAULT NULL, 
    `photo_path` VARCHAR(255) DEFAULT NULL 
) ENGINE=InnoDB;