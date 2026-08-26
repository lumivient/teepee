<?php

/**
 * AppHelper
 *
 * Functions related to Teepee core
 *
 * @package Teepee
 * @author Lumivient <lumivient@proton.me>
 * @since v1.4.0
 */

namespace Lumivient\Teepee;

class AppHelper {

	/**
	 * get_version
	 *
	 * @since 1.4.0
	 *
	 * @return string Teepee's current version, from `version` file
	 */

	public static function get_version() {
		return (file_exists(TEEPEE_PATH.'/version')) ? file_get_contents(TEEPEE_PATH.'/version') : '';
	}

}
