set @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
set @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
set @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

use `blog`;

drop table if exists `blog`.`TEXT`;

create table if not exists `blog`.`TEXT`(
    `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `Slug` TEXT NULL,
    `Text` TEXT NULL,
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
