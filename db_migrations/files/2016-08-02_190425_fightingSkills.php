<?php
/**
 * Part of the dsa 5 character generator.
 *
 * @package sql
 * @author  friend8 <map@wafriv.de>
 * @license https://www.gnu.org/licenses/lgpl.html LGPLv3
 */

$DB_MIGRATION = [
    'description' => function () {
		return 'Fighting skills';
	},

	'up' => function ($migration_metadata) {

		$results = [];

		$results[] = query_raw('
            CREATE TABLE `fightingSkills` (
                `fightingSkillId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `code` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `conductiveProperty` ENUM("ff","ge","kk","ge/kk") NOT NULL COLLATE "utf8_bin",
                `raiseGroup` ENUM("a","b","c","d","e") NOT NULL COLLATE "utf8_bin",
                PRIMARY KEY (`fightingSkillId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("crossbow", "ff", "b")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("bow", "ff", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("dagger", "ge", "b")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("fencingWeapons", "ge", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("chopWeapons", "kk", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("chainWeapons", "kk", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("brawl", "ge/kk", "b")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("shield", "kk", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("sword", "ge/kk", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("spearWeapons", "ge/kk", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("throwingWeapons", "ff", "b")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("twohandedChopWeapons", "kk", "c")
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("twohandedSword", "kk", "c")
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = [];

		$results[] = query_raw('
            DROP TABLE fightingSkills
		');

		return !in_array(false, $results);

	}
];
