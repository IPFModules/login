<?php
/**
* Process SQRL logins
*
* @copyright	Copyright Simon Wilkinson (Madfish) 2013
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
* @package		login
* @version		$Id$
*/

include_once "header.php";
$xoopsOption["template_main"] = "login_key.html";
include_once ICMS_ROOT_PATH . "/header.php";

////////////////////////////////////////////////////////////
//////////////////// Process SQRL login ////////////////////
////////////////////////////////////////////////////////////

if (isset($_POST['signature'])) {

// Whitelist required parameters, sanitise and extract them

// Verify signature
	
} else {

////////////////////////////////////////////////////////////////
//////////////////// Display SQRL challenge ////////////////////
////////////////////////////////////////////////////////////////

echo '<img src="' . ICMS_URL . '/modules/login/include/sqrl.php" />';
}

include_once "footer.php";