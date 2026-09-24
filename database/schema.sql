CREATE DATABASE IF NOT EXISTS `junglebook`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `junglebook`;

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(120) NOT NULL,
  `UserName` varchar(120) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(190) NOT NULL,
  `MobileNumber` varchar(30) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `uq_tbladmin_username` (`UserName`),
  UNIQUE KEY `uq_tbladmin_email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tblpage` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `PageType` varchar(80) NOT NULL,
  `PageTitle` varchar(255) DEFAULT NULL,
  `PageDescription` text,
  `Email` varchar(190) DEFAULT NULL,
  `MobileNumber` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `uq_tblpage_type` (`PageType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tbltickettype` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `TicketType` varchar(120) NOT NULL,
  `Price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `images` varchar(255) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tblanimal` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `AnimalName` varchar(150) NOT NULL,
  `CageNumber` varchar(80) NOT NULL,
  `FeedNumber` varchar(80) NOT NULL,
  `Breed` varchar(150) DEFAULT NULL,
  `Description` text,
  `AnimalImage` varchar(255) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `uq_tblanimal_cage` (`CageNumber`),
  UNIQUE KEY `uq_tblanimal_feed` (`FeedNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tblticindian` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `visitorName` varchar(150) NOT NULL,
  `TicketID` varchar(40) NOT NULL,
  `NoAdult` unsigned int NOT NULL DEFAULT 0,
  `NoChildren` unsigned int NOT NULL DEFAULT 0,
  `AdultUnitprice` decimal(10,2) NOT NULL DEFAULT 0.00,
  `ChildUnitprice` decimal(10,2) NOT NULL DEFAULT 0.00,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `idx_tblticindian_ticket` (`TicketID`),
  KEY `idx_tblticindian_posting` (`PostingDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tblticforeigner` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `visitorName` varchar(150) NOT NULL,
  `TicketID` varchar(40) NOT NULL,
  `NoAdult` unsigned int NOT NULL DEFAULT 0,
  `NoChildren` unsigned int NOT NULL DEFAULT 0,
  `AdultUnitprice` decimal(10,2) NOT NULL DEFAULT 0.00,
  `ChildUnitprice` decimal(10,2) NOT NULL DEFAULT 0.00,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `idx_tblticforeigner_ticket` (`TicketID`),
  KEY `idx_tblticforeigner_posting` (`PostingDate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `registretion` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `E_mail` varchar(190) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_registretion_email` (`E_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `main_titale` varchar(255) NOT NULL,
  `sub_titale` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `education` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `main_titale` varchar(255) NOT NULL,
  `sub_titale` varchar(255) DEFAULT NULL,
  `link_name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `tribel` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `main_titale` varchar(255) NOT NULL,
  `sub_titale` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `e_mail` varchar(190) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `address` text,
  `images` varchar(255) DEFAULT NULL,
  `availability` varchar(120) DEFAULT NULL,
  `interests` text,
  `volunteer_id` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_volunteer_id` (`volunteer_id`),
  KEY `idx_volunteer_email` (`e_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;