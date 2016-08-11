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
		return 'Species';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            CREATE TABLE `species` (
                `speciesId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `lifePoints` INT(11) NOT NULL,
                `soulEnergy` INT(11) NOT NULL,
                `toughness` INT(11) NOT NULL,
                `speed` INT(11) NOT NULL,
                `attributes` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `benefits` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `handicaps` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `experiencePoints` INT(11) NOT NULL,
                PRIMARY KEY (`speciesId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `species` (`name`, `lifePoints`, `soulEnergy`, `toughness`, `speed`, `attributes`, `benefits`, `handicaps`, `experiencePoints`) VALUES ("human", 5, -5, -5, 8, "{any:+1}", "[]", "[]", 0)
		');

		$results[] = query_raw('
			INSERT INTO `species` (`name`, `lifePoints`, `soulEnergy`, `toughness`, `speed`, `attributes`, `benefits`, `handicaps`, `experiencePoints`) VALUES ("elf", 2, -4, -6, 8, "{in: +1, ge: +1, OR: {kl: -2, kk: -2}}", "[magician, twoVoicedSinging]", "[]", 18)
		');

		$results[] = query_raw('
			INSERT INTO `species` (`name`, `lifePoints`, `soulEnergy`, `toughness`, `speed`, `attributes`, `benefits`, `handicaps`, `experiencePoints`) VALUES ("halfElf", 5, -4, -6, 8, "{any: +1}", "[]", "[]", 0)
		');

		$results[] = query_raw('
			INSERT INTO `species` (`name`, `lifePoints`, `soulEnergy`, `toughness`, `speed`, `attributes`, `benefits`, `handicaps`, `experiencePoints`) VALUES ("dwarf", 8, -4, -4, 6, "{ko: +1, kk: +1, OR: {ch: -2, ge: -2}}", "[]", "[]", 61)
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            DROP TABLE species
		');

		return !in_array(false, $results);

	}

);