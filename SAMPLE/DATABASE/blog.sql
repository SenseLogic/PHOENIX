set @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
set @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
set @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

create schema if not exists `blog` default character set utf8mb4 collate utf8mb4_general_ci;

use `blog`;

drop table if exists `blog`.`TEXT`;

create table if not exists `blog`.`TEXT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`SECTION`;

create table if not exists `blog`.`SECTION`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Number` INT UNSIGNED NULL,
    `Name` VARCHAR( 45 ) NULL,
    `Text` TEXT NULL,
    `Image` VARCHAR( 45 ) NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`ARTICLE`;

create table if not exists `blog`.`ARTICLE`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `SectionId` INT UNSIGNED NULL,
    `UserId` INT UNSIGNED NULL,
    `Title` TEXT NULL,
    `Text` TEXT NULL,
    `Image` VARCHAR( 45 ) NULL,
    `Date` DATE NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`COMMENT`;

create table if not exists `blog`.`COMMENT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `ArticleId` INT UNSIGNED NULL,
    `UserId` INT UNSIGNED NULL,
    `Text` TEXT NULL,
    `DateTime` DATETIME NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`SUBSCRIBER`;

create table if not exists `blog`.`SUBSCRIBER`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Email` VARCHAR( 45 ) NULL,
    `IpAddress` TEXT NULL,
    `Browser` TEXT NULL,
    `Latitude` DOUBLE NULL,
    `Longitude` DOUBLE NULL,
    `CountryCode` VARCHAR( 2 ) NULL,
    `DateTime` DATETIME NULL,
    primary key( `Id` )
    ) engine = InnoDB;

create table if not exists `blog`.`CONTACT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Name` TEXT NULL,
    `Email` TEXT NULL,
    `Message` TEXT NULL,
    `DateTime` DATETIME NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`USER`;

create table if not exists `blog`.`USER`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Email` TEXT NULL,
    `Pseudonym` TEXT NULL,
    `Password` TEXT NULL,
    `IsAdministrator` TINYINT UNSIGNED NULL,
    primary key( `Id` )
    ) engine = InnoDB;

set SQL_MODE=@OLD_SQL_MODE;
set FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
set UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
