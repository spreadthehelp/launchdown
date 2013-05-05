SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- ////    ////    ////
--     C1V0    ////
-- ////    ////    ////
-- -----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS `launchdown` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `launchdown` ;

-- -----------------------------------------------------
-- Table `templates`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `templates` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `account_id` INT(11) NOT NULL ,
  `name` VARCHAR(128) NULL ,
  `slug` VARCHAR(128) NULL ,
  `is_premium` TINYINT(1) NULL DEFAULT '0' ,
  `is_active` TINYINT(1) NULL DEFAULT 1 ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;

CREATE UNIQUE INDEX `slug_UNIQUE` ON `templates` (`slug` ASC) ;


-- -----------------------------------------------------
-- Table `contents`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `contents` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `site_id` INT(11) NOT NULL ,
  `name` VARCHAR(150) NOT NULL ,
  `content` TEXT NOT NULL ,
  `is_published` TINYINT(1) NULL DEFAULT 0 ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sites`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `sites` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `account_id` INT(11) UNSIGNED NOT NULL ,
  `name` VARCHAR(200) NOT NULL ,
  `domain` VARCHAR(64) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `template_id` INT(11) NOT NULL ,
  `content_id` INT(11) NOT NULL ,
  `is_active` TINYINT(1) NULL DEFAULT '0' ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(255) NOT NULL ,
  `first_name` VARCHAR(128) NOT NULL ,
  `last_name` VARCHAR(128) NULL DEFAULT NULL ,
  `password` BINARY(32) NOT NULL ,
  `email_verified` TINYINT(1) NULL DEFAULT NULL COMMENT 'User has verified their email address via an external link.' ,
  `tos_accepted` TINYINT(1) NULL DEFAULT 0 COMMENT 'User has accepted the Terms of Service.' ,
  `is_active` TINYINT(1) NULL DEFAULT 0 ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `accounts`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `accounts` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NULL ,
  `user_id` INT(11) NOT NULL ,
  `is_active` TINYINT(1) NULL DEFAULT 0 ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `user_meta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `user_meta` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) UNSIGNED NOT NULL ,
  `setting` MEDIUMBLOB NOT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `accounts_users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `accounts_users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `account_id` INT(11) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
