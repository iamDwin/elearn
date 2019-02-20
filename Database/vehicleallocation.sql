CREATE DATABASE `allocation`;
    use `allocation`;

CREATE TABLE `vehicle` (
    `vID` varchar(50) not null primary key,
    `model` varchar(20)  not null,
    `chasisNumber` varchar(30) not null,
    `colour` varchar(10) not null,
    `registrationNumber` varchar(20) not null,
    `dateOfPurchase` date,
    `category` varchar(50) not null,
    `company` varchar(50) not null,
    `image` varchar(50)  not null,
    `doe` datetime
)

CREATE TABLE `driver` (
    `firstName` varchar(50) not null,
    `lastName` varchar(50) not null,
    `otherName` varchar(50) not null,
    `dob` date
    `email` varchar(50) not null,
    `phone` varchar(15) not null,
    `image` varchar(50) not null,
    `licenceNumber` varchar(50) not null,
    `licenceType` varchar(50) not null,
    `status` varchar(50) not null,
    `doe` datetime
)

CREATE TABLE `vehiclegallery` (
    `id` varchar(50) not null primary key,
    `vehicleID` varchar(50) not null,
    `image` varchar(50) not null,
    `doe` datetime
)
