SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `creator_user_id` int(11) NOT NULL,
  `interpretor_user_id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `place` varchar(150) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `event_interpreter` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `interpretor_user_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `interpretor_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `id_user_login` int(11) NOT NULL,
  `time_submit_login` varchar(40) NOT NULL,
  `name_login` varchar(150) NOT NULL,
  `email_login` varchar(255) NOT NULL,
  `user_device` varchar(100) NOT NULL,
  `user_platform` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `logout` (
  `id` int(11) NOT NULL,
  `id_user_logout` int(11) NOT NULL,
  `time_submit_logout` varchar(40) NOT NULL,
  `name_logout` varchar(255) NOT NULL,
  `email_logout` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `questionnaire` (
  `id` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `time_submit_questionnaire` varchar(40) NOT NULL,
  `idade` int(3) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `escolaridade` varchar(40) NOT NULL,
  `surdez` varchar(10) NOT NULL,
  `fluencia_libras` varchar(10) NOT NULL,
  `idade_libras` varchar(50) NOT NULL,
  `pais_libras` varchar(10) NOT NULL,
  `pais_surdos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `sus_libras` (
  `id_susLibras` int(11) NOT NULL,
  `id_user_susLibras` int(11) NOT NULL,
  `q1_susLibras` int(11) NOT NULL,
  `q2_susLibras` int(11) NOT NULL,
  `q3_susLibras` int(11) NOT NULL,
  `q4_susLibras` int(11) NOT NULL,
  `q5_susLibras` int(11) NOT NULL,
  `q6_susLibras` int(11) NOT NULL,
  `q7_susLibras` int(11) NOT NULL,
  `q8_susLibras` int(11) NOT NULL,
  `q9_susLibras` int(11) NOT NULL,
  `q10_susLibras` int(11) NOT NULL,
  `q11_susAdjLibras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sus_portugues` (
  `id_susPortugues` int(11) NOT NULL,
  `id_user_susPortugues` int(11) NOT NULL,
  `q1_susPortugues` int(11) NOT NULL,
  `q2_susPortugues` int(11) NOT NULL,
  `q3_susPortugues` int(11) NOT NULL,
  `q4_susPortugues` int(11) NOT NULL,
  `q5_susPortugues` int(11) NOT NULL,
  `q6_susPortugues` int(11) NOT NULL,
  `q7_susPortugues` int(11) NOT NULL,
  `q8_susPortugues` int(11) NOT NULL,
  `q9_susPortugues` int(11) NOT NULL,
  `q10_susPortugues` int(11) NOT NULL,
  `q11_susAdjPortugues` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `task1` (
  `id` int(11) NOT NULL,
  `id_user_tester` int(11) NOT NULL,
  `email_user_tester` varchar(140) NOT NULL,
  `task1_start` varchar(40) NOT NULL,
  `task1_end` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `task2` (
  `id` int(11) NOT NULL,
  `id_user_tester` int(11) NOT NULL,
  `email_user_tester` varchar(140) NOT NULL,
  `task2_start` varchar(40) NOT NULL,
  `task2_end` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `task3` (
  `id` int(11) NOT NULL,
  `id_user_tester` int(11) NOT NULL,
  `email_user_tester` varchar(140) NOT NULL,
  `task3_start` varchar(40) NOT NULL,
  `task3_end` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tcle` (
  `id_test` int(11) NOT NULL,
  `id_user_tester` int(11) NOT NULL,
  `email_user_tester` varchar(150) NOT NULL,
  `tcle_accept` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `type` varchar(5) NOT NULL,
  `fatherId` int(11) NOT NULL,
  `time_submit_new_user` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`, `fatherId`, `time_submit_new_user`) VALUES
(1, 'Coordenador', 'coordenador@gmail.com', '123', 'CO', 0, ''),
(2, 'Carbonaut', 'carbonaut@carbonaut.com', '1111', 'IN', 1, ''),
(3, 'Ana Ferreira', 'anaferreira@email.com', '111', 'IN', 2, '15-07-2022 07:20'),
(4, 'José Silva', 'josesilva@email.com', '222', 'IN', 2, '15-07-2022 07:20');;
DROP TABLE IF EXISTS `list_tils`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_tils`  AS  select `user`.`name` AS `name`,`user`.`email` AS `email` from `user` where (`user`.`type` = 'IN') ;

ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `event_interpreter`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `logout`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

ALTER TABLE `sus_libras`
  ADD PRIMARY KEY (`id_susLibras`);

ALTER TABLE `sus_portugues`
  ADD PRIMARY KEY (`id_susPortugues`);

ALTER TABLE `task1`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `task2`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `task3`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tcle`
  ADD PRIMARY KEY (`id_test`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

ALTER TABLE `event_interpreter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

ALTER TABLE `logout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

ALTER TABLE `questionnaire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

ALTER TABLE `sus_libras`
  MODIFY `id_susLibras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

ALTER TABLE `sus_portugues`
  MODIFY `id_susPortugues` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `task1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `task2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `task3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `tcle`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;


ALTER TABLE `questionnaire`
  ADD CONSTRAINT `questionnaire_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;
