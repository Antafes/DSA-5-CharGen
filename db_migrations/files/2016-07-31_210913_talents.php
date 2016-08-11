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
		return 'Add talents';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            CREATE TABLE `talents` (
                `talentId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `talentCode` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `talentGroup` ENUM("physical","social","nature","knowledge","crafting") NOT NULL,
                `attribute1` ENUM("mu","kl","in","ch","ff","ge","ko","kk") NOT NULL COLLATE "utf8_bin",
                `attribute2` ENUM("mu","kl","in","ch","ff","ge","ko","kk") NOT NULL COLLATE "utf8_bin",
                `attribute3` ENUM("mu","kl","in","ch","ff","ge","ko","kk") NOT NULL COLLATE "utf8_bin",
                `handicap` ENUM("yes","no","maybe") NOT NULL COLLATE "utf8_bin",
                `raiseGroup` ENUM("a","b","c","d","e") NOT NULL COLLATE "utf8_bin",
                PRIMARY KEY (`talentId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("fly", "physical", "mu", "in", "ge", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("jugglery", "physical", "mu", "ch", "ff", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("climbing", "physical", "mu", "ge", "kk", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("bodyControl", "physical", "ge", "ge", "ko", "yes", "d")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("strenuousEffort", "physical", "ko", "kk", "kk", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("riding", "physical", "ch", "ge", "kk", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("swimming", "physical", "ge", "ko", "kk", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("selfControl", "physical", "mu", "mu", "ko", "no", "d")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("singing", "physical", "kl", "ch", "ko", "maybe", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("sensoryAcuity", "physical", "kl", "in", "in", "maybe", "d")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("dancing", "physical", "kl", "ch", "ge", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("pickpocketing", "physical", "mu", "ff", "ge", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("hiding", "physical", "mu", "in", "ge", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("carouse", "physical", "kl", "ko", "kk", "no", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("persuade", "social", "mu", "kl", "ch", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("bewitch", "social", "mu", "ch", "ch", "maybe", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("daunt", "social", "mu", "in", "ch", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("etiquette", "social", "kl", "in", "ch", "maybe", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("alleyKnowledge", "social", "kl", "in", "ch", "maybe", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("knowledgeOfHumanNature", "social", "kl", "in", "ch", "no", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("convincing", "social", "mu", "in", "ch", "no", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("jacket", "social", "in", "ch", "ge", "maybe", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("willPower", "social", "mu", "in", "ch", "no", "d")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("trackSeeking", "nature", "mu", "in", "ge", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("bonding", "nature", "kl", "ff", "kk", "maybe", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("fishing", "nature", "ff", "ge", "ko", "maybe", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("orientation", "nature", "kl", "in", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("botany", "nature", "kl", "ff", "ko", "maybe", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("zoology", "nature", "mu", "mu", "ch", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("wildlifeLiving", "nature", "mu", "ge", "ko", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("boardGame", "knowledge", "kl", "kl", "in", "no", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("geography", "knowledge", "kl", "kl", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("historyKnowledge", "knowledge", "kl", "kl", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("godsAndCults", "knowledge", "kl", "kl", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("artOfWar", "knowledge", "mu", "kl", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("magicLore", "knowledge", "kl", "kl", "in", "no", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("mechanics", "knowledge", "kl", "kl", "ff", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("calculate", "knowledge", "kl", "kl", "in", "no", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("justiceLore", "knowledge", "kl", "kl", "in", "no", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("mythsAndLegends", "knowledge", "kl", "kl", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("sphereLore", "knowledge", "kl", "kl", "in", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("astronomy", "knowledge", "kl", "kl", "in", "no", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("alchemy", "crafting", "mu", "kl", "ff", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("boatsAndShips", "crafting", "ff", "ge", "kk", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("vehicles", "crafting", "ch", "ff", "ko", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("trade", "crafting", "kl", "in", "ch", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("medicinePoison", "crafting", "mu", "kl", "in", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("medicineIllness", "crafting", "mu", "in", "ko", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("medicineSoul", "crafting", "in", "ch", "ko", "no", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("medicineWound", "crafting", "kl", "ff", "ff", "yes", "d")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("woodWorking", "crafting", "ff", "ge", "kk", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("foodProcessing", "crafting", "in", "ff", "ff", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("leatherWorking", "crafting", "ff", "ge", "ko", "yes", "b")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("paintingAndDrawing", "crafting", "in", "ff", "ff", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("metalWorking", "crafting", "ff", "ko", "kk", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("makeMusic", "crafting", "ch", "ff", "ko", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("pickLocks", "crafting", "in", "ff", "ff", "yes", "c")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("stoneWorking", "crafting", "ff", "ff", "kk", "yes", "a")
		');

		$results[] = query_raw('
			INSERT INTO `talents` (`talentCode`, `talentGroup`, `attribute1`, `attribute2`, `attribute3`, `handicap`, `raiseGroup`) VALUES ("materialProcessing", "crafting", "kl", "ff", "ff", "yes", "a")
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$result[] = query_raw('
			DROP TABLE talents
		');

		return !in_array(false, $results);

	}

);