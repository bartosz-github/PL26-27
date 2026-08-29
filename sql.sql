CREATE TABLE `pl2627`.`pltable` (`id` INT NOT NULL AUTO_INCREMENT, `pos` TINYINT NOT NULL , `emblem` TEXT NOT NULL ,`team` TEXT NOT NULL,  `abr` TEXT NOT NULL, `played` SMALLINT NOT NULL , `won` SMALLINT NOT NULL , `drawn` SMALLINT NOT NULL , `lost` SMALLINT NOT NULL , `for_goals` SMALLINT NOT NULL , `against_goals` SMALLINT NOT NULL , `gd` SMALLINT NOT NULL , `points` SMALLINT NOT NULL , `MW1` TINYTEXT NOT NULL DEFAULT '\'W\', \'L\', \'D\'' , `MW2` TINYTEXT NOT NULL , `MW3` TINYTEXT NOT NULL , `MW4` TINYTEXT NOT NULL , `MW5` TINYTEXT NOT NULL , `MW6` TINYTEXT NOT NULL , `MW7` TINYTEXT NOT NULL , `MW8` TINYTEXT NOT NULL , `MW9` TINYTEXT NOT NULL , `MW10` TINYTEXT NOT NULL , `MW11` TINYTEXT NOT NULL , `MW12` TINYTEXT NOT NULL , `MW13` TINYTEXT NOT NULL , `MW14` TINYTEXT NOT NULL , `MW15` TINYTEXT NOT NULL , `MW16` TINYTEXT NOT NULL , `MW17` TINYTEXT NOT NULL , `MW18` TINYTEXT NOT NULL , `MW19` TINYTEXT NOT NULL , `MW20` TINYTEXT NOT NULL , `MW21` TINYTEXT NOT NULL , `MW22` TINYTEXT NOT NULL , `MW23` TINYTEXT NOT NULL , `MW24` TINYTEXT NOT NULL , `MW25` TINYTEXT NOT NULL , `MW26` TINYTEXT NOT NULL , `MW27` TINYTEXT NOT NULL , `MW28` TINYTEXT NOT NULL , `MW29` TINYTEXT NOT NULL , `MW30` TINYTEXT NOT NULL , `MW31` TINYTEXT NOT NULL , `MW32` TINYTEXT NOT NULL , `MW33` TINYTEXT NOT NULL , `MW34` TINYTEXT NOT NULL , `MW35` TINYTEXT NOT NULL , `MW36` TINYTEXT NOT NULL , `MW37` TINYTEXT NOT NULL , `MW38` TINYTEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- 

ALTER TABLE `pltable` ADD INDEX(`id`);

ALTER TABLE `pltable` ADD UNIQUE INDEX(`id`);

ALTER TABLE `pltable` ADD UNIQUE (`team`);

-- 
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (1,'Arsenal','Ars');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (2,'Aston Villa','Ast');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (3,'Bournemouth','Bou');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (4,'Brentford','Bre');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (5,'Brighton & Hove Albion','Bri');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (6,'Chelsea','Che');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (7,'Coventry City','Cov');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (8,'Crystal Palace','Cry');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (9,'Everton','Eve');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (10,'Fulham','Ful');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (11,'Hull City','Hul');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (12,'Ipswich Town','Ips');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (13,'Leeds United','Lee');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (14,'Liverpool','Liv');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (15,'Manchester City','ManC');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (16,'Manchester United','ManU');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (17,'Newcastle United','New');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (18,'Nottingham Forest','Not');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (19,'Sunderland','Sun');
INSERT INTO `pltable`(`pos`,`team`, `team_abr`) VALUES (20,'Tottenham Hotspur','Tot');