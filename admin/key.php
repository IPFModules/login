<?php
/**
 * Admin page to manage keys
 *
 * List, add, edit and delete key objects
 *
 * @copyright	Copyright Simon Wilkinson (Madfish) 2013
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @since		1.0
 * @author		Simon Wilkinson (Madfish) <simon@isengard.biz>
 * @package		login
 * @version		$Id$
 */

/**
 * Edit a Key
 *
 * @param int $key_id Keyid to be edited
*/
function editkey($key_id = 0) {
	global $login_key_handler, $icmsModule, $icmsAdminTpl;

	$keyObj = $login_key_handler->get($key_id);

	if (!$keyObj->isNew()){
		$icmsModule->displayAdminMenu(0, _AM_LOGIN_KEYS . " > " . _CO_ICMS_EDITING);
		$sform = $keyObj->getForm(_AM_LOGIN_KEY_EDIT, "addkey");
		$sform->assign($icmsAdminTpl);
	} else {
		$icmsModule->displayAdminMenu(0, _AM_LOGIN_KEYS . " > " . _CO_ICMS_CREATINGNEW);
		$sform = $keyObj->getForm(_AM_LOGIN_KEY_CREATE, "addkey");
		$sform->assign($icmsAdminTpl);

	}
	$icmsAdminTpl->display("db:login_admin_key.html");
}

include_once "admin_header.php";

$login_key_handler = icms_getModuleHandler("key", basename(dirname(dirname(__FILE__))), "login");
/** Use a naming convention that indicates the source of the content of the variable */
$clean_op = "";
/** Create a whitelist of valid values, be sure to use appropriate types for each value
 * Be sure to include a value for no parameter, if you have a default condition
 */
$valid_op = array ("mod", "changedField", "addkey", "del", "view", "");

if (isset($_GET["op"])) $clean_op = htmlentities($_GET["op"]);
if (isset($_POST["op"])) $clean_op = htmlentities($_POST["op"]);

/** Again, use a naming convention that indicates the source of the content of the variable */
$clean_key_id = isset($_GET["key_id"]) ? (int)$_GET["key_id"] : 0 ;

/**
 * in_array() is a native PHP function that will determine if the value of the
 * first argument is found in the array listed in the second argument. Strings
 * are case sensitive and the 3rd argument determines whether type matching is
 * required
*/
if (in_array($clean_op, $valid_op, TRUE)) {
	switch ($clean_op) {
		case "mod":
		case "changedField":
			icms_cp_header();
			editkey($clean_key_id);
			break;

		case "addkey":
			$controller = new icms_ipf_Controller($login_key_handler);
			$controller->storeFromDefaultForm(_AM_LOGIN_KEY_CREATED, _AM_LOGIN_KEY_MODIFIED);
			break;

		case "del":
			$controller = new icms_ipf_Controller($login_key_handler);
			$controller->handleObjectDeletion();
			break;

		case "view" :
			$keyObj = $login_key_handler->get($clean_key_id);
			icms_cp_header();
			$keyObj->displaySingleObject();
			break;

		default:
			icms_cp_header();
			$icmsModule->displayAdminMenu(0, _AM_LOGIN_KEYS);
			$objectTable = new icms_ipf_view_Table($login_key_handler);
			$objectTable->addColumn(new icms_ipf_view_Column("uid"));
			$objectTable->addIntroButton("addkey", "key.php?op=mod", _AM_LOGIN_KEY_CREATE);
			$icmsAdminTpl->assign("login_key_table", $objectTable->fetch());
			$icmsAdminTpl->display("db:login_admin_key.html");
			break;
	}
	icms_cp_footer();
}
/**
 * If you want to have a specific action taken because the user input was invalid,
 * place it at this point. Otherwise, a blank page will be displayed
 */