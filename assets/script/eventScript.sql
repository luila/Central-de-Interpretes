CREATE TABLE `sistema_ci`.`event` 
( `id` INT(11) NOT NULL AUTO_INCREMENT , 
  `creator_user_id` INT(11) NOT NULL , 
  `interpretor_user_id` INT(11) NOT NULL , 
  `description` VARCHAR(150) NOT NULL , 
  `place` VARCHAR(150) NOT NULL , 
  `start_date` VARCHAR(100) NOT NULL , 
  `end_date` VARCHAR(100) NOT NULL , 
  `status` TINYINT NOT NULL , 
  PRIMARY KEY (`id`)) ENGINE = InnoDB;