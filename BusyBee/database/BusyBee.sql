DROP DATABASE IF EXISTS BusyBee;

CREATE DATABASE IF NOT EXISTS BusyBee;

USE BusyBee;

CREATE TABLE IF NOT EXISTS users (
    UserID INT(11) AUTO_INCREMENT,
    Username VARCHAR(32) NOT NULL,
    Email VARCHAR(64) NOT NULL,
    Pass VARCHAR(255) NOT NULL,
    Subscriber BOOLEAN NOT NULL,
    CONSTRAINT PK_User PRIMARY KEY (UserID)
);

CREATE TABLE IF NOT EXISTS profiles (
    profiles_id int(11) AUTO_INCREMENT PRIMARY KEY,
    profiles_about text,
    profiles_introtitle text,
    profiles_introtext text,
    FirstName VARCHAR(32),
    Surname VARCHAR(32),
    PhoneNo int(11),
    users_id int(11),
    CONSTRAINT FK_UserID FOREIGN KEY (users_id)
    REFERENCES users(UserID)
);

CREATE TABLE IF NOT EXISTS vehicles (
    VehicleID int(11) AUTO_INCREMENT PRIMARY KEY,
    Manufacturer VARCHAR(64),
    Model VARCHAR(64),
    Variant VARCHAR(64),
    Price DECIMAL(12,2),
    Age int(4),
    Mileage int(11),
    Gearbox VARCHAR(64),
    FuelType VARCHAR(64),
    EngineSize DECIMAL(2,1),
    Colour VARCHAR(64),
    Category VARCHAR(64),
    UserID int(11),
    CONSTRAINT FK_User FOREIGN KEY (UserID)
    REFERENCES users(UserID)
);

CREATE TABLE IF NOT EXISTS orders (
    OrderID int(11) NOT NULL AUTO_INCREMENT,
    UserID int(11) NOT NULL,
    VehicleID int(11) NOT NULL,
    Registration varchar(7) NOT NULL, 
    CONSTRAINT PK_Orders PRIMARY KEY (OrderID),
    CONSTRAINT FK_UserOrder FOREIGN KEY (UserID) REFERENCES users(UserID),
    CONSTRAINT FK_vehicles FOREIGN KEY (VehicleID) REFERENCES vehicles (VehicleID)
);
