<?php

/**
 * Login
 *
 * View for password prompt
 *
 * @package Teepee
 * @author Lumivient <lumivient@proton.me>
 * @since v1.3.0
 */

namespace Lumivient\Teepee;

global $config;

// Header partial
require TEEPEE_PATH.'app/views/partials/_header.php';

echo '<h1>'.$data['title'].'</h1>';

// Show notices
require TEEPEE_PATH.'app/views/partials/_notices.php';

?>

<form method="post">
	<input type="password" placeholder="<?=__('password');?>" name="password" required autofocus>
	<button type="submit"><?=__('submit');?></button>
</form>
<?php require TEEPEE_PATH.'app/views/partials/_footer.php';?>
