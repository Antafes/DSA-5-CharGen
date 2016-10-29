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
 * along with the DSA 5 Character Generator.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 * @package   DSA 5 Character Generator
 * @author    Marian Pollzien <map@wafriv.de>
 * @copyright (c) 2015, Marian Pollzien
 * @license   https://www.gnu.org/licenses/lgpl.html LGPLv3
 */

$DB_MIGRATION = array(

	'description' => function () {
		return 'Experience degrees';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            CREATE TABLE `experienceDegree` (
                `experienceDegreeId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `skillPoints` INT(11) NOT NULL,
                `maximumAttribute` INT(11) NOT NULL,
                `maximumTalent` INT(11) NOT NULL,
                `maximumFightingSkill` INT(11) NOT NULL,
                `maximumSummedAttributes` INT(11) NOT NULL,
                `maximumSpells` INT(11) NOT NULL,
                `maximumForeignSpells` INT(11) NOT NULL,
                `default` TINYINT(1) NOT NULL,
                PRIMARY KEY (`experienceDegreeId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("unexpirienced", 900, 12, 10, 8, 95, 8, 0, 0)
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("average", 1000, 13, 10, 10, 98, 10, 1, 0)
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("experienced", 1100, 14, 10, 12, 100, 12, 2, 1)
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("competent", 1200, 15, 13, 14, 102, 14, 3, 0)
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("masterly", 1400, 16, 16, 16, 105, 16, 4, 0)
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("brilliant", 1700, 17, 19, 18, 109, 18, 5, 0)
		');

		$results[] = query_raw('
			INSERT INTO `experienceDegree` (`name`, `skillPoints`, `maximumAttribute`, `maximumTalent`, `maximumFightingSkill`, `maximumSummedAttributes`, `maximumSpells`, `maximumForeignSpells`, `default`) VALUES ("legendary", 2100, 18, 20, 20, 114, 20, 6, 0)
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            DROP TABLE experienceDegree
		');

		return !in_array(false, $results);

	}

);