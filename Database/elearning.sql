/*
    ORIGINAL PUC E-LEARNING SYSTEM DATABASE SQL SCRIPT.
    BY : EFFAH GODWIN GOODMAN - PUC/150413
       : IJEOMA ONYESOM PEACE - PUC/
    DATE : SUNDAY DECEMBER 23, 2018
    MYSQL DATABASE
*/

/*---- Create Database ------*/
CREATE DATABASE `elearning`;
    USE `elearning`;

/*----  Create Faculty table*/
CREATE TABLE `faculty`(
    `facID` varchar(50) not null primary key,
    `facultyName` varchar(100) not null,
    `doe` datetime not null
)engine = InnoDB;

/*--- Create Department table -----*/
CREATE TABLE `department`(
    `depID` varchar(50) not null PRIMARY KEY,
    `facID` varchar(50) not null,
    `departmentName` varchar(100) not null,
    `doe` datetime
)engine = InnoDB;

/*--- Create Courses table -----*/
CREATE TABLE `courses`(
    `cID` varchar(50) not null PRIMARY KEY,
    `depID` varchar(50) not  null,
    `courseName` varchar(255) not null,
    `doe` datetime
)engine = InnoDB;

/*--- Create lecturer table -----*/
CREATE TABLE `lecturer`(
    `lecID` varchar(50) not null PRIMARY KEY,
    `facID` varchar(50) not null,
    `depID` varchar(50) not null,
    `firstName` varchar(50) not null,
    `lastName` varchar(50) not null,
    `otherName` varchar(50) null,
    `email` varchar(50) not null,
    `phone` varchar(15) not null,
    `doe` datetime
)engine = InnoDB;

/*--- Create studnet table -----*/
CREATE TABLE `student`(
    `studentID` varchar(50) not null primary key,
    `depID` varchar(50) not null,
    `firstName` varchar(50) not null,
    `lastName` varchar(50) not null,
    `otherName` varchar(50) null,
    `email` varchar(50) not null,
    `phone` varchar(15) not null,
    `school` varchar(20) not null,
    `doe` datetime
)engine = InnoDB;

/*--- Create user login table -----*/
CREATE TABLE `users`(
    `userID` varchar(50) not null,
    `email` varchar(50) not null,
    `password` varchar(50) not null,
    `access` varchar(50) not null,
    `flogin` varchar(50) not null,
    `doe` datetime
)engine = InnoDB;
