<?php
/**
 * This file is part of DSA 5 Character Generator.
 *
 * Image Upload is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Image Upload is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Image Upload.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   DSA 5 Character Generator
 * @author    Marian Pollzien <map@wafriv.de>
 * @copyright (c) 2015, Marian Pollzien
 * @license   https://www.gnu.org/licenses/lgpl.html LGPLv3
 */

$DB_MIGRATION = array(

	'description' => function () {
		return 'Cultures';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            CREATE TABLE `cultures` (
                `cultureId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL,
                `talents` TEXT NOT NULL,
                `experiencePoints` INT NOT NULL,
                PRIMARY KEY (`cultureId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Andergaster", "{woodWorking: +2, orientation: +1, botany: +1, mythsAndLegends: +1, zoology: +1, wildlifeLiving: +2}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Aranier", "{bewitch: +1, boardGame: +1, allayKnowledge: +2, trade: +2, knowledgeOfHumanNature: +1, calculate: +1, mythsAndLegends: +1, materialProcessing: +1, convincing: +2}", 26)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Bornländer", "{trackSeeking: +1, woodWorking: +2, foodProcessing: +1, orientation: +1, botany: +1, wildlifeLiving: +1, carouse: +2}", 18)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Fjarninger", "{daunt: +2, trackSeeking: +1, bodyControl: +1, strenuousEffort: +2, metalWorking: +1, orientation: +2, selfControl: +1, stoneWorking: +1, wildlifeLiving: +2}", 33)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Horasier", "{bewitch: +1, boatsAndShips: +1, etiquette: +2, alleyKnowledge: +2, geography: +1, historyKnowledge: +1, trade: +1, mechanics: +1, calculate: +2, justiceLore: +2, dancing: +1}", 27)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Maraskaner", "{godsAndCults: +1, medicinePoison: +2, orientation: +1, botany: +2, zoology: +2, hiding: +1, wildlifeLiving: +1}", 26)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Mhanadistani", "{boardGame: +2, alleyKnowledge: +2, historyKnowledge: +1, godsAndCults: +2, trade: +2, magicLore: +1, mythsAndLegends: +2, convincing: +1}", 28)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Mittelreicher", "{woodWorking: +1, metalWorking: +1, botany: +1, materialProcessing: +1, zoology: +1}", 12)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Mohas", "{trackSeeking: +1, medicinePoison: +1, bodyControl: +1, orientation: +1, botany: +2, mythsAndLegends: +1, sensoryAcuity: +1, zoology: +2, hiding: +1, wildlifeLiving: +2}", 38)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Nivesen", "{trackSeeking: +2, vehicles: +1, orientation: +2, botany: +1, mythsAndLegends: +2, sensoryAcuity: +1, zoology: +2, hiding: +1, wildlifeLiving: +2}", 37)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Norbarden", "{vehicles: +2, geography: +2, trade: +2, orientation: +1, convincing: +1, wildlifeLiving: +1}", 18)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Nordaventurier", "{trackSeeking: +1, trade: +1, woodWorking: +1, leatherWorking: +1, orientation: +1, botany: +1, selfControl: +1, zoology: +1, wildlifeLiving: +1, carouse: +1}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Nostrier", "{fishing: +2, orientation: +1, botany: +1, mythsAndLegends: +1, zoology: +1, wildlifeLiving: +1}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Novadis", "{daunt: +2, trackSeeking: +1, orientation: +2, justiceLore: +1, riding: +2, zoology: +1, wildlifeLiving: +2}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Südaventurier", "{bewitch: +1, boatsAndShips: +1, fishing: +1, alleyKnowledge: +2, medicinePoison: +1, knowledgeOfHumanNature: +2, convincing: +1, willPower: +1}", 26)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Svellttaler", "{trackSeeking: +2, vehicles: +2, orientation: +1, botany: +1, mythsAndLegends: +1, zoology: +1, wildlifeLiving: +1}", 21)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Thorwaler", "{boatsAndShips: +2, daunt: +1, fishing: +2, geography: +1, woodWorking: +2, strenuousEffort: +2, orientation: +1, mythsAndLegends: +1, carouse: +2}", 24)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Zyklopäer", "{boatsAndShips: +1, fishing: +2, historyKnowledge: +1, godsAndCults: +2, makeMusic: +1, calculate: +1, justiceLore: +1, mythsAndLegends: +1, dancing: +1}", 16)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Auelfen", "{bewitch: +1, boatsAndShips: +1, trackSeeking: +1, fishing: +2, bodyControl: +2, makeMusic: +2, orientation: +1, botany: +1, swimming: +2, singing: +2, sensoryAcuity: +1, zoology: +1, hiding: +1, wildlifeLiving: +1}", 43)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Firnelfen", "{trackSeeking: +2, fishing: +1, climbing: +1, bodyControl: +2, makeMusic: +2, orientation: +2, selfControl: +1, singing: +2, sensoryAcuity: +2, zoology: +2, hiding: +2, wildlifeLiving: +2}", 55)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Waldelfen", "{trackSeeking: +2, climbing: +1, bodyControl: +2, makeMusic: +2, orientation: +1, botany: +2, singing: +2, sensoryAcuity: +1, zoology: +1, hiding: +2, wildlifeLiving: +1}", 47)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Ambosszwerge", "{daunt: +1, historyKnowledge: +1, strenuousEffort: +2, artOfWar: +2, mechanics: +1, metalWorking: +2, orientation: +1, mythsAndLegends: +1, stoneWorking: +2, hiding: +1, carouse: +2}", 31)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Brillantzwerge", "{bewitch: +1, geography: +2, historyKnowledge: +1, metalWorking: +1, makeMusic: +1, mythsAndLegends: +1, pickLocks: +2, stoneWorking: +1, dancing: +1, hiding: +2, carouse: +1}", 29)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Erzzwerge", "{historyKnowledge: +2, godsAndCults: +2, mechanics: +2, metalWorking: +1, calculate: +2, justiceLore: +1, mythsAndLegends: +2, selfControl: +1, stoneWorking: +1, hiding: +2, carouse: +1}", 34)
		');

		$results[] = query_raw('
			INSERT INTO `cultures` (`name`, `talents`, `experiencePoints`) VALUES ("Hügelzwerge", "{vehicles: +1, fishing: +1, foodProcessing: +2, singing: +1, dancing: +1, hiding: +2, carouse: +1}", 13)
		');

		$results[] = query_raw('
            CREATE TABLE `speciesToCultures` (
                `speciesId` INT(10) UNSIGNED NOT NULL,
                `cultureId` INT(10) UNSIGNED NOT NULL,
                PRIMARY KEY (`speciesId`, `cultureId`),
                INDEX `speciesToCulturesCultureId` (`cultureId`),
                CONSTRAINT `speciesToCulturesCultureId` FOREIGN KEY (`cultureId`) REFERENCES `cultures` (`cultureId`) ON UPDATE CASCADE ON DELETE CASCADE,
                CONSTRAINT `speciesToCulturesSpeciesId` FOREIGN KEY (`speciesId`) REFERENCES `species` (`speciesId`) ON UPDATE CASCADE ON DELETE CASCADE
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 1)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 2)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 3)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 4)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 5)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 6)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 7)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 8)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 9)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 10)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 11)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 12)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 13)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 14)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 15)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 16)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 17)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (1, 18)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (2, 19)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (2, 20)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (2, 21)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 1)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 3)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 5)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 8)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 10)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 12)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 13)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 16)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 17)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 19)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 20)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (3, 21)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (4, 22)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (4, 23)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (4, 24)
		');

		$results[] = query_raw('
			INSERT INTO `speciesToCultures` (`speciesId`, `cultureId`) VALUES (4, 25)
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            DROP TABLE cultures
		');

        $results[] = query_raw('
            DROP TABLE speciesToCultures
		');

		return !in_array(false, $results);

	}

);