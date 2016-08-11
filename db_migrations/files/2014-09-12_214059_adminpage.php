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
		return 'Admin page';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "index", "Startseite")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "index", "Index", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "userId", "Benutzernummer")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "userId", "User number", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "status", "Status")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "status", "Status", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "activate", "aktivieren")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "activate", "activate", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "removeAdmin", "entfernen")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "removeAdmin", "remove", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "setAdmin", "setzen")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "setAdmin", "set", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`) VALUES (1, "active", "aktiv")
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (2, "active", "active", 0)
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		return true;

	}

);