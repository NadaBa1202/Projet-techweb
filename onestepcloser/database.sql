-- Create database
CREATE DATABASE IF NOT EXISTS travel_bookings;
USE travel_bookings;

-- Create bookings table
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    telephone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    familyname VARCHAR(50) NOT NULL,
    cardcode VARCHAR(50),
    hotel_name VARCHAR(100) NOT NULL,
    price VARCHAR(20) NOT NULL,
    booking_date DATETIME NOT NULL,
    status VARCHAR(20) DEFAULT 'pending'
);