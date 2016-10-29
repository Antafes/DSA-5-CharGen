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
		return 'Professions';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            CREATE TABLE `professions` (
                `professionId` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `parent` INT UNSIGNED NOT NULL,
                `name` VARCHAR(255) NOT NULL,
                `experiencePoints` INT NOT NULL,
                `prerequisites` TEXT NOT NULL,
                `specialAbilities` TEXT NOT NULL,
                `fightingSkills` TEXT NOT NULL,
                `talents` TEXT NOT NULL,
                `spells` TEXT NOT NULL,
                `liturgies` TEXT NOT NULL,
                PRIMARY KEY (`professionId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `fightingSkills` (`code`, `conductiveProperty`, `raiseGroup`) VALUES ("lance", "kk", "b")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "bard", 150, "{}", "{\"languagesAndWritings\": {\"experience\": 16}, \"specialAbilities\": [{\"talentSpecialisation\": \"makeMusic\"}]}", "{\"dagger\": 8, \"brawl\": 8}", "{\"singing\": 7, \"dancing\": 2, \"persuade\": 2, \"bewitch\": 2, \"etiquette\": 4, \"alleyKnowledge\": 4, \"knowledgeOfHumanNature\": 5, \"convincing\": 5, \"wildlifeLiving\": 2, \"geography\": 4, \"historyKnowledge\": 4, \"godsAndCults\": 4, \"calculate\": 3, \"justiceLore\": 2, \"mythsAndLegends\": 5, \"woodWorking\": 3, \"makeMusic\": 7}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (1, "storyteller", 144, "{}", "{\"languagesAndWritings\": {\"experience\": 16}, \"specialAbilities\": [{\"talentSpecialisation\": mythsAndLegends\"}]}", "{\"dagger\": 8, \"brawl\": 8}", "{\"singing\": 0, \"dancing\": 2, \"persuade\": 2, \"bewitch\": 2, \"etiquette\": 4, \"alleyKnowledge\": 7, \"knowledgeOfHumanNature\": 5, \"convincing\": 5, \"wildlifeLiving\": 2, \"geography\": 4, \"historyKnowledge\": 4, \"godsAndCults\": 4, \"calculate\": 3, \"justiceLore\": 2, \"mythsAndLegends\": 7, \"woodWorking\": 0, \"makeMusic\": 0}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (1, "Haimamud", 144, "{\"culture\": {\"oneOf\": [\"Aranien\", \"Mhanadistani\", \"Novadis\"]}}", "{\"languagesAndWritings\": {\"experience\": 16}, \"specialAbilities\": [{\"talentSpecialisation\": mythsAndLegends\"}]}", "{\"dagger\": 8, \"brawl\": 8}", "{\"singing\": 0, \"dancing\": 2, \"persuade\": 2, \"bewitch\": 2, \"etiquette\": 4, \"alleyKnowledge\": 7, \"knowledgeOfHumanNature\": 5, \"convincing\": 5, \"wildlifeLiving\": 2, \"geography\": 4, \"historyKnowledge\": 4, \"godsAndCults\": 4, \"calculate\": 3, \"justiceLore\": 2, \"mythsAndLegends\": 7, \"woodWorking\": 0, \"makeMusic\": 0}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (1, "skald", 162, "{\"culture\": \"Thorwaler\"}", "{\"languagesAndWritings\": {\"experience\": 16}, \"specialAbilities\": [{\"talentSpecialisation\": mythsAndLegends\"}]}", "{\"dagger\": 8, \"brawl\": 8, \"chopWeapons\": 8}", "{\"singing\": 7, \"dancing\": 2, \"persuade\": 2, \"bewitch\": 2, \"etiquette\": 4, \"alleyKnowledge\": 4, \"knowledgeOfHumanNature\": 5, \"convincing\": 5, \"wildlifeLiving\": 2, \"geography\": 4, \"historyKnowledge\": 4, \"godsAndCults\": 4, \"calculate\": 3, \"justiceLore\": 2, \"mythsAndLegends\": 8, \"woodWorking\": 3, \"makeMusic\": 7}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "guardsman", 246, "{\"constitution\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"alleyKnowledge\"}, \"loadFamiliarization1\", \"mightyBlow1\"]}", "{\"crossbow\": 10, \"brawl\": 8, \"some\": {\"count\": 2, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\"], \"value\": 10}}", "{\"bodyControl\": 3, \"selfControl\": 4, \"sensoryAcuity\": 5, \"daunt\": 4, \"etiquette\": 3, \"alleyKnowledge\": 6, \"knowledgeOfHumanNature\": 3, \"convincing\": 2, \"willPower\": 4, \"bonding\": 4, \"orientation\": 5, \"godsAndCults\": 4, \"artOfWar\": 2, \"justiceLore\": 5, \"vehicles\": 4, \"medicineWound\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (5, "overseer", 235, "{\"constitution\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"alleyKnowledge\"}, \"mightyBlow1\"]}", "{\"crossbow\": 10, \"brawl\": 8, \"some\": {\"count\": 2, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\"], \"value\": 10}}", "{\"bodyControl\": 3, \"selfControl\": 4, \"sensoryAcuity\": 5, \"daunt\": 7, \"trackSeeking\": 2, \"etiquette\": 3, \"alleyKnowledge\": 6, \"knowledgeOfHumanNature\": 3, \"convincing\": 2, \"willPower\": 4, \"bonding\": 4, \"orientation\": 5, \"godsAndCults\": 4, \"artOfWar\": 2, \"justiceLore\": 5, \"vehicles\": 0, \"medicineWound\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (5, "jailer", 240, "{\"constitution\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"alleyKnowledge\"}, \"mightyBlow1\"]}", "{\"crossbow\": 10, \"brawl\": 8, \"some\": {\"count\": 2, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\"], \"value\": 10}}", "{\"persuade\": 2, \"bodyControl\": 3, \"selfControl\": 4, \"sensoryAcuity\": 5, \"daunt\": 7, \"etiquette\": 3, \"alleyKnowledge\": 6, \"knowledgeOfHumanNature\": 3, \"convincing\": 2, \"willPower\": 4, \"bonding\": 7, \"orientation\": 5, \"godsAndCults\": 4, \"artOfWar\": 2, \"justiceLore\": 5, \"vehicles\": 4, \"medicineWound\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (5, "tollkeeper", 257, "{\"constitution\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"alleyKnowledge\"}, \"loadFamiliarization1\", \"mightyBlow1\"]}", "{\"crossbow\": 10, \"brawl\": 8, \"some\": {\"count\": 2, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\"], \"value\": 10}}", "{\"bodyControl\": 3, \"selfControl\": 4, \"sensoryAcuity\": 5, \"daunt\": 4, \"etiquette\": 3, \"alleyKnowledge\": 6, \"knowledgeOfHumanNature\": 7, \"convincing\": 2, \"willPower\": 4, \"bonding\": 4, \"orientation\": 5, \"godsAndCults\": 4, \"artOfWar\": 2, \"justiceLore\": 5, \"vehicles\": 4, \"medicineWound\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "juggler", 160, "{}", "{\"languagesAndWritings\": {\"experience\": 2}, \"specialAbilities\": [{\"talentSpecialization\": \"jugglery\"}]}", "{\"brawl\": 8, \"throwingWeapons\": 8}", "{\"jugglery\": 7, \"climbing\": 4, \"bodyControl\": 7, \"strenuousEffort\": 2, \"riding\": 2, \"dancing\": 2, \"pickpocketing\": 3, \"hiding\": 3, \"carouse\": 3, \"alleyKnowledge\": 2, \"knowledgeOfHumanNature\": 4, \"convincing\": 2, \"jacket\": 5, \"zoology\": 2, \"wildlifeLiving\": 3, \"geography\": 3, \"godsAndCults\": 2, \"mythsAndLegends\": 5, \"vehicles\": 4, \"paintingAndDrawing\": 2, \"makeMusic\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (9, "acrobat", 173, "{}", "{\"languagesAndWritings\": {\"experience\": 2}, \"specialAbilities\": [{\"talentSpecialization\": \"bodyControl\"}]}", "{\"brawl\": 8, \"throwingWeapons\": 8}", "{\"jugglery\": 7, \"climbing\": 7, \"bodyControl\": 8, \"strenuousEffort\": 2, \"riding\": 2, \"dancing\": 2, \"pickpocketing\": 3, \"hiding\": 3, \"carouse\": 3, \"alleyKnowledge\": 2, \"knowledgeOfHumanNature\": 4, \"convincing\": 2, \"jacket\": 5, \"zoology\": 2, \"wildlifeLiving\": 3, \"geography\": 3, \"godsAndCults\": 2, \"mythsAndLegends\": 5, \"vehicles\": 4, \"paintingAndDrawing\": 2, \"makeMusic\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "gladiator", 164, "{\"agility\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": {\"experience\": 2}, \"specialAbilities\": [{\"talentSpecialisation\": \"strenuousEffort\"}, \"feint1\", \"mightyBlow1\"]}", "{\"brawl\": 12, \"some\": {\"count\": 1, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\"], \"value\": 12}}", "{\"bodyControl\": 4, \"strenuousEffort\": 6, \"selfControl\": 5, \"carouse\": 3, \"daunt\": 5, \"knowledgeOfHumanNature\": 3, \"godsAndCults\": 4, \"artOfWar\": 3, \"medicineWound\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "trader", 136, "{}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"trade\"}]}", "{\"spearWeapons\": 8}", "{\"sensoryAcuity\": 3, \"etiquette\": 4, \"alleyKnowledge\": 3, \"knowledgeOfHumanNature\": 5, \"convincing\": 5, \"willPower\": 4, \"geography\": 2, \"godsAndCults\": 3, \"calculate\": 6, \"justiceLore\": 4, \"mythsAndLegends\": 3, \"vehicles\": 3, \"trade\": 7}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "healer", 207, "{}", "{\"languagesAndWritings\": {\"experience\": 8}, \"specialAbilities\": [{\"talentSpecialisation\": \"medicineWound\"}]}", "{\"dagger\": 8, \"chopWeapons\": 8}", "{\"selfControl\": 6, \"sensoryAcuity\": 4, \"etiquette\": 4, \"knowledgeOfHumanNature\": 5, \"convincing\": 4, \"bonding\": 4, \"botany\": 6, \"zoology\": 6, \"godsAndCults\": 4, \"calculate\": 5, \"justiceLore\": 3, \"mythsAndLegends\": 2, \"medicinePoison\": 5, \"medicineIllnes\": 6, \"medicineWound\": 7}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "courtier", 176, "{\"advantage\": {\"oneOf\": [\"nobility1\", \"nobility2\", \"nobility3\"]}}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"etiquette\"}]}", "{\"bow\": 8, \"dagger\": 8, \"some\": {\"count\": 1, \"items\": [\"fencingWeapons\", \"sword\"], \"value\": 8}", "{\"riding\": 5, \"sensoryAcuity\": 4, \"dancing\": 4, \"hiding\": 3, \"carouse\": 2, \"persuade\": 4, \"bewitch\": 4, \"etiquette\": 7, \"knowledgeOfHumanNature\": 7, \"convincing\": 4, \"willPower\": 5, \"historyKnowledge\": 2, \"godsAndCults\": 3, \"calculate\": 3, \"justiceLore\": 3, \"mythsAndLegends\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "hunter", 246, "{}", "{\"languages\": {\"experience\": 6}, \"specialAbilities\": [{\"talentSpecialisation\": \"trackSeeking\"}]}", "{\"bow\": 12, \"spearWeapons\": 8}", "{\"climbing\": 4, \"bodyControl\": 4, \"strenuousEffort\": 2, \"swimming\": 4, \"selfControl\": 3, \"sensoryAcuity\": 6, \"hiding\": 5, \"trackSeeking\": 7, \"bonding\": 4, \"orientation\": 6, \"botany\": 5, \"zoology\": 5, \"wildlifeLiving\": 7, \"godsAndCults\": 3, \"mythsAndLegends\": 4, \"medicineWound\": 3, \"woodWorking\": 3, \"leatherWorking\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "warrior", 216, "{\"agility\": 13, \"constitution\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"artOfWar\"}, \"loadFamiliarization1\", \"feint1\", \"advance\", \"mightyBlow1\"]}", "{\"brawl\": 10, \"some\": {\"count\": 1, \"items\": [\"chopWeapons\", \"chainWeapons\", \"sword\", \"twohandedChopWeapons\", \"twohandedSword\"], \"value\": 12}}", "{\"bodyControl\": 4, \"strenuousEffort\": 4, \"riding\": 4, \"selfControl\": 4, \"sensoryAcuity\": 2, \"etiquette\": 5, \"knowledgeOfHumanNature\": 2, \"willPower\": 4, \"historyKnowledge\": 3, \"godsAndCults\": 3, \"artOfWar\": 7, \"mythsAndLegends\": 2}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "prostitute", 203, "{}", "{\"languages\": {\"experience\": 6}, \"specialAbilities\": [{\"talentSpecialisation\": \"bewitch\"}]}", "{\"dagger\": 8, \"brawl\": 8}", "{\"bodyControl\": 3, \"selfControl\": 4, \"sensoryAcuity\": 4, \"dancing\": 2, \"pickpocketing\": 2, \"hiding\": 4, \"carouse\": 5, \"bewitch\": 6, \"alleyKnowledge\": 6, \"knowledgeOfHumanNature\": 6, \"convincing\": 3, \"jacket\": 2, \"willPower\": 4, \"godsAndCults\": 3, \"calculate\": 4, \"mythsAndLegends\": 3, \"trade\": 4, \"medicineIllnes\": 4, \"medicineWound\": 2, \"materialProcessing\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "knight", 230, "{\"agility\": 13, \"constitution\": 13, \"physicalStrength\": 13}", "{\"languagesAndWritings\": 10, \"specialAbilities\": [{\"talentSpecialisation\": \"riding\"}, \"loadFamiliarization1\", \"feint1\", \"mightyBlow1\"]}", "{\"lance\": 10, \"brawl\": 8, \"sword\": 12, \"twohandedSword\": 10, \"some\": {\"count\": 1, \"items\": [\"chopWeapons\", \"chainWeapons\", \"twohandedChopWeapons\"], \"value\": 10}}", "{\"bodyControl\": 3, \"strenuousEffort\": 5, \"riding\": 8, \"selfControl\": 4, \"etiquette\": 6, \"knowledgeOfHumanNature\": 2, \"willPower\": 3, \"historyKnowledge\": 2, \"godsAndCults\": 4, \"artOfWar\": 4, \"mythsAndLegends\": 5}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "sailor", 173, "{}", "{\"languages\": {\"experience\": 10}, \"specialAbilities\": [{\"talentSpecialisation\": \"boatsAndShips\"}]}", "{\"dagger\": 8, \"brawl\": 8, \"sword\": 8}", "{\"bodyControl\": 5, \"climbing\": 5, \"swimming\": 7, \"carouse\": 4, \"knowledgeOfHumanNature\": 2, \"convincing\": 2, \"bonding\": 7, \"fishing\": 4, \"orientation\": 5, \"zoology\": 2, \"wildlifeLiving\": 3, \"geography\": 4, \"godsAndCults\": 4, \"mythsAndLegends\": 5, \"boatsAndShips\": 7, \"woodWorking\": 4, \"materialProcessing\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "mercenary", 202, "{\"intuition\": 13, \"constitution\": 13, \"physicalStrength\": 13}", "{\"languages\": {\"experience\": 6}, \"specialAbilities\": [{\"talentSpecialisation\": \"artOfWar\"}, \"loadFamiliarization1\", \"attention\", \"mightyBlow1\"]}", "{\"crossbow\": 10, \"brawl\": 10, \"some\": {\"count\": 1, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\", \"twohandedSword\", \"twohandedChopWeapons\"], \"value\": 10}}", "{\"bodyControl\": 3, \"strenuousEffort\": 3, \"selfControl\": 4, \"carouse\": 5, \"knowledgeOfHumanNature\": 2, \"convincing\": 3, \"orientation\": 4, \"wildlifeLiving\": 3, \"godsAndCults\": 3, \"artOfWar\": 6, \"mythsAndLegends\": 5, \"trade\": 3, \"medicineWound\": 4}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "spy", 230, "{}", "{\"languagesAndWritings\": {\"experience\": 16}, \"specialAbilities\": [{\"talentSpecialisation\": \"hiding\"}]}", "{\"dagger\": 12, \"brawl\": 10}", "{\"sensoryAcuity\": 7, \"pickpocketing\": 5, \"hiding\": 8, \"alleyKnowledge\": 6, \"knowledgeOfHumanNature\": 6, \"convincing\": 6, \"jacket\": 8, \"willPower\": 5, \"orientation\": 3, \"godsAndCults\": 3, \"calculate\": 4, \"justiceLore\": 4, \"mythsAndLegends\": 2, \"trade\": 3, \"pickLocks\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "tribesman", 289, "{\"intuition\": 13, \"agility\": 13, \"physicalStrength\": 13}", "{\"languages\": {\"experience\": 4}, \"specialAbilities\": [{\"talentSpecialisation\": \"daunt\"}, \"attention\", \"feint1\", \"mightyBlow1\"]}", "{\"bow\": 10, \"brawl\": 12, \"some\": {\"count\": 1, \"items\": [\"chopWeapons\", \"sword\", \"spearWeapons\", \"twohandedChopWeapons\", \"twohandedSword\"], \"value\": 12}}", "{\"climbing\": 4, \"bodyControl\": 6, \"strenuousEffort\": 4, \"selfControl\": 5, \"sensoryAcuity\": 5, \"hiding\": 5, \"daunt\": 7, \"trackSeeking\": 4, \"orientation\": 4, \"botany\": 3, \"zoology\": 3, \"wildlifeLiving\": 4, \"godsAndCults\": 2, \"mythsAndLegends\": 4, \"medicineWound\": 4, \"woodWorking\": 4, \"leatherWorking\": 3}", "{}", "{}")
		');

		$results[] = query_raw('
			INSERT INTO `professions` (`parent`, `name`, `experiencePoints`, `prerequisites`, `specialAbilities`, `fightingSkills`, `talents`, `spells`, `liturgies`) VALUES (0, "stray", 212, "{}", "{\"languages\": {\"experience\": 6}, \"specialAbilities\": [{\"talentSpecialisation\": \"alleyKnowledge\"}]}", "{\"dagger\": 10, \"brawl\": 12, \"some\": {\"count\": 1, \"items\": [\"crossbow\", \"throwingWeapons\"], \"value\": 10}}", "{\"climbing\": 3, \"bodyControl\": 2, \"selfControl\": 2, \"sensoryAcuity\": 4, \"pickpocketing\": 4, \"hiding\": 5, \"carouse\": 4, \"bewitch\": 3, \"alleyKnowledge\": 7, \"knowledgeOfHumanNature\": 4, \"convincing\": 4, \"jacket\": 2, \"willPower\": 4, \"orientation\": 4, \"boardGame\": 2, \"godsAndCults\": 2, \"calculate\": 4, \"justiceLore\": 3, \"mythsAndLegends\": 3, \"pickLocks\": 4}", "{}", "{}")
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            DROP TABLE professions
		');

		$results[] = query_raw('
            DELETE FROM fightingSkills WHERE code = "lance"
		');

		return !in_array(false, $results);

	}

);