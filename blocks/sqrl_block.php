<?php

/**
 * Functions for displaying and eding the Secure QR Login block
 *
 * @copyright	Isengard.biz
 * @license		GNU General Public License V2 or higher version http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @author		Simon Wilkinson (Madfish)
 * @since		1.0
 * @package		Login
 * @version		$Id$
 */

function sqrl_show($options) {
	// Include QR code library (must support at least version 13, which can hold 259 alpha-numeric 
	// characters with high quality error correction)
	include ICMS_ROOT_PATH . "/modules/login/include/phpqrcode/qrlib.php";	
	$block = array('sqrl' => '<img src="' . ICMS_URL . '/modules/login/include/sqrl.php" />');
	return $block;
}

function sqrl_edit($options) {
	$form = '';
	return $form;
}