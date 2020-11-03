set @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
set @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
set @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

drop schema if exists `blog`;

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
    `Name` TEXT NULL,
    `Slug` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`ARTICLE`;

create table if not exists `blog`.`ARTICLE`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Title` TEXT NULL,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
    `Image` TEXT NULL,
    `Video` TEXT NULL,
    `SectionSlug` TEXT NULL,
    primary key( `Id` )
    ) engine = InnoDB;

drop table if exists `blog`.`CONTACT`;

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
