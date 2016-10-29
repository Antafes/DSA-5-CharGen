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
		return 'Special abilities';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            CREATE TABLE `specialAbilities` (
                `specialAbilityId` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                `name` VARCHAR(255) NOT NULL COLLATE "utf8_bin",
                `type` ENUM("general","fate","fight") NOT NULL COLLATE "utf8_bin",
                `requirements` TEXT NOT NULL COLLATE "utf8_bin",
                `experiencePoints` INT(11) NOT NULL,
                PRIMARY KEY (`specialAbilityId`)
            )
			COLLATE="utf8_bin"
			ENGINE=InnoDB
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("analyst", "general", "{\"magicLore\": 4}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("leader", "general", "{\"artOfWar\": 4}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretAntidote", "general", "{\"alchemy\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretGlass", "general", "{\"alchemy\": 8}", 1)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretElixir", "general", "{\"alchemy\": 2}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretLovePotion", "general", "{\"alchemy\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretPorcelain", "general", "{\"alchemy\": 8}", 1)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretInvisibilityElixir", "general", "{\"alchemy\": 4}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretTransformationElixir", "general", "{\"alchemy\": 4}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretWeaponsBalsam", "general", "{\"alchemy\": 2}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretWillPotion", "general", "{\"alchemy\": 4}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretMagicPotion", "general", "{\"alchemy\": 4}", 8)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretAlgebra", "general", "{\"calculate\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretBoltan", "general", "{\"boardGame\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretHurdyGurdy", "general", "{\"woodWorking\": 8, \"metalWorking\": 8, \"specialAbilities\": [\"buildInstruments\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretElfBow", "general", "{\"woodWorking\": 12, \"species\": [\"elf\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretGaradan", "general", "{\"boardGame\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretGeometry", "general", "{\"calculate\": 8}", 1)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretCamelGame", "general", "{\"boardGame\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretSpinet", "general", "{\"woodWorking\": 8, \"metalWorking\": 8, \"specialAbilities\": [\"buildInstruments\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretStandingHarp", "general", "{\"woodWorking\": 8, \"specialAbilities\": [\"buildInstruments\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("professionalSecretClockwork", "general", "{\"mechanics\": 8, \"metalWorking\": 8}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("documentForger", "general", "{\"paintingAndDrawing\": 8, \"handicaps\": {\"blind\": -1}}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("ironWill1", "general", "{}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("ironWill2", "general", "{\"specialAbilities\": [\"ironWill1\"]}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fanLanguage", "general", "{\"etiquette\": 8, \"handicaps\": {\"blind\": -1}}", 3)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("disarmTraps", "general", "{\"mechanics\": 4, \"pickLocks\": 4}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("cheating", "general", "{\"boardGame\": 8}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("talentSpecialisation", "general", "{\"first\": 6, \"second\": 12, \"third\": 18}", -1)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fisherman", "general", "{\"fishing\": 4, \"hiding\": 4}", 3)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("foxish", "general", "{\"alleyKnowledge\": 8, \"handicaps\": {\"blind\": -1}}", 3)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("topography", "general", "{}", 15)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("guildLaw", "general", "{\"justiceLore\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("glassBlowing", "general", "{\"stoneWorking\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fencing", "general", "{\"alleyKnowledge\": 8, \"trade\": 4}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("heraldry", "general", "{\"etiquette\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("buildInstruments", "general", "{\"woodWorking+metalWorking\": 12}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("hunter", "general", "{\"rangedAttack\": 10, \"trackSeeking\": 4, \"zoology\": 4, \"hiding\": 4}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("cartography", "general", "{\"geography\": 8, \"calculate\": 4, \"paintingAndDrawing\": 4}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("lipReading", "general", "{\"sensoryAcuity\": 4, \"handicaps\": {\"blind\": -1}}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("masterOfImprovisation", "general", "{}", 10)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("locationKnowledge", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("conMan", "general", "{\"trade\": 4, \"zoology\": 8}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("collector", "general", "{\"botany\": 4, \"wildlifeLiving\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("suppressPain", "general", "{\"selfControl\": 4}", 20)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("distill", "general", "{\"alchemy\": 4, \"foodProcessing\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontOldAlaani", "general", "{\"oneOf\": [\"languageAlaani\"]}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontAngram", "general", "{\"oneOf\": [\"languageAngram\"]}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontChrmk", "general", "{\"oneOf\": [\"languageAlaani\", \"languageKemi\", \"languageRssahh\", \"languageAncientTulamidya\", \"languageZelemja\"]}", 4)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontChuchas", "general", "{\"oneOf\": [\"languageRssahh\"]}", 6)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontHolyGlyphsOfUnau", "general", "{\"oneOf\": [\"languageTulamidya\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontHjaldingRunes", "general", "{\"oneOf\": [\"languageSagaThorwalsch\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontImperialCharacters", "general", "{\"oneOf\": [\"languageAureliani\", \"languageCyclopic\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontIsdiraAndAsdhariaCharacters", "general", "{\"oneOf\": [\"languageIsdira\", \"languageAsdharia\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontKuslikCharacters", "general", "{\"oneOf\": [\"languageGarethi\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontNanduriaCharacters", "general", "{\"oneOf\": [\"languageGarethi\", \"languageBosparano\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontRogolanRunes", "general", "{\"oneOf\": [\"languageRogolan\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontThorwalRunes", "general", "{\"oneOf\": [\"languageThorwalsch\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontTrollishRoomImage", "general", "{\"oneOf\": [\"languageTrollish\"]}", 6)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontTulamidyaCharacters", "general", "{\"oneOf\": [\"languageTulamidya\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontAncientTulamidyaCharacters", "general", "{\"oneOf\": [\"languageAncientTulamidya\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("fontZhayadCharacters", "general", "{\"oneOf\": [\"languageZhayad\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingLoveStories", "general", "{\"bewitch\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingPoetry", "general", "{\"etiquette\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingInflammatoryWritings", "general", "{\"persuade\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingCrimeStories", "general", "{\"alleyKnowledge\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingNovels", "general", "{\"convincing\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingFairyTales", "general", "{\"convincing\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("writingSpecializedPublications", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAlaani1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAlaani2", "general", "{\"specialAbilities\": [\"languageAlaani1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAlaani3", "general", "{\"specialAbilities\": [\"languageAlaani2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAngram1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAngram2", "general", "{\"specialAbilities\": [\"languageAngram1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAngram3", "general", "{\"specialAbilities\": [\"languageAngram2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAsdharia1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAsdharia2", "general", "{\"specialAbilities\": [\"languageAsdharia1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAsdharia3", "general", "{\"specialAbilities\": [\"languageAsdharia2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAtak1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAtak2", "general", "{\"specialAbilities\": [\"languageAtak1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAtak3", "general", "{\"specialAbilities\": [\"languageAtak2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAureliani1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAureliani2", "general", "{\"specialAbilities\": [\"languageAureliani1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAureliani3", "general", "{\"specialAbilities\": [\"languageAureliani2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageBosparano1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageBosparano2", "general", "{\"specialAbilities\": [\"languageBosparano1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageBosparano3", "general", "{\"specialAbilities\": [\"languageBosparano2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageFjarning1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageFjarning2", "general", "{\"specialAbilities\": [\"languageFjarning1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageFjarning3", "general", "{\"specialAbilities\": [\"languageFjarning2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageGarethi1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageGarethi2", "general", "{\"specialAbilities\": [\"languageGarethi1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageGarethi3", "general", "{\"specialAbilities\": [\"languageGarethi2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageGoblin1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageGoblin2", "general", "{\"specialAbilities\": [\"languageGoblin1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageGoblin3", "general", "{\"specialAbilities\": [\"languageGoblin2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageIsdira1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageIsdira2", "general", "{\"specialAbilities\": [\"languageIsdira1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageIsdira3", "general", "{\"specialAbilities\": [\"languageIsdira2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageMohic1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageMohic2", "general", "{\"specialAbilities\": [\"languageMohic1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageMohic3", "general", "{\"specialAbilities\": [\"languageMohic2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageNujuka1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageNujuka2", "general", "{\"specialAbilities\": [\"languageNujuka1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageNujuka3", "general", "{\"specialAbilities\": [\"languageNujuka2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOgres1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOgres2", "general", "{\"specialAbilities\": [\"languageOgres1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOgres3", "general", "{\"specialAbilities\": [\"languageOgres2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOloarkh1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOloarkh2", "general", "{\"specialAbilities\": [\"languageOloarkh1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOloarkh3", "general", "{\"specialAbilities\": [\"languageOloarkh2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOloghaijan1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOloghaijan2", "general", "{\"specialAbilities\": [\"languageOloghaijan1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageOloghaijan3", "general", "{\"specialAbilities\": [\"languageOloghaijan2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRaven1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRaven2", "general", "{\"specialAbilities\": [\"languageRaven1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRaven3", "general", "{\"specialAbilities\": [\"languageRaven2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRogolan1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRogolan2", "general", "{\"specialAbilities\": [\"languageRogolan1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRogolan3", "general", "{\"specialAbilities\": [\"languageRogolan2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRssahh1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRssahh2", "general", "{\"specialAbilities\": [\"languageRssahh1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRssahh3", "general", "{\"specialAbilities\": [\"languageRssahh2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRuuz1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRuuz2", "general", "{\"specialAbilities\": [\"languageRuuz1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageRuuz3", "general", "{\"specialAbilities\": [\"languageRuuz2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageSagaThorwalsch1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageSagaThorwalsch2", "general", "{\"specialAbilities\": [\"languageSagaThorwalsch1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageSagaThorwalsch3", "general", "{\"specialAbilities\": [\"languageSagaThorwalsch2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageThorwalsch1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageThorwalsch2", "general", "{\"specialAbilities\": [\"languageThorwalsch1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageThorwalsch3", "general", "{\"specialAbilities\": [\"languageThorwalsch2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageTrollish1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageTrollish2", "general", "{\"specialAbilities\": [\"languageTrollish1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageTrollish3", "general", "{\"specialAbilities\": [\"languageTrollish2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageTulamidya1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageTulamidya2", "general", "{\"specialAbilities\": [\"languageTulamidya1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageTulamidya3", "general", "{\"specialAbilities\": [#\"languageTulamidya2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAncientTulamidya1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAncientTulamidya2", "general", "{\"specialAbilities\": [\"languageAncientTulamidya1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageAncientTulamidya3", "general", "{\"specialAbilities\": [\"languageAncientTulamidya2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageZelemja1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageZelemja2", "general", "{\"specialAbilities\": [\"languageZelemja1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageZelemja3", "general", "{\"specialAbilities\": [\"languageZelemja2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageZhayad1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageZhayad2", "general", "{\"specialAbilities\": [\"languageZhayad1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageZhayad3", "general", "{\"specialAbilities\": [\"languageZhayad2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageCyclopic1", "general", "{}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageCyclopic2", "general", "{\"specialAbilities\": [\"languageCyclopic1\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("languageCyclopic3", "general", "{\"specialAbilities\": [\"languageCyclopic2\"]}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("imitateAnimalSounds", "general", "{\"zoology\": 4}", 5)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("pottery", "general", "{\"stoneWorking\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("weatherForecast", "general", "{\"wildlifeLiving\": 4}", 2)
		');

		$results[] = query_raw('
			INSERT INTO `specialAbilities` (`name`, `type`, `requirements`, `experiencePoints`) VALUES ("numberMysticism", "general", "{\"calculate\": 8, \"mythsAndLegends\": 4}", 2)
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
            DROP TABLE specialAbilities
		');

		return !in_array(false, $results);

	}

);