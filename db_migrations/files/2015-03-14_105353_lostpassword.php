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
		return 'Lost password function';
	},

	'up' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "email", "Email", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "lostPassword", "Passwort vergessen?", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "retrievePassword", "Passwort anfordern", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "emailAlreadyInUse", "Die E-Mail-Adresse wird bereits verwendet.", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "lostPasswordSubject", "Passwort zurücksetzen", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "lostPasswordMessage", "<p>Hallo ##USER##,</p>\r\n<p>du hast ein neues Passwort angefordert.</p>\r\n<p>neues Passwort: ##PASSWORD##</p>\r\n<p>Grüße,</p>\r\n<p>das DSA Schmiede Team</p>", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "emptyEmail", "Es wurde keine E-Mail-Adresse eingegeben.", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "lostPasswordNoUserFound", "Es wurde kein Benutzer mit der angegebenen E-Mail-Adresse gefunden.", 0)
		');

		$results[] = query_raw('
			INSERT INTO `translations` (`languageId`, `key`, `value`, `deleted`) VALUES (1, "lostPasswordMailSent", "Es wurde eine E-Mail mit einem neuen Passwort verschickt.", 0)
		');

		$sql = '
			SELECT
				`userId`,
				`password`,
				`salt`
			FROM users
		';
		$users = query($sql, true);

		foreach ($users as $user)
		{
			$password = '$m5$'.$user['salt'].'$'.$user['password'];
			$sql = '
				UPDATE users
				SET password = '.sqlval($password).'
				WHERE `userId` = '.sqlval($user['userId']).'
			';
			$results[] = !!query($sql);
		}

		$results[] = query_raw('
			ALTER TABLE `users`
				DROP COLUMN `salt`
		');

		return !in_array(false, $results);

	},

	'down' => function ($migration_metadata) {

		$results = array();

		$results[] = query_raw('
			DELETE FROM `translations`
			WHERE `key` = "email"
				OR `key` = "lostPassword"
				OR `key` = "retrievePassword"
				OR `key` = "emailAlreadyInUse"
				OR `key` = "lostPasswordSubject"
				OR `key` = "lostPasswordMessage"
				OR `key` = "emptyEmail"
				OR `key` = "lostPasswordNoUserFound"
				OR `key` = "lostPasswordMailSent"
		');

		$results[] = query_raw('
			ALTER TABLE `users`
				ADD COLUMN `salt` VARCHAR(255) NOT NULL COLLATE "utf8_bin" AFTER `password`
		');

		$sql = '
			SELECT
				`userId`,
				`password`
			FROM users
		';
		$users = query($sql, true);

		foreach ($users as $user)
		{
			$passwordParts = explode('$', $user['password']);
			$sql = '
				UPDATE users
				SET password = '.sqlval($passwordParts['3']).',
					salt = '.sqlval($passwordParts['2']).'
				WHERE `userId` = '.sqlval($user['userId']).'
			';
			$results[] = !!query($sql);
		}

		return !in_array(false, $results);

	}

);