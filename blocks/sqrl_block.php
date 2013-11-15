<?php

/**
 * Secure QR Login generator
 *
 * This file holds the functions driving the Secure QR Login block
 *
 * @copyright	Isengard.biz
 * @license		GNU General Public License V2 or higher version http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @author		Simon Wilkinson (Madfish)
 * @since		1.0
 * @package		Login
 * @version		$Id$
 */

function sqrl_show($options) {
	
	// Include QR code library (must support at least version 13, which can hold 259 alpha-numeric characters with high quality error correction)
	/*include ICMS_ROOT_PATH . "/modules/login/include/phpqrcode/qrlib.php";	
	
	$block = array();
	$nonce = '';

	// Generate a QR code containing i) the site URL for processing SQRL and ii) a nonce
	if(function_exists('openssl_random_pseudo_bytes')) {
		$nonce = base64_encode(openssl_random_pseudo_bytes(128, $strong));
		if($strong == TRUE) {
			$nonce = substr($nonce, 0, 128); // base64 is about 33% longer, so we need to truncate the result
		} else {
			echo _MB_LOGIN_WEAK_ALGORITHM_ERROR;
			exit;
		}
	} else {
		echo _MB_LOGIN_OPEN_SSL_REQUIRED_ERROR;
		exit;
	}
	$block['url'] = ICMS_URL . '/modules/login/sqrl.php?nonce=' . $nonce;
	QRcode::png($block['url'], "sqrl-block.png", "H", 4, 4);
	$block['sqrl'] = ICMS_URL . '/modules/login/sqrl.png'; // Target URL for handling cryptographic challenge
	*/
	
	$block = array();
	$block['sqrl'] = '<img src="include/sqrl.php" />';
	return $block;
}

function sqrl_edit($options) {
	$form = '';
	return $form;
}