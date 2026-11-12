
<?php
// XAMPP MySQL Configuration
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "wikiplant_db";

// 1. Connect to MySQL Server first
$conn = mysqli_connect($db_host, $db_user, $db_pass);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// 2. Auto-create database if missing
$sql_create_db = "CREATE DATABASE IF NOT EXISTS `$db_name`
                  DEFAULT CHARACTER SET utf8mb4
                  COLLATE utf8mb4_unicode_ci";
mysqli_query($conn, $sql_create_db);

// 3. Select database
mysqli_select_db($conn, $db_name);
mysqli_set_charset($conn, "utf8mb4");

// Auto-create tables

// Table: admin
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `admin` (
    `admin_id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;");

// Seed default Admin account if missing
$check_admin = mysqli_query(
    $conn,
    "SELECT `admin_id` FROM `admin` WHERE `username` = 'Admin' LIMIT 1"
);

if (!$check_admin) {
    die("Unable to check for the default admin account: " . mysqli_error($conn));
}

if (mysqli_num_rows($check_admin) === 0) {
    $default_admin_password = password_hash('Admin', PASSWORD_DEFAULT);
    $insert_admin = mysqli_prepare(
        $conn,
        "INSERT INTO `admin` (`username`, `password`) VALUES ('Admin', ?)"
    );

    if (!$insert_admin) {
        die("Unable to prepare the default admin account: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($insert_admin, 's', $default_admin_password);
    if (!mysqli_stmt_execute($insert_admin)) {
        die("Unable to create the default admin account: " . mysqli_stmt_error($insert_admin));
    }
    mysqli_stmt_close($insert_admin);
}

// Table: user
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `user` (
    `user_id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(25) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `phone` VARCHAR(15) DEFAULT NULL,
    `address` TEXT DEFAULT NULL,
    `profile_picture` VARCHAR(255) DEFAULT 'images/default-avatar.jpg',
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;");

// Table: register
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `register` (
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
) ENGINE=InnoDB;");

// Table: contribute
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `contribute` (
    `contribute_id` INT AUTO_INCREMENT PRIMARY KEY,
    `contributor_name` VARCHAR(50) NOT NULL,
    `plant_name` VARCHAR(50) NOT NULL,
    `plant_category` VARCHAR(30) DEFAULT 'Species',
    `other_category` VARCHAR(25) DEFAULT NULL,
    `photo_path` VARCHAR(255) DEFAULT NULL,
    `comments` TEXT DEFAULT NULL,
    `accuracy` VARCHAR(20) DEFAULT NULL,
    `status` ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;");

// Migration: Add missing columns to existing contribute table
$check = mysqli_query(
    $conn,
    "SHOW COLUMNS FROM `contribute` LIKE 'other_category'"
);

if ($check && mysqli_num_rows($check) === 0) {
    mysqli_query(
        $conn,
        "ALTER TABLE `contribute`
         ADD `other_category` VARCHAR(25) DEFAULT NULL"
    );
}

$check = mysqli_query(
    $conn,
    "SHOW COLUMNS FROM `contribute` LIKE 'accuracy'"
);

if ($check && mysqli_num_rows($check) === 0) {
    mysqli_query(
        $conn,
        "ALTER TABLE `contribute`
         ADD `accuracy` VARCHAR(20) DEFAULT NULL"
    );
}

// Table: enquiry
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `enquiry` (
    `enquiry_id` INT AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(25) NOT NULL,
    `last_name` VARCHAR(25) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `phone_number` VARCHAR(15) NOT NULL,
    `category` VARCHAR(50) NOT NULL,
    `comments` TEXT NOT NULL,
    `status` ENUM('pending', 'responded', 'closed') DEFAULT 'pending',
    `submitted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;");

// Table: plant
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `plant` (
    `plant_id` INT AUTO_INCREMENT PRIMARY KEY,
    `scientific_name` VARCHAR(100) NOT NULL,
    `common_name` VARCHAR(100) NOT NULL,
    `family` VARCHAR(50) NOT NULL,
    `genus` VARCHAR(50) NOT NULL,
    `description` TEXT DEFAULT NULL,
    `photo_path` VARCHAR(255) DEFAULT NULL
) ENGINE=InnoDB;");

?>
