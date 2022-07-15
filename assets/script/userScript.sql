CREATE TABLE `sistema_ci`.`user` 
( `id` INT(11) NOT NULL AUTO_INCREMENT, 
  `name` VARCHAR(150) NOT NULL , 
  `email` VARCHAR(255) NOT NULL , 
  `password` VARCHAR(150) NOT NULL , 
  `type` VARCHAR(5) NOT NULL , 
  `fatherId` INT(11) NOT NULL , 
  PRIMARY KEY (`id`)) 
  ENGINE = InnoDB;

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`,`fatherId`) VALUES ('1', 'Coordenador', 'coordenador@gmail.com', '123', 'CO','0');