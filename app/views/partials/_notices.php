<?php

/**
 * Notices
 *
 * Partial for displaying notices
 *
 * @package Teepee
 * @author Lumivient <lumivient@proton.me>
 * @since v1.3.0
 */

namespace Lumivient\Teepee;

global $notices;

if (isset($notices)) {
	foreach($notices as $notice) {
		echo '<div class="notice">'.$notice.'</div>';
	}
}
