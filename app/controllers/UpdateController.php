<?php

/**
 * Update
 *
 * Manages update checks
 *
 * @package Teepee
 * @author Lumivient <lumivient@proton.me>
 * @since v1.4.0
 */

namespace Lumivient\Teepee;

class UpdateController {

	public function __construct() {

		// Set version check frequency to a week
		$_SESSION['version_check_frequency'] = 604800;

		// If never checked or latest version not known, set last update timestamp to unix epoch
		if (!isset($_SESSION['last_update_check']) || !isset($_SESSION['latest_version'])) $_SESSION['last_update_check'] = 0;

		// If update frequency has passed, get latest version & reset last update timestamp
		if (time() - $_SESSION['last_update_check'] > $_SESSION['version_check_frequency']) {

			// Reset last update check
			$_SESSION['last_update_check'] = time();

			// Get current version
			$_SESSION['current_version'] = file_get_contents(TEEPEE_PATH.'/version');

			// Get latest version, supressing errors
			// Don't hound users to update, just let it fail silently until they have a connection
			$_SESSION['latest_version'] = @file_get_contents('https://rawgit.com/lumivient/teepee/master/version');

		}

		// If latest version is higher than current version, show notice
		if (version_compare($_SESSION['current_version'], $_SESSION['latest_version'], 'lt')) {
			$GLOBALS['notices'][] = 'Version '.$_SESSION['latest_version'].' available. <a href="https://github.com/lumivient/teepee/archive/master.zip">Download now</a>';
		}

	}

}
