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
		return 'Fighting and fate special abilities';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("attention", "fight", "{\"intuition\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("loadFamiliarization1", "fight", "{\"constitution\": 13}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("loadFamiliarization2", "fight", "{\"constitution\": 15, \"specialAbilities\": [\"loadFamiliarization1\"]}", 35)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("ambidextrousFight1", "fight", "{\"agility\": 13}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("ambidextrousFight2", "fight", "{\"agility\": 15, \"specialAbilities\": [\"ambidextrousFight1\"]}", 35)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("mountedCombat", "fight", "{\"riding\": 10}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("mountedShooter", "fight", "{\"specialAbilities\": [\"mountedCombat\"]}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("oneHandedFight", "fight", "{\"agility\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("disarm", "fight", "{\"agility\": 15}", 40)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("enemyGrasp", "fight", "{\"intuition\": 15}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("feint1", "fight", "{\"agility\": 13}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("feint2", "fight", "{\"agility\": 15, \"specialAbilities\": [\"feint1\"]}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("feint3", "fight", "{\"agility\": 17, \"specialAbilities\": [\"feint2\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("grabHandle", "fight", "{}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("hammerStroke", "fight", "{\"courage\": 15, \"specialAbilities\": [\"advance\", \"mightyBlow3\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("combatReflexes1", "fight", "{\"intuition\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("combatReflexes2", "fight", "{\"intuition\": 15, \"specialAbilities\": [\"combatReflexes1\"]}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("combatReflexes3", "fight", "{\"intuition\": 17, \"specialAbilities\": [\"combatReflexes2\"]}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("bladeCatcher", "fight", "{\"agility\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("crossBlock", "fight", "{\"agility\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("lanceAttack", "fight", "{\"courage\": 13, \"specialAbilities\": [\"mountedCombat\"]}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("preciseShotThrow1", "fight", "{\"intuition\": 13}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("preciseShotThrow2", "fight", "{\"intuition\": 15, \"specialAbilities\": [\"preciseShotThrow1\"]}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("preciseShotThrow3", "fight", "{\"intuition\": 17, \"specialAbilities\": [\"preciseShotThrow2\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("preciseStab1", "fight", "{\"agility\": 13}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("preciseStab2", "fight", "{\"agility\": 15, \"specialAbilities\": [\"preciseStab1\"]}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("preciseStab3", "fight", "{\"agility\": 17, \"specialAbilities\": [\"preciseStab2\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("riposte", "fight", "{\"agility\": 15}", 40)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("sweepingBlow1", "fight", "{\"agility\": 15}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("sweepingBlow2", "fight", "{\"agility\": 17, \"specialAbilities\": [\"sweepingBlow1\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("shieldSplitter", "fight", "{\"physicalStrength\": 13, \"specialAbilities\": [\"mightyBlow1\"]}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("quickLoadingCrossbow", "fight", "{\"dexterity\": 13}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("quickLoadingBow", "fight", "{\"dexterity\": 13}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("quickLoadingThrowingWeapons", "fight", "{\"dexterity\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("pullFast", "fight", "{\"dexterity\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("assault", "fight", "{\"courage\": 13, \"specialAbilities\": [\"advance\", \"mightyBlow1\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("deathStrike", "fight", "{\"courage\": 15, \"specialAbilities\": [\"preciseStab3\", \"advance\"]}", 30)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improvedDodge1", "fight", "{\"bodyControl\": 4}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improvedDodge2", "fight", "{\"bodyControl\": 8, \"specialAbilities\": [\"improvedDodge1\"]}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improvedDodge3", "fight", "{\"bodyControl\": 12, \"specialAbilities\": [\"improvedDodge2\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("defensiveStance", "fight", "{\"intuition\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("advance", "fight", "{\"agility\": 13}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("mightyBlow1", "fight", "{\"physicalStrength\": 13}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("mightyBlow2", "fight", "{\"physicalStrength\": 15, \"specialAbilities\": [\"mightyBlow1\"]}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("mightyBlow3", "fight", "{\"physicalStrength\": 17, \"specialAbilities\": [\"mightyBlow2\"]}", 25)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("throw", "fight", "{\"agility\": 13, \"specialAbilities\": [\"grabHandle\"]}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("bringDown", "fight", "{\"physicalStrength\": 13}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improveAttack", "fate", "{}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improveDodge", "fate", "{}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improveAttribute", "fate", "{}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improveRangedAttack", "fate", "{}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improveParry", "fate", "{}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("improveAlertness", "fate", "{}", 10)
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            DELETE FROM specialAbilities WHERE type IN ("fight", "fate")
		');

		return !in_array(false, $results);

	}

);